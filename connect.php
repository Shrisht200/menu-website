<?php
  $NAME = $_POST['NAME'];
  $EMAIL = $_POST['EMAIL'];
  $ADDRESS = $_POST['ADDRESS'];
  $MESSAGE = $_POST['MESSAGEE'];

//database connection  

$conn = new mysqli('localhost', 'root', '','test');
if($con->connect_error){
	die('Connection failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into registration (NAME, EMAIL, ADDRESS, MESSAGE) values(?,?,?,?)");
	$stmt->bind_param("sssi", $NAME. $EMAIL, $ADDRESS, $MESSAGE);
	$stmt-> execute();
	echo "meesaage send";
	$stmt->close();
	$conn->close();
}
  
  
  
?>