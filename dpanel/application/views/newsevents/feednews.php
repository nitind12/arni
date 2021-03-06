<div class="col-lg-12">
    <div class="panel panel-default"<?php echo $style_; ?>>
        <div class="panel-heading">
            Feed News &amp; Events here...
        </div>
        <div class="panel-body">
            <?php echo form_open_multipart('newsevents/feedNews', array('name' => 'frmNewsEvents', 'id' => 'frmNewsEvents', 'role' => 'form')); ?>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group col-sm-12">
                        <label>Subject</label>
                        <?php
                        $data = array(
                            'type' => 'text',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'placeholder' => 'subject of Detailed News/ Event',
                            'class' => 'required form-control',
                            'name' => 'txtSubject',
                            'id' => 'txtSubject',
                            'value' => ''
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div class="form-group col-sm-12">
                        <label>News <span style="font-size: 11px; color: #808080; font-weight: normal; font-style: italic">max <span id='wp' style='color:#ff0000; font-weight:bold'>450</span> characters allowed</span></label></label>
                        <?php
                        $data = array(
                            'rows' => '3',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'placeholder' => 'News/ Event',
                            'class' => 'required form-control',
                            'name' => 'txtNews',
                            'id' => 'txtNews',
                            'value' => '',
                            'style' => 'height: 120px;',
                            'maxlength' => '450',
                            'onkeyup' => 'validateMe(this)'
                        );
                        echo form_textarea($data);
                        ?>
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Blog Link (if any)</label>
                        <?php
                        $data = array(
                            'type' => 'text',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'placeholder' => 'subject of Detailed News/ Event',
                            'class' => 'required form-control',
                            'name' => 'txtBlogLink',
                            'id' => 'txtBlogLink',
                            'value' => 'x'
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <!--div class="form-group col-sm-12">
                        <label>File input <span style="font-size: 11px; color: #808080; font-weight: normal; font-style: italic">Only <b>[ .doc| .docx| .pdf| .jpg| .png ]</b> are allowed</span></label>
                        <?php
                        /*$data = array(
                            'type' => 'file',
                            'autocomplete' => 'off',
                            'class' => 'required form-control',
                            'name' => 'txtInputFile',
                            'id' => 'txtInputFile',
                            'value' => ''
                        );
                        echo form_input($data);
                        */
                        ?>
                    </div-->
                    <div style="color: #ff0000; font-weight: bold; font-style: italic; padding: 5px"><?php echo $this->session->flashdata('feed_msg_'); ?></div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group col-sm-12">
                        <label>Start Date</label>
                        <?php
                        $data = array(
                            'type' => 'date',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'class' => 'required form-control',
                            'name' => 'txtStartDate',
                            'id' => 'txtStartDate',
                            'min' => date('Y-m-d'),
                            'value' => '',
                            'onchange' => 'setDeptDate(txtStartDate, txtEndDate)'
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div class="form-group col-sm-12">
                        <label>End Date</label>
                        <?php
                        $data = array(
                            'type' => 'date',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'class' => 'required form-control',
                            'name' => 'txtEndDate',
                            'id' => 'txtEndDate',
                            'min' => date('Y-m-d'),
                            'value' => ''
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="col-sm-6">
                            <button type="reset" class="btn btn-flickr col-sm-12"> Reset </button>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary col-sm-12"> Submit </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    function validateMe(dataMe) {
        // alert(dataMe.value);
        var count = $(dataMe).val().length;
        $("#wp").html(450 - count);
    }
</script>