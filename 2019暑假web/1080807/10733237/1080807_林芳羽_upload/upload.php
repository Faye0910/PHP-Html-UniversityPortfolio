<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上傳資料</title>
</head>

<body>
<form action="upload2.php" enctype="multipart/form-data" method="post">
<body bgcolor="#0099FF" ; background="ba.jpg"; style="background-repeat:repeat" />
<font face="微軟正黑體" size="+3">
<p align="center">請選擇檔案<br>

<input type="file" name="upload[]" enctype="multipart/form-data"  multiple="multiple"> <br>
<input type="submit"  value="送出" ><br>
</form>
<br>
<font color="#FF0000" size="+5">
僅限3GB以下 檔案為PNG 、 BMP 、 JPG
<br>

</font>
</body>
</html>