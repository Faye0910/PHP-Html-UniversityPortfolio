 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>訂單查看</title>
</head>

<body>
<body background="snow.jpg">
<font size="+4" face="微軟正黑體">
<div align="center">
<form action="adminorder%20.php" method="post">
<select id="pro" name="pro">
	 <option>會員</option>
  	 <option>訂單編號</option>
     <option>訂單狀況</option>
<input id="search_input" type="text" name="need2" />
  <input type="submit" value="查詢"name="search" >
</form></div>
     <br>
<table align="center" border="5" width="600" height="300">
<?php
error_reporting(0);
session_start();
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM orde");

$pro=$_POST["pro"];
$need2=$_POST["need2"];
$search=$_POST["search"];
if(mysqli_num_rows($select)==0)
{
	echo"<script>alert('目前沒有訂單喔!')
				javascript:location.href='admin.php'</script>";	
}
if(isset($search))
{
	if($pro=="訂單編號")
	$a="ordernumber";
	if($pro=="訂單狀況")
	$a="Shipment";
	if($pro=="會員")
	$a="uerid";
	$update="SELECT *FROM `orde` WHERE `$a` LIKE '%$need2%'";
	$bbb=mysqli_query($con,$update);
for($i=0;$i<mysqli_num_rows($bbb);$i++)
	{
		$rs=mysqli_fetch_row($bbb);
		echo "<tr><td colspan='2'>會員為",$rs[0],"</td><td>",$rs[6],"</td></tr>";
			echo "<tr><td colspan='2'>訂單編號為",$rs[1],"</td>
<td><input type ='button' onclick='javascript:location.href='homepage.php'' value='刪除訂單' /></td></tr>";
			echo "<tr><td>訂購商品編號為:",$rs[5],"</td>";	
			echo "<td>總金額為：",$rs[4],"</td></tr>";
			echo "<tr><td colspan='3'>　　</td></tr>";
	
	}
}
else
{


for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);

			echo "<tr><td colspan='2'>會員為",$rs[0],"</td><td>",$rs[6],"</td></tr>";
			echo "<tr><td colspan='2'>訂單編號為",$rs[1],"</td>
<td><input type ='button' onclick='javascript:location.href='homepage.php'' value='刪除訂單' /></td></tr>";
			echo "<tr><td>訂購商品編號為:",$rs[5],"</td>";	
			echo "<td>總金額為：",$rs[4],"</td></tr>";
			echo "<tr><td colspan='3'>　　</td></tr>";
	
	
	}
}
?>
<tr><td colspan='3' align="center">
<input type ='button' onclick="javascript:location.href='homepage.php'" value="回到首頁" />
</td></tr>
</table>

<?php
$need=$_POST["need"];
$dele=$_POST["dele"];
if(isset ($dele))
{
		$update="DELETE FROM `orde` WHERE`ordernumber`=$need";
		$up=mysqli_query($con,$update);
		echo"<script>alert('資料已經刪除成功!');
		javascript:location.href='001.php?a=$need'</script>";
		
}
?>

</body>
</html>