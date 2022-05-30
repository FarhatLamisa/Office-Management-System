<?php

session_start();
include_once("connection.php");

if (isset($_POST['approve'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $room = mysqli_real_escape_string($conn, $_POST['roomnumber']);
    $approve = "approve";

    $result = mysqli_query($conn, "update userrequest set status='$approve',room='$room' where id=$id");
    header("Location: userrequest.php");
}
?>


<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM userrequest WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $user = $res['user'];
    $reason  = $res['reason'];
    $datetime = $res['datetime'];
    $message = $res['message'];
}
?>
<html>

<head>
    <title>Approve Panel</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
<a style = "color:lightblue" href="admininfo.php">Home</a>
    <form name="form1" method="post" action="requestapprove.php">
	<div class="resetpass">
 <p>Username:</p>
 <input type = "text" value="<?php echo $user; ?>">
 <p>Subject:</p>
 <input type = "text" value="<?php echo $reason; ?>">
 <p>Date & Time:</p>
 <input type = "date" value="<?php echo $datetime; ?>">
 <p>Message:</p>
 <input type = "text" value="<?php echo $message; ?>">
 <p>Room Number</p>
 <input type="text" name="roomnumber" value="">
 <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
 <input type="submit" name="approve" value="Approve">
 </form>
</div>
    </form>
</body>

</html>