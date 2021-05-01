<h3>Apply Now <span style="font-size: 12px">(Admission <?php echo date('Y'); ?>)</span></h3>
<div <?php echo $class_;?>>
<?PHP echo form_open('insertOnlineRegisterNew', array('class'=>'form-horizontal', 'name'=>'frmOnlineRegister', 'id'=>'frmOnlineRegister'));?>
<div class="col-sm-12">
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-4 col-md-4">Name<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control" name="txtStudentName" id="txtStudentName" placeholder="Name" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="txtFathersName" class="control-label col-xs-12 col-sm-4 col-md-4">Father's Name<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control" name="txtFathersName" id="txtFathersName" placeholder="Father's Name" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="txtDOB" class="control-label col-xs-12 col-sm-4 col-md-4">Date of Birth<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="date" class="form-control" name="txtDOB" id="txtDOB" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="cmbCourse" class="control-label col-xs-12 col-sm-4 col-md-4">Select Course<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <select name="cmbCourse" class="form-control" required="required" style="font-size: 12px !important">
                <option value="">Select Course</option>
                <?php foreach ($colleges as $clgItem) { ?>
                <?php if($clgItem->CLGCODE != 'FE'){ // Blocked the online Registrations for B.Ed. progam?> 
                <optgroup label="<?php echo $clgItem->CLG_NAME; ?>">
                    <?php foreach ($courses as $crsItem) { ?>
                        <?php if($clgItem->CLGCODE == $crsItem->collegeID){ ?>
                            <?php if($crsItem->courseID != 'BBA') {?>
                            <option value="<?php echo $crsItem->courseID; ?>"><?php echo $crsItem->courseID; ?></option>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </optgroup>
                <?php } ?>
            <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="txtEmail" class="control-label col-xs-12 col-sm-4 col-md-4">Email<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="txtAddress" class="control-label col-xs-12 col-sm-4 col-md-4">City belongs to<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control" name="txtCity" id="txtCity" placeholder="Your City" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="txtAddress" class="control-label col-xs-12 col-sm-4 col-md-4">District belongs to<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control" name="txtDistrict" id="txtDistrict" placeholder="Your District" required="required">
        </div>
    </div>
    <div class="form-group" id="correspondanceContact__tempMain1">
        <label for="correspondanceContact" class="control-label col-xs-12 col-sm-4 col-md-4">Contact Number<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8" id="correspondanceContact__">
            <input type="text" minlength="10" maxlength="10" required="required" class="form-control" name="correspondanceContact" id="correspondanceContact" placeholder="Contact No.">
        </div>
        <!--div class="col-xs-12 col-sm-2 col-md-2" style="padding: 10px 0px" id="sendingotp">
            <div id="send__x" style="margin: auto;cursor: pointer; text-align: center; width:80px; background: #909000;padding: 0px 0px; border-radius: 5px; color: #ffffff; font-size: 11px">Send OTP</div>
        </div-->
    </div>
    <!--div class="form-group" style="display: none" id="correspondanceContact__tempMain">
        <label for="correspondanceContact" class="control-label col-xs-4">Contact Number<span style="color:#990000">*</span></label>
        <div class="col-xs-8" id="correspondanceContact__temp">
            
        </div>
    </div-->
    <!--div class="form-group" id="verification_corner">
        <label for="correspondanceContact" class="control-label col-xs-12 col-sm-4 col-md-4">OTP<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-4 col-md-4">
        <input type="text" required="required" class="form-control" name="otp_" id="otp_" placeholder="OTP">
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3" style="padding: 10px 0px;">
            <div id="verifyOTP" style="margin: auto; cursor: pointer; text-align: center; width:80px; background: #ff0000;padding: 0px 0px; border-radius: 5px; color: #ffffff; font-size: 11px">Verify OTP</div>
        </div>
    </div-->
    <hr>
    <div class="form-group">
        <div class="col-xs-12 col-md-6"></div>
        <div class="col-xs-12 col-md-3">
            <input type="submit" id="update2nd" style="margin: 5px" class="form-control btn-default" value="Submit"/>
        </div>
         <div class="col-xs-12 col-md-3">
            <input type="reset" style="margin: 5px" class="form-control btn-danger"/>
        </div>
    </div>
</div>
</div>