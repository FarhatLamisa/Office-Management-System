<?php
session_start();
include 'connection.php';
$que = "select * from employeeinfo order by id asc";
$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);

if(isset($_POST['search'])){
    $choose = $_POST['chosenItem'];
if($choose == "fullname"){
	$name = $_POST['valueToSearch'];
    $que = "select * from employeeinfo where fullname = '$name'";
    $_result = mysqli_query($conn, $que);
    $rowcount = mysqli_num_rows($_result);
}
else if($choose == "address"){
	$name = $_POST['valueToSearch'];
    $que = "select * from employeeinfo where address = '$name'";
    $_result = mysqli_query($conn, $que);
    $rowcount = mysqli_num_rows($_result);
}
else if($choose == "id"){
	$name = $_POST['valueToSearch'];
    $que = "select * from employeeinfo where id = '$name'";
	$_result = mysqli_query($conn, $que);
    $rowcount = mysqli_num_rows($_result);
}
else if($choose == "department"){
	$name = $_POST['valueToSearch'];
	$que = "select * from employeeinfo where department = '$name'";
	$_result = mysqli_query($conn, $que);
    $rowcount = mysqli_num_rows($_result);
}
else if($choose == "email"){
	$name = $_POST['valueToSearch'];
	$que = "select * from employeeinfo where email = '$name'";
	$_result = mysqli_query($conn, $que);
    $rowcount = mysqli_num_rows($_result);
}
else if($choose == "Full list"){
	$que = "select * from employeeinfo order by id asc";
	$_result = mysqli_query($conn, $que);
    $rowcount = mysqli_num_rows($_result);
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    <style>
        img {
            width: 100px;
            height: 100px;
        }
   .content-table{
  border-collapse: collapse;
  margin: auto;
  font-size: 0.9em;
  min-width: 700px;
  border-radius: 5px 5px 0 0;
  background-color:white;
}
.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}
.content-table th,
.content-table td {
  padding: 12px 15px;
}
.content-table tbody tr:nth-of-type(even) {
	background-color: #f3f3f3;
}
.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:last-of-type {
  border-bottom: 12px solid #009879;
}
.box{
	background-color:black;
	color:white;
}
.button{
	position:fixed;
   top:0;
   right:100;
   color:white
   text-align:left
}
 </style>
</head>

<body>
<div class = "box">
<form action = "employeelistpage.php" method = "post">
<p>Search by:<p>
            <select id="item" name="chosenItem" required>
                <option value="">Choose an option</option>
                <option value="fullname">Fullname</option>
                <option value="id">ID</option>
                <option value="address">Address</option>
				<option value="department">Department</option>
				<option value="email">Email</option>
				<option value="Full list">Full list</option>
            </select><br><br>
<input type="text" name="valueToSearch" placeholder="value"><br><br>
<input type="submit" name="search" value="search">
<button type = "button"> <a href ="userpanel.php">Back</a></button>
</form>
</div>
    <table class="content-table">
	<thead>
        <tr>
		    <th>ID</th>
		    <th>Fullname</th>
            <th>Department</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Joining Date</th>
            <th>Employee Photo</th>
	    </tr>
	</thead>

        
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
			    <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["fullname"] ?></td>
                <td><?php echo $row["department"] ?></td>
                <td><?php echo $row["bday"] ?></td>
                <td><?php echo $row["address"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["joindate"] ?></td>

                <td><img src="upload/<?php echo $row["image"] ?>"></img>
                </td>

            </tr>

        <?php
        }

        ?>
    </table>

</body>

</html>