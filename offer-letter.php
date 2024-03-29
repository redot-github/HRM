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
 
 $emp_id= $_GET['id'];
 $month= $_GET['month'];
 $prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								$emp_results = mysqli_query($db, $prodcatsql1);
								$emp_data = $emp_results->fetch_assoc();
 $prodcatsql2 = "SELECT * FROM emp_salary WHERE emp_code = '$emp_id'";
								$sal_results = mysqli_query($db, $prodcatsql2);
								$sal_data = $sal_results->fetch_assoc();
								
?>
<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title><?php echo $emp_data['name']; ?> <?php echo $emp_data['last_name']; ?>(<?php echo $emp_id; ?> )  Offer Letter - Redot Solutions</title>
		
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
								<h3 class="page-title">Offer Letter</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Offer Letter</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<div class="btn-group btn-group-sm">
									<!--<button class="btn btn-white">CSV</button>
									<button class="btn btn-white">PDF</button>
									<button class="btn btn-white" id="print_btn"><i class="fa-solid fa-print fa-lg"></i> Print</button>
									<input type="button" value="print" onclick="PrintDiv();" />-->
									<a class="btn btn-white" href="offer-letter-print.php?id=<?php echo $emp_id;?>" target="_blank" ><i class="fa-solid fa-print fa-lg"></i> Print</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body" id="divToPrint">
									<h4 class="payslip-title">Offer Letter</h4>
									<div class="row">
										<div class="col-sm-6 m-b-20">
											<img src="assets/img/logo2.png" class="inv-logo" alt="Logo">
											
										</div>
										<div class="col-sm-6 m-b-20">
											<div class="invoice-details">
												<ul class="list-unstyled mt-4 mb-0">
												<li>REDOT Solutions</li>
												<li>3864 Quiet Valley Lane,</li>
												<li>Sherman Oaks, CA, 91403</li>
											</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 m-b-20">
											<h5 class="mb-0"><strong>Dear <?php echo $emp_data['name']; ?> <?php echo $emp_data['last_name']; ?>,</strong></h5>
                                            <p>With great pleasure, I would like to extend the following employment offer.</p>
											<ul class="list-unstyled">
												<li>Employee ID: <?php echo $emp_id; ?></li>
												<li>Position: <span><?php echo $emp_data['designation']; ?></span></li>
												<li>Joining Date: <?php $pro_j_date = $emp_data['joining_date'];
                                	          $timestamp1 = strtotime($pro_j_date);
                                	          $joining_date = date('M d, Y', $timestamp1);
                                	          echo $joining_date; ?></li>
                                	          <li>Salary: ₹ <?php echo $sal_data['salary_amount']; ?> Per Month</li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div>
												<p>This employment offer is contingent upon the successful completion of [background check, drug screening, reference check, I-9 form, etc.]. This offer is not a contract of employment, and either party may terminate employment at any time, with or without cause.</p>
												<h5>Sincerely,</h5>												
											</div>
										</div>
										
										<div class="col-sm-12">
											<p>[Your Signature]</p>
											<p>[Your Printed Name]</p>
											<p>[Your Job Title]</p>
											<p>Candidate Signature: </p>
											<p>Candidate Name: <?php echo $emp_data['name']; ?> <?php echo $emp_data['last_name']; ?></p>
											<p>Date: </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
		
		<script type="text/javascript" src="jquery.min.js"></script>
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		
		 <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><head><style>@media print{#print {display:none;}}@media print {#PrintButton {display: none;}}@page {size: auto;   /* auto is the initial value */	margin: 0;  /* this affects the margin in the printer settings */}</style><link rel="stylesheet" href="assets/css/bootstrap.min.css"><link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css"><link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css"><link rel="stylesheet" href="assets/css/line-awesome.min.css"><link rel="stylesheet" href="assets/css/material.css"><link rel="stylesheet" href="assets/css/style.css"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>

		<?php include 'setting-icon.php';?>
		
		<!-- jQuery -->
       <script src="assets/js/jquery-3.7.0.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

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
