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
                                                <header class="entry-header">       
                                                    <?php $this->load->view('templates/ticker-news');?>                                         
                                                                                                 
                                                    <h2 class="entry-title"><a href="#"><?php echo $title;?></a></h2>
                                                </header><!-- /.entry-header -->                                                

                                                <div class="entry-content">
                                                    <img src="<?php echo base_url('assets/img/all-pages.png'); ?>" class="img-responsive" alt=""> 
                                                    <p style="margin-top: 10px;">
                                                        Objectives are not fate; they are directions. They are not commands; they are commitments. They do not determine the future; they are means to mobilize the resources and energies of the business for making the future.
                                                    </p>
                                                    <p>
                                                        The pace of change is ever accelerating, and with change comes the challenge to adapt and improve. For over 17 years the Amrapali Group of Institutes has been successful keeping up its pace with the changing professional education. The Group aims at providing high-quality professional education judiciously supplemented with competent learning and advanced training.
                                                    </p>

                                                    <p>
                                                        Pursuit of excellence is part of our culture. Our experience in the field of professional education gives us the capability to conceive and implement changes. Through routine modifications in curricula, we not only strengthen budding professionals with sound knowledge but also nurture them for entering the professional world successfully. We aim at developing and enriching students so that they develop multi-dimensional, competent personalities, consisting of important attributes such as:
                                                        <p style="margin-left: 20px;">
                                                            &raquo; Pursuit of Excellence <br>
                                                            &raquo; Cultivation of Hunger for Knowledge, Technical Skills, Problem Analysis, Research etc <br>
                                                            &raquo; Commitment to Teamwork
                                                        </p>
                                                    </p>

                                                    <p>In AGI we endeavour to groom our students in such a way that wherever they go they make a distinctive difference and contribute to bring transformation in the system through holistic development. All our students get an opportunity of exposure to corporate environment by spending time in different Organizations through training, interactions with people of national and international stature for massive change of so-called 'mindset'. Thus, as a student you certainly can expect to have an enriching and life turning experience that should propel you to take advantage of the new opportunities in life.</p>

                                                    <p>
                                                        As the world transits into a globalising 'Knowledge Economy', constituent institutes of the Group have been marching ahead with tireless efforts. We work with the objective of providing students a clear understanding of fundamentals so as to mould them into capable professionals possessing creative mind-sets, balanced vision and passion for excellence clubbed with competent practical skills. The Institutes within the Group transform students into better citizens by inculcating values and ethics that promote well-being of the society.
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