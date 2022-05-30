<?php
session_start();
include 'connection.php';


// $con = mysqli_connect('localhost', 'root');

// if ($con) {
//     echo "Connection Successful";
// } else {
//     echo "No connection";
// }

// mysqli_select_db($con, "intdb");

if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $pass = md5($_POST['password']);


    $q = "select * from admin where username='$name' && password='$pass'  ";

    $_result = mysqli_query($conn, $q);
    $num = mysqli_num_rows($_result);



    if ($num == 1) {
        $_SESSION['adminusername'] = $name;

        header('location:admininfo.php');
    } else {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        header('location:ADMIN.php');
    }
}
