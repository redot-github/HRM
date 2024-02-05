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
        <title>Salary - Redot Solutions</title>
		
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
								<h3 class="page-title">Employee Salary</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Salary</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_salary"><i class="fa-solid fa-plus"></i> Generate Payroll</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option value=""> -- Select -- </option>
									<option value="">Employee</option>
									<option value="1">Manager</option>
								</select>
								<label class="focus-label">Role</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option> Pending </option>
									<option> Approved </option>
									<option> Rejected </option>
								</select>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<a href="#" class="btn btn-success w-100"> Search </a>  
						</div>     
                    </div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Employee</th>											
											<th>Salary Month/Year</th>											
											<th>Salary</th>
											<th>Gross Salary</th>
											<th>LOP</th>
											<th>Net Salary</th>
											<th>Payslip</th>
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
									$sql = $db->query("select DISTINCT salary_month, emp_code, emp_name, from_date, to_date, salary_year, salary_amount, payment_type, basic_salary, dearance_allowance, medical_allowance, hra, gross_salary, LOP, net_salary, PF_contribution, PF_no, emp_PF_rate1, PF_additional_rate1, PF_total_rate1, emp_PF_rate2, PF_additional_rate2, PF_total_rate2, ESI_contribution, ESI_no, emp_ESI_rate, ESI_additional_rate, ESI_total_rate from emp_salary_payroll ORDER BY salary_month ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td>
												<h2 class="table-avatar">
													
													<?php $emp_id = $row['emp_code'];
													$prodcatsql1 = "SELECT * FROM manage_emp WHERE emp_code = '$emp_id'";
								                    $pro_results = mysqli_query($db, $prodcatsql1);
								                    $pro_data = $pro_results->fetch_assoc();
													?>
													<a href="profile.php?id=<?php echo $row['emp_code'];?>" class="avatar" target="_blank"><img src="profile-img/<?php echo $pro_data['image']; ?>" alt=""></a>
													<a href="profile-details.php?id=<?php echo $row['emp_code'];?>" target="_blank"><?php echo $pro_data['name'];?> <?php echo $pro_data['last_name'];?> - <?php echo $row['emp_code'];?></a>
												</h2>
												<h5><?php echo $pro_data['designation'];?></h5>
											</td>
											
											<td><?php echo $row['salary_month'];?>/<?php echo $row['salary_year'];?></td>										
											<td>₹ <?php echo $row['salary_amount'];?></td>
											<td>₹ <?php echo $row['gross_salary'];?></td>
											<td>₹ <?php echo $row['LOP'];?></td>
											<td>₹ <?php echo $row['net_salary'];?></td>
											<td><a class="btn btn-sm btn-primary" href="salary-silp.php?month=<?php echo $row['salary_month'];?>&id=<?php echo $emp_id;?>" target="_blank">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item passingSalaData" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-emp-name="<?php echo $row['emp_name'];?>" data-email="<?php echo $pro_data['email'];?>" data-designation="<?php echo $pro_data['designation'];?>" data-salary-month="<?php echo $row['salary_month'];?>" data-from-date="<?php echo $row['from_date'];?>" data-to-date="<?php echo $row['to_date'];?>" data-salary-year="<?php echo $row['salary_year'];?>" data-salary="<?php echo $row['salary_amount'];?>" data-basic-salary="<?php echo $row['basic_salary']; ?>"
									data-dearance-allowance="<?php echo $row['dearance_allowance']; ?>"
									data-medical-allowance="<?php echo $row['medical_allowance']; ?>"
									data-hra="<?php echo $row['hra']; ?>"
									data-gross-salary="<?php echo $row['gross_salary']; ?>"
									data-lop="<?php echo $row['LOP']; ?>"
									data-net-salary="<?php echo $row['net_salary']; ?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item passingSalDataDel" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary" data-id="<?php echo $row['id'];?>" data-emp-id="<?php echo $row['emp_code'];?>" data-salary-month="<?php echo $row['salary_month'];?>" data-salary-year="<?php echo $row['salary_year'];?>" data-salary="<?php echo $row['salary_amount'];?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<?php }} ?>
										
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Salary Modal -->
				<div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Employee Salary</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="salupdateForm1" method="post">
									<!--<div class="row"> 
										<div class="col-sm-6"> 
											<div class="input-block mb-3">
												<label class="col-form-label">Select Empolyee</label>
												<select class="select" name="emp_code" id="emp_code">
													<option value="">Select Empolyee</option> 
													<?php
