<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>刪除會員</title>
</head>

<body>
<body background="snow.jpg">

<div align="center">
<?php
error_reporting(0);
session_start();
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM member");
?>
<form action="delete.php" method="post">
<select id="pro" name="pro">
  	 <option>帳號</option>
     <option>密碼</option>
     <option>生日</option>
     <option>姓名</option>
     <option>性別</option>
     <option>地址</option>
     <option>email</option>
<input id="search_input" type="text" name="need2" />
  <input type="submit" value="查詢"name="search" ><form>
  
<br>
<br>
<form action="delete2.php" method="post">
請輸入想刪除的帳號<input type="text" name="need" >
<input type="submit" name="dele" value="確定">
<input type ="button" onclick="javascript:location.href='admin.php'" value="回到管理頁面"> <br><br>
<table align="center" border="5" width="600" height="300">
<tr>
<td>帳號</td>
<td>密碼</td>
<td>生日</td>
<td>姓名</td>
<td>電話</td>
<td>性別</td>
<td>地址</td>
<td>email</td></tr>
<?php
$pro=$_POST["pro"];
$need2=$_POST["need2"];
$search=$_POST["search"];
if(isset($search))
{
	if($pro=="帳號")
	$a="id";
	if($pro=="密碼")
	$a="password";
	if($pro=="生日")
	$a="birthday";
	if($pro=="姓名")
	$a="name";
	if($pro=="性別")
	$a="sex";
	if($pro=="地址")
	$a="address";
	if($pro=="email")
	$a="email";
	
	$update="SELECT *FROM `member` WHERE `$a` LIKE '%$need2%'";
	$bbb=mysqli_query($con,$update);
for($i=0;$i<mysqli_num_rows($bbb);$i++)
	{
		$rs=mysqli_fetch_row($bbb);?>
        
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
}
else
{
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
	}
?>

</form>

</div>
</body>
</html>