<?php
	
	
$check = $_POST['isChecked'];

$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph","f2TUteC4dQRqL7jR","djoseph");

if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}
	
$checking = implode("','",$check);

$deletePosts = $mysqli->query("DELETE FROM Posts WHERE post_id in ('$checking')");

if($deletePosts){
	echo "Successfully deleted post(s)";
}	
$mysqli->close();
	
	
?>