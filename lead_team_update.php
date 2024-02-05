<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_project_name = mysqli_real_escape_string($db, $_POST["project_name"]);
 $file_client = mysqli_real_escape_string($db, $_POST["client"]);
 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 $file_team_name = mysqli_real_escape_string($db, $_POST["team_name"]);
 $file_team_lead = mysqli_real_escape_string($db, $_POST["team_lead"]);
 $file_team_members = $_POST["team_members"]; 
 $file_description = mysqli_real_escape_string($db, $_POST["description"]); 
 $file_status = mysqli_real_escape_string($db, $_POST["status"]); 
 
 foreach($file_team_members as $members)
    {
        //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
      $insert = "Insert teams_lead(department, project_name, client, team_name, lead_emp_code1, team_members, description,status) VALUES ('$file_department','$file_project_name','$file_client','$file_team_name','$file_team_lead','$members','$file_description','$file_status')";
      $query_run1 = mysqli_query($db, $insert);
      $update = "UPDATE manage_emp SET lead_emp_code='$file_team_lead' WHERE emp_code ='$members'";
      $query_run2 = mysqli_query($db, $update);
    }       		
             if($query_run1 && $query_run2){	
                echo "<strong style='color:green;'>Project - ".ucwords($file_project_name). " Team Name -  ".ucwords($file_team_name). " Lead - ".ucwords($file_team_lead). "</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'leads.php;\",1000);</script>";
                
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

