<?php
                    //if(isset($_POST['submit'])){
require("inc/config.php");
$statusMsg = '';

 $file_emp_code = mysqli_real_escape_string($db, $_POST["emp_code"]);
 $file_firstname = mysqli_real_escape_string($db, $_POST["first_name"]);
 $file_lastname = mysqli_real_escape_string($db, $_POST["last_name"]); 
 $file_dob = mysqli_real_escape_string($db, $_POST["dob"]);
$date1 = new DateTime($file_dob);
$dob_date=$date1->format('Y-m-d');
 $file_gender = mysqli_real_escape_string($db, $_POST["gender"]);
  /*$file_new_pwd = mysqli_real_escape_string($db, $_POST["new_password"]);
  if($file_new_pwd == ''){
    $file_pwd = mysqli_real_escape_string($db, $_POST["current_password"]);
  } else {
	$file_pwd = mysqli_real_escape_string($db, $_POST["new_password"]);
  }*/
 $file_email = mysqli_real_escape_string($db, $_POST["email"]);
 $file_pincode = mysqli_real_escape_string($db, $_POST["pincode"]);
 $file_address = mysqli_real_escape_string($db, $_POST["address"]);
 $file_state = mysqli_real_escape_string($db, $_POST["state"]);
 $file_country = mysqli_real_escape_string($db, $_POST["country"]);
 $file_mobile = mysqli_real_escape_string($db, $_POST["phone"]);
 $file_email = mysqli_real_escape_string($db, $_POST["email"]);
 $file_department = mysqli_real_escape_string($db, $_POST["department"]);
 $file_designation = mysqli_real_escape_string($db, $_POST["designation"]);
 //$file_pro_img = mysqli_real_escape_string($db, $_POST["pro_img"]);
 $file_role = mysqli_real_escape_string($db, $_POST["role"]);
 $file_status = mysqli_real_escape_string($db, $_POST["status"]);
 $file_report_to = mysqli_real_escape_string($db, $_POST["report_to"]);
 $file_hr_approve = mysqli_real_escape_string($db, $_POST["hr_approve"]);
     
            // Insert image file name into database
            //$update1 = $db->query("UPDATE logins SET username = '$file_username', password = '$file_pwd' WHERE customer_id = '$file_cus_id'");
            $update2 = $db->query("UPDATE manage_emp SET name='$file_firstname',last_name='$file_lastname',department='$file_department',designation='$file_designation',role='$file_role',lead_emp_code='$file_report_to',hr_leave_approver='$file_hr_approve',dob='$dob_date',gender='$file_gender',address='$file_address',state='$file_state',country='$file_country',pincode='$file_pincode',mobile='$file_mobile',email='$file_email',status='$file_status' WHERE emp_code = '$file_emp_code'");
            $update1 = $db->query("UPDATE user_login SET user_role='$file_role', status ='$file_status' WHERE username ='$file_emp_code'"); 
            $update3 = $db->query("UPDATE emp_salary SET status ='$file_status' WHERE emp_code ='$file_emp_code'");
             
             if(!empty($_FILES['pro_img']['tmp_name'])){
    $name=$_FILES["pro_img"]["name"];
    $type=$_FILES["pro_img"]["type"];
    $size=$_FILES["pro_img"]["size"];
    $temp=$_FILES["pro_img"]["tmp_name"];
    $error=$_FILES["pro_img"]["error"];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        $permissible_extension = array('jpg','png','jpeg','gif','JPG','pdf','PDF');
        if(in_array($ext, $permissible_extension)){
            if(move_uploaded_file($temp,"profile-img/".$name)){
                $sql1 = $db->query("UPDATE manage_emp SET image = '$name' WHERE emp_code = '$file_emp_code'");
                //$res = mysqli_query($db,$sql1);
                //echo $sql1;
			}
		}
     }
             
             if($update1 && $update2 && $update3){				 
                echo "<strong style='color:green;'>".ucwords($file_firstname). " Personal Informations </strong> has been updated successfully.";
                echo "<script>setTimeout(\"location.href = 'profile-details.php?id=$file_emp_code';\",2000);</script>";
            }else{
               echo "<strong style='color:red;'>Update fails, please try again.</strong>";
            } 




// Display status message
//echo $statusMsg;
//}

?>				   

