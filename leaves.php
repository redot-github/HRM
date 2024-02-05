<?php 
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
?>
<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Leaves - Redot Solutions</title>
		
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
								<h3 class="page-title">Leaves</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leaves</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leave"><i class="fa-solid fa-plus"></i> Add Leave</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Leave Statistics -->
					<!--<div class="row">
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Today Presents</h6>
								<h4>12 / 60</h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Planned Leaves</h6>
								<h4>8 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Unplanned Leaves</h6>
								<h4>0 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Pending Requests</h6>
								<h4>12</h4>
							</div>
						</div>
					</div>-->
					<!-- /Leave Statistics -->
					
					<!-- Search Filter -->
					<form action="" method="post">
					<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating" name="emp_name">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating" name="leave_type"> 
									<option> -- Select -- </option>
									<option value="Casual Leave">Casual Leave</option>
									<option value="Medical Leave">Medical Leave</option>
									<option value="Loss of Pay">Loss of Pay</option>
								</select>
								<label class="focus-label">Leave Type</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating" name="status"> 
									<option> -- Select -- </option>
									<option value="Pending"> Pending </option>
									<option value="Approved"> Approved </option>
									<option value="Rejected"> Rejected </option>
								</select>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text" name="from_date">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text" name="to_date">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<button type="submit" name="submit" href="#" class="btn btn-success w-100"> Search </button>  
					   </div>     
                    </div>
                    </form>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table mb-0 datatable">
									<thead>
										<tr>
											<th>S.No</th>
											<th>Employee</th>
											<th>Leave Details</th>
											<th>Approve By</th>
											<th class="text-center">Status</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
							<?php
