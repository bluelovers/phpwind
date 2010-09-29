<?php
!defined('P_W') && exit('Forbidden');

PostCheck();
InitGP(array(
	'fuid'
), 'GP', 2);
$ckuser = $db->get_value("SELECT m.username FROM pw_friends f LEFT JOIN pw_members m ON f.uid=m.uid WHERE f.uid=" . pwEscape($fuid) . " AND f.friendid=" . pwEscape($winduid));
if ($ckuser) {
	$db->update('DELETE FROM pw_friends WHERE uid=' . pwEscape($fuid) . " AND friendid=" . pwEscape($winduid));
	
	$userService = L::loadClass('UserService', 'user'); /* @var $userService PW_UserService */
	$user = $userService->get($fuid);
	$user['f_num'] > 0 && $userService->updateByIncrement($fuid, array(), array('f_num' => -1));
	
	$ckuser2 = $db->get_value("SELECT friendid FROM pw_friends WHERE uid=" . pwEscape($winduid) . " AND friendid=" . pwEscape($fuid));
	if ($ckfuid2) {
		$db->update('DELETE FROM pw_friends WHERE uid=' . pwEscape($winduid) . " AND friendid=" . pwEscape($fuid));
		$user = $userService->get($winduid);
		$user['f_num'] > 0 && $userService->updateByIncrement($winduid, array(), array('f_num' => -1));
	}

	M::sendNotice(
		array($ckuser),
		array(
			'title' => getLangInfo('writemsg','friend_delete_title',array('username'=>$windid)),
			'content' => getLangInfo('writemsg','friend_delete_content',array('uid'=>$winduid,'username'=>$windid)),
		)
	);
	Showmsg('friend_delete');
} else {
	Showmsg('undefined_action');
}
