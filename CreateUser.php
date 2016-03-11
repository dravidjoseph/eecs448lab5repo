<?

//connect to the database

$mysqli = new mysqli("https://mysql.eecs.ku.edu",djoseph,f2TUteC4dQRqL7jR,djoseph);
$username = $_POST["name"];*/
echo $username;	

//Check connection
if($mysqli->connect_errno){
	
	printf("Connect failed: $s\n",$mysql->connect_error);
	exit();
}

$insert = "INSERT INTO Users (user_id) VALUES $username";


$mysqli->close();
	
	
	
	
	
	
	
	
?>