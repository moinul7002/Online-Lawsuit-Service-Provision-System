<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 

if(isset($_POST['create']))
{
$lawyer=$_POST['lawyer'];
$sql="INSERT INTO  tbllawyers(LawyerName) VALUES(:lawyer)";
$query = $dbh->prepare($sql);
$query->bindParam(':lawyer',$lawyer,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Lawyer Listed successfully";
header('location:manage-lawyers.php');
}
else 
{
$_SESSION['error']="Something went wrong. Please try again";
header('location:manage-lawyers.php');
}

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="lawyer" content="" />
    <title>Online Lawsuit Service Provision System | Add Lawyer</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wra
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Lawyer</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
<div class="panel panel-info">
<div class="panel-heading">
Lawyer Info
</div>
<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Lawyer Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="lawyer" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Bar Council ID<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="id" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Designation<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="designation" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Area of Expertise<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="AreaofExpertise" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>National ID<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="NID" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Total Case<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="TotalCase" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Solved Case<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="SolvedCase" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Fees<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="Fee" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Contact<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="Contact" autocomplete="off"  required />
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Address<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="Address" autocomplete="off"  required />
</div>

<button type="submit" name="create" class="btn btn-info">Add </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
   
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
<?php } ?>
