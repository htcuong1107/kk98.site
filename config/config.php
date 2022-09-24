<?php
$uri = $_SERVER['REQUEST_URI'];
$svname = $_SERVER['SERVER_NAME'];
// add sql
define("DATABASE", "vipapi_blink"); #tên database
define("USERNAME", "vipapi_blink"); #tài khoản database
define("PASSWORD", "vipapi_blink"); #mật khẩu database
define("LOCALHOST", "localhost"); #để nguyên không sửa
$ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
$ketnoi->query("set names 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$_SESSION['session_request'] = time();
$time = date('H:i d-m-Y');
$timec = date('d-m-Y');
$tmanh = $ketnoi;
$ten_web = $_SERVER['SERVER_NAME'];
$link_web = "https://".$_SERVER['SERVER_NAME'];
$useragent = $_SERVER['HTTP_USER_AGENT'];


function random($string, $int) {  
    return substr(str_shuffle($string), 0, $int);
}