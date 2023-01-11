<html>
<head>
<title>會員登入</title>
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
</head>
<body>
<body background="snow.jpg">
<font face="微軟正黑體">
<style>

</style>
<div class="Main">
  <div style="width:400px; height:600px; float:left;">
    <div class="a" style="float:left;">
    <form action="sign.php" method="post">
    請輸入帳號：
      <input type="text" id="username" name="id" /><br>
    請輸入密碼：
    <input type="password" id="password" name="password" /><br>
    <input type="submit" name="submit" id="submit" value="確定" >
    </form>
    <input type ='button' onclick= javascript:location.href='homepage.php' value='回到首頁'>
    </div>
    <div class="a" style="float:right;">
    </div>
  </div>
  <div class="a" style="float:right;">
  </div>
 
</div>
</body>
</html>
