<?php
session_start();
include 'connection.php';
$email = $_GET['id'];
$que = "select * from employeerating where email = '$email' ";

$que2 = "select * from employeeinfo where email = '$email' ";

$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);

$_result2 = mysqli_query($conn, $que2);
$rowcount2 = mysqli_num_rows($_result2);


?>

<?php

$email = $_GET['id'];
$query = "SELECT AVG(rating) FROM employeerating where email = '$email' ";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
    if ($row['AVG(rating)'] >= 5) {
        echo "The average Rating is: Excellent ";
    } else if ($row['AVG(rating)'] >= 4 && $row['AVG(rating)'] < 5) {
        echo 'The average Rating is: Good';
    } else if ($row['AVG(rating)'] >= 3 && $row['AVG(rating)'] < 4) {
        echo 'The average Rating is: Average';
    } else if ($row['AVG(rating)'] >= 2 && $row['AVG(rating)'] < 3) {
        echo 'The average Rating is: bad';
    } else if ($row['AVG(rating)'] >= 1 && $row['AVG(rating)'] < 2) {
        echo 'The average Rating is: Very Bad';
    } else {
        echo 'Rating has not done yet';
    }
    echo "<br />";
}
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

        }

        th {
            padding: 20px;
            Color: #da2345;
        }



        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

    <table>
        <tr>

            <td>Fullname</td>
            <td>Department</td>
            <td>Birthday</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Joining Date</td>
            <td>Employee Photo</td>

        </tr>
        <?php
        for ($i = 1; $i <= $rowcount2; $i++) {

            $row = mysqli_fetch_array($_result2)

        ?>
            <tr>
                <td><?php echo $row["fullname"] ?></td>
                <td><?php echo $row["department"] ?></td>
                <td><?php echo $row["bday"] ?></td>
                <td><?php echo $row["address"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["joindate"] ?></td>

                <td><img src="upload/<?php echo $row["image"] ?>"></img>
                </td>

            </tr>

        <?php
        }

        ?>
    </table>

    <table>
        <tr>

            <td>Day</td>
            <td>Rating</td>


        </tr>
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
            <tr>
                <td><?php echo $row["day"] ?></td>
                <td><?php if ($row["rating"] == 5) {
                        echo 'Excellent';
                    } else if ($row["rating"] == 4) {
                        echo 'Good';
                    } else if ($row["rating"] == 3) {
                        echo 'Average';
                    } else if ($row["rating"] == 2) {
                        echo 'bad';
                    } else {
                        echo 'Very Bad';
                    }



                    ?></td>




            </tr>

        <?php
        }

        ?>
    </table>







</body>

</html>