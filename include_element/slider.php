<?php
include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM home_slider order by id DESC limit 5";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>	
<div class="carousel-item active" style="height:80vh;">
	<img src="<?php echo $row['photo'];?>" class="d-block w-100" alt="...">
</div>
<?php	
  }
} else {
  echo "0 results";
}
$conn->close();
?>	