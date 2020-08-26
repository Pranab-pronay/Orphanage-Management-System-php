<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

 
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

</head>

<body>
	<div class="headersection templete clear">
		<div class="logo">
			<img src="images/logo.png" alt="Logo"/>
			<h2>ছোটমণি নিবাস</h2>
			<p>Share your kindness</p>
		</div>
		<div class="social">
			<a href="#"><img src="images/social/facebook.png" alt="Facebook"/></a>
			<a href="#"><img src="images/social/twitter.png" alt="Twitter"/></a>
			<a href="#"><img src="images/social/linkedin.png" alt="LinkedIn"/></a>
			<a href="#"><img src="images/social/google.png" alt="GooglePlus"/></a>
		</div>
		

	</div>
	
	
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
      <a href="logout.php">Logout</a>

    </div>
  </div> 
	
	  </div>


		
		

		
	</div>

	<div class="contentsection templete clear">
		<div class="maincontent clear">
		<?php
		include 'config.php';

 if (isset($_GET['id'])) {
	 $user=$_GET['id'];
	 $child=$_GET['child'];

 }

	 $sql = "INSERT INTO admin (child, user) VALUES ('$child', '$user')";
	 if(mysqli_query($mysqli, $sql)){?>
    <h4>Thankyou, <?php echo "$user"?> for your response</h4>
			<h4>you have requested for <?php echo "$child"?> ,We will notify you shortly </h4><?php
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

   $mysqli->close();
 ?>
		
			

		</div>
		<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Our Upcoming Events</h2>
					<ul>
						<li><a href="#">Next Event 01...</a></li>
						<li><a href="#">Next Event 02...</a></li>
						<li><a href="#">Next Event 03...</a></li>
						<li><a href="#">Next Event 04...</a></li>
						<li><a href="#">Next Event 05...</a></li>
						<li><a href="#">Next Event 06...</a></li>
						
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Popular articles</h2>
					<div class="popular clear">
						<h3><a href="#">A Happy Girl...</a></h3>
						<a href="#"><img src="images/post6.jpg" alt="post image"/></a>
						<p>
						Lipi is one happy girl as she is reunited with her mom! She came to chotomoni nibash at the age of 4 just after her father died. Her mom could not take care of her. Things have changed and she will be living with her mom. Lipi is now 19 and has been attending school for children with special needs.
						</p>	
					</div>
					
					<div class="popular clear">
						<h3><a href="#">Awards For Children..</a></h3>
						<a href="#"><img src="images/post7.jpg" alt="post image"/></a>
						<p>On the occasion of World Autism Awareness Day 2016, the DUAR Foundation arranged to give awards to talented specially challenged children. A total of eight children were selected for that award from four different institutions and organizations in Dhaka, including CRP, Swid Bangladesh and FFC. Elizabeth Richan, the project manager of the AHEAD project at Queen's University Canada, works as a partner to the CRP organization.</p>	
					</div>
					<div class="popular clear">
					<h3>New Clothes For Children...</h3>
				 <img src="images/post4.jpg" alt="post image"/>
	            <p>
				Anita has reported on events at the Dhaka site. Anita is a student in Brac university and also working voluntary. One of her faculty, Monowara Begum, in charge of the university library, donated a supply of new clothing for the Dhaka children, all of which was badly needed and much appreciated by the children. Anita, on the right in the photo, and was delighted to see their smiling faces.
				</p>
				</div>
					
					
	
			</div>
			
		</div>
	</div>

	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="welcome.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>


        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
			
		</ul>
	  </div>
	  <p>&copy; Copyright Pranab Datta.</p>
	</div>
	<div class="fixedicon clear">
		<a href="http://www.facebook.com"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="http://www.twitter.com"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="http://www.google.com"><img src="images/gl.png" alt="GooglePlus"/></a>
		<a href="http://www.linkedin.com"><img src="images/in.png" alt="LinkedIn"/></a>
	</div>
 <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
<script type="text/javascript" src="js/scrolltop.js"></script>
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