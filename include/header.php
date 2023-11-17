<style>
	@import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Roboto:wght@500&display=swap');
        ::-webkit-scrollbar-track
            {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
            }

        ::-webkit-scrollbar
            {
            width: 10px;
            background-color: #014da1;
            }

        ::-webkit-scrollbar-thumb
            {
            background-color: #0ae;
            border-radius: 15px;
            background-image: -webkit-gradient(linear, 0 0, 0 100%,
                                color-stop(.5, rgba(255, 255, 255, .2)),
                                color-stop(.5, transparent), to(transparent));
            }
    </style>
<nav class="navbar navbar-expand-lg tf__main_menu">
	<div class="container">
		<a class="navbar-brand" href="index.php">
			<img style="margin-left:-80px; max-width:60%;" src="images/logo 1.png" alt="EduFax" class="img-fluid">
			<span style="margin-left:-8px; font-weight:bold;font-family: 'Roboto', sans-serif; color:black;" >S.N.S.Y INTER COLLEGE, Rambagh,Purnea </span>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="far fa-bars menu_bar_icon"></i>
			<i class="far fa-times menu_close_icon"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About College</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gallery.php">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="blog.php">Blogs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="notification.php">Notification</a>
				</li>
				 
				
			</ul>
		</div>
	</div>
</nav>
 <div class="menu_search">
        <form>
            <input type="text" placeholder="Search">
            <button class="tf__common_btn" type="submit"><i class="far fa-search"></i> Search</button>
            <span class="close_search"><i class="far fa-times"></i></span>
        </form>
    </div>