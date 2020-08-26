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
 
<link rel="stylesheet" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
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
			<a id="active" href="index.php">Home</a>
			<a href="about.php">About Us</a>
			<a href="contact.php">Contact</a>
		


			
		</ul>
		
		<div class="topnav-right">

	  <a href="register.php">Signup</a>
	  <a href="login.php">Login</a>

	  </div>


		
		

		
	</div>
<div class="slidersection templete clear">
        <div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="This is slider one Title or Description" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="This is slider Two Title or Description" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="This is slider three Title or Description" /></a>
            </div>

</div>
	<div class="contentsection templete clear">
		<div class="maincontent clear">
			<div class="samepost clear">
				<h2>Trade School</h2>
				 <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				<p>
					Seven of the Dhaka children are attending a training center sponsored by the government. They are taking a six month course. There are a total of 27 trades available but all seven of the children chose wood working, and love going.
					The students have been making a box to hold kleenex. The training center also helps to find jobs for the students.
				</p>
				
			</div>
			<div class="samepost clear">
				<h2>Religious Festival</h2>
				 <img src="images/post2.jpg" alt="post image"/>
				<p>
					Shikha reported that the people of Bangladesh celebrated one fo their biggest religious festivals. The FFC children celebrated the festival as well. The children received new dresses, shoes and a special meal. No school or study on these two days! As well as breakfast and mango for tiffin, a lunch with special fried rice, roast chicken and egg curry was served, courtesy of a kind donor.
				</p>
				
			</div>
			<div class="samepost clear">
				<h2>Family Found</h2>
				 <img src="images/post3.jpg" alt="post image"/>
	            <p>
				Narunnahar, now 25, originally came to live at 'CHOTOMONI NIBASH' when she was just three months old. She is now working and living at a women's hostel. Through a friend and Facebook, Narunnahar managed to find her family. Narunnahar's family came to 'CHOTOMONI NIBASH' to take her home to celebrate the Eid holiday together.Her family has taken over guardianship of Narunnahar. The photos show Narunnahar with her father, brother, sister and other relatives.
				</p>
				
			</div>
			<div class="samepost clear">
				<h2>New Clothes For Children</h2>
				 <img src="images/post4.jpg" alt="post image"/>
	            <p>
				Anita has reported on events at the Dhaka site. Anita is a student in Brac university and also working voluntary. One of her faculty, Monowara Begum, in charge of the university library, donated a supply of new clothing for the Dhaka children, all of which was badly needed and much appreciated by the children. Anita, on the right in the photo, and was delighted to see their smiling faces.
				</p>
				
			</div>

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
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			
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