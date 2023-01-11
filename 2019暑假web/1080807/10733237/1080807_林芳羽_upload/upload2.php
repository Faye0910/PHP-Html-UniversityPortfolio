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

$Count = count($_FILES["upload"]["name"]);
$TIME=date("y-m-d-h-i-s");

for ($i=0;$i<$Count;$i++)
{
$type=$_FILES["upload"]["type"][$i];
if($_FILES["upload"]["error"][$i]==0)
{
if($type=="image/png"||$type=="image/bmp" ||$type=="image/jpeg")
{
	if($_FILES["upload"]["size"][$i]<30720000)
	{
		if(file_exists('upload/'.$_FILES["upload"]["name"][$i]))
	{
		$FILES=explode(".",$_FILES["upload"]["name"][$i]);
        $NEW=@$FILES[0]."-".$TIME."-".rand(1,10).".".$FILES[1];
		echo "上傳成功<br>";
		echo "檔案名稱：",$NEW,"<br>";
		echo "檔案類型：",$_FILES["upload"]["type"][$i],"<br>";
		echo "檔案大小：",rand($_FILES["upload"]["size"][$i]/1024,2),"KB<br>";
		move_uploaded_file($_FILES["upload"]["tmp_name"][$i],"upload/".$NEW);
	}
	else
	{
	if(move_uploaded_file($_FILES["upload"]["tmp_name"][$i],'upload/'.$_FILES["upload"]["name"][$i]))
	{
	echo "上傳成功<br>";
	echo "檔案名稱：",$_FILES["upload"]["name"][$i],"<br>";
	echo "檔案類型：",$_FILES["upload"]["type"][$i],"<br>";
	echo "檔案大小：",rand($_FILES["upload"]["size"][$i]/1024,2),"KB<br>";
	}
	else
	{
	echo "上傳失敗";

	}
	}

	}
	else
	{
	echo "檔案太大了!";
	}
}
else
{
	echo "上傳失敗檔案格式錯誤";
}
}
else
{
	echo "檔案error!";
	}
}

?>
<form>
<input type ="button" onclick="history.back()" value="回到上一頁">
</form>
</body>
</html>