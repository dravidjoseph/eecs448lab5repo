<?php
	
$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph","f2TUteC4dQRqL7jR","djoseph");

if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}

$user = $mysqli->query("SELECT user_id FROM Users");

echo '<table>';
echo '<th>Users</th>';


while($row = mysqli_fetch_array($user)){
	
	$user = $row['user_id'];
	echo '<tr><td>.$username.</td><tr>';
	
}
echo '</table>';

$mysqli->close();
?>