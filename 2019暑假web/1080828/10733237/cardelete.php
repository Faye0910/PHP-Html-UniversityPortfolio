<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>刪除</title>
</head>

<body>
<?php
error_reporting(0);
session_start();
$hid=$_POST["hid"];
		$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"shop");
		mysqli_query($con,"SET NAMES 'UTF8'");
	$select=mysqli_query($con,"SELECT * FROM member");
$sel=mysqli_query($con,"SELECT * FROM product");
	
	for($i=0;$i<mysqli_num_rows($select);$i++)
	{
	$rs=mysqli_fetch_row($select);
	
	if($rs[0]==$_SESSION["id"])
	{
		$c=explode(",",$rs[8]);
		
		for($y=0;$y<10;$y++)
		{

		if($c[$y]!=$hid&&$c[$y]!="")
		{
		$a=$a.$c[$y];
		
		}
			
		}
		

	}
	
	}
		$update="UPDATE `member` SET `cart`='$a' WHERE`id`='$_SESSION[id]'";
		$up=mysqli_query($con,$update);

		echo"<script>alert('資料已經刪除成功!');
		javascript:location.href='car.php'</script>";
	
?>
</body>
</html>