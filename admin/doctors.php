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
		.search{
			background-color: #1977cc;
  			color: white;
		border-radius: 14px;
		padding: 7px 12px;
  		margin: 8px 0;
  		border: none;
  		cursor: pointer;
  		width: 15%;
			
		}
		button {
  background-color: #1977cc;
  color: white;
	border-radius: 14px;
		
  padding: 7px 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
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
    <div class="container4"><center>
		<h2>Search Doctor by Speciality</h2>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        <label for="specialized">Speciality:</label>
        <input type="text" id="specialized" name="specialized">
        <button type="submit" class="search">Search</button>
    </form></center>
      <h2 align="center">Available Doctors</h2>
		<div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content1" align="center">
				
				<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ipatient";
//Create connection
$conn= new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql="SELECT * FROM doctors";
if (isset($_GET['specialized']) && !empty($_GET['specialized'])) {
 $specialized = $_GET['specialized'];
 $sql = "SELECT * FROM doctors WHERE specialized LIKE '%$specialized%'";
    }
$result=$conn->query($sql);

if($result->num_rows>0) {
echo
"<table><tr><th>Doctor Name</th>
<th> Designation</th>
<th> Qualification</th>
<th> Specialized</th>
<th> Contact</th>
<th> Address</th>
<th></th>
</tr>";
//output data of each row
while($row=$result->fetch_assoc()){
echo"<tr> <td>".$row["dname"]."</td><td>".$row["designation"]."</td><td>".$row["degree"]."
</td><td>".$row["specialized"]."</td><td>".$row["dcontact"]."</td><td>".$row["daddress"]."</td><td>";
	echo"<form method='GET' action='update.php'><input type='hidden' name='dname' value='".$row["dname"]."'><button type='submit'>Update</button></form>";
	echo"<form method='POST' action='delete.php'><input type='hidden' name='dname' value='".$row["dname"]."'><button type='submit'>Delete</button></form></td></tr>";
}
echo"</table>";
} else {
 echo "0 results";
}
$conn-> close();
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
