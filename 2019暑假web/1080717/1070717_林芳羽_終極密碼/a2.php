<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>終極密碼</title>
</head>

<body>
<body bgcolor="#FFFFCC">
<p align="center" >
<font size="+6" face="微軟正黑體">
<?php
session_start();
$s=1;
$max=100;
$guess=$_POST["b"];
$a=rand(1,100);

if($guess>100||$guess<1)
{
	echo "數字輸入錯誤喔!";
}
else
{
if(isset($_SESSION["a"]))
{
	$_SESSION["a"];
}
else
{
	$_SESSION["a"]=$a;
}

if($guess>$_SESSION["a"])
	{
		if($guess==null)
		{
			$_SESSION["max"]="100";
		}
		$max=$guess;
		$_SESSION["max"]=$max;
	}
if($guess<$_SESSION["a"])
	{
		if($guess==null)
		{
			$_SESSION["s"]="1";
		}
	$s=$guess;
	$_SESSION["s"]=$s;
	}
if($guess==$_SESSION["a"])
	{
	echo "恭喜答對了!";
	}
//echo $_SESSION["a"],"<br>";
echo $_SESSION["s"];
echo"~", $_SESSION["max"];
}
?>
<form action="a2.php" method="POST">
<p align="center" >
<input type="text" name="b" />
<br>
<input type="submit" value="繼續猜" />
<br>
</form>
</body>
</html>