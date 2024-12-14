<?php 

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'db_database';

     $connection = mysqli_connect($hostname, $username, $password, $db_name);

     if($connection == true) {
          echo '';
     } else {
          echo 'Database connection failed';
     }

     if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
     }

     $sql = "INSERT INTO user_info(username,password) VALUES('$username','$password')";
     $result = mysqli_query($connection, $sql);

     if($result == true) {
          echo '';
     } else {
          echo 'error';
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Animation_login_form</title>

     <link rel="stylesheet" href="/Animation_login_from/style.css">
</head>
<body>
     
     <div class="box">
          <span class="animate"></span>
          <form action="" method="POST">
               <h2>Sign in</h2>

               <div class="inputbox">
                    <input type="text" name="username" required>
                    <span>Username</span>
                    <i></i>
               </div>

               <div class="inputbox">
                    <input type="password" name="password" required>
                    <span>Password</span>
                    <i></i>
               </div>

               <div class="links">
                    <a href="#">Forgot Password</a>
                    <a href="#" class="up">Sign Up</a>
               </div>

               <input type="submit" name="submit" value="Login">
          </form>
     </div>

</body>
</html>