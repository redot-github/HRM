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
        <title>Shift & Schedule - Redot Solutions</title>
		
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
						<div class="row">
							<div class="col">
								<h3 class="page-title">Daily Scheduling</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="employees.php">Employees</a></li>
                                    <li class="breadcrumb-item active">Shift Scheduling</li>
								</ul>
                            </div>
                            <div class="col-auto float-end ms-auto">
								<a href="shift-list.php" class="btn add-btn m-r-5">Shifts</a>
								<a href="#" class="btn add-btn m-r-5" data-bs-toggle="modal" data-bs-target="#add_schedule"> Assign Shifts</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Content Starts -->
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee</label>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-3"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option>All Department</option>
									<option value="1">Finance</option>
                                    <option value="2">Finance and Management</option>
                                    <option value="3">Hr & Finance</option>
                                    <option value="4">ITech</option>
								</select>
								<label class="focus-label">Department</label>
							</div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
							<div class="input-block mb-3 form-focus focused">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
							<div class="input-block mb-3 form-focus focused">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-2">  
							<a href="#" class="btn btn-success w-100"> Search </a>  
						</div>     
                    </div>
					<!-- Search Filter -->

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Department</th>
											<th>Date</th>
											<th>Shift</th>
											<th>Start Timing</th>
											<th>End Timing</th>
											<th>Break Timing</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>							
										<?php
									$sql = $db->query("select * from shift_scheduling ORDER BY Date DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>-->
													<a href=""><?php 
													$sql2 = $db->query("select * from manage_emp WHERE emp_code='".$row['emp_code']."'");
													if($sql2->num_rows>0){
                                                    while($pro_data = $sql2->fetch_assoc()){ 
													echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?> - <?php echo $pro_data['designation']; } }?></a>
												</h2>
											</td>
											<td><?php echo $row['department'];?></td>
											<td><?php echo $row['date'];?></td>
											<td><?php echo $row['shift_type'];?></td>
											<td><b>Min Start Time :</b><?php echo $row['min_start_time'];?><br>
											    <b>Start Time :</b><?php echo $row['start_time'];?><br>
											    <b>Max Start Time :</b><?php echo $row['max_start_time'];?><br>
											</td>
											<td><b>Min End Time :</b><?php echo $row['min_end_time'];?><br>
											    <b>End Time :</b><?php echo $row['end_time'];?><br>
											    <b>Max End Time :</b><?php echo $row['max_end_time'];?><br>
											</td>
											<td class="text-center">
												<?php echo $row['break_time'];?>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingShiDATA" href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule" 
														 data-id="<?php echo $row['id'];?>" 
														 data-emp-id="<?php echo $row['emp_code'];?>"
														 data-department="<?php echo $row['department'];?>"
														 data-date="<?php echo $row['date'];?>"
														 data-shift="<?php echo $row['shift_type'];?>"
														 data-min-start="<?php echo $row['min_start_time'];?>"
														 data-start="<?php echo $row['start_time'];?>"
														 data-max-start="<?php echo $row['max_start_time'];?>"
														 data-min-end="<?php echo $row['min_end_time'];?>"
														 data-end="<?php echo $row['end_time'];?>"
														 data-max-end="<?php echo $row['max_end_time'];?>"
														 data-break="<?php echo $row['break_time'];?>" ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<?php } } ?>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Content End -->
					
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->
			
				<!-- Add Schedule Modal -->
				<div id="add_schedule" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Schedule</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="add_shift_schedule" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select" name="department">
											<option>Select Department</option>
											<?php  
                                     $sql = $db->query("select * from departments ORDER BY id DESC");
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>											
											<option value="<?php echo $row['department_name'];?>"><?php echo $row['department_name'];?></option>
											<?php }} ?>
										       </select>
											</div>
										</div>
										<div class="col-sm-6">
                                            <div class="input-block mb-3">
												<label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
												<select class="select" name="emp_code">
											<option>Select Employee</option>
											<?php  
                                     $sql = $db->query("select * from manage_emp WHERE designation!='Admin' ORDER BY emp_code ASC");
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>											
											<option value="<?php echo $row['emp_code'];?>"><?php echo $row['name'];?> <?php echo $row['last_name'];?></option>
											<?php }} ?>
										</select>
											</div>
										</div>
										<div class="col-sm-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">Date</label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="date"></div>
                                            </div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Shifts <span class="text-danger">*</span></label>
												<select class="select" name="shift">
													<option value="">Select </option>
                                                    <option value="10'o clock Shift">10'o clock Shift</option>
                                                    <option value="10:30 shift">10:30 shift</option>
                                                    <option value="Daily Shift">Daily Shift </option>
                                                    <option value="New Shift">New Shift</option>
												</select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="min_st_time"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="st_time"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="max_st_time"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="min_end_time"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">End Time   <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="end_time"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="max_end_time"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text"  name="break_time">
											</div>
										</div>
										<!--<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Accept Extra Hours </label>
												<div class="form-check form-switch">
													<input type="checkbox" class="form-check-input" name ="extra_hours" id="customSwitch1" checked="">
													<label class="form-check-label" for="customSwitch1"></label>
												  </div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Publish </label>
												<div class="form-check form-switch">
													<input type="checkbox" class="form-check-input" name="publish" id="customSwitch2" checked="">
													<label class="form-check-label" for="customSwitch2"></label>
												  </div>
											</div>
										</div>-->
									</div>
								
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#add_shift_schedule").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "shift_schedule_add.php",
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
                <!-- /Add Schedule Modal -->
                
                <!-- Edit Schedule Modal -->
                <script>
				$(".passingShiDATA").click(function () {
	var sh_id = $(this).attr('data-id');				
    var emp_code = $(this).attr('data-emp-id');
    var data_department = $(this).attr('data-department');
    var data_date = $(this).attr('data-date');
    var data_shift = $(this).attr('data-shift');
    var data_min_start = $(this).attr('data-min-start');
    var data_start = $(this).attr('data-start');
    var data_max_start = $(this).attr('data-max-start');
    var data_min_end = $(this).attr('data-min-end');
    var data_end = $(this).attr('data-end');
    var data_max_start = $(this).attr('data-max-start');
    var data_max_start = $(this).attr('data-max-start');
    
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
				<div id="edit_schedule" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Schedule</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select">
                                                    <option value="">Select</option>
													<option selected value="">Development</option>
                                                    <option value="1">Finance</option>
                                                    <option value="2">Finance and Management</option>
                                                    <option value="3">Hr & Finance</option>
                                                    <option value="4">ITech</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
                                            <div class="input-block mb-3">
												<label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
												<select class="select">
													<option value="">Select </option>
                                                    <option selected value="1">Richard Miles </option>
                                                    <option value="2">John Smith</option>
                                                    <option value="3">Mike Litorus </option>
                                                    <option value="4">Wilmer Deluna</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Shifts <span class="text-danger">*</span></label>
												<select class="select">
													<option value="">Select </option>
                                                    <option value="1">10'o clock Shift</option>
                                                    <option value="2">10:30 shift</option>
                                                    <option value="3">Daily Shift </option>
                                                    <option  selected value="4">New Shift</option>
												</select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text" value="06:11 am">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text" value="06:30 am">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text" value="08:12 am">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text" value="09:12 pm">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">End Time   <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text" value="09:30 pm">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text" value="09:45 pm">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text" value="45">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="customCheck1">
												<label class="form-check-label" for="customCheck1">Recurring Shift</label>
										  	</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Repeat Every</label>
												<select class="select">
													<option value="">1 </option>
                                                    <option value="1">2</option>
                                                    <option value="2">3</option>
                                                    <option value="3">4</option>
													<option  selected value="4">5</option>
													<option value="3">6</option>
												</select>
												<label class="col-form-label">Week(s)</label>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3 wday-box">
												
													<label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="monday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">M</span></label>
				
													<label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="tuesday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">T</span></label>
												
													<label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="wednesday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">W</span></label>
												
													<label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="thursday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">T</span></label>
												
													<label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="friday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">F</span></label>
												
													<label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="saturday" class="days recurring" onclick="return false;"><span class="checkmark">S</span></label>
												
													<label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="sunday" class="days recurring" onclick="return false;"><span class="checkmark">S</span></label>
											</div>
										</div>
										<div class="col-sm-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">End On <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
										</div>
										<div class="col-sm-12">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="customCheck2">
												<label class="form-check-label" for="customCheck2">Indefinite</label>
										  	</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Accept Extra Hours </label>
												<div class="form-check form-switch">
													<input type="checkbox" class="form-check-input" id="customSwitch3" checked="">
													<label class="form-check-label" for="customSwitch3"></label>
												  </div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Publish </label>
												<div class="form-check form-switch">
													<input type="checkbox" class="form-check-input" id="customSwitch4" checked="">
													<label class="form-check-label" for="customSwitch4"></label>
												  </div>
											</div>
										</div>
									</div>
								
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Schedule Modal -->
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
            
            <!-- Datetimepicker JS -->
            <script src="assets/js/moment.min.js"></script>
            <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
            
            <!-- Datatable JS -->
            <script src="assets/js/jquery.dataTables.min.js"></script>
            <script src="assets/js/dataTables.bootstrap4.min.js"></script>
            
            <!-- Theme Settings JS -->
			<script src="assets/js/layout.js"></script>
			<script src="assets/js/theme-settings.js"></script>
			<script src="assets/js/greedynav.js"></script>
			
			<!-- Custom JS -->
            <script src="assets/js/app.js"></script>
		
    </body>
</html>
