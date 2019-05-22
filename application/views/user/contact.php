<!DOCTYPE html>
<html lang="en">

<head>
    <title>FAQ | GO STAND</title>
    <?php $this->load->view('user/include/stylesheet'); ?>
</head>
<!--/head-->

<body>
       <?php $this->load->view('user/include/header'); ?>
    


    <div class="page-title" style="background-image: url(<?php echo base_url('asset/');?>images/page-title.png)">
        <h1>FAQ</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Tanya Jawab</h2>
                <p>Pertanyaan seputar GO-STAND</p>
            </div> 
            <div class="container-fluid ">
    <div class="panel-group" id="faqAccordion">
        <?php
        $no=1; 
        foreach ($data as $faq) {
        ?>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#answer<?php echo $no; ?>">
                 <h4 class="panel-title">
                    <a href="#" class="ing"><?php echo $faq['quetion'];?></a>
              </h4>
            </div>
            <div id="answer<?php echo $no; ?>" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                    <p><?php echo $faq['answer'];?></p>
                </div>
            </div>
        </div>
        <?php $no++; } ?>
    </div>
    <!--/panel-group-->
</div>
        </div><!--/.container-->
    </section><!--/#contact-page-->


    <?php $this->load->view('user/include/footer'); ?>
    <!--/#footer-->

    <?php $this->load->view('user/include/script'); ?>
</body>

</html>
