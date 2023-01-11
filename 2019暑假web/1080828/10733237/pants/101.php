<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>淺橘褲子</title>
</head>


<body>
<body background="../snow.jpg">
<form action="101.php" method="post">
<?php
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM product");


for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
		if($rs[0]=="101")
		{
			
			echo"<div align='center'>
			<img src='101.jpg' height='300' width='300'/><br>
			編號:$rs[0]<br>";
			echo"類型:$rs[1]<br>";
			echo"顏色:$rs[2]<br>";
			echo"價錢:$rs[3]<br>";
			echo"庫存:$rs[4]<br>
			<input type='submit' value='加入購物車' name='ok' /></div>";
			if(isset ($_POST["ok"]))
			{
				$_SESSION["N"]=$rs[0];
				$_SESSION["C"]=$rs[2];
				$_SESSION["P"]=$rs[3];
				echo"<script>alert('$rs[0]已加入購物車')
				javascript:location.href='../page.php'</script>";
			}
		}
	}
?>

</form>
</body>
</html>