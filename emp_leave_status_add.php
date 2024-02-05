<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_emp_name = mysqli_real_escape_string($db, $_POST["emp_name"]);
 $file_casual_leave = mysqli_real_escape_string($db, $_POST["casual_leave"]);
 $file_medical_leave = mysqli_real_escape_string($db, $_POST["medical_leave"]);
 
        $query = $db->query("SELECT id FROM emp_leave_status WHERE emp_code='$file_emp_code'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
			
            $insert = $db->query("Insert INTO emp_leave_status(emp_code, emp_name, casual_leave, medical_leave, upload_on) VALUES 
            ('$file_emp_code','$file_emp_name','$file_casual_leave','$file_medical_leave',Now())");
		   
            
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_name). " - ".ucwords($file_emp_code). "</strong> Leave Status has been uploaded successfully.";
                echo "<script>setTimeout(\"location.href = 'emp-leave-status.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

