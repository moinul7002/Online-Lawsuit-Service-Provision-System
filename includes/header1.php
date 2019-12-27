

<?php if($_SESSION['login'])
{
?>

          <!------MENU SECTION START-->

<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Welcome to Online Lawyer Management System</h4>
                
                            </div>

        </div>
<!----- Nabbar-->
            

<nav class=""navbar navbar-expand-sm bg-light navbar-blue"">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li><a href="law.php">Lawyers</a></li>
      <li><a href="types%20of%20case.php">Types of Case</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>    
      <ul class="nav navbar-nav navbar-right">
          <li><a href="dashboard.php"><span class="glyphicon glyphicon-user"></span>User Dashboard</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>

    </ul>
  </div>
</nav>
<?php } else {  ?>


          <!------MENU SECTION START-->

<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Welcome to Online Lawsuit Service Provision System</h4>
                
                            </div>

        </div>
<!----- Nabbar-->
            

<nav class=""navbar navbar-expand-sm bg-light navbar-blue"">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li><a href="law.php">Lawyers</a></li>
      <li><a href="types%20of%20case.php">Types of Case</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>    
      <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="userlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login(user)</a></li>
      <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login(admin)</a></li>

    </ul>
  </div>
</nav>
<?php }  ?>
             

    