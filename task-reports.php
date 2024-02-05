<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Reports- Redot Solutions</title>
		
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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Task Reports</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Task Reports</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
						<!-- Content Starts -->
						<!-- Search Filter -->
					<div class="row filter-row">
						
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<select class="form-control floating select">
									<option>
										Name1
									</option>
									<option>
										Name2
									</option>
								</select>
								<label class="focus-label">Project Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<select class="form-control floating select">
									<option>
										All
									</option>
									<option>
										Pending
									</option>
									<option>
										Completed
									</option>
								</select>
								<label class="focus-label">Status</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success w-100"> Search </a>  
						</div>     
                    </div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Task Name</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Status</th>
											<th>Assigned To</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Hospital Administration</td>
											<td>26 Mar 2019</td>
											<td>26 Apr 2021</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
													
												</div>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Hospital Administration</td>
											<td>26 Mar 2019</td>
											<td>26 Apr 2021</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
													
												</div>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</td>
										</tr>
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
			
        </div>
		<!-- /Main Wrapper -->
		
		<?php include 'setting-icon.php';?>
		
		<!-- jQuery -->
       <script src="assets/js/jquery-3.7.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>

		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
