<?php 
error_reporting(E_ERROR | E_PARSE);
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
  require_once('inc/config.php');
								$id= $_SESSION['username'];
								$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$id'";
								$pro_results = mysqli_query($db, $prodcatsql1);
								$pro_data = $pro_results->fetch_assoc();
			$task_id = $_GET['id'];
			$task_name = $_GET['name'];	
			if($role_id == 2){
			$tasksql = "SELECT * FROM emp_tasks WHERE id='$task_id' AND task_name='$task_name' AND to_emp = '$id'";
		   } if($role_id == 3){
			   $tasksql = "SELECT * FROM emp_tasks WHERE id='$task_id' AND task_name='$task_name' AND lead_emp_code = '$id'";
		   }
		   if($role_id == 1){
			   $tasksql = "SELECT * FROM emp_tasks WHERE id='$task_id' AND task_name='$task_name'";
		   }
								$task_results = mysqli_query($db, $tasksql);
						
								$task_data = $task_results->fetch_assoc();				
								?>

<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title><?php echo $task_name; ?> Task - Redot Solutions</title>
		
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
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
		
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
							<div class="col-sm-12">
								<h3 class="page-title"><?php echo $task_name; ?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="tasks-emp.php">Tasks</a></li>
									<li class="breadcrumb-item active"><?php echo $task_name; ?></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="">
											<div class="row">
												<h3 class="card-title">Task Info</h3>
												<div class="col-md-5">
													<div class="profile-info-left">
														
														<div class="staff-id"><h4>Client : <span style="color: #140edb;"><?php echo $task_data['client']; ?></span></h4></div>
														<div class="staff-id"><h4>Project : <span style="color: #140edb;"><?php echo $task_data['project_name']; ?></span></h4></div>
														<div class="staff-id"><h4>Team name : <span style="color: #140edb;"><?php echo $task_data['team_name']; ?></span></h4></div>
														<div class="staff-id"><h4>Task Name : <span style="color: #140edb;"><?php echo $task_data['task_name']; ?></span></h4></div>
														<div class="staff-id"><h4>Priority : <span style="color: #140edb;"><?php echo $task_data['priority']; ?></span></h4></div>
														<div class="staff-id"><h4>Due Date : <span style="color: #140edb;"><?php $task_due_date = $task_data['due_date'];
                                	          $timestamp1 = strtotime($task_due_date);
                                	          $due_date = date('M d, Y', $timestamp1);
                                	          echo $due_date; ?></span></h4></div>
														<div class="staff-id"><h4>Status : <span style="color: #140edb;"><?php echo $task_data['status']; ?></span></h4></div>
														<div class="staff-id"><h4>Task Assign Date : <span style="color: #140edb;"><?php $task_assign_data = $task_data['created_on'];
                                	          $timestamp2 = strtotime($task_assign_data);
                                	          $assign_data = date('M d, Y', $timestamp2);
                                	          echo $assign_data;  ?></span></h4></div>
                                	                   <div class="staff-id"><h4>Report To : <span style="color: #140edb;"><?php echo $task_data['lead_name']; ?></span></h4></div>
                                	                   <div class="staff-id"><h4>Task Points : <span style="color: #140edb;"><?php echo $task_data['task_points']; ?></span></h4></div>
													</div>
													
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<div class="title">Description:</div>
															<div class="text"><p><?php echo $task_data['description']; ?></p></div>
														</li>
														
													</ul>
												</div>
											</div>
										</div>
										<div class="pro-edit"><!--<a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa-solid fa-pencil"></i></a>--></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="tab-content">
					
						<!-- Task Report Tab -->
						<div id="" class="pro-overview tab-pane fade show active">
							<div class="row">
								<div class="col-md-12 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Task Report 
											<?php if($role_id == 2){ ?>
											      <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#task_report_modal"><i class="fa-solid fa-pencil"></i></a>
											<?php } if($role_id == 3){ ?> 
												<a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#task_lead_report"><i class="fa-solid fa-pencil"></i></a>
												<?php } ?>     
											      </h3>
											<ul class="personal-info">
												<li>
													<div class="title"><h4>Project Report Phase : </h4></div>
													<h4><span style="color: #078c0f;"><?php echo $task_data['report_phase']; ?></span></h4>
												</li>
												<li>
													<div class="title"><h4>Task Progress status : </h4></div>
													<h4><span style="color: #078c0f;">Completed <?php echo $task_data['report_progress_status']; ?>%</span></h4>
												</li>
												<div class="progress progress-lg mb-2">
                                                           <div class="progress-bar bg-info w-<?php echo $task_data['report_progress_status']; ?>" role="progressbar" aria-valuenow="<?php echo $task_data['report_progress_status']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
												<li>
													<div class="title"><h4>Task Report Status : </h4></div>
													<h4><span style="color: #078c0f;"><?php echo $task_data['report_status']; ?></span></h4>
												</li>
												<li>
													<div class="title"><h4>Report Description : </h4></div>
													<p><span style="color: #078c0f;"><?php echo $task_data['report_description']; ?></span></p>
												</li>
												<li>
													<div class="title"><h4>Report Submit on : </h4></div>
													<h4><span style="color: #078c0f;"><?php $task_report_date = $task_data['report_on']; 
													$timestamp2 = strtotime($task_report_date);
                                	          $report_date = date('M d, Y', $timestamp2);
                                	          echo $report_date;?></span></h4>
												</li>
												<li>
													<div class="title"><h4>Task Points Given : </h4></div>
													<h4><span style="color: #078c0f;"><?php echo $task_data['task_points_approval']; ?></span></h4>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
							
								
							</div>
						</div>
						<!-- /Profile Info Tab -->
						
						
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Task Report Modal -->
				<div id="task_report_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Task Report</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								
								<form id="task_report_add" method="post">
									<input name="emp_code" value="<?php echo $id; ?>" type="hidden">
									<input name="task_id" value="<?php echo $task_id; ?>" type="hidden">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Client</label>
														<input type="text" class="form-control" name="first_name" value="<?php echo $task_data['client']; ?>" readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Project</label>
														<input type="text" class="form-control" name="project_name" value="<?php echo $task_data['project_name']; ?>" readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Team name </label>
															<input class="form-control" type="text" name="team_name" value="<?php echo $task_data['team_name']; ?>" readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Task Name</label>
														<input class="form-control" type="text" name="task_name" value="<?php echo $task_data['task_name']; ?>" readonly>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Priority</label>
												<input type="text" class="form-control" name="priority" value="<?php echo $task_data['priority']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Due Date</label>
												<input type="text" class="form-control" name="due_date" value="<?php echo $task_data['due_date']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<input type="text" class="form-control" name="status" value="<?php echo $task_data['status']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign Date</label>
												<input type="text" class="form-control" name="assign_date" value="<?php echo $assign_data; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Report To</label>
												<input type="text" class="form-control" name="lead_name" value="<?php echo $task_data['lead_name']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Project Report Phase<span class="text-danger">*</span></label>
												<select class="select" name="report_phase" required>
													<option>Select Phase</option>
													<option value="Phase 1">Phase 1</option>
													<option value="Phase 2">Phase 2</option>
													<option value="Phase 3">Phase 3</option>
													<option value="Phase 4">Phase 4</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Task Progress status Percentage<span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="progress_status"  value="<?php echo $task_data['report_progress_status']; ?>" required>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Task Report Status<span class="text-danger">*</span></label>
												<select class="select" name="report_status" required>
													<option>Select Status</option>
													<option value="Begin">Begin</option>
													<option value="Pending">Pending</option>
													<option value="Progress">Progress</option>
													<option value="On Hold">On Hold</option>
													<option value="Review">Review</option>
													<option value="Completed">Completed</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Report Description <span class="text-danger">*</span></label>
												<textarea class="form-control" name="report_description" required><?php echo $task_data['report_description']; ?></textarea>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<br><br>
							<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#task_report_add").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "task_emp_report_update.php",
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
				<!-- /Task Report Modal -->
				
				<!-- Task Report Modal -->
				<div id="task_lead_report" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Task Report</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								
								<form id="task_lead_reports" method="post">
									<input name="emp_code" value="<?php echo $id; ?>" type="hidden">
									<input name="task_id" value="<?php echo $task_id; ?>" type="hidden">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Client</label>
														<input type="text" class="form-control" name="first_name" value="<?php echo $task_data['client']; ?>" readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Project</label>
														<input type="text" class="form-control" name="project_name" value="<?php echo $task_data['project_name']; ?>" readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Team name </label>
															<input class="form-control" type="text" name="team_name" value="<?php echo $task_data['team_name']; ?>" readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Task Name</label>
														<input class="form-control" type="text" name="task_name" value="<?php echo $task_data['task_name']; ?>" readonly>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Priority</label>
												<input type="text" class="form-control" name="priority" value="<?php echo $task_data['priority']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Due Date</label>
												<input type="text" class="form-control" name="due_date" value="<?php echo $task_data['due_date']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<input type="text" class="form-control" name="status" value="<?php echo $task_data['status']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign Date</label>
												<input type="text" class="form-control" name="assign_date" value="<?php echo $assign_data; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Report To</label>
												<input type="text" class="form-control" name="lead_name" value="<?php echo $task_data['lead_name']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Task Progress status Percentage</label>
												<input type="text" class="form-control" name="progress_status"  value="<?php echo $task_data['report_progress_status']; ?>" readonly>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Task Report Status</label>
												<input type="text" class="form-control" name="report_status"  value="<?php echo $task_data['report_status']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Task Report Submission on</label>
												<input type="text" class="form-control" name="report_on"  value="<?php echo $task_data['report_on']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Report Description</label>
												<textarea class="form-control" name="report_description" readonly><?php echo $task_data['report_description']; ?></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Points for Task</label>
												<input type="text" class="form-control" name="task_points"  value="<?php echo $task_data['task_points']; ?>" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Points give for Task</label>
												<input type="text" class="form-control" name="task_points_given" value="<?php echo $task_data['task_points_approval']; ?>">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<br><br>
							<h4 id="res1" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#task_lead_reports").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "task_lead_report_update.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res1").html(resp);
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
				<!-- /Task Report Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<?php include 'setting-icon.php';?>
		
		<!-- jQuery -->
       <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.0.min.js"></script>

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
		
		<!-- Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
