<?php
session_start();
if (!isset($_SESSION['adminusername'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpanel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1 style="color:red;background:black">Welcome <?php echo $_SESSION["adminusername"]; ?> </h1>;
<div class="userpanel">
      
        <h2>
        <a href="userinfo.php" >User's login</a><br><br>
        <a href="admininbox.php" >Inbox</a><br><br>
        <a href="workpanel.php" >Daily Work</a><br><br>
        <a href="resetpass.php" >Reset your password</a><br><br>
        <a href="employeeregpage.php" >Register Employee to the system</a><br><br>
        <a href="employeelist.php" >Employee List</a><br><br>
        <a href="manageemployee.php">Work Status</a><br><br>
        <a href="employeemanagement.php" >Employee info</a><br><br>
        <a href="adminrequestpage.php" >Notification</a><br><br>
        <a href="coverletterdown.php" >Application</a><br><br>

        <a href="logout.php">Logout</a><br><br>

        </h2>


</div>
    

</body>

</html>