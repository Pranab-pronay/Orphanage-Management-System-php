<?php include '../model/reset.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="navsection templete clear">
		<ul>
			<a href="welcome.php">Home</a>
			<a href="aboutv2.php">About Us</a>
			<a href="contactv2.php">Contact</a>
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
			<div class="about">
				<?php include '../controller/reset.php'; ?>
			</div>
		</div>
		<?php include 'sidebar.php'; ?>
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'fixed_icon.php'; ?>
</body>
</html>