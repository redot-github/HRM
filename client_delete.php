<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_cli_id = mysqli_real_escape_string($db, $_POST["cli_id"]);
 $file_cli_name = mysqli_real_escape_string($db, $_POST["cli_name"]);
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM clients WHERE id='$file_cli_id'");
            
            
             if($update1){				 
                echo "<strong style='color:red;'>".ucwords($file_cli_name). "</strong> has been Delete successfully.";
                echo "<script>setTimeout(\"location.href = 'clients.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

