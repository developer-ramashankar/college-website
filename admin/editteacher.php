<?php
if(isset($_POST['submit']))
{	
	$filename = $_FILES["photo"]["name"];  //Change FIle Name Only
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["photo"]["size"];  //Change FIle Name Only
	$allowed_file_types = array('.gif','.png','.JPG','.jpg','.PNG','.jpeg','.WebP');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000000))
	{	
		
			$t=time();


		$newfilename = $file_basename. $t .'apexza'. $file_ext;
		if (file_exists("../content/teacher/" . $newfilename))  //Change FIle Root Only   //Folder Name
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../content/teacher/" . $newfilename); //Change FIle Name & Root Only
			//echo "Successfully Uploaded Student Pic.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 200000000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
	
$photo='content/teacher/'.$newfilename;


	$id=$_POST['id'];
	$name=$_POST['name'];
	$post=$_POST['post'];

include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE add_teacher SET name='$name',post='$post',photo='$photo' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header('location:./teacherlist.php?msg=Successfully Updated');
} else {
  echo "Error updating record: " . $conn->error;
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
        <title>Dashboard - Edit Teacher</title>
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
                        <h5 class="mt-4">Edit Teacher</h5>
                       
                        <div class="row">
						
						<?php if(isset($_GET['msg'])) { ?>
						
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Hey Admin!</strong> You Have Successfully Uploaded Teacher's Details.
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php } ?>
						<?php					
							include('./db.php');
							
							$id=$_GET['id'];
							
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
							}

							$sql = "SELECT * from add_teacher where id='$id'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
						?>
						
							<form method="post" enctype="multipart/form-data" action="./editteacher.php">
								<input name="id" value="<?php echo $row['id']; ?>" type="hidden"/>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail"  name="name" type="text" placeholder="Name" value="<?php echo $row['name'];?>" />
                                                <label for="inputEmail">Teacher Name</label>
                                            </div>
											<div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail"  name="post" type="text" placeholder="name@example.com" value="<?php echo $row['post'];?>" />
                                                <label for="inputEmail">Designation</label>
                                            </div>
											<div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail"  name="photo" type="file" value="<?php echo $row['photo'];?>" />
                                                <label for="inputEmail" >Photo</label>
                                            </div>
											<div class="mt-4 mb-0">
                                                <div class="d-grid"><button name="submit" class="btn btn-primary btn-block" type="submit">Save</button></div>
                                            </div>
                                        </form>	
											  <?php
											  }
											} else {
											  echo "0 results";
											}
											$conn->close();
											?>
                             
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
