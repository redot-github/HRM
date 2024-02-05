<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_ot_date = mysqli_real_escape_string($db, $_POST["ot_date"]);
 $file_ot_hour = mysqli_real_escape_string($db, $_POST["ot_hour"]);
 $file_description = mysqli_real_escape_string($db, $_POST["description"]);
 
        
             $insert = $db->query("INSERT INTO overtime(emp_code, overtime_date, overtime_hours, description, status) VALUES ('$file_emp_code','$file_ot_date','$file_ot_hour','$file_description','New')");
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_ot_date). " OT </strong> has been Applied successfully.";
                echo "<script>setTimeout(\"location.href = 'overtime-employee.php';\",1000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

