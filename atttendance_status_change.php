<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_data_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_date = mysqli_real_escape_string($db, $_POST["date"]);
 $file_attendance_status = mysqli_real_escape_string($db, $_POST["attendance_status"]);
            // Insert image file name into database
            $update1 = $db->query("UPDATE attendance SET attendance='$file_attendance_status' WHERE id='$file_data_id' And emp_code='$file_emp_id' And date='$file_date'");
            
            
             if($update1){				 
                echo "<strong style='color:green;'>".ucwords($file_data_id). " - ".ucwords($file_emp_id). " Attendance status Changed </strong>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

