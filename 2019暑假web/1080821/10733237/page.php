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
echo "你好,$_SESSION[id]　　　　";
?>
<a href="member.php"> 會員註冊</a>

<a href="sign.html">會員登入</a>
<?php
if(isset ($_SESSION["id"]))
 {
echo"<a href='signout.php'>會員登出</a>";
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
<div style="border:3px #FFFF33 dashed ; float:left;width:200px;height:300px; background:#F93; text-align-last:center">
<?php
if(isset ($_SESSION["id"]))
echo"<a href='modify.php'>修改會員資料</a>";
 ?>
<br><br>
<a href="clothes/clothes.php">上衣</a>　||　褲子<br>
裙子　||　包包<br>
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
</tr>
</table>
</div>
</font>
</body>
</html>