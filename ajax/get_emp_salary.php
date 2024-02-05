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
if(isset($_POST['e_id'])) {
	//$sql = "select * from `states` where `country_id`=".mysqli_real_escape_string($con, $_POST['c_id']);
	
	$sql = "SELECT distinct salary_amount FROM  
   emp_salary WHERE emp_code = '".mysqli_real_escape_string($db, $_POST['e_id'])."'";
	$res = mysqli_query($db, $sql);
	echo $sql;
	if(($res->num_rows) > 0) {
		while($row = mysqli_fetch_object($res)) {
			echo "<option value='".$row->salary_amount."'>".$row->salary_amount."</option>";
		}
	}
	else {
	echo "<option value=''>No Date Found</option>";
}
}

 $p = mysqli_real_escape_string($_POST['emp_code']); // should be doing this
    $result = mysqli_query($db,"SELECT salary_amount FROM emp_salary WHERE emp_code= '".$p."'");
    $array = mysqli_fetch_array($result);
    echo json_encode($array);
?>
