<?php error_reporting(E_ERROR | E_PARSE);?>
<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                     <a href="dashboard.php" class="logo">
						<img src="assets/img/logo.png" width="70%" height="" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo2">
						<img src="assets/img/logo.png" width="70%" height="" alt="Logo">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>REDOT Solutions</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<!--<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa-solid fa-magnifying-glass"></i>
						   </a>
							<form action="">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
							</form>
						</div>
					</li>-->
					<!-- /Search -->
				
					<!-- Flag -->
					<!--<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us.png" alt="Flag" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="Flag" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="Flag" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="Flag" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="Flag" height="16"> German
							</a>
						</div>
					</li>-->
					<!-- /Flag -->
				
					<!-- Notifications -->
					<?php 
		//only visible to staff
		
		
										require_once('inc/config.php');
										require("user_role.php");
                                     if($role_id == 1){
										 $emp_coun = $db->query("select count(id) as emp_co from manage_emp WHERE admin_notfiy = 0 AND designation != 'Admin' ORDER BY joining_date DESC");
                                         $emp_sql = $db->query("select id, name, last_name, joining_date,emp_code from manage_emp WHERE admin_notfiy = 0 AND designation != 'Admin' ORDER BY joining_date DESC");
                                     
                                         $emp_leave_coun = $db->query("select count(id) as emp_le_co from emp_leaves WHERE admin_notify = 0 ORDER BY apply_on DESC");
                                         $emp_leave_sql = $db->query("select id, emp_code,emp_name, leave_type, leave_from, leave_to, remaining_days from emp_leaves WHERE admin_notify = 0 ORDER BY apply_on DESC");
									}
									if($role_id == 3){
										$emp_coun = $db->query("Select count(E.id) as emp_co from manage_emp E INNER JOIN (SELECT W.lead_emp_code1,W.team_members FROM teams_lead W ) WW ON WW.lead_emp_code1 = E.lead_emp_code AND E.lead_notfiy = 0 ORDER BY joining_date DESC");
                                     $emp_sql = $db->query("Select id, name, last_name, joining_date from manage_emp E INNER JOIN (SELECT W.lead_emp_code1,W.team_members FROM teams_lead W ) WW ON WW.lead_emp_code1 = E.lead_emp_code AND E.lead_notfiy = 0 ORDER BY joining_date DESC");
									
									 $emp_leave_coun = $db->query("Select count(id) as emp_le_co from emp_leaves L INNER JOIN (SELECT W.lead_emp_code1,W.team_members FROM teams_lead W )WW ON WW.lead_emp_code1 = L.lead_emp_code AND L.lead_notify = 0 ORDER BY apply_on DESC");
                                     $emp_leave_sql = $db->query("Select id, emp_code,emp_name, leave_type, leave_from, leave_to, remaining_days from emp_leaves L INNER JOIN (SELECT W.lead_emp_code1,W.team_members FROM teams_lead W )WW ON WW.lead_emp_code1 = L.lead_emp_code AND L.lead_notify = 0 ORDER BY apply_on DESC");
									}
									$count = 0;
									
					?>
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<?php if($role_id == 1 || $role_id == 3){
							$emp_counts = $emp_coun->fetch_assoc(); 							      
							      $emp_lev_counts = $emp_leave_coun->fetch_assoc(); 
							      $notify_count = $emp_counts['emp_co'] + $emp_lev_counts['emp_le_co'];
							  }
							  if($notify_count == 0){
							?>
							<i class="fa-regular fa-bell"></i> <span class="badge rounded-pill"></span>
							<?php } else { ?>
							<i class="fa-regular fa-bell"></i> <span class="badge rounded-pill"><?php echo $notify_count;?></span>
							<?php } ?>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<!--<a href="javascript:void(0)" class="clear-noti"> Clear All </a>-->
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<?php 
									if($emp_sql->num_rows>0){
                                    while($emp_row = $emp_sql->fetch_assoc()){
									?>
									<li class="notification-message">
										<a href="" onClick="updateId('<?php echo $emp_row['id']; ?>')">
											<div class="chat-block d-flex">
												<span class="avatar flex-shrink-0">
													<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><b>New Joinee :</b> <span class="noti-title"><?php echo $emp_row['name']; ?> <?php echo $emp_row['last_name']; ?> <?php echo $emp_row['emp_code']; ?></span></p>
													<p class="noti-time"><span class="notification-time">Joining Date : <?php echo $emp_row['joining_date']; ?></span></p>
												</div>
											</div>
										</a>
									</li>
									<?php } } ?>
									<?php 
									if($emp_leave_sql->num_rows>0){
                                    while($emp_leave_row = $emp_leave_sql->fetch_assoc()){
									?>
									<li class="notification-message">
										<a href="javascript:void(0)" onClick="leaveupdateId('<?php echo $emp_leave_row['id']; ?>')">
											<div class="chat-block d-flex">
												<span class="avatar flex-shrink-0">
													<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><b>Leave Apply :</b> <span class="noti-title"><?php echo $emp_leave_row['emp_name']; ?> <?php echo $emp_leave_row['emp_code']; ?></span><br><span class="noti-title">Leave Type : <?php echo $emp_leave_row['leave_type']; ?></span></p>
													<p class="noti-time"><span class="notification-time">Leave From : <?php echo $emp_leave_row['leave_from']; ?></span><br><span class="notification-time">Leave to : <?php echo $emp_leave_row['leave_from']; ?></span><br><span class="notification-time">Leave Remains : <?php echo $emp_leave_row['remaining_days']; ?></span></p>
												</div>
											</div>
										</a>
									</li>
									<?php } } ?>
									 <script type="text/javascript" src="jquery.min.js"></script>
									<script>
