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
        <title>Employee Task Points - Redot Solutions</title>
		
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
								<h3 class="page-title">Team Task Points</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Team Task Points</li>
								</ul>
							</div>
							<!--<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_task"><i class="fa-solid fa-plus"></i> Add Task</a>
							</div>-->
						</div>
					</div>
					<!-- /Page Header -->
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table leave-employee-table mb-0 datatable">
									<thead>
										<tr>
											<th>Client/Project/Team</th>
											<th>Task Name</th>
											<th>Employee</th>											
											<th>Priority</th>
											<th>Due Date/Submission Date</th>
											<th class="text-center">Prograss Status</th>
											<th class="text-center">Task Points / Points Given</th>
											<th class="text-end">Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
									$sql = $db->query("select * from emp_tasks where lead_emp_code='$id' ORDER BY id DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo $row['client'];?> / <?php echo $row['project_name'];?> / <?php echo $row['team_name'];?></td>
											<td><a style="color: #2106a6;" href="task-details.php?id=<?php echo $row['id'];?>&&name=<?php echo $row['task_name'];?>" target="_blank"><?php echo $row['task_name'];?></a></td>
											<td><?php $a_emp_id = $row['to_emp'];
													$prodasssql1 = "SELECT * FROM manage_emp WHERE emp_code = '$a_emp_id'";
								                    $pro_ass_results = mysqli_query($db, $prodasssql1);
								                    $pro_ass_data = $pro_ass_results->fetch_assoc();?>
								                    <?php echo $pro_ass_data['name'];?> <?php echo $pro_ass_data['last_name'];?>(<?php echo $row['to_emp'];?>)</td>
											
											
											<td><?php echo $row['priority'];?></td>
											<td><?php 
											   $pro_data1 = $row['due_date'];
                                	          $timestamp1 = strtotime($pro_data1);
                                	          $formatted_date1 = date('F d, Y', $timestamp1);
                                	          echo $formatted_date1; ?> / <?php 
											   $pro_data2 = $row['report_on'];
                                	          $timestamp2 = strtotime($pro_data1);
                                	          $formatted_date2 = date('F d, Y', $timestamp2);
                                	          echo $formatted_date2; ?>
											</td>
											<td><p><?php echo $row['report_progress_status'];?>%</p>
												<div class="progress progress-xs progress-striped">
												  <div class="progress-bar w-<?php echo $row['report_progress_status'];?>" role="progressbar" data-bs-toggle="tooltip" title="<?php echo $row['report_progress_status'];?>%"></div>
												</div>
											</td>
											<td class="text-center">
												<?php echo $row['task_points'];?>
													/
												<?php echo $row['task_points_approval'];?>												
											</td>
											<td class="text-end">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-purple"></i> <?php echo $row['report_status'];?>
													</a>
												</div>
											</td>
											
											<!--<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingDATA" href="#" data-bs-toggle="modal" data-bs-target="#edit_task" 
														data-id="<?php echo $row['id'];?>" 
														data-lead-emp-id="<?php echo $row['lead_emp_code'];?>"
														data-lead-emp-name="<?php echo $row['lead_name'];?>" 
														data-cilent="<?php echo $row['client'];?>"
														data-project="<?php echo $row['project_name'];?>"
														data-team-name="<?php echo $row['team_name'];?>"
														data-task-to="<?php echo $row['to_emp'];?>"
														data-priority="<?php echo $row['priority'];?>"
														data-due-date="<?php echo $row['due_date'];?>"
														data-task-name="<?php echo $row['task_name'];?>"
														data-description="<?php echo $row['description'];?>"
														data-status="<?php echo $row['status'];?>">
														<i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingDetData" href="#" data-bs-toggle="modal" data-bs-target="#delete_task" 
														data-id="<?php echo $row['id'];?>"
														data-lead-emp-id="<?php echo $row['lead_emp_code'];?>"
														data-cilent="<?php echo $row['client'];?>"
														data-project="<?php echo $row['project_name'];?>"
														data-team-name="<?php echo $row['team_name'];?>"
														data-task-to="<?php echo $row['to_emp'];?>"
														data-task-name="<?php echo $row['task_name'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>-->
										</tr>
										<?php }} ?>
										<!--<tr>
											<td>Medical Leave</td>
											<td>27 Feb 2019</td>
											<td>27 Feb 2019</td>
											<td>1 day</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="action-label">
													<a class="btn btn-white btn-sm btn-rounded" href="javascript:void(0);">
														<i class="fa-regular fa-circle-dot text-success"></i> Approved
													</a>
												</div>
											</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="#">Richard Miles</a>
												</h2>
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
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Task Modal -->
				<div id="add_task" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Task</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<?php 
								 $id= $_SESSION['username'];
								$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$id'";
								$pro_results = mysqli_query($db, $prodcatsql1);
								$pro_data = $pro_results->fetch_assoc();
								?>
								<form id="create_task" method="post">
									<input name="lead_code" id="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<input name="lead_name" value="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>" type="hidden">
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Client</label>
												<select class="select" id="client" name="client">
													<option>Select Client</option>
													<?php  
                                     $des_sql = $db->query("select distinct client from teams_lead WHERE lead_emp_code1 ='$id' ORDER BY id ASC");
									if($des_sql->num_rows>0){
                                    while($des_row = $des_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $des_row['client'];?>"><?php echo $des_row['client'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<script type="text/javascript" src="jquery.min.js"></script>
                            <script>
	$(document).ready(function() {
	$("#client").change(function() {
		var cli_id = $(this).val();
		var emp_id = $("#emp_code").val();
		if(cli_id != "") {
			$.ajax({
				url:"ajax/get_task_team.php",
				data:{c_id:cli_id,e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#project").html(resp);
				}
			});
		} else {
			$("#project").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Project</label>
												<select class="select" id="project" name="project">
											    <option>Select Project</option>
											
										        </select>
											</div>
										</div>										
									</div>
								      <script>
	$(document).ready(function() {
	$("#project").change(function() {
		var pro_id = $(this).val();
		var emp_id = $("#emp_code").val();
		var cli_id = $("#client").val();
		if(pro_id != "") {
			$.ajax({
				url:"ajax/get_task_team_name.php",
				data:{p_id:pro_id,c_id:cli_id,e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#team_name").html(resp);
				}
			});
		} else {
			$("#team_name").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 	               
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Name</label>
												<select class="select" id="team_name" name="team_name">
											    <option>Select Team Name</option>
											    </select>
											</div>
										</div>
										<script>
	$(document).ready(function() {
	$("#team_name").change(function() {
		var tea_id = $(this).val();
		var emp_id = $("#emp_code").val();
		var pro_id = $("#project").val();
		var cli_id = $("#client").val();
		if(tea_id != "") {
			$.ajax({
				url:"ajax/get_task_team_member.php",
				data:{t_id:tea_id,p_id:pro_id,c_id:cli_id,e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#assign_emp").html(resp);
				}
			});
		} else {
			$("#assign_emp").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 	
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign Staff</label>
												<select class="select" id="assign_emp" name="assign_emp">
													<option>Select Employee</option>
												</select>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Priority</label>
												<select class="select" name="priority">
													<option value="High">High</option>
													<option value="Medium">Medium</option>
													<option value="Low">Low</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Due Date</label>
												<input class="form-control datetimepicker" name="due_date" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Task Name</label>
												<input type="text" class="form-control" name="task_name">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control" name="desc"></textarea>
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="select" name="task_status">
													<option value="Begin">Begin</option>
													<option value="Pending">Pending</option>
													<option value="Progress">Progress</option>
													<option value="On Hold">On Hold</option>
													<option value="Review">Review</option>
													<option value="Completed">Completed</option>
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
	$("#create_task").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_task_add.php",
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
				<!-- /Add Task Modal -->
				
				<!-- Edit Task Modal -->
				<script>
				$(".passingDATA").click(function () {
    var ids = $(this).attr('data-id');
    var data_lead_emp_id = $(this).attr('data-lead-emp-id');
    var data_lead_emp_name = $(this).attr('data-lead-emp-name');
    var data_client = $(this).attr('data-client');
    var data_project = $(this).attr('data-project');    
    var data_team_name = $(this).attr('data-team-name');
   var data_task_to = $(this).attr('data-task-to'); 
    var data_priority = $(this).attr('data-priority');
    var data_due_date = $(this).attr('data-due-date');
    var data_task_name = $(this).attr('data-task-name');
    var data_description = $(this).attr('data-description');
    var data_status = $(this).attr('data-status');
    $("#row_id").val( ids );
    $("#lead_emp_id").val( data_lead_emp_id );
    $("#lead_emp_name").val( data_lead_emp_name );
    $("#e_client").val( data_client );
    $("#e_project").val( data_project );
    $("#e_team_name").val( data_team_name );
    $("#e_task_to").val( data_task_to );
    $("#priority").val( data_priority );
    $("#due_date").val( data_due_date );
    $("#task_name").val( data_task_name );
    $("#description").val( data_description );
    $("#status").val( data_status );
    $('#edit_task').modal('show');
});
				</script>
				<div id="edit_task" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Task</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<?php 
								 $id= $_SESSION['username'];
								$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$id'";
								$pro_results = mysqli_query($db, $prodcatsql1);
								$pro_data = $pro_results->fetch_assoc();
								?>
								<form id="edit_tasks" method="post">
									<input name="lead_code" id="lead_emp_id" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<input name="lead_name" id="lead_emp_name" value="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>" type="hidden">
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Client</label>
												<select class="select" id="e_client" name="client">
													<option>Select Client</option>
													<?php  
                                     $des_sql = $db->query("select distinct client from teams_lead WHERE lead_emp_code1 ='$id' ORDER BY id ASC");
									if($des_sql->num_rows>0){
                                    while($des_row = $des_sql->fetch_assoc()){ ?>											
											<option value="<?php echo $des_row['client'];?>"><?php echo $des_row['client'];?></option>
											<?php }} ?>
												</select>
											</div>
										</div>
										<script type="text/javascript" src="jquery.min.js"></script>
                            <script>
	$(document).ready(function() {
	$("#e_client").change(function() {
		var cli_id = $(this).val();
		var emp_id = $("#lead_emp_id").val();
		if(cli_id != "") {
			$.ajax({
				url:"ajax/get_task_team.php",
				data:{c_id:cli_id,e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#e_project").html(resp);
				}
			});
		} else {
			$("#e_project").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Project</label>
												<select class="select" id="e_project" name="project">
											    <option>Select Project</option>
											
										        </select>
											</div>
										</div>										
									</div>
								      <script>
	$(document).ready(function() {
	$("#e_project").change(function() {
		var pro_id = $(this).val();
		var emp_id = $("#lead_emp_id").val();
		var cli_id = $("#e_client").val();
		if(pro_id != "") {
			$.ajax({
				url:"ajax/get_task_team_name.php",
				data:{p_id:pro_id,c_id:cli_id,e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#e_team_name").html(resp);
				}
			});
		} else {
			$("#e_team_name").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 	               
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Team Name</label>
												<select class="select" id="e_team_name" name="team_name">
											    <option>Select Team Name</option>
											    </select>
											</div>
										</div>
										<script>
	$(document).ready(function() {
	$("#e_team_name").change(function() {
		var tea_id = $(this).val();
		var emp_id = $("#lead_emp_id").val();
		var pro_id = $("#e_project").val();
		var cli_id = $("#e_client").val();
		if(tea_id != "") {
			$.ajax({
				url:"ajax/get_task_team_member.php",
				data:{t_id:tea_id,p_id:pro_id,c_id:cli_id,e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#e_task_to").html(resp);
				}
			});
		} else {
			$("#e_task_to").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 	
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign Staff</label>
												<select class="select" id="e_task_to" name="assign_emp">
													<option>Select Employee</option>
												</select>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Priority</label>
												<select class="select" id="priority" name="priority">
													<option value="High">High</option>
													<option value="Medium">Medium</option>
													<option value="Low">Low</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Due Date</label>
												<input class="form-control datetimepicker" id="due_date" name="due_date" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Task Name</label>
												<input type="text" class="form-control" id="task_name" name="task_name">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control" id="description" name="desc"></textarea>
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Status</label>
												<select class="select" id="status" name="task_status">
													<option value="Begin">Begin</option>
													<option value="Pending">Pending</option>
													<option value="Progress">Progress</option>
													<option value="On Hold">On Hold</option>
													<option value="Review">Review</option>
													<option value="Completed">Completed</option>
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
	$("#edit_tasks").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_task_edit.php",
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
				<!-- /Edit Task Modal -->
				
				
				<!-- Delete Task Modal -->
				
				<script>
				$(".passingDetData").click(function () {
	var data_id = $(this).attr('data-id');
	var data_lead_emp_id = $(this).attr('data-lead-emp-id');
    var data_lead_emp_name = $(this).attr('data-lead-emp-name');
    var data_client = $(this).attr('data-cilent');
    var data_project = $(this).attr('data-project');    
    var data_team_name = $(this).attr('data-team-name');
   var data_task_to = $(this).attr('data-task-to'); 
   var data_task_name = $(this).attr('data-task-name');
    $("#data_id").val( data_id );
    $("#d_lead_emp_id").val( data_lead_emp_id );
    $("#d_client").val( data_client );
    $("#d_project").val( data_project );
    $("#d_team_name").val( data_team_name );
    $("#d_task_to").val( data_task_to );
    $("#d_task_name").val( data_task_name );
    $('#delete_task').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_task" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Leave</h3>
									<p>Are you sure want to Cancel this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-12 text-center">
											<form id="emp_task_delete" method="post">
									         <input id="data_id" name="data_id" value="" type="hidden">
									         <label class="mb-2">Lead</label>
									         <input class="form-control mb-2" id="d_lead_emp_id" name="lead_code" value="" type="text" readonly>
									         <label class="mb-2">Project</label>
									         <input class="form-control mb-2" id="d_project" name="project" value="" type="text" readonly>
									         <label class="mb-2">Client</label>
									         <input class="form-control mb-2" id="d_client" name="client" value="" type="text" readonly>									         
									         <label class="mb-2">Team Name</label>
									         <input class="form-control mb-2" id="d_team_name" name="team_name" value="" type="text" readonly>
									         <label class="mb-2">Assigned Empolyee</label>
									         <input class="form-control mb-2" id="d_task_to" name="assign_emp" value="" type="text" readonly>
									         <label class="mb-2">Task Name</label>
									         <input class="form-control mb-2" id="d_task_name" name="task_name" value="" type="text" readonly>
											</div>
											<div class="submit-section">
											<a ><button class="btn btn-primary submit-btn">Delete</button></a>
											</form>
									
										</div>
										
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_task_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "emp_task_delete.php",
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
				<!-- /Delete task Modal -->
				
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
