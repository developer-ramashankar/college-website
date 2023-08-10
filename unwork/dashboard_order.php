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
                        <h1>dashboard order</h1>
                        <ul>
                            <li><a href="#">dashboard</a></li>
                            <li> order</li>
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
        DASHBOARD ORDER PAGE START
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
                                    <li><a href="dashboard_review.html"><i class="far fa-star"></i> Review</a></li>
                                    <li><a class="active" href="dashboard_order.html"><i
                                                class="far fa-shopping-basket"></i> Order</a>
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
                            <h2 class="dashboard_title">order</h2>
                            <div class="tf__dashboard_order wow fadeInUp" data-wow-duration="1s">
                                <div class="tf_dashboard_order_area">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>course fee</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        20 May 2023
                                                    </td>
                                                    <td>
                                                        <span class="paid">paid</span>
                                                    </td>
                                                    <td>
                                                        $59.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        15 Apr 2023
                                                    </td>
                                                    <td>
                                                        <span class="pending">pending</span>
                                                    </td>
                                                    <td>
                                                        $99.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        30 May 2023
                                                    </td>
                                                    <td>
                                                        <span class="cancel">cancel</span>
                                                    </td>
                                                    <td>
                                                        $70.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        27 Jan 2023
                                                    </td>
                                                    <td>
                                                        <span class="paid">paid</span>
                                                    </td>
                                                    <td>
                                                        $89.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        16 Aug 2023
                                                    </td>
                                                    <td>
                                                        <span class="paid">paid</span>
                                                    </td>
                                                    <td>
                                                        $100.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        24 Nov 2022
                                                    </td>
                                                    <td>
                                                        <span class="pending">pending</span>
                                                    </td>
                                                    <td>
                                                        $69.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        20 Oct 2022
                                                    </td>
                                                    <td>
                                                        <span class="paid">paid</span>
                                                    </td>
                                                    <td>
                                                        $65.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        28 Apr 2022
                                                    </td>
                                                    <td>
                                                        <span class="paid">paid</span>
                                                    </td>
                                                    <td>
                                                        $99.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        05 Mar 2022
                                                    </td>
                                                    <td>
                                                        <span class="cancel">cancel</span>
                                                    </td>
                                                    <td>
                                                        $80.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        #2545758745
                                                    </td>
                                                    <td>
                                                        01 Jan 2022
                                                    </td>
                                                    <td>
                                                        <span class="paid">paid</span>
                                                    </td>
                                                    <td>
                                                        $95.00
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html"> Details</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
        DASHBOARD ORDER PAGE END
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