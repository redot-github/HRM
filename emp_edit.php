<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_name = mysqli_real_escape_string($db, $_POST["name"]);
 $file_lastname = mysqli_real_escape_string($db, $_POST["lastname"]);
 $file_email = mysqli_real_escape_string($db, $_POST["email"]);
 $file_joining_date = mysqli_real_escape_string($db, $_POST["joining_date"]);

 $file_mobile = mysqli_real_escape_string($db, $_POST["phone"]);
 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 $file_designation = mysqli_real_escape_string($db, $_POST["designation"]);
 $file_company = mysqli_real_escape_string($db, $_POST["company"]);
 
 $file_status = mysqli_real_escape_string($db, $_POST["status"]);
 $file_role = mysqli_real_escape_string($db, $_POST["role"]);
            // Insert image file name into database
            $update1 = $db->query("UPDATE manage_emp SET name='$file_name',last_name='$file_lastname',department='$file_department',company='$file_company',designation='$file_designation',role='$file_role',mobile='$file_mobile',email='$file_email',joining_date='$file_joining_date',status='$file_status' WHERE emp_code ='$file_emp_code'");
            $update2 = $db->query("UPDATE user_login SET user_role='$file_role', status ='$file_status' WHERE username ='$file_emp_code'");
            $update3 = $db->query("UPDATE emp_salary SET status ='$file_status' WHERE emp_code ='$file_emp_code'");
             if($update1 && $update2 && $update3){				 
                echo "<strong style='color:green;'>".ucwords($file_name). " Personal Informations </strong> has been updated successfully.";
                 //echo "<script type='text/javascript'>alert('$message');</script>";
                 //sleep(5);
                 echo "<script>setTimeout(\"location.href = 'employees.php';\",2000);</script>";
                //header("Location: employees.php");
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

