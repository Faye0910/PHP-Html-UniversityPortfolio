<html>
<head>
<title>網站會員系統</title>
<style>
.success

</style>
</head>

<body>
<br />
<div class="Main">
  <div style="width:400px; height:600px; float:left;">
    <div class="a" style="float:left;">
    帳號：<br>
    <input type="text" id="username"  /><br>
    <input type="submit" name="submit" id="submit" value="確定" >
    </div>
    <div class="a" style="float:right;">
    </div>
  </div>
  <div class="a" style="float:right;">
  </div>
 
</div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js">
</script>
<script>
  $("#username").on("keyup",function(){
	  var a = $(this).val();
	  console.log(a);
	  
	 $.ajax({
	   url:'1.php',
	   type:'POST',
	   dataType:"json",
	   data:{'username':a}
	   }).done(function(data){
		            if(data==true){
		$("#username").parent().removeClass("success").addClass("error");
	   }else{
		   $("#username").parent().removeClass("error").addClass("success");
	   }
	   console.log(data);
	     })
  })
</script>
</body>
</html>