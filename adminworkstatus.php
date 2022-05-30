<?php
require_once('connection.php');


if (isset($_REQUEST["submit"])) {
    $day = $_POST['day'];
    $subject = $_POST['subject'];
    $details = $_POST['details'];





    $que = "insert into workingstatus(Day,Subject,Details) values('$day','$subject','$details')";




    mysqli_query($conn, $que);

    header('location:adminworkstatus.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a request</title>
    <style>
    .register-form textarea{
    color:white;
    width:100%;
    padding:10px;
    background:black;
    border-radius:10px;
    font-size:15px;
    font-weight:bold;
    margin:10px 0;
    outline:auto;
    cursor:pointer;
}
.register-form datetime-local{
    color:white;
    width:100%;
    padding:10px;
    background:black;
    border-radius:10px;
    font-size:15px;
    font-weight:bold;
    margin:10px 0;
    outline:auto;
    cursor:pointer;
}
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

   
     <a href="workpanel.php">Home</a>

    

    <form action="adminworkstatus.php" method="post">
        <!-- <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
        </div> -->

        <div class="register-form">
            
            <label>Date and time</label>
                <input type="datetime-local" value="" name="datetime" id="datetime-local-input">
            <label for="message">Subject</label>
            <textarea id="message" name="message" placeholder="Say Subject." required></textarea>
             <label for="message">Details</label>
            <textarea id="message" name="message" placeholder="Say whatever you want." required></textarea>
            
             <button type="submit" name="submit">Send Request</button>
        </div> 
    </form>
</body>
</html>

