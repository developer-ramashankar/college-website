<?php
if(isset($_POST['submit']))
{
	
include('./db.php');
	
	$mobile=$_POST['mobile'];
	$sub_1=$_POST['sub_1'];
	$sub_2=$_POST['sub_2'];
	$sub_3=$_POST['sub_3'];
	$sub_4=$_POST['sub_4'];
	$sub_5=$_POST['sub_5'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student_detail (id,mobile,sub_1,sub_2,sub_3,sub_4,sub_5) VALUES (id,'$mobile','$sub_1','$sub_2','$sub_3','$sub_4','$sub_5')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
  <title>Student Details </title>
    <?php include('./stylesheet.php')?>
</head>
<body>
  <div class="container-scroller">
 
    <!-- partial:partials/_navbar.php -->
    <?php include('./navbar.php')?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
 
 
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <?php include('./menu.php')?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="col-md-6 grid-margin stretch-card" style>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Student Details</h4>
                  
                  <form class="forms-sample" method="post" action="./detail.php">
					
					<input type="hidden" name="mobile" value="<?php echo $mobile?>">
				    
					<div class="form-group">
                      <label for="exampleInputUsername1">First Subject</label>
                      <select class="form-select" name="sub_1" aria-label="Default select example" required>
					  <option selected>Select Subject</option>
					  <option value="Physics">Physics</option>
					</select>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputUsername1">Second Subject</label>
                      <select class="form-select" name="sub_2" aria-label="Default select example" required>
					  <option selected>Select Subject</option>
					  <option value="Chemistry">Chemistry</option>
					</select>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputUsername1">Compulsory</label>
                      <select class="form-select" name="sub_3" aria-label="Default select example" required>
					  <option selected>Select Subject</option>
					  <option value="Hindi">Hindi</option>
					</select>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputUsername1">Maths/Biology</label>
                      <select class="form-select" name="sub_4" aria-label="Default select example" required>
					  <option selected>Select Subject</option>
					  <option value="Maths">Maths</option>
					  <option value="Biology">Biology</option>
					</select>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputUsername1">Language Subject</label>
                      <select class="form-select" name="sub_5" aria-label="Default select example" required>
					  <option selected>Select Subject</option>
					  <option value="English">English</option>
					  <option value="Urdu">Urdu</option>
					</select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     <a href="./editblog.php?id=<?php echo $row['id']; ?>&action=edit"><button class="btn btn-danger me-2">Update</button></a>
                  </form>
                </div>
              </div>
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
       <?php include('./footer.php')?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php include('./js.php')?>
</body>

</html>	