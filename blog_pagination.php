<?php
include('./db.php');
$conn =mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed");

$limit_per_page =8;
$page="";
if(isset($_POST["page_no"])){
    $page =$_POST["page_no"];
}else{
    $page =1;
}
$offset =($page -1)*$limit_per_page;


$sql= "select * from add_blog order by id desc LIMIT {$offset},{$limit_per_page}";

$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
$output ="";
if(mysqli_num_rows($result) > 0){
    $output .='    
<div class="row">';
    while($row = mysqli_fetch_assoc($result)){
        
    $output .="
	<div class='col-xl-6 col-lg-6 wow fadeInUp' data-wow-duration='1s'>
		<div class='tf__single_event'>
			<div class='tf__single_event_date'>
				<img src='{$row["photo"]}' alt='event' class='img-fluid w-100'>
					<h2>
						<span>{$row["date"]}</span>
					</h2>
				</div>
				<div class='tf__single_event_text'>
					<h3>{$row["title"]}</h3>
					<ul>
						<li>
							<i class='fal fa-pen'></i> {$row["writer"]}
						</li>
					</ul>
					<p>{$row["detail"]}</p>
					<a href='./blog_details.php?id={$row["id"]}'>Read 
						<i class='far fa-long-arrow-right'></i>
					</a>
				</div>
			</div>
		</div>";
}
            $output .="
	</div>";
$sql_total ="select * from add_blog";
$record = mysqli_query($conn,$sql_total) or die("Query Unsuccessful.");
$total_record = mysqli_num_rows($record);
$total_pages = ceil($total_record/$limit_per_page);

$output .='
	<div class="tf__pagination mt_60">';

    $output .='
    
		<div class="row">
			<div class="col-12">
				<nav aria-label="Page navigation example">
					<ul class="pagination" id="pagination">
                    ';
                    for($i=1;$i<=$total_pages;$i++){
        $output .="
						<li class='page-item'>
							<a class='page-link active' id='{$i}' >{$i}</a>
						</li>";
                    }        
        $output .='
					</ul>
				</nav>
			</div>
		</div>
	</div>';


echo $output;
}
else{
    echo"
	<h2>NO record Found</h2>";
}

?>