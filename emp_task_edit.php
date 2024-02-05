<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_client = mysqli_real_escape_string($db, $_POST["client"]);
 $file_project = mysqli_real_escape_string($db, $_POST["project"]);
 $file_team_name = mysqli_real_escape_string($db, $_POST["team_name"]);
 $file_assign_emp = mysqli_real_escape_string($db, $_POST["assign_emp"]);
 $file_priority = mysqli_real_escape_string($db, $_POST["priority"]);
 $file_due_date = mysqli_real_escape_string($db, $_POST["due_date"]);
 $file_task_name = mysqli_real_escape_string($db, $_POST["task_name"]);
 $file_lead_code = mysqli_real_escape_string($db, $_POST["lead_code"]);
 $file_lead_name =  mysqli_real_escape_string($db, $_POST["lead_name"]);
 $file_description = mysqli_real_escape_string($db, $_POST["desc"]); 
 $file_task_points = mysqli_real_escape_string($db, $_POST["task_points"]); 
 $file_status = mysqli_real_escape_string($db, $_POST["task_status"]); 
 
        
      $insert = "UPDATE emp_tasks SET to_emp = '$file_assign_emp', client = '$file_client', project_name='$file_project', team_name='$file_team_name', priority='$file_priority', task_name='$file_task_name', due_date='$file_due_date', description='$file_description', task_points='$file_task_points', status='$file_status', created_on=Now() WHERE  
                                 lead_emp_code = '$file_lead_code' And client = '$file_client' AND project_name='$file_project' AND team_name='$file_team_name' AND to_emp = '$file_assign_emp'";
      $query_run = mysqli_query($db, $insert);
      
             if($query_run){	
                echo "Team Name - <strong style='color:green;'>".ucwords($file_team_name). "</strong> Task Name -  <strong style='color:green;'>".ucwords($file_task_name). "</strong> Assign Person - <strong style='color:green;'>".ucwords($file_assign_emp). "</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'tasks.php;\",2000);</script>";
                
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

