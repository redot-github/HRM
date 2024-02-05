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
        <title>Attendance - Redot Solutions</title>
		
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
								<h3 class="page-title">Attendance</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Attendance</li>
								</ul>
							</div>
							<!--<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leave"><i class="fa-solid fa-plus"></i> Add Leave</a>
							</div>-->
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Leave Statistics -->
					<!--<div class="row">
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Today Presents</h6>
								<h4>12 / 60</h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Planned Leaves</h6>
								<h4>8 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Unplanned Leaves</h6>
								<h4>0 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3 d-flex">
							<div class="stats-info w-100">
								<h6>Pending Requests</h6>
								<h4>12</h4>
							</div>
						</div>
					</div>-->
					<!-- /Leave Statistics -->
					
					<!-- /Attendance Upload -->
					<?php 
					if(isset($_POST['submit_form']))
{
	
					$att = $_POST['att'];
//$emp_id=$_POST['emp_code'];//Set your post id
$at_date=$_POST['date'];
 $date1 = new DateTime($at_date);
$date=$date1->format('Y-m-d');
$attendance_status = $_POST['attendance_status'];
foreach ($_POST['att'] as $id => $name) {
	//echo 'Category id ' . $id . ' with name ' . $name;
  
  $query = "SELECT * FROM attendance WHERE emp_code='$name' AND date='$date' and attendance='$attendance_status'";
  	$results = mysqli_query($db, $query);
  	
  	  		if (mysqli_num_rows($results) == 1) {
  $result =  mysqli_query($db,"UPDATE attendance SET attendance = '$attendance_status' WHERE emp_code = '$name' AND date = '$date'");
  } else {
	  $result =  mysqli_query($db,"INSERT INTO attendance(emp_code, date, attendance) values('$name','$date','$attendance_status')");
	  }
}
/*foreach ($_POST['atte'] as $ids => $names) {
	//echo 'Category id ' . $ids . ' with name ' . $names;
$result2 =  mysqli_query($db,"INSERT INTO attendance(emp_code, date, attendance) values('$names','$date','$attendance_status')");
}*/
if($result)
{
	 $data_atte = $at_date;
                                	          $timestamp = strtotime($data_atte);
                                	          $atte_date = date('M d, Y', $timestamp);
echo "<h3><strong class='mb-3'><span style='color: red;'>".$atte_date."</span> Attendance Record Uploaded Successfully.</strong></h3>";
}
}
					?>	
					<form class="mt-3" id="attendance_update" method="post" action="">
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<form action"" method="post">
									<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<input class="form-control datetimepicker" type="text" name="date" required>
								<label class="focus-label">Date</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating" name="attendance_status"> 
									<option> -- Select -- </option>
									<option value="P">Present</option>
									<option value="A">Absent</option>
									<option value="Holiday">Holiday</option>
								</select>
								<label class="focus-label">Attendance</label>
							</div>
					   </div>
					    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<button type="submit" name="submit_form" href="#" class="btn btn-success w-100"> Submit </button>  
					   </div> 
					   		
					   </div>
									
							
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th><input type="checkbox" id="checkAll"/></th>
											<th>Employee</th>
											<th>Employee Code</th>
											<th>Department</th>
											<th>Designation</th>
										</tr>
									</thead>
									<tbody>
										<?php
									$sql = $db->query("select * from  manage_emp WHERE status=1 AND designation!='Admin' ORDER BY emp_code ASC");
									$count = 0;
									if($sql->num_rows>0){
                                    while($row = $sql->fetch_assoc()){ ?>
										<tr>
											<td><input class="chk" id="att" type="checkbox" name="att[]" value="<?php echo $row["emp_code"]; ?>"></td>
											<td>
												<h2 class="table-avatar">
													<!--<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>-->
													<a href=""><?php echo $row['name'];?> <?php echo $row['last_name'];?></a>
												</h2>
											</td>
											<td><?php echo $row['emp_code'];?></td>
											<td><?php echo $row['department'];?></td>
											<td><?php echo $row['designation'];?></td>
										</tr>
										<?php } } ?>
										</form>
										


										<!--<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a>	John Doe  <span>Web Designer</span></a>
												</h2>
											</td>
											<td>Medical Leave</td>
											<td>27 Feb 2019</td>
											<td>27 Feb 2019</td>
											<td>1 day</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
													</div>
												</div>
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
				
				<script type="text/javascript" src="jquery.min.js"></script>
				<script type="text/javascript">
       $(document).ready(function() {
		   //Select and deselect all checkboxes
		   $("#checkAll").click(function () {
				  $('.chk').prop('checked', this.checked);
			  });
		  
			//If one items deselect then checkbox 'checkAll' is UnCheck
			//If all items select individually then checkbox 'checkAll' is Check
			$(".chk").click(function () {
				$("#checkAll").prop('checked', ($('.chk:checked').length == $('.chk').length) ? true : false);				  
			});
    	});
	</script>
				
				<!-- Add Leave Modal -->
				<div id="add_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="leave_apply" method="post">
									<input name="emp_code" value="<?php echo $pro_data['emp_code']; ?>" type="hidden">
									<input name="emp_name" value="<?php echo $pro_data['name']; ?> <?php echo $pro_data['last_name']; ?>" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave 12 Days">Casual Leave 12 Days</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="Loss of Pay">Loss of Pay</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_from">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_to">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Number of days <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="no_of_days">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
										
										<input class="form-control" readonly value="" type="text" name="remain_days">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" name="reasons"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Leave Modal -->
				
				<!-- Edit Leave Modal -->
				<script>
				$(".passingDATA").click(function () {
	var le_id = $(this).attr('data-id');				
    var emp_code = $(this).attr('data-emp-id');
    var data_leave_type = $(this).attr('data-leave-type');
    var data_from_date = $(this).attr('data-from-date');
    var data_to_date = $(this).attr('data-to-date');
    var data_days = $(this).attr('data-days');
    var data_remain_days = $(this).attr('data-remain-days');
    var data_reason = $(this).attr('data-reason');
    $("#lea_id").val( le_id );
    $("#emp_code").val( emp_code );
    $("#leave_type").val( data_leave_type );
    $("#from_date").val( data_from_date );
    $("#to_date").val( data_to_date );
    $("#days").val( data_days );
    $("#remain_days").val( data_remain_days );
    $("#reason").val( data_reason );
    $('#edit_leave').modal('show');
});
				</script>
				<div id="edit_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Leave</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="emp_leave_edit" method="post">
									<input id="lea_id" name="lea_id" value="" type="hidden">
									<input id="emp_code" name="emp_code" value="" type="hidden">
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Type <span class="text-danger">*</span></label>
										<select class="select" id="leave_type" name="leave_type">
											<option>Select Leave Type</option>
											<option value="Casual Leave 12 Days">Casual Leave 12 Days</option>
											<option value="Medical Leave">Medical Leave</option>
											<option value="Loss of Pay">Loss of Pay</option>
										</select>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" id="from_date" name="from_date" value="" type="text">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" id="to_date" name="to_date" value="" type="text">
										</div>
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Number of days <span class="text-danger">*</span></label>
										<input class="form-control" readonly type="text" id="days" name="days" value="2">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
										<input class="form-control" readonly value="" id="remain_days" name="remain_days" type="text">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" id="reason" name="reason"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
								<h4 id="res2" class="submit-section" style="text-align: center;"></h4>
