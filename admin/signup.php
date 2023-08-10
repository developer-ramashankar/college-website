<?php

if(isset($_POST['submit']))
{
	//Getting data from form
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$pass=$_POST['pass'];
	
	//Getting data from form
	
	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "snsy_inter_college";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "insert into user (id,name,mobile,pass) values ('id','$name','$mobile','$pass')";
			
			if ($conn->query($sql) === TRUE) {
				
			  header('location:./signup.php?msg=Successfully Uploaded.');
			  
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
        <title>Sign Up - SNSY Inter College</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
									<form action="./signup.php" method="post">
											<div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="name" required placeholder="Enter Your Name" />
                                                <label for="inputEmail">Name</label>
                                            </div> 
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="tel" name="mobile" required placeholder="Mobile Number" />
                                                <label for="inputEmail">Mobiles</label>
                                            </div>  
											<div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="password" name="pass" required placeholder="Mobile Number" />
                                                <label for="inputEmail">Password</label>
                                            </div>
                                        
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
													<button class="btn btn-primary btn-block" type="submit" name="submit">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="./login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                 <?php include('./footer.php')?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
