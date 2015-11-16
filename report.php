<?php
 //connect to the database
  //create an instance of mysqli
	$connectToDb = new mysqli('localhost','root','','okoa');
	//check if the connection is valid if not retun mysqli error report
	if(!$connectToDb) {
		die('database connection failed'. mysqli_error($connectToDb));
	}
	//input array note should be generated using the post method
	$userData  = array(
		'name_on_documnet' => $_POST['name_on_document'],
	    'identity_number' => md5($_POST['identity_number']),
	   
     );

	$table = 'Documents';
	function insert($userData, $table, $connectToDb) {
        //sanitize the data
        //hash the password
         $identity_number= md5($userData['identity_number']);
         echo $identity_number;
		//generate the fields
		$fields = '`'.implode('`,`', array_keys($userData)).'`';
		//the  data
		$data = '\''.implode('\',\'', $userData).'\'';
		echo $fields.'<br>'.'<br>';
		echo $data .'<br>'.'<br>';
		//prepare the query
		$query = "INSERT  INTO `$table` ($fields) VALUES ($data) ";
		echo $query .'<br>'.'<br>';
    }








?>
