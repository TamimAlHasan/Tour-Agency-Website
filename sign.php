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
   <link rel="stylesheet" href="css/sign.css"/>

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

    <form class="form-container" action="registration.php" method="post">
      
      <h2 id="header">SIGN UP</h2>

    <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="TELL US YOUR NAME" name="name">
    </div>

      <div class="form-group">
      <label style="color: #deeaee">YOU ARE:</label>
      <input type="radio" class="form-check-input" name="gender" value="male">MALE
      <input type="radio" class="form-check-input" name="gender" value="female">FEMALE
  </div>

      <div class="form-group">
      <input type="text" class="form-control" id="occupation" placeholder="ENTER YOUR OCCUPATION" name="occupation">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="address" placeholder="ENTER YOUR PRESENT ADDRESS" name="address">
    </div>


    <div class="form-group">
      <input type="text" class="form-control" id="contact" placeholder="YOUR CONTACT NUMBER" name="contact">
    </div>

    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="ENTER YOUR E-MAIL" name="email">
    </div>


    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="TYPE YOUR PASSWORD" name="password">
    </div>

    <button type="submit" class="btn btn-success btn-block">Submit</button>

  </form>

</div>

<div class="col-md-4 col-sm-4 col-xs-12"></div>
  
  </div>

</div>


</body>
</html>