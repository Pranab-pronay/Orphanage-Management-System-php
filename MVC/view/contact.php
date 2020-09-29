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
			<a href="index.php">Home</a>
			<a href="about.php">About Us</a>
			<a id="active" href="contact.php">Contact</a>
		</ul>
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