<?php

session_start();

// Connect to the database
require_once 'dbconnect.php';

// If user is successfully logged in, direct towards home.php
if (isset($_SESSION['userSession'])!="") {
 header("Location: home.php");
 exit;
}

// Evaluate form values when login-form is posted
if (isset($_POST['btn-login'])) {

 $email = strip_tags($_POST['email']);
 $password = strip_tags($_POST['password']);

 $email = $DBcon->real_escape_string($email);
 $password = $DBcon->real_escape_string($password);

 $query = $DBcon->query("SELECT ID, email, password, userName FROM adminUsers WHERE email='$email'");

 $row=$query->fetch_array();
 $count = $query->num_rows;

 // if password verification is ok and only one row was found in the users table
 if (password_verify($password, $row['password']) && $count==1) {

  // Set session variables
  $_SESSION['userSession'] = $row['ID'];
  $_SESSION['userName'] = $row['name'];
  // direct towards home.php
  header("Location: home.php");

 } else {

  // Set error login message
  $msg = "<div class='alert alert-danger'>
           <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
          </div>";
 }

 // Close database connection
 $DBcon->close();

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

 <!-- your css and scripts go here -->
 <!-- ... -->


</head>
<body>

 <form class="form-signin" method="post" id="login-form">

  <h2 class="form-signin-heading">SIGN IN</h2>
   <?php if(isset($msg)){ echo $msg; } ?>

   <div class="form-group">
    <input type="email" class="form-control" placeholder="Email address" name="email" required />
    <span id="check-e"></span>
   </div>

   <div class="form-group">
    <input type="password" class="form-control" placeholder="Password" name="password" required />
   </div>

   <div class="form-group">
    <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
   </button>

   <a href="register.php" class="btn btn-default" style="float:right;">Sign up here</a>

   <a href="forgotPassword.php" class="btn btn-default">Forgot your password?</a>

  </div>

 </form>

    </form>
</body>
</html>
