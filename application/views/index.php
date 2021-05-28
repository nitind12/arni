<style>
.member-info a{
    color: #0c5981;
    font-weight: bold;
}
.member-info a:hover{
    color: #ffa200;
}
ul.check-circle li {
    display: list-item;
    position: relative;
    line-height: 28px;
    padding-left: 25px;
    color:#8b4b05;
}
hr{
    border:1px solid #aaaaaa;
}
</style>


<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>
                    <!-- AGI Video-->
                    <header style="overflow: hidden; position: relative; height: auto">
                            <div class="video-test"style="position: sticky; overflow: hidden; min-height: 25%; height: 100%">
                              <video preload="auto" style="width:100%; height:auto;" autoplay="autoplay" loop="loop" muted="">
                                <source src="<?php echo base_url('assets/arniVideo1.mp4');?>" type="video/mp4">
                                 <source src="/images/video/arniVideo.ogg" type="video/ogg">
                              </video>
                              <img src="<?php echo base_url(). "assets/arniImage/year12.png"?>" class="hidden-xs" style="top: 140px; right:50px; z-index: 0; position: absolute;max-width:200px;"/>
                            </div>
                            <div style="position: absolute; z-index: 999999"></div>
                        </header>
                        <!--AGI Video -->
                    <!-- #x-corp-carousel-->


                    <div class="container">
                        <div class="content-wrapper">
                            <section class="intro-wrapper"> 
                            <div class="row"> 
                                    <div class="col-xs-12 hidden-md hidden-lg">
                                    <img src="<?php echo base_url(). "assets/arniImage/year12_small.png"?>" class="hidden-lg hidden-md" style="max-height:100px;"/>
                                    </div>
                                    <div class="col-lg-7 col-md-8"> 
                                        <h1 class="wow fadeInDown">Leading Indian University of higher education.</h1>
                                        <h3 class="wow fadeInDown">Bringing Ambition to Life</h3>
                                        <p class="wow fadeInDown">At Arni, we don't just teach theory. Our experiential learning and interdisciplinary orientation is our strength. Learn with us & live your own ideas professionally.</p>

                                        <div class="typography-page-tab" role="tabpanel" style="height: auto; min-height: 350px">
                                            <!-- Nav tabs -->
                                            <style>
                                                .links-border{
                                                    float: left; 
                                                    padding: 5px 10px;  
                                                    width:95%;
                                                    margin-left: 10px;
                                                    background: #fcbb3c;
                                                    /*background-image: linear-gradient(to right, #fcbb3c, transparent);*/
                                                    color: #ffffff;
                                                    font-weight: bold
                                                }
                                                .a_{
                                                    color: #ffffff;
                                                }
                                                .scholarship-tab{
                                                    background: #fcbb3c ;
                                                    float: left; 
                                                    padding: 5px 10px;  
                                                    width:95%;
                                                    margin-left: 10px;
                                                    color: #ffffff;
                                                    font-weight: bold
                                                }
                                                .notifications-tab{
                                                    background: transparent ;
                                                    float: left; 
                                                    padding: 5px 10px;  
                                                    width:95%;
                                                    margin-left: 10px;
                                                    color: #000000;
                                                    font-weight: bold
                                                }
                                                .new-notification{
                                                    font-family: verdana;
                                                    font-size: 10px;
                                                    font-weight: bold;
                                                    color: #ff0;
                                                    background: #f00;
                                                    border-radius: 10px;
                                                    padding: 1px 4px;
                                                }
                                            </style>
                                            <ul class="nav nav-tabs" role="tablist" style="border-bottom: none;">
                                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Admission 2021</a></li>
                                                <li role="presentation"><a href="#Section2" aria-controls="home" role="tab" data-toggle="tab">Scholarships</a></li> 
                                                <li role="presentation"><a href="#Section3" aria-controls="home" role="tab" data-toggle="tab">Notifications<?php echo $notice_today!=0?" <span class='new-notification'>".$notice_today."</span>":"";?></a></li> 
                                            </ul>
                                            <!-- Tab panes -->
                                            <style>
                                                .attach{text-decoration: none; color:#fff; background: #cc3300; padding: 2px; border-radius: 3px}
                                            </style>
                                            <div class="tab-content tabs" style="height: auto">
                                                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                                    <?php $this->load->view('templates/admissions'); ?>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade in" id="Section2">
                                                    <?php $this->load->view('templates/scholarships'); ?>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade in" id="Section3">
                                                    <?php $this->load->view('templates/notifications'); ?>
                                                </div>
                                            </div>               
                                        </div>
                                    </div>
                                    <div style="background: <?php echo base_url('');?>" class="col-sm-5">
                                        <!--img src="<?php //echo base_url('assets/img/covid-19.jpg');?>?version=1.1"-->
                                    </div>
                                </div><!-- /.row -->
                            </section><!-- /.intro-wrapper -->

                            <section class="advantages-wrapper">
                                <center>
                                    <h2 class="section-title-dark wow fadeInDown">Arni Advantage</h2>
                                </center>
                                <div class="css-tab text-center">
                                    <div class="row">
                                        <?php $this->load->view('templates/advantage'); ?>
                                    </div><!-- /.row -->                                        
                                </div><!-- /.css-tab -->
                            </section>
                            <section class="trusted-client-wrapper" style="background: url(<?php echo base_url().'assets//arniImage/intro-bg2.jpg'?>) no-repeat top left #0e283a;">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="section-title wow fadeInDown" style="color:#f2f2f2">News & Events</h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <div class="info-in-short">                                        
                                                <?php $this->load->view('templates/newsevents'); ?>                                        
                                            </div>
                                        </div><!-- /.col-md-4 -->                               
                                    </div>
                                    <div class="col-md-12" style="clear: both"></div>
                                    
                                    <div class="col-md-12" style="clear: both; padding: 10px 0px"></div>
                                </div>

                                <div class="col-md-6">
                                    <h2 class="section-title wow fadeInDown" style="color:#f2f2f2">Video Tour</h2>
                                    <div class="info-in-short">                                        
                                        <div class="member-info">                                            
                                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/jHauc0qb0_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>                                        
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </section>
                            <section class="service-wrapper">
                                <h2 class="section-title wow fadeInDown">Schools</h2>
                                <div class="row">
                                <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('art-and-humanities'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aihm1.jpg"?>" title="School of art-and-humanities" alt="School of art-and-humanities" style="max-width: 140px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('art-and-humanities'); ?>">School of Art & Humanities</a></h3>
                                                <p>English<br>Education<br>Psychology<br>Journalism & Mass Communication<br>Fashion Design</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('art-and-humanities'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php  echo site_url('technology'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aits1.jpg"?>" title="School of Technology" alt="School of Technology" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('technology'); ?>">School of Technology</a></h3>
                                                <p><b style='color: #FFC95C'>B.Tech. in</b> <br>Civil Engineering (CE)<br>Mechanical Engineering (ME)<br>Computer Science & Engineering (ECE)<br><br>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('technology'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    
                                   

                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('pharmacy'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/pharm1.jpg"?>" title="School of Pharmacy" style="max-width: 120px;" class="img-responsive" alt="School of Pharmacy">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('pharmacy'); ?>">School of Pharmacy</a></h3>
                                                <p>Pharmacy</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('pharmacy'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('life-and-allied-science'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/pharm1.jpg"?>" title="School of Life & Allied Science" style="max-width: 120px;" class="img-responsive" alt="Life & Allied Science">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('life-and-allied-science'); ?>">School of Life & Allied Science</a></h3>
                                                <p>Life & Allied Science</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('life-and-allied-science'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('computer-application'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/fcsa1.jpg"?>" title="School of Computer Science & Applicaton" style="max-width: 120px;" class="img-responsive" alt="School of Computer Science & Applicaton">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('computer-application'); ?>">School of Computer Application</a></h3>
                                                <p>Computer Science & Applicaton</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('computer-application'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('tourism-and-hospitality-management'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aihm1.jpg"?>" title="School of Tourism & Hospitality Management" style="max-width: 120px;" class="img-responsive" alt="School of Tourism & Hospitality Management">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('tourism-and-hospitality-management'); ?>">School of Tourism & Hospitality Management</a></h3>
                                                <p>Tourism & Hospitality Management</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('tourism-and-hospitality-management'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('physical-science'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/bed1.jpg"?>" title="School of Physical Science" alt="School of Physical Science" style="min-width: 120px;max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('physical-science'); ?>">School of Physical Science</a></h3>
                                                <p>Physical Science </p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('physical-science'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('skill-development-and-vocational-studies'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/bed1.jpg"?>" title="School of Skill Development & Vocational Studies" alt="School of Skill Development & Vocational Studies" style="min-width: 120px;max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('skill-development-and-vocational-studies'); ?>">School of Skill Development & Vocational Studies</a></h3>
                                                <p>Skill Development & Vocational Studies </p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('skill-development-and-vocational-studies'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('commerce-and-business-management'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/fcbm1.jpg"?>" title="School of Commerce and Business Management" alt="School of Commerce and Business Management" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('commerce-and-business-management'); ?>">School of Commerce &amp; Business Management</a></h3>
                                                <p>Journalism & Mass Communication<br>Business Studies<br>Commerce</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('commerce-and-business-management'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                </div> <!-- /.row -->
                            </section>                                                               
                            <section class="trusted-client-wrapper">
                                <link href="<?php echo base_url().'assets/1/thumbnail-slider.css'?>" rel="stylesheet" />
                                <script src="<?php echo base_url().'assets/1/thumbnail-slider.js'?>" type="text/javascript"></script>

                                <h2 class="section-title wow fadeInDown">Our Recruiters
                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('Agi/amrapaliRecruiters');?>">See More Recruiters</a>
                                </h2>

                                <div id="thumbnail-slider">
                                    <div class="inner">
                                        <ul>
                                    <?PHP for ($loop = 1; $loop <= 45; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive thumb" src="<?PHP echo base_url() . 'assets/arniImg/cmpLogos/' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?>
                                </ul>  
                                    </div>
                                </div>                                                    
                                       
                            </section>

                            <section class="testimonial-wrapper">
                                <h2 class="section-title">Management's Talk
                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('about/management');?>">Read More</a>
                                </h2>
                                <div id="css-testimonial-carousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#css-testimonial-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#css-testimonial-carousel" data-slide-to="1"></li>
                                        <li data-target="#css-testimonial-carousel" data-slide-to="2"></li>
                                        <li data-target="#css-testimonial-carousel" data-slide-to="3"></li>  
                                        <li data-target="#css-testimonial-carousel" data-slide-to="4"></li>
                                        <li data-target="#css-testimonial-carousel" data-slide-to="5"></li>                                      
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p>
                                                            <img align="left" style="max-width: 200px; margin:10px 10px;" src="<?PHP echo base_url() . 'assets/arniImage/mgmt/vivek.jpg'; ?>" alt="Chancellor Arni University" class="img-fluid rounded">
                                                            Universities of higher learning have always played an important role in the social and economic development of nations. With the quantum of human knowledge increasing at a rapid pace, the role of Arni University as centre of learning, teaching, research and excellence has become more critical. Arni takes a holistic view of education and inspires and empowers students through knowledge and skills to partake fully in the economic development of the country.
                                                        </p>
                                                        
                                                        <span class="client-name">Mr. Vivek Singh</span>, <span class="client-org">Chancellor</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->                                                      
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p>
                                                            <img align="left" style="max-width: 200px; margin:10px 10px;" src="<?PHP echo base_url() . 'assets/arniImage/mgmt/manish.jpg'; ?>" alt="CEO Arni University" class="img-fluid rounded">
                                                            ARNI University makes every effort to make its curriculum world class and deliver it in the most effective manner. It constantly scans the developments taking place in the business world and in the society and responds to the same by preparing professional talent that is able to meet the challenges that present themselves.
                                                        </p>
                                                        
                                                        <span class="client-name">Dr. Manish Kumar</span>, <span class="client-org">CEO</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->   
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                    <p>
                                                            <img align="left" style="max-width: 200px; margin:10px 10px;" src="<?PHP echo base_url() . 'assets/arniImage/mgmt/kalyan.png'; ?>" alt="Vice Chancellor Arni University" class="img-fluid rounded">
                                                            He has more than 23 years of service in teaching and academic administration. Prior joining Arni University, he was with, Professor and Dean, KK University, School of Commerce and Management from Feb. 2020 to Oct. 2020. He has Ph.D. and Masters in Business Administration from F.M.University, Odisha and Master in Journalism and Mass Communication from Utkal University, Odisha.
                                                        </p>
                                                        
                                                        <span class="client-name">Prof. Kalyan K. Sahoo</span>, <span class="client-org">Vice Chancellor</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                    <p>
                                                            <img align="left" style="max-width: 200px; margin:10px 10px;" src="<?PHP echo base_url() . 'assets/arniImage/mgmt/rajinder.png'; ?>" alt="Pro Vice Chancellor Arni University" class="img-fluid rounded">
                                                            What I believe is that Youth will become the future leaders. My people at ARNI and I, believe in the tagline "A university by the youth, for the youth".<br>

We believe that education and the educators are the strongest pillars of a society. At ARNI we provide a world class infrastructure that brings students capability and creativity to a great extent. We are working towards the goal that Arni is the "University of Future".
                                                        </p>
                                                        
                                                        <span class="client-name">Col. Rajinder Kumar</span>, <span class="client-org">Pro Vice Chancellor</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                    <p>
                                                            <img align="left" style="max-width: 200px; margin:10px 10px;" src="<?PHP echo base_url() . 'assets/arniImage/mgmt/jaiman.jpg'; ?>" alt="Dean Academics Arni University" class="img-fluid rounded">
                                                            Welcome to our institution Arni University which signifies the first ray of the rising sun. It is a matter of sheer pride and joy to state that our University is situated in a pristine location surrounded by amazing scenic natural beauty representing the serene state of Himachal Pradesh. The bank of outrageously beautiful Beas River amidst green Forests is a wonderful backdrop for our campus.
                                                        </p>
                                                        
                                                        <span class="client-name">Dr. Jaiman Preet Kaur</span>, <span class="client-org">DEAN ACADEMIC</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                    <p>
                                                            <img align="left" style="max-width: 200px; margin:10px 10px;" src="<?PHP echo base_url() . 'assets/arniImage/mgmt/sarika.jpg'; ?>" alt="Dean R and D Arni University" class="img-fluid rounded">
                                                            The Arni University, Himachal Pradesh has envisioned itself to become a well-known name in Research and Development (R&D) activities. The University’s research program is built to explore the interdisciplinary potential of the faculty and researchers especially with respect to industry and societal aspect of Himachal Pradesh and nearby areas.
                                                        </p>
                                                        
                                                        <span class="client-name">Prof. (Dr.) Sarika Sharma</span>, <span class="client-org">Dean R&D</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                    </div><!-- /.carousel-inner -->
                                </div><!-- /.carousel -->
                            </section><!-- /.testimonial-wrapper -->                                 

                            <div class="advantages-wrapper">
                                <?php $this->load->view('templates/alumni') ?>                               
                            </div><!-- /.content-wrapper -->
                        </div><!-- /.container -->