<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/booking.css"/>

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
	
	

<div class="container-fluid bg">
	

    <div class="row">
      
         <div class="col-md-4 col-sm-4 col-xs-12"> </div>
         <div class="col-md-4 col-sm-4 col-xs-12">

   
      <form class="form-container" action="booking_info.php" method="post">
    	
    	<h2 id="header">GIVE YOUR INFORMATION</h2>

      <div class="form-group">
      <label for="name">NAME:</label>
      <input type="text" class="form-control" id="name" placeholder="enter your name" name="name">
    </div>

      <div class="form-group">
      <label for="email">E-MAIL:</label>
      <input type="email" class="form-control" id="email" placeholder="enter your e-mail" name="email">
    </div>

    <div class="form-group">
      <label for="contact">CONTACT:</label>
      <input type="text" class="form-control" id="contact" placeholder="enter your contact number" name="contact">
    </div>

     <div class="form-group">
      <label for="country">COUNTRY:</label>
        <select  name="country">
        <option value="1">BANGLADESH</option>
        <option value="2">BHUTAN</option>
        <option value="3">CHINA</option>
        <option value="4">DUBAI</option>
        <option value="5">INDIA</option>
        <option value="6">MALAYSIA</option>
        <option value="7">MALDIVES</option>
        <option value="8">NEPAL</option>
        <option value="9">SINGAPORE</option>
        <option value="10">THAILAND</option>
    </select>
    </div>

<div class="form-group">
      <label for="persons">PERSONS:</label>
        <select name="persons">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    </div>

    <div class="form-group">
      <label for="date">DATE:</label>
      <input type="date" name="date">
    </div>

    <div class="form-group">
      <label for="persons">DAYS:</label>
        <select name="days">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    </div>


   
    <div class="form-group">
    <label for="air">AIRLINES:</label>
      <input type="radio" class="form-check-input"  id="radio1" name="airlines" value="emirates">EMIRATES
      <input type="radio" class="form-check-input"  id="radio" name="airlines" value="thai">THAI
      <input type="radio" class="form-check-input"  id="radio" name="airlines" value="regent">REGENT
  </div>


    <button name="submit" type="submit" class="btn btn-success btn-block">SUBMIT</button>

  </form>

</div>

<div class="col-md-4 col-sm-4 col-xs-12"></div>
	
  </div>
<form  action="logout.php" method="post">
	<div id="d">
	<button name="logout" type="submit" class="btn btn-danger">LOG OUT</button>
	</div>
</form>
</div>

</body>
</html>