<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BMI計算</title>
</head>

<body>
<body bgcolor="#0099FF" ; background="flower.png"; style="background-repeat:repeat" />
<p align="center" >
<font size="+2" face="微軟正黑體" >
  <?php
$h=$_POST["h"];
$w=$_POST["w"];


if($h>0&& $h<200)
{
	if($w>0&& $w<100)
	{
		$a=$h/100;
		$a=$a*$a;
		$b=$w/$a;
		$b=round($b,2);
		echo "<br>你的身高為",$h,"公分";
		echo "<br>你的體重為",$w,"公斤";
		echo "<br>你的BMI=",$b,"<br>";
	
	}
	else
	{
	echo "體重數值輸入錯誤喔!";
	}
}
else
{
	echo "<br>身高數值輸入錯誤喔!<br>";	
}
?>
  <br>
<br>
<br>
<br>
<img src="BMI.jpg" ; style=" margin:auto" />
</p>
</body>
</html>