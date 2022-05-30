<?php
require 'adminvalidation.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN.Menu</title>
    <link rel="stylesheet" href="style.css">
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
<section class="adminsection">
    <div class="adminsection">
      <h1>ADMIN</h1>
      <form action="adminvalidation.php" method="post">
          <p>User Name:</p>
          <input type = "text" name="username" placeholder="Enter username">
          <p>Password:</p>
          <input type = "password" name="password" placeholder="Enter password">
          <button type="submit"  name="submit" >Enter</button>
      </form>
    </div>

 </section>

  </body>
</html>
