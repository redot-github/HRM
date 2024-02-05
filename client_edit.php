<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_client_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_client = mysqli_real_escape_string($db, $_POST["client"]);
 
        
             $update = $db->query("UPDATE clients SET client_name = '$file_client', upload_on = NOW() WHERE id='$file_client_id'");
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_client). "</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'clients.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

