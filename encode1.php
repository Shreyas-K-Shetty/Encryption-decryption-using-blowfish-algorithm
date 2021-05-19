<?php
$db=mysqli_connect('sql6.freesqldatabase.com','sql6413337
','y1Ekex9mu8') or die("could not connect to database");
$user_name=mysqli_real_escape_string($db,$_POST['uname']);
$invisible=mysqli_real_escape_string($db,$_POST['uname1']);
// $query="update login set cypher='$username' where username='$invisible'";
// mysqli_query($db,$query) or die("Failed to execute the Query :( . Try Again !");
// $db->close();


echo $invisible;



require_once('blowfish.php');

$examples = array(
  array(  'd)U>tQwbUWIozi2R"fOvK0Wuxyl79P%Uxr>;7iiy,b0hByATUB',
          'x03nMwK34x&ciSUH0I1got',
          $user_name
  ),
//   array(  'RiV3wc615X6J2lzK',
//           'QndancjtdZ&b_J5aeId62x7Kxu`[dFFt{t7yGcS+O!w7JbAlQe',
//           'p'
//   ),
//   array(  'd)U>tQwbUWIozi2R"fOvK0Wuxyl79P%Uxr>;7iiy,b0hByATUB',
//           'x03nMwK34x&ciSUH0I1got',
//           'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
//   ),
//   array(  'This is my secret key and it can be plain text',
//           'What about this initialisation vector?',
//           'I hope you know this invalidates my warranty'
//   ),
//   array(  'This is my secret key and it can be plain test',
//           'What about this initialisation vector?',
//           '' # no password
//   ),

);

foreach ($examples as $ex) {
  $ciphertext = Blowfish::encrypt(
                //   $ex[2],
                  $user_name,
                  'd)U>tQwbUWIozi2R"fOvK0Wuxyl79P%Uxr>;7iiy,b0hByATUB',
                //   $ex[0], # encryption key
                  Blowfish::BLOWFISH_MODE_CBC, # Encryption Mode
                  Blowfish::BLOWFISH_PADDING_RFC, # Padding Style
                  'x03nMwK34x&ciSUH0I1got'
                //   $ex[1]  # Initialisation Vector - required for CBC
  );
  // echo $ciphertext;
  $deciphered = Blowfish::decrypt(
    $ciphertext,
      'd)U>tQwbUWIozi2R"fOvK0Wuxyl79P%Uxr>;7iiy,b0hByATUB',
      Blowfish::BLOWFISH_MODE_CBC, # Encryption Mode
      Blowfish::BLOWFISH_PADDING_RFC, # Padding Style
      'x03nMwK34x&ciSUH0I1got'  # Initialisation Vector - required for CBC
);
  

  
}
 





  echo '<pre>';
  printf('Plaintext: %s (length %d)%s', $ex[2], strlen($ex[2]), PHP_EOL);
  printf('Ciphertext: %s (length %d)%s', $ciphertext, strlen($ciphertext), PHP_EOL);
  printf('Deciphered text: %s (length %d)%s', $deciphered, strlen($deciphered), PHP_EOL);

  $query="update login set plaintext='".$user_name."' , cyphertext='" .$ciphertext."' , decyphertext='".$deciphered."' where username='" . $invisible . "';";
//   $query="Update login set cypher='" . $ciphertext ."' where username='" . $invisible . "';";
  // echo $query;

  mysqli_query($db,$query) or die("Failed to execute the Query :( . Try Again !");
  $db->close();
 
  header("Location:scene1.php");  
  

//   $sql = "select * from login limit 1";
// $result = $db->query($sql);

// if ($result->num_rows > 0) {
  
//   while($row = $result->fetch_assoc()) {
//     $username1= $row["cypher"];
//     echo $username1;
//   }
// }
    
    
   

//  }
?>