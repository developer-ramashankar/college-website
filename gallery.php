<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <title>SNSY Inter College - Gallery</title>
    <?php include("./include/stylesheet.php")?>
</head>

<body>
<?php include("./include/header.php")?>

 
    <!--==============================
        BLOG PAGE START
    ===============================-->
		<section class="tf__contact_page pt_30 xs_pt_70 xs_pb_80">
        <div class="container">
        
                <h2>Gallery</h2>
				</div>
				</section>
    <section class="tf__blog_page xs_pt_80 pb_120 xs_pb_80">
        <div class="container" id="table_data">
        
        </div>
    </section>
    <!--==============================
        BLOG PAGE END
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

    <script>
        $(document).ready(function() {
        function loadTable(page){
            $.ajax({
                url: "gallery_pagination.php",
                type:"POST",
                data:{page_no : page},
                success: function (data) {
                    $("#table_data").html(data);
                }
            })
        }
        loadTable();
        //pagination code
        $(document).on("click","#pagination a",function(e) {
            e.preventDefault();
            var page_id =$(this).attr("id");

            loadTable(page_id);
            })
        });
    </script>

</body>
</html>