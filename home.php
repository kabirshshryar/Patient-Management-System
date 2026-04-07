<!DOCTYPE html>
<html>
<head>
<title>ipatients</title>
<link href="style.css" rel="stylesheet">
	<style>
	.content1{
		background: #FFFFFF;
		border-radius: 40px;
		border: 2px #000000 ;
		margin: 10px;
  		padding: 20px;
		}
		
		#hero1 {
  width: 100%;
  background: url("assets/img/1.jpg") center;
  background-size: cover;
	background-position: center top;
  margin-bottom: 100px;
}
		.container3 {
    max-width: 60%;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255,255, 255, 0.2);
    border-radius: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
	input[type=text], input[type=password],input[type=email] {
  width: 100%;
	height: 20px;
  padding: 5px;
border-radius: 5px;
  margin: 5px 0 12px 0;
  display: inline-block;
  border: solid #000000;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password], input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
input[type=submit] {
  background-color: #1977cc;
  color: white;
	border-radius: 30px;
		
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

input[type=submit]:hover {
  opacity: 0.8;
}
.form-group {
            margin-bottom: 15px;
            align-content: center;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .login-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .container1 h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }
</style>

</head>
<body>
<?php include('header1.php');?>
	<section id="hero1"><center>
		<img src="assets/img/cover.png"<br>
		<h3 align="center">International Patient Management System</h3></center>
    <div class="container3">
		<div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content1">
	<div class="container3">
		
<h3 align="center">New here?</h3>
<p align="center">Register your information for sign up </p>
		
<form action="success1.php" method="POST">
  <div class="form-group">
  <label for="name"> Name:</label>
  <input type="text" placeholder="Enter your name" id="fname" name="name" value="" required><br><br>
      </div>
      <div class="form-group">
  <label for="username"> Set Username:</label>
  <input type="text" placeholder="Enter your username" id="username" name="username" value="" required><br><br>
  </div>
      <div class="form-group">
  <label for="passport"> Passport Number:</label>
  <input type="text" placeholder="Enter your passport number" id="passport" name="passport" value="" required><br><br>
  </div>
      <div class="form-group">
  <label for="address"> Address:</label>
  <input type="text" placeholder="Enter your addresss" id="address" name="address" value="" required><br><br>
  </div>
      <div class="form-group">
  <label for="email"> Email:</label>
  <input type="email" placeholder="Enter your email" id="email" name="email" value="" required><br><br>
  </div>
      <div class="form-group">
  <label for="password"> Password:</label>
  <input type="text" placeholder="Enter your password" id="password" name="password" value="" required><br><br><br>
  </div>
  <input type="submit" value="Register">

	</div>
</form> 
             </div>
          </div>
		</div></div>
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
