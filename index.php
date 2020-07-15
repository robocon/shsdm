<?php 
include 'bootstrap.php';
include 'header.php';


$action = input_post('action');
$page = input('page');
if(empty($page)){

	// $db = Mysql::load();

	// echo "<h1>แสดงข้อมูล หน้าหลัก</h1>";
	include 'patient_index.php';

}elseif ($page=='patient_form') { 

	// if($action === 'search'){
	
	// }
	// include 'patient_index.php';
	// dump($_POST);
	include 'patient_form.php';

}
include 'footer.php';