    <body>
        <div id="st-container" class="st-container">
            <div class="st-pusher">
                <div class="st-content">
                    <div class="st-content-inner">
                        <header>
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


                        <div class="container">
                            <div class="content-wrapper">
                                <div class="inner-content">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-9 col-sm-8">
                                            <article class="blog-post-wrapper single-article">
                                                    <?php $this->load->view('templates/ticker-news');?>                                         
                                                    
                                                <header class="entry-header">                                                    
                                                    <h2 class="entry-title"><a href="#"><?php echo $title;?></a></h2>
                                                </header><!-- /.entry-header -->                                                

                                                <div class="entry-content">
                                                    <p>
                                                        <div class="col-sm-3 col-xs-6 col-lg-3">
                                                            <img hspace="10" vspace="10" src="<?PHP echo base_url('assets/img/cd_1.jpg');?>?ver=1.0" style="width: 120px" class="img-responsive">
                                                        </div>
                                                        
                                                        <div class="col-sm-3 col-xs-6 col-lg-3">
                                                            <img hspace="10" vspace="10" src="<?PHP echo base_url('assets/img/nd_1.jpg');?>?ver=1.0" style="width: 120px" class="img-responsive">
                                                        </div>
                                                        <div class="col-sm-3 col-xs-6 col-lg-3">
                                                            <img hspace="10" vspace="10" src="<?PHP echo base_url('assets/img/ceo.jpg');?>?ver=1.0" style="width: 120px" class="img-responsive">
                                                        </div>
                                                        <div class="col-sm-3 col-xs-6 col-lg-3">
                                                            <img hspace="10" vspace="10" src="<?PHP echo base_url('assets/img/mg_3.jpg');?>?ver=1.0" style="width: 120px" class="img-responsive">
                                                        </div>
                                                        <p>&nbsp;</p>
                                                        <h3>Mission</h3>
                                                        <p>Creating learner centric environment where every student can achieve their full potential</p>
                                                        <p>&nbsp;</p>
                                                        <h3>Vision</h3>
                                                        <p>To be a Leading Professional Institution valuing Student Success</p>
                                                        <p>&nbsp;</p>
                                                        <h3>Our Values</h3>
                                                        <p><b>Focus:</b> We identify and align individual goals and strengthen focus in all our endeavours and approaches of academic discourse. We respect the individuality of learners.</p><p><b>Commitment:</b> It's important to be focussed, but it's even more important to be committed. Things won't always go the way we want them to but if we stay committed, we will stay focussed.</p>
                                                        <p><b>Excellence:</b> Maintain a high standard of integrity and performance leading to the achievement of academic and professional goals and success of the students at AGI.</p>
                                                        <p><b>Ethical: </b>Transparency and an ethic of fairness is the core of AGI. Creative Expression: We believe in harnessing a Culture of inquiry and evidence-based decision making in order to engage creative mind-set of students and other stake holders. </p>
                                                        <p><b>Collaboration:</b> Collaboration is a driving force at AGI
to strive ahead towards student excellence. </p>                                                    
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