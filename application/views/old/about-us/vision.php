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
                                                    <img src="<?php echo base_url('assets/img/all-pages.jpg'); ?>" class="img-responsive" alt="">
                                                    <p>&nbsp;</p>
                                                    <p>
                                                       The Amrapali Group of Institutes has embarked a successful journey since its inception in 1999. Having traversed for more than a decade-and-a-half the institute is now a leader in the integration of teaching and learning, advancement of the knowledge base through research and scholarship, and leadership in service and outreach. At its foundation lies a confirmed conviction of developing professionals who will provide leadership and exemplary services to improve the lives of individuals in a changing, challenging and competitive global society.
                                                    </p>
                                                    <p>
                                                        Today, the vision that founding members of the group had conceptualized appears clear and close with few more challenges for which the entire team of Amrapali Group of Institutes is geared up. For fulfilling diverse expectations of wide range of stakeholders including students, parents and society at large the institute's efforts have been visible through: 

                                                        <ul class="check-square">
                                                            <li> Improved rankings of our institutes at State and National Level
                                                            <li> Increasing number of student intake every year
                                                            <li> Recognition and acceptance of our student's in the corporate world
                                                            <li> Multi Dimensional Collaborations with Industry 
                                                            <li> Enriched Learning Environment 
                                                            <li> Successful Alumni
                                                        </ul>
                                                    </p>

                                                    <p>
                                                        The next phase of our vision is to make Amrapali Group the premier provider of higher professional education in the state of Uttarakhand. Our aim is to make ourselves the preferred choice for professional education amongst students of the state and outside. We are moving ahead with commitment and results are visible, through an array of indicators. The dream destination is hoped to be arrived at by 2025, when we should actually be able to taste the fruit of our teamwork, by making the Amrapali Group of Institutes an internationally renowned private professional-educational brand. In this direction we are continuously striving for: 
                                                        
                                                        <ul class="check-square">
                                                            <li>Strong commitment and focus on Campus to Career Pathways
                                                            <li>Increasing Student's Support 
                                                            <li>Increasing relevance of the Courses 
                                                            <li>Strengthening Operations 
                                                            <li>Recognizing Accomplishments 
                                                            <li>Promoting Innovation and Creativity
                                                        </ul>
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