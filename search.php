<?php
//connect to the database
  //create an instance of mysqli
	$connectToDb = new mysqli('localhost','okoa_user','secret','okoa');
	//check if the connection is valid if not retun mysqli error report
	if(!$connectToDb) {
		die('database connection failed'. mysqli_error($connectToDb));
	}

//querying the database


$sql = "SELECT * FROM `Documents` WHERE id=$id , identity_number=$identity_number , name_on_document=$name_on_document , location=$location , contact_of_finder=$contact_of_finder";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["name_on_document"]. " " . $row["identity_number"] . "<br>";
     }



