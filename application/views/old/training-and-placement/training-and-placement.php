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
                                        <li><a href="<?php echo site_url('agi');?>">Home</a></li>
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
                                            <header class="entry-header">       
                                                <?php $this->load->view('templates/ticker-news'); ?>
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content">
                                                <img src="<?php echo base_url('assets/img/tnp.jpg'); ?>" class="img-responsive" alt=""> 
                                                <p>&nbsp;</p>
                                                <p>
                                                    The Training & Placement Cell, along with the Alumni of the Institute, aims at making available quality placement opportunities for students and at maintaining linkages with Human Resource Departments in the Industry and Research Organisations. The Cell is headed by a Training and Placement Director (TPD). The Training and Placement Cell is also responsible for maintaining contacts with Industries and for arranging placement visits to the Campus.
                                                </p>
                                                <p>
                                                    Currently, around 3400 students are pursuing their education in Management, Computer Science, Education, Engineering and Hotel Management & Catering Technology. Amrapali Group has carved a niche for itself, to become the premier private professional educational Institution in the Kumaun region of Uttarakhand.
                                                </p>
                                                <p>
                                                    <ul class="check-square" style="margin-left: 10px;">
                                                        <li>Ranked 9th amoungst the best private institute of Hotel Management in India by Drishti Outlook Survey 2018</li>
                                                        <li>Ranked amongst top 10 private institutes by Hansa Research Survey 2016 & 2017 published in The Week magazine. </li>
                                                        <li>Top Ranked Hotel Management Institute in State for last eight years GHRDC</li>
                                                        <li>Amongst Top Ranked Emerging Engineering College in India Higher Education Survey</li>
                                                        <li>Awarded Best Institute of Academic Excellence in Uttarakhand Worldwide Achiever Survey</li>
                                                        <li>Ranked amongst Top 10 Promising Business Management Institute in India CSR-GHRDC Survey 2013, 2014, 2015</li>
                                                        <li>Ranked amongst  Top 10 Hotel Management Institute of super excellence in India GHRDC 2015, 2016, 2017 & 2018. </li>
                                                        <li>Education Excellence Award by Tv100 2017-18</li>
                                                        <li>Ranked amongst Top 30 Hotel Management Institute in India THE WEEK</li>
                                                    </ul>
                                                </p>
                                                <style>
                                                    .titlesize{
                                                        font-weight: bold !important; font-size: 15px;;
                                                    }
                                                </style>
                                                <div class="job-details" style="margin-top: 0px;">
                                                    <div class="panel-group" id="accordion1">
                                                        <?php $count_ = 1; ?>
                                                        <?php for($loop1=date('Y'); $loop1>=2014; $loop1--){ ?>
                                                            <div style="clear: both; padding: 20px;"></div>
                                                            <h3>PLACEMENT <?PHP echo $loop1; ?> </h3>
                                                                <?php $dept_ = 'FHM'; ?>
                                                                <?php include('fhm.php'); ?>
                                                                
                                                            <?php if($loop1 >= 2020){?>
                                                                <?php $dept_ = 'FTCA'; ?>
                                                                <?php include('ftca.php'); ?>
                                                            <?php } else { ?>
                                                                <?php $dept_ = 'FCSA'; ?>
                                                                <?php include('fcsa.php'); ?>
                                                                
                                                                <?php $dept_ = 'FTS'; ?>
                                                                <?php include('fts.php'); ?>
                                                            <?php }?>
                                                                
                                                                <?php $dept_ = 'FCBM'; ?>
                                                                <?php include('fcbm.php'); ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
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