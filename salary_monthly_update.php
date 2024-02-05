<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 /*$file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_net_salary = mysqli_real_escape_string($db, $_POST["net_salary"]);*/
 $file_month = mysqli_real_escape_string($db, $_POST["month"]);
 $file_year = mysqli_real_escape_string($db, $_POST["year"]);
 $file_from_date = mysqli_real_escape_string($db, $_POST["from_date"]);
 $file_to_date = mysqli_real_escape_string($db, $_POST["to_date"]); 
 /*$file_basic_salary = mysqli_real_escape_string($db, $_POST["basic_salary"]); 
 $file_dearance_allowance = mysqli_real_escape_string($db, $_POST["dearance_allowance"]); 
 $file_medical_allowance = mysqli_real_escape_string($db, $_POST["medical_allowance"]); 
 $file_hra = mysqli_real_escape_string($db, $_POST["hra"]); 
 $file_gross_salary = mysqli_real_escape_string($db, $_POST["gross_salary"]); */
 
 $date1 = new DateTime($file_from_date);
$from_dt=$date1->format('Y-m-d');
$date2 = new DateTime($file_to_date);
$to_dt=$date2->format('Y-m-d');
 
  
  $emp_salary = $db->query("select * from emp_salary WHERE status = 1 ORDER BY emp_code ASC");  
									if($emp_salary->num_rows>0){
                                    while($emp_data = $emp_salary->fetch_assoc()){
                                      $file_emp_code = $emp_data['emp_code'];
                                   $file_salary_amount = $emp_data['salary_amount'];
                                   $file_basic_salary = $emp_data['basic_salary'];
                                   $file_dearance_allowance = $emp_data['dearance_allowance'];
                                   $file_medical_allowance = $emp_data['medical_allowance'];
                                   $file_hra = $emp_data['hra'];
                                   $file_gross_salary = $emp_data['gross_salary'];
                                   $file_LOP = $emp_data['LOP'];
                                   $file_net_salary = $emp_data['net_salary'];
   $emp_det = "SELECT name, last_name, joining_date, exit_date from manage_emp Where emp_code='$file_emp_code' AND status=1 AND designation!='Admin' ORDER BY name Asc";
    $res = mysqli_query($db,$emp_det);
    $emp_row = $res->fetch_assoc();
    $emp_name = $emp_row["name"];                                
    $emp_lname = $emp_row["last_name"];  
    $emp_joining_date = $emp_row["joining_date"]; 
    $emp_exit_date = $emp_row["exit_date"]; 
    
    $daily_salary = $file_net_salary / 30;
   
if ($emp_joining_date >= $from_dt && $emp_joining_date <= $to_dt) {
    $empwork = "SELECT COUNT(emp_code) as work_days FROM attendance WHERE emp_code = '$file_emp_code' AND attendance = 'P' AND date >= '$emp_joining_date' 
    AND date <= '$to_dt'";
								$empworkda = mysqli_query($db, $empwork);
								$empworkdays = $empworkda->fetch_assoc();
							
   $working_days = $empworkdays['work_days'];
   $final_sal = (float)$daily_salary * (float)$working_days;
   $final_net_salary = (float)$final_sal - (float)$file_LOP;
   
} else if ($emp_exit_date >= $from_dt && $emp_exit_date <= $to_dt) {
    $empwork = "SELECT COUNT(emp_code) as work_days FROM attendance WHERE emp_code = '$file_emp_code' AND attendance = 'P' AND date >= '$from_dt' 
    AND date <= '$emp_exit_date'";
								$empworkda = mysqli_query($db, $empwork);
								$empworkdays = $empworkda->fetch_assoc();
							
   $working_days = $empworkdays['work_days'];
   $final_sal = (float)$daily_salary * (float)$working_days;
   $final_net_salary = (float)$final_sal - (float)$file_LOP;
} else {
    $empwork = "SELECT COUNT(emp_code) as work_days FROM attendance WHERE emp_code = '$file_emp_code' AND attendance = 'P' AND date >= '$from_dt' 
    AND date <= '$to_dt'";
								$empworkda = mysqli_query($db, $empwork);
								$empworkdays = $empworkda->fetch_assoc();
							
   $working_days = $empworkdays['work_days'];
   $final_sal = (float)$daily_salary * (float)$working_days;
   $final_net_salary = (float)$final_sal - (float)$file_LOP;
}
      /*$emp_lop = "SELECT casual_leave, medical_leave from emp_leave_status WHERE emp_code='$file_emp_code'";
    $res_lop = mysqli_query($db,$emp_lop);
    $emp_row_lop = $res_lop->fetch_assoc();*/
  
    	 
            $update2 = $db->query("Insert INTO emp_salary_payroll(emp_code, emp_name, salary_month, from_date, to_date, salary_year, salary_amount, no_of_days, basic_salary, dearance_allowance, medical_allowance, hra, gross_salary, LOP, net_salary) VALUES 
            ('$file_emp_code','$emp_name $emp_lname','$file_month','$from_dt','$to_dt','$file_year','$file_salary_amount','$working_days','$file_basic_salary','$file_dearance_allowance','$file_medical_allowance','$file_hra','$file_gross_salary','$file_LOP','$final_net_salary')");
            $update3 = $db->query("UPDATE emp_salary SET LOP = '', net_salary = '$file_net_salary' WHERE emp_code = '$file_emp_code'");
		  /*if($emp_row_lop['casual_leave'] < 0){
		    $update4 = $db->query("UPDATE emp_leave_status SET casual_leave =0 WHERE emp_code = '$file_emp_code'");			 
		 }
	     else if($emp_row_lop['medical_leave'] < 0){
		  $update4 = $db->query("UPDATE emp_salary SET medical_leave = 0 WHERE emp_code = '$file_emp_code'");		
		 }*/
		 }
             if($update2){				 
                echo "<strong style='color:green;'>Salary For ".ucwords($file_month). " ".ucwords($file_year). "</strong> has been updated successfully.";
                 echo "<script>setTimeout(\"location.href = 'salary.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 
		 }
 


// Display status message
//echo $statusMsg;
//}

?>				   

