<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_ann_from_date = mysqli_real_escape_string($db, $_POST["ann_from_date"]);
$date1 = new DateTime($file_ann_from_date);
$ann_from_date=$date1->format('Y-m-d TH:i:s');
$file_ann_from_timing = mysqli_real_escape_string($db, $_POST["ann_from_timing"]);
$file_ann_to_date = mysqli_real_escape_string($db, $_POST["ann_to_date"]);
$date2 = new DateTime($file_ann_to_date);
$ann_to_date=$date2->format('Y-m-d TH:i:s');
$file_ann_to_timing = mysqli_real_escape_string($db, $_POST["ann_to_timing"]);
 $file_title = mysqli_real_escape_string($db, $_POST["title"]);
 $file_description = mysqli_real_escape_string($db, $_POST["description"]);
 $file_status = mysqli_real_escape_string($db, $_POST["status"]);
 
        $query = $db->query("SELECT id FROM announcements WHERE announcement_from_date = '$ann_from_date' AND announcement_to_date = '$ann_to_date' AND title='$file_title' AND description='$file_description'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
             $insert = $db->query("INSERT INTO announcements(announcement_from_date, announcement_from_timing, announcement_to_date, announcement_to_timing, title, description, status, upload_on) VALUES ('$ann_from_date','$file_ann_from_timing','$ann_to_date','$file_ann_to_timing','$file_title','$file_description','$file_status',NOW())");
             //$res = mysqli_query($db,$insert);
             //echo $insert;
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($ann_from_date). " - ".ucwords($file_title). "</strong> Announcement has been uploaded successfully.";
                //echo "<script>setTimeout(\"location.href = 'announcements.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            }
            
            if(!empty($_FILES['ann_img']['tmp_name'])){
    $name=$_FILES["ann_img"]["name"];
    $type=$_FILES["ann_img"]["type"];
    $size=$_FILES["ann_img"]["size"];
    $temp=$_FILES["ann_img"]["tmp_name"];
    $error=$_FILES["ann_img"]["error"];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        $permissible_extension = array('jpg','png','jpeg','gif','JPG','pdf','PDF');
        if(in_array($ext, $permissible_extension)){
            if(move_uploaded_file($temp,"announcements/".$name)){
                $sql1 = $db->query("UPDATE announcements SET announcement_image = '$name' WHERE title = '$file_title' AND description='$file_description'");
                //$res = mysqli_query($db,$sql1);
                //echo $sql1;
			}
		}
     } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

