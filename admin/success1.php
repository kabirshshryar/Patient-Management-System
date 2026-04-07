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

$sql = "INSERT INTO users (name, username, passport, address, email, password)
VALUES ('$_POST[name]', '$_POST[username]', '$_POST[passport]', '$_POST[address]', '$_POST[email]', '$_POST[password]')";

if ($conn->query($sql) === TRUE) {
  echo "Account created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<head>
<title>Redirecting...</title>
<script>
    setTimeout(function() {
        window.location.href = "login.php";
    }, 2000); // 2 seconds
</script>
</head>
<body>
<p>Redirecting to <a href="login.php">Login</a> in 2 seconds...</p>
</body>
</html>
