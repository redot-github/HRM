<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
require_once('../inc/config.php'); ?>
<?php
$id= $_SESSION['username'];
if(isset($_POST['d_id'])) {
	//$sql = "select * from `states` where `country_id`=".mysqli_real_escape_string($con, $_POST['c_id']);
	
	$sql = "SELECT distinct emp_code, name,last_name, designation FROM  
   manage_emp WHERE designation != 'Admin' AND role='2' AND department = '".mysqli_real_escape_string($db, $_POST['d_id'])."'";
	$res = mysqli_query($db, $sql);
	echo $sql;
	if(($res->num_rows) > 0) {
		echo "<option value=''>Select Employee</option>";
		while($row = mysqli_fetch_object($res)) {
			echo "<option value='".$row->emp_code."' selected>".$row->name."".$row->last_name." (".$row->emp_code.") - ".$row->designation."</option>";
		}
	}
	$sql2 = "SELECT emp_code,name,last_name,designation FROM manage_emp WHERE role != '1'";
	$res2 = mysqli_query($db, $sql2);	
	echo $sql2;
	if(($res2->num_rows) > 0) {
		//echo "<option value=''>Select Employee</option>";
		while($row2 = mysqli_fetch_object($res2)) {
			echo "<option value='".$row2->emp_code."'>".$row2->name." ".$row2->last_name." (".$row2->emp_code.")</option>";
		
		  }
	}
	else {
	echo "<option value=''>No Date Found</option>";
}
}

?>
