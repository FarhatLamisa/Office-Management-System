<?php
session_start();
include_once('connection.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $oldpass = md5($_POST['oldpassword']);
    $newpass = md5($_POST['newpassword']);
    $confirmpass = md5($_POST['confirmpassword']);
}

$query = "select username from user where username='$username' && password='$oldpass'  ";

$userquery = "select username from user where username='$username' ";
$oldpassquery = "select password form user where username = '$username'";

$query1 = "select username from admin where username='$username' && password='$oldpass'  ";

$userquery1 = "select username from admin where username='$username' ";
$oldpassquery1 = "select password form admin where username = '$username'";

if (($userquery != $username) || (md5($oldpassquery) != $oldpass)) {
    echo "Wrong Entry. Try again";
} 
else if (($userquery1 != $username )|| (md5($oldpassquery1) != $oldpass)) {
    echo "Wrong Entry. Try again";
}



if ($oldpass == "") {
    echo "Current Password field is required <br />";
}

if ($newpass == "") {
    echo "New Password field is required <br />";
}

if ($confirmpass == "") {
    echo "Conform Password field is required <br />";
}

$_result = mysqli_query($conn, $query);
$num = mysqli_num_rows($_result);

$_result1 = mysqli_query($conn, $query1);
$num1 = mysqli_num_rows($_result1);

if ($newpass == $confirmpass) {
    if ($num > 0) {
        $update = mysqli_query($conn, "update user set password='$newpass' where username='$username' ");
        $_SESSION['messg1'] = "Password change successfully";
        echo '<script>alert("Password Changed successfully.Login Again")</script>';
        header('location:LOGIN.php');
    }
	else{
		if ($num1 > 0) {
        $update = mysqli_query($conn, "update admin set password='$newpass' where username='$username' ");
        $_SESSION['messg1'] = "Password change successfully";
        echo '<script>alert("Password Changed successfully.Login Again")</script>';
        header('location:LOGIN.php');
    }
	}
} else {
    echo "password not matched";
}
