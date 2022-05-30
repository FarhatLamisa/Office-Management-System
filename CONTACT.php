<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CONTACT.Menu</US>
  </title>
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
          <li><a href="circularpage.php"><i class="fas fa-calendar-week"></i>ADMIN</a></li>

    </ul>
  </div>

  <h1 class='contactheader'>CONTACT US</h1>


  <section class="contactsection">
    <div class="Contactus" >

      <div class="form">
        <div class="form-items">
          <input type="text" text="black" class="input" placeholder="Username">
          <i class="fas fa-user"></i>
        </div>
        <div class="form-items">
          <input type="text" class="input" placeholder="Email">
          <i class="fas fa-envelope"></i>
        </div>

        <div class="form-items">
          <input type="text" class="input" placeholder="Department">
          <i class="fas fa-user"></i>
        </div>
        <div class="form-items">
          <textarea class="input message" cols="30" rows="10" placeholder="Message....."></textarea>
        </div>


        <div class="btn">
          Submit
          <i class="fas fa-arrow-right"></i>
        </div>




      </div>


    </div>



  </section>



</body>

</html>