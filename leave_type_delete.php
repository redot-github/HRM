<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_leav_id = mysqli_real_escape_string($db, $_POST["leav_id"]);
 $file_leave_type = mysqli_real_escape_string($db, $_POST["d_leave_type"]);
 $file_based_on = mysqli_real_escape_string($db, $_POST["d_based_on"]);
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM leave_types WHERE id='$file_leav_id'");
            
            
             if($update1){				 
                echo "<strong style='color:green;'>".ucwords($file_leave_type). " - ".ucwords($file_based_on). "</strong> has been Delete successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

