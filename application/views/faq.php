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
                                        <li><a href="#">Admissions</a></li>
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
                                                
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content">
                                                <img src="<?php echo base_url('assets/img/faq.jpg'); ?>" class="img-responsive" alt=""> 

                                                <div class="job-details" style="margin-top: 20px;">
                                                    <h2>Campus</h2>
                                                    <p>The Campus is located right on the Nainital- Haridwar Highway and is easily accessible to all the neighboring cities.</p>
                                                    <p>At Amrapali the excellent infrastructure including specious classrooms, modern labs and the well stocked library provide a solid foundation for excellence in academics. The Institute has organised the support tools in such a manner that the student can have easy access to them. The campus is Wi-Fi.</p>
                                                    <p>The Campus has a standard jogging track, a football ground, basketball, modern gymnasium along with other indoor games such as table tennis, etc.</p>
                                                    <p>&nbsp;</p>
                                                    <div class="panel-group" id="accordion2">
                                                      <div class="panel panel-default">                                                        
                                                         <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                                                    Where and how can I download the Application Forms?
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseOne1" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                Application forms can be obtained by the following options:
                                                                <ul class="arrow-double">
                                                                    <li>Download Application Form free of cost, pay by Demand Draft while submitting, <a href="<?php echo site_url('admissions/applynow');?>">Click Here</a> to download or apply online</li>
                                                                    <li>The Registration fee to be submitted along with form is Rs. 2000/-</li>
                                                                    <li>The D/D can be prepared from any Bank and should be in favour of Amrapali Institute, payable at Haldwani.</li>
                                                                    <li>The application form can be in-person obtained from Campus at Shiksha Nagar, Kaladunghi Road, Lamacahur, Haldwani. Filled application form could be submitted along with cash registration fee at Admission Office</li>
                                                                </ul>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                                             Where should I submit the filled up forms? 
                                                            </a>
                                                          </h2>
                                                        </div>
                                                        <div id="collapseOne2" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                Duly filled in Forms together with certified copies of mark sheets / testimonials should be submitted/sent to the Campus
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                                             What is the MAT/CAT/GMAT score required for MBA programs? 
                                                            </a>
                                                          </h2>
                                                        </div>
                                                        <div id="collapseOne3" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                If you have appeared in CAT or MAT or GMAT, you can apply directly the cut-off is prepared during Counseling as per the University schedule.
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                                                            If I have not taken cat or mat, what do I do? 
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseOne4" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                If you have not appeared in CAT or MAT or your score is less than the required cut off accepted, then you can appear for Uttarakhand Technical University Written Test followed by GD and/or Interview on the day of selection process.
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                                                             Is the Institute recognized by the Government? 
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseOne5" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                Yes all the programmes of the Group are either approved by AICTE or UGC.
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                                             Does the Institute provide Hostel/Accommodation/Residential facility for outstation candidates? 
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseOne6" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                Hostel Facility
                                                                <ul class="arrow-double">
                                                                    <li>Separate Hostel facilities for boys and girls in a lush green pollution free surroundings, caring wardens and a tight security ensure a pleasant stay allowing students to focus on their academics.</li>
                                                                    <li>Wireless internet access and STD facilities ensure close contact with family and friends outside, the fully equipped common rooms with TV, Indoor games and other recreation facilities allow for relaxed time with friends on campus.</li>
                                                                </ul>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne7" aria-expanded="false" aria-controls="collapseOne7">
                                                             How can I get an education loan? Does the University provide Loan facility?  
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseOne7" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                As the courses are approved so all the deserving and eligible candidate can obtain educational loans, the Group supports students through the tie-up with various Banks.
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne8" aria-expanded="false" aria-controls="collapseOne8">
                                                             What other facilities are offered by the University? 
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseOne8" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                <h4>On Campus Facilities</h4> 
                                                                <h4>Campus</h4>
                                                                The Campus is located right on the Nainital- Haridwar Highway and is easily accessible to all the neighboring cities.
                                                                <h4>Infrastructure</h4>
                                                                At Amrapali the excellent infrastructure including specious classrooms, modern labs and the well stocked library provide a solid foundation for excellence in academics. The Institute has organised the support tools in such a manner that the student can have easy access to them. The campus is Wi-Fi.
                                                                <h4>Conference Rooms</h4>
                                                                Conference Rooms provide appropriate environment for teamwork, where students master their team skills through exercises like brain-storming sessions, group discussions, role plays etc.
                                                                <h4>Sports Facilities</h4>
                                                                The Campus has a standard jogging track, a football ground, basketball, modern gymnasium along with other indoor games such as table tennis, etc.
                                                                <h4>Seminar Hall</h4>
                                                                9 state-of-the-art seminar halls with 150 capacity acts as a common ground for students, faculty and corporate personalities for regular interface and other management events.
                                                                <h4>Cafeteria</h4>
                                                                An air-cooled, multi-cuisine food point serves a delectable variety of Indian and Chinese dishes.
                                                                <h4>Medical Facilities</h4>
                                                                Every student is covered under comprehensive Medical Insurance to meet all kinds of exigencies. For total care of any emergency, we have tie-ups with leading hospital chains in the city.
                                                          </div>
                                                        </div>
                                                      </div>
                                                      
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne9" aria-expanded="false" aria-controls="collapseOne9">
                                                             If at any point of time I wish to withdraw from the program, what is the procedure?  
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseOne9" class="panel-collapse collapse">
                                                          <div class="panel-body">
                                                                Application for withdrawal from the programme is to be sent to the Admission office and the same will be processed as per the guidelines of AICTE and other approving bodies.
                                                          </div>
                                                        </div>
                                                      </div>
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