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
		if (file_exists("../content/" . $newfilename))  //Change FIle Root Only   //Folder Name
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../content/" . $newfilename); //Change FIle Name & Root Only
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
	
$photo='content/'.$newfilename;


	$id=$_POST['id'];
	$title=$_POST['title'];
	$writer=$_POST['writer'];
	$detail=$_POST['detail'];
	$date=$_POST['date'];

include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE add_blog SET title='$title',writer='$writer',detail='$detail',date='$date',photo='$photo' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header('location:./bloglist.php?msg=Successfully Updated');
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
        <title>Dashboard - Edit Blog</title>
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
                        <h5 class="mt-4">Edit Blog</h5>
                       
                        <div class="row">
						
						<?php if(isset($_GET['msg'])) { ?>
						
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Hey Admin!</strong> You Have Successfully Uploaded Blog.
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

							$sql = "SELECT * from add_blog where id='$id'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
						?>
							<form method="post" enctype="multipart/form-data" action="./editblog.php">
											<input name="id" value="<?php echo $row['id']; ?>" type="hidden"/>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="title" type="text" value="<?php echo $row['title'];?>" />
                                                        <label for="inputFirstName">Blog Title</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
													<select class="form-control" id="inputLastName" name="writer" >
													<option><?php echo $row['writer'];?></option>
													<option>Choose Your Option</option>
													<option>SNSY Inter College</option>
													</select>
                                                        <label for="inputLastName">Writer</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
												 <textarea class="form-control" id="inputEmail" name="detail" style="height:200px;" aria-label="With textarea"><?php echo $row['detail'];?></textarea>
                                                <label for="inputEmail">Blog Detail</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="date" id="inputPassword" type="date" value="<?php echo $row['date'];?>" />
                                                        <label for="inputPassword">Date</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm"  name="photo" type="file" />
                                                     
                                                    </div>
                                                </div>
												
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
