<!DOCYPE html>
<html>
<head>
<style>
table,th,td {
border:1px solid black;
}
</style>
</head>
<body>
<ul>
<li><a href ="http://localhost/rg/main.php">Home</a></li>
<li><a href ="http://localhost/rg/view.php">View</a></li>
</ul>
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
$sql="SELECT * FROM users";
$result=$conn->query($sql);

if($result->num_rows>0) {
echo
"<table><tr><th> email</th>
<th> name</th>
<th> passport</th>
</tr>";
//output data of each row
while($row=$result->fetch_assoc()){
echo"<tr> <td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["passport"]."</td>";
}
echo"</table>";
} else {
 echo "0 results";
}
$conn-> close();
?> <br><br><br><br><br><br><br><br>
</body>
</html>

