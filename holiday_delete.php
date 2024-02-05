<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_holi_id = mysqli_real_escape_string($db, $_POST["holi_id"]);
 $file_holiday_name = mysqli_real_escape_string($db, $_POST["holiday_name"]);
 $file_holiday_date = mysqli_real_escape_string($db, $_POST["holiday_date"]);
   $date1 = new DateTime($file_holiday_date);
$date=$date1->format('Y-m-d');
            // Insert image file name into database
            $update1 = $db->query("DELETE FROM holidays WHERE id='$file_holi_id'");
              $emp_sql = $db->query("select emp_code from manage_emp WHERE designation != 'Admin' ORDER BY emp_code ASC");  
									if($emp_sql->num_rows>0){
                                    while($emp_data = $emp_sql->fetch_assoc()){
										$name = $emp_data['emp_code'];
				$update2 =  $db->query("DELETE FROM attendance WHERE date = '$date'");					
									}
								}
            
             if($update1){				 
                echo "<strong style='color:red;'>Holidays </strong> has been Delete successfully.";
               
                echo "<script>setTimeout(\"location.href = 'holidays.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

