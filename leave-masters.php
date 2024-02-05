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
        <title>Leave types - Redot Solutions</title>
		
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
								<h3 class="page-title">Leave types</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leave types</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leave_type"><i class="fa-solid fa-plus"></i> Add Leave Type</a>
							</div>
						
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Leave Type</th>
											<th>Based on</th>
											<th>No of Day</th>
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php  // Include the database configuration file
										require_once('inc/config.php');
                                     $sql = $db->query("select * from leave_types ORDER BY id DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr class="holiday-upcoming">
											<td><?php echo ++$count; ?></td>
											<td><?php echo $row['leave_type'];?></td>
											<td><?php echo $row['based_on'];?></td>
											<td><?php echo $row['no_of_days'];?></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingLeavData" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave_type" data-id="<?php echo $row['id'];?>" data-leave-type="<?php echo $row['leave_type'];?>" data-based-on="<?php echo $row['based_on'];?>" data-no-of-days="<?php echo $row['no_of_days'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingLeavDataDel" href="#" data-bs-toggle="modal" data-bs-target="#delete_leave_type" data-id="<?php echo $row['id'];?>" data-leave-type="<?php echo $row['leave_type'];?>" data-based-on="<?php echo $row['based_on'];?>" data-no-of-days="<?php echo $row['no_of_days'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
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
				
				<!-- Add Holiday Modal -->
				<div class="modal custom-modal fade" id="add_leave_type" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Leave Type</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="leave_type_add" method="post">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" name="leave_type" required>
											<option>Select Leave Type</option>
											<option value="Casual Leave">Casual Leave</option>
											<option value="Medical Leave">Medical Leave</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Based on <span class="text-danger">*</span></label>
										<select class="select" name="based_on" required>
											<option>Select Based On</option>
											<option value="Monthly">Monthly</option>
											<option value="Yearly">Yearly</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">No of Days <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="no_of_days" required>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#leave_type_add").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_type_add.php",
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
				<!-- /Add Holiday Modal -->
				
				<!-- Edit Holiday Modal -->
				
				<script>
				$(".passingLeavData").click(function () {
	var data_id = $(this).attr('data-id');
	var data_leave_type = $(this).attr('data-leave-type');			
	var data_based_on = $(this).attr('data-based-on');		
	var data_no_of_days = $(this).attr('data-no-of-days');
   
    $("#data_id").val( data_id );
    $("#leave_type").val( data_leave_type );
    $("#based_on").val( data_based_on );
    $("#no_of_days").val( data_no_of_days );
    $('#edit_leave_type').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="edit_leave_type" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Leave Type</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="leave_type_edit" method="post">
									<input id="data_id" name="data_id" value="" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" id="leave_type" name="leave_type" required>
											<option>Select Leave Type</option>
											<option value="Casual Leave">Casual Leave</option>
											<option value="Medical Leave">Medical Leave</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Based On <span class="text-danger">*</span></label>
										<select class="select" id="based_on" name="based_on" required>
											<option>Select Based On</option>
											<option value="Monthly">Monthly</option>
											<option value="Yearly">Yearly</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">No of Days <span class="text-danger">*</span></label>
										<input class="form-control" id="no_of_days" name="no_of_days" type="text" required>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#leave_type_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_type_edit.php",
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
				<!-- /Edit Holiday Modal -->

				<!-- Delete Holiday Modal -->
				<script>
				$(".passingLeavDataDel").click(function () {
	var data_id = $(this).attr('data-id');
	var data_leave_type = $(this).attr('data-leave-type');			
	var data_based_on = $(this).attr('data-based-on');		
	var data_no_of_days = $(this).attr('data-no-of-days');
   
    $("#leav_id").val( data_id );
    $("#d_leave_type").val( data_leave_type );
    $("#d_based_on").val( data_based_on );
    $("#d_no_of_days").val( data_no_of_days );
    $('#delete_leave_type').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_leave_type" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Holiday</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="leave_type_delete" method="post">
									         <input id="leav_id" name="leav_id" value="" type="hidden">
									     <div class="row">    
										<div class="col-6">
											<label class="col-form-label">Leave Type</label>
									         <input class="form-control"  id="d_leave_type" name="d_leave_type" value="" type="text" readonly>
										</div>
										<div class="col-6">
											<label class="col-form-label">Based on</label>
									         <input class="form-control"  id="d_based_on" name="d_based_on" value="" type="text" readonly>
										</div>
										</div>
										<div class="row">
										<div class="col-12">
											<label class="col-form-label">No of Days</label>
									         <input class="form-control"  id="d_no_of_days" name="d_no_of_days" value="" type="text" readonly>
										</div>
										</div>
										<div class="row">
										<div class="col-12 mt-2 text-center">
											<label class="col-form-label"><br></label>
											 <a><button class="btn btn-primary submit-btn">Delete</button></a>
										</div>
										</div>
										</form> 
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#leave_type_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_type_delete.php",
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
				<!-- /Delete Holiday Modal -->
				
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
