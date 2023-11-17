<?php

include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$subject = $_SESSION['subject'];
$a=1;
$sql = "SELECT * FROM student_detail ";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<tr>
  <td><?php echo $a;?></td>
  <td><?php echo $row['mobile']?></td>
  <td><?php echo $row['sub_5']?></td>
</tr>
<?php
$a++;
  }
} else {
  echo "0 results";
}

$conn->close();
?>	