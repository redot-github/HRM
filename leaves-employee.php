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
        <title>Leaves - Redot Solutions</title>
		
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
								<h3 class="page-title">Leaves</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leaves</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leave"><i class="fa-solid fa-plus"></i> Apply Leave</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Leave Statistics -->
					<?php 
					$remainleavesql2 = "SELECT * FROM emp_leave_status  WHERE emp_code = '$id'";
								$remain_results2 = mysqli_query($db, $remainleavesql2);
								$remain_data2 = $remain_results2->fetch_assoc();
								$leave_emp_casual_leave = $remain_data2['casual_leave'];
								$leave_emp_medical_leave = $remain_data2['medical_leave'];
								$leave_emp_casual_leave_remains = $remain_data2['casual_leave_balance'];
								$leave_emp_medical_leave_remains = $remain_data2['medical_leave_balance'];
					?>
					<div class="row">
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Annual Leave</h6>
								<h4><?php $total =  $leave_emp_casual_leave + $leave_emp_medical_leave; echo $total; ?></h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Casual Leave</h6>
								<h4><?php echo $leave_emp_casual_leave; ?></h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Medical Leave</h6>
								<h4><?php echo $leave_emp_medical_leave; ?></h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Remaining Leave</h6>
								<h4><?php $total2 = $leave_emp_casual_leave_remains + $leave_emp_medical_leave_remains; echo $total2; ?></h4>
							</div>
						</div>
					</div>
					<!-- /Leave Statistics -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table leave-employee-table mb-0 datatable">
									<thead>
										<tr>
											<th>Leave Type</th>
											<th>From</th>
											<th>To</th>
											<th>No of Days</th>
											<th>Reason</th>
											<th class="text-center">Status</th>
											<th>Approved by</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
									$sql = $db->query("select * from emp_leaves where emp_code='$id' ORDER BY id DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo $row['leave_type'];?></td>
											<td><?php 
											   $pro_data1 = $row['leave_from'];
                                	          $timestamp1 = strtotime($pro_data1);
                                	          $formatted_date1 = date('F d, Y', $timestamp1);
                                	          echo $formatted_date1; ?>
											</td>
											<td><?php 
											   $pro_data2 = $row['leave_to'];
                                	          $timestamp2 = strtotime($pro_data2);
                                	          $formatted_date2 = date('F d, Y', $timestamp2);
                                	          echo $formatted_date2; ?></td>
											<td><?php echo $row['days'];?> days</td>
											<td><?php echo $row['reason'];?></td>
											<td class="text-center">
												<div class="action-label mb-1">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-purple"></i> <?php echo $row['status'];?>
													</a>
												</div>
												<?php if($row['status'] == 'Pending') {
													   echo $row['pending_comment'];
												      }
													  if($row['status'] == 'Declined') {
													   echo $row['decline_comment'];
													  }?>
											</td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>-->
													
														<?php if($row['approve_by'] == 'Admin'){ 
															echo "Admin";
															 } else {
														$app_id = $row['approve_by'];
								$leadsql = "SELECT * FROM manage_emp WHERE emp_code = '$app_id'";
								$lead_results = mysqli_query($db, $leadsql);
								$lead_data = $lead_results->fetch_assoc();
								?>
														<?php echo $lead_data['name'];?> <?php echo $lead_data['last_name'];?> (<?php echo $lead_data['emp_code'];?>)
													<?php } ?>
												</h2>
											</td>
											<td class="text-end">
												<?php if($row['status'] == 'Pending' || $row['status'] == 'Declined'){ ?>
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
														data-reason="<?php echo $row['reason'];?>">
														<i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingDetData" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve" 
														data-id="<?php echo $row['id'];?>" 
														data-emp-id="<?php echo $row['emp_code'];?>" 
														data-leave-type="<?php echo $row['leave_type'];?>"
														data-from-date="<?php echo $row['leave_from'];?>"
														data-to-date="<?php echo $row['leave_to'];?>"
														data-days="<?php echo $row['days'];?>"
														data-remain-days="<?php echo $row['remaining_days'];?>"
														data-reason="<?php echo $row['reason'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
												<?php } ?>
											</td>
										</tr>
										<?php }} ?>
										<!--<tr>
											<td>Medical Leave</td>
											<td>27 Feb 2019</td>
											<td>27 Feb 2019</td>
											<td>1 day</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-success"></i> Approved
													</a>
												</div>
											</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="#">Richard Miles</a>
												</h2>
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
				
				<!-- Add Leave Modal -->
				<div id="add_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Apply Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<?php 
								 $id= $_SESSION['username'];
								$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$id'";
								$pro_results = mysqli_query($db, $prodcatsql1);
								$pro_data = $pro_results->fetch_assoc();
								?>
								<?php 
										/*$remainleavesql = "SELECT * FROM emp_leaves WHERE emp_code = '$id'";
								$remain_results = mysqli_query($db, $remainleavesql);
								$remain_data = $remain_results->fetch_assoc();
								$leave_emp_day = $remain_data['days'];*/
								$remainleavesql2 = "SELECT * FROM emp_leave_status  WHERE emp_code = '$id'";
								$remain_results2 = mysqli_query($db, $remainleavesql2);
								$remain_data2 = $remain_results2->fetch_assoc();
								$leave_emp_casual_leave = $remain_data2['casual_leave'];
								$leave_emp_medical_leave = $remain_data2['medical_leave'];
								
										?>
								<form id="leave_apply" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<input name="emp_name" value="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>" type="hidden">
									<input name="lead_emp_code" value="<?php echo $pro_data['lead_emp_code']; ?>" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave">Casual Leave</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="WFH">Work From Home</option>
											<option value="LOP">Loss Of Pay</option>
											<option value="Compentary Off">Compentary Off</option>
											<option value="Pandemic Leave">Pandemic Leave</option>
											<option value="Paternity Leave">Paternity Leave</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_from">
										</div>
									</div>
									<script>
