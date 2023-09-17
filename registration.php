<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Page </title> 
    <link rel="stylesheet" href="register.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="registration.php" method = "post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" id="name" required>
        
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" name="email" id="email"required>
        
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="create" id="create"required>
        
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confirm" id="confirm" required>
        
      </div>
      
      <div class="input-box button">
        <button type="Submit" onclick="if(checkAll()==true)">Register</button>
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
  <script src="register.js"></script>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["create"];
        $checkpass = $_POST["confirm"];
        $password_pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,16}$/';

        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "simpli_legal_login";
        
        
        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM login_details WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
          echo "Error: Email already exists in the database.";
        }
        else {
          
        if (preg_match($password_pattern, $password)) {
          if($password == $checkpass) {
            $sql = "INSERT INTO `Login_details` (`Name`, `Email`, `Password`) VALUES ('$username', '$email', '$password');";
            $result = mysqli_query($conn, $sql); 
            if(!$result) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
             header('Location: login.php');
          }
          else
          {
            echo("Passwords do not match " . mysqli_error($conn));
          }
        }
        else {
          echo("Password must contain atleast 1 uppercase, 1 lowercase, 1 number and must be between 8-16 characters long");
        }
        mysqli_close($conn);
    }
  }
?>

</body>
</html>