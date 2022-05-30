<?php
if(isset($_POST['submit']))
{
session_start();

$con = mysqli_connect("localhost", "root");

if ($con) {
    echo "Connection Successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, "intdb");

$name = $_POST['username'];
$pass = $_POST['password'];

$q = "select * from user where username='$name' && password='$pass'  ";

$_result = mysqli_query($con, $q);
$num = mysqli_num_rows($_result);

if ($num == 1) {
    $_SESSION['username'] = $name;
    $_SESSION['department'] = $dept;
    header('location:userpanel.php');
} else {
    echo '<script>alert("Wrong Username/Password.Try again")</script>';
    header('location:LOGIN.php');
}
}
