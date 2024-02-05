<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $att = $_POST['att'];
//$emp_id=$_POST['emp_code'];//Set your post id
$at_date = $_POST['date'];
 $date1 = new DateTime($at_date);
$date=$date1->format('Y-m-d');
$attendance_status = $_POST['attendance_status'];
foreach ($_POST['att'] as $id => $name) {
	//echo 'Category id ' . $id . ' with name ' . $name;
  
  $query = "SELECT * FROM attendance WHERE emp_code='$name' AND date='$date' and attendance='$attendance_status'";
  	$results = mysqli_query($db, $query);
  	
  	  		if (mysqli_num_rows($results) == 1) {
  $result =  mysqli_query($db,"UPDATE attendance SET attendance = '$attendance_status' WHERE emp_code = '$name' AND date = '$date'");
  } else {
	  $result =  mysqli_query($db,"INSERT INTO attendance(emp_code, date, attendance) values('$name','$date','$attendance_status')");
	  }
}
       
             if($result){				 
                echo "<strong style='color:green;'>Attendance Present Record </strong> Uploaded successfully.";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

