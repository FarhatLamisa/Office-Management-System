<?php
session_start();
include_once("connection.php");








if (isset($_POST['update'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $date = mysqli_real_escape_string($conn, $_POST['dateno']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);



    if (empty($rating) || empty($date)) {

        if (empty($date)) {
            echo "<font color='red'>Date field is empty.</font><br/>";
        }

        if (empty($rating)) {
            echo "<font color='red'>Rating field is empty.</font><br/>";
        }
    } else {

        $result = mysqli_query($conn, "insert into employeerating set email ='$id', rating='$rating', day='$date' ");


        header("Location: manageemployee.php");
    }
}
?>


<head>
    <title>Edit Data</title>
</head>

<body>


    <ul>
        <li><a href="adminpanel.php">Home</a></li>

    </ul>


    <form name="form1" method="post" action="manage.php">
        <table border="0">


            <tr>
                <td>Rating</td>
                <td><input type="date" name="dateno" value=""></td>
            </tr>


            <tr>
                <td>Rating</td>
                <td><input type="number" name="rating" value=""></td>
            </tr>


            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Rate now"></td>
            </tr>






        </table>

    </form>







</body>

</html>