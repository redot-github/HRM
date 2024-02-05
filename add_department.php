<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 
        $query = $db->query("SELECT department_name FROM departments WHERE department_name='$file_department'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
             $insert = $db->query("INSERT INTO departments(department_name, upload_on) VALUES ('$file_department',NOW())");
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_department). "</strong> has been uploaded successfully.";
                echo "<script>setTimeout(\"location.href = 'departments.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

