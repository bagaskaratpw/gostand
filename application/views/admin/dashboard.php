<!doctype html>
<html class="no-js h-100" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Admin </title>
	<?php $this->load->view('admin/include/css');?>
</head>

<body class="h-100">
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('admin/include/sidebar_dash');?>
			<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
				<div class="main-navbar sticky-top bg-white">
					<!-- Main Navbar -->
					<nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
						<form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
							<div class="input-group input-group-seamless ml-3">
								
							</div>
						</form>
						<a class="nav-link nav-link-icon text-center" href="<?php echo base_url('login/logout');?>" role="button">
							<i class="material-icons">&#xE879;</i>
						</a>
						<nav class="nav">
							<a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
								data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
								<i class="material-icons">&#xE5D2;</i>
							</a>
						</nav>
					</nav>
				</div>
				<!-- / .main-navbar -->
				<div class="main-content-container container-fluid px-4">
					<!-- Page Header -->
					<div class="page-header row no-gutters py-4">
						<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
							<span class="text-uppercase page-subtitle">Dashboard</span>
							<h3 class="page-title">Blog Overview</h3>
						</div>
					</div>
					<!-- End Page Header -->
					<!-- Small Stats Blocks -->
					<div class="row">
						<div class="col-lg col-md-6 col-sm-6 mb-4">
							<div class="stats-small stats-small--1 card card-small">
							<div class="card-body p-0 d-flex">
								<div class="d-flex flex-column m-auto">
								<div class="stats-small__data text-center">
									<span class="stats-small__label text-uppercase">Posts</span>
									<h6 class="stats-small__value count my-3" data-from="0" data-to="<?php echo $news; ?>"><?php echo $news; ?></h6>
								</div>
								
								</div>
								<canvas height="120" class="blog-overview-stats-small-1"></canvas>
							</div>
							</div>
						</div>
						<div class="col-lg col-md-6 col-sm-6 mb-4">
							<div class="stats-small stats-small--1 card card-small">
							<div class="card-body p-0 d-flex">
								<div class="d-flex flex-column m-auto">
								<div class="stats-small__data text-center">
									<span class="stats-small__label text-uppercase">Account</span>
									<h6 class="stats-small__value count my-3" data-from="0" data-to="<?php echo $account;?>"><?php echo $account; ?></h6>
								</div>
								
								</div>
								<canvas height="120" class="blog-overview-stats-small-2"></canvas>
							</div>
							</div>
						</div>
						<div class="col-lg col-md-4 col-sm-6 mb-4">
							<div class="stats-small stats-small--1 card card-small">
								<div class="card-body p-0 d-flex">
									<div class="d-flex flex-column m-auto">
										<div class="stats-small__data text-center">
											<span class="stats-small__label text-uppercase">FAQ</span>
											<h6 class="stats-small__value count my-3" data-from="0" data-to="<?php echo $faq;?>"><?php echo $faq; ?></h6>
										</div>
									</div>
									<canvas height="120" class="blog-overview-stats-small-3"></canvas>
								</div>
							</div>
						</div>
					</div>
					<!-- End Small Stats Blocks -->					
				</div>
				<footer class="main-footer d-flex p-2 px-3 bg-white border-top">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
					</ul>
					<span class="copyright ml-auto my-auto mr-2">Copyright © 2019
						<a href="https://designrevision.com" rel="nofollow">GO STAND</a>
					</span>
				</footer>
			</main>
		</div>
	</div>
	</div>
	<?php $this->load->view('admin/include/js');?>
</body>

</html>
