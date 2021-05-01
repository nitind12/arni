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

                        <!-- AGI Video -->
                        <header style="overflow: hidden; position: relative; height: auto">
                            <div class="video-test"style="position: sticky; overflow: hidden; min-height: 25%; height: 100%">
                              <video preload="auto" style="width:100%; height:auto;" autoplay="autoplay" loop="loop" muted="">
                                <source src="<?php echo base_url('assets/ai_video.mp4');?>" type="video/mp4">
                                 <source src="/images/video/ai_video.ogg" type="video/ogg">
                              </video>
                            </div>
                            <div style="position: absolute; z-index: 999999"></div>
                        </header>
                        <!--.AGI Video -->

                    <div style="clear: both;"><br></div>
                    <div class="container">
                        <div class="content-wrapper">
                            <section class="intro-wrapper"> 
                                <div class="row"> 
                                    <div class="col-lg-7 col-md-8">
                                        <!--marquee direction="up" behavior="alternate" scrolldelay="2000" scrollamount="50">
                                            <h6 style="bakground: #ffff00 !important; color: #0000ff">
                                                <a href="https://kuadmission.com/home/examinations.php" target="_blank" style="color: #0000ff">
                                                    Online Application for Even Semester Examination 2020 for Professional Courses [ BBA, BCA, BHM, B.Com, B.Ed.] Regular/Back and Passout Students
                                                </a>
                                            </h6>
                                        </marquee-->
                                        <!--a href="<?php echo base_url('assets/img/new-year-greetings.jpg');?>" style="margin-top:-50px; background: #000090; border-radius: 5px; padding:5px; color: #fff"  target="_blank">New Year Greetings from Secretary, Amrapali Group Of Institutes</a-->
                                        <h1></h1>
                                        <!--a href="https://forms.gle/UwskckP3wqNJsiUq7" target="_blank"><img src="<?php //echo base_url('assets/img/skill.jpg');?>?version=1.2" title="Register yourself for free Skill Development Programme" style="width: 100%"/></a>
                                        <h3 style="border: #550000 solid 1px; text-align: center; font-family: Arial; font-size: 15px">Offering Free Training Modules for<br><span style="color: #0000ff">Hotel Management</span>, <span style="color: #009000">Engineering & Computer Applications</span> AND <span style="color: #900000">Management Studies</span></h3-->
                                        <h5 style="background: #ffff00; border-radius: 5px; opacity: .8; color: #000000; padding: 5px 5px">
                                            <b>Covid-19 Awareness</b>
                                            <ol style="padding: 0px 10px; list-style: none">
                                                <li style="padding: 5px 0px"><img src="assets/img/hand.png" style="width: 20px; margin: 0px 3px" /><a href="https://www.youtube.com/watch?v=uHB3WJsLJ8s&feature=youtu.be" target="_blank" style="color: #000044">Practical tips to take care of your Mental Health during the Stay In</a></li>
                                                <li style="padding: 5px 0px"><img src="assets/img/hand.png" style="width: 20px; margin: 0px 3px" /><a href="https://www.mohfw.gov.in/pdf/MindingourmindsduringCoronaeditedat.pdf" target="_blank" style="color: #000044">Minding our minds during the COVID-19</a></li>
                                                <li style="padding: 5px 0px"><img src="assets/img/hand.png" style="width: 20px; margin: 0px 3px" /><a href="https://www.youtube.com/watch?v=iuKhtSehp24&feature=youtu.be" target="_blank" style="color: #000044">Various Health Experts on how to manage Mental health & Well Being during COVID-19 outbreak</a></li>
                                            </ol>
                                        </h5>
                                        <h1></h1>
                                        <h1 class="wow fadeInDown">Amongst the Top Ranked Institutes of Uttarakhand</h1>
                                        <h3 class="wow fadeInDown">We call ourself an Institution ready for the REAL WORLD</h3>
                                        <p class="wow fadeInDown">At AGI, we don't just teach theory. We teach you how to put theory into practice. Learn with us so that you can take your ideas and make them REAL.</p>

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
                                    <h2 class="section-title-dark wow fadeInDown">Amrapali Advantage</h2>
                                </center>
                                <div class="css-tab text-center">
                                    <div class="row">
                                        <?php $this->load->view('templates/advantage'); ?>
                                    </div><!-- /.row -->                                        
                                </div><!-- /.css-tab -->
                            </section>
                            <section class="trusted-client-wrapper" style="background: url(<?php echo base_url().'assets//img/intro-bg2.jpg'?>) no-repeat top left #0e283a;">
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
                                    <div class="col-md-12">
                                        <h2 class="section-title wow fadeInDown" style="color:#f2f2f2">Blogs</h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <div class="info-in-short">                                        
                                                <?php $this->load->view('templates/blogs'); ?>                                        
                                            </div>
                                        </div><!-- /.col-md-4 -->                               
                                    </div>
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
                                                <li>Ranked amongst Top 10 Promising Business Management Institute in India CSR-GHRDC Survey 2013, 2014, 2015, 2019 & 2020</li>
                                                <li>Ranked amongst  Top 10 Hotel Management Institute of super excellence in India GHRDC 2015, 2016, 2017, 2018, 2019 & 2020. </li>
                                                <li>Education Excellence Award by Tv100 2017-18</li>
                                                <li>Ranked amongst Top 30 Hotel Management Institute in India THE WEEK</li>
                                                <li>Top 70 BBA Institute as per Times Survey 2019</li>
                                                <li>Top 21 BBA Institute as per GHRDC Survey 2019</li>
                                                <li>Category "A" Business School for MBA in Northern India by Chronicle Survey 2019</li>
                                                <li>Top 10 Promising B School for MBA in India as per GHRDC Survey 2013,14,15,16,17,18,19</li>
                                                <li>Ranked among the top 5 private institutes by The Knowledge Review Survey.</li>
                                                <li>Ranked among top 10 BCA Colleges in India by GHRDC TIMES Annual Survey Report 2020</li>
                                                <li>CSR Magazine Listed Engineering Institution.</li>
                                            </ul>
                                        </div>                                        
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </section>
                            <section class="service-wrapper">
                                <h2 class="section-title wow fadeInDown">Faculty</h2>
                                <div class="row">
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('faculty/ftca/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/img/aits1.jpg"?>" title="AITS" alt="AITS" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('faculty/ftca/courses'); ?>">Technology &amp; Computer Applications</a></h3>
                                                <h4 style="color:lightgrey">Technology</h4>
                                                <p><b style='color: #FFC95C'>B.Tech. in</b> <br>Computer Science &amp; Engineering (CSE)<br>Mechanical Engineering (ME)<br>Electronics and Communication Engineering (ECE)<br>Electrical and Electronics Engineering (EEE)<br><b style='color: #FFC95C'>Diploma in</b> <br>Mechanical Engineering (ME) <br>Electrical Engineering (EE) <br><br>
                                                <h4 style="color:lightgrey">Computer Applications</h4>
                                                Bachelor of Computer Applications (BCA)<br>Masters of Computer Applications (MCA)</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('faculty/ftca/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('faculty/fhm/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/img/aihm1.jpg"?>" title="AIHM" alt="AIHM" style="max-width: 140px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('faculty/fhm/courses'); ?>">Hospitality Management</a></h3>
                                                <p>Bachelor of Hotel Management &amp; Catering Technology (BHMCT)<br>Bachelor of Hospitality Management (BHM)<br>Diploma in Hotel Management &amp; Catering Technology (DHMCT)<br>Diploma in Hotel Administration (DHA)</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('faculty/fhm/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('faculty/fcbm/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/img/fcbm1.jpg"?>" title="FCBM" alt="FCBM" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('faculty/fcbm/courses'); ?>">Commerce &amp; Business Management</a></h3>
                                                <p>Masters of Business Administration (MBA)<br>Bachelor of Business Administration (BBA)<br>Bachelor of Commerce (Honours) [B.Com. (Hons.)]<br>Diploma in Retail Management (DRM)</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('faculty/fcbm/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->

                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/img/pharm1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('faculty/fps/courses'); ?>">Pharmacy</a></h3>
                                                <p>Bachelor of Pharmacy (B.PHARM)<br>Bachelor of Pharmacy Lateral Entry (B.PHARM LE)<br>Diploma in Pharmacy (D.PHARM)</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php echo site_url('faculty/fe/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/img/bed1.jpg"?>" title="BED" alt="BEd" style="min-width: 120px;max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php echo site_url('faculty/fe/courses'); ?>">BEd</a></h3>
                                                <p>B.Ed. stands for an undergraduate academic course known as Bachelor of Education. It is a course offered for those who are interested in pursuing career in teaching and related fields. </p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('faculty/fe/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                </div> <!-- /.row -->
                            </section>                                                               
                            <section class="trusted-client-wrapper">
                                <link href="<?php echo base_url().'assets/1/thumbnail-slider.css'?>" rel="stylesheet" />
                                <script src="<?php echo base_url().'assets/1/thumbnail-slider.js'?>" type="text/javascript"></script>

                                <h2 class="section-title wow fadeInDown">Our Recruiters
                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('amrapaliRecruiters');?>">See More Recruiters</a>
                                </h2>

                                <div id="thumbnail-slider">
                                    <div class="inner">
                                        <ul>
                                    <?PHP for ($loop = 1; $loop <= 45; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive thumb" src="<?PHP echo base_url() . 'assets/img/cmpLogos/' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?>
                                </ul>  
                                    </div>
                                </div>                                                    
                                       
                            </section>

                            <section class="testimonial-wrapper">
                                <h2 class="section-title">What our Recruiters Say about us
                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('RecruitersTestimonials'); ?>">Check More</a>
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
                                                            <img align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/YaminiBhakr.jpg'; ?>" alt="Amrapali Recruiters">
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
                                                        <p><img hspace="10" align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/ParvezShaikh.jpg'; ?>" alt="Amrapali Recruiters"> Karvy Stock Broking has conducted an on-campus drive at Amrapali Group of Institutes and we have seen experienced set of very professional and wellgroomed candidates for our recruitment. The institution has a good talent pool of fresh minds that have been trained to become industry ready in state of the art infrastructure with a very high focus on technical capability as well as soft skills of students.</p>
                                                        <span class="client-name">Parvez Shaikh</span>, <span class="client-org">AGM – Training, Karvy, Hyderabad </span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->   
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p><img hspace="10" align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/AnuradhaChawla.jpg'; ?>" alt="Amrapali Recruiters">Students of Amrapali have become an essential part of SmartData. For past many years we have been hiring MCA students on various technical profiles and selections have always proved right for our company. Smart Data would like to acknowledge all the students of Faculty of Computer Science & Applications for a great recruiting season. We saw high calibre of intellect and discipline in the team that represented the institute and we are happy to continue this association in future</p>
                                                        <span class="client-name">Ms. Anuradha Chawla</span>, <span class="client-org">Vice President – Operations, Smart Data Inc</span>
                                                    </div>
                                                </div><!-- /.col-md-8 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-7">
                                                    <div class="client-testimonial">
                                                        <p><img hspace="10" align="right" class="img-responsive" style="max-width: 120px;margin:10px 20px;" src="<?PHP echo base_url() . 'assets/img/recruiters/SureshShinde.jpg'; ?>" alt="Amrapali Recruiters"> We ventured an on- campus placement drive with the students of Amrapali for the first time. We are always on a lookout for passionate coders and our hiring process is very stringent and continued for weeks with varied levels of difficulties. We would be very pleased to be associated with the institute for a long time to come and add to our bouquet of passionate coding experts that will take Allure Inc. to unprecedented heights.</p>   
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
                        