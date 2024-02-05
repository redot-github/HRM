<!DOCTYPE html>
<?php
	require_once('inc/config.php'); 
	
	$emp_id= $_GET['id'];
 $month= $_GET['month'];
 $prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								$emp_results = mysqli_query($db, $prodcatsql1);
								$emp_data = $emp_results->fetch_assoc();
 $prodcatsql2 = "SELECT * FROM emp_salary_payroll WHERE emp_code = '$emp_id' AND salary_month='$month'";
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


