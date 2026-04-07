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
  echo "<center>Ticket booked successfully</center>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title style="font-size:20px;">Ticket booked successfully</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <style>
            .table{
                padding:10px;
                margin:110px;
            }

            table, th, td {
                border: 1px solid black;
                width:1000px;
                text-align:center;

            }
            p{
                font-family:helvatica;
                font-size:50px;
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
            transform: scale(1.1);
        }
        </style>

    </head>
    <body>
    <marquee>Get your ticket</marquee>
    <div class="table"><div id="printableArea">
            <h2 align="center"> Air Ticket Issued by ipatient </h2>
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
                echo "<table><tr align='center'>Ticket Information</tr></table>";
                
               $sql = "SELECT * FROM tickets ORDER BY tid DESC LIMIT 1"; // Adjust the query based on your table structure
        $result = $conn->query($sql);

        // Display ticket information in the table
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<table><tr align='left'>";
                echo "Ticket Id : " . $row["tid"] . "<br>";
                echo "Passenger Name : " . $row["name"] . "<br>";
				echo "Passport Number : " . $row["passport"] . "<br>";
                echo "Email : " . $row["email"] . "<br>";
                echo "Boarding : " . $row["boarding"] . "<br>";
                echo "Destination : " . $row["destination"] . "<br>";
                echo "Journey Date : " . $row["date"] . "<br>";
                echo "</tr></table>";
            }
		}
                mysqli_close($conn);
                ?>
            </table></div><br>
        <input type="button" class="button1" onclick="printDiv('printableArea')" value="Print your ticket!" />
         <button type="button" class="button1" onclick="location.href = 'tickets.php'">Back</button>
            </center>
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