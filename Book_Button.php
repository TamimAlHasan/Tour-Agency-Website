
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/book_button.css"/>

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

   <form class="form-container" action="temp.php" method="post">
      <div class="a">
    <button type="submit" class="btn btn-warning" name="log">LOGIN</button>
    <h3 id="w">OR</h3>
      <button type="submit" class="btn btn-info" name="signup">SIGN UP</button>
    </div>
  </form>

</div>

<div class="col-md-4 col-sm-4 col-xs-12"></div>
  
  </div>

</div>
</body>
</html>