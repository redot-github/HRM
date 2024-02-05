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
	
	$sql = "SELECT distinct lead_emp_code1 FROM teams_lead WHERE team_name = '".mysqli_real_escape_string($db, $_POST['t_id'])."'";
	$res = mysqli_query($db, $sql);
	echo $sql;
	if(($res->num_rows) > 0) {
		//echo "<option value=''>Select Team Lead</option>";
		while($row = mysqli_fetch_object($res)) {
			$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '".$row->lead_emp_code1."'";
								$pro_results = mysqli_query($db, $prodcatsql1);
								$pro_data = $pro_results->fetch_assoc();
			echo "<option value='".$row->lead_emp_code1."' selected>".$pro_data['name']." ".$pro_data['last_name']." (".$row->lead_emp_code1.")</option>";
		}
	}
	else {
	echo "<option value=''>No Date Found</option>";
}
}

?>
