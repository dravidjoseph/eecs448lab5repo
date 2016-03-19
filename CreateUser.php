<?php

//connect to the database

$mysqli = new mysqli("mysql.eecs.ku.edu",djoseph,f2TUteC4dQRqL7jR,djoseph);

//Check connection
if($mysqli->connect_errno){
	
	printf("Connection failed: $s\n",$mysql->connect_error);
	exit();
}

//Since connection has been established, take username
$username = $_POST[user];

if($username == ""){
	echo "Username cannot be left blank!";
	$mysqli->close();
	exit();
}

//Query to check for duplicates
$dupCheck = $mysqli->query("SELECT user_id FROM Users WHERE user_id = '$username'");
if($dupCheck->num_rows != 0){
	echo "ERROR: Duplicate username.\n";
}

else{
//SQL query
	$insert = "INSERT INTO Users (user_id) VALUES ('$username')";

	if($result = $mysqli->query($insert)){
		echo "$username was succesfully added.\n";
	}
	else{
		echo "ERROR: $username does not fill preconditions.\n";
	}

}
$mysqli->close();
	
?>