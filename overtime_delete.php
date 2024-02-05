<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_ot_id = mysqli_real_escape_string($db, $_POST["ot_id"]);
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM overtime WHERE id='$file_ot_id'");
            
            
             if($update1){				 
                echo "<strong style='color:red;'>OT </strong> has been Delete successfully.";
                echo "<script>setTimeout(\"location.href = 'overtime-employee.php';\",1000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

