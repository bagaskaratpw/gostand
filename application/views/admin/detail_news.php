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
			<?php $this->load->view('admin/include/sidebar_account');?>
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
				<section class="content">
         <div class="container-fluid">
            <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                     <div class="header">
                        <h2>
                           <a href="<?php echo base_url('news'); ?>" class="btn btn-danger"><i class="material-icons">keyboard_return</i>
                           <span>BACK</span>
                           </a>
                        </h2>
                     </div>
                     <div class="body">
                        <div class="card">
                           <div class="header">
                              <h4>DETAIL NEWS</h4>
                           </div>
                           <div class="body">
                              <div class="card">
                                 <div class="header">
                                    <h3><?php echo $news['news_title']; ?></h3>
                                 </div>
                                 <div class="body">
                                    <?php echo $news['news_content']; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- #END# -->
         </div>
      </section>
    
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