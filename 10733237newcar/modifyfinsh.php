<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改完成</title>
</head>

<body>
<body background="snow.jpg">
<?php
error_reporting(0);
session_start();
		$password=$_POST["password"];
		$birthday=$_POST["birthday"];
		$name=$_POST["name"];
		$phone=$_POST["phone"];
		$sex=$_POST["sex"];
		$address=$_POST["address"];
		$email=$_POST["email"];
		
include("connect.php");
		$update="UPDATE `member` SET
`password`='$password',`birthday`='$birthday',`name`='$name',`phone`='$phone',`sex`='$sex',`address`='$address',`email`='$email' WHERE `id`=$_SESSION[id]";

		$up=mysqli_query($con,$update);
		
		$_SESSION["id"]=$id;
		$_SESSION["password"]=$password;
		
		echo"<script>alert('已修改完成,請重新登入');
		javascript:location.href='homepage.php'</script>";
?>
</body>
</html>