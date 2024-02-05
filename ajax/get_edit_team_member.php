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
	
	$sql = "SELECT distinct team_members FROM  
    teams_lead WHERE lead_emp_code1 = '".mysqli_real_escape_string($db, $_POST['l_id'])."' AND team_name = '".mysqli_real_escape_string($db, $_POST['tn_id'])."'";
	$res = mysqli_query($db, $sql);
	echo $sql;
	if(($res->num_rows) > 0) {
		while($row = mysqli_fetch_object($res)) {
			 $emp_id = $row['teams_members'];
													$prodcatsql1 = "SELECT name,last_name, designation FROM manage_emp WHERE emp_code = '$emp_id'";
								                    $pro_results = mysqli_query($db, $prodcatsql1);
								                    $pro_data = $pro_results->fetch_assoc();
													
			echo "<option value='".$row->team_members."'>".$pro_data->name."".$pro_data->last_name." (".$row->team_members.") - ".$pro_data->designation."</option>";
		}
	}
	else {
	echo "<option value=''>No Date Found</option>";
}
}

?>
