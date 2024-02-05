<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_client = mysqli_real_escape_string($db, $_POST["client"]);
 
        $query = $db->query("SELECT client_name FROM clients WHERE client_name='$file_client'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
             $insert = $db->query("INSERT INTO clients(client_name, upload_on) VALUES ('$file_client',NOW())");
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_client). "</strong> has been uploaded successfully.";
                echo "<script>setTimeout(\"location.href = 'clients.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

