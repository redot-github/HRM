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
        <title><?php $pro_data_rep = $_GET['dt'];
                      $timestamp = strtotime($pro_data_rep);
                     $formatted_date = date('M d, Y', $timestamp);
                     echo $formatted_date; ?> Attendance Report - Redot Solutions</title>
		
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
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
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
								<h3 class="page-title"><?php echo $formatted_date; ?> Attendance Report</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>/
									<li class="breadcrumb-item"><a href="attendance-reports.php">Attendance Reports</a></li>
									<li class="breadcrumb-item active"><?php echo $formatted_date; ?> Attendance Report</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Leave Statistics -->
					<!--<div class="row">
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Today Presents</h6>
								<h4>12 / 60</h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Planned Leaves</h6>
								<h4>8 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Unplanned Leaves</h6>
								<h4>0 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Pending Requests</h6>
								<h4>12</h4>
							</div>
						</div>
					</div>-->
					<!-- /Leave Statistics -->
					
					<!-- Search Filter -->
					<form action="" method="post">
					<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-6 col-12">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating" name="emp_code">
								<label class="focus-label">Employee code</label>
							</div>
					   </div>
					   <!--<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating" name="leave_type"> 
									<option> -- Select -- </option>
									<option value="Casual Leave">Casual Leave</option>
									<option value="Medical Leave">Medical Leave</option>
									<option value="Loss of Pay">Loss of Pay</option>
								</select>
								<label class="focus-label">Leave Type</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating" name="status"> 
									<option> -- Select -- </option>
									<option value="Pending"> Pending </option>
									<option value="Approved"> Approved </option>
									<option value="Rejected"> Rejected </option>
								</select>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text" name="from_date">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text" name="to_date">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>-->
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-6 col-12">  
							<button type="submit" name="submit" href="#" class="btn btn-success w-100"> Search </button>  
					   </div>     
                    </div>
                    </form>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<td>S.No</td>
											<th>Employee</th>
											<th>Emp Code</th>
											<th>Designation</th>
											<th>Attendance Status</th>											
										</tr>
									</thead>
									<tbody>
										<?php
