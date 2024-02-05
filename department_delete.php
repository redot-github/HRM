<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_dep_id = mysqli_real_escape_string($db, $_POST["dep_id"]);
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM departments WHERE id='$file_dep_id'");
            
            
             if($update1){				 
                echo "<strong style='color:red;'>Department </strong> has been Delete successfully.";
                echo "<script>setTimeout(\"location.href = 'departments.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

