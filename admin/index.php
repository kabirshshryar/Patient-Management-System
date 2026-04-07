<!DOCTYPE html>
<html>
<head>
<title>ipatients</title>
<link href="style.css" rel="stylesheet">
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 100%;
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
	<section id="hero">
    
  <div class="container1">
    <h2>Admin Log In</h2>
<form action="auth.php" method="POST">
<div class="form-group">
                <label for="fname">Username</label>
                <input type="text" id="username" name="username" value="" placeholder="Enter your Username" required>
            </div>
            <div class="form-group">
                <label for="lname">Password</label>
                <input type="text" id="password" name="password" value="" placeholder="Enter your password" required>
            </div>
            <button type="submit">Login</button>
</form>
		
		<p>Don't have any account?</p>
      <a href="home.php" class="button">Signup</a>

</div></section>
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
