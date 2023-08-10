<?php

$conn =mysqli_connect("localhost","root","","snsy_inter_college") or die("Connection Failed");

$limit_per_page =9;
$page="";
if(isset($_POST["page_no"])){
    $page =$_POST["page_no"];
}else{
    $page =1;
}
$offset =($page -1)*$limit_per_page;


$sql= "select * from gallery LIMIT {$offset},{$limit_per_page}";

$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
$output ="";
if(mysqli_num_rows($result) > 0){
    $output .='    <div class="row mt_35">';
    while($row = mysqli_fetch_assoc($result)){
        
    $output .="<div class='col-xl-4 col-md-6 wow fadeInUp' data-wow-duration='1s'>
                    <div class='tf__single_blog'>
                        <div class='tf__single_blog_img'>
                            <img src='{$row["photo"]}' alt='blog' class='img-fluid w-100'>
                        </div>
                    </div>
                </div>";
}
            $output .="</div>";
$sql_total ="select * from gallery";
$record = mysqli_query($conn,$sql_total) or die("Query Unsuccessful.");
$total_record = mysqli_num_rows($record);
$total_pages = ceil($total_record/$limit_per_page);

$output .='<div class="tf__pagination mt_60">';

    $output .='
    <div class="row">
        <div class="col-12">
            <nav aria-label="Page navigation example">

            <ul class="pagination" id="pagination">
                    ';
                    for($i=1;$i<=$total_pages;$i++){
        $output .="<li class='page-item'><a class='page-link active' id='{$i}' >{$i}</a></li>";
                    }        
        $output .='</ul>
            </nav>
        </div>
    </div>
</div>';


echo $output;
}
else{
    echo"<h2>NO record Found</h2>";
}

?>