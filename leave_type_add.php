<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_leave_type = mysqli_real_escape_string($db, $_POST["leave_type"]);
 $file_based_on = mysqli_real_escape_string($db, $_POST["based_on"]);
 $file_no_of_days = mysqli_real_escape_string($db, $_POST["no_of_days"]);
 
        $query = $db->query("SELECT id FROM leave_types WHERE leave_type='$file_leave_type' AND based_on='$file_based_on' AND no_of_days='$file_no_of_days'");
        $count = mysqli_num_rows($query);
        
        if($count == 1) { 
			  echo "<strong>Already Exists</strong>";
			}
        else{
			
			$emp_status = $db->query("select * from manage_emp Where designation!='Admin'ORDER BY emp_code ASC");  
									if($emp_status->num_rows>0){
                                    while($emp_data = $emp_status->fetch_assoc()){
                                      $file_emp_code = $emp_data['emp_code'];
                                   $file_name = $emp_data['name'];
                                   $file_last_name = $emp_data['last_name'];
            $query = "SELECT id FROM emp_leave_status WHERE emp_code='$file_emp_code'";
  	$results = mysqli_query($db, $query);
  	
  	  		if (mysqli_num_rows($results) == 1) {
				
				if($file_leave_type  == 'Casual Leave'){
            $insert2 = $db->query("UPDATE emp_leave_status SET casual_leave = casual_leave + '$file_no_of_days', casual_leave_balance =  casual_leave_balance + '$file_no_of_days' WHERE 
            emp_code = '$file_emp_code' AND  emp_name='$file_name $file_last_name'");
		   } elseif($file_leave_type  == 'Medical Leave') {
			 $insert2 = $db->query("UPDATE emp_leave_status SET medical_leave = '$file_no_of_days',medical_leave_balance = medical_leave_balance + '$file_no_of_days' WHERE 
            emp_code = '$file_emp_code' AND  emp_name='$file_name $file_last_name'");
			 } 
		 } else {
				                       
            if($file_leave_type  == 'Casual Leave'){
            $insert2 = $db->query("Insert INTO emp_leave_status(emp_code, emp_name, casual_leave, casual_leave_balance) VALUES 
            ('$file_emp_code','$file_name $file_last_name','$file_no_of_days','$file_no_of_days')");
		   } elseif($file_leave_type  == 'Medical Leave') {
			 $insert2 = $db->query("Insert INTO emp_leave_status(emp_code, emp_name, medical_leave, medical_leave_balance) VALUES 
            ('$file_emp_code','$file_name $file_last_name','$file_no_of_days','$file_no_of_days')");
			 }
		 }
		 }
	 }
             $insert = $db->query("INSERT INTO leave_types(leave_type, based_on, no_of_days, upload_on) VALUES ('$file_leave_type', '$file_based_on', '$file_no_of_days', Now())");
             if($insert){				 
                echo "<strong style='color:green;'>".ucwords($file_leave_type). " - ".ucwords($file_based_on). "</strong> has been uploaded successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 

}


// Display status message
//echo $statusMsg;
//}

?>				   

