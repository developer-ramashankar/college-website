<?php
include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM college_details";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>	
<p>
	<i class="fas fa-map-marker-alt"></i>
	<span><?php echo $row['address'];?></span>
</p>
<p>
	<i class="fas fa-phone-alt"></i>
	<span><?php echo $row['mobile'];?></span>
</p>
<p>
	<i class="fas fa-envelope"></i>
	<span><?php echo $row['email'];?></span>
</p>
<?php	
  }
} else {
  echo "0 results";
}
$conn->close();
?>		