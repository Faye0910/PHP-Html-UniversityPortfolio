<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員登入</title>
</head>

<body>
 <body background="snow.jpg">
<font size="+3" face="微軟正黑體">
<?php
error_reporting(0);
session_start();
$id=$_POST["id"];
$password=$_POST["password"];

if($id==""||$password=="")
{
	echo"<script>alert('輸入錯誤');
		javascript:location.href='signhome.php'</script>";
	
}
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM member");


for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
		if($rs[0]==$id && $rs[1]==$password)
		{
			if($id=="abc"&&$password=="!123")
			{
				$_SESSION["id"]=$id;
				$_SESSION["password"]=$password;
				header("location:admin.php");
			}
			else
			{
				$_SESSION["id"]=$id;
				$_SESSION["password"]=$password;
				header("location:homepage.php");
			}
		}


	}
	mysqli_close($con);
?>

</body>
</html>