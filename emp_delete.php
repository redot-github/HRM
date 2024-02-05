<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_data_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
 
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM manage_emp WHERE id='$file_data_id' AND emp_code='$file_emp_id'");
            $update2 = $db->query("DELETE FROM user_login WHERE username = '$file_emp_id'");
            $update3 = $db->query("DELETE FROM manage_emp_pass WHERE emp_code= '$file_emp_id'");
            $update4 = $db->query("DELETE FROM manage_emp_emergency WHERE emp_code= '$file_emp_id'");
            $update5 = $db->query("DELETE FROM manage_emp_bank WHERE emp_code= '$file_emp_id'");
            $update6 = $db->query("DELETE FROM manage_emp_education WHERE emp_code= '$file_emp_id'");
            $update7 = $db->query("DELETE FROM manage_emp_experince WHERE emp_code= '$file_emp_id'");
            
             if($update1 && $update2 && $update3 && $update4 && $update5 && $update6 && $update7){				 
                echo "<strong style='color:red;'>".ucwords($file_emp_id). " </strong> has been Delete successfully.";
                echo "<script>setTimeout(\"location.href = 'employees.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

