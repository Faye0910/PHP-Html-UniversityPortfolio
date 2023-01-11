<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>購物首頁</title>
</head>

<body>
<body background="snow.jpg">
<?php
session_start();
?>
<font face="微軟正黑體" >
<div align="right" style="background-color:#CCC">
<?php
if(isset ($_SESSION["id"]))
echo "<font color='#0000FF' size='+1' face='微軟正黑體' >你好,$_SESSION[id]　　　　</font>";
?>

<?php
if(isset ($_SESSION["id"]))
 {
	echo"<a href='car.php'>購物車</a>";
	echo"　";
	echo "<a href='signout.php'>會員登出</a>";

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
<tr><td><a href="clothes/001.php"><img src="clothes/001.jpg" height="100" width="100"/><br></a></td>
<td><a href="clothes/002.php"><img src="clothes/002.jpg" height="100" width="100" /><br></a></td>
<td><a href="clothes/003.php"><img src="clothes/003.jpg" height="100" width="100" /><br></a></td>
</tr>
<tr>
<td><a href="clothes/004.php"><img src="clothes/004.jpg" height="100" width="100" /><br /></a></td>
<td><a href="clothes/005.php"><img src="clothes/005.jpg" height="100" width="100" /><br></a></td>
<td><a href="clothes/006.php"><img src="clothes/006.jpg" height="100" width="100" /><br></a></td>
</tr>
<tr>
<td><a href="clothes/007.php"><img src="clothes/007.jpg" height="100" width="100" /><br></a></td>
<td><a href="clothes/008.php"><img src="clothes/008.jpg" height="100" width="100" /><br></a></td>
<td><a href="clothes/009.php"><img src="clothes/009.jpg" height="100" width="100" /><br></a></td>
</tr>
<tr>
<td><a href="clothes/010.php"><img src="clothes/010.jpg" height="100" width="100" /><br></a></td>
<td><a href="pants/101.php"><img src="pants/101.jpg" height="100" width="100"/><br></a></td>
<td><a href="pants/102.php"><img src="pants/102.jpg" height="100" width="100" /><br></a></td>
</tr>
<tr>
<td><a href="pants/103.php"><img src="pants/103.jpg" height="100" width="100" /><br></a></td>
<td><a href="pants/104.php"><img src="pants/104.jpg" height="100" width="100" /><br /></a></td>
<td><a href="pants/105.php"><img src="pants/105.jpg" height="100" width="100" /><br></a></td>
</tr>
<tr>
<td><a href="pants/106.php"><img src="pants/106.jpg" height="100" width="100" /><br></a></td>
<td><a href="pants/107.php"><img src="pants/107.jpg" height="100" width="100" /><br></a></td>
<td><a href="pants/108.php"><img src="pants/108.jpg" height="100" width="100" /><br></a></td>
</tr>
<tr>
<td><a href="pants/109.php"><img src="pants/109.jpg" height="100" width="100" /><br></a></td>
<td><a href="pants/110.php"><img src="pants/110.jpg" height="100" width="100" /><br></a></td>
</tr>
</table>
</div>
</font>
</body>
</html>