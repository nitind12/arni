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
                                            <li><a href="#">Academics</a></li>
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
                                                <div class="entry-content" style="overflow: hidden">
                                                    <img src="<?php echo base_url('assets/img/hm.jpg'); ?>" class="img-responsive " alt="">                            
                                                    <p>&nbsp;</p>
                                                    <h3>Courses Offered</h3>
                                                    <p>
                                                        <div class="col-sm-12">
                                                            <ul class="check-square">
                                                                <li>Bachelor of Hotel Management &amp; Catering Technology [<b>BHMCT</b>]</li>
                                                                <li>Bachelor of Hospitality Management [<b>BHM</b>]</li>
                                                                <li>Diploma in Hotel Management &AMP; Catering Technology [<b>DHMCT</b>]</li>
                                                                <li>Diploma in Hotel Administration [<b>DHA</b>]</li>
                                                            </ul>
                                                        </div>
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Why choose Hotel Management at Amrapali Institute?</h3>
                                                    <p>
                                                        The World Travel Organization predicts that it will triple in size by the year 2020, becoming one of the largest industries in the world. This growth will continue in same way and industry will become largest employment provider by 2030.
                                                    </p>
                                                    <p>
                                                        Our curriculum combines theory with authentic hands-on learning experience and students have numerous opportunities to interact with industry professionals. Students also get access to hands-on real-life training programme incorporated in their day to day activities to make them industry fit.
                                                    </p>
                                                    <p>The skills learned at Faculty of Hospitality Management at AGI are applicable not just in Hospitality Industry, but to the entire Service Sector and Tourism-related businesses. A career in the Hospitality Industry includes opportunities in many different areas apart from hotels
                                                    </p>
                                                    <p>The various courses at FHM provides students exposure to basic practical skills that are expected of any Chef, F&B Service Expert, Room Division Manager or any other hospitality professional along with the skill orientation through various training sessions by industry experts to have latests kills. The learning environment encourages students not only to invest their minds in Classrooms and Practical Labs but also showcase their talent in extracurricular and co-curricular activities along with wide range exposure through participation in National Level competitions
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