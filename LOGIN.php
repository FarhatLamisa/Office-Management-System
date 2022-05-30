<?php
session_start();
include_once("connection.php");


if (isset($_POST['submit'])) {

  $name = $_POST['username'];
  $pass = md5($_POST['password']);

  //$adminname = $_POST['username'];
  //$adminpass = md5($_POST['password']);

  $q = "select * from user where username='$name' && password='$pass'  ";

  $_result = mysqli_query($conn, $q);
  $num = mysqli_num_rows($_result);


  //$q1 = "select * from admin where username='$adminname' && password='$adminpass'";

  $_result1 = mysqli_query($conn, $q1);
  $num1 = mysqli_num_rows($_result1);


  if ($num == 1) {
    $_SESSION['username'] = $name;

    header('location:userpanel.php');
  } 
  /*else if ($num1 == 1) {
    $_SESSION['adminusername'] = $adminname;

    header('location:admininfo.php');
  } */
  else {
    echo '<script>alert("Wrong Username/Password.Try again")</script>';
    // header('location:login.php');
  }
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LOGIN.Menu</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>


  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
    <header>Menu</header>
    <ul>
      <li><a href="about.php"><i class="fas fa-qrcode"></i>ABOUT</a></li>
      <li><a href="contactpage.php"><i class="fas fa-link"></i>CONTACT US</a></li>
      <li><a href="LOGIN.php"><i class="fas fa-stream"></i>LOGIN</a></li>
	  <li><a href="ADMIN.php"><i class="fas fa-calendar-week"></i>ADMIN</a></li>
        <li><a href="circularpage.php"><i class="fas fa-calendar-week"></i>CV DROP</a></li>
    </ul>
  </div>




  <section class="loginsection">
    <div class="loginbox">
      <image src="images/login.png" style="height:15%; width:20%;" class="avatar">
        <h1>Login here</h1>


        <form action="LOGIN.php" method="post">
          <p>User name:</p>
          <input type="text" name="username" id="username" placeholder="Enter username">
          <p>Password:</p>
          <input type="password" name="password" id="password" placeholder="Enter password">

          <button type="submit" name="submit" id="submit">Log in</button>

          <br><a href="forgotpass.php">Forgot password?</a>
          <br><a href="register.php">Don't have an account?</a>
        </form>


    </div>
  </section>





</body>

</html>