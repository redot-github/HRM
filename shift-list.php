<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Shift List - Redot Solutions</title>
		
		 <!-- Favicon -->
         <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         
         <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
         
         <!-- Lineawesome CSS -->
         <link rel="stylesheet" href="assets/css/line-awesome.min.css">
         
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
								<h3 class="page-title">Shift List</h3>
								<ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#">Employees</a></li>
									<li class="breadcrumb-item active">Shift List</li>
								</ul>
                            </div>
                            <div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn m-r-5" data-bs-toggle="modal" data-bs-target="#add_shift">Add Shifts</a>
								<a href="#" class="btn add-btn m-r-5" data-bs-toggle="modal" data-bs-target="#add_schedule"> Assign Shifts</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Content Starts -->
                    <div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
                                            <th>#</th>
											<th>Shift Name</th>
											<th>Min Start Time</th>
											<th>Start Time</th>
                                            <th>Max Start Time</th>
                                            <th>Min End Time</th>
                                            <th>End Time</th>
                                            <th>Max End Time</th>
                                            <th>Break Time</th>
											<th class="text-center">Status</th>
											<th class="text-end no-sort">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                                            <td>1</td>
                                            <td>10'o clock Shift</td>
                                            <td>09:00:00 am</td>
                                            <td>10:00:00 am</td>
                                            <td>10:30:00 am</td>
                                            <td>06:00:00 pm</td>
                                            <td>06:30:00 pm</td>
                                            <td>07:00:00 pm</td>
                                            <td>30 mins</td>
                                            <td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-success"></i> Active
													</a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>10:30 shift</td>
                                            <td>10:00:00 am</td>
                                            <td>10:30:00 am	</td>
                                            <td>11:00:00 am</td>
                                            <td>06:30:00 pm</td>
                                            <td>07:00:00 pm</td>
                                            <td>07:30:00 pm	</td>
                                            <td>45 mins</td>
                                            <td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-success"></i> Active
													</a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Daily Rout</td>
                                            <td>06:00:00 am</td>
                                            <td>06:30:00 am</td>
                                            <td>07:00:00 am</td>
                                            <td>03:00:00 pm</td>
                                            <td>03:30:00 pm</td>
                                            <td>04:00:00 pm</td>
                                            <td>60 mins</td>
                                            <td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-success"></i> Active
													</a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Shift</td>
                                            <td>06:11:00 am</td>
                                            <td>06:30:00 am</td>
                                            <td>08:12:00 am</td>
                                            <td>09:12:00 pm	</td>
                                            <td>09:30:00 pm</td>
                                            <td>09:45:00 pm</td>
                                            <td>45 mins</td>
                                            <td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-success"></i> Active
													</a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Recurring Shift</td>
                                            <td>08:30:00 am</td>
                                            <td>09:00:00 am</td>
                                            <td>09:30:00 am</td>
                                            <td>05:30:00 pm</td>
                                            <td>06:00:00 pm</td>
                                            <td>06:30:00 pm</td>
                                            <td>60 mins</td>
                                            <td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-success"></i> Active
													</a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
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
				
			<!-- Add Shift Modal -->
			<div id="add_shift" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Shift</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
											<div class="input-group time">
												<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-block mb-3" >
											<label class="col-form-label">Min Start Time <span class="text-danger">*</span></label>
											<div class="input-group time">
												<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-block mb-3">
											<label class="col-form-label">Start Time <span class="text-danger">*</span></label>
											<div class="input-group time">
												<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
											</div>									
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-block mb-3">
											<label class="col-form-label">Max Start Time <span class="text-danger">*</span></label>
											<div class="input-group time">
												<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
											</div>											
										</div>
									</div>		
									<div class="col-md-4">
										<div class="input-block mb-3" >
											<label class="col-form-label">Min End Time <span class="text-danger">*</span></label>
											<div class="input-group time">
												<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-block mb-3">
											<label class="col-form-label">End Time <span class="text-danger">*</span></label>
											<div class="input-group time">
												<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
											</div>									
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-block mb-3">
											<label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
											<div class="input-group time">
												<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
											</div>											
										</div>
									</div>	
									<div class="col-md-4">
										<div class="input-block mb-3">
											<label class="col-form-label">Break Time (In Minutes) </label>
											<input type="text" class="form-control timepicker">											
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="customCheck1">
											<label class="form-check-label" for="customCheck1">Recurring Shift</label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Repeat Every</label>
											<select class="select">
												<option value="">1 </option>
												<option value="1">2</option>
												<option value="2">3</option>
												<option value="3">4</option>
												<option  selected value="4">5</option>
												<option value="3">6</option>
											</select>
											<label class="col-form-label">Week(s)</label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="input-block mb-3 wday-box">
											<label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">M</span></label>
		
											<label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">T</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">W</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">T</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">F</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
										
											<label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">S</span></label>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="input-block mb-3">
											<label class="col-form-label">End On <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="customCheck2">
											<label class="form-check-label" for="customCheck2">Indefinite</label>
										</div>
									</div>								
							
									<div class="col-md-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Add Tag </label>
											<input type="text" class="form-control">											
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Add Note </label>
											<textarea class="form-control"></textarea>											
										</div>
									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Shift Modal -->

				<!-- Edit Shift Modal -->
				<div id="edit_shift" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Shift</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3" >
												<label class="col-form-label">Min Start Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Start Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>									
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max Start Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>											
											</div>
										</div>		
										<div class="col-md-4">
											<div class="input-block mb-3" >
												<label class="col-form-label">Min End Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">End Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>									
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>											
											</div>
										</div>	
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Break Time (In Minutes) </label>
												<input type="text" class="form-control timepicker">											
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="customCheck3">
												<label class="form-check-label" for="customCheck3">Recurring Shift</label>
												</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Repeat Every</label>
												<select class="select">
													<option value="">1 </option>
													<option value="1">2</option>
													<option value="2">3</option>
													<option value="3">4</option>
													<option  selected value="4">5</option>
													<option value="3">6</option>
												</select>
												<label class="col-form-label">Week(s)</label>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3 wday-box">
												<label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">M</span></label>
			
												<label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">T</span></label>
											
												<label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">W</span></label>
											
												<label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">T</span></label>
											
												<label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">F</span></label>
											
												<label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
											
												<label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">S</span></label>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">End On <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="customCheck4">
												<label class="form-check-label" for="customCheck4">Indefinite</label>
												</div>
										</div>								
								
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Tag </label>
												<input type="text" class="form-control">											
											</div>
										</div>
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Note </label>
												<textarea class="form-control"></textarea>											
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Shift Modal -->

				<!-- Add Schedule Modal -->
				<div id="add_schedule" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Schedule</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select">
                                                    <option value="">Select</option>
													<option value="">Development</option>
                                                    <option value="1">Finance</option>
                                                    <option value="2">Finance and Management</option>
                                                    <option value="3">Hr & Finance</option>
                                                    <option value="4">ITech</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
                                            <div class="input-block mb-3">
												<label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
												<select class="select">
													<option value="">Select </option>
                                                    <option value="1">Richard Miles </option>
                                                    <option value="2">John Smith</option>
                                                    <option value="3">Mike Litorus </option>
                                                    <option value="4">Wilmer Deluna</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">Date</label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Shifts <span class="text-danger">*</span></label>
												<select class="select">
													<option value="">Select </option>
                                                    <option value="1">10'o clock Shift</option>
                                                    <option value="2">10:30 shift</option>
                                                    <option value="3">Daily Shift </option>
                                                    <option value="4">New Shift</option>
												</select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">End Time   <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
												<input class="form-control timepicker" type="text">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Accept Extra Hours </label>
												<div class="form-switch">
													<input type="checkbox" class="form-check-input" id="customSwitch1" checked="">
													<label class="form-check-label" for="customSwitch1"></label>
												  </div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Publish </label>
												<div class="form-switch">
													<input type="checkbox" class="form-check-input" id="customSwitch2" checked="">
													<label class="form-check-label" for="customSwitch2"></label>
												  </div>
											</div>
										</div>
									</div>
								
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <!-- /Add Schedule Modal -->
                	
				<!-- Delete Shift Modal -->
				<div class="modal custom-modal fade" id="delete_employee" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Shift</h3>
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
				<!-- /Delete Employee Modal -->
				
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
