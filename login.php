<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page </title> 
    <link rel="stylesheet" href="login.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name ="pass"required>
      </div>
      <div class="input-box button">
        <button type="Submit">Login</button>
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="registration.php">Register now</a></h3>
      </div>
    </form>
  </div>


<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "simpli_legal_login";

  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
  $sql = "SELECT * FROM login_details WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $pass);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
          $_SESSION["loggedin"] = true;
          $url = "http://127.0.0.1:5000/";  
    echo "<script>window.open('$url', '_blank');</script>";
    exit();
        }
        else{
          echo "Invalid username or password";
        }

}

?>
</body>
</html>