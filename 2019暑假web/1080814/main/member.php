<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<body background="snow.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員註冊</title>
<?php error_reporting(0); 
	if(isset($_POST["ok"]))
	{
		$ans=0;

		$id=$_POST["id"];
		$password=$_POST["password"];
		$passwordcheck=$_POST["passwordcheck"];
		$birthday=$_POST["birthday"];
		$name=$_POST["name"];
		$phone=$_POST["phone"];
		$boy=$_POST["sex"];
		$girl=$_POST["sex"];
		$address=$_POST["address"];
		$email=$_POST["email"];

		$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"shop");
		mysqli_query($con,"SET NAMES 'UTF8'");
		$add="INSERT INTO member(id,password,birthday,name,phone,address,email) VALUES('$id','$password','$birthday','$name','$phone','$address','$email')";
		
		$select=mysqli_query($con,"SELECT * FROM member");
			
		if($ans==0)
		{

		if(strlen($password)<3 || strlen($password)>14||
		   strlen($passwordcheck)<3 || strlen($passwordcheck)>14)
		{
		$passwor="請輸入4~13位數<br>";
		
		}
		else
		{
			$ans++;
		}
		
		if($password == $passwordcheck)
		{
			$ans++;
		}
		else
		{
 			$passerror="密碼不一致";
		}
	

		if(strlen($phone)!=10)
		{
			$phon="請輸入10位數";
		}
		else
		{
			$ans++;
		}	if($id==""||$password==""||$passwordcheck==""||$birthday==""||$name==""||$phone==""||$address==""||$email=="")
		{
			$spec="*提醒:不能使用空白鍵喔!";
		}
		else
		{
			$ans++;
		}	


		for($i=0;$i<mysqli_num_rows($select);$i++)
		{
			$rs=mysqli_num_rows($select);
			if($rs[0]==$id)
			{
				echo"error";
			}
		}
		}
		
		if($ans==4)
		{
		
			$up=mysqli_query($con,$add);
			echo "<div align=center>輸入完成囉</div>";
			echo "<div align=center>
			<a href=http://localhost:8080/page.html> 回主頁</a>
			</div>";
				
		}
		
		
		mysqli_close($con);
		
		}
	
		
?>

<form action="member.php" method="post">
<table width="700" border="5" style="text-align:center" bgcolor="#FFFF99" align="center">
<tr><td>請輸入帳號</td>
<td><input type="text" name="id" /></td>
<td width="200"> </td>
</tr>
<tr><td>輸入密碼</td> 
<td><input type="password" name="password" /></td>
<td width="200"> </td>
</tr>
<tr><td>再輸入一次密碼</td>
<td><input type="password" name="passwordcheck" /></td>
<td width="200">
<?php
echo"$passwor";
echo"$passerror";
?> 
</td>
</tr>
<tr><td>生日</td>  
<td><input  type="date" name="birthday" /></td>
<td width="200"> </td>
</tr>
<tr><td>姓名</td>
<td><input type="text" name="name" /></td>
<td width="200"> </td>
</tr>
<tr><td>手機號碼</td> 
<td><input type="text" name="phone" /></td>
<td width="200">
<?php
	echo "$phon";

?>
</tr>
<tr><td>性別</td> 
<td><input type="radio" name="sex" value="男" />男<input type="radio" name="sex" value="女" />女</td>
<td width="200"> </td>
</tr>
<tr><td>地址</td> 
<td><input type="text" name="address" /></td>
<td width="200"> </td>
</tr>
<tr><td>email</td> 
<td><input type="email" name="email" /></td>
<td width="200"> </tr>
<tr><td colspan="3"><input type="submit" value="確定" name="ok" />
<?php
		echo"$spec";
 ?>
</tr></td>
</table>
<?php 


?>
</form>
</body>
</html>
