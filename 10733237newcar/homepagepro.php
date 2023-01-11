<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<table border="0" width="1500" height="300">
<tr>
<?php
for($i=0;$i<mysqli_num_rows($select);$i++)
	{
		
		$rs=mysqli_fetch_row($select);

        if($rs[1]=="褲子")
		{
			if($rs[5]=="")
			{
				$a++;
			?>
        <td><a href="<?php echo "001.php?a=$rs[0]"?>"> <img src="<?php echo "$rs[4]" ?>" width="100" height="100" /></a></td>
        
		<?php 
			}
		}
        if($rs[1]=="衣服")
		{
			if($rs[5]=="")
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

</table>
</div>
</body>
</html>