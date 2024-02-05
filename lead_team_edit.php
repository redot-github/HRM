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
 
    $insert1 = "UPDATE teams_lead SET department='$file_department', team_name='$file_team_name', lead_emp_code1='$file_team_lead', description='$file_description',status='$file_status' WHERE department='$file_department' AND project_name='$file_project_name' AND client='$file_client' AND team_name='$file_team_name' AND lead_emp_code1='$file_team_lead'";
      $query_run1 = mysqli_query($db, $insert1);
 
 
  if($query_run1){	
                echo "<strong style='color:green;'>Project - ".ucwords($file_project_name). " Team Name -  ".ucwords($file_team_name). " Lead - ".ucwords($file_team_lead). "</strong> has been updated successfully.";
                //echo "<script>setTimeout(\"location.href = 'leads.php';\",1000);</script>";
                
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 
 
 /*$team_arr = array();
 
  foreach($_POST["team_members"] as $members => $value)
    {
		//$team_arr[]=$members['team_members'];
		//$team_arr = $value."\n";
		//$team_arr = $_POST['team_members'][$value];
	
	 	
		$check = $db->query("SELECT team_members FROM teams_lead WHERE department='$file_department' AND team_name='$file_team_name' AND lead_emp_code1='$file_team_lead'");
      //$team_members = $check->fetch_assoc();
      if($check->num_rows>0){
       while($team_row = $check->fetch_assoc()){
		  
		   if($value == $team_row['team_members']){
		    $insert1 = "UPDATE teams_lead SET department='$file_department', team_name='$file_team_name', lead_emp_code1='$file_team_lead', team_members='$value', description='$file_description',status='$file_status' WHERE department='$file_department' AND project_name='$file_project_name' AND client='$file_client' AND team_name='$file_team_name' AND lead_emp_code1='$file_team_lead' AND team_members='$value'";
      $query_run1 = mysqli_query($db, $insert1);
	       } else {
			   $insert2 = "Insert teams_lead(department, project_name, client, team_name, lead_emp_code1, team_members, description,status) VALUES ('$file_department','$file_project_name','$file_client','$file_team_name','$file_team_lead','$value','$file_description','$file_status')";
      $query_run2 = mysqli_query($db, $insert2);  
			  
			   }
		   }
		  } 
	}*
  
 
 /*foreach($file_team_members as $members)
    {
        //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
      $insert3 = "UPDATE teams_lead SET department='$file_department', team_name='$file_team_name', lead_emp_code1='$file_team_lead', team_members='$members', description='$file_description',status='$file_status' WHERE department='$file_department' AND project_name='$file_project_name' AND client='$file_client' AND team_name='$file_team_name' AND lead_emp_code1='$file_team_lead' AND team_members='$members'";
      $query_run3 = mysqli_query($db, $insert3);
     
      if($members != $team_row['team_members']){
		 
      //echo $query_run3;
		  //}
	  //}
	  }
      
      $update = "UPDATE manage_emp SET lead_emp_code='$file_team_lead' WHERE emp_code ='$members'";
      $query_run2 = mysqli_query($db, $update);
      //echo $insert;
    }*/       		
            




// Display status message
//echo $statusMsg;
//}

?>				   

