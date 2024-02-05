<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

 require_once('inc/config.php'); 
 require('user_role.php');
?>
<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Employees - Redot Solutions</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		<link rel="stylesheet" href="assets/css/material.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Ck Editor -->
		<link rel="stylesheet" href="assets/css/ckeditor.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		 
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
			<?php include 'header.php';?>
			<!-- /Header -->
			
			<!--  Sidebar -->
			<?php include 'side-bar.php';?>
            <!--  /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Employee</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Employee</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_employee"><i class="fa-solid fa-plus"></i> Add Employee</a>
								<!--<div class="view-icons">
									<a href="employees.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="employees-list.php" class="list-view btn btn-link"><i class="fa-solid fa-bars"></i></a>
								</div>-->
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<form action="" method="post">
					<div class="row filter-row">						
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating" name="emp_code">
								<label class="focus-label">Employee ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating" name="emp_name">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating" name="emp_designation"> 
									<option>Select Designation</option>
									<?php  
                                     $des_sql = $db->query("select distinct designation from manage_emp WHERE designation!='Admin' ORDER BY id ASC");
									if($des_sql->num_rows>0){
                                    while($des_row = $des_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $des_row['designation'];?>"><?php echo $des_row['designation'];?></option>
											<?php }} ?>
								</select>
								<label class="focus-label">Designation</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="d-grid">
								<button type="submit" name="submit" class="btn btn-success w-100"> Search </button>  
							</div>  
						</div>						
                    </div>
                    </form>
					<!-- Search Filter -->
					
					<div class="row staff-grid-row">
						
						<?php
