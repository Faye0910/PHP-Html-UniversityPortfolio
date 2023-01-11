<head>
<title>圖片上傳</title>
<style>
h1{
 font-size: 36px;
}
h2{
 font:"微軟正黑體";
 font-size:24px;
  }
</style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
$(function(){
   index=1;
   fileName = "file"+index;
   setInterval(function(){
    if($('input[type=file]').length==0){
     Image_name=fileName;
       index+=1;
    fileName="file"+index;
       console.log($('input[type=file]').length);
       htmlStr=$('<input name='+'"fileUpload[]"'+''+ ' type="file" id='+fileName+''+' /><br>');
       console.log(htmlStr);
       $("#form1").append(htmlStr);
    }
    else if($('input[type=file]').get(-1).files[0]!=undefined){
     Image_name=fileName;
     index +=1;
     fileName="file"+index;
     console.log(index);
     htmlStr=$('<input name='+'"fileUpload[]"'+''+ ' type="file" id='+fileName+''+' /><br><br>');
     console.log(htmlStr);
     $("#form1").append(htmlStr);
     $('#form1> input[type=file]').each(function() {
              $(this).next().after($(htmlStr));
              })
     $(".button").click(function(){
     console.log($(this).attr("name"))
     $(this).parent().remove();
     })
    }
   },1000);
})
    
</script>
</head>

<body>
<center>
請選擇要上傳的檔案<br />
<br />
<form name="form1" id="form1" action="顯示.php" method="post" enctype="multipart/form-data">
<input type="hidden" id="textNum" value="1">
<input type="file" accept="image/*" name="fileUpload[]" id="+fileName++"><br>
<input type="submit" name="button1" value="送出" onClick="javascript:location.href='顯示.php'">
</form>

</center>
</body>
</html>