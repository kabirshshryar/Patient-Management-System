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
	</style>

</head>
<body>
<?php include('header.php');?>
	<section id="hero">
    <div class="container">
      <h2 align="center">Book your hotels!</h2>
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
$sql="SELECT * FROM hotels";
$result=$conn->query($sql);

if($result->num_rows>0) {
echo
"<table><tr><th>Hotel Name</th>
<th> Address</th>
<th> Contact</th>
</tr>";
//output data of each row
while($row=$result->fetch_assoc()){
echo"<tr> <td>".$row["hname"]."</td><td>".$row["haddress"]."</td><td>".$row["hcontact"]."</td>";
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
