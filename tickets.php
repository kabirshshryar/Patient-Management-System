<!DOCTYPE html>
<html>
<head>
<title>ipatients</title>
<link href="style.css" rel="stylesheet">
	<style>
		.content1{
		align-content: center;
		background: #FFFFFF;
		border-radius: 40px;
		border: 2px #000000 ;
		margin: 10px;
  		padding: 20px;
		}
		#hero1 {
  width: 100%;
  height: 100vh;
  background: url("assets/img/a.png") center;
  background-size: cover;
	background-position: center top;
  margin-bottom: 100px;
}
		#hero .container3 {
  position: relative;
}
		.container3 {
    max-width: 60%;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255,255, 255, 0.2);
    border-radius: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: blue;
}

form {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-group select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke="%238C8C8C"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 15px;
}

.form-group button {
    background-color: #1977cc;
  color: white;
	border-radius: 14px;
		
  padding: 7px 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

.form-group button:hover {
    opacity: 0.8;
}
	</style>

</head>
<body>
<?php include('header.php');?>
	<section id="hero1">
    <div class="container3">
		<div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content1" align="center">
				<div class="container3">
                    
		<center><h2>Book an Appointment</h2></center>
					<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "ipatient";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch basic user information from the database
$sql = "SELECT name, email, passport FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $username); // Assuming $user_id contains the user's ID
$username = 1; // Example user ID, replace it with your logic to get the user ID
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Fetch destination options from the database
$sql = "SELECT dname, specialized FROM doctors";
$result = $conn->query($sql);
$doctors = [];
while ($row = $result->fetch_assoc()) {
    $doctors[] = $row;
}

// Close database connection
$stmt->close();
$conn->close();
?>
        <form action="book_ticket1.php" method="post">
            <div class="form-group">
                <label for="name">Patient's Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['name'] ?? ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email'] ?? ''; ?>" required>
            </div>
			<div class="form-group">
                <label for="passport">Passport Number:</label>
                <input type="text" id="passport" name="passport" value="<?php echo $row['passport'] ?? ''; ?>" required>
            </div>
			<div class="form-group">
                <label for="boarding">Doctors Name:</label>
                <select id="boarding" name="boarding">
                    <option value="">Select Doctor</option>
                    <?php foreach ($doctors as $destination): ?>
                        <option value="<?php echo $destination['dname']; ?>"><?php echo $destination['dname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="destination">Reason:</label>
                <select id="destination" name="destination">
                    <option value="">Select destination</option>
                    <?php foreach ($doctors as $destination): ?>
                        <option value="<?php echo $destination['specialized']; ?>"><?php echo $destination['specialized']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date of Meet:</label>
                <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
            <div class="form-group">
                <button type="submit">Book Appointment</button>
            </div>
        </form>
    </div>
				</div>
          </div>
    </div>
  </section>
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
