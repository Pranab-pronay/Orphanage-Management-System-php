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
			<a id="active" href="welcome.php">Home</a>
			<a href="aboutv2.php">About Us</a>
			<a href="contactv2.php">Contact</a>
			<a href="#">Donation</a>
			<a href="#">Adoption</a>

			
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
			<form  method="post">
			  <div class="fuck">
				<a href="searchp.php">Modify Your Search</a>
			  </div>

				      <div class="col-75">
					<select id="gender" name="gender">
					<option name="gender">Gender</option>
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					</select>
					</div>
					
				 <div class="col-76">
			
				  <select class="age" name="age">
				   <option name="age" value="">Age</option>
					<option value="1-3">1-3</option>
					<option value="4-6">4-6</option>
					<option value="7-9">7-9</option>

				  </select>
				</div>
				  


				<div class="submit">
					<input type="submit" value="Submit" name="submitted">


				</div>
			
			</form>
		
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
		
		<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if (isset($_POST['submitted'])) {

// Attempt select query execution
$gender = $_POST['gender'];
$age = $_POST['age'];
/* $sql = "SELECT 
   * 
FROM 
   child
WHERE 
   (gender LIKE '$gender' AND 
   age LIKE '$age')OR(gender LIKE null OR 
   age LIKE '$age')OR(gender LIKE '$gender'OR 
   age LIKE null)";
 */
 
 $sql = "SELECT 
   * 
FROM 
   child
WHERE 
   (gender LIKE '$gender' AND 
   age LIKE '$age')";
 
if($result = mysqli_query($link, $sql)){
    ?>
     <div class="searchr">
	 <?php
		$i=1;
        while($row = mysqli_fetch_array($result)){
				?>
				<div class="samepost clear">
				<h2><?php echo"$i"?>.Name: <?php echo $row['name'];?></h2>
				 <a href="#"><img src="images/child/<?php echo $row['imgsrc']?>.jpg" alt="post image"/></a>
				 <h3> <?php echo strtoupper($row['gender']); 
				         echo ",";
						echo $row['agei'];
				 				 ?> years old</h3>
				<p>
					<?php echo $row['desc']?>
				</p>
				
			</div>
						<?php $i++;?>
				<?php 

		}
         
        
		?>
		</div>
		<?php
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>

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
</body>
<style>
/* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
.fuck{
	margin-left: 229px;
    display: block;
    margin-right: 233px;
    background: #e6af4b none repeat scroll 0 0;
    border-bottom: 2px solid #b7801c;
    color: #333;
    margin-bottom: 1px;
    padding: 8px;
    text-align: center;
	font-size:18px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-75 {
  float: left;
  width: 40%;
  margin-top: 6px;
}
.searchr{
	    background: #fef4e5 none repeat scroll 0 0;
    border: 1px solid #b7801c;
    float: left;
    margin: 0 15px 15px 0;
    padding: 8px 20px;
    width: 628px;
	
}

/* Floating column for inputs: 75% width */
.col-76 {
  float: right;
  width: 40%;
  margin-top: 6px;
}
.submit{
	
	margin-top: 52px;
    margin-left: 264px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-75, .col-76, input[type=submit] {
    width: 100%;
    margin-top: 10px;
  }
}
</style>