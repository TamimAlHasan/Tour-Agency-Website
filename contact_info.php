<?php  

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
if(!empty($name) || !empty($email) || !empty($message))
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
	
	$INSERT="INSERT into contact(Name,Email,Message) values (?,?,?)";
	
	 $stmt=$conn->prepare($INSERT);
	 $stmt->bind_param("sss",$name,$email,$message);
	 $stmt->execute();
	 echo "new record inserted successfully";

	} 
	
$stmt->close();
$conn->close();
}
else 
{
	echo "all field are required";
	die();
}
?>