<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_lea_id = mysqli_real_escape_string($db, $_POST["lea_id"]);
 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_emp_name = mysqli_real_escape_string($db, $_POST["emp_name"]);
 $file_casual_leave = mysqli_real_escape_string($db, $_POST["casual_leave"]);
 $file_medical_leave = mysqli_real_escape_string($db, $_POST["medical_leave"]);
 
        
			
            $insert = $db->query("UPDATE emp_leave_status SET casual_leave ='$file_casual_leave', medical_leave='$file_medical_leave', upload_on = Now()  WHERE emp_code = '$file_emp_code' AND id = '$file_lea_id'");
		   
            
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_name). " - ".ucwords($file_emp_code). "</strong> Leave Status has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'emp-leave-status.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

