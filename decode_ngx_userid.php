<?php
function nginx_userid_decode($str) {
	return  unpack('N*', base64_decode(str_replace(' ', '+', $str)));
}

$str = $_COOKIE['uid'];
$hash = $this->nginx_userid_decode($str);
$server_ip = long2ip($hash[1]);
$make_cookie_time = date("Y-m-d H:i:s", $hash[2]);
