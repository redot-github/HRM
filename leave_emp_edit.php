<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_leave_id = mysqli_real_escape_string($db, $_POST["lea_id"]);
 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_leave_type = mysqli_real_escape_string($db, $_POST["leave_type"]);
 $file_from_date = mysqli_real_escape_string($db, $_POST["from_date"]);
 $file_to_date = mysqli_real_escape_string($db, $_POST["to_date"]);
 $file_days = mysqli_real_escape_string($db, $_POST["days"]);

 $file_remain_days = mysqli_real_escape_string($db, $_POST["remain_days"]);
 $file_reason = mysqli_real_escape_string($db, $_POST["reason"]);
            // Insert image file name into database
            
            $emp_leave = "SELECT casual_leave, medical_leave from emp_leave_status Where emp_code='$file_emp_code'";
    $res_emp_leave = mysqli_query($db,$emp_leave);
    $row_emp_leave = $res_emp_leave->fetch_assoc();
 
   switch ($file_leave_type) {
     case "Casual Leave":  
    if($row_emp_leave['casual_leave'] < $file_days){
		echo "<strong style='color:red;'>Casual Leave Not Available</strong>";
	}
	if($row_emp_leave['casual_leave'] >= $file_days){
		 $update1 = $db->query("UPDATE emp_leaves SET leave_type='$file_leave_type',leave_from='$file_from_date',leave_to='$file_to_date',days='$file_days',remaining_days='$file_remain_days',reason='$file_reason' WHERE id='$file_leave_id' AND emp_code ='$file_emp_code'");
            
             if($update1){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Leave </strong> has been updated successfully.";
            } else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 
	}
    break;
    case "Medical Leave":
    if($row_emp_leave['medical_leave'] < $file_days) {
		echo "<strong style='color:red;'>Medical Leave Not Available</strong>";
	}
	if($row_emp_leave['medical_leave'] >= $file_days) {
		$update1 = $db->query("UPDATE emp_leaves SET leave_type='$file_leave_type',leave_from='$file_from_date',leave_to='$file_to_date',days='$file_days',remaining_days='$file_remain_days',reason='$file_reason' WHERE id='$file_leave_id' AND emp_code ='$file_emp_code'");
            
             if($update1){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Leave </strong> has been updated successfully.";
            } else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 
	}
    break;    
    default:
            $update1 = $db->query("UPDATE emp_leaves SET leave_type='$file_leave_type',leave_from='$file_from_date',leave_to='$file_to_date',days='$file_days',remaining_days='$file_remain_days',reason='$file_reason' WHERE id='$file_leave_id' AND emp_code ='$file_emp_code'");
            
             if($update1){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Leave </strong> has been updated successfully.";
            } else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
echo $statusMsg;
//}

?>				   

