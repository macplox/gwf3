<?php
chdir("../../../../");
require_once("challenge/html_head.php");
if (!GWF_User::isAdminS()) {
	echo GWF_HTML::err('ERR_NO_PERMISSION');
	return;
}
$title = "Training: WWW-Rewrites";
$solution = false;
$score = 3;
$url = "challenge/training/www/rewrite/index.php";
$creators = "Gizmore";
$tags = 'HTTP,Training';
WC_Challenge::installChallenge($title, $solution, $score, $url, $creators, $tags, true);
require_once("challenge/html_foot.php");
?>
