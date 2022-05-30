<?php
session_start();
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM employeeinfo ORDER BY id DESC");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            padding: 40px;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-radius: 2px;
            border-style: solid;
            color: #da2345;

        }

        td {
            padding: 10px;
            margin: 20px 30px;

        }
    </style>
</head>

<body>
    <ul>
        <li><a href="adminpanel.php">Home</a></li>

    </ul>

    <table width='50%' height='15%' border='0'>

        <tr>
            <td>Full Name</td>
            <td>Department</td>
            <td>Birthdate</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Joining Date</td>
            <td>Rating</td>
            <td>Rating</td>


        </tr>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td bgcolor=''>" . $res['fullname'] . "</td>";
            echo "<td>" . $res['department'] . "</td>";
            echo "<td>" . $res['bday'] . "</td>";
            echo "<td>" . $res['address'] . "</td>";
            echo "<td>" . $res['phone'] . "</td>";
            echo "<td>" . $res['email'] . "</td>";
            echo "<td>" . $res['joindate'] . "</td>";
            echo "<td bgcolor='green'><a href=\"manage.php?id=$res[email]\"><font color='white'>Manage</a>";
            echo "<td bgcolor='green'><a href=\"viewrating.php?id=$res[email]\"><font color='white'>View</a>";
        }
        ?>
    </table>


</body>

</html>