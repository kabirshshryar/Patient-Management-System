<!DOCTYPE html>
<html>
    <head>
        <title style="font-size:20px;">Appointment booked successfully</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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
  height: 100%;
  background: url("assets/img/gallery/gallery-8.jpg") center;
  background-size: cover;
	background-position: center top;
  margin-bottom: -200px;
}
		#hero .container4 {
  position: relative;
}
		.container4 {
        width: 70%;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
		
		.button1 {
  background-color: #1977cc;
  color: white;
	border-radius: 14px;
		
  padding: 7px 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
	transition: transform 0.3s;
}

	.button1:hover {
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
		table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
	border: 1px solid #000000;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
        </style>

    </head>
    <body>
		<?php include('header.php');?>
	<section id="hero1">
    <div class="container4"><center>
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

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO tickets (name, email, passport, boarding, destination, date) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[passport]', '$_POST[boarding]','$_POST[destination]', '$_POST[date]')";

if ($conn->query($sql) === TRUE) {
  echo "<center>Appointment booked successfully</center>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

    <marquee>Get your Slip</marquee>
		<div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content1" align="center">
    <div class="table"><div id="printableArea">
            <h2 align="center"> Appointment Slip issued by Ipatient </h2>
            <center>
                <table border="1">
                <!-- comment -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ipatient";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<table><tr align='center'>Patient Information</tr></table>";
                
               $sql = "SELECT * FROM tickets ORDER BY tid DESC LIMIT 1"; // Adjust the query based on your table structure
        $result = $conn->query($sql);

        // Display ticket information in the table
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<table><tr align='left'>";
                echo "<td>PNR No.</td><td>" . $row["tid"] . "</td></tr><tr>";
                echo "<td>Patient's Name </td><td>" . $row["name"] . "</td></tr><tr>";
				echo "<td>Identity Number </td><td>" . $row["passport"] . "</td></tr><tr>";
                echo "<td>Email </td><td>" . $row["email"] . "</td></tr><tr>";
                echo "<td>Doctor Name </td><td>" . $row["boarding"] . "</td></tr><tr>";
                echo "<td>Reason </td><td>" . $row["destination"] . "</td></tr><tr>";
                echo "<td>Meeting Date </td><td>" . $row["date"] . "</td></tr>";
                echo "</table>";
            }
		}
                mysqli_close($conn);
                ?>
            </table></div><br><center>
        <input type="button" class="button1" onclick="printDiv('printableArea')" value="Print your slip!" />
            </center>
		  </div>
          </div>
    </div>
  </section>
		<script>
                function printDiv(divName) {
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }</script><br>
           
            </body>
            </html>