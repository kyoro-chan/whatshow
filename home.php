<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="contaner">
      <div class="title">
        <div class="title-img">
          <img class="img arab" height= "80px" width= "65px" src="dance_arab_odoriko.png">
          <img class="img samba" height= "80px" width= "65px" src="dance_samba_woman.png">
          <h3>What show are you gonna see...</h4>
        </div>
      </div>
      <div class="btns">
        <div class="btn start">
          <a class="btn-push" href="#"><span class="fas fa-hand-point-right"></span>push!</a>
  
        </div> 
      </div>
    
      <div class="result">
        <h4>Let's see トロピカル スプラッシュ！</h4>
        <div class="partys">
        <?php 
          $number = rand(1,5);
        ?>
        <script>
          var php = {
            str: "<?php $number; ?>",
            
          };
        </script>
          <div class="party">
            <img class="img banana" src="fruit_banana.png">
          </div>
          <div class="party">
            <img class="img pineapple" src="fruit_pineapple.png">
          </div>
          <div class="party">
            <img class="img mango" src="fruit_mango.png">
          </div>
          <div class="party">
            <img class="img dragonfruit" src="fruit_dragonfruit.png">
          </div>
          <div class="party">
            <img class="img kiwi" src="fruit_kiwi_green.png">
          </div>
          <div class="party">
            <img class="img kiwi" src="nakayoshi_world_kids_run.png">
          </div>
        </div>
        <p id="result-text"></p>
      </div>
    </div>


    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
