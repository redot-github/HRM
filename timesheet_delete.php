<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_tim_id = mysqli_real_escape_string($db, $_POST["tim_id"]);
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM timesheet WHERE id='$file_tim_id'");
            
            
             if($update1){				 
                echo "<strong style='color:red;'>Timesheet </strong> has been Delete successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

