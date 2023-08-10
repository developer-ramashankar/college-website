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
		if (file_exists("./content/" . $newfilename))  //Change FIle Root Only   //Folder Name
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["photo"]["tmp_name"], "./content/" . $newfilename); //Change FIle Name & Root Only
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
	
	
	
	
	
	
	
	
	//Getting data from form
		$title=$_POST['title'];
		$details=$_POST['details'];
		$duration=$_POST['duration'];
		$mrp=$_POST['mrp'];
		$price=$_POST['price'];
		$class_teacher=$_POST['class_teacher'];
		
		$discount=($price/$mrp)*100;
	//Getting data from form
	
	
	
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

			$sql = "insert into course (id,title,details,class_teacher,price,mrp,discount,photo,duration) values ('id','$title','$details','$class_teacher','$price','$mrp','$discount','$photo','$duration')";
			
			
			

			if ($conn->query($sql) === TRUE) {
			  
			  header('location:./addcourse.php?msg=Successfully Uploaded.');
			  
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
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
        <title>Dashboard - Add Course</title>
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
                        <h5 class="mt-4">Add Course</h5>
                       
                        <div class="row">
						
						<?php if(isset($_GET['msg'])) { ?>
						
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Hey Admin!</strong> You Have Successfully Uploaded course's Details.
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php } ?>
						
	<form method="post" enctype="multipart/form-data" action="./addcourse.php">
				<div class="row mb-3">
					<div class="col-md-6">
						<div class="form-floating mb-3 mb-md-0">
							<input class="form-control" id="inputFirstName" name="title" type="text" placeholder="Enter your first name" />
							<label for="inputFirstName">Title</label>
									
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-floating">
							<input class="form-control" id="inputLastName" name="class_teacher" type="text" placeholder="Enter your father's name" />
							<label for="inputLastName">Class Teacher</label>
						</div>
					</div>
				</div>
				
				<div class="row mb-3">
					<div class="col-md-6">
						<div class="form-floating mb-3 mb-md-0">
							<input class="form-control" id="inputFirstName" name="details" type="text" placeholder="Enter your first name" />
							<label for="inputFirstName">Details</label>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-floating">
							<input class="form-control" id="inputLastName" name="duration" type="text" placeholder="Enter your father's name" />
							<label for="inputLastName">Duration</label>
						</div>
					</div>
				</div>
				
				<div class="row mb-3">
					<div class="col-md-4">
						<div class="form-floating mb-3 mb-md-0">
							<input class="form-control" id="inputFirstName" name="mrp" type="text" placeholder="Enter your first name" />
							<label for="inputFirstName">MRP</label>
								
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating">
							<input class="form-control" id="inputLastName" name="price" type="text" placeholder="Enter your father's name" />
							<label for="inputLastName">Price</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-floating">
							<input class="form-control" id="inputLastName" required name="photo" type="file" placeholder="Enter your father's name" />
							<label for="inputLastName">Photo</label>
						</div>
					</div>
				</div>
				
				
				 
				
				
				
				<div class="mt-4 mb-0">
					<div class="d-grid"><button name="submit" class="btn btn-primary btn-block" type="submit">Save</button></div>
				</div>
			</form>	
					 
                             
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
