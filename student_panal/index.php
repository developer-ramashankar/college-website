<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student -</title>
  <?php include('./stylesheet.php')?>
</head>
<body>
  <div class="container-scroller">
 
    <!-- partial:partials/_navbar.php -->
     <?php include('./navbar.php')?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
 
 
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <?php include('./menu.php')?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <?php include('./footer.php')?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
<?php include('./js.php')?>
</body>

</html>