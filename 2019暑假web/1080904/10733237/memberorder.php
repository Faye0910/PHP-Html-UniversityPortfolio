<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>訂單查看</title>
</head>

<body>
<table align="center" border="5" width="300" height="300">
<?php
//error_reporting(0);
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"shop");
mysqli_query($con,"SET NAMES 'UTF8'");
$select=mysqli_query($con,"SELECT * FROM orde");
	
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		$rs=mysqli_fetch_row($select);
		$c=explode($rs[2],",");
		if($rs[0]==$_SESSION["id"])
		{
			
			echo "<tr><td colspan='2' >訂單編號為",$rs[1],"</td></tr>";
			echo "<tr><td>",$c[$i],"</td></tr>";	
			echo "<td align='right'>總金額為：",$rs[3],"</td>";

	}
	
	}

?>
</table>
</body>
</html>