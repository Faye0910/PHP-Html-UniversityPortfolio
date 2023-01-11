<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>終極密碼</title>
</head>

<body>

<body background="fl.jpg" />
<p align="center" >
<font size="+6" face="微軟正黑體">
<font size="+5" color="#990033">終極密碼</font><br>
<font size="+3" color="#0033FF">1~100之間猜一個數</font><br>
<form action="a2.php" method="POST">
<p align="center" >
<input type="text" name="b" />
<br>
<input type="submit" value="猜" />
<input type="submit" value="重新開始" name="restart" />
<br>
</form>

<?php
error_reporting(0);
session_start();
$s=1;
$max=100;
$a=rand(1,100);
$guess=1;


if(isset($_POST["b"]))
{
	$_SESSION["guess"]=$_POST["b"];
}
else
{
	$_SESSION["guess"]=$guess;
	$_SESSION["s"]=1;
    $_SESSION["max"]=100;
}
if(isset($_SESSION["a"]))
{
	$_SESSION["a"];
}
else
{
	$_SESSION["a"]=$a;
}


if(isset($_POST["restart"]))
{
$s=1;
$max=100;
$a=rand(1,100);
$guess=1;
if(isset($_POST["b"]))
{
	$_SESSION["guess"]=$_POST["b"];
	$_SESSION["s"]=1;
    $_SESSION["max"]=100;
}
if(isset($_SESSION["a"]))
{
	$_SESSION["a"]=$a;
}
}


if($_SESSION["guess"]>$_SESSION["max"] || $_SESSION["guess"]<$_SESSION["s"])
{
	echo "請輸入",$_SESSION["s"];
	echo"~", $_SESSION["max"],"之間的數字喔!";
	return;
}


if($_SESSION["guess"]<=100&&$_SESSION["guess"]>=1)
{

	if($_SESSION["guess"]==$_SESSION["a"])
	{
	echo "恭喜答對了!答案是",$_SESSION["a"];
	}
	if($_SESSION["guess"]>$_SESSION["a"])
	{
		$max=$_SESSION["guess"];
		$_SESSION["max"]=$max;		
		echo $_SESSION["s"];
		echo"~", $_SESSION["max"];

	}
	if($_SESSION["guess"]<$_SESSION["a"])
	{
		
	$s=$_SESSION["guess"];
	$_SESSION["s"]=$s;
	echo $_SESSION["s"];
		echo"~", $_SESSION["max"];
	}
}
else
{
	echo "請輸入",$_SESSION["s"];
	echo"~", $_SESSION["max"],"之間喔!";
}
//echo "<br>s=",$_SESSION["s"];
//echo "<br>max=",$_SESSION["max"];
//echo "<br>",$_SESSION["a"];

?>
</body>
</html>