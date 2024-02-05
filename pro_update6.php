<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_company_name1 = mysqli_real_escape_string($db, $_POST["company_name1"]);
 $file_location1 = mysqli_real_escape_string($db, $_POST["location1"]);
 $file_job_position1 = mysqli_real_escape_string($db, $_POST["job_position1"]); 
 $file_periodfrom1 = mysqli_real_escape_string($db, $_POST["periodfrom1"]);
 $file_periodto1 = mysqli_real_escape_string($db, $_POST["periodto1"]);
 $file_company_name2 = mysqli_real_escape_string($db, $_POST["company_name2"]);
 $file_location2 = mysqli_real_escape_string($db, $_POST["location2"]);
 $file_job_position2 = mysqli_real_escape_string($db, $_POST["job_position2"]); 
 $file_periodfrom2 = mysqli_real_escape_string($db, $_POST["periodfrom2"]);
 $file_periodto2 = mysqli_real_escape_string($db, $_POST["periodto2"]);   
 $file_company_name3 = mysqli_real_escape_string($db, $_POST["company_name3"]);
 $file_location3 = mysqli_real_escape_string($db, $_POST["location3"]);
 $file_job_position3 = mysqli_real_escape_string($db, $_POST["job_position3"]); 
 $file_periodfrom3= mysqli_real_escape_string($db, $_POST["periodfrom3"]);
 $file_periodto3 = mysqli_real_escape_string($db, $_POST["periodto3"]);
  
 
     
            // Insert image file name into database
            //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
            $update = $db->query("UPDATE manage_emp_experince SET company_name1='$file_company_name1',location1='$file_location1',job_position1='$file_job_position1',periodfrom1='$file_periodfrom1',periodto1='$file_periodto1',company_name2='$file_company_name2',location2='$file_location2',job_position2='$file_job_position2',periodfrom2='$file_periodfrom2',periodto2='$file_periodto2',company_name3='$file_company_name3',location3='$file_location3',job_position3='$file_job_position3',periodfrom3='$file_periodfrom3',periodto3='$file_periodto3' WHERE emp_code = '$file_emp_code'");
             
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Experince Informations </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'profile-details.php?id=$file_emp_code';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

