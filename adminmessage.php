<?php
session_start();
include_once("connection.php");
$uname = $_SESSION['username'];
$que = "select * from userinbox where username='$uname' ";


$_result = mysqli_query($conn, $que);
$rowcount = mysqli_num_rows($_result);

if (isset($_POST['submit'])) {

    $name = $_SESSION['username'];
    $message = $_POST['message'];





    $qy = "insert into userinbox(username,message) values ('$name', '$message')";
    mysqli_query($conn, $qy);
    header('location:adminmessage.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
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
  background-color:black;
  color:white;
}
.content-table thead tr {
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
 a {
    text-decoration: none;
	color:white;	
	font-size:20px;
    }
a:hover{
	color:lightblue;	
}
.col-md-3{
	background-color:black;
	height:150px;
	width:250px;
	color:white;
	box-sizing:border-box;
	padding: 30px 30px;
}
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div  class="container">
 <a href="userpanel.php">Home</a>
 <h1>Chatting</h1>
 <div class="row">
 <div class="col-md-3">
    <form action="adminmessage.php" method="post">

            <label for="message">Write your message</label><br>
            <textarea id="message" name="message" placeholder="Say whatever you want." required></textarea>
      
        <button type="submit" name="submit">Send</button>
    </form>

</div>
<div class="col-md-9">
        <?php
        for ($i = 1; $i <= $rowcount; $i++) {

            $row = mysqli_fetch_array($_result)

        ?>
		
		<table class="content-table">
		<thead>
        <tr>
            <td>You:</td>
            <td>Admin:</td>
        </tr>
	    </thead>
                <td>
                   <?php echo $row["message"] ?>
                </td>
			
                <td>
                   <?php echo $row["messagereply"] ?>
                </td>


        <?php
        }

        ?>
		</table><br><br>
</div>
</div>

</div>

</body>

</html>