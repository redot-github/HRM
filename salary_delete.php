<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_sal_id = mysqli_real_escape_string($db, $_POST["sal_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_salary_month = mysqli_real_escape_string($db, $_POST["salary_month"]);
 $file_salary_year = mysqli_real_escape_string($db, $_POST["salary_year"]);
 $file_salary = mysqli_real_escape_string($db, $_POST["salary"]);
 
        
      $insert = "DELETE FROM emp_salary_payroll WHERE id = '$file_sal_id' And emp_code = '$file_emp_id' AND salary_month='$file_salary_month' AND salary_year='$file_salary_year' AND salary_amount = '$file_salary'";
      $query_run = mysqli_query($db, $insert);
      
             if($query_run){	
                echo "Emp Code - <strong style='color:green;'>".ucwords($file_emp_id). "</strong> Month / Year -  <strong style='color:green;'>".ucwords($file_salary_month). " / ".ucwords($file_salary_year). "</strong> Salary - <strong style='color:green;'>".$file_salary. "</strong> has been Deleted successfully.";
                echo "<script>setTimeout(\"location.href = 'salary.php;\",2000);</script>";
                
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

