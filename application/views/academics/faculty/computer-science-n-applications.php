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
                                        <li><a href="#">Academics</a></li>
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
                                            <div class="entry-content" style="overflow: hidden">                                                
                                                <img src="<?php echo base_url('assets/img/csa.jpg'); ?>" class="img-responsive " alt="">                                                
                                                <blockquote>
                                                    <p>

                                                        "Education is the manifestation of the perfection already in man."  - Swami Vivekanada
                                                    </p>
                                                </blockquote>

                                                <h3>Courses Offered</h3>
                                                <p>
                                                <div class="col-sm-12">
                                                    <ul class="check-square">
                                                        <li>Masters of Computer Applications [<b>MCA</b>]</li>
                                                        <li>Masters of Computer Applications Lateral Entry [<b>MCA - Direct IInd year</b>]</li>
                                                        <li>Bachelor of Computer Applications [<b>BCA</b>]</li>
                                                    </ul>
                                                </div>
                                                </p>
                                                <p style="clear: both">&nbsp;</p>
                                                <p>
                                                    <b>At AGI's Faculty of Computer Science & Applications (FCSA) we differentiate our budding graduates through:</b>
                                                    <div class="col-sm-12">
                                                        <ul class="check-circle">
                                                            <li>Dedicated sessions for international certification
from Microsoft, Red Hat, Oracle, CISCO, IBM etc</li>
                                                            <li>Practical training and projects to cover Database administration, System maintenance, Java, C# & .NET framework, Android & IOS application, Security analysis etc.</li>
                                                            <li>Exhaustive pre placement and soft skill training by
trained experts for proper job placement.</li>
                                                        </ul>
                                                    </div>
                                                </p>
                                                <p>&nbsp;</p>
                                                <p>
                                                    We are living in the era of Information Technology. All most all parts of the human life is heavily dependent on Computer Science & Application e.g. Administration, Defense , Public Safety, Accounting, Bank ing, Spac e Te chnology, Education, Entertainment, Manufacturing Industry, Medical Science etc. 
                                                </p>
                                                <p>
                                                    A computer application professional have a lots of options to work in various Government & Public Sector Organizations as Information Technology Officer, Software Programmer, System Administrator, Security Analyst. Apart from Government sector, private sector also offers all the above roles and position to Computer Application professionals with lucrative salaries. 
                                                </p>
                                                
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->

                                    <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                                                                    
                                        <div class="sidebar-wrapper" align="left">
                                            <h2 class="wow fadeInDown" align="center">Certifications in</h2>
                                            <ul class="check-circle" style="padding-left: .6em;">
                                                <li>Advanced Office Automation</li>
                                                <li>Responsive Web Application Development</li>
                                                <li>Mobile Application Development (Android & IOS)</li>
                                                <li>Graphics & Animation</li>
                                            </ul>
                                        </div>
                                        <p>&nbsp;</p><p>&nbsp;</p>
                                        <?php $this->load->view('templates/quick-links'); ?>                                        
                                        <?php $this->load->view('templates/alumni-img-scroll'); ?>
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->