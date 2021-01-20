<?php
session_start();
$host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="travel";
  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(isset($_REQUEST["submit"]))
{

	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	$query=mysqli_query($conn,"select * from registration where Email='$email' && Password='$password'");
	$rowcount=mysqli_num_rows($query);
	if($rowcount==true)
	{
		
		header('location:Booking.php');
	}
	else
	{
		  header('location:echo.php');
	}

}

?>

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
   <link rel="stylesheet" href="css/login.css"/>

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

    <form class="form-container">
    	
    	<h2 id="header">LOGIN</h2>

    <div class="form-group">
      <label for="email">E-MAIL:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter e-mail" name="email">
    </div>

     <div class="form-group">
      <label for="password">PASSWORD:</label>
      <input type="password" class="form-control" id="password" placeholder="Type Your Password" name="password">
    </div>

	<div class="checkbox">
		<label>
			<input type="checkbox"> Remember me
		</label>
   </div>

    <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>

  </form>

</div>

<div class="col-md-4 col-sm-4 col-xs-12"></div>
	
  </div>

</div>
    


</body>
</html>