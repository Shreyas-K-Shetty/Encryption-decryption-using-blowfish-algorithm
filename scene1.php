<?php
$db=mysqli_connect('sql6.freesqldatabase.com','sql6413337
','y1Ekex9mu8') or die("could not connect to database");

$sql = "select * from login limit 1";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $username1= $row["username"];
    $decypher=$row["decyphertext"];
    // echo $username1;
  }
}


?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body background="encryption.jpg" style="background-repeat: no-repeat;background-size: cover; text-align: center;">
  <p> <div style="text-align: left;"> 
  
    </div></p>

    <p><div style="text-align:right ;">
        <button type="button" onclick="alert_1()">Logout</button></a>
        <script type="text/javascript">
          function alert_1() 
          {
             var r = confirm("Do You Want to Logout");
            if (r == true) {
                alert("You pressed OK!")
                window.location.assign("login.html")
           } 
                }
          
         
           </script>
          
    </div></p>
    <hr>
    <div class="container">
      <form method="POST" action="encode1.php">
        <label for="uname"><b style="color:white">Enter Text</b></label>
        <input type="text" placeholder="Enter Text" name="uname" required><br>
        <input type="hidden"  name="uname1" value="<?php echo $username1 ?>">
      <button type="submit" >Encode</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- <a href="decode.php"><button type="button" onclick="myFunction()" >Decode</button></a>
       -->
       
        
      
      </form>
     
      <!-- if(strlen($decypher)!=0)
      {
        echo '<input type="text" value=" '. $decypher . ' "id="myText" disabled>';
      }
      else{
        echo '<input type="text" value="Decyphered text contains empty string :(" id="myText" disabled>';
      } -->
      
    
      <form method="POST" action="scene2.php">
      
      <button type="submit" onclick="toggle()" >Decode</button>
      </form>
        
           
          
        
        <a href="login.html"><button type="button" class="cancelbtn">Back</button></a>
      

</html>