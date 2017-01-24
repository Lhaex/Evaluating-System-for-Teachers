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


print_r($_POST);
$x = $_POST['run']-1;
$z=1;

echo $x;
//echo $_POST[check1];

// while (!$z ==  $x){
	// echo $z;
 
// }

while ($z <= $x){
    $sql = "INSERT INTO tbl_evaluation (StudentID,SubjectID,QID,Rating, Comment) VALUES ('c14-0088', '$_POST[sub]', '$z', '".$_POST['check'.$z]."', '$_POST[comment]'  )";
	$result = mysqli_query($conn, $sql);
    $z++;
}

$sql = "UPDATE tbl_studentsubject SET Status='1' WHERE StudentID='c14-0088'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
} 


//$sql = "INSERT INTO tbl_evaluation (StudentID,SubjectID,QID,Rating)
//VALUES ('c14-0124', 'IT16', '$_POST[QID]', '$_POST[cheack$run]' )";

// if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
// } else {
    // echo "Error updating record: " . $conn->error;
// }

$conn->close();
header("location: user.php");
?>
	
	
