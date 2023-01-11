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
			$sum=$sum+$rs[3]*$rs[2];
			$item=$item.",".$rs[1];
			$pro=$pro.",".$rs[0];
			$qu=$qu.",".$rs[2];
		}
		
	
	}
	$b=rand(100,999);
	mysqli_query($con,"INSERT INTO `orde`(`uerid`,`ordernumber`,`number`, `qu`, `peice`, `item`) VALUES ('$_SESSION[id]','$b','$pro','$qu','$sum','$item')");	
				echo"<script>alert('已購買成功')
				javascript:location.href='car.php'</script>";
	



?>
</body>
</html>