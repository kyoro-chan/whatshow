$(function(){
/*
  $(".btn-push").hover(
    
    function(){
      $(this).css('color', 'moccasin');

    },function(){
      $(this).css('color', 'snow');

    }
    );*/


  


  $(".start").click(function(){
    $(".arab").css("display", "none");
    $(".samba").show();
    $(".btn-push").text('retry').css('padding-left','5px');
    $(".result").show();

    


  });

  //画像ルーレット
  $('.btn').click(function(){
    

    $("#result-text").text('みんなで'+php.str+'しよう')
  });
/*
  $(".restart").click(function(){
    $(".restart").show();
  });*/

});