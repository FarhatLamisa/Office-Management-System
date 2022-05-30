<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM user where username= '$username'");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminfeedback</title>
	<style>
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="userpanel">
   <a style="color:lightblue;" href="userpanel.php">Home</a>
    
        <?php

        while ($res = mysqli_fetch_array($result)) {


           echo "<br><a href=\"adminmessage.php?id=$res[id]\"><font color='white'><font size='6px'>Your Messages</a>";
           echo "<br><a href=\"yourrequest.php?id=$res[id]\"><font color='white'><font size='6px'>Your Requests</a>";
        }
        ?>
		</div>
</body>

</html>