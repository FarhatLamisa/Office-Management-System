<?php
require_once('connection.php');


$que = "select * from upload order by time desc";


$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            text-align: center;
        }

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
 <ul>
        <li><a href="admininfo.php">Home</a></li>

    </ul>
    <table class="content-table">
      <thead>
	  <tr>
            <th>Time</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Position</th>
            <th>File</th>
        </tr>
		</thead>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["time"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["position"] ?></td>

                <td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>

            </tr>

        <?php
        }

        ?>
    </table>
</body>

</html>