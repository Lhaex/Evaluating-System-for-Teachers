<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 
</head>
<style>
.jumbotron{
	width:75%;
}
</style>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                    
                    

                <!-- /.dropdown -->
                <li class="dropdown">  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                   
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="teacher.php">Teachers</a>
                                </li>
                                <li>
                                    <a href="userlist.php">Students</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="form.php"><i class="fa fa-edit fa-fw"></i>Evaluation Forms</a>
                        </li>
                       
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<form action="exteacher.php" method="POST">
        <div id="page-wrapper">
          <div class="container">
  <div class="jumbotron">
   Name:<br>
 
   <br><br>
   <table class="table">
   <thead>
   <tr>
   <th>
   Subject
   </th>
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

$sql = "SELECT Description FROM tbl_attributes ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
         echo '<th>'.$row["Description"].'</th>';
				
				
			
    }
} else {
    echo "";
}
$conn->close();
?> 
	<th>
	General Average
	</th>
   </tr>
   
   </thead>
   <tbody>
   <tr>
   <?php
if($_POST["teac"] == ''){
	   header("location:exteacher.php");
   
   }else{
		
	echo '<td><strong>'.$_POST["teac"]. '</strong></td>'; } 
?>  
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
$run = 1;
$sql = "SELECT DISTINCT QID FROM tbl_evaluation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $run++;
    }
} else {
    echo "";
}
$run=$run-1;

?> 
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
$stud = 0;
$sql = "SELECT DISTINCT StudentID FROM tbl_evaluation";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
		$stud++;
		 
		
				
    }
} else {
    echo "";
}



$num = 0;
$sql = "SELECT DISTINCT QID FROM tbl_evaluation";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
		
		$num = $row['QID'];
		
		 
		 
		 
		 
				
    }
} else {
    echo "";
}


$sum=0;
$value=0;

$z=1;

while($z <= $num){
$sum = 0;
$value = 0;
$k = 1;
$test = false;
$sql = "SELECT * FROM tbl_evaluation WHERE QID = '$z' AND SubjectID = '$_POST[teac]'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
			$test = true;
		   $value = $row['Rating'];

		    $sum += $value;
		
				
    }
} else {
    echo "";
}


  $sum = $sum / $stud;

 
    $sql = "INSERT INTO tbl_formula (QID,Rating, SubjectID) VALUES ('$z', '$sum','$_POST[teac]')";
	$res = mysqli_query($conn, $sql);


  


$z++;

}
	

?> 



</td>

	<?php
	if($test == true){
	$value=0;
	$total=0;
	$count=0;
$sql = "SELECT tbl_forma.AID, tbl_forma.QID, tbl_formula.QID , tbl_formula.Rating FROM tbl_forma, tbl_formula WHERE tbl_forma.QID = tbl_formula.QID AND tbl_forma.AID = '1' AND tbl_formula.SubjectID = '$_POST[teac]'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
			
		   $value = $row['Rating'];
			
		    $total += $value;
		
			$count++;
				
    }
} else {
    echo "";
}
	
	//$total = $total / $count;
	$total = $total / $count;
	echo '<td>'.$total.'</td>';
	
	$value=0;
	$total=0;
	$count=0;

$sql = "SELECT tbl_forma.AID, tbl_forma.QID, tbl_formula.QID , tbl_formula.Rating FROM tbl_forma, tbl_formula WHERE tbl_forma.QID = tbl_formula.QID AND tbl_forma.AID = '2' AND tbl_formula.SubjectID = '$_POST[teac]'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
			
		   $value = $row['Rating'];

		    $total += $value;
		$count++;
				
    }
} else {
    echo "";
}

	//$total = $total / $count;
	$total = $total / $count;
	echo '<td>'.$total.'</td>';
	
	
	
	$value=0;
	$total=0;
	$s=1;
	$xx = $num+1;
	$sql = "SELECT * FROM tbl_formula WHERE SubjectID = '$_POST[teac]'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
			if($s != $xx){
		   $value = $row['Rating'];

		    $total += $value;
			$s++; }
		}
    }
 else {
    echo "";
}

	//$total = $total / $count;
	$total = $total / $num;
	echo '<td>'.$total.'</td>';
	
	
	
	
	
	
	}
	?>
	

   </tr>
  </tbody>
   </table>
   
    <?php
	if($test == true){
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
$l=0;
$ll=0;
$per=0;
$sql = "SELECT * FROM tbl_studentsubject WHERE SubjectID = '$_POST[teac]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $ll++; 
	  if($row['Status'] == '1' ){
	  $l++;}
    }
} else {
    echo "";
}


$per = $ll / $l;
$per = 100 / $per;}
$conn->close();
?> 
   
   Note: There are <?phpif($test == true){ echo $per;?}else{ echo '0';}>% more assigned students that are not finished evaluating this teacher.  
   
   
   
   <button> Post Rating</button>
   
   
   </form>
   
   
   
   </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
