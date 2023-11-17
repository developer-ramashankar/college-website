<?php

if(isset($_POST['submit']))
{
	

$target_dir = "../content/notification/";
$pdf = $target_dir . basename($_FILES["photo"]["name"]);

if (move_uploaded_file($_FILES["photo"]["tmp_name"], $pdf)) {
  echo "The file " . basename($_FILES["photo"]["name"]) . " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
}

	
	
	//Getting data from form
		$title=$_POST['title'];
		$date=date('d-m-y');
		$datetime=time();

	//Getting data from form
	
	
	
include('./db.php');

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "insert into notification (id,title,pdf,date,datetime) values ('id','$title','$pdf','$date','$datetime')";
			
			if ($conn->query($sql) === TRUE) {
			  
			  header('location:./addnotification.php?msg=Successfully Uploaded.');
			  
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
    <title>Dashboard - Add Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed"> <?php include('./header.php'); ?> <div id="layoutSidenav"> <?php include('./menu.php'); ?> <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h5 class="mt-4">Add Notification <a href="./notificationlist.php">
                <button class="btn btn-primary btn-sm">Notification List</button>
              </a>
            </h5>
            <div class="row"> <?php if(isset($_GET['msg'])) { ?> <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hey Admin!</strong> You Have Successfully Uploaded Notification. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> <?php } ?> <form method="post" enctype="multipart/form-data" action="./addnotification.php">
                <div class="form-floating mb-3">
                  <input class="form-control" id="inputEmail" required name="title" type="text" placeholder="Name" />
                  <label for="inputEmail">Notification</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" id="inputEmail" accept="application/pdf" name="photo" type="file" required />
                  <label for="inputEmail">Photo</label>
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