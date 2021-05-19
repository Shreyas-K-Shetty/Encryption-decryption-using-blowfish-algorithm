<?php
$db=mysqli_connect('sql6.freesqldatabase.com','sql6413337
','y1Ekex9mu8') or die("could not connect to database");
$name = $_POST["uname"]; 
$password = $_POST["psw"]; 
echo $name;

$sql = "select * from login where username = '$name'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
      $usernamedb= $row["username"];
      
      $passworddb=$row["password"];
    }
     echo nl2br("'$usernamedb'\n'$passworddb'");
   
} else {
  echo "0 results";
}
if($name == $usernamedb && $password == $passworddb) 
            { 
                header("Location:scene1.php?variable_name=$name");
            }
            else
            {
               
               header("Location:login.html");
            }
?>