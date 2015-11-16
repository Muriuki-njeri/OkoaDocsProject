<?php
if (isset($_POST['send'])) {	
	$id_num = $_POST['identity_number'];
	$id_num= mysql_real_escape_string($id_num);
        $user_name = $_POST['user_name'];
	$user_name = mysql_real_escape_string($user_name);
        $location= $_POST['location'];
	$location = mysql_real_escape_string($location);
	$contact_number = $_POST['contact_number'];
	$contact_number = mysql_real_escape_string($contact_number);
	
	$query = mysqli_query($myConnection, "INSERT into Documents  (identity_number,user_name, contact_number, location) values( '$id_num','$user_name','$contact_number','$location') ") or die (mysqli_error($myConnection));
?>
