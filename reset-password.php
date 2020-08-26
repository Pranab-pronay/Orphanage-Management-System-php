<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
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
			<a href="about.php">About Us</a>
			<a href="contact.php">Contact</a>
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
			<div class="about">
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>   
			</div>

		</div>
		<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Latest articles</h2>
					<ul>
						<li><a href="#">Post Title one will be go here.</a></li>
						<li><a href="#">Post Title two will be go here.</a></li>
						<li><a href="#">Post Title three will be go here.</a></li>
						<li><a href="#">Post Title four will be go here.</a></li>
						<li><a href="#">Post Title five will be go here.</a></li>
						<li><a href="#">Post Title six will be go here.</a></li>
						
					</ul>
			</div>
			<div class="samesidebar clear">
				<h2>Popular articles</h2>
										<div class="popular clear">
						<h3><a href="#">A Happy Girl..</a></h3>
						<a href="#"><img src="images/post6.jpg" alt="post image"/></a>
						<p>
						Lipi is one happy girl as she is reunited with her mom! She came to chotomoni nibash at the age of 4 just after her father died. Her mom could not take care of her. Things have changed and she will be living with her mom. Lipi is now 19 and has been attending school for children with special needs.
						</p>	
					</div>
					
					<div class="popular clear">
						<h3><a href="#">Awards For Children..</a></h3>
						<a href="#"><img src="images/post7.jpg" alt="post image"/></a>
						<p>On the occasion of World Autism Awareness Day 2016, the DUAR Foundation arranged to give awards to talented specially challenged children.
						A total of eight children were selected for that award from four different institutions and organizations in Dhaka, including CRP, Swid Bangladesh and FFC.
						Elizabeth Richan, the project manager of the AHEAD project at Queen's University Canada, works as a partner to the CRP organization. 
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