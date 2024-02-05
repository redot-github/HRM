<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Shortlist Candidates - Redot Solutions</title>
		
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
							<div class="col-12">
								<h3 class="page-title">Aptitude Result</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item">Jobs</li>
									<li class="breadcrumb-item active">Aptitude Result</li>
								</ul>
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
											<th>Name</th>
											<th>Job Title</th>
											<th>Department</th>
											<th>Category Wise Mark</th>
											<th>Total Mark</th>
											<th class="text-center">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a href="profile.php">John Doe <span>Web Designer</span></a>
												</h2>
											</td>
											<td><a href="job-details.php">Web Developer</a></td>
											<td>Development</td>
											<td>html - <b>1</b><br>Level1 - <b>0</b><br></td>
											<td class="text-center">1</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa-regular fa-circle-dot text-danger"></i> Action pending								</a>	
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Resume selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Resume Rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Aptitude Selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Aptitude rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  video call selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Video call rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Offered</a>
													</div> 
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="profile.php">Richard Miles <span>Web Developer</span></a>
												</h2>
											</td>
											<td><a href="job-details.php">Web Designer</a></td>
											<td>Designing</td>
											<td>html - <b>1</b><br>Level1 - <b>0</b><br></td>
											<td class="text-center">1</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa-regular fa-circle-dot text-danger"></i> Action pending								</a>	
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Resume selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Resume Rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Aptitude Selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Aptitude rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  video call selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Video call rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Offered</a>
													</div> 
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													<a href="profile.php">John Smith <span>Android Developer</span></a>
												</h2>
											</td>
											<td><a href="job-details.php">Android Developer</a></td>
											<td>Android</td>
											<td>html - <b>1</b><br>Level1 - <b>0</b><br></td>
											<td class="text-center">1</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa-regular fa-circle-dot text-danger"></i> Action pending								</a>	
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Resume selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Resume Rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Aptitude Selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Aptitude rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  video call selected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Video call rejected</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Offered</a>
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
