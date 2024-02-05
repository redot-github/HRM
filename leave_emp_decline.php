<?php
error_reporting(E_ERROR | E_PARSE);
             session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }       //if(isset($_POST['submit'])){
  
require("inc/config.php");
require("user_role.php");
$statusMsg = '';

 $file_data_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_lead_emp_id = mysqli_real_escape_string($db, $_POST["lead_emp_id"]);
  $file_leave_type = mysqli_real_escape_string($db, $_POST["leave_type"]);
  $file_no_of_days = mysqli_real_escape_string($db, $_POST["days"]);
  $file_comment = mysqli_real_escape_string($db, $_POST["comment"]);
    
 /*$emp_det = "SELECT salary_amount,gross_salary from emp_salary Where emp_code='$file_emp_id'";
    $res = mysqli_query($db,$emp_det);
    $emp_row = $res->fetch_assoc();
    $emp_gross_salary = $emp_row["gross_salary"];                                
    $emp_salary_amount = $emp_row["salary_amount"];      
    $daily_salary = $emp_salary_amount / 30;*/
           
           
            require("user_role.php");
            if($role_id == 1){
            $update1 = $db->query("UPDATE emp_leaves SET status='Declined',decline_comment='$file_comment',approve_by='Admin'  WHERE id='$file_data_id' And emp_code='$file_emp_id'");
            /*if($file_leave_type  == 'Casual Leave'){
            $insert2 = $db->query("UPDATE emp_leave_status SET casual_leave_taken = '$file_no_of_days', casual_leave_balance = casual_leave - '$file_no_of_days', casual_leave = casual_leave - '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
		   } else if($file_leave_type  == 'Medical Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET medical_leave_taken = '$file_no_of_days', medical_leave_balance = medical_leave - '$file_no_of_days', medical_leave = medical_leave - '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'WFH') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET WFH = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'LOP') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET lop = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Compentary Off') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET compentary_off = '$file_no_of_days',casual_leave = casual_leave + '$file_no_of_days'  WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Pandemic Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET pandemic_leave = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Paternity Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET paternity_leave = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } 
             $emp_lop = "SELECT lop from emp_leave_status Where emp_code='$file_emp_id'";
    $res_lop = mysqli_query($db,$emp_lop);
    $emp_row_lop = $res_lop->fetch_assoc();
		 $cl_lop = $emp_row_lop['lop'];
		 $de_cl = (float)$daily_salary * (float)$cl_lop;		 
		 
	 
		 //echo "<h5>Casual LOP</h5>".round($de_cl);
		 //echo "<h5>Medical LOP</h5>".round($de_ml);
		 $dec_lea= $de_cl + $de_ml;
		 $lop = round($dec_lea);
         $ne_salary = $emp_gross_salary - $dec_lea;
         $net_salary = round($ne_salary);
		 //echo "<h5>Net salary</h5>".round($net_salary);
		 $update1 = $db->query("UPDATE emp_salary SET LOP='$lop',net_salary='$net_salary' WHERE emp_code='$file_emp_id'");
			*/			
		   } else {
			   $update1 = $db->query("UPDATE emp_leaves SET status='Declined',decline_comment='$file_comment',approve_by='$file_lead_emp_id'  WHERE id='$file_data_id' And emp_code='$file_emp_id'");
			   /* if($file_leave_type  == 'Casual Leave'){
            $insert2 = $db->query("UPDATE emp_leave_status SET casual_leave_taken = '$file_no_of_days', casual_leave_balance = casual_leave - '$file_no_of_days', casual_leave = casual_leave - '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
		   } else if($file_leave_type  == 'Medical Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET medical_leave_taken = '$file_no_of_days',medical_leave_balance = medical_leave - '$file_no_of_days', medical_leave = medical_leave - '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'WFH') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET WFH = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'LOP') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET lop = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Compentary Off') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET compentary_off = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Pandemic Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET pandemic_leave = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Paternity Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET paternity_leave = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            }
			    $emp_lop = "SELECT lop from emp_leave_status Where emp_code='$file_emp_id'";
    $res_lop = mysqli_query($db,$emp_lop);
    $emp_row_lop = $res_lop->fetch_assoc();
		 $cl_lop = $emp_row_lop['casual_leave'];
		 $de_cl = (float)$daily_salary * (float)$cl_lop;		 
		  
		 //echo "<h5>Casual LOP</h5>".round($de_cl);
		 //echo "<h5>Medical LOP</h5>".round($de_ml);
		 $dec_lea= $de_cl + $de_ml;
		 $lop = round($dec_lea);
         $ne_salary = $emp_gross_salary - $dec_lea;
         $net_salary = round($ne_salary);
		 //echo "<h5>Net salary</h5>".round($net_salary);
		 $update1 = $db->query("UPDATE emp_salary SET LOP='$lop',net_salary='$net_salary' WHERE emp_code='$file_emp_id'");
				*/		
            }
             if($update1){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_id). " Leave Declined </strong>";
                //echo "<script>setTimeout(\"location.href = 'leaves.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

         require("hr_approve_role.php");
            if($hr_approver == 1){
            $update1 = "UPDATE emp_leaves SET status='Declined',approve_by='$hr_emp_code'  WHERE id='$file_data_id' And emp_code='$file_emp_id'";
            $res = mysqli_query($db,$update1);
            //echo $update3;
            /*if($file_leave_type  == 'Casual Leave'){
            $insert2 = $db->query("UPDATE emp_leave_status SET casual_leave_taken = '$file_no_of_days', casual_leave_balance = casual_leave - '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
		   } else if($file_leave_type  == 'Medical Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET medical_leave_taken = '$file_no_of_days', medical_leave_balance = medical_leave - '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'WFH') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET WFH = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'LOP') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET lop = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Compentary Off') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET compentary_off = '$file_no_of_days', casual_leave_balance = casual_leave_balance + '$file_no_of_days'  WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Pandemic Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET pandemic_leave = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } else if($file_leave_type  == 'Paternity Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET paternity_leave = '$file_no_of_days' WHERE 
            emp_code = '$file_emp_id'");
            } 
             $emp_lop = "SELECT lop from emp_leave_status Where emp_code='$file_emp_id'";
    $res_lop = mysqli_query($db,$emp_lop);
    $emp_row_lop = $res_lop->fetch_assoc();
		 $cl_lop = $emp_row_lop['lop'];
		 $de_cl = (float)$daily_salary * (float)$cl_lop;		 
		 
	 
		 //echo "<h5>Casual LOP</h5>".round($de_cl);
		 //echo "<h5>Medical LOP</h5>".round($de_ml);
		 $dec_lea= $de_cl + $de_ml;
		 $lop = round($dec_lea);
         $ne_salary = $emp_gross_salary - $dec_lea;
         $net_salary = round($ne_salary);
		 //echo "<h5>Net salary</h5>".round($net_salary);
		 $update1 = $db->query("UPDATE emp_salary SET LOP='$lop',net_salary='$net_salary' WHERE emp_code='$file_emp_id'");
		*/				
		   }


// Display status message
//echo $statusMsg;
//}

?>				   

