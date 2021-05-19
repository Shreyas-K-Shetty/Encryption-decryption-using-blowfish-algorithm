<?php
$db=mysqli_connect('sql6.freesqldatabase.com','sql6413337
','y1Ekex9mu8') or die("could not connect to database");
$invisible=mysqli_real_escape_string($db,$_POST['uname2']);
echo $invisible;

$sql = "select * from login where username =  '$invisible'";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $firstname1= $row["decyphertext"];
    echo $firstname1;
    header("Location:scene1.php?uname2='$firstname1'");  
  }

} else {
  echo "0 results";
}
?>