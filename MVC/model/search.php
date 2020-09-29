		<?php

$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if (isset($_POST['submitted'])) {

// Attempt select query execution
$gender = $_POST['gender'];
$age = $_POST['age'];
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
				<div class="searchrd">
				<a href='confirmation.php?id=<?php echo htmlspecialchars($_SESSION["username"]); ?>&child=<?php echo $row['name'];?>'>Request for Adoption</a>
				</div>
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