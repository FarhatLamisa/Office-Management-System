<?php

include_once("connection.php");

if (isset($_POST['reply'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $messagereply = mysqli_real_escape_string($conn, $_POST['messagereply']);
	$messagereply_query = mysqli_query($conn, "select * from userinbox where id=$id");

        if (empty($messagereply)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
     else {

        $result = mysqli_query($conn, "update userinbox set messagereply='$messagereply'  where id=$id");


        header("Location: admininbox.php");
    }

}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM userinbox WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $message = $res['message'];
	$messagereply = $res['messagereply'];
}
?>
<html>

<head>
    <title>Message</title>
</head>

<body>
   <a href="admininfo.php">Home</a>

    <form name="form1" method="post" action="adminreply.php">
        <table border="0">


            <tr>
                <td>Message</td>
                <td><input type="text" name="message" value=<?php echo $message; ?>></td>
            </tr>

            <tr>
                <td>Message</td>
                <td><input type="text" name="messagereply" value=<?php echo $messagereply; ?>></td>
            </tr>







            <tr>
                <td><input type="hidden" name="id" value = <?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="reply" value="Reply"></td>
            </tr>






        </table>
    </form>
</body>

</html>