<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_sala_id = mysqli_real_escape_string($db, $_POST["sala_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_emp_name = mysqli_real_escape_string($db, $_POST["emp_name"]);
 $file_salary_month = mysqli_real_escape_string($db, $_POST["salary_month"]);
 $file_salary_year = mysqli_real_escape_string($db, $_POST["salary_year"]);
 $file_salary = mysqli_real_escape_string($db, $_POST["salary"]);
 $file_basic_salary = mysqli_real_escape_string($db, $_POST["basic_salary"]);
 $file_dearance_allowance = mysqli_real_escape_string($db, $_POST["dearance_allowance"]);
 $file_medical_allowance = mysqli_real_escape_string($db, $_POST["medical_allowance"]);
 $file_hra = mysqli_real_escape_string($db, $_POST["hra"]);
 $file_gross_salary = mysqli_real_escape_string($db, $_POST["gross_salary"]);
 $file_lop = mysqli_real_escape_string($db, $_POST["lop"]);
 $file_net_salary = mysqli_real_escape_string($db, $_POST["net_salary"]);
 
        
      $insert = "UPDATE emp_salary_payroll SET salary_month = '$file_salary_month', salary_year = '$file_salary_year', salary_amount='$file_salary',basic_salary='$file_basic_salary',dearance_allowance='$file_dearance_allowance',medical_allowance='$file_medical_allowance',hra='$file_hra',gross_salary='$file_gross_salary',LOP='$file_lop',net_salary='$file_net_salary' WHERE id='$file_sala_id' AND emp_code = '$file_emp_id' AND emp_name = '$file_emp_name'";
      $query_run = mysqli_query($db, $insert);
      
             if($query_run){	
                echo "Emp Code - <strong style='color:green;'>".ucwords($file_emp_id). "</strong> Month / Year -  <strong style='color:green;'>".ucwords($file_salary_month). " / ".ucwords($file_salary_year). "</strong> Salary - <strong style='color:green;'>".$file_salary. "</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'salary.php;\",2000);</script>";
                
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

