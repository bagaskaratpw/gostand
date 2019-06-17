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
                        <span class="text-uppercase page-subtitle">Blog Posts</span>
                        <h3 class="page-title">Add New Post</h3>
                    </div>
                    </div>
                    <!-- End Page Header -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Add New Post Form -->
                            <div class="card card-small mb-3">
                                <div class="card-body">
								<?php echo form_open_multipart('news/creatingNews', array('class' => 'form-horizontal', 'autocomplete' => 'off')); ?>
									<div class="form-group">
										<div class="form-line">
											<?php 
												$data = array('type' => 'text', 'class' => 'form-control','placeholder' => 'News Title', 'name' => 'title', 'id' => 'title', 'value' => set_value('title'), 'required' => 'true', 'autofocus' => 'true'); 
												echo form_input($data);                                             
											?>
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="file" name="thumbNews" id="thumbNews" onchange="readURL(this);" accept="image/*" >
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<textarea name="content" class="ckeditor" id="ckedtor"></textarea>
										</div>
									</div>
                                    <?php echo form_submit('submit', 'CREATE', array('class' => 'btn btn-success m-t-10 waves-effect')); ?>
                                </div>
                            </div>
                            <!-- / Add New Post Form -->
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
					<span class="copyright ml-auto my-auto mr-2">Copyright © 2019
						<a href="https://designrevision.com" rel="nofollow">GO STAND</a>
					</span>
				</footer>
			</main>
		</div>
	</div>
    </div>
    
	<?php $this->load->view('admin/include/js');?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
      <script>
       $('#summernote').summernote({   
        height: 300
      });
      </script>
      <script>
         function readURL(input) {
            var sizeThumb = $('#thumbNews')[0].files[0].size;
            if(sizeThumb > 10485760)
            {
               swal({
                  title: "Warning",
                  text: "Sorry, maximal file size is 10mb",              
                  showConfirmButton: true,
                  type: "warning"
                  });
            }            
         }
      </script>   
</body>

</html>
