
 <!DOCTYPE.HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/c9b70bfdc8.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/grille.css">
    <meta charset="utf-8">
    <title>Grille IMG Responsive</title>
</head>
<body>
  <style>
  body{
    background-color: #969696;
  }
    img{
    margin-top: 20px;
    }
    </style>
    <div class="container-fluid">
  <div class="row">
    <?php
    for ($i=0; $i<=4; $i++)
    {
    ?>
    <div class=" col-xs-6 col-md-3 col-sm-4">
      <img class="img-responsive" src="img/theme<?php echo $i ?>.jpg">
    </div>
    <?php
  }
  ?>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
