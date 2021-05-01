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
                                        <h1><?php echo $title; ?></h1>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url('agi')?>">Home</a></li>
                                        <li><a href="#">Alumni</a></li>
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
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content">                                      
                                                <img class="img-responsive" style="padding-bottom: 30px;" src="<?PHP echo base_url() . 'assets/img/about.jpg'; ?>">
												    <p>Amrapali Group of Institutes has a strong alumni base with alumni who have been able to carve a niche’ for themselves in the careers. Alumni form an important part of our educational heritage.</p> 
												    <p>To strengthen the Alumni- Institute Relations, the Institute runs an <b>“Alumni Connect Programme”</b> in which the alumni can get connected to their Alma Mater by being a Resource Person within their area of expertise. Several Alumni have offered Job and Internship Opportunities to our young students.</p>
												    <p>Another activity conducted under the <b>“Alumni Connect Programme”</b> is the Alumni Lecture Series, in which the Alumni are invited for Guest Lectures. Through the Lecture Series our young students learn about the latest technological developments in the Industry.</p>
												    <hr>
												    <p>Dear Alumni, in case you are not registered with the Alumni Cell, kindly register yourselves by 
                                                    <a href="https://docs.google.com/forms/d/1Nmw2gvPpE0EepiXVb-arHE19n7yY6uj0uFtNPntP5YI/viewform" target="_blank" style="color: #0086B3"><i class="fa fa-arrow-circle-o-right"></i> click this form</a>. Please feel free to contact us with information, ideas, questions, or just to catch up on what’s happening.</p>
                                                <p style="font-size:15px;font-weight:bold"><a href="https://docs.google.com/forms/d/1Nmw2gvPpE0EepiXVb-arHE19n7yY6uj0uFtNPntP5YI/viewform" target="_blank"><i class="fa fa-arrow-circle-o-right"></i> Click here to Register <i class="fa fa-cog fa-spin"></i></a></p>
                                                <p>You can write to us at <span style="color: #0086B3">amrapalialumni@gmail.com.</span>     </p>												   
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
    