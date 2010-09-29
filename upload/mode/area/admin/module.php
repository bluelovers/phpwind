<?php
!defined('P_W') && exit('Forbidden');

InitGP(array('action'));
$invokeService = L::loadClass('invokeservice', 'area');
$pageInvokeService = L::loadClass('pageinvokeservice', 'area');
$portalPageService = L::loadClass('portalpageservice', 'area');

if (!$action) {
	InitGP(array('keyword','page','alias'));
	
	$page = (int) $page;
	$page<=0 && $page =1;
	$portalPages = $portalPageService->getPortalPages();
	
	if ($alias) {
		$portalPageService->updateTemplateCache($alias); //实时更新模板
		$param['sign'] = $alias;
		$param['scr'] = $portalPageService->getSignType($alias);
	}
	if ($keyword) {
		$param['invokename'] = $keyword;
	}
	
	$ajax_basename = EncodeUrl($basename);
	$modules = $pageInvokeService->searchPageInvokes($param,$page);	
	$pages = $pageInvokeService->sreachPageInvokesPages($param,$page,$basename."&keyword=$keyword&alias=$alias&");
	include PrintMode('module');exit;
} elseif ($action=='edittpl') {
	InitGP(array('alias','invokename','step','keyword','page'));
	
	$portalPageService = L::loadClass('portalpageservice', 'area');
	$beginUrl = $basename.'&alias='.$alias.'&keyword='.$keyword.'&page='.$page;
	if (!$step) {
		$pieceCode = $portalPageService->getPiecesCode($alias,$invokename);
		include PrintMode('module');exit;
	} else {
		$moduleConfigService = L::loadClass('moduleconfigservice', 'area');
		$tagcode = $moduleConfigService->getTagCodeFromPost($_POST['tagcode']);
		if ($tagcode === false) adminmsg('模板编辑功能不支持php代码，以及一些特殊字符,如有需求，请直接修改模板文件',$beginUrl.'&action='.$action.'&invokename='.$invokename);
		$portalPageService->updateModuleCode($alias,$invokename,$tagcode);
		adminmsg('operate_success',$basename.'&alias='.$alias.'&keyword='.$keyword.'&page='.$page);
	}
} elseif ($action=='editconfig') {
	InitGP(array('alias','invokename','step','keyword','page'));
	
	$beginUrl = $basename.'&alias='.$alias.'&keyword='.$keyword.'&page='.$page;

	$portalPageService = L::loadClass('portalpageservice', 'area');
	if (!$step) {
		$aliasType = $portalPageService->getSignType($alias);
		$invokedata	= $pageInvokeService->getPageInvokeBySignAndName($alias,$invokename,$aliasType);
		ifcheck($invokedata['ifverify'],'ifverify');

		$invokepieces = $invokeService->getInvokePieceForSetConfig($invokename);
		$ajax_basename = EncodeUrl($basename);

		include PrintMode('module');exit;
	} else {
		InitGP(array('p_action','config','num','param','cachetime','ifpushonly','invokename','title'), 'P');
		InitGP(array('ifverify','pageinvokeid'),'P');
		$pageInvokeService->updatePageInvoke($pageinvokeid,array('ifverify'=>(int)$ifverify));
		$pieces	= array();
		foreach ($num as $key=>$value) {
			$temp = array();
			$temp['num']	= (int)$value;
			$temp['action']	= $p_action[$key];
			$temp['config'] = $config[$key];
			$temp['param']	= $param[$key];
			$temp['cachetime']	= $cachetime[$key];
			$temp['ifpushonly']	= (int)$ifpushonly[$key];
			$piece = $invokeService->getInvokePieceByInvokeId($key);
			$temp['title'] = $piece['title'];
			$temp['invokename'] = $invokename;
			$pieces[] = $temp;
		}
		$portalPageService->updateModuleByConfig($alias,$invokename,$pieces,$title);
		adminmsg('operate_success',$basename.'&alias='.$alias.'&keyword='.$keyword.'&page='.$page);
	}
} elseif ($action == 'source') {
	define('AJAX',1);
	InitGP(array('sourcetype','id'), 'P');
	$id = (int) $id;

	$pieceOperate = L::loadClass('pieceoperate', 'area');
	$sourceTypeConfig = $pieceOperate->getConfigHtmlBySourceType($sourcetype,$id);
	
	$result = '<table width="100%"><tbody>';
	foreach ($sourceTypeConfig as $key=>$value) {
		$result .= <<<EOT
	            <tr class="tr3">
		        	<td>$value[title] : $value[html]</td>
		        </tr>
EOT;
	}
	$result .= '</tbody></table>';

	echo $result;
	ajax_footer();
} elseif ($action =='del') {
	define('AJAX',1);
	InitGP(array('id'),'P');
	$pageInvokeService->delPageInvoke($id);
	echo getLangInfo('msg','operate_success')."\treload";
	ajax_footer();
}
?>