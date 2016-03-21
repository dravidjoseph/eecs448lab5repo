<?php
	
//establish connection
$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph","f2TUteC4dQRqL7jR","djoseph");

//connection error
if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}

//query user ids
$user = $mysqli->query("SELECT user_id FROM Users");

//print out user table
echo '<table border = "1" style = "width = 100%">';
echo '<th>Users</th>';


while($row = mysqli_fetch_array($user)){
	
	$individual = $row['user_id'];
	echo '<tr><td>'.$individual.'</td><tr>';
	
}
echo '</table>';

$mysqli->close();
?>