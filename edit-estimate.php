<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Edit Estimate - Redot Solutions</title>
		
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
							<div class="col-sm-12">
								<h3 class="page-title">Edit Estimate</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Edit Estimate</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<form>
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Client <span class="text-danger">*</span></label>
											<select class="select">
												<option>Please Select</option>
												<option selected>Barry Cuda</option>
												<option>Tressa Wexler</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Project <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select Project</option>
												<option selected>Office Management</option>
												<option>Project Management</option>
											</select>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Email</label>
											<input class="form-control" type="email" value="barrycuda@example.com">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Tax</label>
											<select class="select">
												<option>Select Tax</option>
												<option>VAT</option>
												<option selected>GST</option>
												<option>No Tax</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Client Address</label>
											<textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Billing Address</label>
											<textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Estimate Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text" value="2019/05/20">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Expiry Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text" value="2019/05/27">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="table-responsive">
											<table class="table table-hover table-white" id="editTable">
												<thead>
													<tr>
														<th>#</th>
														<th class="col-sm-2">Item</th>
														<th class="col-md-6">Description</th>
														<th>Unit Cost</th>
														<th>Qty</th>
														<th>Amount</th>
														<th></th>
													</tr>
												</thead>
												<tbody class="tbodyone">
													<tr>
														<td>1</td>
														<td>
															<input class="form-control" type="text" value="Vehicle Module">
														</td>
														<td>
															<input class="form-control" type="text" value="Create, edit delete functionlity">
														</td>
														<td>
															<input class="form-control" type="text" value="112">
														</td>
														<td>
															<input class="form-control" type="text" value="1">
														</td>
														<td>
															<input class="form-control" readonly type="text" value="112">
														</td>
														<td><a href="javascript:void(0)" class="text-success font-18" id="addEditProduct" title="Add"><i class="fa-solid fa-plus"></i></a></td>
													</tr>
													<tr>
														<td>2</td>
														<td>
															<input class="form-control" type="text" value="Vehicle Module">
														</td>
														<td>
															<input class="form-control" type="text" value="Create, edit delete functionlity">
														</td>
														<td>
															<input class="form-control" type="text" value="112">
														</td>
														<td>
															<input class="form-control" type="text" value="1">
														</td>
														<td>
															<input class="form-control" readonly type="text" value="112">
														</td>
														<td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa-regular fa-trash-can"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-hover table-white">
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td class="text-end">Total</td>
														<td class="text-end pe-4">112</td>
													</tr>
													<tr>
														<td colspan="5" class="text-end">Tax</td>
														<td class="text-end pe-4">
															<input class="form-control text-end" value="0" readonly type="text">
														</td>
													</tr>
													<tr>
														<td colspan="5" class="text-end">
															Discount %
														</td>
														<td class="text-end">
															<input class="form-control text-end" value="0" type="text">
														</td>
													</tr>
													<tr>
														<td colspan="5" class="text-end">
															<b>Grand Total</b>
														</td>
														<td class="text-end tdata-width pe-4">
															<b>$ 112</b>
														</td>
													</tr>
												</tbody>
											</table>                               
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Other Information</label>
													<textarea class="form-control" rows="4"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn m-r-10">Save & Send</button>
									<button class="btn btn-primary submit-btn">Save</button>
								</div>
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
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
