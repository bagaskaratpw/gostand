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
			<?php $this->load->view('admin/include/sidebar_news');?>
			<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
				<div class="main-navbar sticky-top bg-white">
					<!-- Main Navbar -->
					<nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
						<form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
							<div class="input-group input-group-seamless ml-3">
								<div class="input-group-prepend">
										
								</div>
						</form>
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
					<!-- page header -->
					<div class="header">
					<div class="page-header row no-gutters py-4">
                    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                        <h3 class="page-title">Add New Post</h3>
                    </div>
                    </div>
						<h2>
							<a href="<?php echo base_url('news/createNews');?>"  class="btn btn-primary">
								<i class="material-icons">add</i>
								<span>ADD POST</span>
							</a>
						</h2>
					</div>
					<!-- Add Banner Modal -->
					<!-- End Create Modal -->
					<!-- end page header -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card card-small mb-3">
								<div class="card-body">
									<div class="body">
										<table class="table table-bordered table-striped table-hover dataTable js-exportable">
											<thead>
												<tr>
                                                    <th width="10">No</th>
                                                    <th>Title</th>                                    
                                                    <th style="text-align:center;" width="100">Category</th>
                                                    <th style="text-align:center;" width="150">Publish</th>                                    
                                                    <th style="text-align:center;" width="150">Status</th>
                                                    <th style="text-align:center;" width="150">Action</th>
												</tr>
											</thead>
											<tbody>
		 										
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
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
					<span class="copyright ml-auto my-auto mr-2">Copyright © 2018
						<a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
					</span>
				</footer>
			</main>
		</div>
	</div>
	</div>
	<?php $this->load->view('admin/include/js');?>
</body>

</html>