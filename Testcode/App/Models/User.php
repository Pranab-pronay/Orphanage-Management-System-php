<?php

namespace App\Models;
include 'C:\wamp64\www\Orp\model\config.php';

class User{

    public function setLogin($_username,$_password){
		   // Check if username is empty
	$username_err = $password_err = "";	   
    if(empty(trim($_username))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_username);
    }
    
    // Check if password is empty
    if(empty(trim($_password))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_password);
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
                            return $id;
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
    public function getChild($_gender, $_age){
			// Attempt select query execution
			$gender = $_gender//$_POST['gender'];
			$age = $_age//$_POST['age'];
			
			$sql = "SELECT 
			   * 
			FROM 
			   child
			WHERE 
			   (gender LIKE '$gender' AND 
			   age LIKE '$age')";
			 
			if($result = mysqli_query($link, $sql)){
					$i=1;
					while($row = mysqli_fetch_array($result)){
							
							echo"$i" echo $row['name'];
							 echo strtoupper($row['gender']); 
									 echo ",";
									echo $row['agei'];
											
						
							 echo $row['desc']
						
									 $i++;
						 
					}
					return $['id'];
					echo "</table>";

    }

}
?>