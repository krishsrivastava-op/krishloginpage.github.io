<?php
 $your name = $_POST['your name'];
 $your  address = $_POST['your address'];
 $your phone number = $_POST['your phone number'];

 //database connection
 $conn = new msqli('localhost','krish123');
 if($conn->connect_error){
 	die('connection failed  : '.conn->connect_error);
 	 }else{
 	 	$stmt =$conn->prepare("ordersuccesfull(your name, your address, your phone number)
 	 		values(?,?,?)");
 	 	$stmt->bind_param("ssi",$yourname,$youraddress,$yourphonenumber);
 	 	$stmt->execute();
 	 	echo "ordersuccesfull...";
 	 	$stmt->close();
 	 	$conn->close(); 
 	 }
