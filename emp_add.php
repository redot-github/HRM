<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_name = mysqli_real_escape_string($db, $_POST["name"]);
 $file_lastname = mysqli_real_escape_string($db, $_POST["last_name"]); 
 $file_username = mysqli_real_escape_string($db, $_POST["username"]);
 $file_password = mysqli_real_escape_string($db, $_POST["password"]);
 $file_confirm_password = mysqli_real_escape_string($db, $_POST["confirm_password"]);
 $file_email = mysqli_real_escape_string($db, $_POST["email"]);
 $file_joining_date = mysqli_real_escape_string($db, $_POST["joining_date"]);

 $file_mobile = mysqli_real_escape_string($db, $_POST["phone"]);
 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 $file_designation = mysqli_real_escape_string($db, $_POST["designation"]);
 $file_company = mysqli_real_escape_string($db, $_POST["company"]);
 $file_status = mysqli_real_escape_string($db, $_POST["status"]);
 $file_role = mysqli_real_escape_string($db, $_POST["role"]);

     
            // Insert image file name into database
            $update1 = $db->query("INSERT INTO manage_emp(name, last_name, emp_code, company, department, designation, role, mobile, email, joining_date,status) VALUES ('$file_name','$file_lastname','$file_emp_code','$file_company','$file_department','$file_designation','$file_role','$file_mobile','$file_email','$file_joining_date','$file_status')");
            $update2 = $db->query("INSERT INTO user_login(username, password, user_role, status) VALUES ('$file_username','$file_password','$file_role','$file_status')");
            $update3 = $db->query("INSERT INTO manage_emp_pass(emp_code) VALUES ('$file_emp_code')");
            $update4 = $db->query("INSERT INTO manage_emp_emergency(emp_code) VALUES ('$file_emp_code')");
            $update5 = $db->query("INSERT INTO manage_emp_bank(emp_code) VALUES ('$file_emp_code')");
            $update6 = $db->query("INSERT INTO manage_emp_education(emp_code) VALUES ('$file_emp_code')");
            $update7 = $db->query("INSERT INTO manage_emp_experince (emp_code) VALUES ('$file_emp_code')");
             
             if($update1 && $update2 && $update3 && $update4 && $update5 && $update6 && $update7){				 
                echo "<strong style='color:green;'>".ucwords($file_name). " Personal Informations </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'employees.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

