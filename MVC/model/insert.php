<?php
include '../model/config.php';

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