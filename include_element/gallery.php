<?php
include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM gallery order by id desc";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>
<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
	<div class="tf__single_blog">
		<div class="tf__single_blog_img">
			<img src="<?php echo $row['photo'];?>" alt="blog" class="img-fluid w-100">
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