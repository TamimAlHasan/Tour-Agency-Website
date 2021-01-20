<?php  

$name=$_POST['name'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];
if(!empty($name) || !empty($gender) || !empty($occupation) || !empty($address) || !empty($contact) || !empty($email) || !empty($password))
{
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="travel";
  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error()){

  	die('Connect Error('.mysql_connect_errno().')'.mysql_connect_error());

  }
else
{
	$SELECT="SELECT Email from registration where Email=? Limit 1";
	$INSERT="INSERT into registration(Name,Gender,Occupation,Address,Contactno,Email,Password) values (?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum=$stmt->num_rows;
	if($rnum==0)
	{
	 $stmt->close();
	 $stmt=$conn->prepare($INSERT);
	 $stmt->bind_param("ssssiss",$name,$gender,$occupation,$address,$contact,$email,$password);
	 $stmt->execute();
	 //echo "new record inserted successfully";
	 header('location:Booking.php');

	} 
	else
	{
		echo "someone alredy registered using this email";

	}
$stmt->close();
$conn->close();
}
}
else 
{
	echo "all field are required";
	die();
}
?>