<?php 
session_start();
date_default_timezone_set("Asia/Taipei");//台灣時區

//-- 目前網址 --
define('NOW_URL', 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
define('NOW_HOST', 'https://'.$_SERVER['HTTP_HOST'].'/');

//-- 圖片位置 --
define('IMG_URL', 'https://img-yep.web-board.tw/');

//-- 資料庫訊息 --
define("DB_HOST", 'localhost');
define("DB_NAME", 'webboard_yep');
define("DB_USER", 'webboard_yep');
define("DB_PWD", 'IJCuRE4Z3fdu');

//-- 信箱訊息 --
define("MAILL_HOST", 'mail.web-board.tw');
define("MAILL_USER", 'server@web-board.tw');
define("MAILL_PWD", 'dqVhkEpdImSx');

//-- 加密金鑰 --
define("AES_KEY", 'srl');


/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 語系 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
if (!empty($_GET['lang'])) {
	$_SESSION['sys_weblang'] = $_GET['lang'];
}
$weblang = empty($_SESSION['sys_weblang']) ? 'tw' : $_SESSION['sys_weblang'];

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 加密金鑰 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
  $aes_key='srl'; //加密鑰匙;

?>

