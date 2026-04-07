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
if(isset($_GET['username']) && !empty($_GET['username'])) {
    // Check if the update form has been submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_GET['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Prepare an update statement
        $sql = "UPDATE users SET name=?, password=?, email=? WHERE username=?";
        
        // Attempt to prepare the SQL statement
        $stmt = mysqli_prepare($conn, $sql);
        
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssss", $name, $password,  $email, $username);
        
        // Execute the prepared statement
        if(mysqli_stmt_execute($stmt)) {
            // Redirect to the search page after successful update
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }

    // Fetch the existing data for the given ID
    $username = $_GET['username'];
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
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
	<link href="style.css" rel="stylesheet">
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
  background: url("assets/img/h.jpg") center;
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
		
  padding: 7px 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}

button:hover {
  opacity: 0.8;
}
		input[type=text], input[type=password] {
  width: 50%;
	height: 15px;
  padding: 7px;
border-radius: 14px;
  margin: 8px 0;
  border: solid #000000;
  background: #f1f1f1; 
}
	</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Your Password</title>
    <style>
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
				<h3 align="center">Hi, <?php echo $_SESSION["username"]; ?>!</h3>
    			<h2>Update Your Info</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?username' . $_GET['username']); ?>">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="name" value="<?php echo $row['name']; ?>" required>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo $row['password']; ?>" required>
        <label for="PerEmail">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <input type="submit" value="Update">
    </form>

</body>
</html>

<?php
// Close connection
mysqli_close($conn);
?>
