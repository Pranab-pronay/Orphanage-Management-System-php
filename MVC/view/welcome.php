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
	<script language="javascript" type="text/javascript">
	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
	</script>

	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="../controller/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<link rel="stylesheet" href="style.css">
	<?php include '../controller/slidder_script.php'; ?>
</head>

<body>
	<?php include 'header.php'; ?>
	
	<div class="navsection templete clear">		
		<ul>
			<a id="active" href="welcome.php">Home</a>
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
	
	<?php include 'slider.php'; ?>
	
	<div class="contentsection templete clear">
		<?php include 'home_main_content.php'; ?>
		<?php include 'sidebar.php'; ?>
	</div>
	
	<?php include 'footer.php'; ?>
	<?php include 'fixed_icon.php'; ?>
	<?php include '../controller/neededscript.php'; ?>

</body>
</html>