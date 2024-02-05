<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Login - Redot Solutions</title>
		
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
			
		<!-- Lineawesome CSS -->
		<link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<!--<a href="job-list.php" class="btn btn-primary apply-btn">Apply Job</a>-->
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href=""><img src="assets/img/logo.png" alt="" style="width: 40%;"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>
							
							<!-- Account Form -->
							<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
							<!--<div class="input-block mb-4">
									<label class="col-form-label">Role</label>
									<select class="form-control" placeholder="Role" name="role" required>
                                      <option value="1">Admin</option>
                                      <option value="2">Employee</option>
                                    </select>
								</div>--->
								<div class="input-block mb-4">
									<label class="col-form-label">User name</label>
									<input class="form-control" type="text" name="username" value="" required>
								</div>
								<div class="input-block mb-4">
									<div class="row align-items-center">
										<div class="col">
											<label class="col-form-label">Password</label>
										</div>
										<!--<div class="col-auto">
											<a class="text-muted" href="forgot-password.php">
												Forgot password?
											</a>
										</div>-->
									</div>
									<div class="position-relative">
										<input class="form-control" type="password" value="" name="password" id="password" required>
										<span class="fa-solid fa-eye-slash" id="toggle-password"></span>
									</div>
								</div>
								<div class="input-block mb-4 text-center">
									<button class="btn btn-primary account-btn" name="login" type="submit">Login</button>
								</div>
								<!--<div class="account-footer">
									<p>Don't have an account yet? <a href="register.php">Register</a></p>
								</div>-->
							</form>
							<!-- /Account Form -->
						
            
<?php 
session_start();

require_once('inc/config.php');

        // ... 

// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  //$role = mysqli_real_escape_string($db, $_POST['role']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  /*if (empty($role)) {
  	array_push($errors, "role is required");
  }*/

  	//$password = md5($password);
  	$query = "SELECT * FROM user_login WHERE username='$username' AND password='$password' AND status ='1'";
  	$results = mysqli_query($db, $query);
  	
  	  		if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  //$_SESSION['role'] = $role;
  	  header('location: dashboard.php');
 /*switch($role){
 case '1':
 header('location: dashboard.php');
 break;
 case '2':
 $month = date('m');
$insert2 = "INSERT INTO login_attendance (username, emp_id, month, date)  
                  VALUES('$username', '$username','$month', Now())";  
          
        mysqli_query($db, $insert2); 
 header('location: dashboard.php');
  break;
 case '3':  
  $month = date('m');
 $insert3 = "INSERT INTO login_attendance (username, roll_id, month, date)  
                  VALUES('$username', '$password','$month', Now())";  
          
        mysqli_query($db, $insert3); 
 header('location: dashboard.php');
 break;
 case '4':
  $month = date('m');
 $insert4 = "INSERT INTO login_attendance (username, roll_id, month, date)  
                  VALUES('$username', '$password','$month', Now())";  
          
        mysqli_query($db, $insert4); 
 header('location: class_incharge_dashboard.php');
 break;

 }*/
  	  //$_SESSION['success'] = "Welcome You <strong style='text-transform: capitalize;'>$username</strong>";
  	  //header('location: dashboard.php');
  	
  }
  else{
     echo "<div class='text-center'><h4 style='color: #f20f0f;'>Incorrect Login</h4></div>";
     }
}

        ?>
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
