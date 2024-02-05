<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_leave_id = mysqli_real_escape_string($db, $_POST["data_id"]);
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM emp_leaves WHERE id='$file_leave_id'");
            
            
             if($update1){				 
                echo "<strong style='color:red;'>Applied Leave </strong> has been Delete successfully.";
                //echo "<script>setTimeout(\"location.href = 'leave-employee.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

