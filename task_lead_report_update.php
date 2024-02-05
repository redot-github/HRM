<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';
 
  $file_team_name = mysqli_real_escape_string($db, $_POST["team_name"]);
 $file_task_name = mysqli_real_escape_string($db, $_POST["task_name"]);
 $file_task_id = mysqli_real_escape_string($db, $_POST["task_id"]);
 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_task_points_given = mysqli_real_escape_string($db, $_POST["task_points_given"]); 
 
        
      $update = "UPDATE emp_tasks SET task_points_approval='$file_task_points_given',emp_notify = '0' WHERE lead_emp_code = '$file_emp_code' AND id ='$file_task_id'";
      $query_run = mysqli_query($db, $update);
      $task_sql = $db->query("select * from emp_tasks WHERE lead_emp_code = '$file_emp_code' AND id ='$file_task_id'");
      $task_row = $task_sql->fetch_assoc();
      $emp_code = $task_row["to_emp"];                                
    $task_client = $task_row["client"]; 
    $task_project_name = $task_row["project_name"]; 
    $task_team_name = $task_row["team_name"]; 
    $task_lead_emp_code = $task_row["lead_emp_code"]; 
    $task_lead_name = $task_row["lead_name"]; 
    $task_priority = $task_row["priority"]; 
    $task_task_name = $task_row["task_name"]; 
    $task_due_date = $task_row["due_date"]; 
    $task_description = $task_row["description"]; 
    $task_task_points = $task_row["task_points"];
    $task_task_points_approval = $task_row["task_points_approval"]; 
    $task_report_status = $task_row["report_status"]; 
    if ($task_report_status == "Completed"){
    //$task_points_sql = $db->query("select * from emp_task_points WHERE lead_emp_code = '$file_emp_code' AND id ='$file_task_id'");
      //$task_points_row = $task_points_sql->fetch_assoc();
      
      $insert = $db->query("Insert into emp_task_points (task_id, client, project_name, team_name, lead_emp_code, lead_name, priority, task_name, emp_code, task_points, task_points_approval, report_status) VALUES ('$file_task_id','$task_client','$task_project_name','$file_team_name','$task_lead_emp_code','$task_lead_name','$task_priority','$file_task_name','$emp_code','$task_task_points','$task_task_points_approval','$task_report_status')");
      
      }
       
             if($query_run){	
                echo "Team Name - <strong style='color:green;'>".ucwords($file_team_name). "</strong> Task Name -  <strong style='color:green;'>".ucwords($file_task_name). "</strong> - <strong style='color:red;'>".$file_task_points_given." Points</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'task-details.php?id=$file_task_id&&name=$file_task_name;\",2000);</script>";
                
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

