<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Forgot Password - Redot Solutions</title>
		
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
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<div class="account-content">
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="dashboard.php"><img src="assets/img/logo2.png" alt=""></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Forgot Password?</h3>
							<!--<p class="account-subtitle">Enter your email to get a password reset link</p>-->
							
							<!-- Account Form -->
							<form action="forgot-password.php" method="post">
								<div class="input-block mb-4">
									<label class="col-form-label">Emp Code</label>
									<input class="form-control" type="text" name="emp_id">
								</div>
								<div class="input-block mb-4">
									<label class="col-form-label">Old Password</label>
									<input class="form-control" type="text" name="old_password">
								</div>
								<div class="input-block mb-4">
									<label class="col-form-label">New Password</label>
									<input class="form-control" type="text" name="new_password">
								</div>
								<div class="input-block mb-4 text-center">
									<button class="btn btn-primary account-btn" type="submit" name="submit" >Reset Password</button>
								</div>
								<div class="account-footer">
									<p>Remember your password? <a href="login.php">Login</a></p>
								</div>
							</form>
							<?php
require_once('inc/config.php');
 
        // ... 

// LOGIN USER
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['emp_id']);
  $old_password = mysqli_real_escape_string($db, $_POST['old_password']);
  $new_password = mysqli_real_escape_string($db, $_POST['new_password']);

  $statusMsg = '';

  
  	//$password = md5($password);
  	

//$id= $_SESSION['username'];

$query = $db->query("SELECT * FROM user_login WHERE username='$username' AND password='$old_password' Limit 1");
if($query->num_rows > 0){
	
	$sql = "UPDATE user_login SET password='$new_password' WHERE username='$username'";
	 $result = mysqli_query($db, $sql);
	//echo $result;
	if($result) {
		$statusMsg = "Password Changed";
		//header("location: login.php");
		$statusMsg = "<div class='text-center'><h4 style='color: #02a41c;'>Password Changed</h4></div>";
	}
} else {
	//header('location: worksheet_evaluation.php');
	$statusMsg = "<div class='text-center'><h4 style='color: #f20f0f;'>Incorrect Password</h4></div>";
}
echo $statusMsg;
}

?>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
       <script src="assets/js/jquery-3.7.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
