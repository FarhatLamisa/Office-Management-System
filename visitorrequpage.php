<?php

include "connection.php";
  $sql = "select * from admincontact order by time desc;";
        $result = mysqli_query($conn, $sql);
        $resultCheck  = mysqli_num_rows($result);
		$rowcount = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
 <a style = "color:lightblue" href="admininfo.php">Home</a>
    <table class = "content-table">
	<thead>
        <tr>
            <th>Time</th>
            <th>Full Name<pre></th>
            <th>Email</th>
            <th>Department</th>
            <th>Subject</th>
            <th>Message</th>
            
        </tr>
		</thead>


<?php
if($resultCheck > 0){
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($result)

        ?>
            <tr>
                <td><?php echo $row["time"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["department"] ?></td>
				<td><?php echo $row["subject"] ?></td>
				<td><?php echo $row["message"] ?></td>
            </tr>

        <?php
        }
}else{
	echo "0 Message";
}
        ?>

</body>

</html>