<?php
session_start();
//header('location:LOGIN.php');
$con = mysqli_connect('localhost', 'root');

/*if ($con) {
    echo "Connection Successful.";
} else {
    echo "No connection.";
}*/

mysqli_select_db($con, "intdb");

if (isset($_POST['submit'])) {
$name = $_POST['username'];
$pass = md5($_POST['password']);
$dept = $_POST['department'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
if(strpos($email,'@gmail.com') == false){
	session_destroy();
	echo '<script>alert("Invalid email");LOCATION: register.php</script>';
	echo ' Register Again.';
}
else{
	$q = "select * from user where username='$name'  ";

$_result = mysqli_query($con, $q);
$num = mysqli_num_rows($_result);


if ($num == 1) {
    echo "Username already exist";
} else {
    $qy = "insert into user(username,password,email,address,mobile) values ('$name', '$pass', '$email','$address','$mobile')";
    mysqli_query($con, $qy);
	header('LOCATION: LOGIN.php');
}
}
}
