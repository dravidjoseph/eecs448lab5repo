<?php

//Pull username and content from form
$username = $_POST["user"];
$content = $_POST["content"];


//Content cannot be left blank
if($content == ""){
	echo "Content cannot be left blank!";
	exit();
}


//At this point, we need to query the database
$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph","f2TUteC4dQRqL7jR","djoseph");

//Check connection
if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}


//will be used to check username
$exist = $mysqli->query("SELECT user_id FROM Users WHERE user_id = '$username'");


//if there isn't a unique username corresponding to num_rows, invalid
if($exist->num_rows != 1){
	echo "Only existing users may post!";
	$mysqli->close();
	exit();
}



//user exists, so add post to database
$postContent = "INSERT INTO Posts (author_id,content) VALUES ('$username','$content')";


//Check that result is in the database
if($result = $mysqli->query($postContent)){
	echo "Your post was succesfully added.\n";
}
else{
	echo "ERROR: Your post was not added.\n";
}
	
	
//Close the connection	
$mysqli->close();
	
?>