// Include the database configuration file
require_once('inc/config.php');

$query = "SELECT distinct emp_code, name, last_name from manage_emp Where designation!='Admin' ORDER BY name Asc";

$res = mysqli_query($db,$query);
//echo $query;
?>
<?php
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
		$emp_code = $row["emp_code"];
		$fir_name = $row["name"];
		$las_name = $row["last_name"];
?>
<option value="<?php echo $emp_code; ?>"><?php echo ucwords($fir_name); ?> <?php echo $las_name; ?> (<?php echo $emp_code; ?>)</option>

                <?php } } ?>
												</select>
											</div>
										</div>
										<script type="text/javascript" src="jquery.min.js"></script>
                            <script>
	$(document).ready(function() {
	$("#emp_code").change(function() {
		var emp_id = $(this).val();
		if(emp_id != "") {
			$.ajax({
				url:"ajax/get_emp_salary.php",
				data:{e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#net_salary").html(resp);
				}
			});
		} else {
			$("#net_salary").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
<!--<script type="text/javascript" language="javascript"> 
$(function () {
    $('#emp_code').change(function () {
        $.ajax({
            type: 'POST',
            url: 'ajax/get_emp_salary.php',
            data: {
                emp_code: $(this).val()
            },
            dataType: 'json',
            success: function (data) //on recieve of reply
            {
                var net_salary = data[0]; 
                var basic_salary = data[1];
                $('#net_salary').val(net_salary);
                $('#basic_salary').val(basic_salary);
            }
        });
    });  
});  
</script>-->
       
										<!--<div class="col-sm-6"> 
											<label class="col-form-label">Net Salary</label>
											<select class="select" name="net_salary" id="net_salary" readonly>
												</select>
										</div>
									</div>-->
									<div class="row">
										<div class="col-sm-6"> 
											<label class="col-form-label">Month <span class="text-danger">*</span></label>
											<select class="select" name="month" id="month"> 
									<option>Select Month</option>
									<option value="Jan">Jan</option>
									<option value="Feb">Feb</option>
									<option value="Mar">Mar</option>
									<option value="Apr">Apr</option>
									<option value="May">May</option>
									<option value="Jun">Jun</option>
									<option value="Jul">Jul</option>
									<option value="Aug">Aug</option>
									<option value="Sep">Sep</option>
									<option value="Oct">Oct</option>
									<option value="Nov">Nov</option>
									<option value="Dec">Dec</option>
								</select>
										</div>
										<div class="col-sm-6"> 
											<label class="col-form-label">Year <span class="text-danger">*</span></label>
											<select class="select" name="year" id="year"> 
									<option>Select Year</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
								</select>
										</div>
									   <div class="col-sm-6 mt-2"> 
											<label class="col-form-label">From Date <span class="text-danger">*</span></label>
											<input class="form-control datetimepicker" type="text" name="from_date" id="from_date">
										</div>
										<div class="col-sm-6  mt-2"> 
											<label class="col-form-label">To Date <span class="text-danger">*</span></label>
											<input class="form-control datetimepicker"  type="text" name="to_date" id="to_date">
										</div>
									</div> 
									<!--<div class="row"> 
										<h4 class="text-primary mt-2">Earnings</h4>
										<script>
	$(document).ready(function() {
	$("#emp_code").change(function() {
		var emp_id = $(this).val();
		if(emp_id != "") {
			$.ajax({
				url:"ajax/get_emp_basic_salary.php",
				data:{e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#basic_salary").html(resp);
				}
			});
		} else {
			$("#basic_salary").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-sm-6"> 											
											<div class="input-block mb-3">
												<label class="col-form-label">Basic Salary</label>
												<select class="select" name="basic_salary" id="basic_salary" readonly>
												</select>
											</div>
										</div>
<script>
	$(document).ready(function() {
	$("#emp_code").change(function() {
		var emp_id = $(this).val();
		if(emp_id != "") {
			$.ajax({
				url:"ajax/get_emp_dearance_allowance.php",
				data:{e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#dearance_allowance").html(resp);
				}
			});
		} else {
			$("#dearance_allowance").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-sm-6"> 	
											<div class="input-block mb-3">
												<label class="col-form-label">Dearance Allowance(52%)</label>
												<select class="select" name="dearance_allowance" id="dearance_allowance" readonly>
												</select>
											</div>
										</div>
<script>
	$(document).ready(function() {
	$("#emp_code").change(function() {
		var emp_id = $(this).val();
		if(emp_id != "") {
			$.ajax({
				url:"ajax/get_emp_medical_allowance.php",
				data:{e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#medical_allowance").html(resp);
				}
			});
		} else {
			$("#medical_allowance").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-sm-6  mt-2"> 	
											<div class="input-block mb-3">
												<label class="col-form-label">Medical Allowance(32%)</label>
												<select class="select" name="medical_allowance" id="medical_allowance" readonly>
												</select>
											</div>
										</div>
<script>
	$(document).ready(function() {
	$("#emp_code").change(function() {
		var emp_id = $(this).val();
		if(emp_id != "") {
			$.ajax({
				url:"ajax/get_emp_hra.php",
				data:{e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#hra").html(resp);
				}
			});
		} else {
			$("#hra").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 
										<div class="col-sm-6  mt-2"> 	
											<div class="input-block mb-3">
												<label class="col-form-label">Hra(10%)</label>
												<select class="select" name="hra" id="hra" readonly>
												</select>
											</div>
										</div>
<script>
	$(document).ready(function() {
	$("#emp_code").change(function() {
		var emp_id = $(this).val();
		if(emp_id != "") {
			$.ajax({
				url:"ajax/get_emp_gross_salary.php",
				data:{e_id:emp_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#gross_salary").html(resp);
				}
			});
		} else {
			$("#gross_salary").html("<option value=''>------- Select --------</option>");
		}
	});
});
</script> 										
										<div class="col-sm-6  mt-2"> 	
											<div class="input-block mb-3">
												<label class="col-form-label">Gross Salary</label>
												<select class="select" name="gross_salary" id="gross_salary" readonly>
												</select>
											</div>
										</div>										
										</div>-->
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								<h4 id="res" class="submit-section" style="text-align: center;"></h4>

<script>

$(document).ready(function (e) {
	$("#salupdateForm1").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "salary_monthly_update.php",
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
				<!-- /Add Salary Modal -->
				
				<!-- Edit Salary Modal -->
				<script>
				$(".passingSalaData").click(function () {
	var sala_id = $(this).attr('data-id');				
    var emp_code = $(this).attr('data-emp-id');
    var emp_name = $(this).attr('data-emp-name');
    var data_name = $(this).attr('data-name"');
    var data_email = $(this).attr('data-email');
    var data_designation = $(this).attr('data-designation');
    var data_salary_month = $(this).attr('data-salary-month');
    var data_from_date = $(this).attr('data-from-date');
    var data_to_date = $(this).attr('data-to-date');
    var data_salary_year = $(this).attr('data-salary-year');
    var data_salary = $(this).attr('data-salary');
    var data_basic_salary = $(this).attr('data-basic-salary');
    var data_dearance_allowance = $(this).attr('data-dearance-allowance');
    var data_medical_allowance = $(this).attr('data-medical-allowance');
    var data_hra = $(this).attr('data-hra');
    var data_gross_salary = $(this).attr('data-gross-salary');
    var data_lop = $(this).attr('data-lop'); 
    var data_net_salary = $(this).attr('data-net-salary');     
    
    $("#ed_sala_id").val( sala_id );
    $("#ed_emp_id").val( emp_code );
    $("#ed_emp_name").val( emp_name );
    $("#ed_email").val( data_email );
    $("#ed_designation").val( data_designation );
    $("#ed_salary_month").val( data_salary_month );
    $("#ed_from_date").val( data_from_date );
    $("#ed_to_date").val( data_to_date );
    $("#ed_salary_year").val( data_salary_year );
    $("#ed_salary").val( data_salary );
    $("#ed_basic_salary").val( data_basic_salary );
    $("#dearance_allowance_amount").val( data_dearance_allowance );
    $("#medical_allowance_amount").val( data_medical_allowance );
    $("#hra_amount").val( data_hra );
    $("#ed_gross_salary").val( data_gross_salary );
    $("#ed_lop").val( data_lop );
    $("#ed_net_salary").val( data_net_salary );
    $('#edit_salary').modal('show');
});
				</script>
				<div id="edit_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Staff Salary</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="salary_edit" method="post">
									<input type="hidden" id="ed_sala_id" name="sala_id">
									<div class="row"> 
										<div class="col-sm-4"> 
											<div class="input-block mb-3">
												<label class="col-form-label">Employee</label>
												<input class="form-control" id="ed_emp_id"  name="emp_id" readonly>										
											</div>
										</div>
										<div class="col-sm-4"> 
											<label class="col-form-label">Empolyee Name</label>
											<input class="form-control" type="text" id="ed_emp_name" name="emp_name" readonly>
										</div>
										<div class="col-sm-4"> 
											<label class="col-form-label">Salary</label>
											<input class="form-control" type="text" id="ed_salary" name="salary">
										</div>
										<div class="col-sm-4"> 
											<label class="col-form-label">Salary Month</label>
											<select class="select" name="salary_month" id="ed_salary_month"> 
									<option>Select Month</option>
									<option value="Jan">Jan</option>
									<option value="Feb">Feb</option>
									<option value="Mar">Mar</option>
									<option value="Apr">Apr</option>
									<option value="May">May</option>
									<option value="Jun">Jun</option>
									<option value="Jul">Jul</option>
									<option value="Aug">Aug</option>
									<option value="Sep">Sep</option>
									<option value="Oct">Oct</option>
									<option value="Nov">Nov</option>
									<option value="Dec">Dec</option>
								</select>
										</div>
										<div class="col-sm-4"> 
											<label class="col-form-label">Year</label>
											<select class="select" name="salary_year" id="ed_salary_year"> 
									<option>Select Year</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
								</select>
										</div>
										<div class="col-sm-4"> 
											<label class="col-form-label">From Date <span class="text-danger">*</span></label>
											<input class="form-control datetimepicker" type="text" name="from_date" id="ed_from_date">
										</div>
										<div class="col-sm-4"> 
											<label class="col-form-label">To Date <span class="text-danger">*</span></label>
											<input class="form-control datetimepicker"  type="text" name="to_date" id="ed_to_date">
										</div>
									</div>
									<hr>
									<div class="row"> 
										<h4 class="text-primary mt-2">Earnings</h4>
										<div class="col-sm-4"> 											
											<div class="input-block mb-3">
												<label class="col-form-label">Basic Salary</label>
												<input class="form-control" type="text" id="ed_basic_salary" name="basic_salary" oninput="calc();">
											</div>
										</div>
										<div class="col-sm-4">	
											<div class="input-block mb-3">
												<label class="col-form-label">Dearance Allowance <span class="text-danger">(52%)</span></label>
												<input class="form-control" type="text" id="ed_dearance_allowance_amount" placeholder="52" oninput="calc();">
												<input type="text" class="form-control" id="dearance_allowance_amount" name="dearance_allowance" readonly>
											</div>
										</div>
										<div class="col-sm-4">	
											<div class="input-block mb-3">
												<label class="col-form-label">Medical Allowance <span class="text-danger">(32%)</span></label>
												<input class="form-control" type="text" id="ed_medical_allowance_amount" placeholder="32" oninput="calc();">
												<input type="text" class="form-control" id="medical_allowance_amount" name="medical_allowance" readonly>
											</div>
										</div>
										<div class="col-sm-4">		
											<div class="input-block mb-3">
												<label class="col-form-label">Hra <span class="text-danger">(10%)</span></label>
												<input class="form-control" type="text" id="ed_hra_amount" placeholder="10" oninput="calc();">
												<input type="text" class="form-control" id="hra_amount" name="hra" readonly>
											</div>
										</div>
										<div class="col-sm-4">		
											<div class="input-block mb-3">
												<label class="col-form-label">Gross Salary</label>
												<input class="form-control" type="text" id="ed_gross_salary" name="gross_salary" readonly>
											</div> 
										</div>	
										</div>
										   <script>
												function calc() {
  var basic_salary = document.getElementById("ed_basic_salary").value;
  var basic_salary = parseInt(basic_salary, 10);
  var dearance_allowance = document.getElementById("ed_dearance_allowance_amount").value;
  var dearance_allowance = parseInt(dearance_allowance, 10);
  var dearance_allowance_amount = basic_salary * dearance_allowance / 100;
  var d_a_amount = parseFloat(dearance_allowance_amount);
  var medical_allowance = document.getElementById("ed_medical_allowance_amount").value;
  var medical_allowance = parseInt(medical_allowance, 10);
  var medical_allowance_amount = basic_salary * medical_allowance / 100;
  var m_a_amount = parseFloat(medical_allowance_amount);
  var hra = document.getElementById("ed_hra_amount").value;
  var hra = parseInt(hra, 10);
  var hra_amount = basic_salary * hra / 100;
  var h_a_amount = parseFloat(hra_amount);
  var gross_salary = basic_salary + d_a_amount + m_a_amount + h_a_amount;
  var lop = document.getElementById("ed_lop").value;
  var lop = parseInt(ed_lop, 10);
  var gross_salary2 = document.getElementById("ed_gross_salary").value;
  var gross_salary2 = parseInt(gross_salary2, 10);
  var net_salary = gross_salary2 - lop;
  document.getElementById("dearance_allowance_amount").value = d_a_amount;
  document.getElementById("medical_allowance_amount").value = m_a_amount;
  document.getElementById("hra_amount").value = h_a_amount;
  document.getElementById("ed_gross_salary").value = gross_salary;
  document.getElementById("ed_net_salary").value = net_salary;
}
                                            </script>
                                            <script>
												function calc2() { 
  var lop = document.getElementById("ed_lop").value;
  var lop = parseInt(lop, 10);
  var gross_salary2 = document.getElementById("ed_gross_salary").value;
  var gross_salary2 = parseInt(gross_salary2, 10);
  var net_salary = gross_salary2 - lop;
  document.getElementById("ed_net_salary").value = net_salary;
}
                                            </script>
                                            <hr>
									<div class="row"> 
										<h4 class="text-primary mt-2">Deductions</h4>
										<div class="col-sm-4"> 											
											<div class="input-block mb-3">
												<label class="col-form-label">LOP</label>
												<input class="form-control" type="text" id="ed_lop" name="lop" oninput="calc2();">
											</div>
										</div>
										<div class="col-sm-4">		
											<div class="input-block mb-3">
												<label class="col-form-label">Net Salary</label>
												<input class="form-control" type="text" id="ed_net_salary" name="net_salary" readonly>
											</div> 
										</div>
									</div>	
										<!--<div class="col-sm-6">  
											<h4 class="text-primary">Deductions</h4>
											<div class="input-block mb-3">
												<label class="col-form-label">TDS</label>
												<input class="form-control" type="text" value="$300">
											</div> 
											<div class="input-block mb-3">
												<label class="col-form-label">ESI</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">PF</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Leave</label>
												<input class="form-control" type="text" value="$250">
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Prof. Tax</label>
												<input class="form-control" type="text" value="$110">
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Labour Welfare</label>
												<input class="form-control" type="text" value="$10">
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Fund</label>
												<input class="form-control" type="text" value="$40">
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Others</label>
												<input class="form-control" type="text" value="$15">
											</div>
										</div>-->
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res1" class="submit-section" style="text-align: center;"></h4>

<script>

$(document).ready(function (e) {
	$("#salary_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "salary_edit.php",
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
				<!-- /Edit Salary Modal -->
				
				<!-- Delete Salary Modal -->
				<script>
				$(".passingSalDataDel").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');	
	var data_salary_month = $(this).attr('data-salary-month');
	var data_salary_year = $(this).attr('data-salary-year');
	var data_salary = $(this).attr('data-salary');	
   
    $("#data_sal_id").val( data_id );
    $("#d_emp_id").val( data_emp_id );
    $("#d_salary_month").val( data_salary_month );
    $("#d_salary_year").val( data_salary_year );
    $("#d_salary").val( data_salary );
    $('#delete_salary').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="delete_salary" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Salary</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									
									<div class="row">
										<form id="salary_delete" method="post">
											<input class="form-control" type="hidden" id="data_sal_id" name="sal_id">
										<div class="col-12 text-center">
											<div class="input-block mb-3">
												<label class="col-form-label">Emp Code</label>
												<input class="form-control" type="text" id="d_emp_id" name="emp_id" readonly>
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Month</label>
												<input class="form-control" type="text" id="d_salary_month" name="salary_month" readonly>
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Year</label>
												<input class="form-control" type="text" id="d_salary_year" name="salary_year" readonly>
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Salary</label>
												<input class="form-control" type="text" id="d_salary" name="salary" readonly>
											</div>
											<div class="submit-section">
											<a><button class="btn btn-primary submit-btn">Delete</button></a>
											</div>
										</div>
										</form>
									</div>
									<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#salary_delete").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "salary_delete.php",
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
				<!-- /Delete Salary Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

         <?php include 'setting-icon.php';?>
		
		<!-- jQuery -->
       <script data-cfasync="false" src="assets/cloudflare-static/email-decode.min.js"></script>
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

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
