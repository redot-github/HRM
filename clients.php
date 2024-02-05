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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Clients - Redot Solutions</title>
		
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
								<h3 class="page-title">Clients</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Clients</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_clients"><i class="fa-solid fa-plus"></i> Add Client</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div>
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th class="width-thirty">#</th>
											<th>Client Name</th>
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php  // Include the database configuration file
										require_once('inc/config.php');
                                     $sql = $db->query("select * from clients ORDER BY id ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo ++$count; ?></td>
											<td><?php echo $row['client_name'];?></td>
											<td class="text-end">
                                            <div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item passingCliData" href="#" data-bs-toggle="modal" data-bs-target="#edit_client" data-id="<?php echo $row['id'];?>" data-client="<?php echo $row['client_name'];?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item passingCliDataDel" href="#" data-bs-toggle="modal" data-bs-target="#delete_client" data-id="<?php echo $row['id'];?>" data-client="<?php echo $row['client_name'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
												</div>
											</td>
										</tr>
										<?php } } ?>
										<!--<tr>
											<td>2</td>
											<td>Application Development</td>
											<td class="text-end">
                                            <div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
				
				<!-- Add Client Modal -->				
				<div id="add_clients" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Client</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="add_client" method="post">
									<div class="input-block mb-3">
										<label class="col-form-label">Client Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="client">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>
                                
 <script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function (e) {
	$("#add_client").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "client_add.php",
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
				<!-- /Add Client Modal -->
				
				<!-- Edit Client Modal -->
				
				<script>
				$(".passingCliData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_client = $(this).attr('data-client');		
   
    $("#data_id").val( data_id );
    $("#client").val( data_client );
    $('#edit_client').modal('show');
});
				</script>
				<div id="edit_client" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Client</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="client_edit" method="post">
									<input id="data_id" name="data_id" value="" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Client Name <span class="text-danger">*</span></label>
										<input class="form-control" id="client" name="client" value="" type="text">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#client_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "client_edit.php",
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
				<!-- /Edit Client Modal -->

				<!-- Delete Client Modal -->
				<script>
				$(".passingCliDataDel").click(function () {
	var data_id = $(this).attr('data-id');
	var data_client = $(this).attr('data-client');
   
    $("#cli_id").val( data_id );
    $("#cli_name").val( data_client );
    $('#delete_client').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_client" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Client</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<form id="client_delete" method="post">
										<div class="col-12">
									         <input id="cli_id" name="cli_id" value="" type="hidden">
									         <input class="form-control" id="cli_name" name="cli_name" type="text" readonly>
										</div>
										<div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Delete</button></a>
										</div>	
										</form>
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#client_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "client_delete.php",
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
				<!-- /Delete Client Modal -->
				
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
