<?php include '../controller/logged.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Orphanage Management System</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about orphange management website">
	<meta name="keywords" content="Adoption System">
	<meta name="author" content="Pranab">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="navsection templete clear">	
		<ul>
			<a href="welcome.php">Home</a>
			<a href="aboutv2.php">About Us</a>
			<a href="contactv2.php">Contact</a>
			<a href="#">Donation</a>
			<a  id="active" href="search.php">Adoption</a>	
		</ul>	
		<div class="topnav-right">
			<div class="dropdown">
				<button class="dropbtn"><?php echo htmlspecialchars($_SESSION["username"]); ?>
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="reset-password.php">Reset Password</a>
					<a href="logout.php">Logout</a>
				</div>
			</div> 
		</div>		
	</div>
	<div class="contentsection templete clear">
		<div class="maincontent clear">
			<?php include '../controller/search.php'; ?>	
		</div>
		<?php include 'sidebar.php'; ?>
		<?php include '../model/search.php'; ?>
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'fixed_icon.php'; ?>
</body>
