<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/select2/select2.css" />
		<link rel="stylesheet" href="vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="vendor/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="vendor/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="vendor/theme-custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>




	</head>
	<body>
		<section class="body">
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left"  style="top : 0 !important;">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
						
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="charity_admin.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Charity</span>
										</a>
									</li>
									<li>
										<a href="bank_admin.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Bank</span>
										</a>
									</li>
								</ul>
							</nav>
			
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
	
			
					
				
					<header class="page-header"   style="top : 0 !important;">

			
					
						<h2>Bank Table</h2>
					
						<div class="right-wrapper pull-right">
							
								<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="../charities.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
								

							
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="panel" style="top: 0% !important;">
							<header class="panel-heading">
								
						
								<h2 class="panel-title">Bank table</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th><p style="margin: 0 10px;">Id</p></th>
											<th><p style="margin: 0 40px;">Name</p></th>
											<th><p style="margin: 0 20px;">Phone Number</p></th>
											<th><p style="margin: 0 100px;">Description</p></th>
											<th><p style="margin: 0 40px;">Address</p></th>
											<th><p style="margin: 0 20px;">Longitude</p></th>
											<th><p style="margin: 0 20px;">Latitude</p></th>
											<th><p style="margin: 0 100px;">Bank requirements</th>
											<th><p style="margin: 0 40px;">Photo</th>
											<th><p style="margin: 0 20px;">city</th>
											<th><p style="margin: 0 20px;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeC">
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								
							</div>
			
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<div id="dialog" class="modal-block mfp-hide">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Are you sure?</h2>
				</header>
				<div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<p>Are you sure that you want to delete this row?</p>
						</div>
					</div>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
							<button id="dialogCancel" class="btn btn-default">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</div>

<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/magnific-popup/magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="vendor/select2/select2.js"></script>
		<script src="vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="vendor/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="vendor/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="vendor/theme.init.js"></script>


		<!-- Examples -->
		<script src="vendor/examples.datatables.editablebank.js"></script>
	</body>
</html>