// Include the database configuration file
require_once('inc/config.php');
if(isset($_POST["submit"])){
	
	 $leave_type = mysqli_real_escape_string($db,$_POST['leave_type']);
      $emp_name = mysqli_real_escape_string($db,$_POST['emp_name']);
      $status  = mysqli_real_escape_string($db,$_POST['status']);
      $from_date  = mysqli_real_escape_string($db,$_POST['from_date']);
      $to_date  = mysqli_real_escape_string($db,$_POST['to_date']);
      
      
      $empsql = $db->query("SELECT * from emp_leaves WHERE emp_name LIKE '%$emp_name' OR  emp_name LIKE '$emp_name%' OR emp_name LIKE '%$emp_name%' AND leave_type= '$leave_type' AND status= '$status' AND leave_from BETWEEN '$from_date' AND '$from_date' And leave_to BETWEEN '$to_date' AND '$to_date' ORDER BY id Desc");
      $count = 0;
      if($empsql->num_rows > 0) {
         while($emprow = $empsql->fetch_assoc()) { ?>
			 <?php
											if($emprow['status'] == 'Pending') { ?> 
												<tr class="table-danger">
                                         <?php } elseif($emprow['status'] == 'Approved') { ?>
                                                <tr  class="table-info">
		                                 <?php  } ?>
											<td><?php echo ++$count;?></td>
											<td>
												<h2 class="table-avatar">
													<?php 
													$leavsql2 = "SELECT name,last_name,image FROM manage_emp WHERE emp_code = '".$emprow['emp_code']."'";
								$leav_results2 = mysqli_query($db, $leavsql2);
								$leavemp_data2 = $leav_results2->fetch_assoc();
													?>
													<a href="" class="avatar"><img src="profile-img/<?php echo $leavemp_data2['image']; ?>" alt=""></a>
													<a href=""><?php echo $leavemp_data2['name']; ?> <?php echo $leavemp_data2['last_name']; ?> (<?php echo $emprow['emp_code'];?>)</a>
												</h2>
											</td>
											<td><span>Leave Type :</span><?php echo $emprow['leave_type'];?><br>
											<span>From :</span><?php echo $emprow['leave_from'];?><br>
											<span>To :</span><?php echo $emprow['leave_to'];?><br>
											<span>No of Days :</span><?php echo $emprow['days'];?> days<br>
											<span>Reason :</span><?php echo $emprow['reason'];?></td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>-->
													<a href="#">
														<?php $app_id = $emprow['approve_by'];
														    if($app_id == 'Admin') {
																echo "Admin";
																} else if($app_id != '') {
								$leadsql = "SELECT * FROM manage_emp WHERE emp_code = '$app_id'";
								$lead_results = mysqli_query($db, $leadsql);
								$lead_data = $lead_results->fetch_assoc();
								?>
														<?php echo $lead_data['name'];?> <?php echo $lead_data['last_name'];?> (<?php echo $lead_data['emp_code'];?>)
													<?php  } else {}?>
														</a>
												</h2>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-purple"></i> <?php echo $emprow['status'];?>
													</a>
													<?php if($emprow['status'] == 'Pending' || $emprow['status'] == 'Declined'){ ?>
													<div class="dropdown-menu dropdown-menu-right">
														<!--<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>-->
														<a class="dropdown-item passingpenData" href="#" data-bs-toggle="modal" data-bs-target="#pending_leave" data-id="<?php echo $emprow['id'];?>" data-emp-id="<?php echo $emprow['emp_code'];?>" data-leave-type="<?php echo $emprow['leave_type'];?>" data-leave-from="<?php echo $emprow['leave_from'];?>" data-leave-to="<?php echo $emprow['leave_to'];?>" data-days="<?php echo $row['days'];?>"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
														<a class="dropdown-item passingappData" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave" data-id="<?php echo $emprow['id'];?>" data-emp-id="<?php echo $emprow['emp_code'];?>" data-leave-type="<?php echo $emprow['leave_type'];?>" data-leave-from="<?php echo $emprow['leave_from'];?>" data-leave-to="<?php echo $emprow['leave_to'];?>" data-days="<?php echo $row['days'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
														<a class="dropdown-item passingdecData" href="#" data-bs-toggle="modal" data-bs-target="#decline_leave" data-id="<?php echo $emprow['id'];?>" data-emp-id="<?php echo $emprow['emp_code'];?>" data-leave-type="<?php echo $emprow['leave_type'];?>" data-leave-from="<?php echo $emprow['leave_from'];?>" data-leave-to="<?php echo $emprow['leave_to'];?>" data-days="<?php echo $row['days'];?>"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
													</div>
													<?php } ?>
												</div>
											</td>
											<td class="text-end">
												<?php if($emprow['status'] == 'Pending' || $row['status'] == 'Declined'){ ?>
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingDATA" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"
														data-id="<?php echo $emprow['id'];?>" 
														data-emp-id="<?php echo $emprow['emp_code'];?>" 
														data-leave-type="<?php echo $emprow['leave_type'];?>"
														data-from-date="<?php echo $emprow['leave_from'];?>"
														data-to-date="<?php echo $emprow['leave_to'];?>"
														data-days="<?php echo $emprow['days'];?>"
														data-remain-days="<?php echo $emprow['remaining_days'];?>"
														data-reason="<?php echo $emprow['reason'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingDetData" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"  
														data-id="<?php echo $emprow['id'];?>"
														data-emp-id="<?php echo $emprow['emp_code'];?>" 
														data-lead-emp-id="<?php echo $emprow['lead_emp_code'];?>" 
														data-leave-type="<?php echo $emprow['leave_type'];?>"
														data-from-date="<?php echo $emprow['leave_from'];?>"
														data-to-date="<?php echo $emprow['leave_to'];?>"
														data-days="<?php echo $emprow['days'];?>"
														data-remain-days="<?php echo $emprow['remaining_days'];?>"
														data-reason="<?php echo $emprow['reason'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
												<?php } ?>
											</td>
										</tr>
			    
			 
			 <?php }
		 } else {
		 
		 Echo "Not Found in Search";
		 
		 }
       
  } else { ?>
							
										<?php
									$sql = $db->query("select * from emp_leaves ORDER BY id DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										 <?php
											if($row['status'] == 'Declined') { ?> 
												<tr class="table-danger">
                                         <?php } elseif($row['status'] == 'Pending') { ?>
                                                <tr  class="table-info">
		                                 <?php  } ?>
				                            <td><?php echo ++$count;?></td>
											<td>
												<h2 class="table-avatar">
													<?php 
													$leavsql1 = "SELECT name,last_name,image FROM manage_emp WHERE emp_code = '".$row['emp_code']."'";
								$leav_results = mysqli_query($db, $leavsql1);
								$leavemp_data = $leav_results->fetch_assoc();
													?>
													<a href="" class="avatar"><img src="profile-img/<?php echo $leavemp_data['image']; ?>" alt=""></a>
													<a href="profile-details.php?id=<?php echo $row['emp_code'];?>"><?php echo $leavemp_data['name'];?> <?php echo $leavemp_data['last_name'];?> (<?php echo $row['emp_code'];?>)</a>
												</h2>
											</td>
											<td><span>Leave Type : </span><button class="btn btn-outline-danger btn-sm"><?php echo $row['leave_type'];?></button><br>
											<span>From : </span><?php echo $row['leave_from'];?><br>
											<span>To   : </span><?php echo $row['leave_to'];?><br>
											<span>No of Days : </span><?php echo $row['days'];?> days<br>
											<span>Reason : </span><?php echo $row['reason'];?></td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>-->
													<a href="#"><button class="btn btn-success btn-sm">
														<?php $app_id = $row['approve_by'];
														    if($app_id == 'Admin') {
																echo "Admin";
																} else if($app_id != '') {
								$leadsql = "SELECT * FROM manage_emp WHERE emp_code = '$app_id'";
								$lead_results = mysqli_query($db, $leadsql);
								$lead_data = $lead_results->fetch_assoc();
								?>
														<?php echo $lead_data['name'];?> <?php echo $lead_data['last_name'];?> (<?php echo $lead_data['emp_code'];?>)
													<?php  } else {}?>
														</button</a>
												</h2>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-purple"></i> <?php echo $row['status'];?>
													</a>
													<?php if($row['status'] == 'Pending' || $row['status'] == 'Declined'){ ?>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingpenData" href="#" data-bs-toggle="modal" data-bs-target="#pending_leave" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-leave-type="<?php echo $row['leave_type'];?>" data-leave-from="<?php echo $row['leave_from'];?>" data-leave-to="<?php echo $row['leave_to'];?>" data-days="<?php echo $row['days'];?>"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
														<a class="dropdown-item passingappData" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-leave-type="<?php echo $row['leave_type'];?>" data-leave-from="<?php echo $row['leave_from'];?>" data-leave-to="<?php echo $row['leave_to'];?>" data-days="<?php echo $row['days'];?>"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
														<a class="dropdown-item passingdecData" href="#"  data-bs-toggle="modal" data-bs-target="#decline_leave" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-leave-type="<?php echo $row['leave_type'];?>" data-leave-from="<?php echo $row['leave_from'];?>" data-leave-to="<?php echo $row['leave_to'];?>" data-days="<?php echo $row['days'];?>"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
													</div>
													<?php } ?>
												</div>
											</td>
											<td class="text-end">
												<?php if($row['status'] == 'Pending' || $row['status'] == 'Declined'){ ?>
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingDATA" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"
														data-id="<?php echo $row['id'];?>" 
														data-emp-id="<?php echo $row['emp_code'];?>" 
														data-leave-type="<?php echo $row['leave_type'];?>"
														data-from-date="<?php echo $row['leave_from'];?>"
														data-to-date="<?php echo $row['leave_to'];?>"
														data-days="<?php echo $row['days'];?>"
														data-remain-days="<?php echo $row['remaining_days'];?>"
														data-reason="<?php echo $row['reason'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingDetData" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"  
														data-id="<?php echo $row['id'];?>"
														data-emp-id="<?php echo $row['emp_code'];?>" 
														data-lead-emp-id="<?php echo $row['lead_emp_code'];?>" 
														data-leave-type="<?php echo $row['leave_type'];?>"
														data-from-date="<?php echo $row['leave_from'];?>"
														data-to-date="<?php echo $row['leave_to'];?>"
														data-days="<?php echo $row['days'];?>"
														data-remain-days="<?php echo $row['remaining_days'];?>"
														data-reason="<?php echo $row['reason'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
												<?php } ?>
											</td>
										</tr>
										<?php } } ?>
										<!--<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a>	John Doe  <span>Web Designer</span></a>
												</h2>
											</td>
											<td>Medical Leave</td>
											<td>27 Feb 2019</td>
											<td>27 Feb 2019</td>
											<td>1 day</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>-->
										
									
					<?php } ?>
					</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<script type="text/javascript" src="jquery.min.js"></script>
				
				<!-- Add Leave Modal -->
				<div id="add_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="leave_apply" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<input name="emp_name" value="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave">Casual Leave</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="WFH">Work From Home</option>
											<option value="LOP">Loss Of Pay</option>
											<option value="Compentary Off">Compentary Off</option>
											<option value="Pandemic Leave">Pandemic Leave</option>
											<option value="Paternity Leave">Paternity Leave</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_from">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_to">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Number of days <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="no_of_days">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
										
										<input class="form-control" readonly value="" type="text" name="remain_days">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" name="reasons"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#leave_apply").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_apply.php",
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
				<!-- /Add Leave Modal -->
				
				<!-- Edit Leave Modal -->
				<script>
				$(".passingDATA").click(function () {
	var le_id = $(this).attr('data-id');				
    var emp_code = $(this).attr('data-emp-id');
    var data_leave_type = $(this).attr('data-leave-type');
    var data_from_date = $(this).attr('data-from-date');
    var data_to_date = $(this).attr('data-to-date');
    var data_days = $(this).attr('data-days');
    var data_remain_days = $(this).attr('data-remain-days');
    var data_reason = $(this).attr('data-reason');
    $("#lea_id").val( le_id );
    $("#emp_code").val( emp_code );
    $("#leave_type").val( data_leave_type );
    $("#from_date").val( data_from_date );
    $("#to_date").val( data_to_date );
    $("#days").val( data_days );
    $("#remain_days").val( data_remain_days );
    $("#reason").val( data_reason );
    $('#edit_leave').modal('show');
});
				</script>
				<div id="edit_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="emp_leave_edit" method="post">
									<input id="lea_id" name="lea_id" value="" type="hidden">
									<input id="emp_code" name="emp_code" value="" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" id="leave_type" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave">Casual Leave</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="WFH">Work From Home</option>
											<option value="LOP">Loss Of Pay</option>
											<option value="Compentary Off">Compentary Off</option>
											<option value="Pandemic Leave">Pandemic Leave</option>
											<option value="Paternity Leave">Paternity Leave</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" id="from_date" name="from_date" value="" type="text">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" id="to_date" name="to_date" value="" type="text">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Number of days <span class="text-danger">*</span></label>
										<input class="form-control" readonly type="text" id="days" name="days" value="2">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
										<input class="form-control" readonly value="" id="remain_days" name="remain_days" type="text">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" id="reason" name="reason"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_leave_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_edit.php",
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
				<!-- /Edit Leave Modal -->

				<!-- Approve Leave Modal -->
				<script>
				$(".passingappData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');
	var data_leave_type = $(this).attr('data-leave-type');
	var data_leave_from = $(this).attr('data-leave-from');
	var data_leave_to = $(this).attr('data-leave-to');	
	var data_days = $(this).attr('data-days');	
   
    $("#data_id").val( data_id );
    $("#emp_id").val( data_emp_id );
    $("#ap_leave_type").val( data_leave_type );
    $("#ap_leave_from").val( data_leave_from );
    $("#ap_leave_to").val( data_leave_to );
    $("#ap_days").val( data_days );
    $('#approve_leave').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="approve_leave" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Leave Approve</h3>
									<p>Are you sure want to approve for this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									
										
											<form id="emp_leave_approve" method="post">
									         <input id="data_id" name="data_id" value="" type="hidden">
									         <div class="row">
									         <div class="col-6 mb-3">
											  <label>Emp Code</label>	
									         <input class="form-control" id="emp_id" name="emp_id" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave Type</label>	
									         <input class="form-control" id="ap_leave_type" name="leave_type" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave From</label>	
									         <input class="form-control" id="ap_leave_from" name="leave_from" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave To</label>	
									         <input class="form-control" id="ap_leave_to" name="leave_to" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>No of days</label>	
									         <input class="form-control" id="ap_days" name="days" value="" type="text" readonly>
									         </div>
									         </div>
									         <div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Approve</button></a>
											</div>
											</form>
										
										<!--<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>-->
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#emp_leave_approve").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_approval.php",
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
				</div>
				<!-- /Approve Leave Modal -->
				
				<!-- Pending Leave Modal -->
				<script>
				$(".passingpenData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');
	var data_leave_type = $(this).attr('data-leave-type');
	var data_leave_from = $(this).attr('data-leave-from');
	var data_leave_to = $(this).attr('data-leave-to');	
	var data_days = $(this).attr('data-days');	
   
    $("#pen_data_id").val( data_id );
    $("#pen_emp_id").val( data_emp_id );
    $("#pen_leave_type").val( data_leave_type );
    $("#pen_leave_from").val( data_leave_from );
    $("#pen_leave_to").val( data_leave_to );
    $("#pen_days").val( data_days );
    $('#pending_leave').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="pending_leave" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Leave Pending</h3>
									<p>Are you sure want to keep Pending this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									
										
											<form id="emp_leave_pending" method="post">
									         <input id="pen_data_id" name="data_id" value="" type="hidden">
									         <div class="row">
									         <div class="col-6 mb-3">
											  <label>Emp Code</label>	
									         <input class="form-control" id="pen_emp_id" name="emp_id" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave Type</label>	
									         <input class="form-control" id="pen_leave_type" name="leave_type" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave From</label>	
									         <input class="form-control" id="pen_leave_from" name="leave_from" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave To</label>	
									         <input class="form-control" id="pen_leave_to" name="leave_to" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>No of days</label>	
									         <input class="form-control" id="pen_days" name="days" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Comments</label>	
									         <textarea class="form-control" id="pen_comment" name="comment"></textarea>
									         </div>
									         </div>
									         <div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Pending</button></a>
											</div>
											</form>
										
										<!--<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>-->
										<h4 id="res4" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#emp_leave_pending").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_pending.php",
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
				</div>
				<!-- /Pending Leave Modal -->
				
				<!-- Decline Leave Modal -->
				<script>
				$(".passingdecData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');
	var data_leave_type = $(this).attr('data-leave-type');
	var data_leave_from = $(this).attr('data-leave-from');
	var data_leave_to = $(this).attr('data-leave-to');	
	var data_days = $(this).attr('data-days');	
   
    $("#dec_data_id").val( data_id );
    $("#dec_emp_id").val( data_emp_id );
    $("#dec_leave_type").val( data_leave_type );
    $("#dec_leave_from").val( data_leave_from );
    $("#dec_leave_to").val( data_leave_to );
    $("#dec_days").val( data_days );
    $('#decline_leave').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="decline_leave" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Leave Decline</h3>
									<p>Are you sure want to Decline this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									
										
											<form id="emp_leave_decline" method="post">
									         <input id="dec_data_id" name="data_id" value="" type="hidden">
									         <div class="row">
									         <div class="col-6 mb-3">
											  <label>Emp Code</label>	
									         <input class="form-control" id="dec_emp_id" name="emp_id" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave Type</label>	
									         <input class="form-control" id="dec_leave_type" name="leave_type" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave From</label>	
									         <input class="form-control" id="dec_leave_from" name="leave_from" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Leave To</label>	
									         <input class="form-control" id="dec_leave_to" name="leave_to" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>No of days</label>	
									         <input class="form-control" id="dec_days" name="days" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Comments</label>	
									         <textarea class="form-control" id="dec_comment" name="comment"></textarea>
									         </div>
									         </div>
									         <div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Decline</button></a>
											</div>
											</form>
										
										<!--<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>-->
										<h4 id="res5" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#emp_leave_decline").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_decline.php",
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
				</div>
				<!-- /Pending Leave Modal -->
				
				
				<!-- Delete Leave Modal -->				
				<script>
				$(".passingDetData").click(function () {
	var data_id = $(this).attr('data-id');
	var emp_code = $(this).attr('data-emp-id');
	var data_lead_emp_code = $(this).attr('data-lead-emp-id');
    var data_leave_type = $(this).attr('data-leave-type');
    var data_from_date = $(this).attr('data-from-date');
    var data_to_date = $(this).attr('data-to-date');
    var data_days = $(this).attr('data-days');
    var data_remain_days = $(this).attr('data-remain-days');
    var data_reason = $(this).attr('data-reason');				
   
    $("#del_data_id").val( data_id );
    $("#del_emp_code").val( emp_code );
    $("#del_lead_emp_code").val( data_lead_emp_code );
    $("#del_leave_type").val( data_leave_type );
    $("#del_from_date").val( data_from_date );
    $("#del_to_date").val( data_to_date );
    $("#del_days").val( data_days );
    $("#del_remain_days").val( data_remain_days );
    $("#del_reason").val( data_reason );
    $('#delete_leave').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_leave" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Leave</h3>
									<p>Are you sure want to Cancel this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="emp_leave_delete" method="post">
										<div class="col-12">
									         <input id="del_data_id" name="data_id" value="" type="hidden">
									         <label class="mb-2">Emp Code</label>
									         <input class="form-control" id="del_emp_code" name="emp_code" type="text" readonly>
									         <label class="mb-2">Reporting Emp Code</label>
									         <input class="form-control" id="del_lead_emp_code" name="lead_emp_code" type="text" readonly>
									         <label class="mb-2">Leave Type</label>
									         <input class="form-control" id="del_leave_type" name="leave_type" type="text" readonly>
										     <label class="mb-2">From Date</label>
									         <input class="form-control" id="del_from_date" name="from_date" type="text" readonly>
									          <label class="mb-2">To date</label>
									         <input class="form-control" id="del_to_date" name="to_date" type="text" readonly>
									         <label class="mb-2">No of Days</label>
									         <input class="form-control" id="del_days" name="days" type="text" readonly>
									         <label class="mb-2">Reason</label>
									         <input class="form-control" id="del_reason" name="reason" type="text" readonly>
										<div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Delete</button></a>
										</div>
										</div>
										</form>
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_leave_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_delete.php",
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
					</div>
				</div>
				<!-- /Delete Leave Modal -->
				
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
