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
</head>



<body>
    <h1>Welcome <?php echo $_SESSION["adminusername"]; ?> </h1>
    <div class="list-group">

        <a href="userinfo.php" class="list-group-item list-group-item-action action">User's login</a>
        <a href="admininbox.php" class="list-group-item list-group-item-action action">Inbox</a>
        <a href="workpanel.php" class="list-group-item list-group-item-action action">Daily Work</a>
        <a href="changepasswordpage.php" class="list-group-item list-group-item-action">Reset your password</a>
        <a href="employeeregpage.php" class="list-group-item list-group-item-action">Register Employee to the system</a>
        <a href="employeelist.php" class="list-group-item list-group-item-action">Employee List</a>
        <a href="manageemployee.php" class="list-group-item list-group-item-action">Work Status</a>
        <a href="employeemanagement.php" class="list-group-item list-group-item-action">Employee info</a>
        <a href="adminrequestpage.php" class="list-group-item list-group-item-action">Notification</a>
        <a href="coverletterdown.php" class="list-group-item list-group-item-action">Application</a>

        <a href="logout.php" class="list-group-item list-group-item-action">Logout</a>

    </div>
</body>

</html>