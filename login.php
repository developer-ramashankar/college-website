<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College - Login</title> <?php include("./include/stylesheet.php")?>
  </head>
  <body> <?php include("./include/header.php")?>
     
	  <section class="tf__sign_in_page pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-9 col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__sing_in_form">
                        <form>
                            <h4>Sign In</h4>
                            <p>Welcome back! Please enter your details.</p>
                            <div class="row">
                               
                               
                                <div class="col-xl-12">
                                    
                                    <button type="submit" class="tf__common_btn"> <a class="nav-link" href="student_login.php" style="width:100%;">Student Login</a></button>
										<section class="tf__contact_page pt_30 xs_pt_70 xs_pb_80">
										  <div class="container"></div>
										</section>
                                   <button type="submit" class="tf__common_btn"> <a class="nav-link" href="teacher_login.php" style="width:100%;">Teacher Login</a></button>
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