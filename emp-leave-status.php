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
        <title>Employees Leave Status - Redot Solutions</title>
		
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
								<h3 class="page-title">Employees Leave Status</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Employees Leave Status</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leave_status"><i class="fa-solid fa-plus"></i> Add Leave</a>
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
					   <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating" name="emp_code">
								<label class="focus-label">Employee Name OR Emp Code</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">  
							<button type="submit" name="submit" class="btn btn-success w-100"> Search </button>  
					   </div>     
                    </div>
                    </form>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>S.no</th>
											<th>Employee Name - Code</th>
											<th>Casual Leave</th>
											<th>Casual Leave Taken</th>
											<th>Casual Leave Balance</th>
											<th>Medical Leave</th>
											<th>Medical Leave Taken</th>
											<th>Medical Leave Balance</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
							<?php
// Include the database configuration file
require_once('inc/config.php');
if(isset($_POST["submit"])){
	
	 $emp_code = mysqli_real_escape_string($db,$_POST['emp_code']);
      
      
      $empsql = $db->query("SELECT * from  emp_leave_status WHERE emp_name LIKE '%$emp_code' OR emp_name LIKE '$emp_code%' OR emp_name LIKE '%$emp_code%' OR emp_code='$emp_code' ORDER BY emp_code Desc");
      $count = 0;
      if($empsql->num_rows > 0) {
         while($emprow = $empsql->fetch_assoc()) { ?>
			 <tr>
											<td><?php echo ++$count;?></td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>-->
													<a href=""><?php echo $emprow['emp_name'];?> - <?php echo $emprow['emp_code'];?></a>
												</h2>
											</td>
											<td><?php echo $emprow['casual_leave'];?></td>
											<td><?php echo $emprow['casual_leave_taken'];?></td>
											<td><?php echo $emprow['casual_leave_balance'];?></td>
											<td><?php echo $emprow['medical_leave'];?></td>
											<td><?php echo $emprow['medical_leave_taken'];?></td>
											<td><?php echo $emprow['medical_leave_balance'];?></td>
											<!--<td><?php $total = $emprow['medical_leave'] + $emprow['casual_leave']; echo $total; ?> Days</td>-->
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingDATA" href="#" data-bs-toggle="modal" data-bs-target="#edit_emp_leave_status"
														data-id="<?php echo $emprow['id'];?>" 
														data-emp-id="<?php echo $emprow['emp_code'];?>" 
														data-emp-name="<?php echo $emprow['emp_name'];?>"
														data-casual-leave="<?php echo $emprow['casual_leave'];?>"
														data-medical-leave="<?php echo $emprow['medical_leave'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingDetData" href="#" data-bs-toggle="modal" data-bs-target="#delete_emp_leave_status"  
														data-id="<?php echo $emprow['id'];?>"
														data-emp-id="<?php echo $emprow['emp_code'];?>" 
														data-emp-name="<?php echo $emprow['emp_name'];?>"
														data-casual-leave="<?php echo $emprow['casual_leave'];?>"
														data-medical-leave="<?php echo $emprow['medical_leave'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
			    
			 
			 <?php }
		 } else {
		 
		 Echo "Not Found in Search";
		 
		 }
       
  } else { ?>
							
										<?php
									$sql = $db->query("select * from emp_leave_status  ORDER BY emp_code ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo ++$count;?></td>
											<td>
												<h2 class="table-avatar">
													<?php 
													$leaimgvsql = "SELECT name,last_name,image FROM manage_emp WHERE emp_code = '".$row['emp_code']."'";
								$leavimg_results = mysqli_query($db, $leaimgvsql);
								$leavimg_data = $leavimg_results->fetch_assoc();
													?>
													<a href="" class="avatar"><img src="profile-img/<?php echo $leavimg_data['image']; ?>" alt=""></a>
													<a href=""><?php echo $leavimg_data['name'];?> <?php echo $leavimg_data['last_name'];?> (<?php echo $row['emp_code'];?>)</a>
												</h2>
											</td>
											<td><?php echo $row['casual_leave'];?></td>
											<td><span class="btn btn-danger btn-sm"><b><?php echo $row['casual_leave_taken'];?></b></span></td>
											<td><span class="btn btn-success btn-sm"><b><?php echo $row['casual_leave_balance'];?></b></span></td>
											<td><?php echo $row['medical_leave'];?></td>
											<td><span class="btn btn-danger btn-sm"><b><?php echo $row['medical_leave_taken'];?></b></span></td>
											<td><span class="btn btn-success btn-sm"><b><?php echo $row['medical_leave_balance'];?></b></span></td>
											<!--<td><?php $total = $row['medical_leave'] + $row['casual_leave']; echo $total; ?> Days</td>-->
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingDATA" href="#" data-bs-toggle="modal" data-bs-target="#edit_emp_leave_status"
														data-id="<?php echo $row['id'];?>" 
														data-emp-id="<?php echo $row['emp_code'];?>" 
														data-emp-name="<?php echo $row['emp_name'];?>"
														data-casual-leave="<?php echo $row['casual_leave'];?>"
														data-medical-leave="<?php echo $row['medical_leave'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingDetData" href="#" data-bs-toggle="modal" data-bs-target="#delete_emp_leave_status" 
														data-id="<?php echo $row['id'];?>"
														data-emp-id="<?php echo $row['emp_code'];?>" 
														data-emp-name="<?php echo $row['emp_name'];?>"
														data-casual-leave="<?php echo $row['casual_leave'];?>"
														data-medical-leave="<?php echo $row['medical_leave'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
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
				<div id="add_leave_status" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Leave Status</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="leave_status_status_add" method="post">
									<div class="input-block mb-3">
										<label class="col-form-label">Emp Code <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="emp_code" required>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Emp Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="emp_name" required>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Casual Leave <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="casual_leave" required>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Medical Leave <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="medical_leave" required>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#leave_status_status_add").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_leave_status_add.php",
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
    var data_emp_name = $(this).attr('data-emp-name');
    var data_casual_leave = $(this).attr('data-casual-leave');
    var data_medical_leave = $(this).attr('data-medical-leave');
    $("#lea_id").val( le_id );
    $("#emp_code").val( emp_code );
    $("#emp_name").val( data_emp_name );
    $("#casual_leave").val( data_casual_leave );
    $("#medical_leave").val( data_medical_leave );
    $('#edit_emp_leave_status').modal('show');
});
				</script>
				<div id="edit_emp_leave_status" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="emp_leave_status_edit" method="post">
									<input id="lea_id" name="lea_id" value="" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Emp Code <span class="text-danger">*</span></label>
										<input class="form-control" type="text" id="emp_code" name="emp_code" required>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Emp Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" id="emp_name" name="emp_name" required>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Casual Leave <span class="text-danger">*</span></label>
										<input class="form-control" type="text" id="casual_leave" name="casual_leave" required>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Medical Leave <span class="text-danger">*</span></label>
										<input class="form-control" type="text" id="medical_leave" name="medical_leave" required>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_leave_status_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_leave_status_edit.php",
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
				$(".passingDetData").click(function () {
		var le_id = $(this).attr('data-id');				
    var emp_code = $(this).attr('data-emp-id');
    var data_emp_name = $(this).attr('data-emp-name');
    var data_casual_leave = $(this).attr('data-casual-leave');
    var data_medical_leave = $(this).attr('data-medical-leave');
    $("#leav_id").val( le_id );
    $("#d_emp_code").val( emp_code );
    $("#d_emp_name").val( data_emp_name );
    $("#d_casual_leave").val( data_casual_leave );
    $("#d_medical_leave").val( data_medical_leave );
    $('#delete_emp_leave_status').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_emp_leave_status" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Employee Leave Status</h3>
									<p>Are you sure want to approve for this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									
										
											<form id="emp_leave_status_delete" method="post">
									         <input id="leav_id" name="leav_id" value="" type="hidden">
									         <div class="row">
									         <div class="col-6 mb-3">
											  <label>Emp Code</label>	
									         <input class="form-control" id="d_emp_code" name="d_emp_code" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Emp Name</label>	
									         <input class="form-control" id="d_emp_name" name="d_emp_name" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Casual Leave</label>	
									         <input class="form-control" id="d_casual_leave" name="d_casual_leave" value="" type="text" readonly>
									         </div>
									         <div class="col-6 mb-3">
											  <label>Medical Leave</label>	
									         <input class="form-control" id="d_medical_leave" name="d_medical_leave" value="" type="text" readonly>
									         </div>
									         </div>
									         <div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Delete</button></a>
											</div>
											</form>
										
										<!--<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>-->
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#emp_leave_status_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_leave_status_delete.php",
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
				
				
				<!-- Delete Leave Modal -->
				<div class="modal custom-modal fade" id="delete_approve" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Leave</h3>
									<p>Are you sure want to delete this leave?</p>
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
