<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上架中</title>
</head>

<body>
<?php
//error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM product");

$up=$_POST["upid"];


for($i=0;$i<mysqli_num_rows($select);$i++)
	{
	$rs=mysqli_fetch_row($select);echo"123";
		if($up==$rs[0])
		{
			
			$update="UPDATE `product` SET `shelf`='' WHERE`number`='$rs[0]'";
			$up=mysqli_query($con,$update);
			echo"<script>alert('產品上架完成!');
		javascript:location.href='Obtained.php'</script>";
		}
		
	
	}		

?>
</body>
</html>