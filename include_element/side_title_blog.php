<?php
include('./db.php');

 $id=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from add_blog where id!='$id' ORDER BY RAND() limit 8 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
<li>
	<div class="img">
		<img src="<?php echo $row['photo'];?>" alt="popular post" class="img-fluid w-100">
	</div>
	<div class="text">
		<a  href="./blog_details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'];?></a>
		<p><i class="fal fa-calendar-alt"></i><?php echo $row['date'];?></p>
	</div>
</li>
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>