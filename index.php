<?php
/*
 项目名称:PHP简单的登录与注册
 最后更新时间：2014/04/27
 作者：小z(http://www.zouxiuping.com/)
*/
?>

<html lang="en">
<meta charset="UTF-8">
<meta name="Author" content="">
<meta name="Keywords" content="php 源码,PHP注册,PHP登录,PHP学习">
<meta name="Description" content="一个简单的PHP注册登录程序，欢迎学习交流。">
<script language="javascript"><!-- 使用js验证 -->
	function Checked()
	{
		if(myform.email.value == "")
		{
			alert("你还没有填写登录邮箱! ");
			myform.email.focus();
			return false;
		}
		if(myform.psd.value == "")
		{
			alert("您忘记填写密码了! ");
			myform.psd.focus();
			return false;
		}
	}
</script>
<style type = "text/css">
	body
	{
		width:400px;
		height:280px;
		margin-left:auto;
		margin-right:auto;
		border:1px red solid;
	}
	#image
	{
		width:200px;
		height:80px;
		margin-top:30px;
		margin-left:auto;
		margin-right:auto;
		<!--border:1px red solid;-->
	}
</style>
<head>
<title>PHP注册与登录程序</title>
</head>
<body>
	<div id = "image"><center><img src = "header.png" /></center></div><br /><!--图片logo-->
	<center>
	<!--登录表单-->
	<form action = "login_server.php" method = "post" name = "myform" onsubmit = "return Checked();">
		<table>
			<tr>
				<td>Email:</td>
				<td><input type = "email" name = "email" /></td>
			</tr>
			<tr>
				<td>密码:</td>
				<td><input type = "password" name = "psd" /></td>
			</tr>
			<tr>
				<td><input type = "submit" name = "denglu" value = "登录" /></td>
				<td><a href = "register.php">注册</a></td>
			</tr>
		</table>
	</form>
	<!--登录表单结束-->
	</center>
</body>
</html>