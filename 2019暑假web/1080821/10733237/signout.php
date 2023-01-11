<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登出</title>
</head>

<body>
<body background="snow.jpg">
<font size="+3" face="微軟正黑體">
<?php
error_reporting(0);
session_start();
if($_SESSION["id"]==""||$_SESSION["password"]=="")
{
	echo"<div align=center>還沒登入喔!</div></font>";
}
else
{
	echo"<div align=center>已順利登出<br>帳號為:$_SESSION[id]的會員資料
	<br><a href='page.php'> 回主頁</a></div>";
	unset($_SESSION["id"]);
	unset($_SESSION["password"]);
}
?>
</body>
</html>