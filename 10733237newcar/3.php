<?php
include("connect.php");

$pro=$_POST['pro'];

$sql_query="SELECT types FROM product WHERE types='$pro'";
$result=mysqli_query($con,$sql_query);

$nums=mysqli_num_rows($result);

echo json_encode($nums);

?>