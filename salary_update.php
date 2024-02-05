<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_net_salary = mysqli_real_escape_string($db, $_POST["net_salary"]);
 $file_month = mysqli_real_escape_string($db, $_POST["month"]);
 $file_year = mysqli_real_escape_string($db, $_POST["year"]);
 $file_from_date = mysqli_real_escape_string($db, $_POST["from_date"]);
 $file_to_date = mysqli_real_escape_string($db, $_POST["to_date"]); 
 $file_basic_salary = mysqli_real_escape_string($db, $_POST["basic_salary"]); 
 $file_dearance_allowance = mysqli_real_escape_string($db, $_POST["dearance_allowance"]); 
 $file_medical_allowance = mysqli_real_escape_string($db, $_POST["medical_allowance"]); 
 $file_hra = mysqli_real_escape_string($db, $_POST["hra"]); 
 $file_gross_salary = mysqli_real_escape_string($db, $_POST["gross_salary"]); 
 
 $date1 = new DateTime($file_from_date);
$dt1=$date1->format('Y-m-d');
$date2 = new DateTime($file_to_date);
$dt2=$date2->format('Y-m-d');
 
   /*$empwork = "SELECT COUNT(emp_code) as work_days FROM attendance WHERE emp_code = '$file_emp_code' AND attendance = 'P' AND date >= '$dt1' 
    AND date <= '$dt2'";
								$empworkda = mysqli_query($db, $empwork);
								$empworkdays = $empworkda->fetch_assoc();
							
   $working_days = $empworkdays['work_days'];
   
  $day_sal = $file_net_salary / 30;
  $final_sal = $day_sal * $working_days;
*/
     $check_month = "SELECT id FROM emp_salary_payroll WHERE emp_code = '$file_emp_code' AND salary_month = '$file_month' AND salary_year='$file_year'";
     $results = mysqli_query($db, $check_month);
  	
  	  		if (mysqli_num_rows($results) == 1) {
			   echo "<strong style='color:red;'>Already Exit</strong>";
			   echo "<script>setTimeout(\"location.href = 'salary.php';\",2000);</script>";
			} else {
     
            $update2 = $db->query("Insert emp_salary_payroll (emp_code, salary_month, salary_year, salary_amount, basic_salary, dearance_allowance, medical_allowance, hra, gross_salary) VALUES ('$file_emp_code','$file_month','$file_year','$file_net_salary','$file_basic_salary','$file_dearance_allowance','$file_medical_allowance','$file_hra','$file_gross_salary')");
             
             if($update2){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). " Salary Pay For ".ucwords($file_month). " ".ucwords($file_year). "</strong> has been updated successfully.";
                 echo "<script>setTimeout(\"location.href = 'salary.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 
		 }
 


// Display status message
//echo $statusMsg;
//}

?>				   