// Include the database configuration file
require_once('inc/config.php');
if(isset($_POST["submit"])){
	
	$emp_code = mysqli_real_escape_string($db,$_POST['emp_code']);
      $emp_name = mysqli_real_escape_string($db,$_POST['emp_name']);
      $emp_designation  = mysqli_real_escape_string($db,$_POST['emp_designation']);
      
      $empsql = $db->query("SELECT * from manage_emp WHERE designation!='Admin' AND emp_code = '$emp_code' AND name LIKE '%$emp_name' OR last_name LIKE '%$emp_name' OR name LIKE '$emp_name%' OR last_name LIKE '$emp_name%' OR name LIKE '%$emp_name%' OR last_name LIKE '%$emp_name%' AND designation= '$emp_designation' ORDER BY id Desc");
      
      if($empsql->num_rows > 0) {
         while($emprow = $empsql->fetch_assoc()) { ?>
		 
		 <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget" <?php 
							 if($row["role"] == 3) { echo "style='background-color: #0e930a'"; }
							?>>
								<div class="profile-img">
									<a href="profile-details.php?id=<?php echo $emp_code;?>" target="_blank" class="avatar"><img src="profile-img/<?php echo $emprow['image']; ?>" alt="<?php echo $emprow['name']; ?> <?php echo $emprow['last_name']; ?>"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item passingID" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee" 
										data-id="<?php echo $emprow["emp_code"];?>" 
										data-fname="<?php echo $emprow["name"];?>" 
										data-lname="<?php echo $emprow["last_name"];?>" 
										data-email="<?php echo $emprow["email"];?>"										
										data-joining-date="<?php echo $emprow["joining_date"];?>"
										data-phone="<?php echo $emprow["mobile"];?>"
										data-company="<?php echo $emprow["company"];?>"
										data-department="<?php echo $emprow["department"];?>"
										data-designation="<?php echo $emprow["designation"];?>"
										data-role="<?php echo $row["role"];?>"
										data-status="<?php echo $row["status"];?>">
										<i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee" data-id="<?php echo $row["id"];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
									</div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile-details.php?id=<?php echo $emp_code;?>" target="_blank" <?php if($row["role"] == 3) { echo "style='color: #fff;'"; }?>><?php echo $emprow["name"];?> <?php echo $emprow["last_name"];?> (<?php echo $emp_code;?>)</a></h4>
								<div class="small <?php if($row["role"] == 3) { echo "text-white"; } else { echo "text-muted"; } ?>"><?php echo $emprow["designation"];?></div>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile-details.php?id=<?php echo $emp_code;?>" target="_blank" <?php if($row["role"] == 3) { echo "style='color: #fff;'"; }?>>View More</a></h5>
							</div>
						</div>
		 
		 <?php }
		 } else {
		 
		 Echo "Not Found in Search";
		 
		 }
       
  } else {

// Get images from the database
$result = $db->query("SET NAMES utf8");//the main trick
$query = $db->query("SELECT * FROM manage_emp WHERE designation!='Admin' ORDER BY emp_code ASC");
?>
<?php
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
		$emp_code = $row["emp_code"];
		$fname = $row["name"];
        $lname = $row["last_name"];
        $designation = $row["designation"];
?>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget" <?php 
							 if($row["role"] == 3) { echo "style='background-color: #0e930a'"; }
							?>>
								<div class="profile-img">
									<a href="profile-details.php?id=<?php echo $emp_code;?>" target="_blank" class="avatar"><img src="profile-img/<?php echo $row['image']; ?>" alt=""></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item passingID" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee" 
										data-id="<?php echo $emp_code;?>" 
										data-fname="<?php echo $fname;?>" 
										data-lname="<?php echo $lname;?>" 
										data-email="<?php echo $row["email"];?>"										
										data-joining-date="<?php echo $row["joining_date"];?>"
										data-phone="<?php echo $row["mobile"];?>"
										data-company="<?php echo $row["company"];?>"
										data-department="<?php echo $row["department"];?>"
										data-designation="<?php echo $designation;?>"
										data-role="<?php echo $row["role"];?>"
										data-status="<?php echo $row["status"];?>">
										<i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item passingIDDel" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee" data-id="<?php echo $row["id"];?>" data-emp-id="<?php echo $emp_code;?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
									</div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile-details.php?id=<?php echo $emp_code;?>"  target="_blank" <?php if($row["role"] == 3) { echo "style='color: #fff;'"; }?>><?php echo $fname;?> <?php echo $lname;?> (<?php echo $emp_code;?>)</a></h4>
								<div class="small <?php if($row["role"] == 3) { echo "text-white"; } else { echo "text-muted"; } ?>"><?php echo $designation;?></div>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile-details.php?id=<?php echo $emp_code;?>" target="_blank" <?php if($row["role"] == 3) { echo "style='color: #fff;'"; }?>>View More</a></h5>
							</div>
						</div>
						<?php }
}else{ ?>
    <h2>No <span class="orange-color">Data</span></h2>
<?php }  } ?>   
					
					
					</div>
                </div>
				<!-- /Page Content -->
				
				   <?php
       $emp_coun = $db->query('SELECT COUNT(id) as count FROM manage_emp');

