<?php

session_start();
include_once("connection.php");

if (isset($_POST['decline'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $decline = "decline";

    $result = mysqli_query($conn, "update userrequest set status='$decline' where id=$id");
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
    <title>Decline Panel</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
<a style = "color:lightblue" href="admininfo.php">Home</a>
    <form name="form1" method="post" action="requestdecline.php">
		
		<div class="resetpass">
 <p>Username:</p>
 <input type = "text" value="<?php echo $user; ?>">
 <p>Subject:</p>
 <input type = "text" value="<?php echo $reason; ?>">
 <p>Date & Time:</p>
 <input type = "date" value="<?php echo $datetime; ?>">
 <p>Message:</p>
 <input type = "text" value="<?php echo $message; ?>">
 <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
 <input type="submit" name="decline" value="Decline">
 </form>
</div>
    </form>
</body>

</html>