<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
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

		include("connect.php");
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
</body>
</html>