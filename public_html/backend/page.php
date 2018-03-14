<?php
/// lets show the list of pages

$sql='select * from page';

// 1. connect to database
$con=mysqli_connect('localhost','root','','collegesite');

// get the data
$dbData=mysqli_query($con,$sql);
$data=array();
while($row=mysqli_fetch_assoc($dbData)){
	$data[]=$row;
}

require_once '../../html/backend/page.php';