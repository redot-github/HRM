<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_passport_no = mysqli_real_escape_string($db, $_POST["passport_no"]);
 $file_passport_exp_date = mysqli_real_escape_string($db, $_POST["passport_exp_date"]); 
 $file_tel = mysqli_real_escape_string($db, $_POST["tel"]);
 $file_nationality = mysqli_real_escape_string($db, $_POST["nationality"]);  
 $file_religion = mysqli_real_escape_string($db, $_POST["religion"]);
 $file_marital_status = mysqli_real_escape_string($db, $_POST["marital_status"]);
 $file_emp_of_spouse = mysqli_real_escape_string($db, $_POST["emp_of_spouse"]);
 $file_no_of_children = mysqli_real_escape_string($db, $_POST["no_of_children"]);
 
     
            // Insert image file name into database
            //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
            $update = $db->query("UPDATE manage_emp_pass SET passport_no='$file_passport_no',passport_expiry_date='$file_passport_exp_date',tel='$file_tel',nationality='$file_nationality',religion='$file_religion',marital_status='$file_marital_status',employment_of_spouse='$file_emp_of_spouse',no_of_children='$file_no_of_children' WHERE emp_code = '$file_emp_code'");
             
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Personal Informations </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'profile-details.php?id=$file_emp_code';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

