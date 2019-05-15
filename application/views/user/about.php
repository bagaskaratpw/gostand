<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tentang | GO STAND</title>
    <?php $this->load->view('user/include/stylesheet'); ?>
</head>
<!--/head-->
<body>
        <?php $this->load->view('user/include/header'); ?>
        <!--/nav-->
    </header>
    <!--/header-->
    
    <div class="page-title" style="background-image: url(<?php echo base_url('asset/');?>images/page-title.png)">
        <h1>TENTANG KAMI</h1>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="<?php echo base_url('asset/');?>images/MODEL1.png" alt="" >
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Siapakah kami ?</h2>
                        <p>Kami adalah aplikasi yang digunakan untuk membantu penjual stand kantin dan siswa agar lebih cepat dalam melakukan pemesanan dan mendata pesanan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="team-area">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Anggota Kami</h2>
                <p class="lead">Kami bekerjasama untuk memberikan aplikasi terbaik kepada konsumen<br> dan kami konsisten pada kenyamanan dan keamanan data pelanggan</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="<?php echo base_url('asset/');?>images/team1.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Jeffery Poole</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="<?php echo base_url('asset/');?>images/team2.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Isabelle Dean</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="<?php echo base_url('asset/');?>images/team3.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mike Kennedy</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="<?php echo base_url('asset/');?>images/team4.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Edwin Gross</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="<?php echo base_url('asset/');?>images/team5.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mable Schwartz</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="<?php echo base_url('asset/');?>images/team6.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Adele Washington</h4>
                            <span class="desg">UI/UX Designer</span>
                            <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <?php $this->load->view('user/include/footer'); ?>


    <?php $this->load->view('user/include/script'); ?>
</body>

</html>

