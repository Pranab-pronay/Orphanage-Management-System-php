<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Wrong Password,Please Try Again.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Invalid Username!";
                }
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
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
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
	</div>

	<div class="contentsection templete clear">
		<div class="maincontent clear">
			<div class="about">
				<div class="wrapper">
					<h2>Login</h2>
					<p>Please fill in your credentials to login.</p>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
							<span class="help-block"><?php echo $username_err; ?></span>
						</div>    
						<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
							<span class="help-block"><?php echo $password_err; ?></span>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Login">
						</div>
						<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
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