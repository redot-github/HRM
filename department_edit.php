<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_department_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 
        
             $update = $db->query("UPDATE departments SET department_name = '$file_department', upload_on = NOW() WHERE id='$file_department_id'");
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_department). "</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'departments.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

