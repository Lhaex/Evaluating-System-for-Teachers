<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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

 <script>
$(document).ready(function(){
    $("button").click(function(){
        $("this").toggle();
    });
});
</script>
</head>

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
                <a class="navbar-brand" href="userfirst.php">Admin </a>
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
                   
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

     											<form method="POST" action="evaluate.php">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <strong><h4>Direction:</strong></h4>
						<p>
						Please read the statements carefully and answer all of them as truthfully and objectively as possible. Keep in mind that the statements below refer only to the performance of your intructor
						 in this subject. <br>This is Confidential. Your honest, objective and sincere appraisal of your teacher's performance is a gesture of being responsible student who cares for the school in the 
						  pursuit of delivering excellent instruction.<br><br><i>
							Please Select the appropriate column to your choices, giving your nearest estimate of the performance and abilities of your teacher.
						 </i>
						</p>
						<table class = "table">
						<thead>
						<tr>
						<th>
						RATING ENTERPRETAION:
						</tr>
						</th>
						</thead>
						<tbody>
						<tr>
						<td>
						</td>
						<td>
						<strong>O</strong>
						</td>
						<td>
						<strong>Out Standing</strong>
						</td><td>
						<strong>Performance is Constantly exceptional</strong>
						</td>
						
						</tr>
						<tr>
						<td>
						</td>
						<td>
						<strong>AA</strong>
						</td>
						<td>
						<strong>Above Average</strong>
						</td><td>
						<strong>Performance surpasses standards</strong>
						</td>
						</tr>
						<tr>
						<td>
						</td>
						<td>
						<strong>A</strong>
						</td>
						<td>
						<strong>Average</strong>
						</td><td>
						<strong>Performace meets standards</strong>
						</td>
						</tr>
						<tr>
						<td>
						</td>
						<td>
						<strong>BA</strong>
						</td>
						<td>
						<strong>Below Average</strong>
						</td><td>
						<strong>Performance occassionally does not meet standards</strong>
						</td>
						</tr>
						<tr>
						<td>
						</td>
						<td>
						
						<strong>P</strong>
						</td>
						<td>
						<strong>Poor</strong>
						</td><td>
						<strong>Performance does not measure up to standards</strong>
						</td>
						</tr>
						
						
						
						</tbody>
						</table>
						
						<div class="panel-heading">
						
						
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
									<tr>
									<th>
									
									Subject:
						<?php echo ' '.$_POST["Subject"]; 
						if($_POST["Subject"] == ''){
							header("location:userfirst.php");
						}
						?>
							
						
									
									
									</th>
									<th>
									School Year:  2016-2017
									 
									 
									 
									 
									 
									 
									</th>
									</tr>
									<tr>
									<th>
								Teacher:
									<select name="Teacher" id ="Teacher" >
						<option> </option>
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
 $sub = $_POST['Subject'];
									
	$sql = "SELECT * FROM tbl_subject, tbl_teachersubject WHERE tbl_subject.SubID = '$_POST[Subject]' AND tbl_teachersubject.SubID = tbl_subject.SubID";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
		$val = $row["SubID"];
		 echo  '<option value="'.$row["Teacher"].'">'.$row["Teacher"].'</option>';
		
				
    }
} else {
    echo "0 results";
}


?> </select>
									
									
									
									
									
									
									</th>
									<th>
									Semister: 1st
									</th>
									</tr>
                                        <tr>
										<th>
										
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
									
	$sql = "SELECT AID, Description FROM tbl_attributes WHERE AID = 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
         echo 'A.'.' '.$row["Description"];

				
    }
} else {
    echo "0 results";
}

?> 
										
										
										
										
										
										
										</th>
										</tr>
										<tr>
                                            <th>#</th>
                                            <th>Question</th>
											 <th>O</th>
                                            <th>AA</th>
											 <th>A</th>
                                            <th>BA</th>
											 <th>P</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>    						

											
										
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

$sql = "SELECT QID,Question FROM tbl_forma WHERE AID = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$run=1;
    while($row = $result->fetch_assoc()) {
         echo '<tr><td>'.$row["QID"].'</td><td>'.$row["Question"].'</td>';
				
				echo "";
				echo "<td>" . "<input type=radio name='check$run' value=5 required>";
				echo "<td>" . "<input type=radio name='check$run' value=4 required>";
				echo "<td>" . "<input type=radio name='check$run' value=3 required>";
				echo "<td>" . "<input type=radio name='check$run' value=2 required>";
				echo "<td>" . "<input type=radio name='check$run' value=1 required>";
				echo   ""."</tr>";
	$run++;			
    }
} else {
    echo "0 results";
}

?> 

					
												
	
	
	
											
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
						
						
						
						
						
						<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
										<th>
										
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
									
	$sql = "SELECT AID, Description FROM tbl_attributes WHERE AID = 2";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
         echo 'B.'.' '.$row["Description"];

				
    }
} else {
    echo "0 results";
}

?> 
										
										
										
										
										
										
										</th>
										</tr>
										<tr>
                                            <th>#</th>
                                            <th>Question</th>
											 <th>O</th>
                                            <th>AA</th>
											 <th>A</th>
                                            <th>BA</th>
											 <th>P</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>    						
											
											
										
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

$sql = "SELECT QID,Question FROM tbl_forma WHERE AID = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
         echo '<tr><td>'.$row["QID"].'</td><td>'.$row["Question"].'</td>';
				
				echo "";
				echo "<td>" . "<input type=radio name='check$run' value=5 required>";
				echo "<td>" . "<input type=radio name='check$run' value=4 required>";
				echo "<td>" . "<input type=radio name='check$run' value=3 required>";
				echo "<td>" . "<input type=radio name='check$run' value=2 required>";
				echo "<td>" . "<input type=radio name='check$run' value=1 required>";
				echo   ""."</tr>";
	$run++;			
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
<input type="hidden" name="run" value="<?php echo $run; ?>"/>
<input type="hidden" name="sub" value="<?php echo $sub; ?>"/>
	
					
												
	
	
	
											
                                    </tbody>
                                </table>Comment:
								<div class="form-group">
                                     <textarea name="comment" rows="5" cols="100"></textarea>

                                </div>
								
									<button>Submit</button>
											</form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
					
					
					<!-- /.panel -->
                </div>
				
			
      
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
