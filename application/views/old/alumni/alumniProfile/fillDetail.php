
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
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header">
                                        <h1><?php echo $title; ?></h1>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url('agi')?>">Home</a></li>
                                        <li><a href="#">Alumni</a></li>
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
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
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
                                                                    <p class="help-block">Note: Select image of Dimension [ <b>150x150 pixels</b> ] and format [ <b>jpg</b> ] with size [ <b>20kb</b> ]</p>
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
                                                                <label class="col-sm-3 control-label">Course<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-4">                            
                                                                    <select name="cmbCourse" class="form-control" required="required">
                                                                        <optgroup label="Technology & Sciences">
                                                                            <option value="Information Technology~fts">Information Technology</option>
                                                                            <option value="Computer Science &amp; Engineering~fts">Computer Science &amp; Engineering</option>
                                                                            <option value="Mechanical Engineering~fts">Mechanical Engineering</option>
                                                                            <option value="Electronics &amp Communications Engineering~fts">Electronics &amp Communications Engineering</option>
                                                                            <option value="Electrical &amp Electronics Engineering~fts">Electrical &amp Electronics Engineering</option>
                                                                            <option value="Diploma in Mechanical Engineering~fts">Diploma in Mechanical Engineering</option>
                                                                            <option value="Diploma in Electrical Engineering~fts">Diploma in Electrical Engineering</option>                                 
                                                                        </optgroup>
                                                                        <optgroup label="Computer Science & Applications">
                                                                            <option value="MCA~fcsa">MCA</option>
                                                                            <option value="MCA-Direct~fcsa">MCA(Direct IInd Year)</option>
                                                                            <option value="BCA~fcsa">BCA</option>
                                                                        </optgroup>
                                                                        <optgroup label="Hospitality Management">
                                                                            <option value="BHMCT~fhm">BHMCT</option>
                                                                            <option value="DHMCT~fhm">DHMCT</option>
                                                                            <option value="BHM~fhm">BHM</option>
                                                                            <option value="DHM~fhm">DHM</option>
                                                                        </optgroup>
                                                                        <optgroup label="Business and Commerce Management">
                                                                            <option value="MBA~fcbm">MBA</option>
                                                                            <option value="BBA~fcbm">BBA</option>
                                                                            <option value="BCom (Hon.)~fcbm">BCom - Honours</option>
                                                                        </optgroup>
                                                                    </select>                         
                                                                </div>
                                                                <label class="col-sm-2 control-label">Year of Passout<span class="mendatory1">*</span></label>
                                                                <div class="col-sm-3">                            
                                                                    <?php
                                                                    $data = array(
                                                                        'type' => 'text',
                                                                        'autocomplete' => 'off',
                                                                        'required' => 'required',
                                                                        'class' => 'required form-control',
                                                                        'name' => 'txtPassout',
                                                                        'id' => 'txtPassout',
                                                                        'value' => ''
                                                                    );
                                                                    echo form_input($data);
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
                                                                        'maxlength' => '10'
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

                                                                <div class="col-sm-3">
                                                                    <input type="checkbox" name="terms" id="terms" style="float:right;width:30px; height:30px">
                                                                </div>
                                                                <label class="col-sm-9 control-label" style="color:red">Check this box if you are agreed that Your Information can be used for publication purposes in any type of media.
                                                                </label>
                                                            </div>                                     
                                                            <div class="form-group" style="background: #f2f2f2; height:50px">                     
                                                                <hr>
                                                                <div class="col-lg-4 col-sm-12 col-xs-12">                                    
                                                                    <button type="reset" class="btn btn-danger col-sm-12 col-xs-12">Cancel</button>
                                                                </div>
                                                                <div class="col-lg-8 col-sm-12 col-xs-12 col-md-12">
                                                                    <input type="submit" class="btn btn-success col-sm-12 col-xs-12" name="btnSubmit" id="btnSubmit" value="Submit Detail">
                                                                </div>
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
        if (imgsize <= 20) {
            document.getElementById('__reg_err_msg').innerHTML = "";
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
        else {
            document.getElementById('__reg_err_msg').innerHTML = " <b>x Please choose image size less than 20KB</b>";
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