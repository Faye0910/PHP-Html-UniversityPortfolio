<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品下架</title>
</head>

<body>
<div align="center">
<form action="Obtained.php" method="post">
     <select id="pro" name="pro">
  	 <option>衣服</option>
     <option>褲子</option>
  <input type="submit" value="查詢"name="search" ></form>

<body background="snow.jpg">
<table border="3" align="center" bgcolor="#FFFFFF">
<div align="center">

<?php
error_reporting(0);
session_start();
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM product");
?>
<tr><td>編號</td>
<td>種類</td>
<td>顏色</td>
<td>價錢</td>
<td>照片</td>
<td>商品狀況(無文字等於上架中)</td></tr>
<?php
$search=$_POST["search"];
$pro=$_POST["pro"];
if($pro=="褲子")
{
	$update="SELECT *FROM `product` WHERE `types`='$pro'";
$aa=mysqli_query($con,$update);
for($i=0;$i<mysqli_num_rows($aa);$i++)
	{
		$rs=mysqli_fetch_row($aa);?>

        <tr>
		<td><?php echo "$rs[0]" ?></td>
		<td><?php echo "$rs[1]" ?></td>
		<td><?php echo "$rs[2]" ?></td>
		<td><?php echo "$rs[3]" ?></td>
        <td><img src="<?php echo "$rs[4]" ?>" width="30" height="30" /></td>
        <td><?php echo "$rs[5]" ?></td>
        <form action="down.php" method="post">
        <td><input value='下架' type='submit' name="down">
        <input type="hidden" value=" <?php echo $rs[0];?>" name="downid">
        </form></td>
        
        <form action="up.php" method="post">
        <td><input value='上架' type='submit'name="up">
        <input type="hidden" value=" <?php echo $rs[0];?>" name="upid">
        </form></td>
		</tr>
        

<?php
	}
}
if($pro=="衣服")
{
	$update="SELECT *FROM `product` WHERE `types`='$pro'";
$aa=mysqli_query($con,$update);
for($i=0;$i<mysqli_num_rows($aa);$i++)
	{
		$rs=mysqli_fetch_row($aa);?>

        <tr>
		<td><?php echo "$rs[0]" ?></td>
		<td><?php echo "$rs[1]" ?></td>
		<td><?php echo "$rs[2]" ?></td>
		<td><?php echo "$rs[3]" ?></td>
        <td><img src="<?php echo "$rs[4]" ?>" width="30" height="30" /></td>
        <td><?php echo "$rs[5]" ?></td>
        <form action="down.php" method="post">
        <td><input value='下架' type='submit' name="down">
        <input type="hidden" value=" <?php echo $rs[0];?>" name="downid">
        </form></td>
        
        <form action="up.php" method="post">
        <td><input value='上架' type='submit'name="up">
        <input type="hidden" value=" <?php echo $rs[0];?>" name="upid">
        </form></td>
		</tr>
        

<?php
	}
}
if($pro!="褲子"&&$pro!="衣服")
{
	$update="SELECT *FROM `product` WHERE `types`='$pro'";
$aa=mysqli_query($con,$update);
for($i=0;$i<mysqli_num_rows($aa);$i++)
	{
		$rs=mysqli_fetch_row($aa);?>

        <tr>
		<td><?php echo "$rs[0]" ?></td>
		<td><?php echo "$rs[1]" ?></td>
		<td><?php echo "$rs[2]" ?></td>
		<td><?php echo "$rs[3]" ?></td>
        <td><img src="<?php echo "$rs[4]" ?>" width="30" height="30" /></td>
        <td><?php echo "$rs[5]" ?></td>
        <form action="down.php" method="post">
        <td><input value='下架' type='submit' name="down">
        <input type="hidden" value=" <?php echo $rs[0];?>" name="downid">
        </form></td>
        
        <form action="up.php" method="post">
        <td><input value='上架' type='submit'name="up">
        <input type="hidden" value=" <?php echo $rs[0];?>" name="upid">
        </form></td>
		</tr>
        

<?php
	}
}
?>
<input type ="button" onclick="javascript:location.href='admin.php'" value="回到管理頁面">
</div>
</body>
</html>