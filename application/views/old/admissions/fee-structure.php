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
                                        <li><a href="<?php echo site_url('agi'); ?>">Home</a></li>
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
                                                <div class="job-details" id="feestructure" style="margin-top: 20px;display:none;">
                                                    <h3>Fee structure for courses are as follows:</h3>
                                                    <div class="panel-group" id="accordion1">
                                                        <div class="panel panel-default">          
                                                            <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                                <h2 class="panel-title">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                        Faculty of Technology &amp; Computer Applications
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0;  padding: 10px;">
                                                                            <b>Course:</b> B.Tech.<br>
                                                                            <b>Academic Fee:</b> Rs. 38,500* / Sem<br>
                                                                            <b>Lateral entry:</b> Rs. 38,500* / Sem<br>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Polytechnic<br>
                                                                            <b>Academic Fee:</b> Rs. 22,500* / Sem<br>
                                                                        </div>
                                                                        <div class="col-sm-12" style="clear: both; padding: 2px"></div>
                                                                        <div class="col-sm-6">
                                                                            &nbsp;
                                                                        </div>
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0;  padding: 10px;">
                                                                            <b>Course:</b> B.SC HONOURS<br>
                                                                            <b>Academic Fee:</b> Rs. 17,500* / Sem<br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12" style="clear: both; padding: 10px"></div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0;  padding: 10px;">
                                                                            <b>Course:</b> MASTER OF COMPUTER APPLICATIONS (MCA)<br>
                                                                            <b>Academic Fee:</b> Rs. 44,000* / Sem<br>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> MASTER OF COMPUTER APPLICATIONS  (MCA II Year Direct)<br>
                                                                            <b>Academic Fee:</b> Rs. 44,000* / Sem<br>
                                                                        </div>
                                                                        <div class="col-sm-12" style="clear: both; padding: 2px"></div>
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> BACHELOR OF COMPUTER APPLICATIONS (BCA)<br>
                                                                            <b>Academic Fee:</b> Rs. 32,500* / Sem<br>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> BACHELOR OF EDUCATION (B.Ed.)<br>
                                                                            <b>Academic Fee:</b> As per University norms*<br>
                                                                        </div>
                                                                    </div>
                                                                    <br>* subject to change as per University norms
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
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0;  padding: 10px;">
                                                                            <b>Course:</b> MASTER OF BUSINESS ADMINISTRATION (MBA)<br>
                                                                            <b>Academic Fee:</b> Rs. 55,000* / Sem<br>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> BACHELOR OF BUSINESS ADMINISTRATION (BBA)<br>
                                                                            <b>Academic Fee:</b> Rs. 32,500* / Sem<br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> B.COM HONOURS<br>
                                                                            <b>Academic Fee:</b> Rs. 27,500* / Sem<br>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0;  padding: 10px;">
                                                                            <b>Course:</b> Diploma in Retail Management (DRM)<br>
                                                                            <b>Academic Fee:</b> Rs. 15,000* / Sem<br>
                                                                        </div>
                                                                    </div>
                                                                    <br>* subject to change as per University norms
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--div class="panel panel-default">
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
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0;  padding: 10px;">
                                                                            <b>Course:</b> MASTER OF COMPUTER APPLICATIONS (MCA)<br>
                                                                            <b>Academic Fee:</b> Rs. 44,000* / Sem<br>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> MASTER OF COMPUTER APPLICATIONS  (MCA II Year Direct)<br>
                                                                            <b>Academic Fee:</b> Rs. 44,000* / Sem<br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> BACHELOR OF COMPUTER APPLICATIONS (BCA)<br>
                                                                            <b>Academic Fee:</b> Rs. 32,500* / Sem<br>
                                                                        </div>
                                                                    </div> 
                                                                    <br>* subject to change as per University norms               
                                                                </div>
                                                            </div>
                                                        </div-->

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
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 10px;">
                                                                            <b>Course:</b> Bachelor of Hotel Management &amp; Catering Technology (BHMCT)<br>
                                                                            <b>Academic Fee:</b> Rs. 45,000* / Sem<br>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Bachelor of Hospitality Management (BHM-KU)<br>
                                                                            <b>Academic Fee:</b> Rs. 41,000* / Sem<br>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Diploma in Hotel Management &amp; Catering Technology (DHMCT)<br>
                                                                            <b>Academic Fee:</b> Rs. 27,500* / Sem<br>
                                                                        </div>

                                                                        <!--div class="col-sm-6" style="background-color:#F0F0F0; padding: 10px;">
                                                                            <b>Course:</b> Bachelor of Hospitality Management (BHM-UOU)<br>
                                                                            <b>Academic Fee:</b> As per Uttarakhand Open University norms<br>
                                                                        </div-->
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 10px;">
                                                                            <b>Course:</b> Diploma in Hotel Administration (DHA)<br>
                                                                        </div>
                                                                    </div>
                                                                    <br>* subject to change as per University norms
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div id="collapseFour1" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 10px;">
                                                                            <b>Course:</b> Bachelor of Hotel Management &amp; Catering Technology (BHMCT)<br>
                                                                            <b>Academic Fee:</b> Rs. 45,000* / Sem<br>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Bachelor of Hospitality Management (BHM-KU)<br>
                                                                            <b>Academic Fee:</b> Rs. 41,000* / Sem<br>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Diploma in Hotel Management &amp; Catering Technology (DHMCT)<br>
                                                                            <b>Academic Fee:</b> Rs. 27,500* / Sem<br>
                                                                        </div>

                                                                        <!--div class="col-sm-6" style="background-color:#F0F0F0; padding: 10px;">
                                                                            <b>Course:</b> Bachelor of Hospitality Management (BHM-UOU)<br>
                                                                            <b>Academic Fee:</b> As per Uttarakhand Open University norms<br>
                                                                        </div-->
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 10px;">
                                                                            <b>Course:</b> Diploma in Hotel Management (DHM)<br>
                                                                        </div>
                                                                    </div>
                                                                    <br>* subject to change as per University norms
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
                                                                        <div class="col-sm-6" style="background-color:#F0F0F0; padding: 10px;">
                                                                            <b>Course:</b> Bachelor of Pharmacy (B.Pharm)<br>
                                                                            <b>Academic Fee:</b> Rs. 37,500* / Sem<br>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <b>Course:</b> Diploma in Pharmacy (D.Pharm)<br>
                                                                            <b>Academic Fee:</b> Rs. 32,500* / Sem<br>
                                                                        </div>

                                                                    </div>
                                                                    <br>* subject to change as per University norms
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div style="padding:20px; background: #f2f2f2" id="feeform">
                                                    <br>
                                                    <h4>Fill your details and check the fee structure of All Courses</h4>
                                                    <?PHP echo form_open('#', 'id=userFeeEnquiry name=userFeeEnquiry role=form'); ?>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Your Name<sup>*</sup></label>
                                                                <input type="text" name="txtEnqName" id="txtEnqName" class="form-control" placeholder="Full Name..." />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your Email</label>
                                                                <input type="email" name="txtEnqEmail" id="txtEnqEmail" class="form-control" placeholder="Email..." />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">                    
                                                            <div class="form-group">
                                                                <label>Contact No.<sup>*</sup></label>
                                                                <input type="text" name="txtPhone" id="txtPhone" class="form-control" placeholder="Contact No..." />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Course<sup>*</sup></label>
                                                                <select class="form-control" name="txtCourse" id="txtCourse">
                                                                    <option value="0">Select Course</option>
                                                                    <?php foreach ($course as $item) { ?>
                                                                        <option value="<?php echo $item->courseID; ?>"><?php echo $item->courseID; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>                            
                                                        <div class="col-sm-12">                    
                                                            <div class="form-group" style="float: right; text-align: right">
                                                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                                            </div>
                                                            <div id="cntct_msg_1" style="float: left; padding: 5px 0px 0px 5px; min-width: 50px; height: 20px; color: #ff0000"></div>
                                                        </div>
                                                    </div>
                                                    <?PHP echo form_close(); ?>
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