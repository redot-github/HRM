<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Job Dashboard - Redot Solutions</title>
		
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
								<h3 class="page-title">Job Dashboard</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item">Jobs</li>
									<li class="breadcrumb-item active">Job Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-briefcase"></i></span>
									<div class="dash-widget-info">
										<h3>110</h3>
										<span>Jobs</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-users"></i></span>
									<div class="dash-widget-info">
										<h3>40</h3>
										<span>Job Seekers</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-user"></i></span>
									<div class="dash-widget-info">
										<h3>374</h3>
										<span>Employees</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-paste"></i></span>
									<div class="dash-widget-info">
										<h3>220</h3>
										<span>Applications</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center d-flex">
									<div class="card flex-fill">
										<div class="card-body">
											<h3 class="card-title">Overview</h3>
											<canvas id="lineChart"></canvas>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card flex-fill">
										<div class="card-body">
											<h3 class="card-title text-center">Latest Jobs</h3>
											<ul class="list-group">
											  	<li class="list-group-item list-group-item-action">UI Developer <span class="float-end text-sm text-muted">1 Hours ago</span></li>
											  	<li class="list-group-item list-group-item-action">Android Developer <span class="float-end text-sm text-muted">1 Days ago</span></li>
											  	<li class="list-group-item list-group-item-action">IOS Developer<span class="float-end text-sm text-muted">2 Days ago</span></li>
											  	<li class="list-group-item list-group-item-action">PHP Developer<span class="float-end text-sm text-muted">3 Days ago</span></li>
											  	<li class="list-group-item list-group-item-action">UI Developer<span class="float-end text-sm text-muted">3 Days ago</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					
					<div class="row">
						<div class="col-md-12">
							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0">Applicants List</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Job Title</th>
													<th>Departments</th>
													<th>Start Date</th>
													<th>Expire Date</th>
													<th class="text-center">Job Types</th>
													<th class="text-center">Status</th>
													<th class="text-center">Resume</th>
													<th class="text-center">Actions</th>
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
													<td class="text-center"><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="fa-solid fa-download me-1"></i> Download</a></td>
													<td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
													<td class="text-center"><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="fa-solid fa-download me-1"></i> Download</a></td>
													<td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
													<td class="text-center"><a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="fa-solid fa-download me-1"></i> Download</a></td>
													<td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0">Shortlist Candidates</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Job Title</th>
													<th>Departments</th>
													<th class="text-center">Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														1
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
															<a href="profile.php">John Doe <span>Web Designer</span></a>
														</h2>
													</td>
													<td><a href="job-details.php">Web Designer</a></td>
													<td>Department</td>
													<td class="text-center">
														<div class="action-label">
															<a class="btn btn-white btn-sm btn-rounded" href="#">
																<i class="fa-regular fa-circle-dot text-danger"></i>Offered
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														2
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
															<a href="profile.php">Richard Miles <span>Web Developer</span></a>
														</h2>
													</td>
													<td><a href="job-details.php">Web Developer</a></td>
													<td>Department</td>
													<td class="text-center">
														<div class="action-label">
															<a class="btn btn-white btn-sm btn-rounded" href="#" >
																<i class="fa-regular fa-circle-dot text-danger"></i>Offered
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														3
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
															<a href="profile.php">John Smith <span>Android Developer</span></a>
														</h2>
													</td>
													<td><a href="job-details.php">Android Developer</a></td>
													<td>Department</td>
													<td class="text-center">
														<div class="action-label">
															<a class="btn btn-white btn-sm btn-rounded" href="#" >
																<i class="fa-regular fa-circle-dot text-danger"></i>Offered
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
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
		
		<!-- Chart JS -->
		<script src="assets/js/Chart.min.js"></script>
		<script src="assets/js/line-chart.js"></script>
		
		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
