<?php
if(isset($_POST['submit']))
{
	
include('./db.php');
	
	$mobile=$_POST['mobile'];
 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student_detail (id,mobile,sub_1,sub_2,sub_3,sub_4,sub_5) VALUES (id,'$mobile','$sub_1','$sub_2','$sub_3','$sub_4','$sub_5')";

if ($conn->query($sql) === TRUE) {
   header('location:./detail.php?msg=Successfully Uploaded.');
} else {
	
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
		<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Student 12th</h4>
                
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SL NO.</th>
                          <th>Student Name</th>
                          <th>Student Class</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include('./include/studentlist.php')?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       
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