<?php include '../controller/logged.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Orphanage Management System</title>
	<meta name="language" content="English">
	<meta name="author" content="Pranab">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php include 'header.php'; ?>
	<div class="navsection templete clear">	
		<ul>
			<a href="welcome.php">Home</a>
			<a href="aboutv2.php">About Us</a>
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
				  <a href="../controller/logout.php">Logout</a>
				</div>
			</div> 
	    </div>	
	</div>

	<div class="contentsection templete clear">
		<div class="maincontent clear">
		<?php include '../model/insert.php'; ?>
		</div>
		<?php include 'sidebar.php'; ?>
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'fixed_icon.php'; ?>

</body>
</html>
<style>
.maincontent h4{
font-family: cursive;
    font-size: 18px;
    margin: 75px;
    text-align: center;
    padding: 0px;
}
</style>