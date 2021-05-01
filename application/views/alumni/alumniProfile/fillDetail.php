<?php
    $month_ = array(
        '1' => 'JAN', 
        '2' => 'FEB',
        '3' => 'MAR',
        '4' => 'APR',
        '5' => 'MAY',
        '6' => 'JUN',
        '7' => 'JUL',
        '8' => 'AUG',
        '9' => 'SEP',
        '10'=> 'OCT',
        '11'=> 'NOV',
        '12'=> 'DEC'
    );
?>
<style>
    .mendatory1{
        color:red;
    }

</style>
<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">

                    </section>

                    <div class="container">
                        <div class="content-wrapper">
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <?php $this->load->view('templates/breadcrumb'); ?>
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content">                                      
                                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" align='center'>
                                                    <img id="blah" src="<?php echo base_url('assets/alumniPic/profile.jpg'); ?>" alt="your image" class='img-thumbnail'/>
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
                                                                'name' => 'frmAlumni_',
                                                                'id' => 'frmAlumni_',
                                                                'role' => 'form',
                                                            );
                                                            ?>
                                                            <?php echo form_open_multipart('Agi/fillAlumniDetail', $attrib_); ?>
                                                            <div class="form-group">                        
                                                                <label class="col-sm-3 control-label">Photo<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'file',
                                                                        'autocomplete' => 'off',
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtstuPhoto',
                                                                        'id' => 'txtstuPhoto',
                                                                        'value' => '',
                                                                        'onchange' => 'readURL(this)'
                                                                    );
                                                                    echo form_input($data);
                                                                    ?>
                                                                    <div style="color: #ff0000; background: #ffff00" id="__reg_err_msg"></div>
                                                                    <p class="help-block">Note: Select image of Dimension [ <b>150x150 pixels</b> ] and format [ <b>jpg</b> ] with size [ <b>35kb</b> ]</p>
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
                                                                <label class="col-sm-3 control-label">Birth Day<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-3">
                                                                    <?php
                                                                    $data = array(
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'cmbDate',
                                                                        'id' => 'cmbDate',
                                                                        'required' => 'required',
                                                                    );
                                                                    $options = array();
                                                                    $options[''] = 'Date';
                                                                    for($d=1; $d<31; $d++){
                                                                        $options[$d] = $d; 
                                                                    }
                                                                    echo form_dropdown($data, $options);
                                                                    ?>                        
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <?php
                                                                    $data = array(
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'cmbMonth',
                                                                        'id' => 'cmbMonth',
                                                                        'required' => 'required',
                                                                    );
                                                                    $options = array();
                                                                    $options[''] = 'Month';
                                                                    for($d=1; $d<12; $d++){
                                                                        $options[$d] = $month_[$d]; 
                                                                    }
                                                                    echo form_dropdown($data, $options);
                                                                    ?>                        
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Course<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-4">                              
                                                                    <?php
                                                                    $data = array(
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'cmbCourse',
                                                                        'id' => 'cmbCourse',
                                                                        'required' => 'required',
                                                                    );
                                                                    $options = array();
                                                                    $options[''] = 'Course';
                                                                    foreach($course as $item){
                                                                        $options[$item->courseID] = $item->courseID; 
                                                                        if($item->courseID == 'DHA'){
                                                                            $options['DHM -Add On'] = 'DHM -Add On';
                                                                        }
                                                                    }
                                                                    echo form_dropdown($data, $options);
                                                                    ?>                        
                                                                </div>
                                                                <label class="col-sm-2 control-label">Passout Year<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-3">                            
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'text',
                                                                        'autocomplete' => 'off',
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtPassout',
                                                                        'id' => 'txtPassout',
                                                                        'required' => 'required',
                                                                        'value' => ''
                                                                    );
                                                                    $options = array();
                                                                    for($k=date('Y'); $k>=2002; $k--){
                                                                        $options[$k] = $k; 
                                                                    }
                                                                    echo form_dropdown($data, $options);
                                                                    ?>                         
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
                                                                        'maxlength' => '10',
                                                                        'minlength' => '10'
                                                                    );
                                                                    echo form_input($data);
                                                                    ?>
                                                                    <div style="color: #ff0000; background: #ffff00" id="__ph_err_msg"></div>
                                                                    <p class="help-block"><b>Note</b>: Do not use '0' or (+91) or any prefix</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">WhatsApp Number<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'text',
                                                                        'autocomplete' => 'off',
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtWhatsappNo',
                                                                        'id' => 'txtWhatsappNo',
                                                                        'value' => '',
                                                                        'maxlength' => '10',
                                                                        'minlength' => '10'
                                                                    );
                                                                    echo form_input($data);
                                                                    ?>
                                                                    <div style="color: #ff0000; background: #ffff00" id="__ph_err_msg"></div>
                                                                    <p class="help-block"><b>Note</b>: Do not use '0' or (+91) or any prefix</p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Company<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'text',
                                                                        'autocomplete' => 'off',
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtCompany',
                                                                        'id' => 'txtCompany',
                                                                        'value' => ''
                                                                    );
                                                                    echo form_input($data);
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Designation<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'text',
                                                                        'autocomplete' => 'off',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtDesignation',
                                                                        'id' => 'txtDesignation',
                                                                        'value' => ''
                                                                    );
                                                                    echo form_input($data);
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Location<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'text',
                                                                        'autocomplete' => 'off',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtLocation',
                                                                        'id' => 'txtLocation',
                                                                        'value' => ''
                                                                    );
                                                                    echo form_input($data);
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Hometown<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'text',
                                                                        'autocomplete' => 'off',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtHometown',
                                                                        'id' => 'txtHometown',
                                                                        'value' => ''
                                                                    );
                                                                    echo form_input($data);
                                                                    ?>
                                                                </div>
                                                            </div>                     
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Testimonial</label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $data = array(
                                                                        'rows' => '3',
                                                                        'autocomplete' => 'off',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtSuggestion',
                                                                        'id' => 'txtSuggestion',
                                                                        'value' => ''
                                                                    );
                                                                    echo form_textarea($data);
                                                                    ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                                                    <label class="control-label" style="color:red; float: left; text-align: left;">
                                                                        <input type="checkbox" name="allowed" id="allowed" class="col-sm-2" id="terms" style="float:left;width:20px; height:20px; margin: 2px">
                                                                        Check this box if you allow AGI to use your information for promotional purposes in any type of media.
                                                                    </label>
                                                                </div>
                                                            </div>                                     
                                                            <div class="form-group">                     
                                                                <hr>
                                                                <div class="col-lg-7 col-sm-12 col-xs-12 col-md-12" style="margin: 1px">
                                                                    <input type="submit" class="btn btn-success col-lg-12 col-sm-12 col-xs-12 col-md-12" name="btnSubmit" id="btnSubmit" value="Submit Detail">
                                                                </div>
                                                                <div class="col-lg-4 col-sm-12 col-xs-12" style="margin: 1px; text-align: left">                                    
                                                                    <button type="reset" class="btn btn-danger col-lg-12 col-sm-12 col-xs-12 col-md-12">Cancel</button>
                                                                </div>
                                                                <div style="clear: both; height:1px"></div>
                                                            </div>
                                                            <?php form_close(); ?>
                                                        </div>
                                                    </section>        
                                                </div><!--/.col-->                                                   
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->

<script>
    function readURL(input) {

        var imgpath = document.getElementById('txtstuPhoto');

        var img = imgpath.files[0].size;
        var imgsize = img / 1024;
        if (imgsize <= 35) {
            document.getElementById('__reg_err_msg').innerHTML = "";
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                            .attr('src', e.target.result)
                            .width(150)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        else {
            document.getElementById('__reg_err_msg').innerHTML = " <b>x Please choose image size less than 35KB</b>";
            var input = $("#txtstuPhoto");
            input.replaceWith(input.val('').clone(true));
        }
    }

    function EnableSubmit(val)
    {

        var sbmt = document.getElementById("submit");

        if (val.checked == true)
        {
            sbmt.disabled = false;
        }
        else
        {
            sbmt.disabled = true;
        }
    }
</script>