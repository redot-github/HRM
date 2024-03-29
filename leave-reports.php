<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Leave Report - Redot Solutions</title>
		
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
								<h3 class="page-title">Leave Report</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leave Report</li>
								</ul>
							</div>
							<div class="col-auto">
								<a href="#" class="btn btn-primary">PDF</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row mb-4">
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input class="form-control floating" type="text">
								<label class="focus-label">Employee</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option>Select Department</option>
									<option>Designing</option>
									<option>Development</option>
									<option>Finance</option>
									<option>Hr & Finance</option>
								</select>
								<label class="focus-label">Department</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
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
											<th>Employee</th>
											<th>Date</th>
											<th>Department</th>
											<th>Leave Type</th>
											<th>No.of Days</th>
											<th>Remaining Leave</th>
											<th>Total Leaves</th>
											<th>Total Leave Taken</th>
											<th>Leave Carry Forward</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a href="profile.php">John Doe <span>#0001</span></a>
												</h2>
											</td>
											<td>20 Dec 2020</td>
											<td>Design</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm">Sick Leave</button>
											</td>
											<td class="text-center"><span class="btn btn-danger btn-sm">05</span></td>
											<td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
											<td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
											<td class="text-center">12</td>
											<td class="text-center">08</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="profile.php">Richard Miles <span>#0002</span></a>
												</h2>
											</td>
											<td>21 Dec 2020</td>
											<td>Web Developer</td>
											<td class="text-center">
												<button class="btn btn-outline-warning btn-sm">Parenting Leave</button>
											</td>
											<td class="text-center"><span class="btn btn-danger btn-sm">03</span></td>
											<td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
											<td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
											<td class="text-center">12</td>
											<td class="text-center">05</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													<a href="profile.php">John Smith <span>#003</span></a>
												</h2>
											</td>
											<td>22 Dec 2020</td>
											<td>Android Developer</td>
											<td class="text-center">
												<button class="btn btn-outline-danger btn-sm">Emercency Leave</button>
											</td>
											<td class="text-center"><span class="btn btn-danger btn-sm">01</span></td>
											<td class="text-center"><span class="btn btn-warning btn-sm"><b>09</b></span></td>
											<td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
											<td class="text-center">17</td>
											<td class="text-center">03</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													<a href="profile.php">Mike Litorus <span>#004</span></a>
												</h2>
											</td>
											<td>23 Dec 2020</td>
											<td>IOS Developer</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm">Sick Leave</button>
											</td>
											<td class="text-center"><span class="btn btn-danger btn-sm">15</span></td>
											<td class="text-center"><span class="btn btn-warning btn-sm"><b>05</b></span></td>
											<td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
											<td class="text-center">15</td>
											<td class="text-center">05</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
													<a href="profile.php">Wilmer Deluna <span>#005</span></a>
												</h2>
											</td>
											<td>24 Dec 2020</td>
											<td>Team Leader</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm">Sick Leave</button>
											</td>
											<td class="text-center"><span class="btn btn-danger btn-sm">10</span></td>
											<td class="text-center"><span class="btn btn-warning btn-sm"><b>07</b></span></td>
											<td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
											<td class="text-center">18</td>
											<td class="text-center">2</td>
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
