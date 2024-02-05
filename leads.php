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
        <meta name="description" content="">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Leads - Redot Solutions</title>
		
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
								<h3 class="page-title">Leads</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leads</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#create_team"><i class="fa-solid fa-plus"></i> Create Lead</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped table-nowrap custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Lead Name</th>
											<th>Project /<br> Department /<br> Team name</th>
											<th>Team Members</th>
											<th>Status</th>
											<th>Created</th>
											<th class="text-end">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
									$sql = $db->query("select Distinct team_name, id,lead_emp_code1,department, project_name, client, team_members, description, status, created_on  from teams_lead GROUP BY team_name ORDER BY id DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo ++$count; ?></td>
											<td>
												<h2 class="table-avatar">
													
													<?php $emp_id = $row['lead_emp_code1'];
													$prodcatsql1 = "SELECT name,last_name,email, mobile,image FROM manage_emp WHERE emp_code = '$emp_id'";
								                    $pro_results = mysqli_query($db, $prodcatsql1);
								                    $pro_data = $pro_results->fetch_assoc();
													?>
													<a href="" class="avatar"><img src="profile-img/<?php echo $pro_data['image'];?>" alt=""></a>
													<a href=""><?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?> (<?php echo $emp_id;?>)</a><br>
													<a href="" class="__cf_email_"><?php echo $pro_data['email'];?></a><br><?php echo $pro_data['mobile'];?>
												</h2>
											</td>
											<td><?php echo $row['project_name'];?> / <Br><?php echo $row['department'];?> / <Br><?php echo $row['team_name'];?></td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-purple"></i> Team Members
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<?php $lead_emp_code = $row['lead_emp_code1'];
														$lead_team_name = $row['team_name'];
														$teamsql = $db->query("SELECT team_members FROM teams_lead WHERE lead_emp_code1 = '$lead_emp_code' AND team_name = '$lead_team_name'");    
                                                              if($teamsql->num_rows>0){
                                                               while($teamrow = $teamsql->fetch_assoc()){
																   $prodcatsql2 = "SELECT * FROM manage_emp WHERE emp_code = '".$teamrow['team_members']."'";
								                    $pro_results2 = mysqli_query($db, $prodcatsql2);
								                    $pro_data2 = $pro_results2->fetch_assoc();
																    ?>
														<a class="dropdown-item"><i class="fa-regular fa-circle-dot text-success"></i> <?php echo $pro_data2['name']; ?> <?php echo $pro_data2['last_name']; ?> (<?php echo $teamrow['team_members']; ?>)</a>
														 <?php } } ?>
													</div>
												</div>
											</td>
											<td><span class="badge bg-inverse-success"><?php echo $row['status'];?></span></td>
											<td><?php echo $row['created_on'];?></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingTeamID" href="#"  data-bs-toggle="modal" data-bs-target="#edit_lead" 
										data-id="<?php echo $row['id'];?>" 
										data-lead-id="<?php echo $row['lead_emp_code1'];?>" 
										data-project="<?php echo $row['project_name'];?>"
										data-client="<?php echo $row['client'];?>"  
										data-department="<?php echo $row['department'];?>"										
										data-team-name="<?php echo $row['team_name'];?>"
										data-team_members="<?php echo $row['team_members'];?>"
										data-description="<?php echo $row['description'];?>"
										data-status="<?php echo $row['status'];?>"
										data-created-on="<?php echo $row['created_on'];?>"
										data-department="<?php echo $row["department"];?>"
										><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item passingTeamMem" href="#" data-bs-toggle="modal" data-bs-target="#add_team_member" 
										data-id="<?php echo $row['id'];?>"
										data-lead-id="<?php echo $row['lead_emp_code1'];?>" 
										data-project="<?php echo $row['project_name'];?>"
										data-client="<?php echo $row['client'];?>"  
										data-department="<?php echo $row['department'];?>"										
										data-team-name="<?php echo $row['team_name'];?>"
										data-description="<?php echo $row['description'];?>"
										data-status="<?php echo $row['status'];?>"
										 ><i class="fa-regular fa-user m-r-5"></i> Add Member</a>
														<a class="dropdown-item passingTeamIDdel" href="#" data-bs-toggle="modal" data-bs-target="#delete_lead" 
										data-id="<?php echo $row['id'];?>"
										data-lead-id="<?php echo $row['lead_emp_code1'];?>" 
										data-project="<?php echo $row['project_name'];?>"
										data-client="<?php echo $row['client'];?>"  
										data-department="<?php echo $row['department'];?>"										
										data-team-name="<?php echo $row['team_name'];?>"
										 ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
				
				<!-- Create Team Modal -->
				<div id="create_team" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Team</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="create_lead" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Project Name</label>
												<input class="form-control" type="text" name="project_name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Client</label>
												<select class="form-control select" name="client">
													<option>Select Client</option>
													<?php  
                                     $clie_sql = $db->query("select * from clients ORDER BY id ASC");
									if($clie_sql->num_rows>0){
                                    while($client_row = $clie_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $client_row['client_name'];?>"><?php echo $client_row['client_name'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department</label>
												<select class="form-control select" id="department" name="department">
													<option>Select Department</option>
													<?php  
                                     $sql = $db->query("select * from departments ORDER BY id ASC");
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>											
											<option value="<?php echo $row['department_name'];?>"><?php echo $row['department_name'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<script type="text/javascript" src="jquery.min.js"></script>
                            <script>
	$(document).ready(function() {
	$("#department").change(function() {
		var dep_id = $(this).val();
		if(dep_id != "") {
			$.ajax({
				url:"ajax/get_team_dep_lead.php",
				data:{d_id:dep_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#team_lead").html(resp);
				}
			});
		} else {
			$("#team_lead").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Name</label>
												<input class="form-control" type="text" name="team_name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Team Leader</label>
												<select class="form-control select" id="team_lead" name="team_lead">
													<option>Select Team Lead</option>
												</select>
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Leader</label>
												<div class="project-members">
													<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
													</a>
												</div>
											</div>
										</div>-->
									</div>
									<script>
	$(document).ready(function() {
	$("#department").change(function() {
		var dep_id = $(this).val();
		if(dep_id != "") {
			$.ajax({
				url:"ajax/get_team_dep_member.php",
				data:{d_id:dep_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#team_members").html(resp);
				}
			});
		} else {
			$("#team_members").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Team</label>
												<select class="form-control select" multiple id="team_members" name="team_members[]">
													<option>Select Team Members</option>
													
												</select>
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Members</label>
												<div class="project-members">
													<a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>-->
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Description</label>
										<input type="text" name="description" id="editor">
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="form-control select" name="status">
													<option>Select Status</option>
													<option value="Active">Active</option>
													<option value="Inactive">Inactive</option>
												</select>
											</div>
										</div>
									</div>	
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>

<script>

$(document).ready(function (e) {
	$("#create_lead").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "lead_team_update.php",
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
				<!-- /Create Team Modal -->
				
				<!-- Edit Team Modal -->
				<script>
				$(".passingTeamID").click(function () {
    var ids = $(this).attr('data-id');
    var data_lead_id = $(this).attr('data-lead-id');
    var data_project = $(this).attr('data-project');
    var data_client = $(this).attr('data-client');
    var data_department = $(this).attr('data-department');
    var data_team_name = $(this).attr('data-team-name');
    var data_team_members = $(this).attr('data-team-members');
    var data_description = $(this).attr('data-description');
    var data_status = $(this).attr('data-status');
    var data_created_on = $(this).attr('data-created-on'); 
    $("#emp_code").val( ids );
    $("#e_team_lead").val( data_lead_id );
    $("#project").val( data_project );
    $("#client").val( data_client );
    $("#e_department").val( data_department );
    $("#team_name").val( data_team_name );
    $("#e_team_members").val( data_team_members );
    $("#description").val( data_description );
    $("#status").val( data_status );
    $("#created_on").val( data_created_on );
    $('#edit_lead').modal('show');
});
				</script>
				<div id="edit_lead" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Team</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="edit_team" method="post">
									
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Project Name</label>
												<input class="form-control" id="project" type="text" name="project_name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Client</label>
												<select class="form-control select" id="client" name="client">
													<option>Select Client</option>
													<?php  
                                     $clie_sql2 = $db->query("select * from clients ORDER BY id ASC");
									if($clie_sql2->num_rows>0){
                                    while($client_row2 = $clie_sql2->fetch_assoc()){ ?>											
											<option value="<?php echo $client_row2['client_name'];?>"><?php echo $client_row2['client_name'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department</label>
												<select class="form-control select" id="e_department" name="department">
													<option>Select Department</option>
													<?php  
                                     $sql = $db->query("select distinct department from teams_lead ORDER BY department ASC");
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>											
											<option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<script type="text/javascript" src="jquery.min.js"></script>
                     
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Name</label>
												<!--<input class="form-control" type="text" id="team_name" name="team_name">-->
												<select class="form-control select" id="team_name" name="team_name">
													<option>Select Team Name</option>
													<?php  
                                     $team_sql = $db->query("select distinct team_name from teams_lead ORDER BY team_name ASC");
									if($team_sql->num_rows>0){
                                    while($team_row = $team_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $team_row['team_name'];?>"><?php echo $team_row['team_name'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
									</div>
									       <!--<script>
	$(document).ready(function() {
	$("#team_name").change(function() {
		var tea_id = $(this).val();
		if(tea_id != "") {
			$.ajax({
				url:"ajax/get_task_team_lead.php",
				data:{t_id:tea_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#e_team_lead").html(resp);
				}
			});
		} else {
			$("#e_team_lead").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script>--> 
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Team Leader</label>
												<select class="form-control select" id="e_team_lead" name="team_lead" value="">
													<option>Select Team Lead</option>
													<?php 
                                     $lead_sql = $db->query("select distinct emp_code,name,last_name, designation from manage_emp WHERE role= '3' OR role='1' ORDER BY emp_code ASC");
									if($lead_sql->num_rows>0){
                                    while($lead_row = $lead_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $lead_row['emp_code'];?>"><?php echo $lead_row['name'];?> <?php echo $lead_row['last_name'];?> (<?php echo $lead_row['designation'];?>)</option>
											<?php }} ?>	
												</select>
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Leader</label>
												<div class="project-members">
													<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
													</a>
												</div>
											</div>
										</div>-->
									</div>
									<script>
	$(document).ready(function() {
	$("#team_name").change(function() {
		var tea_id = $(this).val();
		var dept_id = $('#e_department').val();
		var lea_id = $('#e_team_lead').val();
		if(tea_id != "") {
			$.ajax({
				url:"ajax/get_task_team_member.php",
				data:{t_id:tea_id,d_id:dept_id,l_id:lea_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#e_team_members").html(resp);
				}
			});
		} else {
			$("#e_team_members").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
       						<div class="row">
										<!--<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Team</label>
												<select class="form-control select" multiple id="e_team_members" name="team_members[]" required>
													<option>Select Team Members</option>
													<!--<?php 
														$teamsql = $db->query("SELECT distinct team_members FROM teams_lead");    
                                                              if($teamsql->num_rows>0){
                                                               while($teamrow = $teamsql->fetch_assoc()){
																   $prodcatsql2 = "SELECT distinct name,last_name,emp_code,designation FROM manage_emp WHERE emp_code = '".$teamrow['team_members']."'";
								                    $pro_results2 = mysqli_query($db, $prodcatsql2);
								                    $pro_data2 = $pro_results2->fetch_assoc();
																    ?>
														<option value="<?php echo $pro_data2['emp_code']; ?>"><?php echo $pro_data2['name']; ?> <?php echo $pro_data2['last_name']; ?> (<?php echo $teamrow['team_members']; ?>)<br>(<?php echo $pro_data2['designation']; ?>)</option>
														 <?php } } ?>
												</select>
											</div>
										</div>-->
										<!--<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Members</label>
												<div class="project-members">
													<a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>-->
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Description</label>
										<br><textarea class="form-control" name="description" id="description"></textarea>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="form-control select" id="status" name="status">
													<option>Select Status</option>
													<option value="Active">Active</option>
													<option value="Inactive">Inactive</option>
												</select>
											</div>
										</div>
									</div>	
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res1" class="submit-section" style="text-align: center;"></h4>

<script>

$(document).ready(function (e) {
	$("#edit_team").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "lead_team_edit.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success:function(response) {
					var resp = $.trim(response);
					$("#res1").html(resp);
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
				<!-- /Edit Team Modal -->
				
				<!-- Add Team Member Modal -->
				<script>
				$(".passingTeamMem").click(function () {
    var ids = $(this).attr('data-id');
    var data_lead_id = $(this).attr('data-lead-id');
    var data_project = $(this).attr('data-project');
    var data_client = $(this).attr('data-client');
    var data_department = $(this).attr('data-department');
    var data_lead_id = $(this).attr('data-lead-id');
    var data_team_name = $(this).attr('data-team-name');
    var data_team_members = $(this).attr('data-team-members');
    var data_description = $(this).attr('data-description');
    var data_status = $(this).attr('data-status');
    var data_created_on = $(this).attr('data-created-on'); 
    $("#emp_code").val( ids );
    $("#me_team_lead").val( data_lead_id );
    $("#me_project").val( data_project );
    $("#me_client").val( data_client );
    $("#me_department").val( data_department );
    $("#me_lead_id").val( data_lead_id );
    $("#me_team_name").val( data_team_name );
    $("#me_team_members").val( data_team_members );
    $("#me_description").val( data_description );
    $("#me_status").val( data_status );
    $("#created_on").val( data_created_on );
    $('#add_team_member').modal('show');
});
				</script>
				<div id="add_team_member" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Team Member</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="add_team_members" method="post">
									
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Project Name</label>
												<input class="form-control" id="me_project" type="text" name="project_name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Client</label>
												<input class="form-control" id="me_client" type="text" name="client">												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department</label>
												<input class="form-control" id="me_department" type="text" name="department">												
											</div>
										</div>
										<script type="text/javascript" src="jquery.min.js"></script>
                     
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Name</label>
												<select class="form-control select" id="me_team_name" name="team_name">
													<option>Select Team Name</option>
													<?php  
                                     $team_sql = $db->query("select distinct team_name from teams_lead ORDER BY team_name ASC");
									if($team_sql->num_rows>0){
                                    while($team_row = $team_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $team_row['team_name'];?>"><?php echo $team_row['team_name'];?></option>
											<?php }} ?>
												</select>												
											</div>
										</div>
									</div>
									       <!--<script>
	$(document).ready(function() {
	$("#team_name").change(function() {
		var tea_id = $(this).val();
		if(tea_id != "") {
			$.ajax({
				url:"ajax/get_task_team_lead.php",
				data:{t_id:tea_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#e_team_lead").html(resp);
				}
			});
		} else {
			$("#e_team_lead").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script>--> 
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Team Leader</label>
												<input class="form-control" type="text" id="me_team_lead" name="team_lead">
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Leader</label>
												<div class="project-members">
													<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
													</a>
												</div>
											</div>
										</div>-->
									</div>
									<script>
	$(document).ready(function() {
	$("#me_team_name").change(function() {
		var tea_id = $(this).val();
		var dept_id = $('#me_department').val();
		var lea_id = $('#me_team_lead').val();
		if(tea_id != "") {
			$.ajax({
				url:"ajax/get_task_team_member.php",
				data:{t_id:tea_id,d_id:dept_id,l_id:lea_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#me_team_members").html(resp);
				}
			});
		} else {
			$("#me_team_members").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
       						<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Team</label>
												<select class="form-control select" multiple id="me_team_members" name="team_members[]" required>
													<option>Select Team Members</option>
													<!--<?php 
														$teamsql = $db->query("SELECT distinct team_members FROM teams_lead");    
                                                              if($teamsql->num_rows>0){
                                                               while($teamrow = $teamsql->fetch_assoc()){
																   $prodcatsql2 = "SELECT distinct name,last_name,emp_code,designation FROM manage_emp WHERE emp_code = '".$teamrow['team_members']."'";
								                    $pro_results2 = mysqli_query($db, $prodcatsql2);
								                    $pro_data2 = $pro_results2->fetch_assoc();
																    ?>
														<option value="<?php echo $pro_data2['emp_code']; ?>"><?php echo $pro_data2['name']; ?> <?php echo $pro_data2['last_name']; ?> (<?php echo $teamrow['team_members']; ?>)<br>(<?php echo $pro_data2['designation']; ?>)</option>
														 <?php } } ?>-->
												</select>
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Members</label>
												<div class="project-members">
													<a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</a>
													<a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>-->
									</div>	
									<div class="input-block mb-3">
										<label class="col-form-label">Description</label>
										<br><textarea class="form-control" name="description" id="me_description"></textarea>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="form-control select" id="me_status" name="status">
													<option>Select Status</option>
													<option value="Active">Active</option>
													<option value="Inactive">Inactive</option>
												</select>
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
	$("#add_team_members").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "lead_team_member_add.php",
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
				<!-- /Edit Team Modal -->
				
				<!-- Delete Employee Modal -->
				<script>
				$(".passingTeamIDdel").click(function () {
    var id = $(this).attr('data-id');
    var data_emp_id = $(this).attr('data-lead-id');
      var data_project = $(this).attr('data-project');
       var data_client = $(this).attr('data-client');
        var data_department = $(this).attr('data-department');
         var data_team_name = $(this).attr('data-team-name');
    
    $("#data_id").val( id );
    $("#le_emp_id").val( data_emp_id );
     $("#de_project").val( data_project );
      $("#de_client").val( data_client );
       $("#de_department").val( data_department );
        $("#de_team_name").val( data_team_name );
    $('#delete_lead').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_lead" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Team</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<form id="team_delete" method="post">
									<div class="row">
										<div class="col-12 text-center">											
									         <input id="data_id" name="data_id" value="" type="hidden">
									         <label class="mb-2">Lead</label>
									         <input class="form-control mb-2" id="le_emp_id" name="emp_id" value="" type="text" readonly>
									         <label class="mb-2">Project</label>
									         <input class="form-control mb-2" id="de_project" name="project" value="" type="text" readonly>
									         <label class="mb-2">Client</label>
									         <input class="form-control mb-2" id="de_client" name="client" value="" type="text" readonly>
									         <label class="mb-2">Department</label>
									         <input class="form-control mb-2" id="de_department" name="department" value="" type="text" readonly>
									         <label class="mb-2">Team Name</label>
									         <input class="form-control mb-2" id="de_team_name" name="team_name" value="" type="text" readonly>
									         </div>
									         <div class="submit-section">
											<button class="btn btn-primary submit-btn">Delete</button>
											</div>
											</form>
										
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#team_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "lead_team_delete.php",
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
		
		<!-- Ck Editor JS -->
		<script src="assets/js/ckeditor.js"></script>
		
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
