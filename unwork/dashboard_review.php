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
    <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h1>dashboard review</h1>
                        <ul>
                            <li><a href="#">dashboard</a></li>
                            <li> review</li>
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
        DASHBOARD REVIEW PAGE START
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
                                    <li><a href="dashboard_courses.html"><i class="far fa-book-open"></i> Enroll
                                            Courses</a></li>
                                    <li><a class="active" href="dashboard_review.html"><i class="far fa-star"></i>
                                            Review</a></li>
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
                            <h2 class="dashboard_title">review</h2>
                            <div class="tf__dashboard_review">
                                <div class="tf__single_review wow fadeInUp" data-wow-duration="1s">
                                    <div class="tf__single_review_img">
                                        <img src="images/review_img_1.jpg" alt="review" class="img-fluid w-100">
                                    </div>
                                    <div class="tf__single_review_text">
                                        <h4><a href="#">Farjana Bawnia</a> <span><i class="fal fa-calendar-alt"></i> May
                                                15,
                                                2023</span></h4>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </p>
                                        <p class="comment">At 29 years old, my favorite compliment is being told
                                            that I look
                                            like my mom. Seeing myself in her image, like this daughter up top.
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/like_icon.svg" alt="link" class="img-fluid w-100">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/dislike_icon.svg" alt="link"
                                                        class="img-fluid w-100">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tf__single_review wow fadeInUp" data-wow-duration="1s">
                                    <div class="tf__single_review_img">
                                        <img src="images/review_img_2.jpg" alt="review" class="img-fluid w-100">
                                    </div>
                                    <div class="tf__single_review_text">
                                        <h4><a href="#">Razwan Islam</a> <span><i class="fal fa-calendar-alt"></i> May
                                                15,
                                                2023</span></h4>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </p>
                                        <p class="comment">My favorite compliment is being told that I look like
                                            my mom. Seeing myself in her image, like this daughter up top.
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/like_icon.svg" alt="link" class="img-fluid w-100">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/dislike_icon.svg" alt="link"
                                                        class="img-fluid w-100">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tf__single_review wow fadeInUp" data-wow-duration="1s">
                                    <div class="tf__single_review_img">
                                        <img src="images/review_img_3.jpg" alt="review" class="img-fluid w-100">
                                    </div>
                                    <div class="tf__single_review_text">
                                        <h4><a href="#">Babor Azom</a> <span><i class="fal fa-calendar-alt"></i> May 15,
                                                2023</span></h4>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </p>
                                        <p class="comment">Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit anim id est laborum.
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/like_icon.svg" alt="link" class="img-fluid w-100">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/dislike_icon.svg" alt="link"
                                                        class="img-fluid w-100">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tf__single_review wow fadeInUp" data-wow-duration="1s">
                                    <div class="tf__single_review_img">
                                        <img src="images/review_img_4.jpg" alt="review" class="img-fluid w-100">
                                    </div>
                                    <div class="tf__single_review_text">
                                        <h4><a href="#">Mohammad Ali</a> <span><i class="fal fa-calendar-alt"></i> May
                                                15,
                                                2023</span></h4>
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </p>
                                        <p class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                            eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                            beatae vitae dicta sunt explicabo.
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/like_icon.svg" alt="link" class="img-fluid w-100">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/dislike_icon.svg" alt="link"
                                                        class="img-fluid w-100">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tf__pagination">
                                    <div class="row">
                                        <div class="col-12">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"> <a class="page-link" href="#"
                                                            aria-label="Previous">
                                                            <i class="far fa-chevron-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link active" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#"
                                                            aria-label="Next">
                                                            <i class="far fa-chevron-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
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
        DASHBOARD REVIEW PAGE END
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
</html>