<?php

//connect to the database

$mysqli = new mysqli("https://mysql.eecs.ku.edu",djoseph,f2TUteC4dQRqL7jR,djoseph);

//Check connection
if($mysqli->connect_errno){
	
	printf("Connect failed: $s\n",$mysql->connect_error);
	exit();
}

//Since connection has been established, take username
$username = $_POST[user];

$insert = "INSERT INTO Users (user) VALUES ('$username');";

if($result = $mysqli->query($insert)){
	echo "$username was succesfully added.\n";
}
else{
	echo "ERROR: $username does not fill preconditions.\n";
}


$mysqli->close();
	
?>