<?php
require_once('connection.php');


if (isset($_REQUEST["submit"])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $path = "upload/" . $file;
    $file1 = explode(".", $file);
    $ext = $file1[1];
    $allowed = array("jpg", "png", "gif", "pdf", "wmv", "pdf", "zip");
    if (in_array($ext, $allowed)) {
        move_uploaded_file($tmp_name, $path);
        // mysqli_query("'$conn','insert into upload(file)values('$file')");

        $que = "insert into upload(name,phone,position,file) values('$name','$phone', '$position', '$file')";
        mysqli_query($conn, $que);
        echo "Thanks for your interest";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover letter</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            text-align: center;
        }

        input {
            margin: 5px 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
	
	<div class="resetpass">
 <form enctype="multipart/form-data" method="post">
 <p>Name:</p>
 <input type = "text" name="name"  class="userinput">
 <p>Phone no:</p>
 <input type = "number" name="oldpassword" id="oldpassword" placeholder="Enter old password">
 <p>Position:</p>
 <input type = "password" name="newpassword" id="newpassword" placeholder="Enter password">
 <input type="file" name="file">
 <input type="submit" name="submit" value="upload">

 </form>
 </div>
</body>

</html>