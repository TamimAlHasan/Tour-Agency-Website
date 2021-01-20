<?php  

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$country=$_POST['country'];
$persons=$_POST['persons'];
$date=$_POST['date'];
$days=$_POST['days'];
$airlines=$_POST['airlines'];
if(!empty($name) || !empty($email) || !empty($contact) || !empty($country) || !empty($persons) || !empty($date) ||!empty($days) || !empty($airlines))
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
	$SELECT="SELECT Email from booking where Email=? Limit 1";
	$INSERT="INSERT into booking(Name,Email,Contact,Country,Persons,Date1,Days,Airlines) values (?,?,?,?,?,?,?,?)";
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
	 $stmt->bind_param("ssisisis",$name,$email,$contact,$country,$persons,$date,$days,$airlines);
	 $stmt->execute();
	 echo "new record inserted successfully";

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