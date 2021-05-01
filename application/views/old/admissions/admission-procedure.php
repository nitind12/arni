<?php 
    $here__ = '<a href="'.site_url('agi/onlineReg_first').'" target="_blank" style="color: #0000ff;">[here]</a>'; 
    //$download__ = '<a href="'.base_url('assets/application.pdf').'" target="_blank" style="color: #900000;">[download application form]</a>'; 
    $download__ = '';
?>
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
                                                <?php $this->load->view('templates/ticker-news'); ?>
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content">
                                                <img src="<?php echo base_url('assets/img/admission.jpg'); ?>" class="img-responsive" alt=""> 
                                                <p>&nbsp;</p>
                                                <h3>Registration procedure:</h3>
                                                <ul class="check-square" style="font-size: 13px; font-family: verdana">
                                                    <li>Visit Admission office at AGI campus with your documents and get yourself registered by making the payment of registration fee <b>Rs. 2000/-</b></li>
                                                    <li>Alternatively <a href="<?php echo site_url('Agi/onlineRegistration');?>" style="color: #0000ff; text-decoration: underline !important;">click here</a> to fill online application form. Submit the application form fill the details of Demand Draft prepared for registration fee and send it trough registered post along with the required document  to the address mentioned below.</li>
                                                    <li>Note the Demand Draft will be in favour of Amrapali Institute and Payable at Haldwani.</li>
                                                    <li>Last dates for submission of the application form for different courses will be declared online.</li>
                                                </ul>
                                                <p>&nbsp;</p>
                                                <h3>Eligibility of different courses:</h3>

                                                <div class="job-details" style="margin-top: 20px;">
                                                    <div class="panel-group" id="accordion1">
                                                          <div class="panel panel-default">                                                            
                                                                <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                                    <h2 class="panel-title">
                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                            Faculty of Technology & Sciences
                                                                        </a>
                                                                    </h2>
                                                                </div>
                                                            <div id="collapseOne" class="panel-collapse collapse">
                                                              <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding:15px;">
                                                                            <b>Course:</b> B.Tech.<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University and approved by AICTE<br>
                                                                            <b>Duration:</b> 4 years<br>
                                                                            <b>Eligibility#:</b> 45% marks in 10+2 with Maths, Physics & Chemistry and JEE Score<br>
                                                                            <b>Tuition Fee#:</b> <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (Technology & sciences)</b><br>
                                                                            Through State Counselling conducted by UTU on the basis of JEE rank.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> B. Tech. (Lateral Entry)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University and approved by AICTE<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> Passed Diploma Exam with minimum 50% marks (45% in case of reserve category) or Passed B.Sc. with minimum 50% (45% in case of reserve category) & valid UKSEE score.<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (Technology & sciences)</b><br>
                                                                            Through State Counselling conducted by UTU on the basis of UKSEE rank.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Polytechnic Diploma in Mechanical Engineering<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical Board<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> 10th pass and Jeep Qualified<br>
                                                                            <b>Tuition Fee#:</b> <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (Diploma in Mechanical Engineering)</b><br>
                                                                            Through State Counselling conducted by UBTER on the basis of JEEP rank.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding:15px;">
                                                                            <b>Course:</b> Polytechnic Diploma in Electrical Engineering<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical Board<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> 10th pass and Jeep Qualified<br>
                                                                            <b>Tuition Fee#:</b> <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (Diploma in Electrical Engineering)</b><br>
                                                                            Through State Counselling conducted by UBTER on the basis of JEEP rank.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="panel panel-default">
                                                            <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                                <h2 class="panel-title">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseOne">
                                                                        Faculty of Commerce & Business Management
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseTwo1" class="panel-collapse collapse">
                                                              <div class="panel-body">
                                                                <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 15px;">
                                                                            <b>Course:</b> MASTER OF BUSINESS ADMINISTRATION (MBA)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University and approved by AICTE<br>
                                                                            <b>Duration:</b> 2 years<br>
                                                                            <b>Eligibility#:</b> Graduation and valid CAT/MAT/CMAT/ATMA score along with 50% in graduation<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (MBA)</b><br>
                                                                            Through State Counselling conducted by UTU on the basis of CAT/MAT/CMAT/ATMA score along with 50% in graduation.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> BACHELOR OF BUSINESS ADMINISTRATION (BBA)<br>
                                                                            <b>Affiliation:</b> KUMAUN UNIVERSITY<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> 10 + 2 with 40% marks<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (BBA)</b><br>
                                                                            Direct admission on the basis of 10+2 marks. Eligible student can register themselves directly to the Institute.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> B.Com (Hons.)<br>
                                                                            <b>Affiliation:</b> Kumaun University<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> Min 50% at 10+2 Level<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (B.Com (Hons.))</b><br>
                                                                            Direct admission on the basis of 10+2 marks. Eligible student can register themselves directly to the Institute.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 15px;">
                                                                            <b>Course:</b> DIPLOMA IN RETAIL MANAGEMENT (DRM)<br>
                                                                            <b>Affiliation:</b> RAI<br>
                                                                            <b>Duration:</b> 1 year<br>
                                                                            <b>Eligibility#:</b> Class 12Th Pass<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (DRM)</b><br>
                                                                            Eligibility is Class 12Th Pass.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="panel panel-default">
                                                            <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                                <h2 class="panel-title">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseOne">
                                                                        Faculty of Computer Science & Applications
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseThree1" class="panel-collapse collapse">
                                                              <div class="panel-body">
                                                                <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 15px;">
                                                                            <b>Course:</b> MASTER OF COMPUTER APPLICATIONS (MCA)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University and approved by AICTE<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> Graduate with Mathematics in 10 + 2 level<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (MCA)</b><br>
                                                                            Through State Counselling conducted by UTU on the basis of UKSEE rank.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> BACHELOR OF COMPUTER APPLICATIONS (BCA)<br>
                                                                            <b>Affiliation:</b> KUMAUN UNIVERSITY<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> 10 + 2 with Mathematics and minimum 45% marks<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (BCA)</b><br>
                                                                            Direct admission on the basis of 10+2 marks. Eligible student can register themselves directly to the Institute.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>                      
                                                                    </div>
                                                                   <!--div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Masters of Computer Applications Lateral Entry (MCA - Direct IInd year)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University and approved by AICTE<br>
                                                                            <b>Duration:</b> 2 years (Four Semester) Full time MCA<br>
                                                                            <b>Eligibility#:</b> Bachelor's degree of minimum 3 years duration in BCA, B.Sc (IT/Computer Science) with Mathematics as a subject at 10+2 level or at Graduation level.
                                                Obtained at least 50% (45% in case of candidate belonging to reserved category) at the qualifying examination.<br>
                                                                        </div>
                                                                    </div-->                
                                                              </div>
                                                            </div>
                                                          </div>
                                                          
                                                          <div class="panel panel-default">
                                                            <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                                <h2 class="panel-title">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1" aria-expanded="false" aria-controls="collapseOne">
                                                                        Faculty of Hospitality Management
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseFour1" class="panel-collapse collapse">
                                                              <div class="panel-body">
                                                                <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 15px;">
                                                                            <b>Course:</b> Bachelor of Hotel Management & Catering Technology (BHMCT)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University and approved by AICTE<br>
                                                                            <b>Duration:</b> 4 years<br>
                                                                            <b>Eligibility#:</b> 10 + 2 with 50% marks and English<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (BHMCT)</b><br>
                                                                            Through State Counselling conducted by UTU on the basis of UKSEE rank.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Bachelor of Hospitality Management (BHM)<br>
                                                                            <b>Affiliation:</b> KUMAUN UNIVERSITY<br>
                                                                            <b>Duration:</b> 4 years<br>
                                                                            <b>Eligibility#:</b> 10 + 2 with 45% marks<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (BHM)</b><br>
                                                                            Direct admission on the basis of 10+2 marks. Eligible student can register themselves directly to the Institute.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>                      
                                                                    </div>
                                                                   <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Diploma in Hotel Management & Catering Technology (DHMCT)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University and approved by AICTE<br>
                                                                            <b>Duration:</b> 3 years<br>
                                                                            <b>Eligibility#:</b> 10+2 with English<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            <b>Admission Procedure (DHMCT)</b><br>
                                                                            Through State Counselling conducted by UTB on the basis of JEEP rank.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 15px;">
                                                                            <b>Course:</b> Diploma in Hotel Administration (DHA)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Open University<br>
                                                                            <b>Duration:</b> 1 years<br>
                                                                            <b>Eligibility#:</b> 10 + 2<br>
                                                                            <b>Tuition Fee#:</b> As per Uttarakhand Open University norms<br><br>
                                                                            <b>Admission Procedure (DHA)</b><br>
                                                                            Direct admission on the basis of 10+2 marks. Eligible student can register themselves directly to the Institute.<br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                    </div> 
                                                              </div>
                                                            </div>
                                                          </div>        
                                                          
                                                          <div class="panel panel-default">
                                                            <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                                <h2 class="panel-title">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour2" aria-expanded="false" aria-controls="collapseOne">
                                                                        Faculty of Pharmacy
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseFour2" class="panel-collapse collapse">
                                                              <div class="panel-body">
                                                                <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 15px;">
                                                                            <b>Course:</b> Bachelor of Pharmacy (B.Pharm)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical University<sup>*</sup> and approved by AICTE & PCI, New Delhi<br>
                                                                            <b>Duration:</b> 4 years<br>
                                                                            <b>Eligibility#:</b> 10 + 2 with English as one of the subject and Physics, Chemistry, Maths (PCM) and or Biology (PCB/ PCMB) as optional Subject<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Diploma in Pharmacy (D.Pharm)<br>
                                                                            <b>Affiliation:</b> Uttarakhand Technical Board<sup>*</sup> and approved by AICTE & PCI, New Delhi<br>
                                                                            <b>Duration:</b> 2 years<br>
                                                                            <b>Eligibility#:</b> 10 + 2 exam PCB/ PCM<br>
                                                                            <b>Tuition Fee#:</b>  <a href="<?PHP echo site_url('Agi/feeStructure');?>">Click to see</a><br><br>
                                                                            Eligible student are required to Register to the Institute either in person or online <?php echo $here__;?> <?php echo $download__; ?>.<br>
                                                                        </div>                      
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