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
                                        <h1><?php echo $title; ?></h1>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url('agi');?>">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li class="active"><?php echo $title; ?></li>
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
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content">
                                                <blockquote>                                                        
                                                    <p><img align='left' style='width:130px; padding-right:10px;' src="<?php echo base_url('assets/img/ceo.jpg'); ?>?ver=1.0" alt="Dr Sanjay Dhingra - CEO Amrapali">"Students don't care how much you know until they know how much you care"</p>
                                                </blockquote>
                                                <br>
                                                <h4>Dear Budding Professionals</h4>
                                                <p>Welcome to Amrapali Group of Institutes (AGI) Haldwani. We have been providing quality professional and technical education for the past <?php echo date('y')+1;?> years. More than 15,000 students have graduated from AGI since its inception in 1999.</p>

                                                <p>We at AGI aim to prepare the students to be successful in the dynamic workplace environment; we equip students with technical & professional knowledge, capabilities, flexibility, competencies and an understanding of the corporate world. The environment at AGI is amalgam of learning and application of corporate skills.</p>

                                                <p>The development and sharpening of skills and enhancement of knowledge base in our students is result of various extra-curricular and co-curricular activities embeded within the curriculum.</p>

                                                <p>At AGI students get an opportunity of exposure to corporate environment through industrial training and interaction with people of national and international stature during expert sessions and conferences.</p>
                                                <p>We expect high standards in all that we do at AGI. We encourage our students to aim high in their studies, to work hard and to be sensitive to the rights and needs of others. Therefore, if you desire to make a difference by becoming one with wisdom, values and passion, than step ahead to write your own success story. We believe in you to make a difference.</p>
                                                <p>As a prospective student, you are welcome to explore options that are available for you in our various academic programmes.</p>
                                                <p>Wishing you a great career ahead.</p>
                                                <h4>Dr. Sanjay Dhingra</h4>
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->

                                    <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                        <?php $this->load->view('templates/quick-links'); ?>                                            
                                        <?php $this->load->view('templates/alumni-img-scroll'); ?>
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->