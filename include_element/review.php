<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "snsy_inter_college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM review";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>	
<div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
	<div class="tf__single_testimonial">
		<div class="img">
			<img src="<?php echo $row['photo']; ?>" alt="testimonial" class="img-fluid w-100">
		</div>
		<h4><?php echo $row['name']; ?></h4>
		<p class="description"><?php echo $row['detail']; ?></p>
	</div>
</div>
<?php	
  }
} else {
  echo "0 results";
}
$conn->close();
?>			