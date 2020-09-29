<?php include '../controller/logged.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Orphanage Management System</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php include 'header.php'; ?>
	<div class="navsection templete clear">
		<ul>
			<a href="welcome.php">Home</a>
			<a href="aboutv2.php">About Us</a>
			<a id="active" href="contactv2.php">Contact</a>
			<a href="#">Donation</a>
			<a href="search.php">Adoption</a>
		</ul>
		<div class="topnav-right">
			<div class="dropdown">
				<button class="dropbtn"><?php echo htmlspecialchars($_SESSION["username"]); ?>
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
				<a href="reset-password.php">Reset Password</a>
				<a href="../controller/logout.php">Logout</a>
				</div>
		    </div> 
		</div>
	</div>

	<div class="contentsection templete clear">
		<div class="maincontent clear">
			<?php include 'contact_content.php'; ?>
		</div>
		<?php include 'sidebar.php'; ?>
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'fixed_icon.php'; ?>
</body>
</html>
