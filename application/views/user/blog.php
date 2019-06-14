<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog | GO STAND</title>
    <?php $this->load->view('user/include/stylesheet'); ?>
</head>
<!--/head-->

<body>
    
        <?php $this->load->view('user/include/header'); ?>

    </header>
    <!--/header-->

    <div class="page-title" style="background-image: url(<?php echo base_url('asset/');?>images/page-title.png)">
        <h1><?php echo $news['news_title']; ?></h1>
    </div>


    <section id="blog">

        <div class="blog container">
            <div class="row">
                <div class="col-md-12">

                    <div class="blog-item">
                        <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url('asset/images/news/').$news['news_thumb_name'];?>" width="100%" alt="" /></a>
                        <div class="blog-content">
                            <h2> <?php echo $news['news_title']; ?> </h2>
                            <div class="post-meta">
                                <p><i class="fa fa-clock-o"></i> <?php echo $news['news_date']; ?></p>
                            </div>
                            <h3><?php echo $news['news_content']; ?></h3>
                            <br>
                            <img src="images/blog-inner.png" alt="">
                            <br>
                            <br>
                            
                            

                </div>
                <!--/.col-md-8-->

  
            </div>
            <!--/.row-->
        </div>
    </section>
    <!--/#blog-->

    <?php $this->load->view('user/include/footer') ;?>
    <!--/#footer-->

    <?php $this->load->view('user/include/script'); ?>
</body>

</html>
