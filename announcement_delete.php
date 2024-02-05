<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_ann_id = mysqli_real_escape_string($db, $_POST["data_id"]);
$file_ann_date = mysqli_real_escape_string($db, $_POST["ann_date"]);
$date1 = new DateTime($file_ann_date);
$ann_date=$date1->format('Y-m-d');
 $file_title = mysqli_real_escape_string($db, $_POST["title"]);
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM announcements WHERE id='$file_ann_id'");
            
            
             if($update1){				 
                echo "<strong style='color:red;'>".ucwords($file_ann_date). " - ".ucwords($file_title). "</strong> Announcement has been Delete successfully.";
                echo "<script>setTimeout(\"location.href = 'announcements.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

