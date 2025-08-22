<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets\img\logo\DSA logo.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>ADMIN</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header wrapper-->
		<div class="header-wrapper">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand gap-3">
						<div class="topbar-logo-header d-none d-lg-flex">
							<div class="">
								<img src="assets\img\logo\DSA logo.png" class="logo-icon" alt="logo icon">
							</div>
							<div class="">
								<h4 class="logo-text">DSA_JOB</h4>
							</div>
						</div>
						<div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
						<div class="search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
							
						</div>
						
						<div class="user-box dropdown px-3">
							<!-- <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
								href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
								<div class="user-info">
									<p class="user-name mb-0">Pauline Seitz</p>
									<p class="designattion mb-0">Web Designer</p>
								</div>
							</a> -->
							<ul class="dropdown-menu dropdown-menu-end">
								
								<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
											class="bx bx-log-out-circle"></i><span>Logout</span></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!--end header -->
			<!--navigation-->
			<div class="primary-menu">
				<nav class="navbar navbar-expand-lg align-items-center">
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
						aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header border-bottom">
							<div class="d-flex align-items-center">
								<div class="">
									<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
								</div>
								<div class="">
									<h4 class="logo-text">DSA_JOB</h4>
								</div>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
								aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav align-items-center flex-grow-1">
								<!-- Dashboard Menu Item -->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="dashboard.php"
										data-bs-toggle="dropdown">
										<div class="parent-icon"><i class='bx bx-home-alt'></i></div>
										<div class="menu-title d-flex align-items-center">Dashboard</div>
										
									</a>
									
								</li>

								<!-- Services Menu Item -->
								<li class="nav-item">
									<a class="nav-link" href="job.php">
										<div class="parent-icon"><i class='bx bx-capsule'></i></div>
										<div class="menu-title d-flex align-items-center">Job</div>
									</a>
								</li>

								<!-- Conditions Treated Menu Item -->
								<li class="nav-item">
									<a class="nav-link" href="details.php">
										<div class="parent-icon"><i class='bx bx-heart'></i></div>
										<div class="menu-title d-flex align-items-center">Job details</div>
									</a>
								</li>


							</ul>
						</div>

					</div>
				</nav>
			</div>

			<!--end navigation-->
		</div>
		<!--end header wrapper-->