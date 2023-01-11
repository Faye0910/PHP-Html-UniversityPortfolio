<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品詳細頁</title>
</head>

<body>
<body background="snow.jpg">

<?php
session_start();
include("connect.php");
$select=mysqli_query($con,"SELECT * FROM product");
$sel=mysqli_query($con,"SELECT * FROM cart");
$name=$_GET["a"];
	echo "<form action='001.php?a=$name' method='post'>";
if(isset ($_SESSION["id"]))
{
	
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
		$c=mysqli_num_rows($select);
		if($rs[0]==$name)
		{
			
			echo"<div align='center'>
			<img src='$rs[4]' height='300' width='300'/><br>
			編號:$rs[0]<br>";
			echo"類型:$rs[1]<br>";
			echo"顏色:$rs[2]<br>";
			echo"價錢:$rs[3]<br>";
			echo"
			<input type='submit' value='加入購物車' name='ok' /><br>
			"
			?>
            <input type ='button' onclick= javascript:location.href='homepage.php' value='回到首頁'>
			<?php
            "</div>";
			if(isset ($_POST["ok"]))
			{   
					$r=mysqli_fetch_row($sel);
					if($r[1]==$rs[0])
					{
					$a=$r[2]+1;
					$update="UPDATE `cart` SET `qu`='$a' WHERE `number`='$rs[0]'";
					$up=mysqli_query($con,$update);
					echo"<script>alert('$rs[0]已加入購物車')
				javascript:location.href='homepage.php'</script>";
					}
					else
					{
					mysqli_query($con,"INSERT INTO `cart`(`uerid`, `number`, `qu`, `peice`, `item`) VALUES ('$_SESSION[id]','$rs[0]','1','$rs[3]','$rs[1]')");
					echo"<script>alert('$rs[0]已加入購物車')
				javascript:location.href='homepage.php'</script>";
					
					}
			}
		}
	}
}
else
{
	echo"<script>alert('請先登入會員才能購物喔!')
				javascript:location.href='homepage.php'</script>";
	
}

?>

</form>
</body>
</html>