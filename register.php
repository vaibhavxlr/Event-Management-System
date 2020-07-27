<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
	<link rel="stylesheet" href="frontside/Bootstrap 4/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="frontside/Bootstrap 4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body background="blue.jpg">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="home.php">
    <img src="sv.png" alt="logo" style="width:40px;">
  </a>

  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="services.php">Services</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="contact.php">Contact Us</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="register.php">New User? Register</a>
    </li>
  </ul>
</nav>
<center>
<div class="card bg-light mb-3" style="max-width: 50rem;">
  <div class="card-header"><h2>Registeration Form</h2></div>
  <div class="card-body">
    <h4 class="card-title">Enter your details here....</h4>
    <p class="card-text">
    	<form method="post">
    		Enter your name:
    		<input type="text" name="uname" class="form-control"/><br>
    		Enter your email:
    		<input type="email" name="email" class="form-control"/><br>
            Set username:
            <input type="text" name="username" class="form-control"/><br>
            Set Password:
            <input type="password" name="passwd" class="form-control"/><br>
            Enter date of birth:
            <input type="date" name="dob" class="form-control"/><br>
            Enter address of correspondence:
            <input type="text" name="addr" class="form-control"/><br><br>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
    	</form>
    </p>
  </div>
</div>
</center>

<?php
include('db.php');

      if(isset($_POST['register']))
      {
      	 $un=$_POST['uname'];
         $em=$_POST['email'];
         $u=$_POST['username'];
         $p=$_POST['passwd'];
         $d=$_POST['dob'];
         $a=$_POST['addr'];

         $qry=mysqli_query($con,"INSERT INTO `user`(`uname`, `email`, `username`, `passwd`, `dob`, `addr`) VALUES('$un','$em','$u','$p','$d','$a')") or die(mysqli_error($con));
         if($qry==true)
         {
         	echo "
         	    <script>
         	         alert('registered successfully');
                  window.location='index.php';
         	    </script>
         	";

         }
         else
         {
         	echo "
         	    <script>
         	         alert('failed');
                  window.location='register.php';
         	    </script>
         	";
         }
      }

?>

</body>
</html>


