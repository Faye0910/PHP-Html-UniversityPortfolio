<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 商品狀況</title>
</head>

<body>
<body background="snow.jpg">
<table border="3" align="center" bgcolor="#FFFFFF">
<div align="center">
<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM product");

?>
<tr><td>編號</td>
<td>種類</td>
<td>顏色</td>
<td>價錢</td>
<td>數量</td></tr>
<?php
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);?>

        <tr>
		<td><?php echo "$rs[0]" ?></td>
		<td><?php echo "$rs[1]" ?></td>
		<td><?php echo "$rs[2]" ?></td>
		<td><?php echo "$rs[3]" ?></td>
		<td><?php echo "$rs[4]" ?></td>
		</tr>
        

<?php
	}
?>
<input type ="button" onclick="javascript:location.href='admin.php'" value="回到管理頁面">
</body>
</html>