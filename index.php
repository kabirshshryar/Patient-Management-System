<!DOCTYPE html>
<html>
<head>
<title>ipatients</title>
<link href="style.css" rel="stylesheet">
	<style>
	.content1{
		background: #FFFFFF;
		border-radius: 20px;
		border: 2px #000000 ;
		margin: 10px;
  		padding: 20px;
		}
		
		.container3 {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
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
		lottie-player {
    --lottie-player-seeker-track-color: #fff;
    --lottie-player-seeker-thumb-color: #fff;
			margin-bottom: -50px;
    }
		.trial {
  background-color: #1977cc;
  color: white;
	border-radius: 14px;
		
  padding: 7px 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

	a:hover {
  opacity: 0.8;
}
</style>

</head>
<body>
<?php include('header1.php');?>
	<section id="hero1"><center>
		<img src="assets/img/cover.png"><br>
		<h3 align="center">Patient Management System</h3>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="assets/img/ipatient.json" background="transparent" speed="1" style="width: 300px; height: 300px" direction="1" mode="normal" loop autoplay></lottie-player>
		
		<br><br><br><a href="home.php" class="trial">Get Started</a>
             
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
