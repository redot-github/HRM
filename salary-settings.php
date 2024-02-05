<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Salary Settings - Redot Solutions</title>
		
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
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Salary Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
							
							<form>
								
								<!-- DA and HRA Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										DA and HRA 											
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hra" checked>
											<label class="onoffswitch-label" for="switch_hra">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">DA (%)</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">HRA (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /DA and HRA Settings -->
								
								<!-- Provident Fund Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										Provident Fund Settings 											
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_pf" checked>
											<label class="onoffswitch-label" for="switch_pf">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
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
								<!-- /Provident Fund Settings -->
								
								<!-- ESI Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										ESI Settings 											
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_esi">
											<label class="onoffswitch-label" for="switch_esi">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
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
								<!-- /ESI Settings -->
								
								<!-- TDS Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										TDS&nbsp; <small class="form-text text-muted">Annual Salary</small>
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_tds">
											<label class="onoffswitch-label" for="switch_tds">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary From</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary To</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="input-block mb-3">
												<label class="col-form-label">%</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="input-block mb-3">
												<label class="d-none d-sm-block">&nbsp;</label>
												<button class="btn btn-danger w-100 set-btn" type="button"><i class="fa-regular fa-trash-can"></i></button>
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary From</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Salary To</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="input-block mb-3">
												<label class="col-form-label">%</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="input-block mb-3">
												<label class="d-none d-sm-block">&nbsp;</label>
												<button class="btn btn-danger w-100 set-btn" type="button"><i class="fa-regular fa-trash-can"></i></button>
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-2 ms-auto">
											<div class="input-block mb-3">
												<button class="btn btn-primary w-100" type="button"><i class="fa-solid fa-plus"></i></button>
											</div>
										</div>
									</div>
								</div>
								<!-- /TDS Settings -->
								
								<!-- Submit Button -->
								<div class="submit-section">
									<button class="btn btn-primary submit-btn" type="submit">Save</button>
								</div>
								<!-- /Submit Button -->
								
                            </form>
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

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
