<?php
$need=$_POST["need"];
$dele=$_POST["dele"];
if(isset ($dele))
{
		$update="DELETE FROM `member` WHERE`id`=$need";
		$up=mysqli_query($con,$update);
		echo"<script>alert('資料已經刪除成功!');
		javascript:location.href='admin.php'</script>";
		
}
?>