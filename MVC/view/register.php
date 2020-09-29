<?php include '../model/register.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="navsection templete clear">
		<ul>
			<a href="index.php">Home</a>
			<a href="about.php">About Us</a>
			<a href="contact.php">Contact</a>
		</ul>
	</div>

	<div class="contentsection templete clear">
		<div class="maincontent clear">
			<div class="about">
				<div class="wrapper">
					<h2>Sign Up</h2>
					<p>Please fill this form to create an account.</p>
					<?php include '../controller/register.php'; ?>
				</div> 
			</div>

		</div>
		<?php include 'sidebar.php'; ?>
	</div>

	<?php include 'footer.php'; ?>
	<?php include 'fixed_icon.php'; ?>			
</body>
</html>