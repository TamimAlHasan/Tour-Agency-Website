
<?php
session_start();
$host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="travel";
  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  $query=mysqli_query($conn,"select * from booking");
  $rowcount=mysqli_num_rows($query);
  for($i=1;$i<=$rowcount;$i++)
  {
  	$row=mysqli_fetch_array($query);
  	print_r($row);
  }

  ?>