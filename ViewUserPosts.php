<?php
	
//place appropriate user for php to process
$username = $_POST["user"];

//establish connection
$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph","f2TUteC4dQRqL7jR","djoseph");

//check connection
if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}

//Get posts for specific user
$userPosts = $mysqli->query("SELECT content FROM Posts WHERE author_id = '$username'");


//print user and posts for user
echo '<table border = "1" style = "width = 100%">';
echo '<th>Post From '.$username.'</th>';

while($row = mysqli_fetch_array($userPosts)){
	$post = $row['content'];
	echo '<tr><td>'.$post.'</td></tr>';
}

echo '</table>';	
?>