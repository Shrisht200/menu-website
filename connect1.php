<?php
  $NAME = $_POST['NAME'];
  $EMAIL = $_POST['EMAIL'];
  $ADDRESS = $_POST['ADDRESS'];
  $DATE = $_POST['DATE'];
  $TIME = $_POST['TIME'];
  $MESSAGE = $_POST['MESSAGE'];
  $NO OF SEATS = $_POST['NO OF SEATS'];

//database connection  

$conn = new mysqli('localhost', 'root', '','test');
if($conn->connect_error){
	die('Connection failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into registration (NAME, EMAIL, ADDRESS, DATE, TIME, MESSAGE, NO OF SEATS) values(?,?,?,?,?,?,?)");
	$stmt->bind_param("sssiisi", $NAME. $EMAIL, $ADDRESS, $DATE, $TIME, $MESSAGE, $NO OF SEATS);
	$stmt-> execute();
	echo "Seat booked";
	$stmt->close();
	$conn->close();
}
  
  
  
?>