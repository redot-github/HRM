<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_bank_name = mysqli_real_escape_string($db, $_POST["bank_name"]);
 $file_bank_account_no = mysqli_real_escape_string($db, $_POST["bank_account_no"]); 
 $file_IFSC_code = mysqli_real_escape_string($db, $_POST["IFSC_code"]);
 $file_pan_no = mysqli_real_escape_string($db, $_POST["pan_no"]);  
 
 
     
            // Insert image file name into database
            //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
            $update = $db->query("UPDATE manage_emp_bank SET bank_name='$file_bank_name',bank_account_no='$file_bank_account_no',IFSC_code='$file_IFSC_code',pan_no='$file_pan_no' WHERE emp_code = '$file_emp_code'");
             
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Bank Details </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'profile-details.php?id=$file_emp_code';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

