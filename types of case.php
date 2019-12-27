<?php
session_start();
error_reporting(0);
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
<?php include('includes/header1.php');?>
<body>
    <h1>Types of Case</h1>
    <h2>Local Court hears :</h2>
    <ul style="list-style-type:circle">
  <li>civil cases</li>
  <li>criminal cases</li>
  <li>bail applications</li>
  <li>applications for apprehended violence orders(AVO)</li>
  <li>some family law cases</li>
  <li>appeals against decisions of the RMS</li>
  <li>annulment applications ...... etc</li>
</ul>
    
    <h2>District Court hears :</h2>
    <ul style="list-style-type:circle">
  <li>civil claims</li>
  <li>criminal cases</li>
  <li>residual jurisdiction</li>
  <li>Appeals of loacal court</li>
  <li>Children's Court desicions ...... etc</li>
</ul>
    
    <h2>Supreme Court and High court hears :</h2>
    <ul style="list-style-type:circle">
  <li>Income Tax Reference</li>
  <li>Letter of Administration Suit</li>
  <li>Merchant Shipping</li>
  <li>Trademark Appeal</li>
  <li>Civil Petition ..... etc</li>
</ul>


</body>

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
    