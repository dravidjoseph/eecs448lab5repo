<?php
	
//Pass check to php file	
$check = $_POST['isChecked'];

//create an instance
$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph","f2TUteC4dQRqL7jR","djoseph");

//check connection
if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}
	
//remove commas
$checking = implode("','",$check);

//delete the posts selected
$deletePosts = $mysqli->query("DELETE FROM Posts WHERE post_id in ('$checking')");

//execute if posts are deleted
if($deletePosts){
	echo "Successfully deleted post(s)";
}	
//close connection
$mysqli->close();	
?>