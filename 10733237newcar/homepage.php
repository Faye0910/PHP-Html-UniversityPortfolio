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
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM product");
$need=$_POST["need"];
$search=$_POST["search"];
$pro=$_POST["pro"];
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
	echo "<a href='signhome.php'>會員登入</a>";
}
?>
</div>
<br/> 
<font color="#FF9900" size="+4">
<div align="center" >
<img src="pic/wellcome.gif" /><br>
<b><img src="pic/balloon.gif" />OOO商城<img src="pic/balloon.gif" /></b>
</div></font>
<br>
<br>
<div style="border:3px #FFFF33 dashed ; float:left;width:200px;height:150px; background:#F93; text-align-last:center">
<?php
if(isset ($_SESSION["id"]))
echo"<a href='modify.php'>修改會員資料</a>";

 ?>
<br><br>
<a href="clothes.php">上衣</a>　||　<a href="pants.php">褲子</a><br>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="float:right">
<form action="homepage.php" method="post">
     <select id="pro" name="pro">
  	 <option>編號</option>
     <option>顏色</option>
<input id="search_input" type="text" name="need" />
  <input type="submit" value="查詢"name="search" ><form><input type ='button' onclick="javascript:location.href='homepage.php'" value="全部商品" /></div>

<div align="center">
  <?php
  if($pro=="編號"&&$need!="")
 	include("search.php");
	if($pro=="顏色"&&$need!="")
 	include("search.php");
	?>
	</div>
    <?php
if($pro!="編號"&&$pro!="顏色")
include("homepagepro.php");
?>
</div>
</font>
</body>
</html>