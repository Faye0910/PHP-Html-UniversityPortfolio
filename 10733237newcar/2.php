
<?php
include("connect.php");

$username=$_POST['username'];

$sql_query="SELECT id FROM member WHERE id='$username'";
$result=mysqli_query($con,$sql_query);

$nums=mysqli_num_rows($result);

$Allaccount=NULL;

if($nums>0)
  {
	$Allaccount=true;
  }
else
  {
	$Allaccount=false;
  }
echo json_encode($Allaccount);

?>