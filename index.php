<?php 
include 'bootstrap.php';
include 'header.php';


$action = input_post('action');
$page = input('page');
if(empty($page)){

	include 'patient_index.php';

}elseif ($page=='patient_form') { 

	include 'patient_form.php';

}elseif ($page=='patient_form2') { 

	include 'patient_form2.php';

}elseif ($page=='patient_form3') { 

	include 'patient_form3.php';

}
include 'footer.php';