<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Reports - Redot Solutions</title>
		
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
								<h3 class="page-title">Project Reports</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Project Reports</li>
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
										Active
									</option>
									<option>
										Pending
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
											<th>Project Title</th>
											<th>Client Name</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Status</th>
											<th>Team</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<a href="project-view.php">Hospital Administration</a>
											</td>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
													<a href="client-profile.php">Global Technologies</a>
												</h2>
											</td>
											<td>9 Jan 2021</td>
											<td>10 Apr 2021</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
													
												</div>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<a href="project-view.php">Office Management</a>
											</td>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-29.jpg" alt="User Image"></a>
													<a href="client-profile.php">Delta Infotech</a>
												</h2>
											</td>
											<td>10 Dec 2021</td>
											<td>2 May 2021</td>
											<td>
												<div class="action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
													
												</div>
											</td>
											<td>
												<ul class="team-members text-nowrap">
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" title="" data-bs-toggle="tooltip" data-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li class="dropdown avatar-dropdown">
														<a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
														<div class="dropdown-menu dropdown-menu-right">
															<div class="avatar-group">
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
																</a>
																<a class="avatar avatar-xs" href="#">
																	<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
																</a>
															</div>
															<div class="avatar-pagination">
																<ul class="pagination">
																	<li class="page-item">
																		<a class="page-link" href="#" aria-label="Previous">
																			<span aria-hidden="true">«</span>
																			<span class="visually-hidden">Previous</span>
																		</a>
																	</li>
																	<li class="page-item"><a class="page-link" href="#">1</a></li>
																	<li class="page-item"><a class="page-link" href="#">2</a></li>
																	<li class="page-item">
																		<a class="page-link" href="#" aria-label="Next">
																			<span aria-hidden="true">»</span>
																		<span class="visually-hidden">Next</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
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
