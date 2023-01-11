<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>顯示資料</title>
</head>

<body>
<body background="cat.jpg" bgcolor="#ACDBE3">

<?php
//error_reporting(0);
$con = mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"eva");
mysqli_query($con,"SET NAMES 'UTF8'");
$data=mysqli_query($con,"SELECT * FROM 學生資料");
mysqli_close($con);
?>
<table width="600" border="5"  style="text-align:center" align="center">
<tr>
<td>學號</td>
<td>姓名</td>
<td>班級</td>
</tr>

<?php 
for($i=0;$i<mysqli_num_rows($data);$i++)
{
$rs=mysqli_fetch_row($data) ?>   
<tr>
<td><?php echo $rs[0];?></td>
<td><?php echo $rs[1];?></td>
<td><?php echo $rs[2];?></td> 
</tr>
<?php
}
?>
</table>
</body>
<form>
<input type ="button" onclick="history.back()" value="回到上一頁">
</form>
</html>