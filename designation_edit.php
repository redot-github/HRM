<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_designation_id = mysqli_real_escape_string($db, $_POST["data_id"]);
$file_designation = mysqli_real_escape_string($db, $_POST["designation"]);
 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 
        
             $update = $db->query("UPDATE designation SET designation='$file_designation', department_name = '$file_department', upload_on = NOW() WHERE id='$file_designation_id'");
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_department). " - ".ucwords($file_designation). "</strong> has been updated successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

