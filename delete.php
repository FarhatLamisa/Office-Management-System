<?php

include_once("connection.php");

if (isset($_POST['delete'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);

    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $joindate = mysqli_real_escape_string($conn, $_POST['joiningdate']);



    $result = mysqli_query($conn, "delete from employeeinfo where id=$id");

    header("Location: admininfo.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM employeeinfo WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $name = $res['fullname'];
    $department  = $res['department'];
    $bday = $res['bday'];
    $address = $res['address'];
    $phone = $res['phone'];
    $email = $res['email'];
    $joindate = $res['joindate'];
}
?>
<html>

<head>
    <title>Delete Data</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
     <ul>
        <li><a href="admininfo.php">Home</a></li>

    </ul>
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
 <input type="submit" name="delete" value="Delete">
 </form>
</div>
</body>

</html>