<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>取得資料</title>
</head>

<body>
<body background="cat.jpg" />
<p align="center" >
<form action="add.php" method="post">
<table width="600" border="5"  style="text-align:center" align="center">
<tr><td><font size="+5" face="微軟正黑體" >填寫學生資料</font><img src="123.gif" ; style=" margin:auto" /></td></tr>
<tr><td>請輸入學號<input  name="id" type="number" min="1" /><br><br></td></tr>
<tr><td>請輸入姓名<input type="text" name="name" /><br><br></td></tr>
<tr><td>請輸入班級<input type="text" name="class" /><br><br></td></tr>
<tr><td><input type="submit" value="確定" name="a" />

<?php
error_reporting(0);
$id=$_POST["id"];
$name=$_POST["name"];
$class=$_POST["class"];
$con = mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"eva");
mysqli_query($con,"SET NAMES 'UTF8'");
$sql ="INSERT INTO 學生資料(學號,姓名,班級) VALUES ('$id','$name','$class')";
$result=mysqli_query($con,$sql);

if(isset ($_POST["a"]))
{
	echo "已送出資料了喔~";
}
mysqli_close($con);
?>
</body>
</form>
<br>
<form action="display.php" method="post">
<input type="submit" value="顯示">
</form>

</body>
</html>