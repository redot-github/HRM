<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_emp_name = mysqli_real_escape_string($db, $_POST["emp_name"]);
 $file_lead_emp_code = mysqli_real_escape_string($db, $_POST["lead_emp_code"]);
 $file_leave_type = mysqli_real_escape_string($db, $_POST["leave_type"]);
 $file_leave_from = mysqli_real_escape_string($db, $_POST["leave_from"]);
 $file_leave_to = mysqli_real_escape_string($db, $_POST["leave_to"]);
 $file_no_of_days = mysqli_real_escape_string($db, $_POST["no_of_days"]);
 $file_remain_days = mysqli_real_escape_string($db, $_POST["remain_days"]);
 $file_reasons = mysqli_real_escape_string($db, $_POST["reasons"]);
 
             $emp_leave = "SELECT casual_leave_balance, medical_leave_balance from emp_leave_status Where emp_code='$file_emp_code'";
    $res_emp_leave = mysqli_query($db,$emp_leave);
    $row_emp_leave = $res_emp_leave->fetch_assoc();
   
   switch ($file_leave_type) {
     case "Casual Leave":  
    if($row_emp_leave['casual_leave_balance'] <= $file_no_of_days){
		echo "<strong style='color:red;'>Casual Leave Not Available. Apply as Loss of Pay</strong>";
		echo "<br><strong style='color:green;'>".ucwords($row_emp_leave['casual_leave_balance']). "</strong> Casual Leave Remains.";
	}
    break;
    case "Medical Leave":
    if($row_emp_leave['medical_leave_balance'] <= $file_no_of_days) {
		echo "<strong style='color:red;'>Medical Leave Not Available. Apply as Loss of Pay</strong>";
		echo "<strong style='color:green;'>".ucwords($row_emp_leave['medical_leave_balance']). "</strong> Medical Leave Remains.";
	}
    break;    
    default:
     
        $insert = $db->query("INSERT INTO emp_leaves(emp_code, emp_name, lead_emp_code, leave_type, leave_from, leave_to, days, remaining_days, reason, status, apply_on) VALUES ('$file_emp_code','$file_emp_name','$file_lead_emp_code','$file_leave_type','$file_leave_from','$file_leave_to','$file_no_of_days','$file_remain_days','$file_reasons','Pending',NOW())");
             
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_name). " Apply the Leave </strong> successfully.";
                echo "<script>setTimeout(\"location.href = 'leaves-employee.php';\",1000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

