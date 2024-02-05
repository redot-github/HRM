<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_date = mysqli_real_escape_string($db, $_POST["date"]);
 $file_shift = mysqli_real_escape_string($db, $_POST["shift"]);
 $file_min_st_time = mysqli_real_escape_string($db, $_POST["min_st_time"]);
 $file_st_time = mysqli_real_escape_string($db, $_POST["st_time"]);
 $file_max_st_time = mysqli_real_escape_string($db, $_POST["max_st_time"]);
 $file_min_end_time = mysqli_real_escape_string($db, $_POST["min_end_time"]);
 $file_end_time = mysqli_real_escape_string($db, $_POST["end_time"]);
 $file_max_end_time = mysqli_real_escape_string($db, $_POST["max_end_time"]);
 $file_break_time = mysqli_real_escape_string($db, $_POST["break_time"]);

  
 
 
 
        $query = $db->query("SELECT id FROM shift_scheduling WHERE emp_code='$file_emp_code' AND date='$file_date' AND shift_type='$file_shift'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
             $insert = $db->query("INSERT INTO shift_scheduling(emp_code, department, date, shift_type, min_start_time, start_time, max_start_time, min_end_time, end_time, max_end_time, break_time) VALUES ('$file_emp_code','$file_department','$file_date','$file_shift','$file_min_st_time','$file_st_time','$file_max_st_time','$file_min_end_time','$file_end_time','$file_max_end_time','$file_break_time')");
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_code). "( ".ucwords($file_date)." - ".ucwords($file_shift)." )</strong> has been uploaded successfully.";
                echo "<script>setTimeout(\"location.href = 'timesheet-employee.php';\",1000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

