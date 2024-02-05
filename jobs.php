<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Jobs - Redot Solutions</title>
		
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
								<h3 class="page-title">Jobs</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Jobs</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_job"><i class="fa-solid fa-plus"></i> Add Job</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Job Title</th>
											<th>Department</th>
											<th>Start Date</th>
											<th>Expire Date</th>
											<th class="text-center">Job Type</th>
											<th class="text-center">Status</th>
											<th>Applicants</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="job-details.php">Web Developer</a></td>
											<td>Development</td>
											<td>3 Mar 2019</td>
											<td>31 May 2019</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-danger"></i> Full Time
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Full Time</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Part Time</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Internship</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Temporary</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Other</a>
													</div>
												</div>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-danger"></i> Open
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td><a href="job-applicants.php" class="btn btn-sm btn-primary">3 Candidates</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit_job"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="job-details.php">Web Designer</a></td>
											<td>Designing</td>
											<td>3 Mar 2019</td>
											<td>31 May 2019</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-success"></i> Part Time
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Full Time</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Part Time</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Internship</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Temporary</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Other</a>
													</div>
												</div>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-success"></i> Closed
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td><a href="job-applicants.php" class="btn btn-sm btn-primary">2 Candidates</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit_job"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="job-details.php">Android Developer</a></td>
											<td>Android</td>
											<td>3 Mar 2019</td>
											<td>31 May 2019</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-danger"></i> Internship
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Full Time</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Part Time</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Internship</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Temporary</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Other</a>
													</div>
												</div>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-danger"></i> Cancelled
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td><a href="job-applicants.php" class="btn btn-sm btn-primary">1 Candidates</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit_job"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Job Modal -->
				<div id="add_job" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Job</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Job Title</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department</label>
												<select class="select">
													<option>-</option>
													<option>Web Development</option>
													<option>Application Development</option>
													<option>IT Management</option>
													<option>Accounts Management</option>
													<option>Support Management</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Job Location</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">No of Vacancies</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Experience</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Age</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary From</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary To</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Job Type</label>
												<select class="select">
													<option>Full Time</option>
													<option>Part Time</option>
													<option>Internship</option>
													<option>Temporary</option>
													<option>Remote</option>
													<option>Others</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="select">
													<option>Open</option>
													<option>Closed</option>
													<option>Cancelled</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Start Date</label>
												<input type="text" class="form-control datetimepicker">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Expired Date</label>
												<input type="text" class="form-control datetimepicker">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control"></textarea>
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
				<!-- /Add Job Modal -->
				
				<!-- Edit Job Modal -->
				<div id="edit_job" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Job</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Job Title</label>
												<input class="form-control" type="text" value="Web Developer">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department</label>
												<select class="select">
													<option>-</option>
													<option selected>Web Development</option>
													<option>Application Development</option>
													<option>IT Management</option>
													<option>Accounts Management</option>
													<option>Support Management</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Job Location</label>
												<input class="form-control" type="text" value="California">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">No of Vacancies</label>
												<input class="form-control" type="text" value="5">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Experience</label>
												<input class="form-control" type="text" value="2 Years">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Age</label>
												<input class="form-control" type="text" value="-">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary From</label>
												<input type="text" class="form-control" value="32k">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary To</label>
												<input type="text" class="form-control" value="38k">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Job Type</label>
												<select class="select">
													<option selected>Full Time</option>
													<option>Part Time</option>
													<option>Internship</option>
													<option>Temporary</option>
													<option>Remote</option>
													<option>Others</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="select">
													<option selected>Open</option>
													<option>Closed</option>
													<option>Cancelled</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Start Date</label>
												<input type="text" class="form-control datetimepicker" value="3 Mar 2019">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Expired Date</label>
												<input type="text" class="form-control datetimepicker" value="31 May 2019">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Job Modal -->

				<!-- Delete Job Modal -->
				<div class="modal custom-modal fade" id="delete_job" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Job</h3>
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
				<!-- /Delete Job Modal -->
				
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
