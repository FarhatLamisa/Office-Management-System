<?php
session_start();
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM userrequest WHERE status='decline' ");
$rowcount = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decline request</title>

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
  border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:last-of-type {
  border-bottom: 12px solid #009879;
}
.content-table tbody tr:nth-of-type(even) {
	background-color: #f3f3f3;
}
.content-table tbody tr {
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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<a style="color:lightblue;" href="userpanel.php">Home</a>
    <table class = "content-table">
	<thead>
        <tr>
            <th>Time</th>
            <th>User name</th>
            <th>Subject</th>
            <th>Date & Time</th>
            <th>Message</th>
        </tr>
		</thead>
		
		 <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($result)

        ?>
            <tr>
			    <td><?php echo $row["time"] ?></td>
                <td><?php echo $row["user"] ?></td>
                <td><?php echo $row["reason"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
                <td><?php echo $row["message"] ?></td>
                <td><?php echo $row["room"] ?></td>

            </tr>

        <?php
        }

        ?>
    </table>


</body>

</html>