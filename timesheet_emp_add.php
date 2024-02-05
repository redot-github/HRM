<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_project = mysqli_real_escape_string($db, $_POST["project"]);
 $file_deadline = mysqli_real_escape_string($db, $_POST["deadline"]);
 $file_total_hours = mysqli_real_escape_string($db, $_POST["total_hours"]);
 $file_remaining_hours = mysqli_real_escape_string($db, $_POST["remaining_hours"]);
 $file_date = mysqli_real_escape_string($db, $_POST["date"]);
 $file_hours = mysqli_real_escape_string($db, $_POST["hours"]);
 $file_description = mysqli_real_escape_string($db, $_POST["description"]);
 
        
             $insert = $db->query("INSERT INTO timesheet(emp_code, project, deadline, total_hours, remaining_hours, date, hours, description) VALUES ('$file_emp_code','$file_project','$file_deadline','$file_total_hours','$file_remaining_hours','$file_date','$file_hours','$file_description')");
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " - ".ucwords($file_project). "</strong> has been uploaded successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

