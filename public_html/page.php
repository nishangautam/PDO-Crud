<?php
$pageId=0;
if(isset($_GET['pageId'])){
	$pageId=$_GET['pageId'];	
}

// lets get data from database
// server address, user, password, databasename
$con=mysqli_connect("collegesite.com","root","","collegesite");
$sql="select * from page where page_id=".$pageId;
$dbData=mysqli_query($con,$sql);

$data=array();
while($row=mysqli_fetch_assoc($dbData)){
	$data[]=$row;
}
$pageData=$data[0];

require_once '../html/page.php';