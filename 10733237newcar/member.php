<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<body background="snow.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員註冊</title>
<font face="微軟正黑體">
<style type="text/css">
.ok {
	color: #03F;
	border-top-color: #0C3;
	border-right-color: #0C3;
	border-bottom-color: #0C3;
	border-left-color: #0C3;
}
.nook {
	color: #F03;
	border-top-color: #F00;
	border-right-color: #F00;
	border-bottom-color: #F00;
	border-left-color: #F00;
	border: 10;
}
</style>
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
		$sex=$_POST["sex"];
		$address=$_POST["address"];
		$email=$_POST["email"];

		$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"shop");
		mysqli_query($con,"SET NAMES 'UTF8'");
		$add="INSERT INTO member(id,password,birthday,name,phone,sex,address,email) VALUES('$id','$password','$birthday','$name','$phone','$sex','$address','$email')";
		
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
		}
					for($i=0;$i<mysqli_num_rows($select);$i++)
					{
						$rs=mysqli_fetch_row($select);
						if($rs[0]==$id)
						{
							$alreadyid="<font color=#FF0000>帳號已被註冊過了!</font>";
							$ans--;
						}
						for($i=0;$i<mysqli_num_rows($select);$i++)
							{
							$rs=mysqli_fetch_row($select);
							if($rs[4]==$phone)
							{
							$alreadyphone="<font color=#FF0000>手機號碼已被註冊過了!</font>";
								$ans--;
							}
							}
					}	
					
		
		if($ans==4)
		{
			$up=mysqli_query($con,$add);
			echo"<script>alert('輸入完成囉,請登入');
		javascript:location.href='sign.html'</script>";
				
		}
		
		
		mysqli_close($con);
		
		}
	
		
?>
<div class="Main">
  <div style="width:400px; height:600px; float:left;">
    <div class="a" style="float:left;">

<form action="member.php" method="post">
<table width="700" border="5" style="text-align:center" bgcolor="#FFFF99" align="center">
<tr><td>請輸入帳號</td>

<td><input type="text" name="id" id="username"/> 
    </td>
<td width="200">
<?php
echo "$alreadyid";
?> </td>
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
	echo"<br>$alreadyphone";
?>
</tr>
<tr><td>性別</td> 
<td><input type="radio" name="sex" value="男" />男<input type="radio" name="sex" value="女" />女</td>
<td width="200"> </td>
</tr>
<tr><td>地址</td> 
<td><input type="text" name="address" /></td>
<td width="200"></td>
</tr>
<tr><td>email</td> 
<td><input type="email" name="email" /></td>
<td width="200">
<?php
echo "$alreadyemail";
?> 
</tr>
<tr><td colspan="3"><input type="submit" value="確定" name="ok" />
<input type ="button" onclick="javascript:location.href='homepage.php'" value="回到首頁">
</div>
    <div class="a" style="float:right;">
    </div>
  </div>
  <div class="a" style="float:right;">
  </div>
 
</div>
<?php
		echo"$spec";
 ?>
</tr></td>
</table>
<?php 


?>
</form>
<script src="http://code.jquery.com/jquery-1.12.4.min.js">
</script>
<script>
  $("#username").on("keyup",function(){
	  var a = $(this).val();
	  console.log(a);
	  
	 $.ajax({
	   url:'2.php',
	   type:'POST',
	   dataType:"json",
	   data:{'username':a}
	   }).done(function(data){
		            if(data==true){
		$("#username").removeClass("ok").addClass("nook");
	   }else{
		   $("#username").removeClass("nook").addClass("ok");
	   }
	   console.log(data);
	     })
  })
</script>
</body>
</html>
