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
 //if(isset($_POST['submit'])){
require("inc/config.php");
require("user_role.php");
$statusMsg = '';
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $rowid = $_GET['id'];
    //$rowname = $_GET['name'];
    
    require("user_role.php");
    if($role_id == 2){
    $update = $db->query("UPDATE emp_tasks  SET emp_notify = '1' WHERE id = '".$rowid."'");
     
    }
    if($role_id == 3){
    $update = $db->query("UPDATE emp_tasks SET lead_notify = '1' WHERE id = '".$rowid."'");
     
    }
}
// Display status message
//echo $statusMsg;
//}

?>				   

