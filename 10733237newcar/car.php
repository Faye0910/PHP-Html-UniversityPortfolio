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
	<td>價格</td>
	<td>數量</td>
    <td>刪除</td>
    <td>修改</td>
	</tr>
<form action="cardelete.php" method="post">
<?php
error_reporting(0);
session_start();
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM cart");
echo "<div align='center'>",$_SESSION["id"],"的購物車</div></font>";
if(mysqli_num_rows($select)==0)
{
	echo"<script>alert('目前沒有購買商品喔!')
				javascript:location.href='homepage.php'</script>";	
}
else
{
	
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
	
		if($rs[0]==$_SESSION["id"])
		{
			echo "<br><tr><td>",$rs[1],"</td>";
			echo "<td>",$rs[4],"</td>";
			echo "<td>",$rs[3],"</td>";
			echo "<td>",$rs[2],"</td>";
			echo "<td><input value='刪除' type='submit'></td>";
			echo "<input type='hidden' value='$rs[1]' name='hid'></form>";
				
			echo "<form action='carupdate.php' method='post'>
				<td><input value='增加數量' type='submit' name='add'>";
			echo "<input type='hidden' value='$rs[1]' name='hid'></form>";
			echo"<form action='carupdatedele.php' method='post'>
			<input value='減少數量' type='submit' name='dele'>
			<input type='hidden' value='$rs[1]' name='hid'></form></td></tr>";
				$sum=$sum+$rs[2]*$rs[3];

	}
	
	}
echo "<tr><td align='right' colspan='7' >總金額為："
,$sum,"</td></tr>
<tr><td colspan='7'>";
echo"<form action='order.php' method='post'>
<input type='submit' name='buy' value='確認購買'>";
}
?>

</form>
<input type ='button' onclick="javascript:location.href='homepage.php'" value="回到首頁" />
</td></tr>



</body>
</html>