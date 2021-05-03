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
<?php
    
    $slider_ = array(
        'bg1.jpg'=>'Arni University',
        'bg2.jpg'=>'Arni University',
        'bg3.jpg'=>'Arni University',
        'bg4.jpg'=>'Arni University',
        'bg5.jpg'=>'Arni University',
        'bg6.jpg'=>'Arni University',
        'bg7.jpg'=>'Arni University',
        'bg8.jpg'=>'Arni University'
    );

    
?>
<!--script>
    function addfavlink(loc, dispname, siteurl){
         var shl = WScript.CreateObject("WScript.Shell");
        var shor = shl.CreateShortcut(loc + "" + dispname + ".URL");
        shor.TargetPath = siteurl;
        shor.save();
    }
</script-->
<body>
<?php $this->load->view('tagmanager'); ?>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                        <!-- AGI Video
                        <header style="overflow: hidden; position: relative; height: auto">
                            <div class="video-test"style="position: sticky; overflow: hidden; min-height: 25%; height: 100%">
                              <video preload="auto" style="width:100%; height:auto;" autoplay="autoplay" loop="loop" muted="">
                                <source src="<?php echo base_url('assets/ai_video.mp4');?>" type="video/mp4">
                                 <source src="/images/video/ai_video.ogg" type="video/ogg">
                              </video>
                            </div>
                            <div style="position: absolute; z-index: 999999"></div>
                        </header>
                        AGI Video -->
                        <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="2"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="3"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="4"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="5"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="6"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="7"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php $loop1 = 0; $sliderno = mt_rand(0,count($slider_)-1);?>
                            <?php foreach($slider_ as $img=>$item){?>
                            <div class="item<?php if($loop1 == $sliderno) echo ' active';?>">
                                <img src="<?php echo base_url('assets/img/slider/'.$img); ?>?version=2.2" alt="<?php echo $item; ?>">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                        <small class="animated fadeIn">CALL US TODAY (Toll Free)</small>
                                        <div class="phone animated lightSpeedIn">18008918962</div>
                                        <h1 class="animated lightSpeedIn hidden-xs" style="font-size:40px!important;"><?php echo $item; ?></h1>                                            
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
                            <?php $loop1++;?>
                            <?php } ?>
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #x-corp-carousel-->
                    <div style="clear: both;"><br></div>
                    <div class="container">
                        <div class="content-wrapper">
                            <section class="intro-wrapper"> 
                                <div class="row"> 
                                    <div class="col-lg-7 col-md-8"> 
                                        <h1></h1>
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
                                    <h2 class="section-title wow fadeInDown" style="color:#f2f2f2">Rankings</h2>
                                    <div class="info-in-short">                                        
                                        <div class="member-info">                                            
                                            <ul class="check-circle" style="font-size:14px;text-align: justify;">
                                                <li>Ranked amongst top 10 the best private institute of Hotel Management in India by Drishti Outlook Survey 2018, 2019</li>
                                                <li>Ranked amongst top private institutes by Hansa Research Survey 2016, 2017, 2018 & 2019 published in The Week magazine. </li>
                                                <li>Top Ranked Hotel Management Institute in State for last nine years GHRDC</li>
                                                <li>Amongst Top Ranked Emerging Engineering College in India Higher Education Survey</li>
                                                <li>Awarded Best Institute of Academic Excellence in Uttarakhand Worldwide Achiever Survey</li>
                                                
                                            </ul>
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
                                            <a class="media-left" href="<?php //echo site_url('faculty/fhm/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aihm1.jpg"?>" title="AIHM" alt="AIHM" style="max-width: 140px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fhm/courses'); ?>">School of Art & Humanities</a></h3>
                                                <p>English<br>Education<br>Psychology<br>Journalism & Mass Communication<br>Fashion Design</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fhm/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php // echo site_url('faculty/ftca/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aits1.jpg"?>" title="AITS" alt="AITS" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/ftca/courses'); ?>">School of Technology</a></h3>
                                                <p><b style='color: #FFC95C'>B.Tech. in</b> <br>Civil Engineering (CE)<br>Mechanical Engineering (ME)<br>Computer Science & Engineering (ECE)<br><br>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/ftca/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fcbm/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/fcbm1.jpg"?>" title="FCBM" alt="FCBM" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fcbm/courses'); ?>">School of Commerce &amp; Business Management</a></h3>
                                                <p>Journalism & Mass Communication<br>Business Studies<br>Commerce</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php// echo site_url('faculty/fcbm/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->

                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/pharm1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Pharmacy</a></h3>
                                                <p>Pharmacy</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/pharm1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Life & Allied Science</a></h3>
                                                <p>Life & Allied Science</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/fcsa1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Computer Application</a></h3>
                                                <p>Computer Science & Applicaton</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aihm1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Tourism & Hospitality Management</a></h3>
                                                <p>Tourism & Hospitality Management</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fe/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/bed1.jpg"?>" title="BED" alt="BEd" style="min-width: 120px;max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fe/courses'); ?>">School of Physical Science</a></h3>
                                                <p>Physical Science </p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fe/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fe/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/bed1.jpg"?>" title="BED" alt="BEd" style="min-width: 120px;max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fe/courses'); ?>">School of Skill Development & Vocational Studies</a></h3>
                                                <p>Skill Development & Vocational Studies </p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fe/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                </div> <!-- /.row -->
                            </section>                                                               
                            <section class="trusted-client-wrapper">
                                <link href="<?php echo base_url().'assets/1/thumbnail-slider.css'?>" rel="stylesheet" />
                                <script src="<?php echo base_url().'assets/1/thumbnail-slider.js'?>" type="text/javascript"></script>

                                <h2 class="section-title wow fadeInDown">Our Recruiters
                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('ArniRecruiters');?>">See More Recruiters</a>
                                </h2>

                                <div id="thumbnail-slider">
                                    <div class="inner">
                                        <ul>
                                    <?PHP for ($loop = 1; $loop <= 45; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive thumb" src="<?PHP echo base_url() . 'assets/img/cmpLogos/' . $loop . '.png'; ?>" alt="Arni Recruiters Logo"></li> 
                                    <?PHP } ?>
                                </ul>  
                                    </div>
                                </div>                                                    
                                       
                            </section>

                            <section class="testimonial-wrapper">
                                <h2 class="section-title">What our Recruiters Say about us
                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('RecruitersTestimonials'); ?>">Check More</a>
                                </h2>
                                <div id="css-testimonial-carousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#css-testimonial-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#css-testimonial-carousel" data-slide-to="1"></li>
                                        <li data-target="#css-testimonial-carousel" data-slide-to="2"></li>
                                        <li data-target="#css-testimonial-carousel" data-slide-to="3"></li>                                        
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p>
                                                            <img align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/AndrewKaushik.jpg'; ?>" alt="Arni Recruiters">
                                                            I have been associated with the institute for past 3 years now and each time the interaction has been very professional. The students from the institute are well-versed with the basics of hospitality industry and are well trained on personality enhancement. The credit deinitely goes to the faculty members who has been imparting the knowledge to the students. The response from the institute is very prompt.
                                                            I look forward to the fruitful continued professional association with the Institute and wish all the students and faculty success for the upcoming years.
                                                        </p>
                                                        <span class="client-name">Yamini Bhakri</span>, <span class="client-org">Human Resources Manager, The Hyatt </span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->                                                      
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p><img hspace="10" align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/AndrewKaushik.jpg'; ?>" alt="Arni Recruiters"> Karvy Stock Broking has conducted an on-campus drive at Arni Group of Institutes and we have seen experienced set of very professional and wellgroomed candidates for our recruitment. The institution has a good talent pool of fresh minds that have been trained to become industry ready in state of the art infrastructure with a very high focus on technical capability as well as soft skills of students.</p>
                                                        <span class="client-name">Parvez Shaikh</span>, <span class="client-org">AGM – Training, Karvy, Hyderabad </span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->   
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p><img hspace="10" align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/AndrewKaushik.jpg'; ?>" alt="Arni Recruiters">Students of Arni have become an essential part of SmartData. For past many years we have been hiring MCA students on various technical profiles and selections have always proved right for our company. Smart Data would like to acknowledge all the students of Faculty of Computer Science & Applications for a great recruiting season. We saw high calibre of intellect and discipline in the team that represented the institute and we are happy to continue this association in future</p>
                                                        <span class="client-name">Ms. Anuradha Chawla</span>, <span class="client-org">Vice President – Operations, Smart Data Inc</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p><img hspace="10" align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/AndrewKaushik.jpg'; ?>" alt="Arni Recruiters"> We ventured an on- campus placement drive with the students of Arni for the first time. We are always on a lookout for passionate coders and our hiring process is very stringent and continued for weeks with varied levels of difficulties. We would be very pleased to be associated with the institute for a long time to come and add to our bouquet of passionate coding experts that will take Allure Inc. to unprecedented heights.</p>   
                                                        <span class="client-name">Mr. Suresh Shinde</span>, <span class="client-org">Chief Technology Officer,Allure Inc., Goa</span>
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
                        
                        
                        <!-- Modal -->
<!--div id="myModal3" class="modal fade in" role="dialog" style="display: block;">
  <div class="modal-dialog" style="background: transparent">
    <div class="modal-content" style="background: transparent;-webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; border: #000000 solid 0px">
      <div class="modal-body" style="background: transparent">
        <img src = "<?php //echo base_url('assets/img/2.jpg');?>?version=3.0" />
      </div>
    </div>

  </div>
</div-->
                        