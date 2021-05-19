<?php
$db=mysqli_connect('sql6.freesqldatabase.com','sql6413337
','y1Ekex9mu8') or die("could not connect to database");

$username=mysqli_real_escape_string($db,$_POST['uname']);
$password=mysqli_real_escape_string($db,$_POST['psw']);
header("Location:login.html");
$query="insert into login (username,password) VALUES('$username','$password')";
mysqli_query($db,$query) or die("Failed to execute the Query :( . Try Again !");
$db->close();

?>