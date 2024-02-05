<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Performance Setting - HRMS admin template</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>

        <!-- Main Wrapper -->
        <div class="main-wrapper">

            <!-- Header -->
			<?php include 'header.php';?>
			<!-- /Header -->

            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
							
                        <ul>
                            <li> 
                                <a href="admin-dashboard.php"><i class="la la-home"></i> <span>Back to Home</span></a>
                            </li>
                            <li class="menu-title">Settings</li>
                            <li> 
                                <a href="settings.php"><i class="la la-building"></i> <span>Company Settings</span></a>
                            </li>
                            <li> 
                                <a href="localization.php"><i class="la la-clock-o"></i> <span>Localization</span></a>
                            </li>
                            <li> 
                                <a href="theme-settings.php"><i class="la la-photo"></i> <span>Theme Settings</span></a>
                            </li>
                            <li> 
                                <a href="roles-permissions.php"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
                            </li>
                            <li> 
                                <a href="email-settings.php"><i class="la la-at"></i> <span>Email Settings</span></a>
                            </li>
                            <li class="active"> 
                                <a href="performance-setting.php"><i class="la la-chart-bar"></i> <span>Performance Settings</span></a>
                            </li>
                            <li> 
                                <a href="approval-setting.php"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                            </li>
                            <li> 
                                <a href="invoice-settings.php"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
                            </li>
                            <li> 
                                <a href="salary-settings.php"><i class="la la-money"></i> <span>Salary Settings</span></a>
                            </li>
                            <li> 
                                <a href="notifications-settings.php"><i class="la la-globe"></i> <span>Notifications</span></a>
                            </li>
                            <li> 
                                <a href="change-password.php"><i class="la la-lock"></i> <span>Change Password</span></a>
                            </li>
                            <li> 
                                <a href="leave-type.php"><i class="la la-cogs"></i> <span>Leave Type</span></a>
                            </li>
                            <li> 
                                <a href="toxbox-setting.php"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
                            </li>
                            <li> 
                                <a href="toxbox-setting.php"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <!-- Two Col Sidebar -->
			<div class="two-col-bar" id="two-col-bar">
				<div class="sidebar sidebar-twocol">
					<div class="sidebar-left slimscroll">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link" id="v-pills-dashboard-tab" title="Dashboard" data-bs-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
								<span class="material-icons-outlined">
									home
								</span>
							</a>
							<a class="nav-link" id="v-pills-apps-tab" title="Apps" data-bs-toggle="pill" href="#v-pills-apps" role="tab" aria-controls="v-pills-apps" aria-selected="false">
								<span class="material-icons-outlined">
									dashboard
								</span>
							</a>
							<a class="nav-link" id="v-pills-employees-tab" title="Employees" data-bs-toggle="pill" href="#v-pills-employees" role="tab" aria-controls="v-pills-employees" aria-selected="false">
								<span class="material-icons-outlined">
									people
								</span>
							</a>
							<a class="nav-link" id="v-pills-clients-tab" title="Clients" data-bs-toggle="pill" href="#v-pills-clients" role="tab" aria-controls="v-pills-clients" aria-selected="false">
								<span class="material-icons-outlined">
									person
								</span>
							</a>
							<a class="nav-link" id="v-pills-projects-tab" title="Projects" data-bs-toggle="pill" href="#v-pills-projects" role="tab" aria-controls="v-pills-projects" aria-selected="false">
								<span class="material-icons-outlined">
									topic
								</span>
							</a>
							<a class="nav-link" id="v-pills-leads-tab" title="Leads" data-bs-toggle="pill" href="#v-pills-leads" role="tab" aria-controls="v-pills-leads" aria-selected="false">
								<span class="material-icons-outlined">
									leaderboard
								</span>
							</a>
							<a class="nav-link" id="v-pills-tickets-tab" title="Tickets" data-bs-toggle="pill" href="#v-pills-tickets" role="tab" aria-controls="v-pills-tickets" aria-selected="false">
								<span class="material-icons-outlined">
									confirmation_number
								</span>
							</a>
							<a class="nav-link" id="v-pills-sales-tab" title="Sales" data-bs-toggle="pill" href="#v-pills-sales" role="tab" aria-controls="v-pills-sales" aria-selected="false">
								<span class="material-icons-outlined">
									shopping_bag
								</span>
							</a>
							<a class="nav-link" id="v-pills-accounting-tab" title="Accounting" data-bs-toggle="pill" href="#v-pills-accounting" role="tab" aria-controls="v-pills-accounting" aria-selected="false">
								<span class="material-icons-outlined">
									account_balance_wallet
								</span>
							</a>
							<a class="nav-link" id="v-pills-payroll-tab" title="Payroll" data-bs-toggle="pill" href="#v-pills-payroll" role="tab" aria-controls="v-pills-payroll" aria-selected="false">
								<span class="material-icons-outlined">
									request_quote
								</span>
							</a>
						 
							<a class="nav-link" id="v-pills-policies-tab" title="Policies" data-bs-toggle="pill" href="#v-pills-policies" role="tab" aria-controls="v-pills-policies" aria-selected="false">
								<span class="material-icons-outlined">
									verified_user
								</span>
							</a>
							<a class="nav-link" id="v-pills-reports-tab" title="Reports" data-bs-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">
								<span class="material-icons-outlined">
									report_gmailerrorred
								</span>
							</a>
							<a class="nav-link" id="v-pills-performance-tab" title="Performance" data-bs-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">
								<span class="material-icons-outlined">
									shutter_speed
								</span>
							</a>
							<a class="nav-link" id="v-pills-goals-tab" title="Goals" data-bs-toggle="pill" href="#v-pills-goals" role="tab" aria-controls="v-pills-goals" aria-selected="false">
								<span class="material-icons-outlined">
									track_changes
								</span>
							</a>
							<a class="nav-link" id="v-pills-training-tab" title="Training" data-bs-toggle="pill" href="#v-pills-training" role="tab" aria-controls="v-pills-training" aria-selected="false">
								<span class="material-icons-outlined">
									checklist_rtl
								</span>
							</a>
							<a class="nav-link" id="v-pills-promotion-tab" title="Promotions" data-bs-toggle="pill" href="#v-pills-promotion" role="tab" aria-controls="v-pills-promotion" aria-selected="false">
								<span class="material-icons-outlined">
									auto_graph
								</span>
							</a>
							<a class="nav-link" id="v-pills-resignation-tab" title="Resignation" data-bs-toggle="pill" href="#v-pills-resignation" role="tab" aria-controls="v-pills-resignation" aria-selected="false">
								<span class="material-icons-outlined">
									do_not_disturb_alt
								</span>
							</a>
							<a class="nav-link" id="v-pills-termination-tab" title="Termination" data-bs-toggle="pill" href="#v-pills-termination" role="tab" aria-controls="v-pills-termination" aria-selected="false">
								<span class="material-icons-outlined">
									indeterminate_check_box
								</span>
							</a>
							<a class="nav-link" id="v-pills-assets-tab" title="Assets" data-bs-toggle="pill" href="#v-pills-assets" role="tab" aria-controls="v-pills-assets" aria-selected="false">
								<span class="material-icons-outlined">
									web_asset
								</span>
							</a>
							<a class="nav-link active" id="v-pills-jobs-tab" title="Jobs" data-bs-toggle="pill" href="#v-pills-jobs" role="tab" aria-controls="v-pills-jobs" aria-selected="false">
								<span class="material-icons-outlined">
									work_outline
								</span>
							</a>
							<a class="nav-link" id="v-pills-knowledgebase-tab" title="Knowledgebase" data-bs-toggle="pill" href="#v-pills-knowledgebase" role="tab" aria-controls="v-pills-knowledgebase" aria-selected="false">
								<span class="material-icons-outlined">
									school
								</span>
							</a>
							<a class="nav-link" id="v-pills-activities-tab" title="Activities" data-bs-toggle="pill" href="#v-pills-activities" role="tab" aria-controls="v-pills-activities" aria-selected="false">
								<span class="material-icons-outlined">
									toggle_off
								</span>
							</a>
							<a class="nav-link" id="v-pills-users-tab" title="Users" data-bs-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users" aria-selected="false">
								<span class="material-icons-outlined">
									group_add
								</span>
							</a>
							<a class="nav-link" id="v-pills-settings-tab" title="Settings" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
								<span class="material-icons-outlined">
									settings
								</span>
							</a>
							<a class="nav-link" id="v-pills-profile-tab" title="Profile" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
								<span class="material-icons-outlined">
									manage_accounts
								</span>
							</a>
							<a class="nav-link" id="v-pills-authentication-tab" title="Authentication" data-bs-toggle="pill" href="#v-pills-authentication" role="tab" aria-controls="v-pills-authentication" aria-selected="false">
								<span class="material-icons-outlined">
									perm_contact_calendar
								</span>
							</a>
							<a class="nav-link" id="v-pills-errorpages-tab" title="Error Pages" data-bs-toggle="pill" href="#v-pills-errorpages" role="tab" aria-controls="v-pills-errorpages" aria-selected="false">
								<span class="material-icons-outlined">
									announcement
								</span>
							</a>
							<a class="nav-link" id="v-pills-subscriptions-tab" title="Subscriptions" data-bs-toggle="pill" href="#v-pills-subscriptions" role="tab" aria-controls="v-pills-subscriptions" aria-selected="false">
								<span class="material-icons-outlined">
									loyalty
								</span>
							</a>
							<a class="nav-link" id="v-pills-pages-tab" title="Pages" data-bs-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">
								<span class="material-icons-outlined">
									layers
								</span>
							</a>
							<a class="nav-link" id="v-pills-forms-tab" title="Forms" data-bs-toggle="pill" href="#v-pills-forms" role="tab" aria-controls="v-pills-forms" aria-selected="false">
								<span class="material-icons-outlined">
									view_day
								</span>
							</a>
							<a class="nav-link" id="v-pills-tables-tab" title="Tables" data-bs-toggle="pill" href="#v-pills-tables" role="tab" aria-controls="v-pills-tables" aria-selected="false">
								<span class="material-icons-outlined">
									table_rows
								</span>
							</a>
							<a class="nav-link" id="v-pills-documentation-tab" title="Documentation" data-bs-toggle="pill" href="#v-pills-documentation" role="tab" aria-controls="v-pills-documentation" aria-selected="false">
								<span class="material-icons-outlined">
									description
								</span>
							</a>
							<a class="nav-link" id="v-pills-changelog-tab" title="Changelog" data-bs-toggle="pill" href="#v-pills-changelog" role="tab" aria-controls="v-pills-changelog" aria-selected="false">
								<span class="material-icons-outlined">
									sync_alt
								</span>
							</a>
							<a class="nav-link" id="v-pills-multilevel-tab" title="Multilevel" data-bs-toggle="pill" href="#v-pills-multilevel" role="tab" aria-controls="v-pills-multilevel" aria-selected="false">
								<span class="material-icons-outlined">
									library_add_check
								</span>
							</a>
						</div>
					</div>
					
					<div class="sidebar-right">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
								<p>Dashboard</p>
								<ul>
									<li>
										<a href="admin-dashboard.php">Admin Dashboard</a>
									</li>
									<li>
										<a href="employee-dashboard.php">Employee Dashboard</a>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-apps" role="tabpanel" aria-labelledby="v-pills-apps-tab">
								<p>App</p>
								<ul>
									<li>
										<a href="chat.php">Chat</a>
									</li>
									<li class="sub-menu">
										<a href="#">Calls <span class="menu-arrow"></span></a>
										<ul>
											<li><a href="voice-call.php">Voice Call</a></li>
											<li><a href="video-call.php">Video Call</a></li>
											<li><a href="outgoing-call.php">Outgoing Call</a></li>
											<li><a href="incoming-call.php">Incoming Call</a></li>
										</ul>
									</li>
									<li>
										<a href="calender.php">Calendar</a>
									</li>
									<li>
										<a href="contacts.php">Contacts</a>
									</li>
									<li>
										<a href="inbox.php">Email</a>
									</li>
									<li>
										<a href="file-manager.php">File Manager</a>
									</li>
								</ul>						
							</div>
							<div class="tab-pane fade" id="v-pills-employees" role="tabpanel" aria-labelledby="v-pills-employees-tab">
								<p>Employees</p>
								<ul>
									<li><a href="employees.php">All Employees</a></li>
									<li><a href="holidays.php">Holidays</a></li>
									<li><a href="leaves.php">Leaves (Admin) <span class="badge rounded-pill bg-primary float-end">1</span></a></li>
									<li><a href="leaves-employee.php">Leaves (Employee)</a></li>
									<li><a href="leave-settings.php">Leave Settings</a></li>
									<li><a href="attendance.php">Attendance (Admin)</a></li>
									<li><a href="attendance-employee.php">Attendance (Employee)</a></li>
									<li><a href="departments.php">Departments</a></li>
									<li><a href="designations.php">Designations</a></li>
									<li><a href="timesheet.php">Timesheet</a></li>
									<li><a href="shift-scheduling.php">Shift & Schedule</a></li>
									<li><a href="overtime.php">Overtime</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-clients" role="tabpanel" aria-labelledby="v-pills-clients-tab">
								<p>Clients</p>
								<ul>
									<li><a href="clients.php">Clients</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">
								<p>Projects</p>
								<ul>
									<li><a href="projects.php">Projects</a></li>
									<li><a href="tasks.php">Tasks</a></li>
									<li><a href="task-board.php">Task Board</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-leads" role="tabpanel" aria-labelledby="v-pills-leads-tab">
								<p>Leads</p>
								<ul>
									<li><a href="leads.php">Leads</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-tickets" role="tabpanel" aria-labelledby="v-pills-tickets-tab">
								<p>Tickets</p>
								<ul>
									<li><a href="tickets.php">Tickets</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
								<p>Sales</p>
								<ul>
									<li><a href="estimates.php">Estimates</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li><a href="payments.php">Payments</a></li>
									<li><a href="expenses.php">Expenses</a></li>
									<li><a href="provident-fund.php">Provident Fund</a></li>
									<li><a href="taxes.php">Taxes</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-accounting" role="tabpanel" aria-labelledby="v-pills-accounting-tab">
								<p>Accounting</p>
								<ul>
									<li><a href="categories.php">Categories</a></li>
									<li><a href="budgets.php">Budgets</a></li>
									<li><a href="budget-expenses.php">Budget Expenses</a></li>
									<li><a href="budget-revenues.php">Budget Revenues</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-payroll" role="tabpanel" aria-labelledby="v-pills-payroll-tab">
								<p>Payroll</p>
								<ul>
									<li><a href="salary.php"> Employee Salary </a></li>
									<li><a href="salary-view.php"> Payslip </a></li>
									<li><a href="payroll-items.php"> Payroll Items </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">
								<p>Policies</p>
								<ul>
									<li><a href="policies.php"> Policies </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
								<p>Reports</p>
								<ul>
									<li><a href="expense-reports.php"> Expense Report </a></li>
									<li><a href="invoice-reports.php"> Invoice Report </a></li>
									<li><a href="payments-reports.php"> Payments Report </a></li>
									<li><a href="project-reports.php"> Project Report </a></li>
									<li><a href="task-reports.php"> Task Report </a></li>
									<li><a href="user-reports.php"> User Report </a></li>
									<li><a href="employee-reports.php"> Employee Report </a></li>
									<li><a href="payslip-reports.php"> Payslip Report </a></li>
									<li><a href="attendance-reports.php"> Attendance Report </a></li>
									<li><a href="leave-reports.php"> Leave Report </a></li>
									<li><a href="daily-reports.php"> Daily Report </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
								<p>Performance</p>
								<ul>
									<li><a href="performance-indicator.php"> Performance Indicator </a></li>
									<li><a href="performance.php"> Performance Review </a></li>
									<li><a href="performance-appraisal.php"> Performance Appraisal </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-goals" role="tabpanel" aria-labelledby="v-pills-goals-tab">
								<p>Goals</p>
								<ul>
									<li><a href="goal-tracking.php"> Goal List </a></li>
									<li><a href="goal-type.php"> Goal Type </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-training" role="tabpanel" aria-labelledby="v-pills-training-tab">
								<p>Training</p>
								<ul>
									<li><a href="training.php"> Training List </a></li>
									<li><a href="trainers.php"> Trainers</a></li>
									<li><a href="training-type.php"> Training Type </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-promotion" role="tabpanel" aria-labelledby="v-pills-promotion-tab">
								<p>Promotion</p>
								<ul>
									<li><a href="promotion.php"> Promotion </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-resignation" role="tabpanel" aria-labelledby="v-pills-resignation-tab">
								<p>Resignation</p>
								<ul>
									<li><a href="resignation.php"> Resignation </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-termination" role="tabpanel" aria-labelledby="v-pills-termination-tab">
								<p>Termination</p>
								<ul>
									<li><a href="termination.php"> Termination </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-assets" role="tabpanel" aria-labelledby="v-pills-assets-tab">
								<p>Assets</p>
								<ul>
									<li><a href="assets.php"> Assets </a></li>
								</ul>
							</div>
							<div class="tab-pane fade show active" id="v-pills-jobs" role="tabpanel" aria-labelledby="v-pills-jobs-tab">
								<p>Jobs</p>
								<ul>
									<li><a href="user-dashboard.php" class="active"> User Dasboard </a></li>
									<li><a href="jobs-dashboard.php"> Jobs Dasboard </a></li>
									<li><a href="jobs.php"> Manage Jobs </a></li>
									<li><a href="job-applicants.php"> Applied Jobs </a></li>
									<li><a href="manage-resumes.php"> Manage Resumes </a></li>
									<li><a href="shortlist-candidates.php"> Shortlist Candidates </a></li>
									<li><a href="interview-questions.php"> Interview Questions </a></li>
									<li><a href="offer_approvals.php"> Offer Approvals </a></li>
									<li><a href="experiance-level.php"> Experience Level </a></li>
									<li><a href="candidates.php"> Candidates List </a></li>
									<li><a href="schedule-timing.php"> Schedule timing </a></li>
									<li><a href="apptitude-result.php"> Aptitude Results </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-knowledgebase" role="tabpanel" aria-labelledby="v-pills-knowledgebase-tab">
								<p>Knowledgebase</p>
								<ul>
									<li><a href="knowledgebase.php"> Knowledgebase </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab">
								<p>Activities</p>
								<ul>
									<li><a href="activities.php"> Activities </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-activities-tab">
								<p>Users</p>
								<ul>
									<li><a href="users.php"> Users </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
								<p>Settings</p>
								<ul>
									<li><a href="settings.php"> Settings </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								<p>Profile</p>
								<ul>
									<li><a href="profile.php"> Employee Profile </a></li>
									<li><a href="client-profile.php"> Client Profile </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-authentication" role="tabpanel" aria-labelledby="v-pills-authentication-tab">
								<p>Authentication</p>
								<ul>
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									<li><a href="forgot-password.php"> Forgot Password </a></li>
									<li><a href="otp.php"> OTP </a></li>
									<li><a href="lock-screen.php"> Lock Screen </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-errorpages" role="tabpanel" aria-labelledby="v-pills-errorpages-tab">
								<p>Error Pages</p>
								<ul>
									<li><a href="error-404.php">404 Error </a></li>
									<li><a href="error-500.php">500 Error </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-subscriptions" role="tabpanel" aria-labelledby="v-pills-subscriptions-tab">
								<p>Subscriptions</p>
								<ul>
									<li><a href="subscriptions.php"> Subscriptions (Admin) </a></li>
									<li><a href="subscriptions-company.php"> Subscriptions (Company) </a></li>
									<li><a href="subscribed-companies.php"> Subscribed Companies</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
								<p>Pages</p>
								<ul>
									<li><a href="search.php"> Search </a></li>
									<li><a href="faq.php"> FAQ </a></li>
									<li><a href="terms.php"> Terms </a></li>
									<li><a href="privacy-policy.php"> Privacy Policy </a></li>
									<li><a href="blank-page.php"> Blank Page </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-forms" role="tabpanel" aria-labelledby="v-pills-forms-tab">
								<p>Forms</p>
								<ul>
									<li><a href="form-basic-inputs.php">Basic Inputs </a></li>
									<li><a href="form-input-groups.php">Input Groups </a></li>
									<li><a href="form-horizontal.php">Horizontal Form </a></li>
									<li><a href="form-vertical.php"> Vertical Form </a></li>
									<li><a href="form-mask.php"> Form Mask </a></li>
									<li><a href="form-validation.php"> Form Validation </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-tables" role="tabpanel" aria-labelledby="v-pills-tables-tab">
								<p>Tables</p>
								<ul>
									<li><a href="tables-basic.php">Basic Tables </a></li>
									<li><a href="data-tables.php">Data Table </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-documentation" role="tabpanel" aria-labelledby="v-pills-documentation-tab">
								<p>Documentation</p>
								<ul>
									<li><a href="#">Documentation </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-changelog" role="tabpanel" aria-labelledby="v-pills-changelog-tab">
								<p>Change Log</p>
								<ul>
									<li><a href="#"><span>Change Log</span> <span class="badge badge-primary ms-auto">v3.4</span> </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-multilevel" role="tabpanel" aria-labelledby="v-pills-multilevel-tab">
								<p>Multi Level</p>
								<ul>
									<li class="sub-menu">
										<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
										<ul class="ms-3">
											<li class="sub-menu">
												<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 2</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
										</ul>
									</li>								
									<li><a href="javascript:void(0);">Level 2</a></li>
									<li><a href="javascript:void(0);">Level 3</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Two Col Sidebar -->
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">Performance Configuration	
                                <button class="btn btn-success m-t-5 btn-sm" type="submit">OKRs  Activated</button>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <p><b>Click the tabs below for more information on each Performance Management module.
                                    Only one Performance module can be activated at a time.
                                    </b>
                                </p>
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item active"><a class="nav-link active" href="#okr_tab" data-bs-toggle="tab">OKRs</a></li>
                                    <li class="nav-item "><a class="nav-link" href="#compentency_tab" data-bs-toggle="tab">Competency-based</a></li>
                                    <li class="nav-item "><a class="nav-link" href="#smart_goals_tab" data-bs-toggle="tab">SMART Goals</a></li>
                                </ul>
                                <div class="tab-content">

                                    <!-- OKR Config -->
                                    <div class="tab-pane active" id="okr_tab">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                               
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">OKRs Description</label>
                                                    <textarea rows="5" cols="5" class="form-control" name="description">Objectives and Key Results (OKR) is a framework for defining and tracking organizations objectives and their outcomes. OKRs comprise an Objective—a clearly defined goal—and one or more Key Results—specific measures used to track the achievement of that goal. The goal of OKR is to define how to achieve objectives through concrete, specific and measurable actions. Key Results can be measured on a sliding scale from 0.0 - 1.0 or 0-100%. Objectives should also be supported by initiatives, which are the plans and activities that help to achieve the objective and move forward the key results. Once objectives and key results have been established, regular and quarterly check-ins are required to make sure OKRs is progressing</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <div class="rating-list m-t-20">
                                                    <span class="rating-bad">
                                                    <span class="rating-count">
                                                    <a href="#">0.0</a>
                                                    <a href="#">0.1</a>
                                                    <a href="#">0.2</a>
                                                    <a href="#">0.3</a>
                                                    </span><br>
                                                    <span class="rating-text">We failed to make real progress</span>
                                                    </span>
                                                    <span class="rating-normal">
                                                    <span class="rating-count">
                                                    <a href="#">0.4</a>
                                                    <a href="#">0.5</a>
                                                    <a href="#">0.6</a>
                                                    </span><br>
                                                    <span class="rating-text">We made progress, but fell short of completion</span>
                                                    </span>
                                                    <span class="rating-good">
                                                    <span class="rating-count">
                                                    <a href="#">0.7</a>
                                                    <a href="#">0.8</a>
                                                    <a href="#">0.9</a>
                                                    <a href="#">1.0</a>
                                                    </span><br>
                                                    <span class="rating-text">We delivered</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <div class="submit-section my-3">
                                                    <button class="btn btn-primary submit-btn performance_status red_circle" data-status="okr" title="Admin can’t activate it again">Activate OKR</button>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <hr class="mt-0">
                                                <div class="input-block mb-3 m-b-0">
                                                    <label class="col-form-label">Choose Your Rating Scale</label>
                                                    <div class="radio_input" id="rating_scale_select_okr">
                                                        <label class="radio-inline custom_radio">
                                                        <input type="radio" name="rating_scale" value="rating_01_010" required="" class="rating_scale" checked="">0.1 - 1.0 <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-inline custom_radio">
                                                        <input type="radio" name="rating_scale" value="rating_1_5" required="" class="rating_scale">1 - 5 <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-inline custom_radio">
                                                        <input type="radio" name="rating_scale" value="rating_1_10" class="rating_scale">1 - 10 <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-inline custom_radio">
                                                        <input type="radio" name="rating_scale" value="custom_rating" class="rating_scale">Custom <span class="checkmark"></span>
                                                        </label> 
                                                    </div>
                                                </div>

                                                <!--0.1 to  1.0 Ratings Content -->
                                                <div class="input-block mb-3 d-block" id="01ratings_cont_okr">
                                                    <div class="table-responsive">
                                                        <form>
                                                            <table class="table setting-performance-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rating</th>
                                                                        <th>Short Descriptive Word</th>
                                                                        <th>Definition</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.1 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.1">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="dsdsd" placeholder="Short word to describe rating of 0.1" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">dfsdfa</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.2 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.2">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="sdfdsf" placeholder="Short word to describe rating of 0.2" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">sdfdsf</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.3 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.3">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="sdfds" placeholder="Short word to describe rating of 0.3" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">fsdf</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.4 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.4">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="sdfds" placeholder="Short word to describe rating of 0.4" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">fsdf</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.5 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.5">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="sdfdsf" placeholder="Short word to describe rating of 0.5" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">sdf</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.6 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.6">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="sdfds" placeholder="Short word to describe rating of 0.6" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">fsdsdf</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.7 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.7">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="dsfd" placeholder="Short word to describe rating of 0.7" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">fsdf</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.8 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.8">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="sdfsdf" placeholder="Short word to describe rating of 0.8" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">sdfds</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 0.9 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="0.9">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="sdf" placeholder="Short word to describe rating of 0.9" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">sdfsdsf</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 1.0 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="hidden" name="rating_no[]" class="form-control" value="1.0">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" value="dg" placeholder="Short word to describe rating of 1.0" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required="">fg</textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="submit-section m-b-0">
                                                                <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- 0.1 to  1.0  Ratings Content -->

                                                <!-- 5 Ratings Content -->
                                                <div class="input-block mb-3 d-none" id="5ratings_cont_okr">
                                                    <div class="table-responsive">
                                                        <form>
                                                            <table class="table setting-performance-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rating</th>
                                                                        <th>Short Descriptive Word</th>
                                                                        <th>Definition</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 1 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" placeholder="Short word to describe rating of 1" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 2 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" placeholder="Short word to describe rating of 2" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 3 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" placeholder="Short word to describe rating of 3" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 4 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" placeholder="Short word to describe rating of 4" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 5 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" placeholder="Short word to describe rating of 5" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                   
                                                                </tbody>
                                                            </table>
                                                            <div class="submit-section m-b-0">
                                                                <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /5 Ratings Content -->

                                                <!-- 10 Ratings Content -->
                                                <div class="input-block mb-3 d-none" id="10ratings_cont_okr">
                                                    <div class="table-responsive">
                                                        <form>
                                                            <table class="table setting-performance-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rating</th>
                                                                        <th>Short Descriptive Word</th>
                                                                        <th>Definition</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                  
                                                                    <tr>
                                                                        <td class="w-50pixel"> 1 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 1" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 2 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 2" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 3 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 3" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 4 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 4" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 5 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 5" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 6 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 6" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 7 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 7" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 8 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 8" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 9 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 9" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 10 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 10" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="submit-section">
                                                                <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- 10 Ratings Content -->

                                                <!-- Custom Ratings Content -->
                                                <div class="input-block mb-3 d-none" id="custom_rating_cont_okr">
                                                    <label class="col-form-label">Custom Rating Count</label>
                                                    <div class="input-block mb-3">
                                                        <input type="text" class="form-control custom_rating_input width-160" data-type="okr" id="custom_rating_input3" name="custom_rating_count" value="" placeholder="20">
                                                    </div>
                                                    <div class="table-responsive">
                                                        <form>
                                                          
                                                            <table class="table setting-performance-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rating</th>
                                                                        <th>Short Descriptive Word</th>
                                                                        <th>Definition</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="custom-value_okr">
                                                                </tbody>
                                                            </table>
                                                            <div class="submit-section">
                                                                <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /Custom Ratings Content -->

                                            </div>
                                            
                                        </div>
                                    </div>

                                    <!-- Compentency Config -->
                                    <div class="tab-pane" id="compentency_tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">Competency-based</label>
                                                    <textarea rows="4" cols="5" class="form-control" name="competencies_desc">Competency-based performance management allow companies to evaluate employees' performance through define core competencies that align with the company’s mission, vision and goals. A 360-degree assessment can also be added to capture ratings and feedback </textarea>
                                                </div>
                                                <div class="submit-section my-3">			
                                                    <button class="m-0 btn btn-sm btn-primary submit-btn performance_status " data-status="competency" title="">Activate Competency-based</button>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block mb-3">
                                                    <table class="table table-bordered table-center">
                                                        <thead class="bg-thead">
                                                            <tr>
                                                                <th class="width-250">Competency</th>
                                                                <th>Definition</th>
                                                                <th class="text-center width-70">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Adaptability					
                                                                </th>
                                                                <td>
                                                                    <div class="task-textarea">
                                                                        <textarea placeholder="Definition" id="competency_definition_6" onkeyup="competency_definition(6)" class="form-control definition_edit_6" readonly="">Ability to handle ambiguity and certain situations outside of their
                                                                        control. Dealing with a change in process, systems, role, and direction of
                                                                        the company. Adapting to new ways of doing things.</textarea>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <a href="javascript:void(0);" class="text-warning" title="" id="definition_edit_6" onclick="definition_edit(6)" data-original-title="Edit"><i class="fa-solid fa-pencil"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" title="" data-bs-toggle="ajaxModal" data-original-title="Delete"><i class="fa-solid fa-xmark"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Collaboration &amp; Teamwork					
                                                                </th>
                                                                <td>
                                                                    <div class="task-textarea">
                                                                        <textarea placeholder="Definition" id="competency_definition_7" onkeyup="competency_definition(7)" class="form-control definition_edit_7" readonly="">Works harmoniously with others to get a job done; shares critical information
                                                                        with everyone involved in a project. Works cooperatively with others to achieve
                                                                        common goals. Seeks opinions and values the contributions of others; involves
                                                                        team in discussion and decision-making.</textarea>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <a href="javascript:void(0);" class="text-warning" title="" id="definition_edit_7" onclick="definition_edit(7)" data-original-title="Edit"><i class="fa-solid fa-pencil"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" title="" data-bs-toggle="ajaxModal" data-original-title="Delete"><i class="fa-solid fa-xmark"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Communication					
                                                                </th>
                                                                <td>
                                                                    <div class="task-textarea">
                                                                        <textarea placeholder="Definition" id="competency_definition_8" onkeyup="competency_definition(8)" class="form-control definition_edit_8" readonly="">Communicates in an engaging, effective, and respectful way to a wide
                                                                        variety of groups. Delivers convincing and meaningful messages that
                                                                        leave a positive impact. Effective oral and written communication skills.
                                                                        The ability to persuade and convince others including management.</textarea>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <a href="javascript:void(0);" class="text-warning" title="" id="definition_edit_8" onclick="definition_edit(8)" data-original-title="Edit"><i class="fa-solid fa-pencil"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" title="" data-bs-toggle="ajaxModal" data-original-title="Delete"><i class="fa-solid fa-xmark"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Customer Service					
                                                                </th>
                                                                <td>
                                                                    <div class="task-textarea">
                                                                        <textarea placeholder="Definition" id="competency_definition_9" onkeyup="competency_definition(9)" class="form-control definition_edit_9" readonly="">Listens and responds effectively to customer questions; resolves
                                                                        customer problems to the customer’s satisfaction; respects all internal
                                                                        and external customers; follows up to evaluate customer satisfaction;
                                                                        exceeds customer expectations.</textarea>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <a href="javascript:void(0);" class="text-warning" title="" id="definition_edit_9" onclick="definition_edit(9)" data-original-title="Edit"><i class="fa-solid fa-pencil"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" title="" data-bs-toggle="ajaxModal" data-original-title="Delete"><i class="fa-solid fa-xmark"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="input-block mb-3">
                                                    <form>
                                                        <table class="table performance-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pe-0">
                                                                        <input type="text" class="form-control" name="competency[]" required="" placeholder="Competency">
                                                                    </td>
                                                                    <td>
                                                                        <textarea rows="4" cols="20" class="form-control" name="definition[]" placeholder="Definition" required=""></textarea>
                                                                    </td>
                                                                    <td class="pe-0 width-55">
                                                                        <button type="button" class="btn btn-white add_competency_performance setting-pref-btn" data-bs-toggle="tooltip" data-original-title="Add Competency"><i class="fa-solid fa-plus-circle"></i></button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="">
                                                            <button class="btn btn-primary" type="submit" id="create_offers_submit">Create Competencies</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <hr class="mt-0">
                                                <div class="input-block mb-3 m-b-0">
                                                    <label class="col-form-label">Choose Your Rating Scale</label>
                                                    <div class="radio_input" id="rating_scale_select_competency">
                                                        <label class="radio-inline custom_radio">
                                                        <input type="radio" name="rating_scale_competency" value="rating_1_5" required="" class="rating_scale" checked="">1 - 5 <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-inline custom_radio">
                                                        <input type="radio" name="rating_scale_competency" value="rating_1_10" class="rating_scale">1 - 10 <span class="checkmark"></span>
                                                        </label>
                                                        <label class="radio-inline custom_radio">
                                                        <input type="radio" name="rating_scale_competency" value="custom_rating" class="rating_scale">Custom <span class="checkmark"></span>
                                                        </label> 
                                                    </div>
                                                </div>

                                                <!-- 5 Ratings Content -->
                                                <div class="input-block mb-3" id="5ratings_cont_competency" style="display: block">
                                                    <div class="table-responsive">
                                                        <form>
                                                            <table class="table setting-performance-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rating</th>
                                                                        <th>Short Descriptive Word</th>
                                                                        <th>Definition</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 1 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" value="tst" placeholder="Short word to describe rating of 1" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Lorem ipsum</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 2 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" value="dsgds" placeholder="Short word to describe rating of 2" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Lorem ipsum</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 3 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" value="sdg" placeholder="Short word to describe rating of 3" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Lorem ipsum</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 4 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" value="sdgsdg" placeholder="Short word to describe rating of 4" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Lorem ipsum</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 5 </td>
                                                                        <td class="w-300pixel">
                                                                            <input type="text" name="rating_value[]" class="form-control" value="sdg" placeholder="Short word to describe rating of 5" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Lorem ipsum</textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="submit-section m-b-0">
                                                                <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /5 Ratings Content -->

                                                <!-- 10 Ratings Content -->
                                                <div class="input-block mb-3" id="10ratings_cont_competency" style="display: none">
                                                    <div class="table-responsive">
                                                        <form>
                                                            <table class="table setting-performance-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rating</th>
                                                                        <th>Short Descriptive Word</th>
                                                                        <th>Definition</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                   
                                                                    <tr>
                                                                        <td class="w-50pixel"> 1 </td>
                                                                        <td class="w-300pixel">
                                                                           
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 1" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 2 </td>
                                                                        <td class="w-300pixel">
                                                                           
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 2" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 3 </td>
                                                                        <td class="w-300pixel">
                                                                            
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 3" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 4 </td>
                                                                        <td class="w-300pixel">
                                                                           
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 4" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 5 </td>
                                                                        <td class="w-300pixel">
                                                                            
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 5" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 6 </td>
                                                                        <td class="w-300pixel">
                                                                           
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 6" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 7 </td>
                                                                        <td class="w-300pixel">
                                                                           
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 7" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 8 </td>
                                                                        <td class="w-300pixel">
                                                                           
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 8" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 9 </td>
                                                                        <td class="w-300pixel">
                                                                            
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 9" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="w-50pixel"> 10 </td>
                                                                        <td class="w-300pixel">
                                                                           
                                                                            <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 10" required="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="submit-section">
                                                                <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- 10 Ratings Content -->

                                                <!-- Custom Ratings Content -->
                                                <div class="input-block mb-3" id="custom_rating_cont_competency" style="display: none">
                                                    <label class="col-form-label">Custom Rating Count</label>
                                                    <div class="input-block mb-3">
                                                        <input type="text" class="form-control custom_rating_input" data-type="competency" id="custom_rating_input1" name="custom_rating_count" value="" placeholder="20" style="width: 160px;">
                                                    </div>
                                                    <div class="table-responsive">
                                                        <form>
                                                          
                                                            <table class="table setting-performance-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rating</th>
                                                                        <th>Short Descriptive Word</th>
                                                                        <th>Definition</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="custom-value_competency">
                                                                </tbody>
                                                            </table>
                                                            <div class="submit-section">
                                                                <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /Custom Ratings Content -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Compentency Config -->

									<!-- Smart Goal Config -->
                                    <div class="tab-pane" id="smart_goals_tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">Smart Goals Configuration</label>
                                                    <textarea rows="4" cols="5" class="form-control" name="smart_goals">A 360-degree assessment can also be added to capture ratings and feedback</textarea>
                                                </div>
                                                <div class="submit-section my-3">														
                                                    <button class="btn btn-primary submit-btn performance_status " data-status="smart_goals" title="">Activate SMART Goals</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mt-0">
                                        <div class="input-block mb-3 m-b-0">
                                            <label class="col-form-label">Choose Your Rating Scale</label>
                                            <div class="radio_input" id="rating_scale_select">
                                                <label class="radio-inline custom_radio">
                                                <input type="radio" name="rating_scale_smart_goal" value="rating_1_5" required="" class="rating_scale" checked="">1 - 5 <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-inline custom_radio">
                                                <input type="radio" name="rating_scale_smart_goal" value="rating_1_10" class="rating_scale">1 - 10 <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-inline custom_radio">
                                                <input type="radio" name="rating_scale_smart_goal" value="custom_rating" class="rating_scale">Custom <span class="checkmark"></span>
                                                </label> 
                                            </div>
                                        </div>

                                        <!-- 5 Ratings Content -->
                                        <div class="input-block mb-3" id="5ratings_cont" style="display: block">
                                            <div class="table-responsive">
                                                <form>
                                                    <table class="table setting-performance-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rating</th>
                                                                <th>Short Descriptive Word</th>
                                                                <th>Definition</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="w-50pixel"> 1 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value[]" class="form-control" value="very bad" placeholder="Short word to describe rating of 1" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">very bad</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 2 </td>
                                                                <td class="w-300pixel">
                                                                  
                                                                    <input type="text" name="rating_value[]" class="form-control" value="bad" placeholder="Short word to describe rating of 2" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">bad</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 3 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value[]" class="form-control" value="Average" placeholder="Short word to describe rating of 3" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Average</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 4 </td>
                                                                <td class="w-300pixel">
                                                                    
                                                                    <input type="text" name="rating_value[]" class="form-control" value="Good" placeholder="Short word to describe rating of 4" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Good</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 5 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value[]" class="form-control" value="Very Good" placeholder="Short word to describe rating of 5" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition[]" class="form-control" placeholder="Descriptive Rating Definition" required="">Very Good</textarea>
                                                                </td>
                                                            </tr>
                                                          
                                                        </tbody>
                                                    </table>
                                                    <div class="submit-section m-b-0">
                                                        <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /5 Ratings Content -->

                                        <!-- 10 Ratings Content -->
                                        <div class="input-block mb-3" id="10ratings_cont" style="display: none">
                                            <div class="table-responsive">
                                                <form>
                                                    <table class="table setting-performance-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rating</th>
                                                                <th>Short Descriptive Word</th>
                                                                <th>Definition</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           
                                                            <tr>
                                                                <td class="w-50pixel"> 1 </td>
                                                                <td class="w-300pixel">
                                                                  
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 1" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 2 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 2" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 3 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 3" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 4 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 4" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 5 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 5" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 6 </td>
                                                                <td class="w-300pixel">
                                                                    
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 6" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 7 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 7" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 8 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 8" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 9 </td>
                                                                <td class="w-300pixel">
                                                                    
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 9" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-50pixel"> 10 </td>
                                                                <td class="w-300pixel">
                                                                   
                                                                    <input type="text" name="rating_value_ten[]" class="form-control" placeholder="Short word to describe rating of 10" required="">
                                                                </td>
                                                                <td>
                                                                    <textarea rows="3" name="definition_ten[]" class="form-control" placeholder="Descriptive Rating Definition" required=""></textarea>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="submit-section m-b-0">
                                                        <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- 10 Ratings Content -->

                                        <!-- Custom Ratings Content -->
                                        <div class="input-block mb-3" id="custom_rating_cont" style="display: none">
                                            <label class="col-form-label">Custom Rating Count</label>
                                            <div class="input-block mb-3">
                                                <input type="text" class="form-control custom_rating_input" data-type="smart_goal" id="custom_rating_input2" name="custom_rating_count" value="" placeholder="20" style="width: 160px;">
                                            </div>
                                            <div class="table-responsive">
                                                <form>
                                                   
                                                    <table class="table setting-performance-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rating</th>
                                                                <th>Short Descriptive Word</th>
                                                                <th>Definition</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="custom-value_smart_goal">
                                                        </tbody>
                                                    </table>
                                                    <div class="submit-section m-b-0">
                                                        <button class="btn btn-primary submit-btn create_goal_configuration_submit" type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /Custom Ratings Content -->

                                    </div>
                                    <!-- /Smart Goal Config -->

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

        <?php include 'setting-icon.php';?>
        
		<!-- jQuery -->
       <script src="assets/js/jquery-3.7.0.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Slimscroll JS -->
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Select2 JS -->
        <script src="assets/js/select2.min.js"></script>

         <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
