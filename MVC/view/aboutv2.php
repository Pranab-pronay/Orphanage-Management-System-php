<?php include '../controller/logged.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Orphanage Management Systeme</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php include 'header.php'; ?>
	<div class="navsection templete clear">
		<ul>
			<a href="welcome.php">Home</a>
			<a id="active" href="aboutv2.php">About Us</a>
			<a href="contactv2.php">Contact</a>
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
				<a href="logout.php">Logout</a>
				</div>
		    </div> 
		</div>
	</div>

	<div class="contentsection templete clear">
		<div class="maincontentabout clear">
		<?php include 'about_content.php'; ?>
		</div>		
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'fixed_icon.php'; ?>
</body>
</html>