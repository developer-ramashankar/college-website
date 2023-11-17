<?php 

if(isset($_POST['login']))
{
	
	$mobile=$_POST['username'];
	$pass=$_POST['password'];
	
include('./db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$count=0;

$sql = "SELECT * from teacher_login where mobile='$mobile' and pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $count++;
  }
}  
$conn->close();

if($count==1)
{
	session_start();
	$_SESSION['mobile']=$mobile;
	$_SESSION['subject']=$subject;
	header('location:./teacher_panal/index.php');
}
else
{
	header('location:./teacher_login.php?msg=Wrong Mobile Or Pass');
}



}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College - Login</title> <?php include("./include/stylesheet.php")?>
  </head>
  <body> <?php include("./include/header.php")?>
  
  <?php
  if(isset($_GET['msg'])){
	  ?>
	  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey</strong> Your username or password is not correct.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
	  <?php
  }
  
  
  ?>
  
          <section class="tf__contact_page pt_30 xs_pt_70 xs_pb_80">
      <div class="container">
        <h2>Teacher Login </h2>
      </div>
    </section>
	  <section class="tf__sign_in_page pt_12 xs_pt_8 pb_12 xs_pb_8">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-9 col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__sing_in_form">
                        <form method="post" action="teacher_login.php">
                            <h4>Login</h4>
                            <p>Welcome back! Please enter your details.</p>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <label>Username</label>
                                        <input type="text" name="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__form_single_input">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remeber Me <a href="#">Forgot Password ?</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" name="login" class="tf__common_btn">Sign in</button>
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
                        <p class="create_account">Dont’t have an aceount ? <a href="teacher_sign_up.php">sign up</a>
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