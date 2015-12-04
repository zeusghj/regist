﻿<?php
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
<head>
<title>PHP注册</title>
<style type = "text/css">
	body
	{
		width:600px;
		height:360px;
		margin-left:auto;
		margin-right:auto;
		border:1px red solid;
	}
	form
	{
		width:500px;
		height:200px;
		margin-left:auto;
		margin-right:auto;
		margin-top:30px;
		<!--border:1px red solid;-->
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

</head>
<body>

<script language = "javascript">
	function checkform()//使用JS来验证用户输入是否符合规范
	{
		if(myform.name.value == "")//昵称不能为空
		{
			alert("昵称不能为空！");
			myform.name.focus();
			return false;
		}
		if(!myform.name.value.replace([^\a-\z\A-\Z],''))//使用正则表达式来判断昵称
		{
			alert("昵称不符合规范！");
			myform.name.focus();
			return false;
		}
		if(myform.name.value.length < 4 || myform.name.value.length > 8)//当用户输入的昵称小于4或者大于8时
		{
			alert("昵称不符合规范！");
			myform.name.focus();
			return false;
		}
		if(myform.email.value == "")//邮箱不能为空
		{
			alert("邮箱必须填写！");
			myform.email.focus();
			return false;
		}
		if(myform.email.value.length < 12)//邮箱不能少于12个字符，否则不符合规范
		{
			alert("邮箱不符合规范！");
			myform.email.focus();
			return false;
		}
		if(myform.mi1.value == "")//密码不能为空
		{
			alert("密码不能为空！");
			myform.mi1.focus();
			return false;
		}
		if(myform.mi2.value == "")//密码不能为空
		{
			alert("密码不能为空！");
			myform.mi2.focus();
			return false;
		}
		if(!myform.mi2.value.replace([^\a-\z\A-\Z],''))//使用正则表达式来判断密码
		{
			alert("密码不符合规范！");
			myform.mi2.focus();
			return false;
		}
		if(myform.mi2.value.length < 6)//如果密码小于6位
		{
			alert("密码不能少于6位！");
			myform.mi2.focus();
			return false;
		}
		if(myform.mi1.value != myform.mi2.value)//判断两次输入的密码是否一致
		{
			alert("两次输入的密码不一致！");
			myform.mi2.focus();
			return false;
		}
	}
</script>

	<div id = "image"><img src = "header.png" /></div><!--加载logo-->
	<form action = "regist_server.php" method = "post" name = "myform" onsubmit = "return checkform();"><!--注册表单-->
	<center>
		<table height = 60;>
		<tr>
			<td>昵称:</td>
			<td><input type = "text" name = "name"  /><dfn>(只能由4-8位字母或数字组成)</dfn></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type = "email" name = "email"  /></td>
		</tr>
		<tr>
			<td>密码:</td>
			<td><input type = "password" name = "mi1"  /><dfn>(必须由大于6位的字母或数字组成)</dfn></td>
		</tr>
		<tr>
			<td>确认密码:</td>
			<td><input type = "password" name = "mi2"  /></td>
		</tr>
		<tr>
			<td>验证码:</td>
			<td><input type = "text" name = "image" /><img src = 'img.php' /></td>
		</tr>
		<tr>
			<td><input type = "submit" name = "sub" value = "注册" /></td>
			<td><a href = "index.php">登录</a></td>
		</tr>
		</table>
	</center>
	</form>
</body>
</html>