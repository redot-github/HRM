<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_ot_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_ot_date = mysqli_real_escape_string($db, $_POST["ot_date"]);
 $file_ot_hour = mysqli_real_escape_string($db, $_POST["ot_hour"]);
 $file_desc = mysqli_real_escape_string($db, $_POST["desc"]);
 
        
             $update = $db->query("UPDATE overtime SET overtime_date='$file_ot_date',overtime_hours='$file_ot_hour',description='$file_desc' WHERE emp_code = '$file_emp_code' AND id='$file_ot_id' ");
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_ot_date). " OT </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'overtime-employee.php';\",1000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

