<?php
require_once 'conn.php';

$conn = connectDB() ;
$email = $_POST['email'];//取得用户输入的email
$psd = $_POST['psd'];//取得用户输入的密码
$sql = "SELECT users,pass FROM deng WHERE users = '$email'";//SQL查询
$query = $conn->query($sql);//执行SQL语句
$row = $query->fetch_array();
$user = $row['users'];//将查询的结果赋值
$pass = $row['pass'];//将查询的结果赋值

if(isset($_POST['denglu']))//当用户点击登录按钮时
{
    if($user == $email && $pass == $psd)//验证用户名和密码是否一致
    {
        echo "<script>window.location= 'http://www.zouxiuping.com/';</script>";//用户名和密码一致，跳转到指定页面
    }
    else
    {
        echo "<script>alert('帐户名或密码错误！');history.go(-1)</script>";//用户名和密码不一致，跳转到当前页面重新输入
    }
}

