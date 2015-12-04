<?php
/*
 项目名称:PHP简单的登录与注册
 最后更新时间：2014/04/27
 作者：小z(http://www.zouxiuping.com/)
*/
?>
<?php

require_once '../db/config.php';

function connectDB(){

	$conn = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW,MYSQL_DB);

	if(!$conn)
	{
		die('can not connect db');
	}

	return $conn;
}

