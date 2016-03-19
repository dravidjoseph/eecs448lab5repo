<?php

echo "run!\n";

$username = $_POST["user"];
$content = $_POST["content"];

echo $username."\n";
echo $content."\n";

if($content == ""){
	echo "Content cannot be left blank!";
	exit();
}

/*
//At this point, we need to query the database
$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph","f2TUteC4dQRqL7jR","djoseph");

if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}

$exist = $mysqli->query("SELECT user_id FROM Users WHERE user_id = '$username'");

if(exist->num_rows == 0){
	echo "Only existing users may post!";
	mysqli->close();
	exit();
}

//user exists, so add posts to database

$postContent = "INSERT INTO Posts (author_id,content) VALUES ('$username','$content')";

if($result = $mysqli->query($postContent)){
	echo "Your post was succesfully added.\n";
}
else{
	echo "ERROR: YOur post was not added.\n";
}
	
	
	
mysqli->close();
	*/
	
?>