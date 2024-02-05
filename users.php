<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Users - Redot Solutions</title>
		
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
							<div class="col">
								<h3 class="page-title">Users</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Users</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_user"><i class="fa-solid fa-plus"></i> Add User</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option>Select Company</option>
									<option>Global Technologies</option>
									<option>Delta Infotech</option>
								</select>
								<label class="focus-label">Company</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option>Select Role</option>
									<option>Web Developer</option>
									<option>Web Designer</option>
									<option>Android Developer</option>
									<option>Ios Developer</option>
								</select>
								<label class="focus-label">Role</label>
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
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Company</th>
											<th>Created Date</th>
											<th>Role</th>
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-21.jpg" alt="User Image"></a>
													<a href="profile.php">Daniel Porter <span>Admin</span></a>
												</h2>
											</td>
											<td><a href="" class="__cf_email__" data-cfemail="2044414e49454c504f52544552604558414d504c450e434f4d">[email&#160;protected]</a></td>
											<td>Dreamguy's Technologies</td>
											<td>1 Jan 2013</td>
											<td>
												<span class="badge bg-inverse-danger">Admin</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a href="profile.php">John Doe <span>Web Designer</span></a>
												</h2>
											</td>
											<td><a href="" class="__cf_email__" data-cfemail="4d272225232922280d28352c203d2128632e2220">[email&#160;protected]</a></td>
											<td>Dreamguy's Technologies</td>
											<td>1 Jan 2013</td>
											<td>
											<span class="badge bg-inverse-success">Employee</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="profile.php">Richard Miles <span>Admin</span></a>
												</h2>
											</td>
											<td><a href="" class="__cf_email__" data-cfemail="8af8e3e9e2ebf8eee7e3e6eff9caeff2ebe7fae6efa4e9e5e7">[email&#160;protected]</a></td>
											<td>Dreamguy's Technologies</td>
											<td>1 Jan 2013</td>
											<td>
												<span class="badge bg-inverse-success">Employee</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													<a href="profile.php">John Smith <span>Android Developer</span></a>
												</h2>
											</td>
											<td><a href="" class="__cf_email__" data-cfemail="48222720263b25213c20082d30292538242d662b2725">[email&#160;protected]</a></td>
											<td>Dreamguy's Technologies</td>
											<td>1 Jan 2013</td>
											<td>
												<span class="badge bg-inverse-success">Employee</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													<a href="profile.php">Mike Litorus <span>IOS Developer</span></a>
												</h2>
											</td>
											<td><a href="" class="__cf_email__" data-cfemail="45282c2e20292c312a37303605203d24283529206b262a28">[email&#160;protected]</a></td>
											<td>Dreamguy's Technologies</td>
											<td>1 Jan 2013</td>
											<td>
												<span class="badge bg-inverse-success">Employee</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
													<a href="profile.php">Wilmer Deluna <span>Team Leader</span></a>
												</h2>
											</td>
											<td><a href="" class="__cf_email__" data-cfemail="f7809e9b9a928593929b829996b7928f969a879b92d994989a">[email&#160;protected]</a></td>
											<td>Dreamguy's Technologies</td>
											<td>1 Jan 2013</td>
											<td>
												<span class="badge bg-inverse-success">Employee</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
													<a href="profile.php">Barry Cuda <span>Global Technologies</span></a>
												</h2>
											</td>
											<td><a href="" class="__cf_email__" data-cfemail="9af8fbe8e8e3f9effefbdaffe2fbf7eaf6ffb4f9f5f7">[email&#160;protected]</a></td>
											<td>Global Technologies</td>
											<td>1 Jan 2013</td>
											<td>
												<span class="badge bg-inverse-info">Client</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
				
				<!-- Add User Modal -->
				<div id="add_user" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add User</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Username <span class="text-danger">*</span></label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Email <span class="text-danger">*</span></label>
												<input class="form-control" type="email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Password</label>
												<input class="form-control" type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Confirm Password</label>
												<input class="form-control" type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Phone </label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Role</label>
												<select class="select">
													<option>Admin</option>
													<option>Client</option>
													<option>Employee</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Company</label>
												<select class="select">
													<option>Global Technologies</option>
													<option>Delta Infotech</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">  
											<div class="input-block mb-3">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input type="text" class="form-control floating">
											</div>
									   </div>
									</div>
									<div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Module Permission</th>
													<th class="text-center">Read</th>
													<th class="text-center">Write</th>
													<th class="text-center">Create</th>
													<th class="text-center">Delete</th>
													<th class="text-center">Import</th>
													<th class="text-center">Export</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Employee</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
												<tr>
													<td>Holidays</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
												<tr>
													<td>Leaves</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
												<tr>
													<td>Events</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add User Modal -->
				
				<!-- Edit User Modal -->
				<div id="edit_user" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit User</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" value="John" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" value="Doe" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Username <span class="text-danger">*</span></label>
												<input class="form-control" value="johndoe" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Email <span class="text-danger">*</span></label>
												<input class="form-control" value="johndoe@example.com" type="email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Password</label>
												<input class="form-control" type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Confirm Password</label>
												<input class="form-control" type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Phone </label>
												<input class="form-control" value="9876543210" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Role</label>
												<select class="select">
													<option>Admin</option>
													<option>Client</option>
													<option selected>Employee</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Company</label>
												<select class="select">
													<option>Global Technologies</option>
													<option>Delta Infotech</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">  
											<div class="input-block mb-3">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input type="text" value="FT-0001" class="form-control floating">
											</div>
									   </div>
									</div>
									<div class="table-responsive m-t-15">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th>Module Permission</th>
													<th class="text-center">Read</th>
													<th class="text-center">Write</th>
													<th class="text-center">Create</th>
													<th class="text-center">Delete</th>
													<th class="text-center">Import</th>
													<th class="text-center">Export</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Employee</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
												<tr>
													<td>Holidays</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
												<tr>
													<td>Leaves</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
												<tr>
													<td>Events</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
													<td class="text-center">
														<label class="custom_check">
															<input type="checkbox" checked>													
															<span class="checkmark"></span>
														</label>																		
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit User Modal -->
				
				<!-- Delete User Modal -->
				<div class="modal custom-modal fade" id="delete_user" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete User</h3>
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
				<!-- /Delete User Modal -->
				
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
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
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
