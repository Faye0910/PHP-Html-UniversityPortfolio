<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>刪除會員</title>
</head>

<body>
<body background="snow.jpg">
<table border="3">

<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM member");
?>
<form action="delete.php" method="post">
請輸入想刪除的帳號<input type="text" name="need" >
<input type="submit" name="dele" value="確定"> <br><br>
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
		<td><?php echo "$rs[5]" ?></td>
		<td><?php echo "$rs[6]" ?></td>
		<td><?php echo "$rs[7]" ?></td>
		</tr>

<?php
	}
?>

</form>
<?php
$need=$_POST["need"];
$dele=$_POST["dele"];
if(isset ($dele))
{
		$update="DELETE FROM `member` WHERE`id`=$need";
		$up=mysqli_query($con,$update);
		echo"已經刪除成功!";
		
}
?>
</body>
</html>