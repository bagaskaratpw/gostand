<!DOCTYPE html>
<html lang="en">

<head>
    <title>FAQ | GO STAND</title>
    <?php $this->load->view('user/include/stylesheet'); ?>
</head>
<!--/head-->

<body>
       <?php $this->load->view('user/include/header'); ?>
    </header><!--/header-->


    <div class="page-title" style="background-image: url(<?php echo base_url('asset/');?>images/page-title.png)">
        <h1>FAQ</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Tanya Jawab</h2>
                <p>Pertanyaan seputar GO-STAND</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nama *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="number" class="form-control">
                        </div>        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Pesan *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Kirim Pesan</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


    <?php $this->load->view('user/include/footer'); ?>
    <!--/#footer-->

    <?php $this->load->view('user/include/script'); ?>
</body>

</html>
