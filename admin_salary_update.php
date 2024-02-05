<?php
error_reporting(E_ERROR | E_PARSE);
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 
 $file_salary_basis = mysqli_real_escape_string($db, $_POST["salary_basis"]);
 $file_salary_amount = mysqli_real_escape_string($db, $_POST["salary_amount"]); 
 $file_payment_type = mysqli_real_escape_string($db, $_POST["payment_type"]);
 
 $file_basic_salary = mysqli_real_escape_string($db, $_POST["basic_salary"]);
 $file_dearance_allowance = mysqli_real_escape_string($db, $_POST["dearance_allowance"]);
 $file_medical_allowance = mysqli_real_escape_string($db, $_POST["medical_allowance"]);
 $file_hra = mysqli_real_escape_string($db, $_POST["hra"]);
 $file_gross_salary = mysqli_real_escape_string($db, $_POST["gross_salary"]);
 $file_lop = mysqli_real_escape_string($db, $_POST["lop"]);
 $file_net_salary = mysqli_real_escape_string($db, $_POST["net_salary"]);
 $file_status = mysqli_real_escape_string($db, $_POST["status"]);
 
 /*$file_PF_contribution = mysqli_real_escape_string($db, $_POST["PF_contribution"]);
 $file_PF_no = mysqli_real_escape_string($db, $_POST["PF_no"]);
 $file_emp_PF_rate1 = mysqli_real_escape_string($db, $_POST["emp_PF_rate1"]);
 $file_PF_additional_rate1 = mysqli_real_escape_string($db, $_POST["PF_additional_rate1"]);
 $file_PF_total_rate1 = mysqli_real_escape_string($db, $_POST["PF_total_rate1"]);
 
 $file_emp_PF_rate2 = mysqli_real_escape_string($db, $_POST["emp_PF_rate2"]);
 $file_PF_additional_rate2 = mysqli_real_escape_string($db, $_POST["PF_additional_rate2"]);
 $file_PF_total_rate2 = mysqli_real_escape_string($db, $_POST["PF_total_rate2"]);
 
 $file_ESI_contribution = mysqli_real_escape_string($db, $_POST["ESI_contribution"]);
 $file_ESI_no = mysqli_real_escape_string($db, $_POST["ESI_no"]);
 $file_emp_ESI_rate = mysqli_real_escape_string($db, $_POST["emp_ESI_rate"]);
 $file_ESI_additional_rate = mysqli_real_escape_string($db, $_POST["ESI_additional_rate"]);
 $file_ESI_total_rate = mysqli_real_escape_string($db, $_POST["ESI_total_rate"]);*/
 
  $query = $db->query("SELECT emp_code FROM emp_salary WHERE emp_code='$file_emp_code'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  $update = $db->query("UPDATE emp_salary SET salary_basis='$file_salary_basis',salary_amount='$file_salary_amount',payment_type='$file_payment_type',basic_salary='$file_basic_salary',dearance_allowance='$file_dearance_allowance',medical_allowance='$file_medical_allowance',hra='$file_hra', gross_salary ='$file_gross_salary',LOP = '$file_lop', net_salary='$file_net_salary', status='$file_status'  WHERE emp_code='$file_emp_code'");
             
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Salary Details </strong> has been updated successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            }
			}
        else{
     
            // Insert image file name into database
            //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
            $insert = $db->query("INSERT INTO emp_salary(emp_code, salary_basis, salary_amount, payment_type,basic_salary, dearance_allowance, medical_allowance, hra, gross_salary, status) VALUES ('$file_emp_code','$file_salary_basis','$file_salary_amount','$file_payment_type','$file_basic_salary','$file_dearance_allowance','$file_medical_allowance','$file_hra','$file_gross_salary','$file_status')");
             
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Salary Details </strong> has been Inserted successfully.";
                echo "<script>setTimeout(\"location.href = 'profile-details.php?id=$file_emp_code';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 
          }



// Display status message
//echo $statusMsg;
//}

?>				   

