<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/edufax/dashboard_courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 07:03:41 GMT -->
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
    <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h1>dashboard courses</h1>
                        <ul>
                            <li><a href="#">dashboard</a></li>
                            <li> courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        BREADCRUMB END
    ===============================-->


    <!--==============================
        DASHBOARD COURSES PAGE START
    ===============================-->
    <section class="tf__dashboard pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="tf__dashboard_content">
                <div class="row">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="tf__dashboard_sidebar">
                            <div class="tf__dashboard_sidebar_user">
                                <div class="img">
                                    <img src="images/dashboard_user_img.jpg" alt="user" class="img-fluid w-100">

                                    <label for="upload">
                                        <img src="images/camera_icon.png" alt="upload" class="img-fluid w-100">
                                    </label>
                                    <input type="file" id="upload" hidden>
                                </div>
                                <h2>Jhon due</h2>
                                <p>Sales & Marketing</p>
                            </div>
                            <div class="tf__dashboard_sidebar_menu">
                                <ul>
                                    <li><a href="dashboard.html"><i class="far fa-th-large"></i>
                                            Overview</a></li>
                                    <li><a href="dashboard_info.html"><i class="far fa-user"></i> Personal Info</a></li>
                                    <li><a class="active" href="dashboard_courses.html"><i class="far fa-book-open"></i>
                                            Enroll
                                            Courses</a></li>
                                    <li><a href="dashboard_review.html"><i class="far fa-star"></i> Review</a></li>
                                    <li><a href="dashboard_order.html"><i class="far fa-shopping-basket"></i> Order</a>
                                    </li>
                                    <li><a href="dashboard_wishlist.html"><i class="far fa-heart"></i> Wishlist</a></li>
                                    <li><a href="dashboard_change_password.html"><i class="far fa-lock"></i> Change
                                            Password</a></li>
                                    <li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-lg-8">
                        <div class="tf__dashboard_body">
                            <h2 class="dashboard_title">courses</h2>
                            <div class="tf__dashboard_courses">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="tf__single_courses">
                                            <div class="tf__single_courses_img">
                                                <img src="images/courses_img_1.jpg" alt="courses"
                                                    class="img-fluid w-100">
                                                <a class="category" href="#">Design</a>
                                            </div>
                                            <div class="tf__single_courses_text">
                                                <ul class="d-flex flex-wrap justify-content-between">
                                                    <li>
                                                        <span class="icon">
                                                            <img src="images/book_icon.svg" alt="book"
                                                                class="img-fluid w-100">
                                                        </span>
                                                        32 Lesson
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="images/star_icon.svg" alt="start"
                                                                class="img-fluid w-100">
                                                        </span>
                                                        4.9 <span class="d-block ml_5">(25)</span>
                                                    </li>
                                                </ul>
                                                <a class="title" href="courses_details.html">Programming for all
                                                    (Started With Python)</a>
                                            </div>
                                            <div class="tf__dashboard_course_play">
                                                <a class="tf__common_btn w-100" href="courses_video.html">play
                                                    video</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="tf__single_courses">
                                            <div class="tf__single_courses_img">
                                                <img src="images/courses_img_2.jpg" alt="courses"
                                                    class="img-fluid w-100">
                                                <a class="category sky" href="#">Business</a>
                                            </div>
                                            <div class="tf__single_courses_text">
                                                <ul class="d-flex flex-wrap justify-content-between">
                                                    <li>
                                                        <span class="icon">
                                                            <img src="images/book_icon.svg" alt="book"
                                                                class="img-fluid w-100">
                                                        </span>
                                                        43 Lesson
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="images/star_icon.svg" alt="start"
                                                                class="img-fluid w-100">
                                                        </span>
                                                        5.0 <span class="d-block ml_5">(13)</span>
                                                    </li>
                                                </ul>
                                                <a class="title" href="courses_details.html">Dave conservatoire is the
                                                    Entirely free
                                                    online</a>
                                            </div>
                                            <div class="tf__dashboard_course_play">
                                                <a class="tf__common_btn w-100" href="courses_video.html">play
                                                    video</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="tf__single_courses">
                                            <div class="tf__single_courses_img">
                                                <img src="images/courses_img_3.jpg" alt="courses"
                                                    class="img-fluid w-100">
                                                <a class="category green" href="#">Finance</a>
                                            </div>
                                            <div class="tf__single_courses_text">
                                                <ul class="d-flex flex-wrap justify-content-between">
                                                    <li>
                                                        <span class="icon">
                                                            <img src="images/book_icon.svg" alt="book"
                                                                class="img-fluid w-100">
                                                        </span>
                                                        18 Lesson
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <img src="images/star_icon.svg" alt="start"
                                                                class="img-fluid w-100">
                                                        </span>
                                                        4.5 <span class="d-block ml_5">(32)</span>
                                                    </li>
                                                </ul>
                                                <a class="title" href="courses_details.html">Project Management
                                                    Principles & Practices</a>
                                            </div>
                                            <div class="tf__dashboard_course_play">
                                                <a class="tf__common_btn w-100" href="courses_video.html">play
                                                    video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        DASHBOARD COURSES PAGE END
    ===============================-->


    <?php include("./inlcude/footer.php")?>


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


<!-- Mirrored from html.themefax.com/edufax/dashboard_courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 07:03:41 GMT -->
</html>