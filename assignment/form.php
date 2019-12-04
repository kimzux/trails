<?php


 if(isset($_POST['submit'])) {


$email=$_POST['email'];
$psw1=$_POST['psw1'];
$psw2=$_POST['psw2'];

$db=mysqli_connect('localhost','root','123456','webapp');
$query="INSERT INTO register(email,password) VALUES('$email',SHA('$psw1'))";
if($psw1==$psw2)

{
  mysqli_query($db,$query);
  echo "<h1 style='font-size:32px;color:black;'>USER CREATED SUCCESSFUL</h1>";
}
else{
     echo "password doesnot match"; 
}

mysqli_close($db);


 }
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" type="text/css" href="style.css">

    <title>welcome to register</title>
  </head>
  <body>

  <form action="form.php" method="POST" enctype="form-data/multipart">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw1" required>

    <label for="psw-repeat"><b>Retype Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw2" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="submit">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
  </body>
</html>
</body>
</html>



