<?php
session_start();
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM employeeinfo ORDER BY id DESC");
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
   <a href="admininfo.php">Home</a>

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
            <th>Update</th>
			<th>Delete</th>
	    </tr>
	</thead>

        
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($result)

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
				<?php
				echo "<td bgcolor='green'><a href='edit.php?id=$row[id]'><font color='white'>Edit</a></td>";
                echo "<td bgcolor='green'><a href='delete.php?id=$row[id]'><font color='white'>Delete</a> </td>";
				?>

            </tr>

        <?php
        }

        ?>
    </table>


</body>

</html>