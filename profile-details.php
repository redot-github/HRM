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
								$emp_id= $_GET['id'];
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
        <title><?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?> Profile - Redot Solutions - Redot Solutions</title>
		
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
												<a href="#"><img src="profile-img/<?php echo $pro_data['image']; ?>" alt="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>"></a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0 mb-0"><?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?></h3>
														<h5 class="text-muted"><?php echo $pro_data['department']; ?></h5>
														<h5 class="text-muted"><?php echo $pro_data['designation']; ?></h5>
														<div class="staff-id">Employee ID : <?php echo $pro_data['emp_code']; ?></div>
														<a href="offer-letter.php?id=<?php echo $pro_data['emp_code']; ?>" target="_blank">Offer Letter</a>
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
															<div class="text"><a href="#"><span class="__cf_email__" data-cfemail=""><?php echo $pro_data['email']; ?></span></a></div>
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
																  <!--<div class="avatar avatar-xs">
																	 <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
																  </div>-->
															   </div>
															   <a href="profile.php">
																	<?php $lead_emp_code = $pro_data['lead_emp_code'];
													$leadsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$lead_emp_code'";
								                    $pro_leadsql1 = mysqli_query($db, $leadsql1);
								                    $pro_lead = $pro_leadsql1->fetch_assoc();
													?>
													<?php echo $pro_lead['name']; ?> <?php echo $pro_lead['last_name']; ?>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon passingEmpDet" href=""
										data-emp-id="<?php echo $emp_id; ?>" 
									data-emp-name="<?php echo $pro_data['name']; ?>"
									data-last-name="<?php echo $pro_data['last_name']; ?>"
									data-dob="<?php echo $pro_data['dob']; ?>"
									data-gender="<?php echo $pro_data['gender']; ?>"
									data-address="<?php echo $pro_data['address']; ?>"
									data-state="<?php echo $pro_data['state']; ?>"
									data-country="<?php echo $pro_data['country']; ?>"
									data-pincode="<?php echo $pro_data['pincode']; ?>"
									data-mobile="<?php echo $pro_data['mobile']; ?>"
									data-email="<?php echo $pro_data['email']; ?>"
									data-department="<?php echo $pro_data['department']; ?>"
									data-designation="<?php echo $pro_data['designation']; ?>"
									data-role="<?php echo $pro_data['role']; ?>"
									data-status="<?php echo $pro_data['status']; ?>"
									data-report_to="<?php echo $pro_data['lead_emp_code']; ?>"
									data-hr_leave_approver="<?php echo $pro_data['hr_leave_approver']; ?>"><i class="fa-solid fa-pencil"></i></a></div>
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
											<h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#personal_info_modal"><i class="fa-solid fa-pencil"></i></a></h3>
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
											<h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#emergency_contact_modal"><i class="fa-solid fa-pencil"></i></a></h3>
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
								?>
											<h3 class="card-title">Bank information <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#bank_info_modal"><i class="fa-solid fa-pencil"></i></a></h3>
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
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<?php $prodcatsql7 = "SELECT * FROM emp_leave_status  WHERE emp_code = '$emp_id'";
								$pro_results7 = mysqli_query($db, $prodcatsql7);
								$pro_data7 = $pro_results7->fetch_assoc();
								?>
											<h3 class="card-title">Leave Details <!--<a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#bank_info_modal"><i class="fa-solid fa-pencil"></i></a>--></h3>
											<ul class="personal-info">
												<li>
													<div class="title">Casual Leave</div>
													<div class="text-danger"><b><?php echo $pro_data7['casual_leave']; ?></b></div>
												</li>
												<li>
													<div class="title">Medical Leave</div>
													<div class="text-danger"><b><?php echo $pro_data7['medical_leave']; ?></b></div>
												</li>
											</ul>
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
											<?php $prodcatsql5 = "SELECT * FROM  manage_emp_education  WHERE emp_code = '$emp_id'";
								$pro_results5 = mysqli_query($db, $prodcatsql5);
								$pro_data5 = $pro_results5->fetch_assoc();
								?>
											<h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#education_info"><i class="fa-solid fa-pencil"></i></a></h3>
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
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<?php $prodcatsql6 = "SELECT * FROM  manage_emp_experince  WHERE emp_code = '$emp_id'";
								$pro_results6 = mysqli_query($db, $prodcatsql6);
								$pro_data6 = $pro_results6->fetch_assoc();
								?>
											<h3 class="card-title">Experience <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#experience_info"><i class="fa-solid fa-pencil"></i></a></h3>
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
									data-basic-salary="<?php echo $pro_data7['basic_salary']; ?>"
									data-dearance-allowance="<?php echo $pro_data7['dearance_allowance']; ?>"
									data-medical-allowance="<?php echo $pro_data7['medical_allowance']; ?>"
									data-hra="<?php echo $pro_data7['hra']; ?>"
									data-gross-salary="<?php echo $pro_data7['gross_salary']; ?>"
									data-lop="<?php echo $pro_data7['LOP']; ?>"
									data-net-salary="<?php echo $pro_data7['net_salary']; ?>"
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
									data-esi-total-rate="<?php echo $pro_data7['ESI_total_rate']; ?>"
									data-status="<?php echo $pro_data7['status']; ?>"><i class="fa-solid fa-pencil"></i></a></h3>
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
										<h3 class="card-title"> Earning </h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Basic Salary </label>	: <br>												
													<?php echo $pro_data7['basic_salary']; ?>
											   </div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Dearance Allowance </label> : <br>
													<?php echo $pro_data7['dearance_allowance']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Medical Allowance</label> : <br>
													<?php echo $pro_data7['medical_allowance']; ?>
											   </div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Hra</label> : <br>
													<?php echo $pro_data7['hra']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Gross Salary</label> : <br>
													<?php echo $pro_data7['gross_salary']; ?>
												</div>
											</div>
										</div>
										<h3 class="card-title">Deductions</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">LOP</label> : <br>
													<?php echo $pro_data7['LOP']; ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Net Salary</label> : <br>
													<?php echo $pro_data7['net_salary']; ?>
												</div>
											</div>
										</div>
										<!--<h3 class="card-title"> PF Information</h3>
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
									   </div>-->
										
										<!--<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>-->
									</form>
									

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
				
				 <script type="text/javascript" src="jquery.min.js"></script>
				<!-- Emergency Contact Modal -->
				<script>
				$(".passingEmpSal").click(function () {				
    var emp_code = $(this).attr('data-emp-id');
    var data_salary_basis = $(this).attr('data-salary-basis');
    var data_salary_amount = $(this).attr('data-salary-amount');
    var data_payment_type = $(this).attr('data-payment-type');
    var data_basic_salary = $(this).attr('data-basic-salary');
    var data_dearance_allowance = $(this).attr('data-dearance-allowance');
    var data_medical_allowance = $(this).attr('data-medical-allowance');
    var data_hra = $(this).attr('data-hra');
    var data_gross_salary = $(this).attr('data-gross-salary');    
    var data_lop = $(this).attr('data-lop');
    var data_net_salary = $(this).attr('data-net-salary');
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
    var data_status = $(this).attr('data-status');
    
    $("#emp_code").val( emp_code );
    $("#salary_basis").val( data_salary_basis );
    $("#salary_amount").val( data_salary_amount );
    $("#payment_type").val( data_payment_type );
    $("#basic_salary").val( data_basic_salary );
    $("#dearance_allowance_amount").val( data_dearance_allowance );
    $("#medical_allowance_amount").val( data_medical_allowance );
    $("#hra_amount").val( data_hra );
    $("#gross_salary").val( data_gross_salary );
    $("#lop").val( data_lop );
    $("#net_salary").val( data_net_salary );
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
    $("#sal_status").val( data_status );
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
														<option value="Bank transfer">Bank transfer</option>
														<option value="Check">Check</option>
														<option value="Cash">Cash</option>
													</select>
											   </div>
											</div>
										</div>
										<hr>
										<h3 class="card-title"> Earning</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Basic Salary <span class="text-danger">*</span></label>
													<div class="input-group">
														<span class="input-group-text">$</span>
														<input type="text" class="form-control" placeholder="Basic salary" id="basic_salary" name="basic_salary" oninput="calc();">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Dearance Allowance <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="%" id="dearance_allowance" oninput="calc();">
													<input type="text" class="form-control" id="dearance_allowance_amount" name="dearance_allowance" readonly>														
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Medical Allowance <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="%" id="medical_allowance" oninput="calc();">
													<input type="text" class="form-control" id="medical_allowance_amount" name="medical_allowance" readonly>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">HRA <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="%" id="hra" oninput="calc();">
													<input type="text" class="form-control" id="hra_amount" name="hra" readonly>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Gross Salary<span class="text-danger">*</span></label>
													<input type="text" class="form-control"  id="gross_salary" name="gross_salary">
												</div>
											</div>
                                            <script>
												function calc() {
  var basic_salary = document.getElementById("basic_salary").value;
  var basic_salary = parseInt(basic_salary, 10);
  var dearance_allowance = document.getElementById("dearance_allowance").value;
  var dearance_allowance = parseInt(dearance_allowance, 10);
  var dearance_allowance_amount = basic_salary * dearance_allowance / 100;
  var d_a_amount = parseFloat(dearance_allowance_amount);
  var medical_allowance = document.getElementById("medical_allowance").value;
  var medical_allowance = parseInt(medical_allowance, 10);
  var medical_allowance_amount = basic_salary * medical_allowance / 100;
  var m_a_amount = parseFloat(medical_allowance_amount);
    var hra = document.getElementById("hra").value;
  var hra = parseInt(hra, 10);
  var hra_amount = basic_salary * hra / 100;
  var h_a_amount = parseFloat(hra_amount);
  var gross_salary = basic_salary + d_a_amount + m_a_amount + h_a_amount;
  document.getElementById("dearance_allowance_amount").value = d_a_amount;
  document.getElementById("medical_allowance_amount").value = m_a_amount;
  document.getElementById("hra_amount").value = h_a_amount;
  document.getElementById("gross_salary").value = gross_salary;
}
                                            </script>  
										</div>	
										<script>
												function calc2() { 
  var lop = document.getElementById("lop").value;
  var lop = parseInt(lop, 10);
  var gross_salary2 = document.getElementById("gross_salary").value;
  var gross_salary2 = parseInt(gross_salary2, 10);
  var net_salary = gross_salary2 - lop;
  document.getElementById("net_salary").value = net_salary;
}
                                            </script>
                                            <hr>
									<div class="row"> 
										<h4  class="card-title">Deductions</h4>
										<div class="col-sm-4"> 											
											<div class="input-block mb-3">
												<label class="col-form-label">LOP</label>
												<input class="form-control" type="text" id="lop" name="lop" oninput="calc2();">
											</div>
										</div>
										<div class="col-sm-4">		
											<div class="input-block mb-3">
												<label class="col-form-label">Net Salary</label>
												<input class="form-control" type="text" id="net_salary" name="net_salary" readonly>
											</div> 
										</div>
									</div>	
									<hr>
									<div class="row"> 
										<div class="col-sm-4"> 											
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="select" name="status" id="sal_status">
															<option>Select Status</option>
														<option value="1">Active</option>
														<option value="0">Inactive</option>
													</select>
											</div>
										</div>
									</div>
										<!--<h3 class="card-title"> PF Information</h3>
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
										</div>-->
										
										<!--<h3 class="card-title"> ESI Information</h3>
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
										-->
										<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>
									</form>
									<h4 id="res7" class="submit-section" style="text-align: center;"></h4>
                                

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
					$("#res7").html(resp);
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
				<script>
				$(".passingEmpDet").click(function () {				
    var emp_code = $(this).attr('data-emp-id');
    var data_emp_name = $(this).attr('data-emp-name');
    var data_last_name = $(this).attr('data-last-name');
    var data_dob = $(this).attr('data-dob');
    var data_gender = $(this).attr('data-gender');
    var data_address = $(this).attr('data-address');
    var data_state = $(this).attr('data-state');
    var data_country = $(this).attr('data-country');
    var data_pincode = $(this).attr('data-pincode');    
    var data_mobile = $(this).attr('data-mobile');
    var data_email = $(this).attr('data-email');
    var data_department = $(this).attr('data-department');
    var data_designation = $(this).attr('data-designation');
    var data_role = $(this).attr('data-role');
    var data_status = $(this).attr('data-status');
    var data_report_to = $(this).attr('data-report_to');
    var data_hr_leave_approver = $(this).attr('data-hr_leave_approver');
    
    
    $("#edt_emp_code").val( emp_code );
    $("#edt_emp_name").val( data_emp_name );
    $("#edt_last_name").val( data_last_name );
    $("#edt_dob").val( data_dob );
    $("#edt_gender").val( data_gender );
    $("#edt_address").val( data_address );
    $("#edt_state").val( data_state );
    $("#edt_country").val( data_country );
    $("#edt_pincode").val( data_pincode );
    $("#edt_phone").val( data_mobile );
    $("#edt_email").val( data_email );
    $("#edt_department").val( data_department );
    $("#edt_designation").val( data_designation );
    $("#edt_role").val( data_role );
    $("#edt_status").val( data_status );
    $("#edt_report_to").val( data_report_to );
    $("#edt_hr_leave_approver").val( data_hr_leave_approver );
    $('#profile_info').modal('show');
});
				</script>
				<div id="profile_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Profile Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								
								<form id="proupdateForm1" method="post">
									<input name="emp_code" id="edt_emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<div class="row">
										<div class="col-md-12">
											<div class="profile-img-wrap edit-img">
												<img class="inline-block" src="profile-img/<?php echo $pro_data['image']; ?>" alt="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>">
												<div class="fileupload btn">
													<span class="btn-text">edit (150 x 150)</span>
													<input class="upload" name="pro_img" type="file">
												</div>
											</div>
											<div class="row">
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
													<div class="input-block mb-3">
														<label class="col-form-label">First Name</label>
														<input type="text" class="form-control" id="edt_emp_name" name="first_name">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-block mb-3">
														<label class="col-form-label">Last Name</label>
														<input type="text" class="form-control" id="edt_last_name" name="last_name">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-block mb-3">
														<label class="col-form-label">Birth Date</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" id="edt_dob" name="dob">
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-block mb-3">
														<label class="col-form-label">Gender</label>														 
														<select class="select form-control" id="edt_gender" name="gender">
															 <option value="">Select Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Address</label>
												<input type="text" class="form-control" id="edt_address" name="address">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">State</label>
												<input type="text" class="form-control" id="edt_state" name="state">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Country</label>
												<input type="text" class="form-control" id="edt_country" name="country">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Pin Code</label>
												<input type="text" class="form-control" id="edt_pincode" name="pincode">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Phone Number</label>
												<input type="text" class="form-control" id="edt_phone" name="phone">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Email</label>
												<input type="text" class="form-control" id="edt_email" name="email">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select" id="edt_department" name="department">
													<option value="">Select Department</option>
													<?php  
                                     $dep_sql = $db->query("select distinct department_name from departments ORDER BY department_name ASC");
									if($dep_sql->num_rows>0){
                                    while($dep_row = $dep_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $dep_row['department_name'];?>"><?php echo $dep_row['department_name'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Designation <span class="text-danger">*</span></label>
												<select class="select" id="edt_designation" name="designation">
													<option value="">Select Designation</option>
													<?php  
                                     $desi_sql = $db->query("select distinct designation from designation ORDER BY designation ASC");
									if($desi_sql->num_rows>0){
                                    while($desi_row = $desi_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $desi_row['designation'];?>"><?php echo $desi_row['designation'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Role <span class="text-danger">*</span></label>
												<select class="select" id="edt_role" name="role">
													<option>Select Role</option>
													<option value="3">Lead</option>
													<option value="2">Employee</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Status <span class="text-danger">*</span></label>
												<select class="select" id="edt_status" name="status">
													<option>Select status</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">Reports To</label>
												<select class="select" id="edt_report_to" name="report_to">
													<option value="">Select Reports To</option>
													<?php  
                                     $lead_sql = $db->query("select distinct name,last_name, emp_code, designation from manage_emp WHERE role = '3' ORDER BY emp_code ASC");
									if($lead_sql->num_rows>0){
                                    while($lead_row = $lead_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $lead_row['emp_code'];?>"><?php echo $lead_row['name'];?> <?php echo $lead_row['last_name'];?>(<?php echo $lead_row['designation'];?>)</option>
											<?php }} ?>													
												</select>
											</div>
										</div>
										<hr>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label class="col-form-label">HR Leave Approve <span class="text-danger">(For HR Department Employee)</span></label>
												<select class="select" id="edt_hr_leave_approver" name="hr_approve">													
													<option value="">Select Status</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										<hr>
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
       <!--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.0.min.js"></script>-->

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
