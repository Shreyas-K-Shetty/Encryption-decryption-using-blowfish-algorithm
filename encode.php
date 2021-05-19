<?php
$db=mysqli_connect('sql6.freesqldatabase.com','sql6413337
','y1Ekex9mu8') or die("could not connect to database");
$user_name=mysqli_real_escape_string($db,$_POST['uname']);
$invisible=mysqli_real_escape_string($db,$_POST['uname1']);
echo $invisible;