<?php
!defined('R_P') && exit('Forbidden');
$USCR = 'space_info';

$isGM = CkInArray($windid,$manager);
!$isGM && $groupid==3 && $isGM=1;

require_once(R_P . 'u/lib/space.class.php');
$newSpace = new PwSpace($uid);
if (!$space =& $newSpace->getInfo()) {
	Showmsg('用户不存在！');
}

$indexRight = $newSpace->viewRight('index');
$indexValue = $newSpace->getPrivacyByKey('index');
include_once(D_P . 'data/bbscache/level.php');
$newSpace->getDetailInfo();
$newSpace->initSet();
$isSpace = true;
require_once(uTemplate::printEot('user_info'));
pwOutPut();

function getOptions($options) {
	if (!$options) {
		return array();
	}
	$array = array();
	$options = explode("\n", $options);
	foreach ($options as $key => $option) {
		list($k, $v) = explode('=', $option);
		$array[$k] = $v;
	}
	return $array;
}
?>