<script>

$(document).ready(function (e) {
	$("#emp_leave_edit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_edit.php",
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
				<!-- /Edit Leave Modal -->

				<!-- Approve Leave Modal -->
				<script>
				$(".passingappData").click(function () {
	var data_id = $(this).attr('data-id');		
	var data_emp_id = $(this).attr('data-emp-id');		
   
    $("#data_id").val( data_id );
    $("#emp_id").val( data_emp_id );
    $('#approve_leave').modal('show');
});
				</script>
				<div class="modal custom-modal fade" id="approve_leave" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Leave Approve</h3>
									<p>Are you sure want to approve for this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<form id="emp_leave_approve" method="post">
									         <input id="data_id" name="data_id" value="" type="hidden">
									         <input id="emp_id" name="emp_id" value="" type="hidden">
											<a><button class="btn btn-primary continue-btn">Approve</button></a>
											</form>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
										</div>
										<h4 id="res3" class="submit-section" style="text-align: center;"></h4>
										 
<script>

$(document).ready(function (e) {
	$("#emp_leave_approve").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "leave_emp_approval.php",
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
				<!-- /Approve Leave Modal -->
				
				<!-- Delete Leave Modal -->
				<div class="modal custom-modal fade" id="delete_approve" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Leave</h3>
									<p>Are you sure want to delete this leave?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Leave Modal -->
				
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
