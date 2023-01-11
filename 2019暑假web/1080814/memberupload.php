<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員註冊</title>
</head>
<body>
<?php
$id=$_POST["id"];
$password=$_POST["password"];
$birthday=$_POST["birthday"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$boy=$_POST["1"];
$girl=$_POST["0"];
$address=$_POST["address"];
$email=$_POST["email"];

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$add="INSERT INTO member(id,password,birthday,name,phone,address,email) VALUES('$id','$password','$birthday','$name','$phone','$address','$email')";
$up=mysqli_query($con,$add);
if(isset($up))
{
echo "ok";
}
mysqli_close($con);

?>
</body>
</html>