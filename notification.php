<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SNSY Inter College - Notification</title> <?php include("./include/stylesheet.php")?>
  </head>
  <style>
    .notic_board {
      font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif;
      color: #34495e;
      -webkit-font-smoothing: antialiased;
      line-height: 1.6em;
    }

    p {
      margin: 0;
    }

    .notice {
      position: relative;
      margin: 1em;
      background: #F9F9F9;
      padding: 1em 1em 1em 2em;
      border-left: 4px solid #DDD;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.125);
    }

    .notice:before {
      position: absolute;
      top: 50%;
      margin-top: -17px;
      left: -17px;
      background-color: #DDD;
      color: #FFF;
      width: 30px;
      height: 30px;
      border-radius: 100%;
      text-align: center;
      line-height: 30px;
      font-weight: bold;
      font-family: Georgia;
      text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
    }

    .info {
      border-color: #0074D9;
    }

    .info:before {
      content: "i";
      background-color: #0074D9;
    }

    .notice {
      display: flex;
      justify-content: space-between;
    }
  </style>
  <body> <?php include("./include/header.php")?> <section class="tf__contact_page pt_30 xs_pt_70 xs_pb_80">
      <div class="container">
        <h2>Notification</h2>
      </div>
    </section>
    <div class=""> <?php include('./include_element/notification.php')?> </div> <?php include("./include/footer.php")?>
    <!--==============================
        SCROLL BUTTON START
    ===============================-->
    <div class="tf__scroll_btn">
      <i class="far fa-long-arrow-up"></i>
    </div>
    <!--==============================
        SCROLL BUTTON END
    ===============================--> <?php include('./include/js.php');?> 
	<script>
      $(document).ready(function() {
        function loadTable(page) {
          $.ajax({
            url: "notification_pagination.php",
            type: "POST",
            data: {
              page_no: page
            },
            success: function(data) {
              if (data) {
                $("#pagination").remove();
                $("#loadData").append(data);
              } else {
                $("#ajaxbtn").remove();
              }
            }
          })
        }
        loadTable();
        //pagination code
        $(document).on("click", "#ajaxbtn", function(e) {
          var pid = $(this).data("id");
          loadTable(pid);
        })
      });
    </script>
  </body>
</html>