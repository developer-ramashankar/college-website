<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College</title>
    <?php include("./include/stylesheet.php") ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        ::-webkit-scrollbar-track
            {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
            }

        ::-webkit-scrollbar
            {
            width: 10px;
            background-color: #F5F5F5;
            }

        ::-webkit-scrollbar-thumb
            {
            background-color: #0ae;
            
            background-image: -webkit-gradient(linear, 0 0, 0 100%,
                                color-stop(.5, rgba(255, 255, 255, .2)),
                                color-stop(.5, transparent), to(transparent));
            }
    </style>
</head>

<body>

    <!--==============================
        MENU START
    ===============================-->
    <?php include("./include/header.php") ?>
    <!--==============================
        MENU END
    ===============================-->




    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php include('./include_element/slider.php')?>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <section class="tf__blog pt_110 xs_pt_75 pb_100 xs_pb_60" style="background: url(images/blog_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-9 col-lg-7 m-auto">
                    <div class="tf__section_heading heading_center mb_30 xs_mb_30">
                        <h2>College Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row blog_slider">
               <?php include('./include_element/gallery.php')?>
            </div>
        </div>
        </div>
    </section>


    <!--==============================
        ABOUT US END
    ===============================-->
    <section class="tf__about_us pt_120 xs_pt_80 pb_120 xs_pb_80" style="background: url(images/about_section_bg.jpg);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-md-9 col-lg-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="tf__about_us_img">
                        <div class="img_1">
                            <img src="assets/image/11.jpg" alt="about us" class="img-fluid w-100">
                        </div>
                        <div class="img_2">
                            <img src="assets/image/13.jpg" alt="about us" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="tf__about_us_text">
                        <div class="tf__section_heading mb_25">
                            <h2>We do great things together</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur. Aliquet suspendisse elementum feugiat sit vel
                            scelerisque. Pellentesque elit purus vel viverra rhoncus. Tempus eget dolor feugiat
                            porttitor. Et gravida tortor vel venenatis varius odio vivamus. Quam sed egestas amet vel.
                            Sed et viverra leo in pellentesque varius. </p>
                        <ul class="d-flex flex-wrap">
                            <li>
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <h4>Build your career</h4>
                                <p>Online course quickly from anywhere.</p>
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-pencil-ruler"></i>
                                </span>
                                <h4>Grow your skill</h4>
                                <p>Online course quickly from anywhere.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        ABOUT US END
    ===============================-->
    <section class="tf__instructor mt_12 xs_mt_80">
        <div class="tf__instructor_overlay  pt_110 xs_pt_75 pb_80 xs_pb_40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="tf__section_heading heading_center mb_35 xs_mb_30">
                            <h2>Our Teachers</h2>
                            <p>Take your learning organization to the next level. to the next level. Who will
                                share their knowledge to people around the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row team_slider">
                    <?php include('./include_element/teacher.php')?>
                </div>
            </div>
        </div>
    </section>




    <!--==============================
        STUDENT CHOOSE START
    ===============================-->
    <section class="tf__student_choose pt_120 xs_pt_80 pb_115 xs_pb_75"
        style="background: url(images/student_choose_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="tf__student_choose_text">
                        <div class="tf__section_heading mb_35">
                            <h2>Why Students Choose Us for Gain Their Knowledge</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur. Posuere vulputate at tortor aenean tortor tincidunt
                            dui consequat enim. Vel iaculis euismod et scelerisque condimentum nulla cras. Praesent diam
                            orci id et eu nulla id. Auctor fermentum.</p>
                        <ul>
                            <li>Free for physically handcraft.</li>
                            <li>Easy to enroll courses</li>
                            <li>Course certificate for particular course</li>
                        </ul>
                        <a class="tf__common_btn2" href="about.php">More About Us</a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="tf__student_choose_img">
                        <div class="img_1">
                            <img src="./assets/image/14.jpg" alt="student choose" class="img-fluid w-100">
                        </div>
                        <div class="img_2">
                            <img src="./assets/image/10.jpg" alt="student choose" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        STUDENT CHOOSE END
    ===============================-->
	

    <!--==============================
        CERTIFICATE START
    ===============================-->
    <section class="tf__certificate" style="background: url(images/certificate_bg.jpg);">
        <div class="tf__certificate_overlay pt_60 pb_60 xs_pb_5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_certificate">
                            <span>
                                <img src="images/certificate_icon_1.png" alt="icon" class="img-fluid w-100">
                            </span>
                            <h4>Online Certification</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_certificate">
                            <span>
                                <img src="images/certificate_icon_2.png" alt="icon" class="img-fluid w-100">
                            </span>
                            <h4>Top Instructors</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_certificate">
                            <span>
                                <img src="images/certificate_icon_3.png" alt="icon" class="img-fluid w-100">
                            </span>
                            <h4>Unlimited Access</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_certificate">
                            <span>
                                <img src="images/certificate_icon_4.png" alt="icon" class="img-fluid w-100">
                            </span>
                            <h4>Experienced Members</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        CERTIFICATE END
    ===============================-->


 
    <!--==============================
        TESTIMONIAL START
    ===============================-->
    <section class="tf__testimonial pt_110 xs_pt_75 pb_115 xs_pb_75"
        style="background: url(images/testimonial_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-9 col-lg-7">
                    <div class="tf__section_heading mb_60">
                        <h2>What Our Student Saying</h2>
                        <p>Take your learning organization to the next level. to the next level. Who will
                            share their knowledge to people around the world.</p>
                    </div>
                </div>
            </div>
            <div class="row testi_slider">
                      <?php include('./include_element/review.php')?>
            </div>
        </div>
    </section>
    <!--==============================
        TESTIMONIAL END
    ===============================-->

    <!--==============================
        FOOTER START
    ===============================-->
    <?php include("./include/footer.php") ?>
    <!--==============================
        FOOTER END
    ===============================-->


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

</html>