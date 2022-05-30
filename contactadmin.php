<?php
require_once "connection.php";
header('location:index.php');




$name = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
$dept = $_POST['concerned_department'];
$title = $_POST['email_title'];
$message = $_POST['visitor_message'];





$que = "insert into admincontact(name,email,department,subject,message) values ('$name','$email','$dept','$title','$message')";
mysqli_query($conn, $que);
