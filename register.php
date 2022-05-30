<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>register Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="register-form">
		<form method="post" id="register" action="userregistration.php">
			<!---<img src="images/login.png"--->
			<h1>Register Here</h1>
			
			<label>Username:</label><br>
			<input type="text" name="username" id="name" class="input-box" placeholder="Username"><br><br>

			<!--<label>First Name:</label><br>
			<input type="text" name="Fname" id="name" class="input-box" placeholder="First name"><br><br>

			<label>Last Name:</label><br>
			<input type="text" name="Lname" id="name" class="input-box" placeholder="Last name"><br><br>-->

			<label>Mobile Number:</label><br>
			<input type="number" name="mobile" id="num" class="input-box" placeholder="Mobile number"><br><br>

			<label>Address:</label><br>
			<input type="text" name="address" id="name" class="input-box" placeholder="Address"><br><br>


			<label>Email:</label><br>
			<input type="email" name="email" id="name" class="input-box" placeholder="Email"><br><br>

			<label>Password:</label><br>
			<input type="password" name="password" id="name" class="input-box" placeholder="Password"><br><br>
			
			<label>Department:</label><br>
            <input type="text" name="department" class="input-box" placeholder="Department"></br>
				
			<!---<label>Re-enter password:</label><br>
			<input type="password" name="pass" id="name" class="input-box" placeholder="Password"><br><br>-->

			<br><label>Gender:</label><br>
			<input type="radio" name="male"><span id="male">&nbsp; Male</span>&nbsp;&nbsp;
			<input type="radio" name="male"><span id="male">&nbsp; Female</span>&nbsp;&nbsp;
			<input type="radio" name="male"><span id="male">&nbsp; Others</span>&nbsp;&nbsp;



			<p><input type="checkbox">I agree to the terms and conditions</p>
			<button type="submit" name="submit">Register</button>
			<hr>
			<p>Do you have an account? <a href="LOGIN.php">Log in</a></p>
		</form>
	</div>
</body>

</html>