<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_ug_institution = mysqli_real_escape_string($db, $_POST["ug_institution"]);
 $file_ug_subject = mysqli_real_escape_string($db, $_POST["ug_subject"]); 
 $file_ug_starting_date = mysqli_real_escape_string($db, $_POST["ug_starting_date"]);
 $file_ug_complete_date = mysqli_real_escape_string($db, $_POST["ug_complete_date"]);  
 $file_ug_graduate = mysqli_real_escape_string($db, $_POST["ug_graduate"]);  
 $file_ug_class = mysqli_real_escape_string($db, $_POST["ug_class"]);
  $file_pg_institution = mysqli_real_escape_string($db, $_POST["pg_institution"]);
 $file_pg_subject = mysqli_real_escape_string($db, $_POST["pg_subject"]); 
 $file_pg_starting_date = mysqli_real_escape_string($db, $_POST["pg_starting_date"]);
 $file_pg_complete_date = mysqli_real_escape_string($db, $_POST["pg_complete_date"]);  
 $file_pg_graduate = mysqli_real_escape_string($db, $_POST["pg_graduate"]);  
 $file_pg_class = mysqli_real_escape_string($db, $_POST["pg_class"]);  
 
     
            // Insert image file name into database
            //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
            $update = $db->query("UPDATE manage_emp_education SET ug_graduate='$file_ug_graduate',ug_subject='$file_ug_subject',ug_class='$file_ug_class',ug_institution='$file_ug_institution',ug_starting_date='$file_ug_starting_date',ug_complete_date='$file_ug_complete_date',pg_graduate='$file_pg_graduate',pg_subject='$file_pg_subject',pg_class='$file_pg_class',pg_institution='$file_pg_institution',pg_starting_date='$file_pg_starting_date',pg_complete_date='$file_pg_complete_date' WHERE emp_code = '$file_emp_code'");
             
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Education Informations </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'profile-details.php?id=$file_emp_code';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

