<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Employee Report - Redot Solutions</title>
		
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
								<h3 class="page-title">Employee Report</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Employee Report</li>
								</ul>
							</div>
							<div class="col-auto">
								<a href="#" class="btn btn-primary">PDF</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
						<!-- Content Starts -->
						
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
							<div class="d-grid">
								<a href="#" class="btn btn-success"> Search </a>  
							</div>
						</div>     
                    </div>
					<!-- /Search Filter -->
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee Name</th>
											<th>Employee Type</th>
											<th>Email</th>
											<th>Department</th>
											<th>Designation</th>
											<th>Joining Date</th>
											<th>DOB</th>
											<th>Martial Status</th>
											<th>Gender</th>
											<th>Terminated Date</th>
											<th>Relieving Date</th>
											<th>Salary</th>
											<th>Address</th>
											<th>Contact Number</th>
											<th>Emercency Contact Details</th>
											<th>Experience</th>
											<th class="text-center">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a href="profile.php" class="text-primary">John Doe <span>#0001</span></a>
												</h2>
											</td>
											<td>Employee</td>
											<td class="text-info"><a href="" class="__cf_email__" data-cfemail="02686d6a6c666d6742677a636f726e672c616d6f">[email&#160;protected]</a></td>
											<td>Design</td>
											<td>UI Design</td>
											<td>20 Aug 2020</td>
											<td>03 Mar 1992</td>
											<td>Married</td>
											<td>Male</td>
											<td>-</td>
											<td>-</td>
											<td>$20000</td>
											<td>
												1861 Bayonne Ave, Manchester Township, NJ, 08759
											</td>
											<td>9876543210</td>
											<td>7894561235</td>
											<td>0 years 4 months and 9 days</td>
											<td><button class="btn btn-outline-success btn-sm">Active</button></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="profile.php" class="text-primary">Richard Miles <span>#0002</span></a>
												</h2>
											</td>
											<td>Employee</td>
											<td class="text-info"><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e4968d878c859680898d888197a4819c8589948881ca878b89">[email&#160;protected]</a></td>
											<td>Android Developer</td>
											<td>IT Support</td>
											<td>01 Jul 2020</td>
											<td>05 Dec 1979</td>
											<td>Married</td>
											<td>Male</td>
											<td>-</td>
											<td>-</td>
											<td>$15000</td>
											<td>
												1861 Bayonne Ave, Manchester Township, NJ, 08759
											</td>
											<td>9876543210</td>
											<td>7894561235</td>
											<td>0 years 5 months and 24 days</td>
											<td><button class="btn btn-outline-success btn-sm">Active</button></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													<a href="profile.php" class="text-primary">John Smith <span>#003</span></a>
												</h2>
											</td>
											<td>Employee</td>
											<td class="text-info"><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="58323730362b35312c30183d20393528343d763b3735">[email&#160;protected]</a></td>
											<td>IOS Developer</td>
											<td>Development Manager</td>
											<td>03 Sep 2020</td>
											<td>16 Apr 1984</td>
											<td>Married</td>
											<td>Male</td>
											<td>-</td>
											<td>-</td>
											<td>$27000</td>
											<td>
												1861 Bayonne Ave, Manchester Township, NJ, 08759
											</td>
											<td>9876543210</td>
											<td>7894561235</td>
											<td>0 years 3 months and 21 days</td>
											<td><button class="btn btn-outline-success btn-sm">Active</button></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													<a href="profile.php" class="text-primary">Mike Litorus <span>#004</span></a>
												</h2>
											</td>
											<td>Employee</td>
											<td class="text-info"><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5256545a53564b504d4a4c7f5a475e524f535a115c5052">[email&#160;protected]</a></td>
											<td>Web Developer</td>
											<td>IT Support</td>
											<td>15 Nov 2020</td>
											<td>15 Jul 2005</td>
											<td>Single</td>
											<td>Male</td>
											<td>-</td>
											<td>-</td>
											<td>$15000</td>
											<td>
												1861 Bayonne Ave, Manchester Township, NJ, 08759
											</td>
											<td>9876543210</td>
											<td>7894561235</td>
											<td>0 years 1 months and 9 days</td>
											<td><button class="btn btn-outline-success btn-sm">Active</button></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
													<a href="profile.php" class="text-primary">Wilmer Deluna <span>#005</span></a>
												</h2>
											</td>
											<td>Employee</td>
											<td class="text-info"><a href="" class="__cf_email__" data-cfemail="d5a2bcb9b8b0a7b1b0b9a0bbb495b0adb4b8a5b9b0fbb6bab8">[email&#160;protected]</a></td>
											<td>Team Leader</td>
											<td>Development Manager</td>
											<td>01 Dec 2020</td>
											<td>21 Jun 1984</td>
											<td>Married</td>
											<td>Male</td>
											<td>-</td>
											<td>-</td>
											<td>$25000</td>
											<td>
												1861 Bayonne Ave, Manchester Township, NJ, 08759
											</td>
											<td>9876543210</td>
											<td>7894561235</td>
											<td>0 years 0 months and 24 days</td>
											<td><button class="btn btn-outline-success btn-sm">Active</button></td>
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
       <script data-cfasync="false" src="assets/cloudflare-static/email-decode.min.js"></script>
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
