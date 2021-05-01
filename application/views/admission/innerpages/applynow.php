<script src="https://eequeuestorage.blob.core.windows.net/staticfiles/amrapali/ee-form-widget/form-1/widget.js"></script>
<h3>Apply Now <span style="font-size: 12px">(Admission <?php echo date('Y');?>-<?php echo (date('y')+1); ?>)</span>
<div style="float: right; color: #ff0000"><?php if($this->session->flashdata('msg')){ echo $this->session->flashdata('msg'); } ?></div></h3>
<div <?php echo $class_;?>>
<?PHP echo form_open('checkcaptcha', array('class'=>'form-horizontal', 'name'=>'frmOnlineRegister', 'id'=>'frmOnlineRegister'));?>
<div class="col-sm-12">
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-4 col-md-4">Name<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            
            <input type="text" class="form-control" name="txtStudentName" id="txtStudentName" placeholder="Name" required="required"<?php if($this->session->flashdata('name')){ echo " value='".$this->session->flashdata('name')."'";} ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="txtFathersName" class="control-label col-xs-12 col-sm-4 col-md-4">Father's Name<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control" name="txtFathersName" id="txtFathersName" placeholder="Father's Name" required="required"<?php if($this->session->flashdata('fname')){ echo " value='".$this->session->flashdata('fname')."'";} ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="txtDOB" class="control-label col-xs-12 col-sm-4 col-md-4">Date of Birth<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="date" class="form-control" name="txtDOB" id="txtDOB" required="required"<?php if($this->session->flashdata('dob')){ echo " value='".$this->session->flashdata('dob')."'";} ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="cmbCourse" class="control-label col-xs-12 col-sm-4 col-md-4">Select Course<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <select name="cmbCourse" class="form-control" required="required" style="font-size: 12px !important">
                <option value="">Select Course</option>
                <?php if($this->session->flashdata('course')){?>
                    <?php foreach ($colleges as $clgItem) { ?>
                        <?php if($clgItem->CLGCODE != 'FE'){ // Blocked the online Registrations for B.Ed. progam?> 
                        <optgroup label="<?php echo $clgItem->CLG_NAME; ?>">
                            <?php foreach ($courses as $crsItem) { ?>
                                <?php if($clgItem->CLGCODE == $crsItem->collegeID){ ?>
                                    <?php if($this->session->flashdata('course') == $crsItem->courseID){?>
                                    <option value="<?php echo $crsItem->courseID; ?>" selected="selected"><?php echo $crsItem->courseID; ?></option>
                                    <?php } else { ?>
                                    <option value="<?php echo $crsItem->courseID; ?>"><?php echo $crsItem->courseID; ?></option>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </optgroup>
                        <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                    <?php foreach ($colleges as $clgItem) { ?>
                        <?php if($clgItem->CLGCODE != 'FE'){ // Blocked the online Registrations for B.Ed. progam?> 
                        <optgroup label="<?php echo $clgItem->CLG_NAME; ?>">
                            <?php foreach ($courses as $crsItem) { ?>
                                <?php if($clgItem->CLGCODE == $crsItem->collegeID){ ?>
                                    <option value="<?php echo $crsItem->courseID; ?>"><?php echo $crsItem->courseID; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </optgroup>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="txtEmail" class="control-label col-xs-12 col-sm-4 col-md-4">Email<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" required="required"<?php if($this->session->flashdata('email')){ echo " value='".$this->session->flashdata('email')."'";} ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="txtAddress" class="control-label col-xs-12 col-sm-4 col-md-4">City belongs to<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control" name="txtCity" id="txtCity" placeholder="Your City" required="required"<?php if($this->session->flashdata('city')){ echo " value='".$this->session->flashdata('city')."'";} ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="txtAddress" class="control-label col-xs-12 col-sm-4 col-md-4">District belongs to<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control" name="txtDistrict" id="txtDistrict" placeholder="Your District" required="required"<?php if($this->session->flashdata('distt')){ echo " value='".$this->session->flashdata('distt')."'";} ?>>
        </div>
    </div>
    <div class="form-group" id="correspondanceContact__tempMain1">
        <label for="correspondanceContact" class="control-label col-xs-12 col-sm-4 col-md-4">Contact Number<span style="color:#990000">*</span></label>
        <div class="col-xs-12 col-sm-8 col-md-8" id="correspondanceContact__">
            <input type="text" minlength="10" maxlength="10" required="required" class="form-control" name="correspondanceContact" id="correspondanceContact" placeholder="Contact No."<?php if($this->session->flashdata('contact')){ echo " value='".$this->session->flashdata('contact')."'";} ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="captcha_" class="control-label col-xs-12 col-sm-4 col-md-4"></label>
        <div class="col-xs-12 col-sm-8 col-md-8" id="captcha_">
            <?php echo $cap; ?> <input type="text" name="captcha" id="captcha" required="required" />
            <span id="captchamessage"><?php if($this->session->flashdata('msg')){ echo $this->session->flashdata('msg'); } ?></span>
        </div>
    </div>
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
<?php echo form_close(); ?>
</div>