<?php
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$serialNumber = $_POST['serialNumber']


  echo $firstName;
  echo $email;
  echo $serialNumber;
 
 
 if ($firstName == "mercy" &&  == $email == "l@gmail.com" && == $serialNumber == "1234556789"){
		echo "The Person with the name {$firstName} request is eing processed";
	}else {
		echo "Please enter all spaces";
	}
}else {
	$userName = "";
	$message = "Please try again."
?>