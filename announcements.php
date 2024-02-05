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
        <title>Announcements - Redot Solutions</title>
		
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
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Ck Editor -->
		<link rel="stylesheet" href="assets/css/ckeditor.css">
		
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
								<h3 class="page-title">Announcements</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Announcements</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_announcement"><i class="fa-solid fa-plus"></i> Add Announcement</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th class="width-thirty">#</th>
											<th>Date </th>
											<th>Title </th>
											<th>View </th>
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php  // Include the database configuration file
										require_once('inc/config.php');
                                     $sql = $db->query("select * from announcements ORDER BY id ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo ++$count; ?></td>
											<td><?php echo $row['announcement_date'];?></td>
											<td><?php echo $row['title'];?></td>
											<td>
												<!--<a class="passingAnnDataView" href="#" data-bs-toggle="modal" data-bs-target="#view_announcement" data-id="<?php echo $row['id'];?>" data-from-date="<?php echo $row['announcement_from_date'];?>" data-from-date="<?php echo $row['announcement_to_date'];?>" data-title="<?php echo $row['title'];?>" data-image="<?php echo $row['announcement_image'];?>"data-description="<?php echo $row['description'];?>" data-status="<?php echo $row['status'];?>"><i class="fa-solid fa-eye"></i></a>-->
												<a href="announcement-preview.php?id=<?php echo $row['id'];?>" target="_blank"><i class="fa-solid fa-eye"></i></a>											
											</td>
											<td class="text-end">
                                            <div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item passingAnnData" href="#" data-bs-toggle="modal" data-bs-target="#edit_announcement" data-id="<?php echo $row['id'];?>" data-from-date="<?php echo $row['announcement_from_date'];?>" data-from-date="<?php echo $row['announcement_to_date'];?>" data-title="<?php echo $row['title'];?>" data-description="<?php echo $row['description'];?>" data-status="<?php echo $row['status'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item passingAnnDataDel" href="#" data-bs-toggle="modal" data-bs-target="#delete_announcement" data-id="<?php echo $row['id'];?>" data-from-date="<?php echo $row['announcement_from_date'];?>" data-from-date="<?php echo $row['announcement_to_date'];?>" data-title="<?php echo $row['title'];?>" data-description="<?php echo $row['description'];?>" data-status="<?php echo $row['status'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
												</div>
											</td>
										</tr>
										<?php } } ?>
										<!--<tr>
											<td>2</td>
											<td>Web Developer</td>
											<td>Web Development</td>
											<td class="text-end">
                                            <div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_designation"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
												</div>
											</td>
										</tr>-->
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

				<!-- Add Announcement Modal -->
				<div id="add_announcement" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Announcement</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<?php
    $date = date("Y-m-d");
    $time = date("h:i:s a");
?>
 <?php
 
