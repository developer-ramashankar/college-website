<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College - Blog</title> <?php include("./include/stylesheet.php")?>
  </head>
  <body> <?php include("./include/header.php")?> <section class="tf__contact_page pt_30 xs_pt_70 xs_pb_8">
      <div class="container">
        <h2>Blog</h2>
      </div>
    </section>
    <!--==============================
        BLOG PAGE START
    ===============================-->
    <section class="tf__event_page pt_9 xs_pt_55 pb_120 xs_pb_80">
      <div class="container" id="table_data"></div>
    </section>
    <!--==============================
        BLOG PAGE END
    ===============================--> <?php include("./include/footer.php")?>
    <!--==============================
        SCROLL BUTTON START
    ===============================-->
    <div class="tf__scroll_btn">
      <i class="far fa-long-arrow-up"></i>
    </div>
    <!--==============================
        SCROLL BUTTON END
    ===============================--> <?php include('./include/js.php');?> <script>
      $(document).ready(function() {
        function loadTable(page) {
          $.ajax({
            url: "blog_pagination.php",
            type: "POST",
            data: {
              page_no: page
            },
            success: function(data) {
              $("#table_data").html(data);
            }
          })
        }
        loadTable();
        //pagination code
        $(document).on("click", "#pagination a", function(e) {
          e.preventDefault();
          var page_id = $(this).attr("id");
          loadTable(page_id);
        })
      });
    </script>
  </body>
</html>