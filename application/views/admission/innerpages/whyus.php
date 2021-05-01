<?php
	$differences = 'Real-world courses approved by AICTE, UGC, PCI, NCTE and State Government~Be job ready~
Learn from experienced Faculty~Good Employment Record~Connected with Global Companies~Ranked High~Routine Corporate Exposure~Well Equipped Labs with latest equipments~Focus on Quality Academic Delivery Process~Lush Green Campus';

	$strength = '200+ Full Time Faculty Members~Research based Teaching Learning Methodology~Focus on Individual Student through Mentorship Programme~Advanced Computing Facilities including WIFI Campus~Regular Training and Skill Enhancement Sessions~Exposure to Industry trade shows and fairs~Frequent Expert Sessions~One of the Best Libraries across Uttarakhand~Consistently ranked amongst the Top Colleges~Academic and Corporate Tie Ups~More than 700 Placements in 2019 -20 Academic Session~Indoor and Outdoor Sporting Facilities~Technical and Cultural Events are conducted round the Year';
?>
<h3>Why us</h3>

<div class="col-xs-12 col-md-6 col-sm-6">
	<p>
		<h5>The AGI difference</h5>
		<?php $points = explode('~', $differences); ?>
		<?php for ($i=0; $i<count($points); $i++) { ?>
			<div class="differences">
				<?php echo $points[$i];?>
			</div>
		<?php } ?>
	</p>
</div>
<div class="col-xs-12 col-md-6 col-sm-6">
	<p>
		<h5>Our Strengths</h5>
		<?php $points = explode('~', $strength); ?>
		<?php for ($i=0; $i<count($points); $i++) { ?>
			<div class="differences">
				<?php echo $points[$i];?>
			</div>
		<?php } ?>
	</p>
</div>
<div <?php echo $class_;?>><a name="enquiry"></a> 
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
                                                <!--div class="form-group" id="contactVerification">
                                                    <div class="col-sm-8" id="fullTextForOtp">
                                                        <span id="clickforotp" style="color: #000080; cursor: pointer">Click here...</span> to get OTP for verification
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="txtOTP" id="txtOTP" class="form-control" placeholder="OTP" required="required" minlength="10" maxlength="10" style="float: right" />
                                                        <div id="verifyOTP_enquiry" style="cursor: pointer; text-align: center; width:80px; background: #ff0000;padding: 0px 0px; border-radius: 5px; color: #ffffff; font-size: 11px">Verify OTP</div>
                                                    </div>
                                                </div-->
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
                                                    <button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
                                                </div>
                                                <div id="cntct_msg_" style="float: left; padding: 5px 0px 0px 5px; min-width: 50px; height: 20px; color: #ff0000"></div>
                                            </div>
                                            <?PHP echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>