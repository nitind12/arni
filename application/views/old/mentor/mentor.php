<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">

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
                                                <img src="<?php echo base_url('assets/img/admission.jpg'); ?>" class="img-responsive" alt=""> 
                                                <p>&nbsp;</p>
                                                <p>
                                                    At Amrapali your dream begins with a teacher who believes in you, who nurtures and leads you to the next plateau, sometimes poking you with a sharp stick called “truth". The academic and the professional Gurus guide young talent in reaching the pinnacle of glory and success. Besides classroom teaching, mentors guides, inspires, motivates and counsel students by their intellectual leadership and dedication by imparting theoretical and technical skills and corporate work ethics.
                                                </p>
                                                <p>
                                                    Around 200+ full-time faculty members and various visiting-faculty members, who constitute our intellectual capital are committed to the cause of creating future managers and technocrats with a difference. They focus on learner centric quality delivery using appropriate pedagogy. They strive to add new dimensions to existing course material by continuously incorporating changes that are inspired by developments in the corporate world.
                                                </p>
                                                <h3>Our Intellectual capital</h3>
                                                
                                                <div class="job-details" style="margin-top: 20px;">
                                                    <div class="panel-group" id="accordion1">
                                                        <?php $this->load->view('mentor/ftca');?>
                                                        <?php $this->load->view('mentor/fhm');?>
                                                        <?php $this->load->view('mentor/fcbm');?>
                                                        <?php $this->load->view('mentor/fps');?>
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
