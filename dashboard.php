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
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark"  data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Dashboard - Redot Solutions</title>
		
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
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
	    <style>
	    .glow {
  font-size: 40px;
  color: #18a506;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #b5e649, 0 0 40px #b5e649, 0 0 50px #b5e649, 0 0 60px #b5e649, 0 0 70px #b5e649;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #b5e649, 0 0 40px #b5e649, 0 0 50px #b5e649, 0 0 60px #b5e649, 0 0 70px #b5e649, 0 0 80px #b5e649;
  }
}
	    </style>
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
								<div class="text-center"><img src="assets/img/company.png" width="10%" height="10%" alt=""></div>
							<?php 
                                    require_once('inc/config.php');
                                    $id= $_SESSION['username'];   
  	   $query2 = "SELECT * FROM manage_emp WHERE emp_code='$id'";
  	$results2 = mysqli_query($db, $query2);
  	$name= $results2->fetch_assoc(); ?>
								<h3 class="page-title">Welcome, <?php echo $name['name']; ?> <?php echo $name['last_name']; ?>!</h3>
								<?php $currentDate = date('l, F j, Y');
								      echo $currentDate; ?>
								<ul class="breadcrumb mt-2">
									<li class="breadcrumb-item active"></li>Dashboard</li>
								</ul>
							</div>
							<div class="col-sm-12 mt-2">
							<?php  
                                    $birth_sql = $db->query("select name, last_name, emp_code from manage_emp WHERE DATE_FORMAT(dob, '%m-%d') = DATE_FORMAT(NOW(), '%m-%d')");
								    if($birth_sql->num_rows>0){
                                    while($b_row = $birth_sql->fetch_assoc()){ ?>
								<h3 class="page-title">Birthday to <?php echo $b_row['name']; ?> <?php echo $b_row['last_name']; ?> (<?php echo $b_row['emp_code']; ?>)!</h3>
								 <?php } } ?>
							</div>
							<div class="col-sm-12">
								<h2 class="glow">Announcement</h2>
							<?php  
                                    $announ_sql = $db->query("SELECT announcement_from_date, title, announcement_image, description FROM `announcements` WHERE DATE(announcement_from_date) = date(Now()) OR DATE(announcement_to_date) = date(Now()) AND status = 1");
                                    
								    if($announ_sql->num_rows>0){
                                    while($ann_row = $announ_sql->fetch_assoc()){ ?>
								  <div class="text-center">		
								
								<?php if($ann_row['announcement_image'] != '') { ?>
								<img src="announcements/<?php echo $ann_row['announcement_image']; ?>" width="70%" height="" alt="">
								<?php } ?>
								<h3 class="page-title mt-3 mb-1"> <?php echo $ann_row['title']; ?></h3>
								<p><?php echo $ann_row['description']; ?></p>
								</div>
								 <?php } } ?>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					
						 <?php 
		//only visible to Admin
		require("user_role.php");
		if($role_id == 1){?>
			           <div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-users"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $emp_cou = "SELECT count(id) as emp_counts FROM manage_emp WHERE status='1'";
  	$emp_res = mysqli_query($db, $emp_cou);
  	$emp_counts = $emp_res->fetch_assoc(); ?>
										<h3><?php echo $emp_counts['emp_counts']; ?></h3>
										<span>Active Employees</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-cubes"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $task_cou = "SELECT count(Distinct task_name) as task_counts FROM emp_tasks";
  	$task_res = mysqli_query($db, $task_cou);
  	$task_counts = $task_res->fetch_assoc(); ?>
										<h3><?php echo $task_counts['task_counts']; ?></h3>
										<span>Tasks</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="la la-user-plus"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $att_cou = "SELECT COUNT(id) as att_counts FROM `attendance` WHERE date = CURRENT_DATE(); ";
  	$att_res = mysqli_query($db, $att_cou);
  	$att_counts = $att_res->fetch_assoc(); ?>
										<h3><?php echo $att_counts['att_counts']; ?></h3>
										<span>Today Attendances</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<h4 class="card-title mb-3">Departments</h4>
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">HR Department</h4>
									<?php  
                                    $hr_sql = $db->query("select name, last_name, emp_code, role, designation, image from manage_emp WHERE department='HR'");
								    if($hr_sql->num_rows>0){
                                    while($hr_row = $hr_sql->fetch_assoc()){ ?>
									<div class="leave-info-box" style="margin: 0 0 2px; <?php if($hr_row['role'] == 3) { echo "background-color: #0e930a;"; echo "color: #fff;"; }?>">
										<div class="media d-flex align-items-center">
											<a href="profile-details.php?id=<?php echo $hr_row['emp_code']; ?>" class="avatar" target="_blank"><img src="profile-img/<?php echo $hr_row['image']; ?>" alt=""></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0"><?php echo $hr_row['name']; ?> <?php echo $hr_row['last_name']; ?> (<?php echo $hr_row['emp_code']; ?>)</div>
											    <h6 class="mb-0"><?php echo $hr_row['designation']; ?></h6>
											</div>
										</div>
									</div>
									<?php } } ?>
								</div>
							</div>
						</div>
					    <div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Management</h4>
									<?php  
                                    $mana_sql = $db->query("select name, last_name, emp_code, designation, role, image from manage_emp WHERE department='Management'");
								    if($mana_sql->num_rows>0){
                                    while($mana_row = $mana_sql->fetch_assoc()){ ?>
									<div class="leave-info-box" style="margin: 0 0 2px; <?php if($mana_row['role'] == 3) { echo "background-color: #0e930a;"; echo "color: #fff;"; }?>">
										<div class="media d-flex align-items-center">
											<a href="profile-details.php?id=<?php echo $mana_row['emp_code']; ?>" class="avatar" target="_blank"><img src="profile-img/<?php echo $web_row['image']; ?>" alt=""></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0"><?php echo $mana_row['name']; ?> <?php echo $mana_row['last_name']; ?> (<?php echo $mana_row['emp_code']; ?>)</div>
											    <h6 class="mb-0"><?php echo $mana_row['designation']; ?></h6>
											</div>
										</div>
									</div>
									<?php } } ?>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">DM & Sales</h4>
									<?php  
                                    $dm_sql = $db->query("select name, last_name, emp_code, designation, role, image from manage_emp WHERE department='DM & Sales'");
								    if($dm_sql->num_rows>0){
                                    while($dm_row = $dm_sql->fetch_assoc()){ ?>
									<div class="leave-info-box" style="margin: 0 0 2px; <?php if($dm_row['role'] == 3) { echo "background-color: #0e930a;"; echo "color: #fff;"; }?>">
										<div class="media d-flex align-items-center">
											<a href="profile-details.php?id=<?php echo $dm_row['emp_code']; ?>" class="avatar" target="_blank"><img src="profile-img/<?php echo $web_row['image']; ?>" alt=""></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0"><?php echo $dm_row['name']; ?> <?php echo $dm_row['last_name']; ?> (<?php echo $dm_row['emp_code']; ?>)</div>
											    <h6 class="mb-0"><?php echo $dm_row['designation']; ?></h6>
											</div>
										</div>
									</div>
									<?php } } ?>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Web Department</h4>
									<?php  
                                    $web_sql = $db->query("select name, last_name, emp_code, designation, role, image from manage_emp WHERE department='Web Development'");
								    if($web_sql->num_rows>0){
                                    while($web_row = $web_sql->fetch_assoc()){ ?>
									<div class="leave-info-box" style="margin: 0 0 2px; <?php if($web_row['role'] == 3) { echo "background-color: #0e930a;"; echo "color: #fff;"; }?>">
										<div class="media d-flex align-items-center">
											<a href="profile-details.php?id=<?php echo $web_row['emp_code']; ?>" class="avatar" target="_blank"><img src="profile-img/<?php echo $web_row['image']; ?>" alt=""></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0"><?php echo $web_row['name']; ?> <?php echo $web_row['last_name']; ?> (<?php echo $web_row['emp_code']; ?>)</div>
											    <h6 class="mb-0"><?php echo $web_row['designation']; ?></h6>
											</div>
										</div>
									</div>
									<?php } } ?>
								</div>
							</div>
						</div>
					</div>
					<hr>
			<?php } ?>
			<?php 
		//only visible to Admin
		require("user_role.php");
		if($role_id == 3){?>
			           <div class="leave-info-box">
							<h4>Report To</h4>
										<div class="media d-flex align-items-center">
											<?php 
  	                                         $lead_emp = $db->query("SELECT lead_emp_code FROM manage_emp WHERE emp_code='$id'");
  	                                         $lead_employee = $lead_emp->fetch_assoc();  	                                         
  	                                         $lead_emp_det = $db->query("SELECT name,last_name,designation,image FROM manage_emp WHERE emp_code='".$lead_employee['lead_emp_code']."'");
  	                                         $lead_emp_det = $lead_emp_det->fetch_assoc(); 
  	                                          ?>
											<a href="" class="avatar"><img src="profile-img/<?php echo $lead_emp_det['image']; ?>" alt=""></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0"><?php echo $lead_emp_det['name']; ?> <?php echo $lead_emp_det['last_name']; ?> (<?php echo $lead_employee['lead_emp_code']; ?>)</div>
											    <h6 class="mb-0"><?php echo $lead_emp_det['designation']; ?></h6>
											</div>
										</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="la la-user-plus"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $emp_leave_cou = "SELECT count(Distinct id) as leave_counts FROM emp_leaves WHERE emp_code = '$id' AND status = 'Pending'";
  	$emp_leave_res = mysqli_query($db, $emp_leave_cou);
  	$emp_leave_counts = $emp_leave_res->fetch_assoc(); ?>
										<h3><?php echo $emp_leave_counts['leave_counts']; ?></h3>
										<span>Leave Applied</span>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-cube"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $task_cou2 = "SELECT count(Distinct task_name) as task_counts FROM emp_tasks WHERE to_emp = '$id' AND report_status != 'Completed'";
  	$task_res2 = mysqli_query($db, $task_cou2);
  	
  	$task_counts2 = $task_res2->fetch_assoc(); ?>
										<h3><?php echo $task_counts2['task_counts']; ?></h3>
										<span>Your Tasks</span>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-regular fa-gem"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $task_poi_cou = "SELECT Sum(task_points_approval) as task_point_get FROM emp_tasks WHERE to_emp = '$id'";
  	$task_poi_res = mysqli_query($db, $task_poi_cou);
  	//echo $task_poi_cou;
  	$task_poi_couunts = $task_poi_res->fetch_assoc(); 
  	if($task_poi_couunts['task_point_get'] == NULL){
  	?>
  	<h3>0</h3>
  	<?php } else { ?>
										<h3><?php echo $task_poi_couunts['task_point_get']; ?></h3>
										<?php } ?>
										<span>Your Tasks Points</span>
									</div>
								</div>
							</div>
						</div>
						</div>						
					<hr>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-cubes"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $taskte_cou = "SELECT count(Distinct task_name) as task_counts FROM emp_tasks WHERE lead_emp_code = '$id'";
  	$taskte_res = mysqli_query($db, $taskte_cou);
  	$taskte_counts = $taskte_res->fetch_assoc(); ?>
										<h3><?php echo $taskte_counts['task_counts']; ?></h3>
										<span>Tasks to the Team</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-regular fa-edit"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $lead_leave_cou = "SELECT count(Distinct id) as leave_counts FROM emp_leaves WHERE lead_emp_code = '$id' AND status = 'Pending'";
  	$lead_leave_res = mysqli_query($db, $lead_leave_cou);
  	$lead_leave_counts = $lead_leave_res->fetch_assoc(); ?>
										<h3><?php echo $lead_leave_counts['leave_counts']; ?></h3>
										<span>Team Leave Approvals</span>
									</div>
								</div>
							</div>
						</div>						
					</div>
					<hr>
					<div class="row">
						<h4 class="card-title mb-3">Team Details</h4>									
									<?php  
                                    $team_sql = $db->query("select DISTINCT team_name, department, project_name, client from teams_lead WHERE lead_emp_code1='$id'");
								    if($team_sql->num_rows>0){
                                    while($team_row = $team_sql->fetch_assoc()){ ?>
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									
										<h4>Team Name : <?php echo $team_row['team_name']; ?></h4>
										<h5>Department : <?php echo $team_row['department']; ?></h5>
										<h5>Project Name : <?php echo $team_row['project_name']; ?></h5>
										<h5>Client : <?php echo $team_row['client']; ?></h5>
										<?php $team_name = $team_row['team_name'];  
											$member_sql = $db->query("select DISTINCT team_members from teams_lead WHERE team_name='$team_name'");
											if($member_sql->num_rows>0){
                                    while($member_row = $member_sql->fetch_assoc()){ 
										$mem_id = $member_row['team_members']; ?>
									<div class="leave-info-box">
										<div class="media d-flex align-items-center">
											<?php
  	                                         $team_emp = "SELECT name, last_name, designation, image FROM manage_emp WHERE emp_code='$mem_id'";
  	                                         $team_emp_res = mysqli_query($db, $team_emp);
  	                                         $team_employee = $team_emp_res->fetch_assoc(); ?>
											<a href="" class="avatar"><img src="profile-img/<?php echo $team_employee['image']; ?>" alt=""></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0"><?php echo $team_employee['name']; ?> <?php echo $team_employee['last_name']; ?> (<?php echo $member_row['team_members']; ?>)</div>
											    <h6 class="mb-0"><?php echo $team_employee['designation']; ?></h6>
											</div>
										</div>
									</div>
									<?php } } ?>
								</div>
							</div>
						</div>
						<?php } } ?>
					</div>
					<hr>
			<?php } ?>	
			
			<?php 
		//only visible to Admin
		require("user_role.php");
		if($role_id == 2){?>
			           <div class="leave-info-box">
							<h4>Report To</h4>
										<div class="media d-flex align-items-center">
											<?php 
  	                                         $lead_emp = $db->query("SELECT lead_emp_code FROM manage_emp WHERE emp_code='$id'");
  	                                         $lead_employee = $lead_emp->fetch_assoc();  	                                         
  	                                         $lead_emp_det = $db->query("SELECT name,last_name,designation,image FROM manage_emp WHERE emp_code='".$lead_employee['lead_emp_code']."'");
  	                                         $lead_emp_det = $lead_emp_det->fetch_assoc(); 
  	                                          ?>
											<a href="" class="avatar"><img src="profile-img/<?php echo $lead_emp_det['image']; ?>" alt=""></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0"><?php echo $lead_emp_det['name']; ?> <?php echo $lead_emp_det['last_name']; ?> (<?php echo $lead_employee['lead_emp_code']; ?>)</div>
											    <h6 class="mb-0"><?php echo $lead_emp_det['designation']; ?></h6>
											</div>
										</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="la la-user-plus"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $emp_leave_cou = "SELECT count(Distinct id) as leave_counts FROM emp_leaves WHERE emp_code = '$id' AND status = 'Pending'";
  	$emp_leave_res = mysqli_query($db, $emp_leave_cou);
  	$emp_leave_counts = $emp_leave_res->fetch_assoc(); ?>
										<h3><?php echo $emp_leave_counts['leave_counts']; ?></h3>
										<span>Leave Applied</span>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-cube"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $task_cou2 = "SELECT count(Distinct task_name) as task_counts FROM emp_tasks WHERE to_emp = '$id' AND report_status != 'Completed'";
  	$task_res2 = mysqli_query($db, $task_cou2);
  	
  	$task_counts2 = $task_res2->fetch_assoc(); ?>
										<h3><?php echo $task_counts2['task_counts']; ?></h3>
										<span>Your Tasks</span>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-regular fa-gem"></i></span>
									<div class="dash-widget-info">
										<?php   
  	   $task_poi_cou = "SELECT Sum(task_points_approval) as task_point_get FROM emp_tasks WHERE to_emp = '$id'";
  	$task_poi_res = mysqli_query($db, $task_poi_cou);
  	//echo $task_poi_cou;
  	$task_poi_couunts = $task_poi_res->fetch_assoc(); 
  	if($task_poi_couunts['task_point_get'] == NULL){
  	?>
  	<h3>0</h3>
  	<?php } else { ?>
										<h3><?php echo $task_poi_couunts['task_point_get']; ?></h3>
										<?php } ?>
										<span>Your Tasks Points</span>
									</div>
								</div>
							</div>
						</div>
						</div>
					<hr>
			<?php } ?>				
						
			        <!--<div class="row">			
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-cubes"></i></span>
									<div class="dash-widget-info">
										<h3>112</h3>
										<span>Projects</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa-solid fa-dollar-sign"></i></span>
									<div class="dash-widget-info">
										<h3>44</h3>
										<span>Clients</span>
									</div>
								</div>
							</div>
						</div>						
					</div>-->
					
					<!--<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Total Revenue</h3>
											<div id="bar-charts"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Sales Overview</h3>
											<div id="line-charts"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card-group m-b-30">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">New Employees</span>
											</div>
											<div>
												<span class="text-success">+10%</span>
											</div>
										</div>
										<h3 class="mb-3">10</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Overall Employees 218</p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Earnings</span>
											</div>
											<div>
												<span class="text-success">+12.5%</span>
											</div>
										</div>
										<h3 class="mb-3">$1,42,300</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$1,15,852</span></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Expenses</span>
											</div>
											<div>
												<span class="text-danger">-2.8%</span>
											</div>
										</div>
										<h3 class="mb-3">$8,500</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$7,500</span></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Profit</span>
											</div>
											<div>
												<span class="text-danger">-75%</span>
											</div>
										</div>
										<h3 class="mb-3">$1,12,000</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$1,42,000</span></p>
									</div>
								</div>
							</div>
						</div>	
					</div>-->
					
					<!-- Statistics Widget -->
					<!--<div class="row">
						<div class="col-md-12 col-lg-12 col-xl-4 d-flex">
							<div class="card flex-fill dash-statistics">
								<div class="card-body">
									<h5 class="card-title">Statistics</h5>
									<div class="stats-list">
										<div class="stats-info">
											<p>Today Leave <strong>4 <small>/ 65</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-primary w-31" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Pending Invoice <strong>15 <small>/ 92</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-warning w-31" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Completed Projects <strong>85 <small>/ 112</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-success w-62" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Open Tickets <strong>190 <small>/ 212</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-danger w-62" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Closed Tickets <strong>22 <small>/ 212</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-info w-22" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Task Statistics</h4>
									<div class="statistics">
										<div class="row">
											<div class="col-md-6 col-6 text-center">
												<div class="stats-box mb-4">
													<p>Total Tasks</p>
													<h3>385</h3>
												</div>
											</div>
											<div class="col-md-6 col-6 text-center">
												<div class="stats-box mb-4">
													<p>Overdue Tasks</p>
													<h3>19</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="progress mb-4">
										<div class="progress-bar bg-purple w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
										<div class="progress-bar bg-warning w-22" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">22%</div>
										<div class="progress-bar bg-success w-24" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">24%</div>
										<div class="progress-bar bg-danger w-21" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">21%</div>
										<div class="progress-bar bg-info w-10" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">10%</div>
									</div>
									<div>
										<p><i class="fa-regular fa-circle-dot text-purple me-2"></i>Completed Tasks <span class="float-end">166</span></p>
										<p><i class="fa-regular fa-circle-dot text-warning me-2"></i>Inprogress Tasks <span class="float-end">115</span></p>
										<p><i class="fa-regular fa-circle-dot text-success me-2"></i>On Hold Tasks <span class="float-end">31</span></p>
										<p><i class="fa-regular fa-circle-dot text-danger me-2"></i>Pending Tasks <span class="float-end">47</span></p>
										<p class="mb-0"><i class="fa-regular fa-circle-dot text-info me-2"></i>Review Tasks <span class="float-end">5</span></p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Today Absent <span class="badge bg-inverse-danger ms-2">5</span></h4>
									<div class="leave-info-box">
										<div class="media d-flex align-items-center">
											<a href="profile.php" class="avatar"><img src="assets/img/user.jpg" alt="User Image"></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0">Martin Lewis</div>
											</div>
										</div>
										<div class="row align-items-center mt-3">
											<div class="col-6">
												<h6 class="mb-0">4 Sep 2019</h6>
												<span class="text-sm text-muted">Leave Date</span>
											</div>
											<div class="col-6 text-end">
												<span class="badge bg-inverse-danger">Pending</span>
											</div>
										</div>
									</div>
									<div class="leave-info-box">
										<div class="media d-flex align-items-center">
											<a href="profile.php" class="avatar"><img src="assets/img/user.jpg" alt="User Image"></a>
											<div class="media-body flex-grow-1">
												<div class="text-sm my-0">Martin Lewis</div>
											</div>
										</div>
										<div class="row align-items-center mt-3">
											<div class="col-6">
												<h6 class="mb-0">4 Sep 2019</h6>
												<span class="text-sm text-muted">Leave Date</span>
											</div>
											<div class="col-6 text-end">
												<span class="badge bg-inverse-success">Approved</span>
											</div>
										</div>
									</div>
									<div class="load-more text-center">
										<a class="text-dark" href="javascript:void(0);">Load More</a>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<!-- /Statistics Widget -->
					
					<!--<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Invoices</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Due Date</th>
													<th>Total</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="invoice-view.php">#INV-0001</a></td>
													<td>
														<h2><a href="#">Global Technologies</a></h2>
													</td>
													<td>11 Mar 2019</td>
													<td>$380</td>
													<td>
														<span class="badge bg-inverse-warning">Partially Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0002</a></td>
													<td>
														<h2><a href="#">Delta Infotech</a></h2>
													</td>
													<td>8 Feb 2019</td>
													<td>$500</td>
													<td>
														<span class="badge bg-inverse-success">Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0003</a></td>
													<td>
														<h2><a href="#">Cream Inc</a></h2>
													</td>
													<td>23 Jan 2019</td>
													<td>$60</td>
													<td>
														<span class="badge bg-inverse-danger">Unpaid</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="invoices.php">View all invoices</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Payments</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Payment Type</th>
													<th>Paid Date</th>
													<th>Paid Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="invoice-view.php">#INV-0001</a></td>
													<td>
														<h2><a href="#">Global Technologies</a></h2>
													</td>
													<td>Paypal</td>
													<td>11 Mar 2019</td>
													<td>$380</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0002</a></td>
													<td>
														<h2><a href="#">Delta Infotech</a></h2>
													</td>
													<td>Paypal</td>
													<td>8 Feb 2019</td>
													<td>$500</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0003</a></td>
													<td>
														<h2><a href="#">Cream Inc</a></h2>
													</td>
													<td>Paypal</td>
													<td>23 Jan 2019</td>
													<td>$60</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="payments.php">View all payments</a>
								</div>
							</div>
						</div>
					</div>-->
					
					<!--<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Clients</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>Status</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
															<a href="client-profile.php">Barry Cuda <span>CEO</span></a>
														</h2>
													</td>
													<td><a href="" class="__cf_email__" data-cfemail="b4d6d5c6c6cdd7c1d0d5f4d1ccd5d9c4d8d19ad7dbd9">[email&#160;protected]</a></td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa-regular fa-circle-dot text-success"></i> Active
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
															<a href="client-profile.php">Tressa Wexler <span>Manager</span></a>
														</h2>
													</td>
													<td><a href="" class="__cf_email__" data-cfemail="1561677066667462706d79706755706d74786579703b767a78">[email&#160;protected]</a></td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa-regular fa-circle-dot text-danger"></i> Inactive
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
															<a href="client-profile.php">Ruby Bartlett <span>CEO</span></a>
														</h2>
													</td>
													<td><a href="" class="__cf_email__" data-cfemail="e99b9c8b908b889b9d858c9d9da98c91888499858cc78a8684">[email&#160;protected]</a></td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa-regular fa-circle-dot text-danger"></i> Inactive
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
															<a href="client-profile.php"> Misty Tison <span>CEO</span></a>
														</h2>
													</td>
													<td><a href="" class="__cf_email__" data-cfemail="55383c26212c213c263a3b15302d34382539307b363a38">[email&#160;protected]</a></td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa-regular fa-circle-dot text-success"></i> Active
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
															<a href="client-profile.php"> Daniel Deacon <span>CEO</span></a>
														</h2>
													</td>
													<td><a href="" class="__cf_email__" data-cfemail="7317121d1a161f171612101c1d33160b121e031f165d101c1e">[email&#160;protected]</a></td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa-regular fa-circle-dot text-danger"></i> Inactive
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="clients.php">View all clients</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Projects</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Project Name </th>
													<th>Progress</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2><a href="project-view.php">Office Management</a></h2>
														<small class="block text-ellipsis">
															<span>1</span> <span class="text-muted">open tasks, </span>
															<span>9</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar w-65" role="progressbar" data-bs-toggle="tooltip" title="65%"></div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="project-view.php">Project Management</a></h2>
														<small class="block text-ellipsis">
															<span>2</span> <span class="text-muted">open tasks, </span>
															<span>5</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar w-15" role="progressbar" data-bs-toggle="tooltip" title="15%"></div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="project-view.php">Video Calling App</a></h2>
														<small class="block text-ellipsis">
															<span>3</span> <span class="text-muted">open tasks, </span>
															<span>3</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar w-50" role="progressbar" data-bs-toggle="tooltip" title="50%"></div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="project-view.php">Hospital Administration</a></h2>
														<small class="block text-ellipsis">
															<span>12</span> <span class="text-muted">open tasks, </span>
															<span>4</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar w-88" role="progressbar" data-bs-toggle="tooltip" title="88%"></div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="project-view.php">Digital Marketplace</a></h2>
														<small class="block text-ellipsis">
															<span>7</span> <span class="text-muted">open tasks, </span>
															<span>14</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar w-100" role="progressbar" data-bs-toggle="tooltip" title="100%"></div>
														</div>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="projects.php">View all projects</a>
								</div>
							</div>
						</div>
					</div>-->
				
				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
   
			
        </div>
		<!-- /Main Wrapper -->
		
		<?php include 'setting-icon.php';?>

		<!-- jQuery -->
       <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/js/chart.js"></script>
		<script src="assets/js/greedynav.js"></script>

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
