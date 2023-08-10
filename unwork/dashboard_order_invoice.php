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
                        <h1>dashboard invoice</h1>
                        <ul>
                            <li><a href="#">dashboard</a></li>
                            <li> invoice</li>
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
        DASHBOARD INVOICE  PAGE START
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
                            <div class="tf__invoice">
                                <a class="go_back" href="dashboard_order.html"><i
                                        class="fas fa-long-arrow-alt-left"></i> go back</a>
                                <div class="tf__invoice_header wow fadeInUp" data-wow-duration="1s">
                                    <div class="header_address">
                                        <h4>invoice to</h4>
                                        <p>7232 Broadway Suite 308, Jackson Heights, 11372, NY, United
                                            States</p>
                                        <p>+1347-430-9510</p>
                                    </div>
                                    <div class="header_address">
                                        <p><b>invoice no: </b><span>4574</span></p>
                                        <p><b>Order ID:</b> <span> #4789546458</span></p>
                                        <p><b>date:</b> <span>10-11-2022</span></p>
                                    </div>
                                </div>
                                <div class="tf__invoice_body wow fadeInUp" data-wow-duration="1s">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th class="sl_no">SL</th>
                                                    <th class="package">item description</th>
                                                    <th class="price">Price</th>
                                                    <th class="qnty">Quantity</th>
                                                    <th class="total">Total</th>
                                                </tr>
                                                <tr>
                                                    <td class="sl_no">01</td>
                                                    <td class="package">
                                                        <a class="course_name" href="#">Programming for all (Started
                                                            With Python)</a>
                                                        <ul>
                                                            <li>
                                                                <span>
                                                                    <img src="images/book_icon.svg" alt="book"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                21 Lesson
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <img src="images/star_icon.svg" alt="start"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                4.9 (25)
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="price">
                                                        $99.00
                                                    </td>
                                                    <td class="qnty">
                                                        2
                                                    </td>
                                                    <td class="total">
                                                        $180.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sl_no">02</td>
                                                    <td class="package">
                                                        <a class="course_name" href="#">Dave conservatoire is the
                                                            Entirely free online</a>
                                                        <ul>
                                                            <li>
                                                                <span>
                                                                    <img src="images/book_icon.svg" alt="book"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                36 Lesson
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <img src="images/star_icon.svg" alt="start"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                4.5 (42)
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="price">
                                                        $80.00
                                                    </td>
                                                    <td class="qnty">
                                                        1
                                                    </td>
                                                    <td class="total">
                                                        $80.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sl_no">03</td>
                                                    <td class="package">
                                                        <a class="course_name" href="#">Project Management Principles &
                                                            Practices</a>
                                                        <ul>
                                                            <li>
                                                                <span>
                                                                    <img src="images/book_icon.svg" alt="book"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                18 Lesson
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <img src="images/star_icon.svg" alt="start"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                5.0 (66)
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="price">
                                                        $55.00
                                                    </td>
                                                    <td class="qnty">
                                                        1
                                                    </td>
                                                    <td class="total">
                                                        $55.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sl_no">03</td>
                                                    <td class="package">
                                                        <a class="course_name" href="#">Dave conservatoire is the
                                                            Entirely free online</a>
                                                        <ul>
                                                            <li>
                                                                <span>
                                                                    <img src="images/book_icon.svg" alt="book"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                42 Lesson
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <img src="images/star_icon.svg" alt="start"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                4.0 (33)
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="price">
                                                        $70.00
                                                    </td>
                                                    <td class="qnty">
                                                        2
                                                    </td>
                                                    <td class="total">
                                                        $140.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sl_no">03</td>
                                                    <td class="package">
                                                        <a class="course_name" href="#">Project Management Principles &
                                                            Practices</a>
                                                        <ul>
                                                            <li>
                                                                <span>
                                                                    <img src="images/book_icon.svg" alt="book"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                26 Lesson
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <img src="images/star_icon.svg" alt="start"
                                                                        class="img-fluid w-100">
                                                                </span>
                                                                4.5 (71)
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="price">
                                                        $90.00
                                                    </td>
                                                    <td class="qnty">
                                                        1
                                                    </td>
                                                    <td class="total">
                                                        $90.00
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="package" colspan="3">
                                                        <b>sub total</b>
                                                    </td>
                                                    <td class="qnty">
                                                        <b>12</b>
                                                    </td>
                                                    <td class="total">
                                                        <b>$755</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="package coupon" colspan="3">
                                                        <b>(-) Discount coupon</b>
                                                    </td>
                                                    <td class="qnty">
                                                        <b></b>
                                                    </td>
                                                    <td class="total coupon">
                                                        <b>$0.00</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="package coast" colspan="3">
                                                        <b>(+) Shipping Cost</b>
                                                    </td>
                                                    <td class="qnty">
                                                        <b></b>
                                                    </td>
                                                    <td class="total coast">
                                                        <b>$10.00</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="package" colspan="3">
                                                        <b>Total Paid</b>
                                                    </td>
                                                    <td class="qnty">
                                                        <b></b>
                                                    </td>
                                                    <td class="total">
                                                        <b>$765</b>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <a class="print_btn tf__common_btn" href="#"><i class="far fa-print"></i> print
                                    PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        DASHBOARD INVOICE  PAGE END
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