<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登出</title>
</head>

<body>
<body background="snow.jpg">
<font size="+3">
<?php
error_reporting(0);
session_start();
if($_session["id"]==""||$_session["password"]=="")
{
	echo"<div align=center>還沒登入喔!</div></font>";
}
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select="SELECT * FROM member WHERE id='$_session[id]',password='$_session[password]'";
$data=mysqli_query($con,$select);
unset($_SESSION["$data"]);
header("http://localhost:8080/page.html");
?>
</body>
</html>