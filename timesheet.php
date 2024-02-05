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
        <meta name="description" content="">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Timesheet - Redot Solutions</title>
		
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
								<h3 class="page-title">Timesheet</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Timesheet</li>
								</ul>
							</div>
							<!--<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_todaywork"><i class="fa-solid fa-plus"></i> Add Today Work</a>
							</div>-->
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Date</th>
											<th>Projects</th>
											<th class="text-center">Assigned Hours</th>
											<th class="text-center">Hours</th>
											<th class="d-none d-sm-table-cell">Description</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php  // Include the database configuration file
										require_once('inc/config.php');
                                     $sql = $db->query("select * from timesheet ORDER BY date DESC");
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>-->
													<?php $emp_id = $row['emp_code'];
													$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								                    $pro_results = mysqli_query($db, $prodcatsql1);
								                    $pro_data = $pro_results->fetch_assoc();
													?>
													<a href=""><?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?><span> <?php echo $pro_data['designation'];?></span></a>
												</h2>
											</td>
											<td>
												<?php $pro_data_date = $row['date'];
                                	          $timestamp = strtotime($pro_data_date);
                                	          $formatted_date = date('M d, Y', $timestamp);
                                	          echo $formatted_date; ?></td>
											<td>
												<h2><?php echo $row['project'];?></h2>
											</td>
											<td class="text-center"><?php echo $row['total_hours'];?></td>
											<td class="text-center"><?php echo $row['hours'];?></td>
											<td class="d-none d-sm-table-cell col-md-4"><?php echo $row['description'];?></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_todaywork"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_workdetail"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<?php }} ?>
										<!--<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="profile.php">Richard Miles <span>Web Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Project Management</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_todaywork"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_workdetail"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
				
				<!-- Add Today Work Modal -->
				<div id="add_todaywork" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Today Work details</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="input-block mb-3 col-sm-6">
											<label class="col-form-label">Project <span class="text-danger">*</span></label>
											<select class="select">
												<option>Office Management</option>
												<option>Project Management</option>
												<option>Video Calling App</option>
												<option>Hospital Administration</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="input-block mb-3 col-sm-4">
											<label class="col-form-label">Deadline <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" type="text" value="5 May 2019" readonly>
											</div>
										</div>
										<div class="input-block mb-3 col-sm-4">
											<label class="col-form-label">Total Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="100" readonly>
										</div>
										<div class="input-block mb-3 col-sm-4">
											<label class="col-form-label">Remaining Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="60" readonly>
										</div>
									</div>
									<div class="row">
										<div class="input-block mb-3 col-sm-6">
											<label class="col-form-label">Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
										<div class="input-block mb-3 col-sm-6">
											<label class="col-form-label">Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Today Work Modal -->
				
				<!-- Edit Today Work Modal -->
				<div id="edit_todaywork" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Work Details</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="input-block mb-3 col-sm-6">
											<label class="col-form-label">Project <span class="text-danger">*</span></label>
											<select class="select">
												<option>Office Management</option>
												<option>Project Management</option>
												<option>Video Calling App</option>
												<option>Hospital Administration</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="input-block mb-3 col-sm-4">
											<label class="col-form-label">Deadline <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" type="text" value="5 May 2019" readonly>
											</div>
										</div>
										<div class="input-block mb-3 col-sm-4">
											<label class="col-form-label">Total Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="100" readonly>
										</div>
										<div class="input-block mb-3 col-sm-4">
											<label class="col-form-label">Remaining Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="60" readonly>
										</div>
									</div>
									<div class="row">
										<div class="input-block mb-3 col-sm-6">
											<label class="col-form-label">Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" value="03/03/2019" type="text">
											</div>
										</div>
										<div class="input-block mb-3 col-sm-6">
											<label class="col-form-label">Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="9">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Today Work Modal -->
				
				<!-- Delete Today Work Modal -->
				<div class="modal custom-modal fade" id="delete_workdetail" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Work Details</h3>
									<p>Are you sure want to delete?</p>
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
				<!-- Delete Today Work Modal -->
				
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
