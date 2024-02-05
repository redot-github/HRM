<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

$file_holi_id = mysqli_real_escape_string($db, $_POST["data_id"]);
$file_holiday_name = mysqli_real_escape_string($db, $_POST["holiday_name"]);
 $file_holiday_date = mysqli_real_escape_string($db, $_POST["holiday_date"]);
   $date1 = new DateTime($file_holiday_date);
$date=$date1->format('Y-m-d');
 
        
             $update = $db->query("UPDATE holidays SET holiday_name='$file_holiday_name', holiday_date = '$date', upload_on = NOW() WHERE id='$file_holi_id'");
             $emp_sql = $db->query("select emp_code from manage_emp WHERE designation != 'Admin' ORDER BY emp_code ASC");  
									if($emp_sql->num_rows>0){
                                    while($emp_data = $emp_sql->fetch_assoc()){
										$name = $emp_data['emp_code'];
				$update2 =  $db->query("UPDATE attendance SET emp_code = '$name', date = '$date', attendance = 'P' WHERE date = '$date'");					
									}
								}
             if($update && $update2){				 
                echo "<strong style='color:green;'>".ucwords($file_holiday_name). " - ".ucwords($file_holiday_date). "</strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'holidays.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

