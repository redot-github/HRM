<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_name = mysqli_real_escape_string($db, $_POST["name"]);
 $file_relationship = mysqli_real_escape_string($db, $_POST["relationship"]); 
 $file_phone1 = mysqli_real_escape_string($db, $_POST["phone1"]);
 $file_phone2 = mysqli_real_escape_string($db, $_POST["phone2"]);  
 $file_sec_name = mysqli_real_escape_string($db, $_POST["sec_name"]);
 $file_sec_relationship = mysqli_real_escape_string($db, $_POST["sec_relationship"]); 
 $file_sec_phone1 = mysqli_real_escape_string($db, $_POST["sec_phone1"]);
 $file_sec_phone2 = mysqli_real_escape_string($db, $_POST["sec_phone2"]);  
 
     
            // Insert image file name into database
            //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
            $update = $db->query("UPDATE manage_emp_emergency SET name='$file_name',relationship='$file_relationship',phone1='$file_phone1',phone2='$file_phone2',sec_name='$file_sec_name',sec_relationship='$file_sec_relationship',sec_phone1='$file_sec_phone1',sec_phone2='$file_sec_phone2' WHERE emp_code = '$file_emp_code'");
             
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Emergency Contact Details </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'profile-details.php?id=$file_emp_code';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

