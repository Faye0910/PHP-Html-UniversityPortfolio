
<?php
error_reporting(0);
session_start();
$hid=$_POST["hid"];
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM cart");

	for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
		if($hid==$rs[1])
		{
		$update="DELETE FROM `cart` WHERE `number`='$hid'";
		$up=mysqli_query($con,$update);
		echo"<script>alert('資料已經刪除成功!');
		javascript:location.href='car.php'</script>";
		}	
		
	}
	
		
?>