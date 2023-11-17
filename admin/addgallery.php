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
		if (file_exists("../content/gallery/" . $newfilename))  //Change FIle Root Only   //Folder Name
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../content/gallery/" . $newfilename); //Change FIle Name & Root Only
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
	
$photo='content/gallery/'.$newfilename;
	
	
			include('./db.php');

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "insert into gallery (id,photo) values ('id','$photo')";
			
			
			

			if ($conn->query($sql) === TRUE) {
			  
			  header('location:./addgallery.php?msg=Successfully Uploaded.');
			  
			} else {
			  echo "Error: " . $sql . "
<br>" . $conn->error;
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
    <title>Dashboard - Add Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed"> <?php include('./header.php'); ?> <div id="layoutSidenav"> <?php include('./menu.php'); ?> <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h5 class="mt-4">Add Gallery <a href="./gallerylist.php">
                <button class="btn btn-primary btn-sm">Gallery List</button>
              </a>
            </h5>
            <div class="row"> <?php if(isset($_GET['msg'])) { ?> <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hey Admin!</strong> You Have Successfully Uploaded Photo. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> <?php } ?> <form method="post" enctype="multipart/form-data" action="./addgallery.php">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input class="form-control" id="inputPasswordConfirm" name="photo" type="file" required />
                    </div>
                  </div>
                </div>
                <div class="mt-4 mb-0">
                  <div class="d-grid">
                    <button name="submit" class="btn btn-primary btn-block" type="submit">Save</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </main> <?php include('./footer.php'); ?>
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