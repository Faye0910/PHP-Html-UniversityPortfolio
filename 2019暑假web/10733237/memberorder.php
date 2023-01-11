<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>訂單查看</title>
</head>

<body>
<body background="snow.jpg">
<font size="+4" face="微軟正黑體">
<table align="center" border="5" width="600" height="300">
<?php
//error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM orde");



if(mysqli_num_rows($select)==0)
{
	echo"<script>alert('目前沒有訂單喔!')
				javascript:location.href='page.php'</script>";	
}
else
{
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
		if($rs[0]==$_SESSION["id"])
		{
			
			echo "<tr><td colspan='3'>訂單編號為",$rs[1],"</td></tr>";
			echo "<tr><td>訂購商品編號為:",$rs[5],"</td>";	
			echo "<td>總金額為：",$rs[4],"</td></tr>";
			echo "<tr><td colspan='3'>　　</td></tr>";
	}
	
	}
}
?>
<tr><td colspan='3' align="center">
<input type ='button' onclick="javascript:location.href='page.php'" value="回到首頁" />
</td></tr>
</table>
</body>
</html>