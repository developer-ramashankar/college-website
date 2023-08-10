<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>EduFax - Online Courses & Education HTML Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/venobox.min.css">
    <link rel="stylesheet" href="css/videoPlayer.min.css">

    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <?php include("./include/header.php")?>


    <!--==============================
        BREADCRUMB START
    ===============================-->
 
    <!--==============================
        BREADCRUMB END
    ===============================-->


    <!--==============================
        BLOG DETAILS PAGE START
    ===============================-->
	<?php
	$id=$_GET['id'];
	
	
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

$sql = "SELECT * from add_blog where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>

    <section class="tf__blog_details_page pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__blog_details_area">
                        <div class="tf__blog_details_img">
                            <img src="<?php echo $row['photo'];?>" alt="blog details" class="img-fluid w-100">
                        </div>
                        <div class="tf__blog_details_header">
                            <ul>
                                <li>
                                    <span>
                                        <img src="<?php echo $row['photo'];?>" alt="bloger" class="img-fluid w-100">
                                    </span>
                                    <?php echo $row['writer'];?>
                                </li>
                                <li>
                                    <p>
                                        <i class="fal fa-calendar-alt"></i>
                                         <?php echo $row['date'];?>
                                    </p>
                                    <p>
                                        <i class="far fa-eye"></i>
                                        120 View
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="tf__blog_details_text">
                            <h2><?php echo $row['title'];?></h2>
                            <p><?php echo $row['detail'];?></p>
                             
                                                
                        </div>
                        <div class="tf__blog_details_tag_area">
                            <ul class="tags d-flex flex-wrap">
                                <li>Tags:</li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">College</a></li>
                                <li><a href="#">Learning</a></li>
                            </ul>
                            <ul class="social d-flex flex-wrap">
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="tf__blog_comment_area">
                            <h3>2 Comments</h3>
                            <div class="tf__single_comment">
                                <div class="tf__single_comment_img">
                                    <img src="images/bloger_1.jpg" alt="comment" class="img-fluid w-100">
                                </div>
                                <div class="tf__single_comment_text">
                                    <h4>Cameron Williamson</h4>
                                    <p class="comment_time">Nov 23, 2024 at 12:23 pm <a href="#">reply</a></p>
                                    <p class="main_comment">Mollis porta eget mus volutpat nunc porttitor scelerisque
                                        nec feugiat. Ut sed vel malesuada sed viverra est nisi magna sed. Faucibus
                                        imperdiet nulla accumsan mi dictum velit leo. Risus ultrices ornare etiam
                                        volutpat dui et risus cras.</p>
                                </div>
                            </div>
                            <div class="tf__single_comment">
                                <div class="tf__single_comment_img">
                                    <img src="images/bloger_1.jpg" alt="comment" class="img-fluid w-100">
                                </div>
                                <div class="tf__single_comment_text">
                                    <h4>Cameron Williamson</h4>
                                    <p class="comment_time">Nov 23, 2024 at 12:23 pm <a href="#">reply</a></p>
                                    <p class="main_comment">Risus ultrices ornare etiam volutpat dui et risus cras.
                                        Fermentum mattis dolor tempus vel elit. Tellus scelerisque tortor vulputate
                                        euismod ac.</p>
                                </div>
                            </div>
                            <div class="tf__single_comment">
                                <div class="tf__single_comment_img">
                                    <img src="images/bloger_1.jpg" alt="comment" class="img-fluid w-100">
                                </div>
                                <div class="tf__single_comment_text">
                                    <h4>Cameron Williamson</h4>
                                    <p class="comment_time">Nov 23, 2024 at 12:23 pm <a href="#">reply</a></p>
                                    <p class="main_comment">Mollis porta eget mus volutpat nunc porttitor scelerisque
                                        nec feugiat. Ut sed vel malesuada sed viverra est nisi magna sed. Faucibus
                                        imperdiet nulla accumsan mi dictum velit leo.</p>
                                </div>
                            </div>
                          
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_search">
                            <h3>Search Here</h3>
                            <form>
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                       
                        <div class="tf__sidebar_post">
                            <h3>Popular Posts</h3>
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_img_1.jpg" alt="popular post" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="blog_details.html">How do I Sell Affiliate Products
                                            to My Customers</a>
                                        <p><i class="fal fa-calendar-alt"></i> 01 May, 2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_img_2.jpg" alt="popular post" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="blog_details.html">How do I Sell Affiliate Products
                                            to My Customers</a>
                                        <p><i class="fal fa-calendar-alt"></i> 21 May, 2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_img_3.jpg" alt="popular post" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="blog_details.html">How do I Sell Affiliate Products
                                            to My Customers</a>
                                        <p><i class="fal fa-calendar-alt"></i> 05 May, 2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_img_4.jpg" alt="popular post" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="blog_details.html">How do I Sell Affiliate Products
                                            to My Customers</a>
                                        <p><i class="fal fa-calendar-alt"></i> 29 May, 2023</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	   <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    <!--==============================
        BLOG DETAILS PAGE END
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


<!-- Mirrored from html.themefax.com/edufax/blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 07:03:32 GMT -->
</html>