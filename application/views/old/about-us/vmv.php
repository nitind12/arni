    <body>
        <div id="st-container" class="st-container">
            <div class="st-pusher">
                <div class="st-content">
                    <div class="st-content-inner">
                        <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <?php $this->load->view('templates/menu'); ?>
                        </header>

                        <section class="page-header-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="page-header">
                                            <h1><?php echo $title;?></h1>
                                        </div>
                                        <ol class="breadcrumb">
                                            <li><a href="<?php echo site_url('agi');?>">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li class="active"><?php echo $title;?></li>
                                        </ol>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </section>

                        <style>
                            .content{
                                font-size: 25px;
                                font-style: italic;
                                color: #090909;
                                font-family: Garamond;
                            }
                            h2, li{
                                font-family: Garamond;
                            }
                            li{
                                font-size: 16px;
                                color: #090909;
                                text-align: justify;
                            }
                            
                        </style>
                        <div class="container">
                            <div class="content-wrapper">
                                <div class="inner-content">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-9 col-sm-8">
                                            <article class="blog-post-wrapper single-article">
                                                <header class="entry-header">       
                                                    <?php $this->load->view('templates/ticker-news');?>                                         
                                                                                                 
                                                    <h2 class="entry-title"><a href="#"><?php echo $title;?></a></h2>
                                                </header><!-- /.entry-header -->                                                

                                                <div class="entry-content" style="color: #000090">
                                                    <img src="<?php echo base_url('assets/img/all-pages.jpg'); ?>" class="img-responsive" alt=""> 
                                                    <p>&nbsp;</p>
                                                    <h2 style="color: #0000AA">Vision</h2>
                                                    <p class="content">
                                                        To be a Leading Professional Institution valuing Student Success.
                                                    </p>
                                                    <p>&nbsp;</p>
                                                    <h2 style="color: #0000AA">Mission</h2>
                                                    <p class="content">
                                                        Creating learner centric environment where every student can  achieve their full potential.
                                                    </p>
                                                    <p>&nbsp;</p>
                                                    <h2 style="color: #0000AA">Our Values</h2>
                                                    <p class="content">
                                                        <div style="background: #fefefe; width: 100%; padding: 5px">
                                                            <ol style="list-style: none;">
                                                                <li><b>Focus</b>: We identify and align individual goals and strengthen focus in all our endeavours and approaches of academic discourse. We respect the individuality of learners.</li>
                                                                <li><b>Commitment</b>: It's important to be focussed, but it's even more important to be committed. Things won't always go the way we want them to but if we stay committed, we will stay focussed.</li>
                                                                <li><b>Excellence</b>: Maintain a high standard of integrity and performance leading to the achievement of academic and professional goals and success of the students at AGI.</li>
                                                                <li><b>Ethical</b>: Transparency and an ethic of fairness is the core of AGI.</li>
                                                                <li><b>Creative Expression</b>: We believe in harnessing a Culture of inquiry and evidence-based decision making in order to engage creative mind-set of students and other stake holders.</li>
                                                                <li><b>Collaboration</b>: Collaboration is a driving force at AGI to strive ahead towards student excellence.</li>
                                                            </ol>
                                                        </div>
                                                    </p>
                                                </div><!-- /.entry-content -->
                                            </article>                                            
                                        </div><!-- /.col-md-9 -->

                                        <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                            <?php $this->load->view('templates/quick-links');?>                                            
                                            <?php $this->load->view('templates/alumni-img-scroll');?>
                                        </div><!-- /.col-md-3 -->
                                    </div><!-- /.row -->
                                </div><!-- /.inner-content -->
                            </div><!-- /.content-wrapper -->
                        </div><!-- /.container -->