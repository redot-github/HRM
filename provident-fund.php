<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Provident Fund - Redot Solutions</title>
		
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
								<h3 class="page-title">Provident Fund</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Provident Fund</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_pf"><i class="fa-solid fa-plus"></i> Add Provident Fund</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable mb-0">
									<thead>
										<tr>
											<th>Employee Name</th>
											<th>Provident Fund Type</th>
											<th>Employee Share</th>
											<th>Organization Share</th>
											<th>Status</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a href="profile.php">John Doe <span>Web Designer</span></a>
												</h2>
											</td>
											<td>Percentage of Basic Salary</td>
											<td>2%</td>
											<td>2%</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-danger"></i> Pending
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Pending</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
													</div>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_pf"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_pf"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
				
				<!-- Add PF Modal -->
				<div id="add_pf" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Provident Fund</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Employee Name</label>
												<select class="form-control select">
													<option value="3">John Doe (FT-0001)</option>
													<option value="23">Richard Miles (FT-0002)</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Provident Fund Type</label>
												 <select class="form-control select">
													<option value="Fixed Amount" selected="">Fixed Amount</option>
													<option value="Percentage of Basic Salary">Percentage of Basic Salary</option>
												</select>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="show-fixed-amount">
												<div class="row">
													<div class="col-sm-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Employee Share (Amount)</label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Organization Share (Amount)</label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="show-basic-salary">
												<div class="row">
													<div class="col-sm-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Employee Share (%)</label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Organization Share (%)</label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control" rows="4"></textarea>
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
				<!-- /Add PF Modal -->
				
				<!-- Edit PF Modal -->
				<div id="edit_pf" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Provident Fund</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Employee Name</label>
												<select class="form-control select">
													<option value="3">John Doe (FT-0001)</option>
													<option value="23">Richard Miles (FT-0002)</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Provident Fund Type</label>
												 <select class="form-control select">
													<option value="Fixed Amount" selected="">Fixed Amount</option>
													<option value="Percentage of Basic Salary">Percentage of Basic Salary</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="show-fixed-amount">
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Employee Share (Amount)</label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Organization Share (Amount)</label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="show-basic-salary">
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Employee Share (%)</label>
															<input class="form-control" type="text" value="2%">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Organization Share (%)</label>
															<input class="form-control" type="text" value="2%">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control" rows="4"></textarea>
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
				<!-- /Edit PF Modal -->
				
				<!-- Delete PF Modal -->
				<div class="modal custom-modal fade" id="delete_pf" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Provident Fund</h3>
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
				<!-- /Delete PF Modal -->
				
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

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
