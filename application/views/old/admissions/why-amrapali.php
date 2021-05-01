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
                                                <img src="<?php echo base_url('assets/img/all-pages.png'); ?>" class="img-responsive" alt=""> 

                                                <div class="job-details" style="margin-top: 20px;">
                                                    <h2>We Call Ourself an Institution ready for the Real World</h2>
                                                    <p>At AGI, we don't just teach theory. We teach you how to put theory into practice. Study with us so that you can  take your ideas and make them REAL. </p>
                                                    
                                                    <div class="col-sm-12" style="clear: both; padding: 5px"></div>
                                                    <div class="col-sm-12" style="clear: both;"><p><b>The AGI difference:</b></p></div>
                                                    <div class="col-sm-12" style="clear: both; padding: 5px"></div>
                                                    <div class="col-sm-6">
                                                        <ul class="check-square">
                                                            <li>Real-world courses</li>
                                                            <li>Be job ready</li>
                                                            <li>Learn from experienced Faculty</li>
                                                            <li>Green Campus</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="check-square">
                                                            <li>Good Employment Record</li>
                                                            <li>Connected with global companies</li>
                                                            <li>Ranked High</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-12" style="clear: both; padding: 15px"></div>
                                                    <div class="col-sm-12" style="clear: both;"><p><b>Our Strength:</b></p></div>
                                                    <div class="col-sm-12" style="clear: both; padding: 5px"></div>
                                                    <div class="col-sm-6">
                                                        <dl>
                                                            <dd>200+ Full Time Faculty Members</dd>
                                                            <dd>Research based Teaching Learning Methodology</dd>
                                                            <dd>Focus on Individual Student through Mentorship Programme</dd>
                                                            <dd>Advanced Computing Facilities including WIFI Campus</dd>
                                                            <dd>Regular Training and Skill Enhancement Sessions.</dd>
                                                            <dd>Frequent Expert Sessions.</dd>
                                                        </dl>  
                                                    </div> 
                                                    <div class="col-sm-6">
                                                        <dl>
                                                            <dd>One of the Best Libraries across Uttarakhand</dd>
                                                            <dd>Consistently ranked amongst the Top Colleges</dd>
                                                            <dd>Academic and Corporate Tie Ups</dd>
                                                            <dd>More than 700 Placements in 2016-17 Academic Session</dd>
                                                            <dd>Indoor and Outdoor Sporting Facilities</dd>
                                                            <dd>Technical and Cultural Events are conducted round the Year</dd>
                                                        </dl>
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
                                <a name="enquiry"></a> 
                                <div class="row">
                                    <div class="col-sm-12" style="clear: both; padding: 15px"></div>
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <h3>Submit Your Query here...</h3>
                                        <div id="Overall_Message">
                                            <?PHP echo form_open('#','id=frmScoialEnquiry name=frmScoialEnquiry role=form'); ?>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Name<sup>*</sup></label>
                                                    <input type="text" name="txtEnqName" id="txtEnqName" class="form-control" placeholder="Full Name..." />
                                                </div>
                                                <div class="form-group">
                                                    <label>Your City<sup>*</sup></label>
                                                    <input type="text" name="txtEnqCity" id="txtEnqCity" class="form-control" placeholder="Your City..." />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Email</label>
                                                    <input type="email" name="txtEnqEmail" id="txtEnqEmail" class="form-control" placeholder="Email..." />
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact No.<sup>*</sup></label>
                                                    <input type="text" name="txtPhone" id="txtPhone" class="form-control" placeholder="Contact No..." required="required" minlength="10" maxlength=10 />
                                                    <div id="verified_contact" style="color: #900000; font-size: 18px"></div>
                                                </div>
                                                <div class="form-group" id="contactVerification">
                                                    <div class="col-sm-8" id="fullTextForOtp">
                                                        <span id="clickforotp" style="color: #000080; cursor: pointer">Click here...</span> to get OTP for verification
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="txtOTP" id="txtOTP" class="form-control" placeholder="OTP" required="required" minlength="10" maxlength="10" style="float: right" />
                                                        <div id="verifyOTP_enquiry" style="cursor: pointer; text-align: center; width:80px; background: #ff0000;padding: 0px 0px; border-radius: 5px; color: #ffffff; font-size: 11px">Verify OTP</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="clear: both;"><hr></div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Course<sup>*</sup></label>
                                                    <select class="form-control" name="txtCourse" id="txtCourse" required="required">
                                                        <option value="">Select Course</option>
                                                        <?php foreach($course as $item){?>
                                                        <option value="<?php echo $item->courseID;?>"><?php echo $item->courseID;?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Enquiry</label>
                                                    <textarea name="txtWriteHere" rows="5" id="txtWriteHere" class="form-control" placeholder="Write here..." required="required"></textarea>
                                                </div>
                                                <div class="form-group" style="border-radius: 5px; background: #BEFF33; color: #253601; float: left; padding: 3px">
                                                    <input type="checkbox" name="expertToTalk" id="expertToTalk" >
                                                    I need an expert to talk for the selected course.
                                                </div>
                                                <div class="form-group" style="float: right; text-align: right">
                                                    <button type="submit" disabled="disabled" class="btn btn-default" name="submit" id="submit">Submit</button>
                                                </div>
                                                <div id="cntct_msg_" style="float: left; padding: 5px 0px 0px 5px; min-width: 50px; height: 20px; color: #ff0000"></div>
                                            </div>
                                            <?PHP echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->