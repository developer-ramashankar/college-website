<style>
::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
	border-radius: 10px;
}

::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-image: -webkit-gradient(linear,
									   left bottom,
									   left top,
									   color-stop(0.44, rgb(122,153,217)),
									   color-stop(0.72, rgb(73,125,189)),
									   color-stop(0.86, rgb(28,58,148)));
}

</style>
 
<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <a class="nav-link" href="index.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-tachometer-alt"></i>
          </div> Dashboard
        </a>
        
		<div class="sb-sidenav-menu-heading">Entry Zone</div>  
		<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCreate" aria-expanded="false" aria-controls="collapseCreate">
			<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
			Create
			<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
		</a>
		<div class="collapse" id="collapseCreate" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
			<nav class="sb-sidenav-menu-nested nav">
				<a class="nav-link" href="./addblog.php"> Add Blog</a>
				<a class="nav-link" href="./addnotification.php">Add Notification</a>
				<a class="nav-link" href="./addslider.php">Add Slider</a>
				<a class="nav-link" href="./addgallery.php">Add Gallery</a>
				<a class="nav-link" href="./addteacher.php">Add Teacher</a>	
				<a class="nav-link" href="./addreview.php">Add Review</a>
			</nav>
		</div>
		
		<div class="sb-sidenav-menu-heading">List Zone</div>    
		<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseList" aria-expanded="false" aria-controls="collapseList">
			<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
			Listing
			<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
		</a>
		<div class="collapse" id="collapseList" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
			<nav class="sb-sidenav-menu-nested nav">
				<a class="nav-link" href="./bloglist.php">Blog List</a>
				<a class="nav-link" href="./notificationlist.php">Notification List</a>
				<a class="nav-link" href="./sliderlist.php">Slider Photo List</a>
				<a class="nav-link" href="./gallerylist.php">Gallery List</a>
				<a class="nav-link" href="./teacherlist.php"> Teacher List</a>
				<a class="nav-link" href="./reviewlist.php"> Review List</a>
			</nav>
		</div>
        <div class="sb-sidenav-menu-heading">Page Detail</div>  
		<a class="nav-link" href="./main.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-table"></i>
          </div> Main Icon
        </a>
		<a class="nav-link" href="./feedback.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-table"></i>
          </div> Feedback 
        </a>
		<a class="nav-link" href="./contact.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-table"></i>
          </div> Contact
        </a>
		<a class="nav-link" href="./login_user.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-table"></i>
          </div> Login User
        </a>
		
		
		
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div> Guest
    </div>
  </nav>
</div>