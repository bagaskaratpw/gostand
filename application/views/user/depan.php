<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | GO STAND</title>
    <?php $this->load->view('user/include/stylesheet'); ?>
    
</head>
<!--/head-->

<body class="homepage">
    
    <?php $this->load->view('user/include/header'); ?>      
        <!--/nav-->
    </header>
   
    <!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
        <!--    <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(<?php echo base_url('asset/');?>images/slider/food2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">GO STAND</h1>
                                    <div class="animation animated-item-2">
                                        Belanja Mudah, Tanpa Ribet, Tinggal KLIK Saja !
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

            <!--    <div class="item" style="background-image: url(<?php echo base_url('asset/');?>images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Help Finding Information Online</h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
    <!--    <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a> -->
    </section>
    <!--/#main-slider-->

    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Kenapa GOSTAND?</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h2>Cepat</h2>
                            <p>Pesan dulu makanan dan minumanmu, nikmati kemudian !</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-4 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <h2>Pemesanan Mudah</h2>
                            <p>Tinggal pesan secara online !</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-4 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <h2>Budget Siswa</h2>
                            <p>Promo menarik menanti Anda !</p>
                        </div>
                    </div>
                     <!--/.col-md-3-->
                <!--    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-arrows"></i>
                            </div>
                            <h2>Editable</h2>
                            <p>A Pocket PC is a handheld computer, which features many</p>
                        </div>
                    </div> -->
                    <!--/.col-md-3--> 
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    <!-- <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url('asset/');?>images/portfolio/item-1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?php echo base_url('asset/');?>images/portfolio/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url('asset/');?>images/portfolio/item-2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?php echo base_url('asset/');?>images/portfolio/item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url('asset/');?>images/portfolio/item-3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?php echo base_url('asset/');?>images/portfolio/item-3.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url('asset/');?>images/portfolio/item-4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?php echo base_url('asset/');?>images/portfolio/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url('asset/');?>images/portfolio/item-5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?php echo base_url('asset/');?>images/portfolio/item-5.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url('asset/');?>images/portfolio/item-6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?php echo base_url('asset/');?>images/portfolio/item-6.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--/.row
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
        </div> -->
        <!--/.container-->
    <!-- </section> -->
    <!--/#recent-works-->

<!--    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url('asset/');?>images/services/ux.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">UI/UX Design</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url('asset/');?>images/services/web.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Design</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url('asset/');?>images/services/motion.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Motion Graphics</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url('asset/');?>images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Mobile UI/UX</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url('asset/');?>images/services/web-app.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Applications</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url('asset/');?>images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

            </div> -->
            <!--/.row-->
    <!--    </div> -->
        <!--/.container-->
<!--    </section>  -->
    <!--/#services-->
   
    
    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>DAFTARKAN KANTINMU KE GOSTAND</h2>
                
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-slide">
                    <div class="icon">
                                <i class="fa fa-percent"></i>
                    </div>
                    <div class="content">
                        <h4><b> Tanpa Biaya</b></h4>
                        <p>Tinggal daftar saja, tanpa dipungut biaya</p>
                    </div>
                </div>
                <div class="single-slide">
                <div class="icon">
                                <i class="fa fa-rocket"></i>
                    </div>
                    <div class="content">
                        <h4><b> Mudah</b></h4>
                        <p>Dapat mengakses dan mandaftar lewat handphone</p>
                    </div>
                </div>
                <div class="single-slide">
                <div class="icon">
                                <i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="content">
                        <h4><b> Customer Management</b></h4>
                        <p>Dapat tahu sudah berapa banyak</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="partners">
                <ul>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php echo base_url('asset/');?>images/partners/brand-1.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?php echo base_url('asset/');?>images/partners/brand-2.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?php echo base_url('asset/');?>images/partners/brand-3.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?php echo base_url('asset/');?>images/partners/brand-4.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?php echo base_url('asset/');?>images/partners/brand-5.png"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#partner-->

    
        <?php $this->load->view('user/include/footer'); ?>
    
    
    <!--/#footer-->

    <?php $this->load->view('user/include/script'); ?>
</body>

</html>