function updateId(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            alert(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", "emp_notify_update.php?id=" +id, true);
    xmlhttp.send();
}
</script>
	<script>
function leaveupdateId(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            alert(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", "leave_notify_update.php?id=" +id, true);
    xmlhttp.send();
}
</script>
								</ul>
							</div>
							<!--<div class="topnav-dropdown-footer">
								<a href="activities.php">View all Notifications</a>
							</div>-->
						</div>
					</li>
					<?php 
		//only visible to staff
		
		
										require_once('inc/config.php');
                            
										require("user_role.php");
                                     if($role_id == 2){
                                         $emp_task_coun = $db->query("select count(id) as emp_tas_co from emp_tasks WHERE to_emp = '$id' AND emp_notify = 0 ORDER BY created_on DESC");
                                         $emp_task_sql = $db->query("select id,client,project_name,team_name,task_name,lead_name,priority from emp_tasks WHERE to_emp = '$id' AND emp_notify = 0 ORDER BY created_on DESC");
									}
									if($role_id == 3){
                                         $emp_task_coun = $db->query("select count(id) as emp_tas_co from emp_tasks WHERE lead_emp_code = '$id' AND lead_notify = 0 ORDER BY created_on DESC");
                                         $emp_task_sql = $db->query("select id,client,project_name,team_name,task_name,lead_name,priority from emp_tasks WHERE lead_emp_code = '$id' AND lead_notify = 0 ORDER BY created_on DESC");
									}
									$count = 0;
									
					?>
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<?php 
							if($role_id == 2 || $role_id == 3){
							$emp_counts = $emp_task_coun->fetch_assoc(); 
							      $notify_count2 = $emp_counts['emp_tas_co'];
							  if($notify_count2 == 0){
							?>
							<i class="fa-regular fa-edit"></i> <span class="badge rounded-pill"></span>
							<?php } else { ?>
							<i class="fa-regular fa-edit"></i> <span class="badge rounded-pill"><?php echo $notify_count2;?></span>	
							<?php }  } ?>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<!--<a href="javascript:void(0)" class="clear-noti"> Clear All </a>-->
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<?php 
									if($emp_task_sql->num_rows>0){
                                    while($emp_task_row = $emp_task_sql->fetch_assoc()){
									?>
									<li class="notification-message">
										<a href="" onClick="updatetaskId('<?php echo $emp_task_row['id']; ?>')">
											<div class="chat-block d-flex">
												<div class="media-body flex-grow-1">
													<p class="noti-time"><b style="color: #7460ee;">Client : </b> <span class="noti-title"><?php echo $emp_task_row['client']; ?></span></p>
													<p class="noti-time"><b style="color: #7460ee;">Project : </b> <span class="noti-title"><?php echo $emp_task_row['project_name']; ?></span></p>
													<p class="noti-time"><b style="color: #7460ee;">Team Name : </b> <span class="noti-title"><?php echo $emp_task_row['team_name']; ?></span></p>													
													<p class="noti-details"><b style="color: #7460ee;">Task :</b> <span class="noti-title"><?php echo $emp_task_row['task_name']; ?></span></p>
													<p class="noti-time"><b style="color: #7460ee;">Assign By : </b> <span class="noti-title"><?php echo $emp_task_row['lead_name']; ?></span></p>
													<p class="noti-time"><b style="color: #7460ee;">Priority : </b> <span class="noti-title"><?php echo $emp_task_row['priority']; ?></span></p>
												</div>
											</div>
										</a>
									</li>
									<?php } } ?>
									<script>
function updatetaskId(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            alert(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", "task_notify_update.php?id=" +id, true);
    xmlhttp.send();
}
</script>
								</ul>
							</div>
							<!--<div class="topnav-dropdown-footer">
								<a href="activities.php">View all Notifications</a>
							</div>-->
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<!--<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="fa-regular fa-comment"></i><span class="badge rounded-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat.php">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.php">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.php">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-03.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.php">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.php">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-08.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="chat.php">View all Messages</a>
							</div>
						</div>
					</li>-->
					<!-- /Message Notifications -->
<?php 
                                    require_once('inc/config.php');
                                    $id= $_SESSION['username'];   
  	   $query2 = "SELECT * FROM manage_emp WHERE emp_code='$id'";
  	$results2 = mysqli_query($db, $query2);
  	//echo $results2;
  	$name= $results2->fetch_assoc(); ?>
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span class="user-img"><img src="profile-img/<?php echo $name['image']; ?>" alt="<?php echo $name['name']; ?> <?php echo $name['last_name']; ?>">
							<!--<span class="status online"></span></span>-->
							<span><?php echo $name['name']; ?> <?php echo $name['last_name']; ?></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
							<a class="dropdown-item" href="dashboard.php?logout='1'">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="forgot-password.php">Forget Password</a>
						<a class="dropdown-item" href="">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
