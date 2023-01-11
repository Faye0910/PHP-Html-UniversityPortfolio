<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改會員資料</title>
</head>

<body>
<body background="snow.jpg">
<form action="modifyfinsh.php" method="post">
<?php
error_reporting(0);
session_start();
if($_SESSION["id"]==""||$_SESSION["password"]=="")
{
	echo"<div align=center>還沒登入喔!</div>";
}
else
{
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"shop");
	mysqli_query($con,"SET NAMES 'UTF8'");
	$select=mysqli_query($con,"SELECT * FROM member WHERE id=$_SESSION[id]");
	
	$rs=mysqli_fetch_row($select);
?>

<table width="700" border="5" style="text-align:center" bgcolor="#FFFF99" align="center">

<tr><td colspan="2">您的帳號為<?php echo "$_SESSION[id]" ?></td>
</tr>

<tr><td>密碼</td> 
<td><input type="text" name="password" value="<?php echo "$_SESSION[password]" ?>" /></td>
</tr>

<tr><td>生日</td>  
<td><input  type="date" name="birthday" value="<?php echo "$rs[2]" ?>" /></td>
</tr>

<tr><td>姓名</td>
<td><input type="text" name="name" value="<?php echo "$rs[3]" ?>" /></td>
</tr>

<tr><td>手機號碼</td> 
<td><input type="text" name="phone" value="<?php echo "$rs[4]" ?>" /></td>

<tr><td>性別</td> 
<td><input type="radio" name="sex" value="男" checked="<?php if($rs[5]=="男")echo"checked"; ?>" />男
<input type="radio" name="sex" value="女"  checked="<?php if($rs[5]=="女")echo"checked"; ?>"/>女</td>
</tr>

<tr><td>地址</td> 
<td><input type="text" name="address" value="<?php echo "$rs[6]" ?>"/></td>
</tr>

<tr><td>email</td> 
<td><input type="email" name="email" value="<?php echo "$rs[7]" ?>" /></td> 
</tr>

<tr><td colspan="2"><input type="submit" value="確認修改" name="ok" />
<?php } ?>
</form>
</body>
</html>