// Include the database configuration file
require_once('inc/config.php');
if(isset($_POST["submit"])){
	$dt = $_GET['dt'];
      $emp_code  = mysqli_real_escape_string($db,$_POST['emp_code']);
      
      
      $drepsql = $db->query("SELECT * from attendance WHERE emp_code='$emp_code' AND date='$dt' ORDER BY date DESC");
      
      if($drepsql->num_rows > 0) {
         while($dreprow = $drepsql->fetch_assoc()) { ?>
			   <tr>
											<td><?php echo ++$count;?></td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>-->
													<?php $emp_id = $dreprow['emp_code'];
													$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								                    $pro_results = mysqli_query($db, $prodcatsql1);
								                    $pro_data = $pro_results->fetch_assoc();
													?>
													<a href=""><?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?></a>
												</h2>
											</td>
											<td><?php echo $dreprow['emp_code'];?></td>
											<td><?php echo $pro_data['designation'];?></td>
											<td class="">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-purple"></i> <?php echo $dreprow['attendance'];?>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingappPreData" href="#" data-bs-toggle="modal" data-bs-target="#approve_attendance_present" data-id="<?php echo $dreprow['id'];?>" data-emp-id="<?php echo $dreprow['emp_code'];?>" data-emp-name ="<?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?>" data-date="<?php echo $dreprow['date'];?>" data-status="<?php echo $dreprow['attendance'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Present</a>
														<a class="dropdown-item passingappAbsData" href="#" data-bs-toggle="modal" data-bs-target="#approve_attendance_absent" data-id="<?php echo $dreprow['id'];?>" data-emp-id="<?php echo $dreprow['emp_code'];?>" data-emp-name ="<?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?>" data-date="<?php echo $dreprow['date'];?>" data-status="<?php echo $dreprow['attendance'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Absent</a>
														<a class="dropdown-item passingappHoliData" href="#" data-bs-toggle="modal" data-bs-target="#approve_attendance_holiday" data-id="<?php echo $dreprow['id'];?>" data-emp-id="<?php echo $dreprow['emp_code'];?>" data-emp-name ="<?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?>" data-date="<?php echo $dreprow['date'];?>" data-status="<?php echo $dreprow['attendance'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Holiday</a>
													</div>
												</div>
											</td>
										</tr>
			 <?php }
		 } else {
		 
		 Echo "Not Found in Search";
		 
		 }
       
  } else { ?>
							<?php     // Include the database configuration file
							         require_once('inc/config.php');
							         $dt = $_GET['dt'];
									$sql = $db->query("select * from attendance WHERE date='$dt' ORDER BY emp_code ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo ++$count;?></td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>-->
													<?php $emp_id = $row['emp_code'];
													$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								                    $pro_results = mysqli_query($db, $prodcatsql1);
								                    $pro_data = $pro_results->fetch_assoc();
													?>
													<a href=""><?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?></a>
												</h2>
											</td>
											<td><?php echo $row['emp_code'];?></td>
											<td><?php echo $pro_data['designation'];?></td>
											<td class="">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-purple"></i> <?php echo $row['attendance'];?>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingappPreData" href="#" data-bs-toggle="modal" data-bs-target="#approve_attendance_present" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-emp-name ="<?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?>" data-date="<?php echo $row['date'];?>" data-status="<?php echo $row['attendance'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Present</a>
														<a class="dropdown-item passingappAbsData" href="#" data-bs-toggle="modal" data-bs-target="#approve_attendance_absent" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-emp-name ="<?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?>" data-date="<?php echo $row['date'];?>" data-status="<?php echo $row['attendance'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Absent</a>
														<a class="dropdown-item passingappHoliData" href="#" data-bs-toggle="modal" data-bs-target="#approve_attendance_holiday" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-emp-name ="<?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?>" data-date="<?php echo $row['date'];?>" data-status="<?php echo $row['attendance'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Holiday</a>
													</div>
												</div>
											</td>
											<!--<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingDATA" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"
														data-id="<?php echo $row['id'];?>" 
														data-emp-id="<?php echo $row['emp_code'];?>" 
														data-leave-type="<?php echo $row['leave_type'];?>"
														data-from-date="<?php echo $row['leave_from'];?>"
														data-to-date="<?php echo $row['leave_to'];?>"
														data-days="<?php echo $row['days'];?>"
														data-remain-days="<?php echo $row['remaining_days'];?>"
														data-reason="<?php echo $row['reason'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingDetData" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"  data-id="<?php echo $row['id'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>-->
										</tr>
										<?php } }  } ?>
										<!--<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a>	John Doe  <span>Web Designer</span></a>
												</h2>
											</td>
											<td>Medical Leave</td>
											<td>27 Feb 2019</td>
											<td>27 Feb 2019</td>
											<td>1 day</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>-->
							
					</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<script type="text/javascript" src="jquery.min.js"></script>
				
				
			<!-- Approve Attendance Present Modal -->
				<script>
				$(".passingappPreData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');
	var data_emp_name = $(this).attr('data-emp-name');
	var data_date = $(this).attr('data-date');
	var data_status = $(this).attr('data-status');			
   
    $("#data_id").val( data_id );
    $("#emp_id").val( data_emp_id );
    $("#emp_name").val( data_emp_name );
    $("#date").val( data_date );
    $("#status").val( data_status );
    $('#approve_attendance_present').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="approve_attendance_present" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Attendance Status</h3>
									<p>Are you sure want to change for the Status as <b>Present</b>?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="status_change_present" method="post">
											<div class="row mb-3">
											<div class="col-6 mb-3">
											  <label>Emp Code</label>											  
											  <input class="form-control" id="emp_id" name="emp_id" value="" type="text" readonly>
											</div>
											<div class="col-6 mb-3">
											  <label>Emp Name</label>											  
											  <input class="form-control" id="emp_name" name="emp_name" value="" type="text" readonly>
											</div>
											<div class="col-12 mb-3">
											  <label>Date</label>
											  <input class="form-control" id="date" name="date" value="" type="text" readonly>
											</div>
										<div class="col-6">
									         <input id="data_id" name="data_id" value="" type="hidden">
											<a><button class="btn btn-primary continue-btn">Change</button></a>
											
										</div>
										
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>
										</div>
										</form>
										</div>
										<h4 id="resul" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#status_change_present").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "atttendance_status_change_present.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#resul").html(resp);
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
				</div>
				<!-- /Approve Attendance Present Modal -->
				
				<!-- Approve Attendance Absent Modal -->
				<script>
				$(".passingappAbsData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');
	var data_emp_name = $(this).attr('data-emp-name');
	var data_date = $(this).attr('data-date');
	var data_status = $(this).attr('data-status');			
   
    $("#a_data_id").val( data_id );
    $("#a_emp_id").val( data_emp_id );
    $("#a_emp_name").val( data_emp_name );
    $("#a_date").val( data_date );
    $("#a_status").val( data_status );
    $('#approve_attendance_absent').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="approve_attendance_absent" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Attendance Status</h3>
									<p>Are you sure want to change for the Status as <b>Absent</b>?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="status_change_absent" method="post">
											<div class="row mb-3">
											<div class="col-6 mb-3">
											  <label>Emp Code</label>											  
											  <input class="form-control" id="a_emp_id" name="emp_id" value="" type="text" readonly>
											</div>
											<div class="col-6 mb-3">
											  <label>Emp Name</label>											  
											  <input class="form-control" id="a_emp_name" name="emp_name" value="" type="text" readonly>
											</div>
											<div class="col-12 mb-3">
											  <label>Date</label>
											  <input class="form-control" id="a_date" name="date" value="" type="text" readonly>
											</div>
										<div class="col-6">
									         <input id="a_data_id" name="data_id" value="" type="hidden">									         
											<a><button class="btn btn-primary continue-btn">Change</button></a>
											
										</div>
										
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>
										</div>
										</form>
										</div>
										<h4 id="resul2" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#status_change_absent").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "atttendance_status_change_absent.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#resul2").html(resp);
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
				</div>
				<!-- /Approve Attendance Absent Modal -->
				
				<!-- Approve Attendance Holiday Modal -->
				<script>
				$(".passingappHoliData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');
	var data_emp_name = $(this).attr('data-emp-name');
	var data_date = $(this).attr('data-date');
	var data_status = $(this).attr('data-status');			
   
    $("#h_data_id").val( data_id );
    $("#h_emp_id").val( data_emp_id );
    $("#h_emp_name").val( data_emp_name );
    $("#h_date").val( data_date );
    $("#h_status").val( data_status );
    $('#approve_attendance_holiday').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="approve_attendance_holiday" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Attendance Status</h3>
									<p>Are you sure want to change for the Status as <b>Holiday</b>?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="status_change_holiday" method="post">
											<div class="row mb-3">
											<div class="col-6 mb-3">
											  <label>Emp Code</label>											  
											  <input class="form-control" id="h_emp_id" name="emp_id" value="" type="text" readonly>
											</div>
											<div class="col-6 mb-3">
											  <label>Emp Name</label>											  
											  <input class="form-control" id="h_emp_name" name="emp_name" value="" type="text" readonly>
											</div>
											<div class="col-12 mb-3">
											  <label>Date</label>
											  <input class="form-control" id="h_date" name="date" value="" type="text" readonly>
											</div>
										<div class="col-6">
									         <input id="h_data_id" name="data_id" value="" type="hidden">									         
											<a><button class="btn btn-primary continue-btn">Change</button></a>
											
										</div>
										
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>
										</div>
										</form>
										</div>
										<h4 id="resul3" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#status_change_holiday").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "atttendance_status_change_holiday.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#resul3").html(resp);
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
				</div>
				<!-- /Approve Attendance Holiday Modal -->
				
				<!-- Add Leave Modal -->
				<div id="add_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="leave_apply" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<input name="emp_name" value="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave 12 Days">Casual Leave 12 Days</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="Loss of Pay">Loss of Pay</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_from">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_to">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Number of days <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="no_of_days">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
										
										<input class="form-control" readonly value="" type="text" name="remain_days">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" name="reasons"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#leave_apply").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_apply.php",
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
				<!-- /Add Leave Modal -->
				
				<!-- Edit Leave Modal -->
				<script>
				$(".passingDATA").click(function () {
	var le_id = $(this).attr('data-id');				
    var emp_code = $(this).attr('data-emp-id');
    var data_leave_type = $(this).attr('data-leave-type');
    var data_from_date = $(this).attr('data-from-date');
    var data_to_date = $(this).attr('data-to-date');
    var data_days = $(this).attr('data-days');
    var data_remain_days = $(this).attr('data-remain-days');
    var data_reason = $(this).attr('data-reason');
    $("#lea_id").val( le_id );
    $("#emp_code").val( emp_code );
    $("#leave_type").val( data_leave_type );
    $("#from_date").val( data_from_date );
    $("#to_date").val( data_to_date );
    $("#days").val( data_days );
    $("#remain_days").val( data_remain_days );
    $("#reason").val( data_reason );
    $('#edit_leave').modal('show');
});
				</script>
				<div id="edit_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="emp_leave_edit" method="post">
									<input id="lea_id" name="lea_id" value="" type="hidden">
									<input id="emp_code" name="emp_code" value="" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" id="leave_type" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave 12 Days">Casual Leave 12 Days</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="Loss of Pay">Loss of Pay</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" id="from_date" name="from_date" value="" type="text">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" id="to_date" name="to_date" value="" type="text">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Number of days <span class="text-danger">*</span></label>
										<input class="form-control" readonly type="text" id="days" name="days" value="2">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
										<input class="form-control" readonly value="" id="remain_days" name="remain_days" type="text">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" id="reason" name="reason"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_leave_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_edit.php",
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
				<!-- /Edit Leave Modal -->

				<!-- Approve Leave Modal -->
				<script>
				$(".passingappData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');
	var data_date = $(this).attr('data-date');
	var data_status = $(this).attr('data-status');			
   
    $("#data_id").val( data_id );
    $("#emp_id").val( data_emp_id );
    $("#date").val( data_date );
    $("#status").val( data_status );
    $('#approve_attendance').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="approve_attendance" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Attendance Status</h3>
									<p>Are you sure want to change for the Status?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="status_change" method="post">
											<div class="row mb-3">
											<div class="col-12">
											  <label>Status</label>
											  <select class="select floating" id="status" name="attendance_status"> 
									<option> -- Select -- </option>
									<option value="P">Present</option>
									<option value="A">Absent</option>
									<option value="Holiday">Holiday</option>
								</select>
											</div>
											</div>
											<div class="row mt-2">
										<div class="col-6">
									         <input id="data_id" name="data_id" value="" type="hidden">
									         <input id="emp_id" name="emp_id" value="" type="hidden">
									         <input id="date" name="date" value="" type="hidden">
									         
											<a><button class="btn btn-primary continue-btn">Change</button></a>
											
										</div>
										
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>
										</div>
										</form>
										</div>
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#status_change").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "atttendance_status_change.php",
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
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Approve Leave Modal -->
				
				<!-- Delete Leave Modal -->
				<div class="modal custom-modal fade" id="delete_approve" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Leave</h3>
									<p>Are you sure want to delete this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Leave Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<?php include 'setting-icon.php';?>

		<!-- jQuery -->
       <script src="assets/js/jquery-3.7.0.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
