
<!DOCTYPE html>
<html>
<head>
<title>ipatients</title>
<link href="style.css" rel="stylesheet">
 <style>
     
        .container2 {
            max-width: 1000px;
            margin: 50px auto;
            text-align: center;
        }
         .button {
            display: inline-block;
            margin: 10px;
            border: none;
			 border-radius: 10px;
            cursor: pointer;
			 padding: 10px;
			width: 250px;
			height: 170px;
            transition: transform 0.3s;
        }
	   .button img {
            width: 100%;
            height: 100%;
		   object-fit: cover;
		    border-radius: 20px;
	 }
        .button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<?php include('header1.php');?>
	<section id="hero"><center>
		<img src="assets/img/cover.png"<br>
		</center>
    <div class="container">
		<div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
       		<h3 align="center">Services</h3>
				<div class="container2">
        <div class="buttons">
            <a href="login.php" class="button"><img src="assets/img/admission.jpg" alt="Button 1"></a>
            <a href="login.php" class="button"><img src="assets/img/doctors.jpg" alt="Button 2"></a>
            <a href="login.php" class="button"><img src="assets/img/departments-3.jpg" alt="Button 3"></a>
            <a href="login.php" class="button"><img src="assets/img/tickets.jpg" alt="Button 4"></a>
            <a href="login.php" class="button"><img src="assets/img/hotels.jpg" alt="Button 5"></a>
        </div>
    </div>
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
