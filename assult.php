<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<?php
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Lawsuit Service Provision System | User Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 20px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

</head>
          <!------MENU SECTION START-->
<?php include('includes/header1.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">USER DASHBOARD</h4>
                
                            </div>

        </div>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lawyer";

// Create connection
$conn = new mysqli($servername,$username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['crime_sub']))
{
	
	$crime=mysqli_real_escape_string($conn,$_POST['crime']);
	$result=mysqli_query($conn,"SELECT * FROM tbllawyers WHERE `Area of Expertise`='$crime'");
	echo "<br><table class='table table-striped table-bordered'>";
	echo "<tr><th colspan='9'><center>Lawyer's Information of Crime Type: ".$crime."</center></th></tr>";
	echo "<tr>";
	echo "<th>BCID</th>";
	echo "<th>Name</th>";
	echo "<th>Designation</th>";
	echo "<th>NID</th>";
	echo "<th>Total Case</th>";
	echo "<th>Solved Case</th>";
	echo "<th>Fee</th>";
	echo "<th>Address</th>";
	echo "<th>Contact</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($result))
	{
		$lawyer=$row['LawyerName'];
		$bcid=$row['BCID'];
		$des=$row['Designation'];
		$nid=$row['NID'];
		$t_case=$row['TotalCase'];
		$s_case=$row['SolvedCase'];
		$fee=$row['Fee'];
		$address=$row['Address'];
		$contact=$row['Contact'];
		
		echo "<tr>";
		echo "<td>".$bcid."</td>";
		echo "<td>".$lawyer."</td>";
		echo "<td>".$des."</td>";
		echo "<td>".$nid."</td>";
		echo "<td>".$t_case."</td>";
		echo "<td>".$s_case."</td>";
		echo "<td>".$fee."</td>";
		echo "<td>".$address."</td>";
		echo "<td>".$contact."</td>";
		echo "</tr>";
		
		
		
		
	}
	echo "</table>";
}
$conn->close();
?>
  
</div>
    </div>  
<!-- CONTENT-WRAPPER SECTION END-->
<?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
    