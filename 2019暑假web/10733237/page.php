<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>購物首頁</title>
</head>

<body>
<body background="snow.jpg">
<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM product");
session_start();
?>
<font face="微軟正黑體" >
<div align="right" style="background-color:#CCC">
<?php
if(isset ($_SESSION["id"]))
echo "<font color='#0000FF' size='+1' face='微軟正黑體' >你好,$_SESSION[id]　　　　</font>";
?>

<?php	
if($_SESSION["id"]=="abc")
		{
			echo"<a href='admin.php'>後台</a>";
			echo"　";
		}
if(isset ($_SESSION["id"]))
 {

	echo"<a href='car.php'>購物車</a>";
	echo"　";
	echo "<a href='signout.php'>會員登出</a>";
	echo"　";
	echo "<a href='memberorder.php'>會員訂單查詢</a>";

}
else
{
	echo "<a href='member.php'> 會員註冊</a>";
	echo"　";
	echo "<a href='sign.html'>會員登入</a>";
}
	?>
</div>

<br/> 
<font color="#FF9900" size="+4">
<div align="center" >
<img src="wellcome.gif" /><br>
<b><img src="balloon.gif" />OOO商城<img src="balloon.gif" /></b>
</div></font>
<br>
<br>
<div style="border:3px #FFFF33 dashed ; float:left;width:200px;height:150px; background:#F93; text-align-last:center">
<?php
if(isset ($_SESSION["id"]))
echo"<a href='modify.php'>修改會員資料</a>";
 ?>
<br><br>
<a href="clothes/clothes.php">上衣</a>　||　<a href="pants/pants.php">褲子</a><br>
</div>
<div style="float:right">
<table border="0" width="1500" height="300">
<tr>
<?php
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		
		$rs=mysqli_fetch_row($select);

        if($rs[1]=="褲子")
		{
			if($rs[6]=="")
			{
				$a++;
			?>
        <td><a href="<?php echo "001.php?a=$rs[0]"?>"> <img src="<?php echo "$rs[5]" ?>" width="100" height="100" /></a></td>
        
		<?php 
			}
		}
        if($rs[1]=="衣服")
		{
			if($rs[6]=="")
			{
				$a++;
			?>
        <td><a href="<?php echo "001.php?a=$rs[0]"?>"><img src="<?php echo "$rs[5]" ?>" width="100" height="100" /></a></td>
		<?php 
		}
		}
		if($a==2||$a==5||$a==8||$a==11||$a==14||$a==17||$a==20)
		{
		echo"</tr><tr>";
		}
        ?>
        

<?php
	}
?>

</table>
</div>
</font>
</body>
</html>