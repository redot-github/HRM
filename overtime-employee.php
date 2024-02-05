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
  $prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$id'";
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
        <title>Employee Overtime - Redot Solutions</title>
		
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Overtime</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Overtime</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_overtime"><i class="fa-solid fa-plus"></i> Add Overtime</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Overtime Statistics -->
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="stats-info">
								<h6>Overtime Employee</h6>
								<h4>12 <span>this month</span></h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="stats-info">
								<h6>Overtime Hours</h6>
								<h4>118 <span>this month</span></h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="stats-info">
								<h6>Pending Request</h6>
								<h4>23</h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="stats-info">
								<h6>Rejected</h6>
								<h4>5</h4>
							</div>
						</div>
					</div>
					<!-- /Overtime Statistics -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table leave-employee-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<!--<th>Name</th>-->
											<th>OT Date</th>
											<th class="text-center">OT Hours</th>
											<!--<th>OT Type</th>-->
											<th>Description</th>
											<th class="text-center">Status</th>
											<th>Approved by</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php  
                                     $sql = $db->query("select * from overtime WHERE emp_code = '$id' ORDER BY overtime_date DESC");
                                     $count=0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo ++$count;?></td>
											<!--<td>
												<h2 class="table-avatar blue-link">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a href="profile.php">John Doe</a>
												</h2>
											</td>-->
											<td><?php $pro_data_date = $row['overtime_date'];
                                	          $timestamp = strtotime($pro_data_date);
                                	          $formatted_date = date('M d, Y', $timestamp);
                                	          echo $formatted_date; ?></td>
											<td class="text-center"><?php echo $row['overtime_hours'];?></td>
											<!--<td>Normal day OT 1.5x</td>-->
											<td><?php echo $row['description'];?></td>
											<td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-purple"></i> <?php echo $row['status'];?>
													</a>
												</div>
											</td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>-->
													<a href="#"><?php echo $row['approved_by'];?></a>
												</h2>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">													
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<?php $status = $row['status']; 
														if($status == 'New'){ ?>
													<div class="dropdown-menu dropdown-menu-right">														
														<a class="dropdown-item passingOtData" href="#" data-bs-toggle="modal" data-bs-target="#edit_overtime" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-ot-date="<?php echo $row['overtime_date'];?>" data-ot-hour="<?php echo $row['overtime_hours'];?>" data-desc="<?php echo $row['description'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingOtDataDel" href="#" data-bs-toggle="modal" data-bs-target="#delete_overtime" data-id="<?php echo $row['id'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
													<?php } ?>
												</div>
											</td>
										</tr>
										<?php } } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Overtime Modal -->
				<div id="add_overtime" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Overtime</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="overtime_add" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<!--<div class="input-block mb-3">
										<label class="col-form-label">Select Employee <span class="text-danger">*</span></label>
										<select class="select">
											<option>-</option>
											<option>John Doe</option>
											<option>Richard Miles</option>
											<option>John Smith</option>
										</select>
									</div>-->
									<div class="input-block mb-3">
										<label class="col-form-label">Overtime Date <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="ot_date">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Overtime Hours <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="ot_hour">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" name="description"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#overtime_add").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "overtime_add.php",
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
				<!-- /Add Overtime Modal -->
				
				<!-- Edit Overtime Modal -->
				<script>
				$(".passingOtData").click(function () {
	var data_id = $(this).attr('data-id');
	var data_emp_id = $(this).attr('data-emp-id');
	var data_ot_date = $(this).attr('data-ot-date');			
	var data_ot_hour = $(this).attr('data-ot-hour');
	var data_desc = $(this).attr('data-desc');	
   
    $("#data_id").val( data_id );
    $("#emp_id").val( data_emp_id );
    $("#ot_date").val( data_ot_date );
    $("#ot_hour").val( data_ot_hour );
    $("#desc").val( data_desc );
    $('#edit_overtime').modal('show');
});
				</script>
				<div id="edit_overtime" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Overtime</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="overtime_edit" method="post">
									<input name="emp_id" id="emp_id" value="" type="hidden">
									<input name="data_id" id="data_id" value="" type="hidden">
									<!--<div class="input-block mb-3">
										<label class="col-form-label">Select Employee <span class="text-danger">*</span></label>
										<select class="select">
											<option>-</option>
											<option>John Doe</option>
											<option>Richard Miles</option>
											<option>John Smith</option>
										</select>
									</div>-->
									<div class="input-block mb-3">
										<label class="col-form-label">Overtime Date <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="ot_date" id="ot_date">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Overtime Hours <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="ot_hour" id="ot_hour">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" name="desc" id="desc"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#overtime_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "overtime_edit.php",
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
				<!-- /Edit Overtime Modal -->
				
				<!-- Delete Overtime Modal -->
				<script>
				$(".passingOtDataDel").click(function () {
	var data_id = $(this).attr('data-id');
   
    $("#ot_id").val( data_id );
    $('#delete_overtime').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_overtime" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Overtime</h3>
									<p>Are you sure want to Cancel this?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<form id="overtime_delete" method="post">
									         <input id="ot_id" name="ot_id" value="" type="hidden">
											<a><button class="btn btn-primary continue-btn">Delete</button></a>
											</form>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#overtime_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "overtime_delete.php",
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
				<!-- /Delete Overtime Modal -->
				
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
