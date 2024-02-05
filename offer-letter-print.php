<!DOCTYPE html>
<?php
	require_once('inc/config.php'); 
	
	$emp_id= $_GET['id']; 

 $prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								$emp_results = mysqli_query($db, $prodcatsql1);
								$emp_data = $emp_results->fetch_assoc();
 $prodcatsql2 = "SELECT * FROM emp_salary  WHERE emp_code = '$emp_id'";
								$sal_results = mysqli_query($db, $prodcatsql2);
								$sal_data = $sal_results->fetch_assoc();
?>
<html lang="en">
	<head>
		<style>	
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
		
		@page {
			size: auto;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
	</style>
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
	<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>


