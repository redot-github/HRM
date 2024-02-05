<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_data_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
            // Insert image file name into database
            $update1 = $db->query("UPDATE overtime SET status='Approved' WHERE id='$file_data_id' And emp_code='$file_emp_id'");
            
            
             if($update1){				 
                echo "<strong style='color:green;'>".ucwords($file_emp_id). " OT Approved </strong>";
                echo "<script>setTimeout(\"location.href = 'overtime.php';\",1000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

