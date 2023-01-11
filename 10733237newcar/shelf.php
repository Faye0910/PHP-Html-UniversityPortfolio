<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<div align="center">
<form action="shelf.php" method="post" enctype="multipart/form-data">
編號<input type="text" name="A" /><BR>
類型<input type="text" name="B" /><BR>
顏色<input type="text" name="C" /><BR>
價格<input type="text" name="D" /><BR>
照片<input type="file" name="pic"  required="required"/><BR>
<input type="submit" value="確定" name="ok" />
</form>

<body background="snow.jpg">
<?php
include("connect.php");
if(isset ($_POST["ok"]))
{
$A=$_POST["A"];
$B=$_POST["B"];
$C=$_POST["C"];
$D=$_POST["D"];
	if(isset ($_FILES['pic']['name']))
	{
		$pic='pic/'.$_FILES['pic']['name'];

		$add="INSERT INTO  	 `product`(`number`,`types`,`color`,`price`,`pic`,`shelf`) VALUES('$A','$B','$C','$D','$pic','下架')";
		$up=mysqli_query($con,$add);
	}
	if(file_exists('pic'.$_FILES["pic"]["name"]))
	{
        echo "檔案已存在，請勿重複上傳相同檔案";
		return;
	}
	else
	{
	if(move_uploaded_file($_FILES["pic"]["tmp_name"],
	'pic/'.$_FILES["pic"]["name"]))
	{
		echo "上傳成功";
	}
	}
}

?>
<a href="admin.php">回到管理員頁面</a>

</body>
</div>
</html>