//echo "The time is " . date("h:i:s a");
?> 
								<form id="announcement_add" method="post">
								  <div class="row">
								   <div class="col-sm-3"> 
									<div class="input-block mb-3">
										<label class="col-form-label">From Date <span class="text-danger">*</span></label>
										<!--<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="ann_from_date"></div>-->
										<input class="form-control" type="datetime" name="ann_from_date" value="<?php echo $date; ?>">
									</div>
								   </div>
								   <!--<div class="col-sm-3">
											<div class="input-block mb-3">
												<label class="col-form-label">From Timing  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="ann_from_timing" type="text" value="<?php echo $time; ?>"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
								   </div>
								   <div class="col-sm-3"> 
									<div class="input-block mb-3">
										<label class="col-form-label">To Date <span class="text-danger">*</span></label>
										<!--<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="ann_to_date"></div>
										<input class="form-control" type="datetime" name="ann_to_date" value="<?php echo $date; ?>">
									</div>
								   </div>
								   <div class="col-sm-3">
											<div class="input-block mb-3">
												<label class="col-form-label">To Timing  <span class="text-danger">*</span></label>
												<div class="input-group time">
													<input class="form-control timepicker" name="ann_to_timing" type="text"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
												</div>
											</div>
								   </div>-->								
								  </div>
								  <div class="row">
									<div class="col-sm-4">
									 <div class="input-block mb-3">
										<label class="col-form-label">Title <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="title">
									 </div>									  
								   </div>  
									<div class="col-sm-4"> 	
									<div class="input-block mb-3">
										<label class="col-form-label">Upload Image</label>
										<input class="form-control" type="file" name="ann_img">
									</div>
								   </div>
								   <div class="col-sm-4">
								      <div class="input-block mb-3">
										<label class="col-form-label">Status <span class="text-danger">*</span></label>
										<select class="select" name="status">
											<option>Select Status</option>										
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>									
									</div>
								   </div>
								  </div>
								  <div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea id="editor" class="form-control" name="description"></textarea>
									</div>	
																		
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#announcement_add").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "announcement_add.php",
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
				<!-- /Add Announcement Modal -->
				
				<!-- Edit Announcement Modal -->
				<script>
				$(".passingAnnData").click(function () {
	var data_id = $(this).attr('data-id');
	var data_date = $(this).attr('data-from-date');			
	var data_title = $(this).attr('data-title');
	var data_description = $(this).attr('data-description');
	var data_status = $(this).attr('data-status');		
   
    $("#data_id").val( data_id );
    $("#ann_date").val( data_date );
    $("#title").val( data_title );
    $("#description").val( data_description );
    $("#status").val( data_status );
    $('#edit_announcement').modal('show');
});
				</script>
				<div id="edit_announcement" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Announcement</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="announcement_edit" method="post">
									<input id="data_id" name="data_id" value="" type="hidden">
									<div class="row">
								   <div class="col-sm-4"> 
									<div class="input-block mb-3">
										<label class="col-form-label">Date <span class="text-danger">*</span></label>
										<div class="cal-icon"><input class="form-control datetimepicker" type="text" id="ann_date" name="ann_date"></div>
									</div>
								   </div>
								   <div class="col-sm-4">	
									<div class="input-block mb-3">
										<label class="col-form-label">Title <span class="text-danger">*</span></label>
										<input class="form-control" type="text" id="title" name="title">
									</div>
								    </div>	
									<div class="col-sm-4">
									  <div class="input-block mb-3">
										<label class="col-form-label">Status <span class="text-danger">*</span></label>
										<select class="select" id="status" name="status">
											<option>Select Status</option>										
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>									
									</div>
								   </div>
								  </div>	
									<div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" id="description editor" name="description"></textarea>
									</div>									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#announcement_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "announcement_edit.php",
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
				<!-- /Edit Announcement Modal -->
				
				<!-- Delete Announcement Modal -->
				<script>
				$(".passingAnnDataDel").click(function () {
	var data_id = $(this).attr('data-id');
	var data_date = $(this).attr('data-from-date');			
	var data_title = $(this).attr('data-title');
	var data_description = $(this).attr('data-description');
	var data_status = $(this).attr('data-status');		
   
    $("#del_data_id").val( data_id );
    $("#del_ann_date").val( data_date );
    $("#del_title").val( data_title );
    $("#del_description").val( data_description );
    $("#del_status").val( data_status );
    $('#delete_announcement').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_announcement" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Announcement</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<form id="announcement_delete" method="post">
									<input id="del_data_id" name="data_id" value="" type="hidden">
									<div class="row">
								   <div class="col-sm-4"> 
									<div class="input-block mb-3">
										<label class="col-form-label">Date <span class="text-danger">*</span></label>
										<div class="cal-icon"><input class="form-control datetimepicker" type="text" id="del_ann_date" name="ann_date" readonly></div>
									</div>
								   </div>
								   <div class="col-sm-4">	
									<div class="input-block mb-3">
										<label class="col-form-label">Title <span class="text-danger">*</span></label>
										<input class="form-control" type="text" id="del_title" name="title" readonly>
									</div>
								    </div>	
									<div class="col-sm-4">
									  <div class="input-block mb-3">
										<label class="col-form-label">Status <span class="text-danger">*</span></label>
										<select class="select" id="del_status" name="status" >
											<option>Select Status</option>										
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>									
									</div>
								   </div>
								  </div>	
									<div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" id="del_description editor" name="description" readonly></textarea>
									</div>									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">delete</button>
									</div>
								</form>
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#announcement_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "announcement_delete.php",
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
				<!-- /Delete Announcement Modal -->
				
				<!-- View Announcement Modal -->
				<script>
				$(".passingAnnDataView").click(function () {
	var data_id = $(this).attr('data-id');
	var data_date = $(this).attr('data-from-date');			
	var data_title = $(this).attr('data-title');
	var data_image = $(this).attr('data-image');
	var data_description = $(this).attr('data-description');
	var data_status = $(this).attr('data-status');		
   
    $("#vi_data_id").val( data_id );
    $("#vi_ann_date").val( data_date );
    $("#vi_title").val( data_title );
    $("#vi_image").val( data_image );
    $("#vi_description").val( data_description );
    $("#vi_status").val( data_status );
    $('#view_announcement').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="view_announcement" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl">
						<div class="modal-content">
							<div class="modal-body">
								<div class="modal-header">
								<h5 class="modal-title">Announcement View</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
								<div class="modal-btn delete-action">
									<form id="announcement_view" method="post">
									<input id="vi_data_id" name="data_id" value="" type="hidden">
									<div class="row">
								   <div class="col-sm-4"> 
									<div class="input-block mb-3">
										<label class="col-form-label">Date <span class="text-danger">*</span></label>
										<div class="cal-icon"><input class="form-control datetimepicker" type="text" id="vi_ann_date" name="ann_date" readonly></div>
									</div>
								   </div>
								   <div class="col-sm-4">	
									<div class="input-block mb-3">
										<label class="col-form-label">Title <span class="text-danger">*</span></label>
										<input class="form-control" type="text" id="vi_title" name="title" readonly>
									</div>
								    </div>	
								     <div class="col-sm-4">	
									<div class="input-block mb-3">
										<label class="col-form-label">Image <span class="text-danger">*</span></label>
										<img type="text" id="vi_image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="announcements/">
									</div>
								    </div>	
									<div class="col-sm-4">
									  <div class="input-block mb-3">
										<label class="col-form-label">Status <span class="text-danger">*</span></label>
										<select class="select" id="vi_status" name="status">				
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>									
									</div>
								   </div>
								  </div>	
									<div class="input-block mb-3">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" id="vi_description" name="description" readonly></textarea>
									</div>	
								</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /View Announcement Modal -->
			
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Ck Editor JS -->
		<script src="assets/js/ckeditor.js"></script>
		
		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>
