<?php
session_start();
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM userinbox ORDER BY time DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin Inbox</title>

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
    </style>
</head>

<body>

   <a href="admininfo.php">Home</a>

    <table  class="content-table">
<thead>
        <tr>
            <td>Time</td>
            <td>User name</td>
            <td>Message</td>
			<td>Last reply</td>
        </tr>
	</thead>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td bgcolor=''>" . $res['time'] . "</td>";
            echo "<td bgcolor=''>" . $res['username'] . "</td>";
            echo "<td bgcolor=''>" . $res['message'] . "</td>";
			echo "<td bgcolor=''>" . $res['messagereply'] . "</td>";
            echo "<td bgcolor='green'><a href=\"adminreply.php?id=$res[id]\"><font color='white'>Reply</a>";
        }
        ?>
    </table>


</body>

</html>