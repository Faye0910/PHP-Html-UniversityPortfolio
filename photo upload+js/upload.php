<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上傳多張圖片</title>
</head>
<body>
	<div align="center">
<?php
$upload_dir = "uploads/";
$limitedext = array(".jpg",".bmp",".png");
$size_bytes = 3 * 1024 * 1024;
// 上傳檔將存入此路徑裡的 uploads 資料夾
$index = 1;
foreach($_FILES AS $key=>$value){
   $new_file = $_FILES[$key];
   // 讀取上傳檔名
   $file_name = $new_file['name'];
   
   $file_name = str_replace(' ', '_', $file_name);
   
   $file_type = $new_file['type'];
	
   // 存入暫存區的檔名
   $date=date('y-m-d h-i-s',mktime(date('h')+6));
	
   $file_tmp = $new_file['tmp_name'];
   // 檔案大小
   $file_size = $new_file['size'];
	
   $show_size=sprintf("%.2f",$file_size/1024);
	
   if (!is_uploaded_file($file_tmp)) {
	  echo "第 ".$index. "張圖片: 沒有選取上傳檔案。<br />";
   }else{
	 $ext = strrchr($file_name,'.');
	 if (!in_array(strtolower($ext),$limitedext)) {
		echo "第".$index." 張圖片: ($file_name) 的檔案副檔名有誤（只允許jpg,bmp,png檔） <br />";
	 }else{
		// 檢查檔案是否太大
	   if ($file_size > $size_bytes){
		   echo "第".$index."張圖片: ($file_name) 無法上傳，請檢查檔案是否小於 ". $size_bytes / 1024/1024 ." MB。<br />";
	   }else{
		   if (move_uploaded_file($file_tmp,$upload_dir.$date.$file_name)) {
			   echo "第".$index."張圖片: ($file_name) 上傳成功！<br />圖片大小为: ($show_size) KB<br /><br />";
			  
		   }else{
				echo "第".$index."張圖片: 無法上傳。<br />";
		   }
	   }
	 }
   }
   $index = $index + 1;
}

// 用迴圈讀取上傳欄位資料
//for ($i = 1; $i <= $total_uploads; $i++) {
   
//}
?>

	</div>
</body>
</html>