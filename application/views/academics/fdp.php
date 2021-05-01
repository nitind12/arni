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
                                                    <img src="<?php echo base_url('assets/img/fdp.jpg'); ?>" class="img-responsive " alt="">   
                                                    <p align="justify">                                                                        
                                                        <blockquote>
                                                            "To cope with a challenging world, any entity must develop the capacity of shifting and changing - of developing new skills and attitudes; in short the capacity of learning."
                                                            <span style="color:#993300">A De Guess: 'The Living Company'</span>
                                                        </blockquote>
                                                    </p>                                                   
                                                    <p>
                                                        Truth and facts cannot be taught; they need to be learnt. Faculty members, who constitute Amrapali's intellectual power, are the primary source of information, guidance and motivation for the students. They regularly attend Faculty Development Programmes, Workshops, Seminars etc. to keep themselves abreast of new tools, techniques and methodologies of teaching.
                                                    </p>
                                                    <p>Amrapali Institute encourages and organises motivation camps, workshops and Facuty Development Programmes for faculty and staff members. In recent past, several of them have attended workshops and various courses conducted by UGC, AICTE, UCOST, DST, BHU, Kumaun University and other reputed organisations such as IIM-Kozhikode, IISc-Bangalore, IBM-Bangalore, IIM-Ahmedabad, Lucknow University, Pantnagar University, MDI-Gurgaon, IIT-Roorkee, IIT-Delhi, GIS-Allahabad etc.
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