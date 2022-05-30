<?php
error_reporting(0);
$errors ='';
if($_POST['submit']=='send')
{

    //keep it inside


    $email=$_POST['email'];


    $password = md5($_GET['passsword']);


    $con=mysqli_connect("Localhost","root","","intdb");


    // Check connection


    if (mysqli_connect_errno())


    {


      echo "Failed to connect to MySQL: " . mysqli_connect_error();


    }


    $query = mysqli_query($con,"SELECT * FROM user WHERE email='$email'")


    or die(mysqli_error($con));




    if (mysqli_num_rows ($query)==1)


    {


        $code= rand(100,999);


        $message="You activation link is:http://www.soengsouy.com//.php?email='$email'&code='$code'";


        mail($email, "Send Code", $message);


        echo 'Email sent';


        $query2 = mysqli_query($con,"UPDATE user SET passsword='$password' WHERE email='$email'")


        or die(mysqli_error($con)); 


        }


        else


        {


       $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';


    }


}




?>



<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>forgot password</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
<body>
 <div class="forgotpass">
 <form>
 <!--<p>User name:</p>
 <input type = "text" name="" placeholder="Enter username">-->
 <p>Email:</p>
 <input type = "email" name="" placeholder="Enter email">
 <!---<input type = "submit"  name="" value="Login">--->
 <button type="submit"  name="submit" value="send" >Submit</button>
 </form>
 </div>
</body>
</head>
</html>