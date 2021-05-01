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
                                        <li><a href="#">Faculty Profile</a></li>
                                        <li class="active"><?php echo $title; ?></li>
                                    </ol>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    
                <div class="container">
                    <div class="content-wrapper">
                        <div class="inner-content">
                                                       
                            <header class="entry-header">                                                    
                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                <br>
                            </header><!-- /.entry-header -->
                            
                            <div class="row four-column">
                                <div id="grid">
                                       <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" align='center'>
                                            <img id="blah" src="<?php echo base_url('assets/facultyPic/profile.jpg'); ?>" alt="your image" class='img-thumbnail'/>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    <div style="float: right; color: #ff0000; padding: 5px;"><?php echo $this->session->flashdata('reg_msg_'); ?></div>
                                                </header>
                                                <div class="panel-body">
                                                    <?php
                                                    $attrib_ = array(
                                                        'class' => 'form-horizontal',
                                                        'name' => 'frmFaculty_',
                                                        'id' => 'frmFaculty_',
                                                    );
                                                    ?>
                                                    <?php echo form_open_multipart('fillFacultyDetail', $attrib_); ?>
                                                    <div class="form-group">                        
                                                        <label class="col-sm-3 control-label mendatory1">Photo<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'file',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtfacPhoto',
                                                                'id' => 'txtfacPhoto',
                                                                'value' => '',
                                                                'onchange' => 'readURL(this)'
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                            <div style="color: #ff0000; background: #ffff00" id="__reg_err_msg"></div>
                                                            <p class="help-block">Note: Select image of Dimension [ <b>150x150 pixels</b> ] and format [ <b>jpg</b> ]</p>
                                                        </div>
                                                    </div>                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Full Name<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtFullName',
                                                                'id' => 'txtFullName',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Date Of Birth<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'date',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtDOB',
                                                                'id' => 'txtDOB',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Gender<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <div class="radio col-sm-2">
                                                                <label>
                                                                    <input type="radio" name="optGender" id="optStuMale" value="M">
                                                                    Male
                                                                </label>
                                                            </div>
                                                            <div class="radio col-sm-2">
                                                                <label>
                                                                    <input type="radio" name="optGender" id="optStuFemale" value="F">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Email<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'email',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtEmail',
                                                                'id' => 'txtEmail',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Contact Number<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtMobile',
                                                                'id' => 'txtMobile',
                                                                'value' => '',
                                                                'maxlength' => '10'
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                            <div style="color: #ff0000; background: #ffff00" id="__ph_err_msg"></div>
                                                            <p class="help-block"><b>Note</b>: Do not use '0' or (+91) or any prefix</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Educational Qualification<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtQualification',
                                                                'id' => 'txtQualification',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Area of Specialization<span class="mendatory1">*</span></label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $data = array(
                                                                'rows' => '3',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtSpecialization',
                                                                'id' => 'txtSpecialization',
                                                                'value' => ''
                                                            );
                                                            echo form_textarea($data);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="background: #FEA40F; color:#fff">
                                                        <h3 style="margin-left:5em; margin-top:1em;">Work Experience (in years and months)</h3>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Teaching</label>
                                                        <div class="col-sm-3">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'autocomplete' => 'off',
                                                                'required' => 'required',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtTeaching',
                                                                'id' => 'txtTeaching',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>

                                                        <label class="col-sm-2 control-label">Research</label>
                                                        <div class="col-sm-3">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'autocomplete' => 'off',                               
                                                                'class' => 'required form-control',
                                                                'name' => 'txtResearch',
                                                                'id' => 'txtResearch',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Industry</label>
                                                        <div class="col-sm-3">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'autocomplete' => 'off',                                
                                                                'class' => 'required form-control',
                                                                'name' => 'txtIndustry',
                                                                'id' => 'txtIndustry',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>

                                                        <label class="col-sm-2 control-label">Other</label>
                                                        <div class="col-sm-3">
                                                            <?php
                                                            $data = array(
                                                                'type' => 'text',
                                                                'autocomplete' => 'off',                                
                                                                'class' => 'required form-control',
                                                                'name' => 'txtOther',
                                                                'id' => 'txtOther',
                                                                'value' => ''
                                                            );
                                                            echo form_input($data);
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="background: #FEA40F; color:#fff">
                                                        <h3 style="margin-left:5em; margin-top:1em;">Subject Taught (till date)</h3>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">At Graduate Level</label>
                                                        <div class="col-sm-3">
                                                            <?php
                                                            $data = array(
                                                                'rows' => '4',
                                                                'autocomplete' => 'off',
                                                                'class' => 'required form-control',
                                                                'name' => 'txtGraduateSubject',
                                                                'id' => 'txtGraduateSubject',
                                                                'value' => ''
                                                            );
                                                            echo form_textarea($data);
                                                            ?>
                                                        </div>
                                                        <label class="col-sm-2 control-label">At Post-Graduate Level</label>
                                                        <div class="col-sm-3">
                                                            <?php
                                                            $data = array(
                                                                'rows' => '4',
                                                                'autocomplete' => 'off',                                
                                                                'class' => 'required form-control',
                                                                'name' => 'txtPGraduateSubject',
                                                                'id' => 'txtPGraduateSubject',
                                                                'value' => ''
                                                            );
                                                            echo form_textarea($data);
                                                            ?>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group" style="background: #FEA40F; color:#fff">
                                                        <h3 style="margin-left:5em; margin-top:1em;">Research Guidance (till date)</h3>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Bachelor's</label>
                                                        <div class="col-sm-2">
                                                            <select name='researchBach' id='researchBach' class='form-control'>
                                                                <?php for ($i = 0; $i <= 50; $i++) { ?>
                                                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-2 control-label">Master's</label>
                                                        <div class="col-sm-2">
                                                            <select name='researchMaster' id='researchMaster' class='form-control'>
                                                                <?php for ($i = 0; $i <= 50; $i++) { ?>
                                                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-2 control-label">Doctorate's</label>
                                                        <div class="col-sm-2">
                                                            <select name='researchDoctorate' id='researchDoctorate' class='form-control'>
                                                                <?php for ($i = 0; $i <= 50; $i++) { ?>
                                                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group" style="background: #FEA40F; color:#fff">
                                                        <h3 style="margin-left:5em; margin-top:1em;">Other Detail (till date)</h3>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Conference/ Seminar Attended</label>
                                                        <div class="col-sm-2">
                                                            <select name='conference' id='conference' class='form-control'>
                                                                <?php for ($i = 0; $i <= 50; $i++) { ?>
                                                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-2 control-label">Projects Carried</label>
                                                        <div class="col-sm-2">
                                                            <select name='projects' id='projects' class='form-control'>
                                                                <?php for ($i = 0; $i <= 50; $i++) { ?>
                                                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-2 control-label">Research Publication</label>
                                                        <div class="col-sm-2">
                                                            <select name='researchPub' id='researchPub' class='form-control'>
                                                                <?php for ($i = 0; $i <= 50; $i++) { ?>
                                                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group" style="background: #f2f2f2; height:50px"> 
                                                        <hr>
                                                        <div class="col-lg-4 col-sm-12 col-xs-12">                                    
                                                            <button type="reset" class="btn btn-danger col-sm-12 col-xs-12">Cancel</button>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-12 col-xs-12 col-md-12">
                                                            <button type="submit" class="btn btn-success col-sm-12 col-xs-12" name="cmbRegSubmit" id="cmbRegSubmit">Submit Detail</button>
                                                        </div>
                                                    </div>
                                                    <?php form_close();?>
                                                </div>
                                            </section>        
                                        </div><!--/.col-->                                
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->
<!--/#title-->

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>