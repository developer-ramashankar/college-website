<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College - Contact</title>
     <?php include("./include/stylesheet.php")?>
</head>

<body>

    <?php include("./include/header.php")?>
    <!--==============================
        CONTACT PAGE START
    ===============================-->
    <section class="tf__contact_page pt_30 xs_pt_70 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
					<?php
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

$sql = "SELECT * FROM college_details";   //Change Only Table's Name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
?>	
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="tf__contact_info">
                                <i class="fas fa-envelope"></i>
                                <h3>Email</h3>
                                <span>Our friendly team is here to help.</span>
                                <p><?php echo $row['email'];?></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="tf__contact_info">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Office</h3>
                                <span>Come say hello at our office.</span>
                                <p><?php echo $row['address'];?></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="tf__contact_info">
                                <i class="fas fa-phone-alt"></i>
                                <h3>Phone</h3>
                                <span>Mon-Sat from 8am to 5pm.</span>
                                <p><?php echo $row['mobile'];?></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="tf__contact_info">
                                <i class="fas fa-clock"></i>
                                <h3>Working Hours</h3>
                                <span>Monday to Saturday:</span>
                                <p>08:00am - 4:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
				<?php	
  }
} else {
  echo "0 results";
}
$conn->close();
?>		
                <div class="col-xl-6 wow fadeInRight" data-wow-duration="1s">
				<?php

					if(isset($_POST['submit']))
					{	
						$name=$_POST['name'];
						$email=$_POST['email'];
						$mobile=$_POST['mobile'];
						$msg=$_POST['msg'];
						
						$date =date('d-m-y');
						$datetime= time();
							
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

						$sql = "insert into feedback (id,name,email,mobile,msg,date,datetime) values ('id','$name','$email','$mobile','$msg','$date','$datetime')";
						
						
						

						if ($conn->query($sql) === TRUE) {
						  
						  
						  
						} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
						}

						$conn->close();
							
						
						
					}

					?>

					<form class="tf__contact_form" method="post" action="./contact.php" >
						<div class="row">
							<div class="col-xl-12">
								<div class="tf__form_single_input">
									<label>name</label>
									<input type="text" name="name" placeholder="Name">
								</div>
							</div>
							<div class="col-xl-12 col-md-6">
								<div class="tf__form_single_input">
									<label>email</label>
									<input type="email" name="email" placeholder="example@gmail.com">
								</div>
							</div>
							<div class="col-xl-12 col-md-6">
								<div class="tf__form_single_input">
									<label>phone</label>
									<input type="text" name="mobile" placeholder="Phone">
								</div>
							</div>
							<div class="col-xl-12">
								<div class="tf__form_single_input">
									<label>Message</label>
									<textarea rows="4" name="msg" placeholder="Type here.." required></textarea>
								</div>
								<button type="submit" name="submit" class="tf__common_btn">Send message</button>
							</div>
						</div>
					</form>
                </div>
				<div class="col-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_map mt_120 xs_mt_80">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3358197296357!2d87.4907440748731!3d25.792492877332535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eff9ae59792abb%3A0xe8d2030dc5e9c7af!2sSNSY%20Inter%20College%20Rambagh%20%2CPurnia!5e0!3m2!1sen!2sin!4v1690964368060!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        CONTACT PAGE END
    ===============================-->


    <?php include("./include/footer.php")?>


    <!--==============================
        SCROLL BUTTON START
    ===============================-->
    <div class="tf__scroll_btn"><i class="far fa-long-arrow-up"></i></div>
    <!--==============================
        SCROLL BUTTON END
    ===============================-->


    <!--jquery library js-->
    <script src="js/jquery-3.7.0.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="js/Font-Awesome.js"></script>
    <!--nice select js-->
    <script src="js/jquery.nice-select.min.js"></script>
    <!--slick slider js-->
    <script src="js/slick.min.js"></script>
    <!--sticky sidebar js-->
    <script src="js/sticky_sidebar.js"></script>
    <!--venobox js-->
    <script src="js/venobox.min.js"></script>
    <!--wow js-->
    <script src="js/wow.min.js"></script>
    <!--video player js-->
    <script src="js/videoPlayer.min.js"></script>

    <!--main/custom js-->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from html.themefax.com/edufax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 07:03:40 GMT -->
</html>