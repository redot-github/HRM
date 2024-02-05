<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_designation_name = mysqli_real_escape_string($db, $_POST["designation_name"]);
 $file_department_name = mysqli_real_escape_string($db, $_POST["department_name"]);
 
        $query = $db->query("SELECT department_name FROM designation WHERE department_name='$file_department_name' AND designation='$file_designation_name'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
             $insert = $db->query("INSERT INTO designation(department_name, designation, upload_on) VALUES ('$file_department_name', '$file_designation_name',NOW())");
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_department_name). " - ".ucwords($file_designation_name). "</strong> has been uploaded successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

