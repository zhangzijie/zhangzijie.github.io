<?php
header("Content-Type:text/html;charset=utf-8");
$user = $_POST['user'];
$password = $_POST['password'];

if ($user == "user" && $password == "abc123") {
	echo '<h3>下载地址</h3>';
	echo '<ul>';
	echo '<li><a href="http://download.zhangzj.com/recordings/recording-20150209-141716.mp3">recording-20150209-141716.mp3</a></li>';
	echo '<li><a href="http://download.zhangzj.com/recordings/recording-20150210-090605.mp3">recording-20150210-090605.mp3</a></li>';
	echo '<li><a href="http://download.zhangzj.com/recordings/recording-20150210-140643.mp3">recording-20150210-140643.mp3</a></li>';
	echo '</ul>';
	echo '<h4><a href="index.html">返回</a></h4>';
} else {
	echo '<h3>权限验证错误！</h3>';
	echo '<h4><a href="recordings.html">返回</a></h4>';
}
