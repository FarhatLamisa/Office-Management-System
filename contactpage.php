<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactpage</title>
   <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
   <style>
        body {
           font-family: 'Roboto', sans-serif;
  margin: 0;
	padding: 0;
	background-image: url(admin.png);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;

        }

        .loginbox{
	width: 380px;
	height: 450px;
	background: #000;
	color: #fff;
	top: 50%;
	left:50%;
	position:absolute;
	transform: translate(-50%,-50%);
	box-sizing:border-box;
	padding: 30px 30px;
}

    </style>
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
    <form action="contactadmin.php" method="post">
        <div class="loginbox">
            <p>Your Name</p>
            <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
            <p>Your E-mail<p>
            <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
            <p>Choose Concerned Department<p>
            <select id="department-selection" name="concerned_department" required>
                <option value="">Select a Department</option>
                <option value="billing">Billing</option>
                <option value="marketing">Marketing</option>
                <option value="technicalsupport">Technical Support</option>
            </select><br><br>
            <p>Reason For Contacting Us<p>
            <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
       
            <p>Write your message<p>
            <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
        
        <button type="submit">Send Message</button>
		</div>
    </form>

    


</body>

</html>