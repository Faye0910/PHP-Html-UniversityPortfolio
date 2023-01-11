<table border="0" width="1500" height="300">
<tr>
<?php
include("connect.php");
$need=$_POST["need"];
$search=$_POST["search"];
$pro=$_POST["pro"];
if($pro=="編號")
	$a="number";
	if($pro=="顏色")
	$a="color";
 $update="SELECT *FROM `product` WHERE `$a` LIKE '%$need%'";
	$bbb=mysqli_query($con,$update);
	for($i=0;$i<mysqli_num_rows($bbb);$i++)
	{
		
		$rs=mysqli_fetch_row($bbb);
		if(mysqli_num_rows($bbb)==1)
        header("location:001.php?a=$rs[0]");
		else
		{
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
        
		}
	}
	?>
    </table>