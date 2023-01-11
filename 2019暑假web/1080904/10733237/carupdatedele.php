<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>減少</title>
</head>

<body>
<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM cart");
$hid=$_POST["hid"];
for($i=0;$i<mysqli_num_rows($select);$i++)
{
	$rs=mysqli_fetch_row($select);
	if($hid==$rs[1])
	{		
		if($rs[2]==1)
		{
			echo"<script>alert('數量最少為一個喔,不能再減少了!');
		javascript:location.href='car.php'</script>";

		}
		else
		{
		$a=$rs[2]-1;
		echo "$a";
		$update="UPDATE `cart` SET `qu`='$a' WHERE `number`='$hid'";
		$up=mysqli_query($con,$update);
		header("location:car.php");
		}

		

	}
	

}

?>
</body>
</html>