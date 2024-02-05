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
 $prodcatsql2 = "SELECT * FROM emp_salary_payroll WHERE emp_code = '$emp_id' AND salary_month='$month'";
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
        <title><?php echo $emp_data['name']; ?> <?php echo $emp_data['last_name']; ?>(<?php echo $emp_id; ?> )  <?php echo $sal_data['salary_month']; ?> Month Salary Silp - Redot Solutions</title>
		
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
								<h3 class="page-title">Payslip</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Payslip</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<div class="btn-group btn-group-sm">
									<!--<button class="btn btn-white">CSV</button>
									<button class="btn btn-white">PDF</button>
									<button class="btn btn-white" id="print_btn"><i class="fa-solid fa-print fa-lg"></i> Print</button>
									<input type="button" value="print" onclick="PrintDiv();" />-->
									<a class="btn btn-white" href="payroll-print.php?month=<?php echo $month;?>&id=<?php echo $emp_id;?>" target="_blank" ><i class="fa-solid fa-print fa-lg"></i> Print</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body" id="divToPrint">
									<h4 class="payslip-title">Payslip for the month of <?php echo $sal_data['salary_month']; ?>, <?php echo $sal_data['salary_year']; ?></h4>
									<div class="row">
										<div class="col-sm-6 m-b-20">
											<img src="assets/img/logo2.png" class="inv-logo" alt="Logo">
											<ul class="list-unstyled mb-0">
												<li>REDOT Solutions</li>
												<li>3864 Quiet Valley Lane,</li>
												<li>Sherman Oaks, CA, 91403</li>
											</ul>
										</div>
										<div class="col-sm-6 m-b-20">
											<div class="invoice-details">
												<h3 class="text-uppercase">Payslip #49029</h3>
												<ul class="list-unstyled">
													<li>Salary Month: <span><?php echo $sal_data['salary_month']; ?>, <?php echo $sal_data['salary_year']; ?></span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 m-b-20">
											<ul class="list-unstyled">
												<li><h5 class="mb-0"><strong><?php echo $emp_data['name']; ?> <?php echo $emp_data['last_name']; ?></strong></h5></li>
												<li><span><?php echo $emp_data['designation']; ?></span></li>
												<li>Employee ID: <?php echo $emp_id; ?></li>
												<li>Joining Date: <?php $pro_j_date = $emp_data['joining_date'];
                                	          $timestamp1 = strtotime($pro_j_date);
                                	          $joining_date = date('M d, Y', $timestamp1);
                                	          echo $joining_date; ?></li>
                                	          <li>Paid Days: <span><?php echo $sal_data['no_of_days']; ?></span></li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div>
												<h4 class="m-b-10"><strong>Earnings</strong></h4>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td><strong>Basic Salary</strong> <span class="float-end">₹
															<?php 
															$ba_sal = "SELECT * FROM emp_salary WHERE emp_code = '$emp_id'";
								$ba_sal_results = mysqli_query($db, $ba_sal);
								$ba_sal_results_data = $ba_sal_results->fetch_assoc();
								echo $ba_sal_results_data['basic_salary'];
															?>
															</span></td>
														</tr>
														<tr>
															<td><strong>Dearance Allowance</strong> <span class="float-end">₹<?php echo $sal_data['dearance_allowance']; ?></span></td>
														</tr>
														<tr>
															<td><strong>Medical Allowance</strong> <span class="float-end">₹<?php echo $sal_data['medical_allowance']; ?></span></td>
														</tr>
														<tr>
															<td><strong>House Rent Allowance (H.R.A.)</strong> <span class="float-end">₹<?php echo $sal_data['hra']; ?></span></td>
														</tr>
														<tr>
															<td><strong>Gross Salary</strong> <span class="float-end"><strong>₹<?php echo $sal_data['gross_salary']; ?></strong></span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-sm-6">
											<div>
												<h4 class="m-b-10"><strong>Deductions</strong></h4>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="float-end">₹0</span></td>
														</tr>
														<tr>
															<td><strong>Provident Fund</strong> <span class="float-end">₹0</span></td>
														</tr>
														<tr>
															<td><strong>LOP</strong> <span class="float-end">₹<?php echo $sal_data['LOP']; ?></span></td>
														</tr>
														<tr>
															<td><strong>Loan</strong> <span class="float-end">₹0</span></td>
														</tr>
														<tr>
															<td><strong>Net Salary</strong> <span class="float-end"><strong>₹<?php echo $sal_data['net_salary']; ?></strong></span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-sm-12">
											<p><strong>Net Salary: ₹<?php echo $sal_data['net_salary']; ?></strong> (<?php
$number = $sal_data['net_salary'];
   $no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  echo ucwords($result . "Rupees  ");
 ?>)</p>
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
