<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College - Blog</title> <?php include("./include/stylesheet.php") ?>
    <link rel="stylesheet" href="search_box.css">
  </head>
  <body> <?php include("./include/header.php")?>
    <!--==============================
        BLOG DETAILS PAGE START
    ===============================--> <?php
	$id=$_GET['id'];
	
	
include('./db.php');


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
   ?> <section class="tf__contact_page pt_30 xs_pt_70 xs_pb_8">
      <div class="container">
        <h2>Blog</h2>
      </div>
    </section>
    <section class="tf__blog_details_page pt_20 xs_pt_80 pb_120 xs_pb_80">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-8 wow fadeInUp" data-wow-duration="1s">
            <div class="tf__blog_details_area">
              <div class="tf__blog_details_img">
                <img src="
											<?php echo $row['photo'];?>" alt="blog details" class="img-fluid w-100">
              </div>
              <div class="tf__blog_details_header">
                <ul>
                  <li>
                    <span>
                      <img src="
															<?php echo $row['photo'];?>" alt="bloger" class="img-fluid w-100">
                    </span> <?php echo $row['writer'];?>
                  </li>
                  <li>
                    <p>
                      <i class="fal fa-calendar-alt"></i> <?php echo $row['date'];?>
                    </p>
                    <p>
                      <i class="far fa-eye"></i> 120 View
                    </p>
                  </li>
                </ul>
              </div>
              <div class="tf__blog_details_text">
                <h2> <?php echo $row['title'];?> </h2>
                <p> <?php echo $row['detail'];?> </p>
              </div> <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?> <div class="tf__blog_details_tag_area">
                <ul class="tags d-flex flex-wrap">
                  <li>Tags:</li>
                  <li>
                    <a href="#">Education</a>
                  </li>
                  <li>
                    <a href="#">College</a>
                  </li>
                  <li>
                    <a href="#">Learning</a>
                  </li>
                </ul>
                <ul class="social d-flex flex-wrap">
                  <!-- ShareThis BEGIN -->
                  <div class="sharethis-inline-share-buttons"></div>
                  <!-- ShareThis END -->
                </ul>
              </div>
              <div class="tf__blog_comment_area">
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4">
            <div class="tf__sidebar" id="sticky_sidebar">
              <div class="tf__sidebar_post">
                <h3>Popular Posts</h3>
                <ul> <?php include('./include_element/side_title_blog.php')?> </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <?php include("./include/footer.php")?> <div class="tf__scroll_btn">
      <i class="far fa-long-arrow-up"></i>
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="Ha0xRcsX"></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=64d5cfbc0e9b01001212e614&product=inline-share-buttons' async='async'></script> <?php include('./include/js.php');?>
  </body>
</html>