<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>reset password</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">


<body>
 <div class="resetpass">
 <form action="changepassworduser.php" method="post">
 <p>User name:</p>
 <input type = "text" name="username" id="username" placeholder="Enter username">
 <!--<p>Email:</p>
 <input type = "email" name="email" id="email" placeholder="Enter email">-->
 <p>Old password:</p>
 <input type = "password" name="oldpassword" id="oldpassword" placeholder="Enter old password">
 <p>New Password:</p>
 <input type = "password" name="newpassword" id="newpassword" placeholder="Enter password">
 <p>Confirm password:</p>
 <input type = "password" name="confirmpassword" id="confirmpassword" placeholder="Enter password">
 <!---<input type = "submit"  name="" value="Login">--->
 <button type="submit"  name="submit" id="submit">Submit</button>
 </form>
 </div>
</body>
</head>
</html>