<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_ti_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_project = mysqli_real_escape_string($db, $_POST["project"]);
 $file_deadline = mysqli_real_escape_string($db, $_POST["deadline"]);
 $file_total_hours = mysqli_real_escape_string($db, $_POST["total_hours"]);
 $file_remain_hours = mysqli_real_escape_string($db, $_POST["remain_hours"]);
 $file_date = mysqli_real_escape_string($db, $_POST["date"]);
 $file_hours = mysqli_real_escape_string($db, $_POST["hours"]);
 $file_desc = mysqli_real_escape_string($db, $_POST["desc"]);
 
        
             $update = $db->query("UPDATE timesheet SET project='$file_project',deadline='$file_deadline',total_hours='$file_total_hours',remaining_hours='$file_remain_hours',date='$file_date',hours='$file_hours',description='$file_desc' WHERE emp_code = '$file_emp_code' AND id='$file_ti_id' ");
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " - ".ucwords($file_project). "</strong> has been updated successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

