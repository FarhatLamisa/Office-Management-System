<?php
session_start();
if (!isset($_SESSION['adminusername'])) {
    header('location:index.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
 <div class="admininfo" >
    <a style="color:lightblue;font-size:15px;" href="admininfo.php">Back</a>
       <h2> <a href="adminworkstatus.php">Make a Request</a><br></h2>
       <h2> <a href="declaredwork.php">Pending</a><br></h2>
       
    </div>

</body>
</html>
