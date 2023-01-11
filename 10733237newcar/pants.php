<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>褲子</title>
</head>

<body>
<body background="pic/snow.jpg">
<?php
error_reporting(0);
session_start();
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM product");
?>
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
        <td><a href="<?php echo "001.php?a=$rs[0]"?>"><img src="<?php echo "$rs[4]" ?>" width="100" height="100" /></a></td>
		<?php 
		}
		}
		if($a==3||$a==6||$a==9||$a==12||$a==15||$a==18||$a==21)
		{
		echo"</tr><tr>";
		}
        ?>
<?php
	}
?>
<tr><td  align="center" colspan='3'><input type ="button" onclick="javascript:location.href='homepage.php'" value="回到首頁"></td></tr>
</table>
</div>
</body>
</html>