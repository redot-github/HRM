<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_holiday_name = mysqli_real_escape_string($db, $_POST["holiday_name"]);
 $file_holiday_date = mysqli_real_escape_string($db, $_POST["holiday_date"]);
  $date1 = new DateTime($file_holiday_date);
$date=$date1->format('Y-m-d');
 
        $query = $db->query("SELECT holiday_name FROM holidays WHERE holiday_name='$file_holiday_name' AND holiday_date='$date'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
             $insert = $db->query("INSERT INTO holidays(holiday_name, holiday_date, upload_on) VALUES ('$file_holiday_name', '$date', Now())");
             $emp_sql = $db->query("select emp_code from manage_emp WHERE designation != 'Admin' ORDER BY emp_code ASC");  
									if($emp_sql->num_rows>0){
                                    while($emp_data = $emp_sql->fetch_assoc()){
										$name = $emp_data['emp_code'];
				$insert2 =  $db->query("INSERT INTO attendance(emp_code, date, attendance) values('$name','$date','P')");					
									}
								}
             if($insert && $insert2){				 
                echo "<strong style='color:green;'>".ucwords($file_holiday_name). " - ".ucwords($file_holiday_date). "</strong> has been uploaded successfully.";
                echo "<script>setTimeout(\"location.href = 'holidays.php';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