$count_result = mysqli_fetch_assoc($emp_coun); // sample example,you need to change accordingly
if($count_result['count'] == 1){
  $employee_ID = "RS01";

} else {
	$employee_ID = "RS0".$count_result['count'] + 1;
	}
    ?>
				<!-- Add Employee Modal -->
				<div id="add_employee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Employee</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="emp_add_Form" method="post">
									<div class="row">
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="name" maxlength="20"  required>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" type="text" name="last_name" maxlength="20"  required>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Username <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="username" value="<?php echo $employee_ID; ?>" readonly>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Email <span class="text-danger">*</span></label>
												<input class="form-control" type="email" name="email" id="email" required>
												<p id="result"></p>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Password</label>
												<input class="form-control" type="password" name="password" required>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Confirm Password</label>
												<input class="form-control" type="password" name="confirm_password" required>
											</div>
										</div>
										<div class="col-sm-4">  
											<div class="input-block mb-3">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="emp_code" value="<?php echo $employee_ID; ?>" readonly>
											</div>
										</div>
										<div class="col-sm-4">  
											<div class="input-block mb-3">
												<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="joining_date" required></div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Phone </label>
												<input class="form-control" type="text" name="phone" id="phone" maxlength="10" required>
												 <span id="lblError" class="error"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Company</label>
												<select class="select" name="company" required>
													<option value="Redot Solutions">Redot Solutions</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select floating" id="department" name="department" required>
													<option>Select Department</option>
													<?php  
                                     $sql = $db->query("select * from departments ORDER BY id ASC");
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>											
											<option value="<?php echo $row['department_name'];?>"><?php echo $row['department_name'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<script type="text/javascript" src="jquery.min.js"></script>
													<script>
	$(document).ready(function() {
	$("#department").change(function() {
		var dep_id = $(this).val();
		if(dep_id != "") {
			$.ajax({
				url:"ajax/get_dep_desi.php",
				data:{d_id:dep_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#designation").html(resp);
				}
			});
		} else {
			$("#designation").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Designation <span class="text-danger">*</span></label>
												<select class="select" id="designation" name="designation" required>
													<option>Select Designation</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Role <span class="text-danger">*</span></label>
												<select class="select" name="role" required>
													<option>Select Role</option>
													<option value="3">Lead</option>
													<option value="2">Employee</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Status <span class="text-danger">*</span></label>
												<select class="select" name="status" required>
													<option>Select status</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										
										<div class="col-sm-4">  
											<div class="input-block mb-3">
												<label class="col-form-label">Exit Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" id="exit_date" name="exit_date" value type="text"></div>
											</div>
										</div>
									</div>
									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								 <script type="text/javascript" src="jquery.min.js"></script>
								<script>
								const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};
const validate = () => {
  const $result = $('#result');
  const $e_result = $('#e_result');
  const email = $('#email').val();
  const e_email = $('#e_email').val();
  $result.text('');
  $e_result.text('');

  if(validateEmail(email)){
    $result.text(email + ' is valid.');
    $result.css('color', 'green');
  } else{
    $result.text(email + ' is invalid.');
    $result.css('color', 'red');
  }
  return false;
  
  if(validateEmail(e_email)){
    $e_result.text(e_email + ' is valid.');
    $e_result.css('color', 'green');
  } else{
    $e_result.text(e_email + ' is invalid.');
    $e_result.css('color', 'red');
  }
  return false;
}

$('#email').on('input', validate);
$('#e_email').on('input', validate);

function ValidateMobileNumber() {
        var mobileNumber = document.getElementById("phone").value;
        var lblError = document.getElementById("lblError");
        lblError.innerHTML = "";
        var expr = /^(0|91)?[6-9][0-9]{9}$/;
        if (!expr.test(mobileNumber)) {
            lblError.innerHTML = "Invalid Mobile Number.";
        }
    }
								</script>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                

<script>

$(document).ready(function (e) {
	$("#emp_add_Form").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_add.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Employee Modal -->
				<script>
				$(".passingID").click(function () {
    var ids = $(this).attr('data-id');
    var data_fname = $(this).attr('data-fname');
    var data_lname = $(this).attr('data-lname');
    var data_email = $(this).attr('data-email');
    var data_joining_date = $(this).attr('data-joining-date');
    var data_phone = $(this).attr('data-phone');
    var data_company = $(this).attr('data-company');
    var data_department = $(this).attr('data-department');
    var data_designation = $(this).attr('data-designation');
    var data_role = $(this).attr('data-role');
    var data_status = $(this).attr('data-status'); 
    $("#emp_code").val( ids );
    $("#fname").val( data_fname );
    $("#lastname").val( data_lname );
    $("#e_email").val( data_email );
    $("#joining_date").val( data_joining_date );
    $("#e_phone").val( data_phone );
    $("#company").val( data_company );
    $("#e_department").val( data_department );
    $("#e_designation").val( data_designation );
    $("#e_role").val( data_role );
    $("#e_status").val( data_status );
    $('#edit_employee').modal('show');
});
				</script>
				<!-- Edit Employee Modal -->
				<div id="edit_employee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Employee</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="emp_edit_Form" method="post">
									<!--<input id="emp_code" name="emp_code" value="" type="hidden">-->
									<div class="row">
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" id="fname" name="name"  maxlength="20"  type="text">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" id="lastname" name="lastname" maxlength="20"  type="text">
											</div>
										</div>
										<script>
								const validateE_Email = (e_email) => {
  return e_email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};
const e_validate = () => {
  const $e_result = $('#e_result');
  const e_email = $('#e_email').val();
  $e_result.text('');

  if(validateE_Email(e_email)){
    $e_result.text(e_email + ' is valid.');
    $e_result.css('color', 'green');
  } else{
    $e_result.text(e_email + ' is invalid.');
    $e_result.css('color', 'red');
  }
  return false;
}
$('#e_email').on('input', e_validate);
</script>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Email <span class="text-danger">*</span></label>
												<input class="form-control" id="e_email" name="email" type="email">
												<p id="e_result"></p>
											</div>
										</div>
										<div class="col-sm-4">  
											<div class="input-block mb-3">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input type="text" id="emp_code" name="emp_code" value="" readonly class="form-control floating">
											</div>
										</div>
										<div class="col-sm-4">  
											<div class="input-block mb-3">
												<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" id="joining_date" name="joining_date" value type="text"></div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Phone </label>
												<input class="form-control" id="e_phone" name="phone" value="" type="text" maxlength="10">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Company</label>
												<select class="select" id="company" name="company" required>
													<option value="Redot Solutions">Redot Solutions</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select" id="e_department" name="department" required>
													<option>Select Department</option>
													<?php  
                                     $dep_sql = $db->query("select * from departments ORDER BY id ASC");
									if($dep_sql->num_rows>0){
                                    while($dep_row = $dep_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $dep_row['department_name'];?>"><?php echo $dep_row['department_name'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
															<!--<script>
	$(document).ready(function() {
	$("#e_department").change(function() {
		var dep_id = $(this).val();
		if(dep_id != "") {
			$.ajax({
				url:"ajax/get_dep_desi.php",
				data:{d_id:dep_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#e_designation").html(resp);
				}
			});
		} else {
			$("#e_designation").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script>--> 			
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Designation <span class="text-danger">*</span></label>
												<select class="select" id="e_designation" name="designation" required>
													<option>Select Designation</option>
													<?php  
                                     $desig_sql = $db->query("select designation from designation  ORDER BY id ASC");
									if($desig_sql->num_rows>0){
                                    while($desig_row = $desig_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $desig_row['designation'];?>"><?php echo $desig_row['designation'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Role <span class="text-danger">*</span></label>
												<select class="select" id="e_role" name="role">
													<option>Select Role</option>
													<option value="3">Lead</option>
													<option value="2">Employee</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Status <span class="text-danger">*</span></label>
												<select class="select" id="e_status" name="status">
													<option>Select status</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										<div class="col-sm-4">  
											<div class="input-block mb-3">
												<label class="col-form-label">Exit Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" id="exit_date" name="exit_date" value type="text"></div>
											</div>
										</div>
									</div>
									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_edit_Form").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_edit.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res2").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Employee Modal -->
				
				<!-- Delete Employee Modal -->
				<script>
				$(".passingIDDel").click(function () {
    var id = $(this).attr('data-id');
    var data_emp_id = $(this).attr('data-emp-id');
    
    $("#data_id").val( id );
    $("#d_emp_id").val( data_emp_id );
    $('#delete_employee').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_employee" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Employee</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<form id="emp_delete" method="post">
									<div class="row">
										<div class="col-12 text-center">											
									         <input id="data_id" name="data_id" value="" type="hidden">
									         <input class="form-control" id="d_emp_id" name="emp_id" value="" type="text" readonly>
									         </div>
									         <div class="submit-section">
											<button class="btn btn-primary submit-btn">Delete</button>
											</div>
											</form>
										
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#emp_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_delete.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res3").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
										<!--<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Employee Modal -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<?php include 'setting-icon.php';?>
		
       <script src="assets/js/jquery-3.7.0.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Ck Editor JS -->
		<script src="assets/js/ckeditor.js"></script>

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
