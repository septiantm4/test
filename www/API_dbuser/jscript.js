$(document).ready(function(){
    $("#tombol1").on("click",function(){
    $("#nama").html("<b>Getting data,loading in 2 seconds</b>");
    setTimeout(function(){
        $.ajax({
        method:"get",
      crossDomain:true,
      url:"http://localhost/login/Login/www/api_dbuser/api_user.php?id=2",
      dataType:"json",
      success:function(response){
        var text = "";
        response.data.forEach(function(data){
                    text += data.categoryName+"<br/>";
        });
          $("#nama").html(text);
      },
      error:function(error){
        $("#nama").text(error.statusText);
      }
    });
    },2000);
    
  });
});