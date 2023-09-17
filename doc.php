<!DOCTYPE html>
<html>
<head>
    <title>Edit .bin File</title>
</head>
<body>
    <h1>Edit .bin File</h1>
    <textarea id="fileContent" rows="50" cols="175" style="border:0px">
<?php
    {
        // $binFilePath = 'C:\xampp\htdocs\Simplilegal\documents_trial-Documentts.bin';
        // $binaryData = file_get_contents($binFilePath);
        // echo htmlspecialchars($binaryData);

        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "simpli_legal_login";
        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT Documents FROM documents_trial WHERE Sr_No = '13'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo htmlspecialchars($row["Documents"]);
        } else {
            echo "0 results";
    }}
    ?>
    </textarea>
    <br>
    <button onclick="saveFile()">download</button>
    <br>
    <!-- <button onclick="saveeditedcontent()">save</button>
    <br> -->
    <div id="response"></div>
    <!-- <a href="index.html">Back to Upload</a> -->
    <script>
        function saveFile() {
            var fileContent = document.getElementById("fileContent").value;
            var blob = new Blob([fileContent], { type: 'application/octet-stream' });
            var url = URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.href = url;
            a.download = "edited.bin";
            a.click();
        }
        // function saveeditedcontent(){
        //     var editedContent = document.getElementById("fileContent").value;

        //     var xhr = new XMLHttpRequest();
        //     xhr.open("POST", "doc.php", true);
        //     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        //     xhr.onreadystatechange = function () {
        //         if (xhr.readyState == 4 && xhr.status == 200) {
        //             document.getElementById("response").innerHTML = xhr.responseText;
        //         }
        //     };
        //     xhr.send("editedContent= " + editedContent);
        // }
    </script>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["editedContent"])) {
    //     $editedContent = $_POST["editedContent"];

    //     echo htmlspecialchars($editedContent);

        // $servername = "localhost";
        // $dbusername = "root";
        // $dbpassword = "";
        // $dbname = "simpli_legal_login";
        // $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
        // if ($mysqli->connect_error) {
        //     die("Connection failed: " . $mysqli->connect_error);
        // }
    //}
    ?>
</body>
</html>
