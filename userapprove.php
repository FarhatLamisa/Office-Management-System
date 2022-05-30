<?php
session_start();
include 'connection.php';
$uname = $_SESSION['username'];

$result = mysqli_query($conn, "SELECT * FROM userrequest
WHERE status='approve' and user='$uname' ");
$rowcount = mysqli_num_rows($result);

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

   <a href="userpanel.php">Home</a>

    <table class="content-table" >
	<thead>
        <tr>
            <td>Time</td>
            <td>Subject</td>
            <td>Date & Time</td>
            <td>Message</td>
            <td>Approved Room</td>

        </tr>
	</thead>
      <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($result)

        ?>
		 <tr>
                <td><?php echo $row["time"] ?></td>
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