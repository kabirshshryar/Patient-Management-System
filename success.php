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
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>ipatients</title>
	
</head>
<body>
	<?php include('header.php');?>
	<section id="hero">
    <div class="container1">
<center>
<img src="assets/img/cover.png">
<h2 style="font-size:32px; padding:15px">Successfully Account Created!</h2><br>
 <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</a>

</center>
		<footer id="footer">
<div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>iPatient</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        
          Designed by <a href="">Md. Shahriar Kabir</a>
        </div>
		</div>
    </div>
  </footer>
</body>
</html>
