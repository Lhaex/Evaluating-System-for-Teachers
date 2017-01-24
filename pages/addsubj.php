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

$sql = "SELECT * FROM tbl_student WHERE coursecode = '$_POST[course]' AND level = '$_POST[level]'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
		
		$sql = "INSERT INTO tbl_studentsubject (StudentID, SubID)
	VALUES ('$row[SID]', '$_POST[Subj]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		
		
		 echo  '<option value="'.$row["coursecode"].'">'.$row["coursecode"].'</option>';
		
				
    }
} else {
    echo "0 results";
}



$conn->close();
//header('Location: form.php');
?>