<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>下架</title>
</head>

<body>
<?php
//error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM product");

$down=$_POST["downid"];
$a="下架";
	for($i=0;$i<mysqli_num_rows($select);$i++)
	{
	$rs=mysqli_fetch_row($select);
		if($down==$rs[0])
		{
			$update="UPDATE `product` SET `shelf`='下架' WHERE`number`='$rs[0]'";
			$up=mysqli_query($con,$update);
			echo"<script>alert('產品下架完成!');
		javascript:location.href='Obtained.php'</script>";
		}
	
	}	
?>
</body>
</html>