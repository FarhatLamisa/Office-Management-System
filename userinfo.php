<?php
session_start();
include 'connection.php';

 $sql = "select * from user;";
 $result = mysqli_query($conn, $sql);
 $resultCheck  = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>


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


    <table class="content-table">
	<thead>
        <tr>
            <th>username</th>
            <th>Password</th>
        </tr>
	</thead>


        <?php
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['username'] . "</td><td>" . $row["password"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 User";
        }
        ?>
</body>

</html>