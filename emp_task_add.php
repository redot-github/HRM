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
 
        
      $insert = "Insert emp_tasks(to_emp, client, project_name, team_name, lead_emp_code, lead_name, priority, task_name, due_date, description, task_points, status, created_on) VALUES 
                                 ('$file_assign_emp','$file_client','$file_project','$file_team_name','$file_lead_code','$file_lead_name','$file_priority','$file_task_name','$file_due_date','$file_description','$file_task_points','$file_status',Now())";
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

