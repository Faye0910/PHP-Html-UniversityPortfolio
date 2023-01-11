<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>訂單處理中</title>
</head>

<body>
<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM cart");
mysqli_query($con,"SELECT * FROM orde");
	
	for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
	
		if($rs[0]==$_SESSION["id"])
		{
				$sum=$sum+$rs[2]*$rs[3];
				$a=$a.",".$rs[1];
		}
	
	}
	
$b=rand(100,999);	
mysqli_query($con,"INSERT INTO `orde` (`uerid`,`id`,`number`,`price`) VALUES ('$_SESSION[id]','$b','$a','$sum')");
				echo"<script>alert('已購買成功')
				javascript:location.href='car.php'</script>";	



?>
</body>
</html>