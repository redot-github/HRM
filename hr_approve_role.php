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

// Include the database configuration file
require_once('inc/config.php');

// Get images from the database
$id= $_SESSION['username'];
$query = $db->query("SELECT hr_leave_approver,emp_code FROM manage_emp WHERE emp_code = '$id'");


    $row = $query->fetch_assoc();
		$hr_approver = $row["hr_leave_approver"];
		$hr_emp_code = $row["emp_code"];
		 return $hr_approver;
		 return $hr_emp_code;
		  //echo $hr_approver;
		 //echo $hr_emp_code;
         
                


?>   
