<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_data_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_project = mysqli_real_escape_string($db, $_POST["project"]);
 $file_client = mysqli_real_escape_string($db, $_POST["client"]);
 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 $file_team_name = mysqli_real_escape_string($db, $_POST["team_name"]);
 
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM teams_lead WHERE lead_emp_code1='$file_emp_id' AND department='$file_department' AND project_name='$file_project' AND client='$file_client' AND team_name='$file_team_name'");
            $update2 = $db->query("UPDATE manage_emp SET lead_emp_code='' WHERE lead_emp_code ='$file_emp_id'");
            
             if($update1 && $update2){				 
                echo "<strong style='color:red;'>".ucwords($file_emp_id). " </strong> has been Delete successfully.";
                echo "<script>setTimeout(\"location.href = 'leads.php';\",1000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

