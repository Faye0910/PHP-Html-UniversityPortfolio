<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購物車</title>
</head>

<body>
<body background="snow.jpg">
<font size="+4" face="微軟正黑體">
<table width="700" border="5" style="text-align:center" align="center">
	<tr><td>商品編號</td>
	<td>品項</td>
	<td>顏色</td>
	<td>價格</td>
	<td>數量</td>
	<td>刪除</td></tr>
<form action="cardelete.php" method="post">
<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM member");
$sel=mysqli_query($con,"SELECT * FROM product");

echo "<div align='center'>",$_SESSION["id"],"的購物車</div></font>";
	
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
	$rs=mysqli_fetch_row($select);
	
	if($rs[0]==$_SESSION["id"])
	{
		$c=explode(",",$rs[8]);
		
		for($y=0;$y<10;$y++)
		{
			$r=mysqli_fetch_row($sel);
			
			if(isset ($c[$y]))
			{
				if($c[$y]!="")
				{
				echo "<br><tr><td>",$c[$y],"</td>";
				echo "<td>",$r[1],"</td>";
				echo "<td>",$r[2],"</td>";
				echo "<td>",$r[3],"</td>";
				echo "<td><input type='number' min='1' name='stock'></td>";
				echo "<td><input value='刪除' type='submit'></td></tr>";
				echo"<input type='hidden' value='$c[$y]' name='hid'>";
				}
			}
		}

	}
	
	}
	
?>
</form>
</body>
</html>