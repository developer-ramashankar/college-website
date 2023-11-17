<?php

$conn =mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed");

$limit_per_page =8;
$page="";
if(isset($_POST["page_no"])){
    $page =$_POST["page_no"];
}else{
    $page =0;
}


$sql= "select * from notification  LIMIT {$page},{$limit_per_page}";
$s=1;
$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

if(mysqli_num_rows($query) > 0){
	$output ="";
    while($row = mysqli_fetch_assoc($query)){
        $last_id=$row["id"];
    $output .="	<div class='notice'>
		<p><span style='background-color:royalblue;color:white;margin-right:10px;' class='badge badge-secondary'>{$s}</span> {$row["title"]}</p>
		<button id='pdf' onclick='window.location.href='{$row["pdf"]}'' class='btn btn-danger btn-sm'>Download</button>
		</div>";
		$s++;
}
		 $output .="<div id='pagination' style='display: flex;align-items: center;justify-content: center;' class='pt_15 pb_50'>
			<button  class='btn btn-warning' id='ajaxbtn' data-id='{$last_id}'>Load More...</button>
		</div>";
echo $output;
}
else{
    echo"";
}

?>
 