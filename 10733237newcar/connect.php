
<?php
$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"shop");
		mysqli_query($con,"SET NAMES 'UTF8'");

if($con->connect_error !=""){
	echo "資料庫連接失敗！";
}else{
	$con->query("SET NAMES 'utf8'");
}
?>