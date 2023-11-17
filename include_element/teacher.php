<?php
include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM add_teacher";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>
<div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
	<div class="tf__single_instructor">
		<a class="tf__single_instructor_img">
			<img src="<?php echo $row['photo'];?>" alt="instructor" class="img-fluid w-100">
		</a>
		<div class="tf__instructor_text">
			<a><?php echo $row['name'];?></a>
			<p><?php echo $row['post'];?></p>
		</div>
	</div>
</div>
<?php	
  }
} else {
  echo "0 results";
}
$conn->close();
?>