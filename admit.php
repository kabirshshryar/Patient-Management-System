<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipatient";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO patients (name, passport, dob, gender, address, phone)
VALUES ('$_POST[name]', '$_POST[passport]', '$_POST[dob]', '$_POST[gender]', '$_POST[address]', '$_POST[phone]')";

if ($conn->query($sql) === TRUE) {
  echo "Admitted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
!DOCTYPE html>
<html>
<head>
<title>Redirecting...</title>
<script>
    setTimeout(function() {
        window.location.href = "dashboard.php";
    }, 2000); // 2 seconds
</script>
</head>
<body>
<p>Redirecting to <a href="dashboard.php">Dashboard</a> in 2 seconds...</p>
</body>
</html>