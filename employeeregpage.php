<?php
require_once('connection.php');


if (isset($_REQUEST["submit"])) {
    $name = $_POST['fullname'];
    $department = $_POST['department'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $join = $_POST['joiningdate'];

    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $path = "upload/" . $file;
    $file1 = explode(".", $file);
    $ext = $file1[1];
    $allowed = array("jpg", "png", "gif", "pdf", "wmv", "pdf", "zip");
    if (in_array($ext, $allowed)) {
        move_uploaded_file($tmp_name, $path);
        // mysqli_query("'$conn','insert into upload(file)values('$file')");

        $q = "select * from employeeinfo where phone='$phone'  ";

        $_result = mysqli_query($conn, $q);
        $num = mysqli_num_rows($_result);

        if ($num == 1) {
            echo "Employee already exist";
        } else {

            $que = "insert into employeeinfo(fullname,department,bday,address,email,phone,joindate,image) values('$name','$department','$birthday','$address','$email','$phone', '$join','$file')";




            mysqli_query($conn, $que);

            header('location:admininfo.php');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Register employee</title>

    <style>
        form {
            text-align: center;
        }

        input {
            margin: 5px 5px;
            padding: 5px;
        }
    </style>
</head>

<body>


 <a style="color:white;font-size:20px;" href="admininfo.php">Home</a>
<div style="width:500px;" class="register-form">

    <form enctype="multipart/form-data" method="post">


        <label>Fullname</label>
        <input type="text" name="fullname" class="userinput"></br>
        <label>Department</label>
        <input type="text" name="department" class="userinput"></br>
        <label>Birthday</label>
        <input type="date" name="birthday" class="userinput"></br>
        <label>Address</label>
        <input type="text" name="address" class="userinput"></br>
        <label>Phone</label>
        <input type="number" name="phone" class="userinput"></br>
        <label>Email</label>
        <input type="email" name="email" class="userinput"></br>
        <label>Joining Date</label>
        <input type="date" name="joiningdate" class="userinput"></br>

        <label>Employee Profile Picture</label>
        <input type="file" name="file">
        <button type="submit" name="submit" value="upload">Submit</button>

    </form>
	</div>
</body>

</html>