$(function(){
    $('#datepicker').datepicker({
        format: 'mm-dd-yyyy',
        startDate: '-62d',
        endDate: '+62d',
        autoclose: true
    });
});
</script>
									<div class="input-block mb-3">
										<label class="col-form-label">To <span class="text-danger">*</span></label>
										<input class="form-control datetimepicker" id="datepicker" type="text" data-date-start-date="+1m" name="leave_to">
										
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Number of days <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="no_of_days">
									</div>
										<input class="form-control" value="" type="hidden" name="remain_days">									
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
									<input name="lead_emp_code" value="<?php echo $pro_data['lead_emp_code']; ?>" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" id="leave_type" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave">Casual Leave</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="WFH">Work From Home</option>
											<option value="LOP">Loss Of Pay</option>
											<option value="Compentary Off">Compentary Off</option>
											<option value="Pandemic Leave">Pandemic Leave</option>
											<option value="Paternity Leave">Paternity Leave</option>
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
										<input class="form-control" type="text" id="days" name="days">
									</div>
										<input class="form-control" value="" id="remain_days" name="remain_days" type="hidden">
									
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
				
				<!-- Delete Leave Modal -->
				
				<script>
				$(".passingDetData").click(function () {
	var data_id = $(this).attr('data-id');
	var emp_code = $(this).attr('data-emp-id');
    var data_leave_type = $(this).attr('data-leave-type');
    var data_from_date = $(this).attr('data-from-date');
    var data_to_date = $(this).attr('data-to-date');
    var data_days = $(this).attr('data-days');
    var data_remain_days = $(this).attr('data-remain-days');
    var data_reason = $(this).attr('data-reason');				
   
    $("#data_id").val( data_id );
    $("#del_emp_code").val( emp_code );
    $("#del_leave_type").val( data_leave_type );
    $("#del_from_date").val( data_from_date );
    $("#del_to_date").val( data_to_date );
    $("#del_days").val( data_days );
    $("#del_remain_days").val( data_remain_days );
    $("#del_reason").val( data_reason );
    $('#delete_leave').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_leave" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Leave</h3>
									<p>Are you sure want to Cancel this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="emp_leave_delete" method="post">
										<div class="col-12">
									         <input id="data_id" name="data_id" value="" type="hidden">
									         <label class="mb-2">Leave Type</label>
									         <input class="form-control" id="del_leave_type" name="leave_type" type="text" readonly>
										     <label class="mb-2">From Date</label>
									         <input class="form-control" id="del_from_date" name="from_date" type="text" readonly>
									          <label class="mb-2">To date</label>
									         <input class="form-control" id="del_to_date" name="to_date" type="text" readonly>
									         <label class="mb-2">No of Days</label>
									         <input class="form-control" id="del_days" name="days" type="text" readonly>
									         <label class="mb-2">Reason</label>
									         <input class="form-control" id="del_reason" name="reason" type="text" readonly>
										<div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Delete</button></a>
										</div>
										</div>
										</form>
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_leave_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_delete.php",
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
