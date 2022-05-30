<?php

include_once("connection.php");

if (isset($_POST['update'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);

    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $joindate = mysqli_real_escape_string($conn, $_POST['joiningdate']);


    if (empty($name) || empty($department) || empty($bday) || empty($address) || empty($phone)  || empty($email) || empty($joindate)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($department)) {
            echo "<font color='red'>Department field is empty.</font><br/>";
        }

        if (empty($bday)) {
            echo "<font color='red'>Birtdate field is empty.</font><br/>";
        }

        if (empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }

        if (empty($phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }

        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if (empty($joindate)) {
            echo "<font color='red'>Joining feild is empty.</font><br/>";
        }
    } else {

        $result = mysqli_query($conn, "update employeeinfo set fullname='$name',department='$department',bday='$bday',address='$address', phone='$phone', email='$email', joindate='$joindate'  where id=$id");


        header("Location: admininfo.php");
    }
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM employeeinfo WHERE id=$id")or die("Error: " . mysqli_error($conn));

while ($row = mysqli_fetch_array($result)) {
	$name = $row['fullname'];
    $department  = $row['department'];
    $bday = $row['bday'];
    $address = $row['address'];
    $phone = $row['phone'];
    $email = $row['email'];
    $joindate = $row['joindate'];
}
?>
<html>

<head>
    <title>Edit Data</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
    <a style = "color:lightblue" href="admininfo.php">Home</a>
 <div class="resetpass">
 <form name="form1" method="post" action="edit.php">
 <p>Full name:</p>
 <input type = "text" name="fullname" id="fullname" value="<?php echo $name; ?>" placeholder="Enter fullname">
 <p>Department:</p>
 <input type = "text" name="department" id="department" value="<?php echo $department; ?>" placeholder="Enter department">
 <p>Birthdate:</p>
 <input type = "date" name="bday" id="bday" value="<?php echo $bday; ?>" placeholder="Enter birthdate">
 <p>Address:</p>
 <input type = "text" name="address" id="address" value="<?php echo $address; ?>" placeholder="Enter address">
 <p>Phone:</p>
 <input type = "number" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="Enter phone">
 <p>Email:</p>
 <input type = "email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Enter email">
 <p>Joining Date:</p>
 <input type = "date" name="joiningdate" id="joiningdate" value="<?php echo $joindate; ?>" placeholder="Enter joining date">
 <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
 <input type="submit" name="update" value="Update">
 </form>
</div>
</body>

</html>