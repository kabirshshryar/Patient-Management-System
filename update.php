<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipatient";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if ID parameter is set in the URL
if(isset($_GET['dname']) && !empty($_GET['dname'])) {
    // Check if the update form has been submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $dname = $_GET['dname'];
        $dcontact = $_POST['dcontact'];
        $daddress = $_POST['daddress'];
        $designation = $_POST['designation'];

        // Prepare an update statement
        $sql = "UPDATE doctors SET dcontact=?, daddress=?, designation=? WHERE dname=?";
        
        // Attempt to prepare the SQL statement
        $stmt = mysqli_prepare($conn, $sql);
        
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssss", $dcontact, $daddress,  $designation, $dname);
        
        // Execute the prepared statement
        if(mysqli_stmt_execute($stmt)) {
            // Redirect to the search page after successful update
            header("Location: doctors.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }

    // Fetch the existing data for the given ID
    $dname = $_GET['dname'];
    $sql = "SELECT * FROM doctors WHERE dname=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $dname);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    // Close statement
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
		.content1{
		align-content: center;
		background: #FFFFFF;
		border-radius: 20px;
		border: 2px #000000 ;
		margin: 10px;
  		padding: 20px;
		}
		#hero1 {
  width: 100%;
  height: 80vh;
  background: url("assets/img/doctors-8.png") center;
  background-size: cover;
	background-position: center top;
  margin-bottom: -200px;
}
		#hero .container4 {
  position: relative;
}
		.container4 {
        width: 50%;
		height: 80%;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
		button {
  background-color: #1977cc;
  color: white;
	border-radius: 14px;
		align-content: center;
  padding: 7px 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}
		input[type=text], input[type=password] {
  width: 50%;
	height: 25px;
  padding: 7px;
border-radius: 14px;
  margin: 8px 0;
  border: solid #000000;
  background: #f1f1f1; 
}
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin: 20px auto;
            width: 60%;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
	<?php include('header.php');?>
	<section id="hero1">
    <div class="container4">
		<div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content1" align="center">
    <h2>Update Doctors Info</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?dname=' . $_GET['dname']); ?>">
        <label for="dcontact">Contact:</label>
        <input type="text" id="dcontact" name="dcontact" value="<?php echo $row['dcontact']; ?>" required>
        <label for="daddress"> Address:</label>
        <input type="text" id="daddress" name="daddress" value="<?php echo $row['daddress']; ?>" required>
        <label for="designation"> Designation:</label>
        <input type="text" id="designation" name="designation" value="<?php echo $row['designation']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
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

<?php
// Close connection
mysqli_close($conn);
?>
