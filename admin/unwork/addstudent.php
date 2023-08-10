<?php

if(isset($_POST['submit']))
{
	
	//Getting data from form
		$fullname=$_POST['fullname'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$father=$_POST['father'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$subject=$_POST['subject'];
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

			$sql = "insert into students (id,fullname,father,email,mobile,address,gender,subject) values ('id','$fullname','$father','$email','$mobile','$address','$gender','$subject')";
			
			
			

			if ($conn->query($sql) === TRUE) {
			  
			  header('location:./addteacher.php?msg=Successfully Uploaded.');
			  
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
        <title>Dashboard - Add Student</title>
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
                        <h5 class="mt-4">Add Student</h5>
                       
                        <div class="row">
						
						<?php if(isset($_GET['msg'])) { ?>
						
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Hey Admin!</strong> You Have Successfully Uploaded Student's Details.
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php } ?>
						
							<form method="post" enctype="multpart/form-data" action="./addstudent.php">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="fullname" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Full Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="father" type="text" placeholder="Enter your father's name" />
                                                        <label for="inputLastName">Father's Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail"  name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="mobile" id="inputPassword" type="tel" placeholder="Your Mobile" />
                                                        <label for="inputPassword">Mobile Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm"  name="address" type="text" placeholder="Address" />
                                                        <label for="inputPasswordConfirm">Address</label>
                                                    </div>
                                                </div>
												
                                            </div>
											
											
											<div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="gender" class="form-control">
															<option>Choose One</option>
															<option>Male</option>
															<option>Female</option>
														</select>
                                                        <label for="inputPassword">Gender</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="subject" class="form-control">
															<option>Choose One</option>
															<option>C,C++</option>
															<option>Java</option>
															<option>Python</option>
															<option>Tally</option>
															<option>Graphics</option>
														</select>
                                                        <label>Subject</label>
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
