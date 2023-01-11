<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>褲子</title>
</head>

<body>
<body background="../snow.jpg">
<?php
error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM product");
?>
<form action="clothes.php" method="post">
<img src="../wellcome.gif" height="80" width="220" />
</form>
<table border="0" width="1200" height="300">
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
        <td><a href="<?php echo "../001.php?a=$rs[0]"?>"><img src="<?php echo "../$rs[5]" ?>" width="100" height="100" /></a></td>
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
<tr><td  align="center" colspan='3'><input type ="button" onclick="javascript:location.href='page.php'" value="回到首頁"></td></tr>
</table>
</div>
</body>
</html>