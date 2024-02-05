<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_ann_id = mysqli_real_escape_string($db, $_POST["data_id"]);
$file_ann_date = mysqli_real_escape_string($db, $_POST["ann_date"]);
$date1 = new DateTime($file_ann_date);
$ann_date=$date1->format('Y-m-d');
 $file_title = mysqli_real_escape_string($db, $_POST["title"]);
 $file_description = mysqli_real_escape_string($db, $_POST["description"]);
 $file_status = mysqli_real_escape_string($db, $_POST["status"]);
 
        
             $update = $db->query("UPDATE announcements SET announcement_date='$ann_date',title='$file_title',description='$file_description', status = '$file_status', upload_on = NOW() WHERE id='$file_ann_id'");
             if($update){				 
                echo "<strong style='color:green;'>".ucwords($file_ann_date). " - ".ucwords($file_title). "</strong> Announcement has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'announcements.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

