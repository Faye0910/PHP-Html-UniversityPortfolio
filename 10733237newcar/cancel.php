<?php
error_reporting(0);
session_start();
$hid=$_POST["hid"];
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM orde");

	for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
		if($hid==$rs[1])
		{
		$update="UPDATE `orde` SET `Shipment`='申請取消中'";
		mysqli_query($con,$update);
		echo"<script>alert('資料已經修改!');
		javascript:location.href='memberorder.php'</script>";
		}	
		
	}
?>