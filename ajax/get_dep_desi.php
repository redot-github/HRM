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
	
	$sql = "SELECT distinct designation FROM  
    designation  WHERE department_name = '".mysqli_real_escape_string($db, $_POST['d_id'])."'";
	$res = mysqli_query($db, $sql);
	echo $sql;
	if(($res->num_rows) > 0) {
		echo "<option value=''>Select Designation</option>";
		while($row = mysqli_fetch_object($res)) {
			echo "<option value='".$row->designation."'>".$row->designation."</option>";
		}
	}
	else {
	echo "<option value=''>No Date Found</option>";
}
}

?>
