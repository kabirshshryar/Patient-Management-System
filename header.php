<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<html><head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <nav id="navbar" class="navbar order-last order-lg-0">
		  
        <ul>
			<h1 class="logo me-auto"><a href="dashboard.php"><img src="assets/img/logo.png"></a></h1>
			<a class="logo me-auto"><img src="assets/img/usericon.png"><?php echo $_SESSION["username"]; ?></a>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="admission.php">Admission</a></li>
          <li><a href="doctors_book.php">Available Doctors</a></li>
          <li><a href="tickets.php">Book Appointment</a></li>
          <li><a href="hotels2.php">Accomodations</a></li>
          <li><a href="logout.php">Logout</a></li>
                </ul>
              
		
			
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

</body>
</html>