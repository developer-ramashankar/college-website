<?php
include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM notification order by id desc";   //Change Only Table's Name
$result = $conn->query($sql);

$s=1;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>	
<div class="notice">
	<p><span style="background-color:royalblue;color:white;margin-right:10px;" class="badge badge-secondary"><?php echo $s; ?></span><?php echo $row['title']; ?></p>
	<button onclick="window.location.href='./edufax/<?php echo $row['pdf']; ?>'" class="btn btn-danger btn-sm">Download</button>
</div>
<?php	
$s++;
  }
} else {
  echo "0 results";
}
$conn->close();
?>