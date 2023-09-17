<html>
<head>
    <meta charset="UTF-8">
    <title>Residential Rental Agreement</title>
</head>
<body>
<textarea name="resirent" id="resirent" cols="175" rows="75" class="form-control">
<?php
    {
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "simpli_legal_login";
        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT Documents FROM documents_trial WHERE Sr_No = '15'";
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
<button onclick="goback()">Back</button>



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
        function goback(){
            window.location.href = "http://127.0.0.1:5000/new";
        }
</script>
</body>
</html>
