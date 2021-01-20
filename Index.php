<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/main.css"/>

</head>
<body>
  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <li><a href="Book_Button.php">BOOKING</a></li>
      <li><a href="contactus.php">CONTACT US</a></li>
      <li><a href="pack.php">PACKAGES</a></li>
    </ul>

  </div>
</nav>
<div class="carousel slide" id="slider" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
    </ol>

  <div class="carousel-inner">
    <div class="item active" id="slide1">
      <img src="images/1.jpg" style="width:100%;">
    </div>
     <div class="item" id="slide2">
       <img src="images/2.jpg" style="width:100%;">
     </div>
      <div class="item" id="slide3">
        <img src="images/3.jpg" style="width:100%;">
      </div>
  </div>

    <a class="left carousel-control" href="#slider" data-slide="prev" role="button">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#slider" data-slide="next" role="button">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>

<div class="footer">

  <h5 class="footer">&copy 2020 ASIA TRAVELS , ALL RIGHTS RESERVED</h5>

</div>

</body>
</html>
