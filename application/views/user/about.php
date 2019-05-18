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
                            <img src="<?php echo base_url('asset/');?>images/bugi.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Bugi Setiawan</h4>
                            <span class="desg">Backend developer</span>
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
                            <img src="<?php echo base_url('asset/');?>images/ino.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Januario Tristano</h4>
                            <span class="desg">Mobile Developer</span>
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
                            <img src="<?php echo base_url('asset/');?>images/bagas.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Bagaskara Teguh</h4>
                            <span class="desg">Backend Developer</span>
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
                            <img src="<?php echo base_url('asset/');?>images/debby.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Natalia Debby</h4>
                            <span class="desg">Frontend Developer</span>
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
                            <img src="<?php echo base_url('asset/');?>images/siki.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Rizkia Herliani</h4>
                            <span class="desg">Frontend</span>
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
                            <img src="<?php echo base_url('asset/');?>images/yefta.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Yefta Juntinus</h4>
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

