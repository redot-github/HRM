<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Aptitude - Redot Solutions</title>
		
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
								<h3 class="page-title">Aptitude</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item ">Jobs</li>
									<li class="breadcrumb-item">Interviewing</li>
									<li class="breadcrumb-item active">Aptitude</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Content Starts -->
					<div class="card">
						<div class="card-body">
							<!-- <h4 class="card-title">Solid justified</h4> -->
							<ul class="nav nav-tabs nav-tabs-solid nav-justified">
								<li class="nav-item"><a class="nav-link" href="user-dashboard.php">Dashboard</a></li>
								<li class="nav-item"><a class="nav-link" href="user-all-jobs.php">All </a></li>
								<li class="nav-item"><a class="nav-link" href="saved-jobs.php">Saved</a></li>
								<li class="nav-item"><a class="nav-link" href="applied-jobs.php">Applied</a></li>
								<li class="nav-item"><a class="nav-link active" href="interviewing.php">Interviewing</a></li>
								<li class="nav-item"><a class="nav-link" href="offered-jobs.php">Offered</a></li>
								<li class="nav-item"><a class="nav-link" href="visited-jobs.php">Visitied </a></li>
								<li class="nav-item"><a class="nav-link" href="archived-jobs.php">Archived </a></li>
							</ul>
						</div>
					</div>	
					
						<div class="row">
							<div class="col-md-6 offset-md-3">
								<div class="card">
									<div class="card-body">
										<p>Name : <b>John Richerd</b></p>
										<p>Code : <b>#1245</b></p>
										<p>Job Type : <b>UI Development</b></p>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<p class="m-b-30">Click button to answer your question.</p>
										<div class="row">
											<div class="col-md-6 text-center m-b-30">
												<a href="questions.php" class="btn btn-primary w-100 submit-btn">Html</a>
											</div>
											<div class="col-md-6 text-center m-b-30">
												<a href="questions.php" class="btn btn-primary w-100 submit-btn">Css</a>
											</div>
											<div class="col-md-6 text-center m-b-30">
												<a href="questions.php" class="btn btn-primary w-100 submit-btn">Design</a>
											</div>
											<div class="col-md-6 text-center m-b-30">
												<a href="questions.php" class="btn btn-primary w-100 submit-btn">Javascript</a>
											</div>
										</div>
									</div>
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
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
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
