<style>
    .mendatory{
        color: #ff0000;
        font-weight: bold;
        font-size: 16px;
    }
</style>
<section class="trusted-client-wrapper">
                                    <div class="col-md-12">
                                    <?php $this->load->view('templates/breadcrumb'); ?>  
                                        <h2 class="section-title wow fadeInDown" ><?php echo $title;?></h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <div class="mini-contact" id="applynow_form">
                                                <?PHP echo form_open('#','id=frmApplyNow name=frmApplyNow role=form'); ?>
                                                <div class="form-group">
                                                    <label>Your Name<span class="mendatory">*</span></label>
                                                    <?php
                                                        $data = array(
                                                            "type" => "text",
                                                            "name" => 'txtName',
                                                            "id" => 'txtName',
                                                            "class"=> 'form-control',
                                                            "placeholder" => 'Full Name',
                                                            "required" => 'required'
                                                        );
                                                        echo form_input($data);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Email<span class="mendatory">*</span></label>
                                                    <?php
                                                        $data = array(
                                                            "type" => "email",
                                                            "name" => 'txtEmail',
                                                            "id" => 'txtEmail',
                                                            "class"=> 'form-control',
                                                            "placeholder" => 'Email',
                                                            "required" => 'required'
                                                        );
                                                        echo form_input($data);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile<span class="mendatory">*</span>&nbsp;(10 digits)</label>
                                                    <?php
                                                        $data = array(
                                                            "type" => "tel",
                                                            "name" => 'txtMobile1',
                                                            "id" => 'txtMobile1',
                                                            "class"=> 'form-control',
                                                            "pattern"=>"[0-9]{10}",
                                                            "placeholder" => 'Primary Mobile',
                                                            "required" => 'required',
                                                            "maxlength" => '10'
                                                        );
                                                        echo form_input($data);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alternate Mobile &nbsp;(10 digits)</label>
                                                    <?php
                                                        $data = array(
                                                            "type" => "tel",
                                                            "name" => 'txtMobile2',
                                                            "id" => 'txtMobile2',
                                                            "class"=> 'form-control',
                                                            "pattern"=>"[0-9]{10}",
                                                            "placeholder" => 'Alternate Mobile',
                                                            "maxlength" => '10'
                                                        );
                                                        echo form_input($data);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>State From<span class="mendatory">*</span></label>
                                                    <?php
                                                        $data = array(
                                                            "name" => 'cmbState',
                                                            "id" => 'cmbState',
                                                            "class"=> 'form-control',
                                                            "required" => 'required'
                                                        );
                                                        $options1[''] = "Select";
                                                        foreach ($states as $item) {
                                                            $options1[$item->SNO."_".$item->NAME_] =  $item->NAME_;
                                                        }
                                                        echo form_dropdown($data, $options1, '');
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>City From<span class="mendatory">*</span></label>
                                                    <?php
                                                        $data = array(
                                                            "type" => "text",
                                                            "name" => 'txtCity',
                                                            "id" => 'txtCity',
                                                            "class"=> 'form-control',
                                                            "placeholder" => 'City',
                                                            "required" => 'required'
                                                        );
                                                        echo form_input($data);
                                                    ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>School to apply<span class="mendatory">*</span></label>
                                                    <?php
                                                        $data = array(
                                                            "name" => 'cmbSchool',
                                                            "id" => 'cmbSchool',
                                                            "class"=> 'form-control',
                                                            "required" => 'required'
                                                        );
                                                        $options2[''] = "Select";
                                                        $options2['0_all'] = "All";
                                                        foreach ($school as $item) {
                                                            $options2[$item->SID."_".$item->SNAME] =  $item->SNAME;
                                                        }
                                                        echo form_dropdown($data, $options2, '');
                                                    ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Degree/Diploma<span class="mendatory">*</span></label>
                                                    <?php
                                                        $data = array(
                                                            "name" => 'cmbDegreeDiploma',
                                                            "id" => 'cmbDegreeDiploma',
                                                            "class"=> 'form-control',
                                                            "required" => 'required'
                                                        );
                                                        $options3[''] = "Select";
                                                        $options3['0_all'] = "All";
                                                        foreach ($coursetype as $item) {
                                                            $options3[$item->CID."_".$item->COURSE_TYPE] =  $item->COURSE_TYPE;
                                                        }
                                                        echo form_dropdown($data, $options3, '');
                                                    ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label id="appliedcourselabel">Course<span class="mendatory">*</span></label>
                                                    <select class="form-control" name="cmbAppliedCourse" id="cmbAppliedCourse" required="required">
                                                        
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group" style="float: left">
                                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">Send</button>
                                                </div>      
                                                <div id="cntct_msg_" style="float: left; padding: 5px 0px 0px 5px; min-width: 50px; height: 20px; color: #ff0000"></div>
                                                <?PHP echo form_close(); ?>                                
                                            </div>                                       
                                        </div>  

                                    </div>
                                    <div style="clear:both"></div>
                                </section>