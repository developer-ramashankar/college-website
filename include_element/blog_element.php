<?php
include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from add_blog order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
<div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
	<div class="tf__single_event">
		<div class="tf__single_event_date">
			<img src="<?php echo $row['photo'];?>" alt="event" class="img-fluid w-100">
			<h2> <span><?php echo $row['date'];?></span></h2>
		</div>
		<div class="tf__single_event_text">
			<h3><?php echo $row['title'];?></h3>
			<ul>
				<li><i class="fal fa-pen"></i> <?php echo $row['writer'];?></li>
			</ul>
			<p><?php echo $row['detail'];?></p>
			
			<a href="./blog_details.php?id=<?php echo $row['id']; ?>">Read <i class="far fa-long-arrow-right"></i></a>
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