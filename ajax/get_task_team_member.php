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
if(isset($_POST['t_id'])) {
	//$sql = "select * from `states` where `country_id`=".mysqli_real_escape_string($con, $_POST['c_id']);
	
	$sql = "SELECT distinct team_members FROM teams_lead WHERE team_name = '".mysqli_real_escape_string($db, $_POST['t_id'])."'";
	$res = mysqli_query($db, $sql);
	//echo $sql;
	if(($res->num_rows) > 0) {
		//echo "<option value=''>Select Employee</option>";
		while($row = mysqli_fetch_object($res)) {
			$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '".$row->team_members."'";
								$pro_results = mysqli_query($db, $prodcatsql1);
								$pro_data = $pro_results->fetch_assoc();
			echo "<option value='".$row->team_members."' selected>".$pro_data['name']." ".$pro_data['last_name']." (".$row->team_members.")</option>";
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
