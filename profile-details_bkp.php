<?php 
error_reporting(E_ERROR | E_PARSE);
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

 require_once('inc/config.php'); 
 require('user_role.php');
  require_once('inc/config.php');
								$emp_id = $_GET['id'];
								$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								$pro_results = mysqli_query($db, $prodcatsql1);
								$pro_data = $pro_results->fetch_assoc();
								?>

<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title><?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?> Profile - Redot Solutions</title>
		
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
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
		
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
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="#"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0 mb-0"><?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?></h3>
														<h6 class="text-muted"><?php echo $pro_data['department']; ?></h6>
														<small class="text-muted"><?php echo $pro_data['designation']; ?></small>
														<div class="staff-id">Employee ID : <?php echo $pro_data['emp_code']; ?></div>
														<!--<div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
														<div class="staff-msg"><a class="btn btn-custom" href="chat.php">Send Message</a></div>-->
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<div class="title">Phone:</div>
															<div class="text"><a href="#"><?php echo $pro_data['mobile']; ?></a></div>
														</li>
														<li>
															<div class="title">Email:</div>
															<div class="text"><a href="#"><span class="__cf_email__" data-cfemail=""><?php echo $pro_data['designation']; ?></span></a></div>
														</li>
														<li>
															<div class="title">Birthday:</div>
															<div class="text"><?php $pro_data_dob = $pro_data['dob'];
                                	          $timestamp = strtotime($pro_data_dob);
                                	          $formatted_date = date('M d, Y', $timestamp);
                                	          echo $formatted_date; ?></div>
														</li>
														<li>
															<div class="title">Address:</div>
															<div class="text"><?php echo $pro_data['address']; ?></div>
														</li>
														<li>
															<div class="title">Gender:</div>
															<div class="text"><?php echo $pro_data['gender']; ?></div>
														</li>
														<li>
															<div class="title">Reports to:</div>
															<div class="text">
															   <div class="avatar-box">
																  <div class="avatar avatar-xs">
																	 <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
																  </div>
															   </div>
															   <a href="profile.php">
																	<?php echo $pro_data['report_to']; ?>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Profile</a></li>
									<!--<li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Projects</a></li>-->
									<li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
									<!--<li class="nav-item"><a href="#emp_assets" data-bs-toggle="tab" class="nav-link">Assets</a></li>-->
								</ul>
							</div>
						</div>
					</div>
					
					<div class="tab-content">
					
						<!-- Profile Info Tab -->
						<div id="emp_profile" class="pro-overview tab-pane fade show active">
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<?php $prodcatsql2 = "SELECT * FROM manage_emp_pass WHERE emp_code = '$emp_id'";
								$pro_results2 = mysqli_query($db, $prodcatsql2);
								$pro_data2 = $pro_results2->fetch_assoc();
								?>
											<h3 class="card-title">Personal Informations</h3>
											<ul class="personal-info">
												<li>
													<div class="title">Passport No.</div>
													<div class="text"><?php echo $pro_data2['passport_no']; ?></div>
												</li>
												<li>
													<div class="title">Passport Exp Date.</div>
													<div class="text"><?php echo $pro_data2['passport_expiry_date']; ?></div>
												</li>
												<li>
													<div class="title">Tel</div>
													<div class="text"><a href="#"><?php echo $pro_data2['tel']; ?></a></div>
												</li>
												<li>
													<div class="title">Nationality</div>
													<div class="text"><?php echo $pro_data2['nationality']; ?></div>
												</li>
												<li>
													<div class="title">Religion</div>
													<div class="text"><?php echo $pro_data2['religion']; ?></div>
												</li>
												<li>
													<div class="title">Marital status</div>
													<div class="text"><?php echo $pro_data2['marital_status']; ?></div>
												</li>
												<li>
													<div class="title">Employment of spouse</div>
													<div class="text"><?php echo $pro_data2['employment_of_spouse']; ?></div>
												</li>
												<li>
													<div class="title">No. of children</div>
													<div class="text"><?php echo $pro_data2['no_of_children']; ?></div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<?php $prodcatsql3 = "SELECT * FROM manage_emp_emergency WHERE emp_code = '$emp_id'";
								$pro_results3 = mysqli_query($db, $prodcatsql3);
								$pro_data3 = $pro_results3->fetch_assoc();
								?>
											<h3 class="card-title">Emergency Contact</h3>
											<h5 class="section-title">Primary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text"><?php echo $pro_data3['name']; ?></div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text"><?php echo $pro_data3['relationship']; ?></div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text"><?php echo $pro_data3['phone1']; ?>, <?php echo $pro_data3['phone2']; ?></div>
												</li>
											</ul>
											<hr>
											<h5 class="section-title">Secondary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text"><?php echo $pro_data3['sec_name']; ?></div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text"><?php echo $pro_data3['sec_relationship']; ?></div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text"><?php echo $pro_data3['sec_phone1']; ?>, <?php echo $pro_data3['sec_phone2']; ?></div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<?php $prodcatsql4 = "SELECT * FROM manage_emp_bank WHERE emp_code = '$emp_id'";
								$pro_results4 = mysqli_query($db, $prodcatsql4);
								$pro_data4 = $pro_results4->fetch_assoc();
								if($pro_results4->num_rows>0){
								?>
											<h3 class="card-title">Bank information</h3>
											<ul class="personal-info">
												<li>
													<div class="title">Bank name</div>
													<div class="text"><?php echo $pro_data4['bank_name']; ?></div>
												</li>
												<li>
													<div class="title">Bank account No.</div>
													<div class="text"><?php echo $pro_data4['bank_account_no']; ?></div>
												</li>
												<li>
													<div class="title">IFSC Code</div>
													<div class="text"><?php echo $pro_data4['IFSC_code']; ?></div>
												</li>
												<li>
													<div class="title">PAN No</div>
													<div class="text"><?php echo $pro_data4['pan_no']; ?></div>
												</li>
											</ul>
											<?php } else { ?>
												<h3 class="card-title"> Yet To Upload the Details</h3>
											<?php } ?>
										</div>
									</div>
								</div>
								<!--<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#family_info_modal"><i class="fa-solid fa-pencil"></i></a></h3>
											<div class="table-responsive">
												<table class="table table-nowrap">
													<thead>
														<tr>
															<th>Name</th>
															<th>Relationship</th>
															<th>Date of Birth</th>
															<th>Phone</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Leo</td>
															<td>Brother</td>
															<td>Feb 16th, 2019</td>
															<td>9876543210</td>
															<td class="text-end">
																<div class="dropdown dropdown-action">
																	<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
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
								</div>-->
							</div>
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Education Informations</h3>
											<?php $prodcatsql5 = "SELECT * FROM  manage_emp_education WHERE emp_code = '$emp_id'";
								$pro_results5 = mysqli_query($db, $prodcatsql5);
								$pro_data5 = $pro_results5->fetch_assoc();
								if($pro_results5->num_rows>0){
								?>
											
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name"><?php echo $pro_data5['ug_institution']; ?></a>
																<div><?php echo $pro_data5['ug_graduate']; ?> </div>
																<span class="time"><?php echo $pro_data5['ug_starting_date']; ?> - <?php echo $pro_data5['ug_complete_date']; ?></span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name"><?php echo $pro_data5['pg_institution']; ?></a>
																<div><?php echo $pro_data5['pg_graduate']; ?></div>
																<span class="time"><?php echo $pro_data5['pg_starting_date']; ?> - <?php echo $pro_data5['pg_complete_date']; ?></span>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php } else { ?>
												<h3 class="card-title"> Yet To Upload the Details</h3>
											<?php } ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Experience</h3>
											<?php $prodcatsql6 = "SELECT * FROM  manage_emp_experince  WHERE emp_code = '$emp_id'";
								$pro_results6 = mysqli_query($db, $prodcatsql6);
								$pro_data6 = $pro_results6->fetch_assoc();
								//$count = $pro_results6->num_rows();
								if($pro_results6->num_rows>0){
								?>
											
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="" class="name"><?php echo $pro_data6['company_name1']; ?></a>
																<span class="time"><?php echo $pro_data6['periodfrom1']; ?> - <?php echo $pro_data6['periodto1']; ?></span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="" class="name"><?php echo $pro_data6['company_name2']; ?></a>
																<span class="time"><?php echo $pro_data6['periodfrom2']; ?> - <?php echo $pro_data6['periodto2']; ?></span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name"><?php echo $pro_data6['company_name2']; ?></a>
																<span class="time"><?php echo $pro_data6['periodfrom3']; ?> - <?php echo $pro_data6['periodto3']; ?></span>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php } else { ?>
												<h3 class="card-title"> Yet To Upload the Details</h3>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Profile Info Tab -->
						
						<!-- Projects Tab -->
						<div class="tab-pane fade" id="emp_projects">
							<div class="row">
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.php">Office Management</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.php">Project Management</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.php">Video Calling App</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.php">Hospital Administration</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Projects Tab -->
						
						<!-- Bank Statutory Tab -->
						<?php $prodcatsql7 = "SELECT * FROM emp_salary WHERE emp_code = '$emp_id'";
								$pro_results7 = mysqli_query($db, $prodcatsql7);
								$pro_data7 = $pro_results7->fetch_assoc();
								?>
						<div class="tab-pane fade" id="bank_statutory">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title"> Basic Salary Information <a href="#" class="edit-icon passingEmpSal" data-bs-toggle="modal" data-bs-target="#emp_salary" 
									data-emp-id="<?php echo $emp_id; ?>" 
									data-salary-basis="<?php echo $pro_data7['salary_basis']; ?>"
									data-salary-amount="<?php echo $pro_data7['salary_amount']; ?>"
									data-payment-type="<?php echo $pro_data7['payment_type']; ?>"
									data-pf-contribution="<?php echo $pro_data7['PF_contribution']; ?>"
									data-pf-no="<?php echo $pro_data7['PF_no']; ?>"
									data-emp-PF-rate1="<?php echo $pro_data7['emp_PF_rate1']; ?>"
									data-pf-additional-rate1="<?php echo $pro_data7['PF_additional_rate1']; ?>"
									data-pf-total-rate1="<?php echo $pro_data7['PF_total_rate1']; ?>"
									data-emp-pf-rate2="<?php echo $pro_data7['emp_PF_rate2']; ?>"
									data-pf-additional-rate2="<?php echo $pro_data7['PF_additional_rate2']; ?>"
									data-pf-total-rate2="<?php echo $pro_data7['PF_total_rate2']; ?>"
									data-esi-contribution="<?php echo $pro_data7['ESI_contribution']; ?>"
									data-esi-no="<?php echo $pro_data7['ESI_no']; ?>"
									data-emp-esi-rate="<?php echo $pro_data7['emp_ESI_rate']; ?>"
									data-esi-additional-rate="<?php echo $pro_data7['ESI_additional_rate']; ?>"
									data-esi-total-rate="<?php echo $pro_data7['ESI_total_rate']; ?>"><i class="fa-solid fa-pencil"></i></a></h3>
									<form>
										<input name="emp_code" value="<?php echo $emp_id; ?>" type="hidden">
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Salary basis </label>	: <br>												
													<?php echo $pro_data7['salary_basis']; ?>
											   </div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Salary amount </label> : <br>
													<?php echo $pro_data7['salary_amount']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Payment type</label> : <br>
													<?php echo $pro_data7['payment_type']; ?>
											   </div>
											</div>
										</div>
										<hr>
										<h3 class="card-title"> PF Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">PF contribution</label> : <br>
													<?php echo $pro_data7['PF_contribution']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">PF No.</label> : <br>
													<?php echo $pro_data7['PF_no']; ?>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee PF rate</label> : <br>
													<?php echo $pro_data7['emp_PF_rate1']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate</label> : <br>
													<?php echo $pro_data7['PF_additional_rate1']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label> : <br>
													<?php echo $pro_data7['PF_total_rate1']; ?>
												</div>
											</div>
									   </div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee PF rate</label> : <br>
													<?php echo $pro_data7['emp_PF_rate2']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate</label> : <br>
													<?php echo $pro_data7['PF_additional_rate2']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label> : <br>
													<?php echo $pro_data7['PF_total_rate2']; ?>
												</div>
											</div>
										</div>
										
										<hr>
										<h3 class="card-title"> ESI Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">ESI contribution</label> : <br>
													<?php echo $pro_data7['ESI_contribution']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">ESI No.</label> : <br>
													<?php echo $pro_data7['ESI_no']; ?>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee ESI rate</label> : <br>
													<?php echo $pro_data7['emp_ESI_rate']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate</label> : <br>
													<?php echo $pro_data7['ESI_additional_rate']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label> : <br>
													<?php echo $pro_data7['ESI_total_rate']; ?>
												</div>
											</div>
									   </div>
										
										<!--<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>-->
									</form>
									
                                
 <script type="text/javascript" src="jquery.min.js"></script>

								</div>
							</div>
						</div>
						<!-- /Bank Statutory Tab -->
						
						<!-- Assets -->
						<div class="tab-pane fade" id="emp_assets">
							<div class="table-responsive table-newdatatable">
								<table class="table table-new custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Asset ID</th>
											<th>Assigned Date</th>
											<th>Assignee</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<a href="assets-details.php" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 001</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage">
													<img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>John Paul Raj</span>
													<p><span class="__cf_email__" data-cfemail="5933363137193d2b3c38343e2c202a2d3c3a31773a3634">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.php">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<a href="assets-details.php" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 002</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
													<img src="assets/img/profiles/avatar-05.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Vinod Selvaraj</span>
													<p><span class="__cf_email__" data-cfemail="6b1d0205040f45182b0f190e0a060c1e12181f0e080345080406">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.php">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<a href="assets-details.php" class="table-imgname">
													<img src="assets/img/keyboard.png" class="me-2" alt="Keyboard Image">
													<span>Dell Keyboard</span>
												</a>
											</td>
											<td>AST - 003</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
													<img src="assets/img/profiles/avatar-03.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Harika </span>
													<p><span class="__cf_email__" data-cfemail="2840495a414349065e684c5a4d49454f5d515b5c4d4b40064b4745">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.php">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="assets/img/mouse.png" class="me-2" alt="Mouse Image">
													<span>Logitech Mouse</span>
												</a>
											</td>
											<td>AST - 0024</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="assets-details.php" class="table-profileimage" >
													<img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
												</a>
												<a href="assets-details.php" class="table-name">
													<span>Mythili</span>
													<p><span class="__cf_email__" data-cfemail="204d595448494c4960445245414d47555953544543480e434f4d">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.php">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 005</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="assets-details.php" class="table-profileimage" >
													<img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
												</a>
												<a href="assets-details.php" class="table-name">
													<span>John Paul Raj</span>
													<p><span class="__cf_email__" data-cfemail="cca6a3a4a28ca8bea9ada1abb9b5bfb8a9afa4e2afa3a1">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.php">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 006</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" >
													<img src="assets/img/profiles/avatar-05.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Vinod Selvaraj</span>
													<p><span class="__cf_email__" data-cfemail="43352a2d2c276d3003273126222e24363a303726202b6d202c2e">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.php">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /Assets -->
						
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Emergency Contact Modal -->
				<script>
				$(".passingEmpSal").click(function () {				
    var emp_code = $(this).attr('data-emp-id');
    var data_salary_basis = $(this).attr('data-salary-basis');
    var data_salary_amount = $(this).attr('data-salary-amount');
    var data_payment_type = $(this).attr('data-payment-type');
    var data_pf_contribution = $(this).attr('data-pf-contribution');
    var data_pf_no = $(this).attr('data-pf-no');
    var data_emp_pf_rate1 = $(this).attr('data-emp-pf-rate1');
    var data_pf_additional_rate1 = $(this).attr('data-pf-additional-rate1');
    var data_pf_total_rate1 = $(this).attr('data-pf-total-rate1');
    var data_emp_pf_rate2 = $(this).attr('data-emp-pf-rate2');
    var data_pf_additional_rate2 = $(this).attr('data-pf-additional-rate2');
    var data_pf_total_rate2 = $(this).attr('data-pf-total-rate2');
    var data_esi_contribution = $(this).attr('data-esi-contribution');
    var data_esi_no = $(this).attr('data-esi-no');
    var data_emp_esi_rate = $(this).attr('data-emp-esi-rate');
    var data_esi_additional_rate = $(this).attr('data-esi-additional-rate');
    var data_esi_total_rate = $(this).attr('data-esi-total-rate');
    
    $("#emp_code").val( emp_code );
    $("#salary_basis").val( data_salary_basis );
    $("#salary_amount").val( data_salary_amount );
    $("#payment_type").val( data_payment_type );
    $("#pf_contribution").val( data_pf_contribution );
    $("#pf_no").val( data_pf_no );
    $("#emp_pf_rate1").val( data_emp_pf_rate1 );
    $("#pf_additional_rate1").val( data_pf_additional_rate1 );
    $("#pf_total_rate1").val( data_pf_total_rate1 );
    $("#emp_pf_rate2").val( data_emp_pf_rate2 );
    $("#pf_additional_rate2").val( data_pf_additional_rate2 );
    $("#pf_total_rate2").val( data_pf_total_rate2 );
    $("#esi_contribution").val( data_esi_contribution );
    $("#esi_no").val( data_esi_no );
    $("#emp_esi_rate").val( data_emp_esi_rate );
    $("#esi_additional_rate").val( data_esi_additional_rate );
    $("#esi_total_rate").val( data_esi_total_rate );
    $('#emp_salary').modal('show');
});
				</script>
				<div id="emp_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Basic Salary Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								
								<form id="salupdateForm" method="post">
										<input name="emp_code" value="<?php echo $emp_id; ?>" type="hidden">
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
													<select class="select" name="salary_basis" id="salary_basis">
														<option>Select salary basis type</option>
														<option value="Hourly">Hourly</option>
														<option value="Daily">Daily</option>
														<option value="Weekly">Weekly</option>
														<option value="Monthly">Monthly</option>
													</select>
											   </div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
													<div class="input-group">
														<span class="input-group-text">$</span>
														<input type="text" class="form-control" placeholder="salary amount" id="salary_amount" name="salary_amount" value="">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Payment type</label>
													<select class="select" name="payment_type" id="payment_type">
														<option>Select payment type</option>
														<option>Bank transfer</option>
														<option>Check</option>
														<option>Cash</option>
													</select>
											   </div>
											</div>
										</div>
										<hr>
										<h3 class="card-title"> PF Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">PF contribution</label>
													<select class="select" name="PF_contribution" id="pf_contribution">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">PF No. <span class="text-danger">*</span></label>
													<select class="select" name="PF_no" id="pf_no">
														<option>Select PF contribution</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select" name="emp_PF_rate1" id="emp_pf_rate1">
														<option>Select PF contribution</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select" name="PF_additional_rate1" id="pf_additional_rate1">
														<option>Select additional rate</option>
														<option value="0%">0%</option>
														<option value="1%">1%</option>
														<option value="2%">2%</option>
														<option value="3%">3%</option>
														<option value="4%">4%</option>
														<option value="5%">5%</option>
														<option value="6%">6%</option>
														<option value="7%">7%</option>
														<option value="8%">8%</option>
														<option value="9%">9%</option>
														<option value="10%">10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" name="PF_total_rate1" id="pf_total_rate1">
												</div>
											</div>
									   </div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select" name="emp_PF_rate2" id="emp_pf_rate2">
														<option>Select PF contribution</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select" name="PF_additional_rate2" id="pf_additional_rate2">
														<option>Select additional rate</option>
														<option value="0%">0%</option>
														<option value="1%">1%</option>
														<option value="2%">2%</option>
														<option value="3%">3%</option>
														<option value="4%">4%</option>
														<option value="5%">5%</option>
														<option value="6%">6%</option>
														<option value="7%">7%</option>
														<option value="8%">8%</option>
														<option value="9%">9%</option>
														<option value="10%">10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" name="PF_total_rate2" id="pf_total_rate2">
												</div>
											</div>
										</div>
										
										<hr>
										<h3 class="card-title"> ESI Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">ESI contribution</label>
													<select class="select" name="ESI_contribution" id="esi_contribution">
														<option>Select ESI contribution</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
													<select class="select" name="ESI_no" id="esi_no">
														<option>Select ESI No</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee ESI rate</label>
													<select class="select" name="emp_ESI_rate" id="emp_esi_rate">
														<option>Select ESI rate</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select" name="ESI_additional_rate" id="esi_additional_rate">
														<option>Select additional rate</option>
														<option value="0%">0%</option>
														<option value="1%">1%</option>
														<option value="2%">2%</option>
														<option value="3%">3%</option>
														<option value="4%">4%</option>
														<option value="5%">5%</option>
														<option value="6%">6%</option>
														<option value="7%">7%</option>
														<option value="8%">8%</option>
														<option value="9%">9%</option>
														<option value="10%">10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" id="esi_total_rate" name="ESI_total_rate">
												</div>
											</div>
									   </div>
										
										<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>
									</form>
									<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#salupdateForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "admin_salary_update.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Emergency Contact Modal -->
				
				<!-- Profile Modal -->
				<div id="profile_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Profile Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								
								<form id="proupdateForm1" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<div class="row">
										<div class="col-md-12">
											<div class="profile-img-wrap edit-img">
												<img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
												<div class="fileupload btn">
													<span class="btn-text">edit</span>
													<input class="upload" type="file">
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">First Name</label>
														<input type="text" class="form-control" name="first_name" value="<?php echo $pro_data['name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Last Name</label>
														<input type="text" class="form-control" name="last_name" value="<?php echo $pro_data['last_name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Birth Date</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" name="dob" value="<?php echo $pro_data['dob']; ?>">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Gender</label>														 
														<select class="select form-control" name="gender">
															 <option value="<?php echo $pro_data['gender']; ?>"><?php echo $pro_data['gender']; ?></option>
															 <option>Select Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Address</label>
												<input type="text" class="form-control" name="address" value="<?php echo $pro_data['address']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">State</label>
												<input type="text" class="form-control" name="state" value="<?php echo $pro_data['state']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Country</label>
												<input type="text" class="form-control" name="country" value="<?php echo $pro_data['country']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Pin Code</label>
												<input type="text" class="form-control" name="pincode" value="<?php echo $pro_data['pincode']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Phone Number</label>
												<input type="text" class="form-control" name="phone" value="<?php echo $pro_data['mobile']; ?>">
											</div>
										</div>
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Email</label>
												<input type="text" class="form-control" name="email" value="<?php echo $pro_data['email']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select" name="department">
													<option value="<?php echo $pro_data['department']; ?>"><?php echo $pro_data['department']; ?></option>
													<option>Select Department</option>
													<option value="Web Development">Web Development</option>
													<option value="IT Management">IT Management</option>
													<option value="Marketing">Marketing</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Designation <span class="text-danger">*</span></label>
												<select class="select" name="designation">
													<option value="<?php echo $pro_data['designation']; ?>"><?php echo $pro_data['designation']; ?></option>
													<option>Select Designation</option>
													<option value="Web Designer">Web Designer</option>
													<option value="Web Developer">Web Developer</option>
													<option value="Android Developer">Android Developer</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Reports To <span class="text-danger">*</span></label>
												<select class="select" name="report_to">
													<option value="<?php echo $pro_data['report_to']; ?>"><?php echo $pro_data['report_to']; ?></option>
													<option>-</option>
													<option value="Wilmer Deluna">Wilmer Deluna</option>
													<option value="Lesley Grauer">Lesley Grauer</option>
													<option value="Jeffery Lalor">Jeffery Lalor</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<br><br>
							<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#proupdateForm1").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "pro_update1.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							
							</div>
						</div>
					</div>
				</div>
				<!-- /Profile Modal -->
				
				<!-- Personal Info Modal -->
				<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="proupdateForm2" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Passport No</label>
												<input type="text" class="form-control" name="passport_no" value="<?php echo $pro_data2['passport_no']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Passport Expiry Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text" name="passport_exp_date" value="<?php echo $pro_data2['passport_expiry_date']; ?>">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Tel</label>
												<input class="form-control" type="text" name="tel" value="<?php echo $pro_data2['tel']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Nationality <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="nationality" value="<?php echo $pro_data2['nationality']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Religion</label>
												<div class="col-form-label">
													<input class="form-control" type="text" name="religion" value="<?php echo $pro_data2['religion']; ?>">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Marital status <span class="text-danger">*</span></label>
												<select class="select form-control" name="marital_status">
													<option value="<?php echo $pro_data2['marital_status']; ?>"><?php echo $pro_data2['marital_status']; ?></option>
													<option>-</option>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Employment of spouse</label>
												<input class="form-control" type="text" name="emp_of_spouse" value="<?php echo $pro_data2['employment_of_spouse']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">No. of children </label>
												<input class="form-control" type="text" name="no_of_children" value="<?php echo $pro_data2['no_of_children']; ?>">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
								<script>

$(document).ready(function (e) {
	$("#proupdateForm2").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "pro_update2.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res2").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal Info Modal -->
				
				<!-- Family Info Modal -->
				<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"> Family Informations</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa-solid fa-plus-circle"></i> Add More</a>
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
				<!-- /Family Info Modal -->
				
				<!-- Emergency Contact Modal -->
				<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								
								<form id="proupdateForm3" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="name" value="<?php echo $pro_data3['name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="relationship" value="<?php echo $pro_data3['relationship']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="phone1" value="<?php echo $pro_data3['phone1']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone 2</label>
														<input class="form-control" type="text" name="phone2" value="<?php echo $pro_data3['phone2']; ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Secondary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="sec_name" value="<?php echo $pro_data3['sec_name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="sec_relationship" value="<?php echo $pro_data3['sec_relationship']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="sec_phone1" value="<?php echo $pro_data3['sec_phone1']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone 2</label>
														<input class="form-control" type="text" name="sec_phone2" value="<?php echo $pro_data3['sec_phone2']; ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
								<script>

$(document).ready(function (e) {
	$("#proupdateForm3").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "pro_update3.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res3").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Emergency Contact Modal -->
				
				<!-- Bank Info Modal -->
				<div id="bank_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Bank Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="proupdateForm4" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Bank name</label>
												<input type="text" class="form-control" name="bank_name" value="<?php echo $pro_data4['bank_name']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Bank account No.</label>
													<input class="form-control" type="text" name="bank_account_no" value="<?php echo $pro_data4['bank_account_no']; ?>">
											
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">IFSC Code</label>
												<input class="form-control" type="text" name="IFSC_code" value="<?php echo $pro_data4['IFSC_code']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Pan Number <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="pan_no" value="<?php echo $pro_data4['pan_no']; ?>">
											</div>
										</div>
										
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res4" class="submit-section" style="text-align: center;"></h4>
								<script>

$(document).ready(function (e) {
	$("#proupdateForm4").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "pro_update4.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res4").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Bank Info Modal -->
				
				<!-- Education Modal -->
				<div id="education_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Education Informations</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="proupdateForm5" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">UG Education Informations <!--<a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a>--></h3>
												<div class="row">
													
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="ug_institution" value="<?php echo $pro_data5['ug_institution']; ?>" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="ug_subject" value="<?php echo $pro_data5['ug_subject']; ?>" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" name="ug_starting_date" value="<?php echo $pro_data5['ug_starting_date']; ?>" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" name="ug_complete_date" value="<?php echo $pro_data5['ug_complete_date']; ?>" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="ug_graduate"  value="<?php echo $pro_data5['ug_graduate']; ?>" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="ug_class" value="<?php echo $pro_data5['ug_class']; ?>" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">PG Education Informations <!--<a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a>--></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="pg_institution" value="<?php echo $pro_data5['pg_institution']; ?>" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="pg_subject" value="<?php echo $pro_data5['pg_subject']; ?>" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" name="pg_starting_date" value="<?php echo $pro_data5['pg_starting_date']; ?>" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" name="pg_complete_date" value="<?php echo $pro_data5['pg_complete_date']; ?>" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="pg_graduate"  value="<?php echo $pro_data5['pg_graduate']; ?>" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" name="pg_class" value="<?php echo $pro_data5['pg_class']; ?>" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
												<!--<div class="add-more">
													<a href="javascript:void(0);"><i class="fa-solid fa-plus-circle"></i> Add More</a>
												</div>-->
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res5" class="submit-section" style="text-align: center;"></h4>
								<script>

$(document).ready(function (e) {
	$("#proupdateForm5").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "pro_update5.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res5").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Education Modal -->
				
				<!-- Experience Modal -->
				<div id="experience_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Experience Informations</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="proupdateForm6" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <!--<a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a>--></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="company_name1" value="<?php echo $pro_data6['company_name1']; ?>">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="location1" value="<?php echo $pro_data6['location1']; ?>">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="job_position1" value="<?php echo $pro_data6['job_position1']; ?>">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" name="periodfrom1" value="<?php echo $pro_data6['periodfrom1']; ?>">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" name="periodto1" value="<?php echo $pro_data6['periodto1']; ?>">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <!--<a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a>--></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="company_name2" value="<?php echo $pro_data6['company_name2']; ?>">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="location2" value="<?php echo $pro_data6['location2']; ?>">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="job_position2" value="<?php echo $pro_data6['job_position2']; ?>">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" name="periodfrom2" value="<?php echo $pro_data6['periodfrom2']; ?>">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" name="periodto2" value="<?php echo $pro_data6['periodto2']; ?>">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
												<!--<div class="add-more">
													<a href="javascript:void(0);"><i class="fa-solid fa-plus-circle"></i> Add More</a>
												</div>-->
											</div>
										</div>
										
								<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <!--<a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a>--></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="company_name3" value="<?php echo $pro_data6['company_name3']; ?>">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="location3" value="<?php echo $pro_data6['location3']; ?>">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" name="job_position3" value="<?php echo $pro_data6['job_position3']; ?>">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" name="periodfrom3" value="<?php echo $pro_data6['periodfrom3']; ?>">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" name="periodto3" value="<?php echo $pro_data6['periodto3']; ?>">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
												<!--<div class="add-more">
													<a href="javascript:void(0);"><i class="fa-solid fa-plus-circle"></i> Add More</a>
												</div>-->
											</div>
										</div>		
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res6" class="submit-section" style="text-align: center;"></h4>
								<script>

$(document).ready(function (e) {
	$("#proupdateForm6").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "pro_update6.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res6").html(resp);
				},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
							</div>
						</div>
					</div>
				</div>
				<!-- /Experience Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<?php include 'setting-icon.php';?>
		
		<!-- jQuery -->
       <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.0.min.js"></script>

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
		
		<!-- Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
