<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員登入</title>
</head>

<body>
<?php
error_reporting(0);
session_start();
$_session["id"]=$_POST["id"];
$_session["password"]=$_POST["password"];

if($_session["id"]==""||$_session["password"] =="")
{
	echo "請勿輸入空值";
	
}
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select="SELECT * FROM member WHERE id='$_session[id]',password='$_session[password]'";
$data=mysqli_query($con,$select);
if(!isset($_SESSION["$data"]))
{
	echo"登入成功<a href='http://localhost:8080/page.html'> 回主頁</a>";
}
else
{
	echo"登入失敗<a href='http://localhost:8080/sign.html'> 回登入頁</a>";
}
mysqli_close($con);
?>

</body>
</html>