<?php
session_start();
include 'connection.php';

$que = "select * from workingstatus order by id asc ";


$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Status</title>
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

    </style>
</head>

<body>

    <table class="content-table">
	<thead>
        <tr>
            <td>Day</td>
            <td>Subject</td>
            <td>Details</td>
        </tr>
	</thead>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["Day"] ?></td>
                <td><?php echo $row["Subject"] ?></td>
                <td><?php echo $row["Details"] ?></td>
            </tr>
		
        <?php
       }
        ?>
    </table>


</body>

</html>