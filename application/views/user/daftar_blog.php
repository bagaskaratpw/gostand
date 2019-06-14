<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog | Corlate</title>
    <?php $this->load->view('user/include/stylesheet'); ?>
</head>
<!--/head-->

<body>
        <?php $this->load->view('user/include/header'); ?>

    </header>
    <!--/header-->


    <div class="page-title" style="background-image: url(<?php echo base_url('asset/');?>images/page-title.png)">
        <h1>Blog</h1>
    </div>
    
    <section id="blog">
        <div class="blog container">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach($news as $news){ ?>

                        <div class="blog-item">
                            <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url('asset/images/news/').$news['news_thumb_name'];?>" width="100%" alt="" /></a>
                            <div class="blog-content">
                                
                                <h2><a href="blog-item.html"><?php echo $news['news_title']; ?></a></h2>
                                <!-- <h3><?php echo $news['news_content']; ?></h3> -->
                                <h3>
                                <?php
                                    $num_char = 500;
                                    $text = $news['news_content'];
                                    echo substr($text, 0, $num_char) . '...';
                                ?>
                                </h3>
                                <a class="readmore" href="<?php echo base_url('user/blog');?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--/.blog-item-->

                    <?php } ?>
                </div>
                <!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--/.search-->
 
                    <div class="widget social_icon">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-github"></a>
                    </div>
                    
                </aside>
            </div>
            <!--/.row-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                    <!--/.pagination-->
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

    <?php $this->load->view('user/include/footer'); ?>
    <!--/#footer-->

    <?php $this->load->view('user/include/script'); ?>
</body>

</html>
