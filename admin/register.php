<!DOCTYPE html>
<html>
<head>
<style>
	.container1 {
		border-radius: 20px;
		border: 2px #000000 ;
	width: 500px;
	position: absolute;
	margin: 20px;
  	padding: 10px;
}
	input[type=text], input[type=password] {
  width: 100%;
	height: 30px;
  padding: 10px;
border-radius: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: solid #000000;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submit {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submit:hover {
  opacity: 1;
	
	}
	
	button {
  background-color: #1977cc;
  color: white;
	border-radius: 30px;
		
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}
	</style>	
</head>
<body>

<form action="success.php" method="POST">
	<div class="container1">
		
<h3>New here?</h3>
<p>Register your information for sign up </p>
  <label for="name"> Name:</label>
  <input type="text" id="fname" name="name" value=""><br><br>
<label for="passport"> Passport Number:</label>
  <input type="text" id="fname" name="passport" value=""><br><br>
  <label for="address"> Address:</label>
  <input type="text" id="fname" name="address" value=""><br><br>
  <label for="email">Email:</label>
  <input type="text" id="lname" name="email" value=""><br><br>
  <label for="psw">Password:</label>
  <input type="text" id="lname" name="password" value=""><br><br><br>
  <button type="submit">Register</button>
	</div>
</form> 

</center>
</body>
</html>
