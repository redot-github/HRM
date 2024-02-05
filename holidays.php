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
        <title>Holidays - Redot Solutions</title>
		
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
								<h3 class="page-title">Holidays 2024</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Holidays</li>
								</ul>
							</div>
							 <?php 
		//only visible to staff
		require("user_role.php");
		if($role_id == 1){?>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_holiday"><i class="fa-solid fa-plus"></i> Add Holiday</a>
							</div>
							<?php } ?>
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
											<th>Holiday Name</th>
											<th>Holiday Date</th>
											<!--<th>Day</th>-->
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php  // Include the database configuration file
										require_once('inc/config.php');
                                     $sql = $db->query("select * from holidays ORDER BY id DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr class="holiday-upcoming">
											<td><?php echo ++$count; ?></td>
											<td><?php echo $row['holiday_name'];?></td>
											<td><?php 
											  $holi_date = $row['holiday_date'];
                                	          $timestamp1 = strtotime($holi_date);
                                	          $holiday_date = date('F d, Y', $timestamp1);
                                	          echo $holiday_date;?></td>
											
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingHoliData" href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday" data-id="<?php echo $row['id'];?>" data-holiday-name="<?php echo $row['holiday_name'];?>" data-holiday-date="<?php echo $row['holiday_date'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingHoliDataDel" href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday" data-id="<?php echo $row['id'];?>" data-holiday-name="<?php echo $row['holiday_name'];?>" data-holiday-date="<?php echo $row['holiday_date'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
				<div class="modal custom-modal fade" id="add_holiday" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Holiday</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="holiday_add" method="post">
									<div class="input-block mb-3">
										<label class="col-form-label">Holiday Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="holiday_name">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Holiday Date <span class="text-danger">*</span></label>
										<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="holiday_date"></div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#holiday_add").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "holiday_add.php",
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
				$(".passingHoliData").click(function () {
	var data_id = $(this).attr('data-id');
	var data_holiday_name = $(this).attr('data-holiday-name');			
	var data_holiday_date = $(this).attr('data-holiday-date');		
   
    $("#data_id").val( data_id );
    $("#holiday_name").val( data_holiday_name );
    $("#holiday_date").val( data_holiday_date );
    $('#edit_holiday').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="edit_holiday" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Holiday</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="holiday_edit" method="post">
									<input id="data_id" name="data_id" value="" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Holiday Name <span class="text-danger">*</span></label>
										<input class="form-control" id="holiday_name" name="holiday_name" value="" type="text">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Holiday Date <span class="text-danger">*</span></label>
										<div class="cal-icon"><input class="form-control datetimepicker" id="holiday_date" name="holiday_date" value="" type="text"></div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#holiday_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "holiday_edit.php",
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
				$(".passingHoliDataDel").click(function () {
	var data_id = $(this).attr('data-id');
    var data_holiday_name = $(this).attr('data-holiday-name');			
	var data_holiday_date = $(this).attr('data-holiday-date');		
   
     $("#holi_id").val( data_id );
    $("#del_holiday_name").val( data_holiday_name );
    $("#del_holiday_date").val( data_holiday_date );
   
    $('#delete_holiday').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_holiday" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Holiday</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="holiday_delete" method="post">
											 <input id="holi_id" name="holi_id" value="" type="hidden">
										<div class="row">
										<div class="col-6">
									         <input class="form-control" id="del_holiday_name" name="holiday_name" value="" type="text" readonly>
										</div>
										<div class="col-6">
									         <input class="form-control" id="del_holiday_date" name="holiday_date" value="" type="text" readonly>											
										</div>
										</div>
										<div class="row mt-2">
										<div class="col-12 submit-section text-center">
											<a><button class="btn btn-primary submit-btn">Delete</a></button>
										</div>
										</div>
										</form> 
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#holiday_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "holiday_delete.php",
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
