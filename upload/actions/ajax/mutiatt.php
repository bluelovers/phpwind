<?php
!defined('P_W') && exit('Forbidden');

$out = 'var att = {';
$del = array();
$query = $db->query("SELECT aid,name,size,attachurl,uploadtime FROM pw_attachs WHERE tid='0' AND pid='0' and mid = '0' AND uid=" . pwEscape($winduid) . ' ORDER BY aid');
while ($rt = $db->fetch_array($query)) {
	$rt['uploadtime'] = get_date($rt['uploadtime']);

	if (file_exists($attachdir . '/mutiupload/' . $rt['attachurl'])) {
		$out .= "'{$rt[aid]}' : ['$rt[name]', '$rt[size]', '$attachpath/mutiupload/$rt[attachurl]', '$rt[uploadtime]'],";
	} else {
		$del[] = $rt['aid'];
	}
}
if ($del) {
	$db->update("DELETE FROM pw_attachs WHERE aid IN(" . pwImplode($del) . ')');
}
$out = rtrim($out, ',') . "}";
echo "ok\t$out";
ajax_footer();
