<!DOCTYPE html>
<html>
<head>
<title>ipatients</title>
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
		table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
	</style>

</head>
<body>
<?php include('header.php');?>
	<section id="hero1">
    <div class="container4">
		<div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content1" align="center">
				<h2>Search Hotel by City</h2>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        <label for="city">City Name:</label>
        <input type="text" id="city" name="city">
        <button type="submit">Search</button>
    </form>
<h2>Available Hotels</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ipatient";

  
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM hotels";
    if (isset($_GET['city']) && !empty($_GET['city'])) {
        $city = $_GET['city'];
        $sql = "SELECT * FROM hotels WHERE city LIKE '%$city%'";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Hotel Name</th><th>Address</th><th>Contact</th></tr>";
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["hname"] . "</td><td>" . $row["city"] . "</td><td>" . $row["hcontact"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

 
    mysqli_close($conn);
    ?>

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
