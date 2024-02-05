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
        <title>Reports- Redot Solutions</title>
		
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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Attendance Reports</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Attendance Reports</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
						<!-- Content Starts -->
						<!-- Search Filter -->
						<form action="" method="post">
					<div class="row filter-row">
						
						<!--<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>-->
						<div class="col-sm-6 col-md-4">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<select class="form-control floating select" name="from_date">
											<?php
									$mon_sql = $db->query("select Distinct date as w_date from attendance ORDER BY date ASC");
									$count = 0;
									if($mon_sql->num_rows>0){
                                    while($mon_row = $mon_sql->fetch_assoc()){ ?>
										<option value="<?php echo $mon_row['w_date']; ?>">
										   <?php $f_date = $mon_row['w_date'];
                                                 $timestamp1 = strtotime($f_date);
                                                 $from_date = date('M d, Y', $timestamp1);
                                                 echo $from_date; ?>
										</option>
										<?php }} ?>
									</select>
								</div>
								<label class="focus-label">From Date</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<select class="form-control floating select" name="to_date">
											<?php
									$mon_sql2 = $db->query("select Distinct date as w_date from attendance ORDER BY date DESC");
									$count = 0;
									if($mon_sql2->num_rows>0){
                                    while($mon_row2 = $mon_sql2->fetch_assoc()){ ?>
										<option value="<?php echo $mon_row2['w_date']; ?>">
										   <?php $t_date = $mon_row2['w_date'];
                                                 $timestamp2 = strtotime($t_date);
                                                 $to_date = date('M d, Y', $timestamp2);
                                                 echo $to_date; ?>
										</option>
										<?php }} ?>
									</select>
								</div>
								<label class="focus-label">To Date</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">  
							<div class="d-grid">
								<button type="submit" name="submit" href="#" class="btn btn-success w-100"> Search </button> 
							</div>
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
											<th>#</th>
											<th>Date</th>
											<th>View page Link</th>
										</tr>
									</thead>
									<tbody>
										<?php
// Include the database configuration file
require_once('inc/config.php');
if(isset($_POST["submit"])){
	
      $from_date  = mysqli_real_escape_string($db,$_POST['from_date']);
      $to_date  = mysqli_real_escape_string($db,$_POST['to_date']);
      
      
      $repsql = $db->query("SELECT Distinct date as w_date from attendance WHERE date BETWEEN '$from_date' AND '$to_date' ORDER BY date DESC");
      
      if($repsql->num_rows > 0) {
         while($reprow = $repsql->fetch_assoc()) { ?>
			 <tr>
											<td><?php echo ++$count;?></td>
											<td><?php $rep_date = $reprow['w_date'];
                                	          $timestamp1 = strtotime($rep_date);
                                	          $format_rep_date = date('M d, Y', $timestamp1);
                                	          echo $format_rep_date; 
                                	          
                                	          ?></td>
											<td><a href="attendance_date_report.php?dt=<?php echo $reprow['w_date'];?>" target="_blank">Date Report View</a></td>
											
										</tr>
			 <?php }
		 } else {
		 
		 Echo "Not Found in Search";
		 
		 }
       
  } else { ?>
										<?php
									$sql = $db->query("select Distinct date as w_date from attendance ORDER BY date DESC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><?php echo ++$count;?></td>
											<td><?php $pro_data_rep = $row['w_date'];
                                	          $timestamp = strtotime($pro_data_rep);
                                	          $formatted_date = date('M d, Y', $timestamp);
                                	          echo $formatted_date; 
                                	          
                                	          ?></td>
											<td><a href="attendance_date_report.php?dt=<?php echo $row['w_date'];?>" target="_blank">Date Report View</a></td>
											
										</tr>
										<?php }} } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                
					<!-- /Content End -->
					
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<?php include 'setting-icon.php';?>
		
		<!-- jQuery -->
       <script src="assets/js/jquery-3.7.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
