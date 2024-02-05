<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_data_id = mysqli_real_escape_string($db, $_POST["data_id"]);
 $file_emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
 $file_date = mysqli_real_escape_string($db, $_POST["date"]);
 //$file_attendance_status = mysqli_real_escape_string($db, $_POST["attendance_status"]);
            // Insert image file name into database
            $update1 = $db->query("UPDATE attendance SET attendance='A' WHERE id='$file_data_id' And emp_code='$file_emp_id' And date='$file_date'");
            
            
             if($update1){	
				   $att_data = $file_date;
                      $timestamp = strtotime($att_data);
                     $formatted_date = date('M d, Y', $timestamp);
                     echo "<b>".$formatted_date."</b><br>"; 			 
                echo "<strong style='color:green;'>".ucwords($file_emp_id). " Attendance status Change as</strong> Absent";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

