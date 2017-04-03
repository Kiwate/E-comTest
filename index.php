<?php 

session_start();

$app_folder = './functions/';

include_once $app_folder.'config.php';

include_once $app_folder.'models.php';


try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
} ?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>I.I.S.C</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">
        <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body>

  

 <div class="jumbotron">
  <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
  </ul>
  <div class="container text-center title">
    <h1>I.I.S.C</h1>      
    <p>You will buy a dream</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://iisc.im/" target="_blank"><img class="logo fa-spin shine" src="images/logospace.png" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="pages/product.php">Products</a></li>
        <li><a href="pages/stores.php">Stores</a></li>
        <li><a href="pages/contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pages/signin.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><a href="#"><img src="images/products/1.jpg" class="img-responsive img-thumbnail" style="width:100%; height:150px;" alt="Image"></a></div>
        <div class="panel-footer">Buy a planet !</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><a href="#"><img src="images/products/2.jpg" class="img-responsive img-thumbnail" style="width:100%; height:150px;" alt="Image"></a></div>
        <div class="panel-footer">Buy an asteroid !</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><a href="#"><img src="images/products/3.jpg" class="img-responsive img-thumbnail" style="width:100%; height:150px;" alt="Image"></a></div>
        <div class="panel-footer">Buy a star !</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><a href="#"><img src="images/products/4.jpg" class="img-responsive img-thumbnail" style="width:100%; height:150px;" alt="Image"></a></div>
        <div class="panel-footer">Buy a Black Hole !</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><a href="#"><img src="images/products/5.jpg" class="img-responsive img-thumbnail" style="width:100%; height:150px;" alt="Image"></a></div>
        <div class="panel-footer">Buy a galaxy !</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><a href="#"><img src="images/products/6.jpg" class="img-responsive img-thumbnail" style="width:100%; height:150px;" alt="Image"></a></div>
        <div class="panel-footer">Buy a nebula !</div>
      </div>
    </div>
  </div>
</div><br><br>


<footer class="container-fluid text-center">
  <p>Online Store Copyright</p> 
  <br/>
  <form class="form-inline">
  <p>Get deals:</p>
  <br/>
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn sign">Sign Up</button>
  </form>
</footer>


    

    





        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
