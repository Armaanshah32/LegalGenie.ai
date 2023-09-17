<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["editedContent"])) {
        $email = $_GET['message'];
        $userEmail = urldecode($email);
        $editedContent = $_POST["editedContent"];

        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "simpli_legal_login";

        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo $userEmail;
        $sql = "SELECT Doc1, Doc2, Doc3, Doc4 FROM login_details WHERE email = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("s", $userEmail);

        $stmt->execute();

        $result = $stmt->get_result();

        $sql = "UPDATE login_details SET Doc1 = ? WHERE email = ?";
        $stmt1 = $conn->prepare($sql);
        
        $stmt1->bind_param("ss", $editedContent, $userEmail);

        $stmt1->execute();

        if ($stmt1->execute()) {
            echo "Content updated and saved to the database for user with email: " . $userEmail;
        } else {
            echo "Error updating content: " . $stmt->error;
        }
        
        $stmt->close();
        $conn->close();
    }
    ?>