$(function(){
/*
  $(".btn-push").hover(
    
    function(){
      $(this).css('color', 'moccasin');

    },function(){
      $(this).css('color', 'snow');

    }
    );*/


    /*var imgList = Array[
      $(".img").index($(".banana")),
      $(".img").index($(".pineapple")),
      $(".img").index($(".mango")),
      $(".img").index($(".dragonfruit")),
      $(".img").index($(".kiwi")),
      $(".img").index($(".kids"))
    ]*/
  


  $(".start").click(function(){
    $(".arab").css("display", "none");
    $(".samba").show();
    $(".btn-push").text('retry').css('padding-left','5px');
    $(".result").show();

    /*var selectnum = Math.floor(Math.random(1,6));
    var clickedIndex = $('.img').index(selectnum);
    clickedIndex.show();*/

  });

  var count = 0;


  //画像ルーレット
  $('.btn').click(function(){
    /*var selectnum = Math.floor(Math.random(1,6) );*/

    if(count < 2){
      /*var clickedIndex = $('.img').index(selectnum);
      clickedIndex.show();*/
      $("#result-text").text('みんなで'+'しよう');
    }else{
      
      $("#result-text").text('みんなで"こいこい"しよう');
    }

    count ++;
  });
/*
  $(".restart").click(function(){
    $(".restart").show();
  });*/

});