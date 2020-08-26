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
	<title>Orphanage Management Systeme</title>
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
			<a href="index.php">Home</a>
			<a id="active" href="about.php">About Us</a>
			<a href="contact.php">Contact</a>
		</ul>
	</div>

	<div class="contentsection templete clear">
		<div class="maincontentabout clear">
			<div class="about">
				
				<h3>OUR MISSION</h3>
				<p></p>
				<p>All God’s Children International is an orphan care ministry answering God’s call to provide the love and care that every child deserves.</p>
				
				<h3>OUR VISION</h3>
				<p>Our vision is to empower local leaders to intervene for the 8 million children currently living in institutions and create more pathways to family and independence.</p>
				
				
				<h3>OUR SHARED VALUES</h3>
<ul>
<li><strong>Child Centered</strong>
<p>The best interest of the child is at the center of our work. We believe that all children deserve and need permanent families.</p></li>
<li><strong>Best Practice</strong>
<p>We are committed to using best practices that provide thorough, ethical, transparent and inclusive services throughout the adoption and foster care journey. We strive to provide quality services that meet the needs of children and families and set an example of excellence for the adoption and foster care community.</li>
<li><strong>Respect for All Voices</strong>
<p>We value the perspectives of all people we serve; the voices of adopted persons, foster youth, birth or first families, and adoptive families form our practice.</p></li>
<li><strong>Collaboration</strong>
<p>We believe in fostering relevant and effective relationships in order to support children and families.</p></li>
<li><strong>Lifelong</strong>
<p>We recognize that adoption is a lifelong journey and believe that all members of the adoption circle should have access to education, support and resources at every stage of life.</p></li>
</ul>
<h3>Non-discrimination</h3>
<p>The services of Children&#8217;s Home and LSS are available to all people regardless of race, color, ethnicity, religion, disability, national origin, sex, sexual orientation, gender identity or gender expression.</p>
<h3>Accommodations</h3>
<p>Reasonable accomodations shall be made for people who have communication disabilities and those who speak a language other than Bangla.</p>
	</div>

		</div>
		
	</div>

	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  <p>&copy; Pranab Datta.</p>
	</div>
	<div class="fixedicon clear">
		<a href="http://www.facebook.com"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="http://www.twitter.com"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="http://www.google.com"><img src="images/gl.png" alt="GooglePlus"/></a>
		<a href="http://www.linkedin.com"><img src="images/in.png" alt="LinkedIn"/></a>
	</div>
</body>
</html>