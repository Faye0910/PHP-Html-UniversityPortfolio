<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>顯示資料</title>
</head>

<body>
<body bgcolor="#0099FF" ; background="ba.jpg"; style="background-repeat:repeat" />
<font size="+2">
<p align="center">
<?PHP
if($_FILES["upload"]["error"]==0)
{
if(move_uploaded_file($_FILES["upload"]["tmp_name"],'10733237/upload/'.$_FILES["upload"]["name"]))
{
echo "上傳成功<br>";
echo "檔案名稱：",$_FILES["upload"]["name"],"<br>";
echo "檔案類型：",$_FILES["upload"]["type"],"<br>";
echo "檔案大小：",rand($_FILES["upload"]["size"]/1024,2),"KB<br>";
}
else
{
	echo "上傳失敗";
}
}
?>

</body>
</html>