<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM userrequest where user= '$username' AND status='' ");

$rowcount = mysqli_num_rows($result);

$result2 = mysqli_query($conn, "SELECT * FROM userrequest where user= '$username' AND status='approve' ");

$rowcount2 = mysqli_num_rows($result2);

$result3 = mysqli_query($conn, "SELECT * FROM userrequest where user= '$username' AND status='decline' ");

$rowcount3 = mysqli_num_rows($result3);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Your request</title>

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
 a {
    text-decoration: none;
	color:white;	
	font-size:20px;
    }
a:hover{
	color:lightblue;	
}
.table-div{
	background-color: rgb(0,0,0);
	background-color: rgba(0,0,0,0.4);
	height: 1000px;
}
    </style>
</head>

<body>
<div class="table-div">
    <h1>Pending</h1>
    <table class="content-table">
	<thead>
        <tr>

            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>
            <td>Room Number</td>
        </tr>
	</thead>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($result)

        ?>
            <tr>
                <td><?php echo $row["reason"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
                <td><?php echo $row["message"] ?></td>
                <td><?php echo $row["room"] ?></td>
            </tr>

        <?php
        }

        ?>
    </table><br><br>

    <h1>Approved</h1>
    <table class="content-table">
	<thead>
        <tr>

            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>
            <td>Room Number</td>


        </tr>
	</thead>
        <?php
        for ($i = 1; $i <= $rowcount2; $i++) {

            $row = mysqli_fetch_array($result2)

        ?>
            <tr>
                <td><?php echo $row["reason"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
                <td><?php echo $row["message"] ?></td>
                <td><?php echo $row["room"] ?></td>
            </tr>

        <?php
        }

        ?>
    </table><br><br>


    <h1>Declined</h1>
    <table class="content-table">
	<thead>
        <tr>

            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>
        </tr>
	</thead>
        <?php
        for ($i = 1; $i <= $rowcount3; $i++) {

            $row = mysqli_fetch_array($result3)

        ?>
            <tr>
                <td><?php echo $row["reason"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
                <td><?php echo $row["message"] ?></td>

            </tr>

        <?php
        }

        ?>
    </table>


</div>

</body>

</html>