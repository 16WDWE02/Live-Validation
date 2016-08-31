<?php 
//Include our variables for our database
include("../../config.inc.php");

//Get the username
$username = $_POST['username'];

//Conect to the database
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Filter the username
$username = $dbc->real_escape_string($username);

//Prepare the Query
$sql = "SELECT username FROM users WHERE username = '$username'";

//Run the Query
$result = $dbc->query($sql);

if(!$result){
	//Query Failed;
	echo "Something went wrong";
} elseif($result->num_rows == 1){
	//Username is in use
	echo "fail";
} else {
	//No results
	//Username was not found
	echo "success";
}




