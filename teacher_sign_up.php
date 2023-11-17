<?php

	if(isset($_POST['submit']))
	{	
		$name=$_POST['name'];
		$subject=$_POST['subject'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$pass=$_POST['password'];
		
		$date =date('d-m-y');
		$datetime= time();
			
		include('./db.php');

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
	 

		$sql = "insert into teacher_login (id,mobile,name,email,subject,pass,date,datetime) values ('id','$mobile','$name','$email','$subject','$pass','$date','$datetime')";
		
		
		

		if ($conn->query($sql) === TRUE) {
		    header('location:./teacher_sign_up.php?msg=Successfully Sign Up.');
		  
		  
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College - Teacher Sign Up</title> <?php include("./include/stylesheet.php")?>
  </head>
  <body> <?php include("./include/header.php")?>
     <section class="tf__contact_page pt_30 xs_pt_70 xs_pb_80">
      <div class="container">
        <h2>Teacher Sign Up </h2>
      </div>
    </section>
	  <section class="tf__sign_in_page pt_12 xs_pt_8 pb_12 xs_pb_8">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-9 col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__sing_in_form">
                        <form method="post" action="./teacher_sign_up.php">
                            <h4>Sign up</h4>
                            <p>Welcome back! Please enter your details.</p>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <label>name</label>
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
								  
								  <div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <label>Mobile</label>
                                        <input type="tel" name="mobile" placeholder="Mobile" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <label>email</label>
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
								<div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <label>Subject</label>
										<select class="form-select" name="subject" aria-label="Default select example" required>
										<option>Enter Your Subject</option>
										<option>English</option>
										<option>Hindi</option>
										<option>Maths</option>
										<option>Physics</option>
										<option>Chemistry</option>
										<option>Biology</option>
										<option>Urdu</option>
										</select>
                                     
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" name="submit" class="tf__common_btn">Sign up</button>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>or</span></p>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <p class="create_account">Dont’t have an aceount ? <a href="teacher_login.php">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>






	 <?php include("./include/footer.php")?>
    <!--==============================
        SCROLL BUTTON START
    ===============================-->
    <div class="tf__scroll_btn">
      <i class="far fa-long-arrow-up"></i>
    </div>
    <!--==============================
        SCROLL BUTTON END
    ===============================--> <?php include('./include/js.php');?>
  </body>
</html>