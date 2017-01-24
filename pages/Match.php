<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evaluation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$user = $_POST["username"];
$pass = $_POST["password"];


$sql = "SELECT * FROM tbl_student WHERE SID = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	if($row['Password']==$pass){
		if($row['Password'] == 'ckcadmin' ){
			header("location: index.php");
		}else{
		header("location: userfirst.php"); }
    }
	else{
		header("location: login.php");
	echo 'not success!';
	}
}
	
}
$conn->close();
?> 	