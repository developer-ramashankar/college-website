<?php

if(isset($_GET['action']))
{
	
	$id=$_GET['id']; //Getting id get variable from url.
	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mycollege";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// sql to delete a record
	$sql = "DELETE FROM course WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
	 
	 header('location:./courselist.php?delete=Success');
	 
	} else {
	  echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
	
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Course List</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
		<?php include('./header.php'); ?>
		
		
        <div id="layoutSidenav">
            <?php include('./menu.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h5 class="mt-4">Students List</h5>
                       
                        <div class="row table-responsive">
						
						<table class="table table-striped">
							<tr>
								<td>SL</td>
								<td>Photo</td>
								<td>Course Name</td>
								<td>Class Teacher</td>
								<td>Details</td>
								<td>MRP</td>
								<td>Price</td>
								<td>Discount</td>
								<td>Duration</td>								
								<td>Action</td>
							</tr>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mycollege";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM course";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>	
			<tr>
								<td><?php echo $row['id']; ?></td>
								<td><img style="height:80px;" src="<?php echo $row['photo']; ?>"></td>
								<td><?php echo $row['title']; ?></td>
								<td><?php echo $row['class_teacher']; ?></td>
								<td><?php echo $row['details']; ?></td>
								<td><?php echo $row['mrp']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['discount']; ?></td>
								<td><?php echo $row['duration']; ?></td>
								
								<td> 
								
								<a href="./courselist.php?id=<?php echo $row['id']; ?>&action=delete"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>  
								<a href="./editcourse.php?id=<?php echo $row['id']; ?>&action=edit"><button class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></button></a>  
								
								</td>
			</tr>
	
	
<?php	
  }
} else {
  echo "0 results";
}
$conn->close();
?>			


						
						</table>
						
                             
                        </div>
                        
                            </div>
                        
                </main>
                <?php include('./footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>