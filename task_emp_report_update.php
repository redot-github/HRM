<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';
 
 $file_team_name = mysqli_real_escape_string($db, $_POST["team_name"]);
 $file_task_name = mysqli_real_escape_string($db, $_POST["task_name"]);
 $file_task_id = mysqli_real_escape_string($db, $_POST["task_id"]);
 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_report_phase = mysqli_real_escape_string($db, $_POST["report_phase"]);
 $file_progress_status = mysqli_real_escape_string($db, $_POST["progress_status"]);
 $file_report_status =  mysqli_real_escape_string($db, $_POST["report_status"]);
 $file_report_description = mysqli_real_escape_string($db, $_POST["report_description"]); 
 
        
      $insert = "UPDATE emp_tasks SET report_phase='$file_report_phase',report_progress_status='$file_progress_status',report_status='$file_report_status',report_description='$file_report_description',lead_notify='0',report_on=Now() WHERE to_emp = '$file_emp_code' AND id ='$file_task_id'";
      $query_run = mysqli_query($db, $insert);
       //echo $query_run;
             if($query_run){	
                echo "Team Name - <strong style='color:green;'>".ucwords($file_team_name). "</strong> Task Name -  <strong style='color:green;'>".ucwords($file_task_name). "</strong> <strong style='color:red;'>Report</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'task-details.php?id=$file_task_id&&name=$file_task_name;\",2000);</script>";
                
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

