    <body>
    <?php $this->load->view('tagmanager'); ?>
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
                                            <h1><?php echo $title;?></h1>
                                        </div>
                                        <ol class="breadcrumb">
                                            <li><a href="<?php echo site_url();?>">Home</a></li>
                                            <li class="active"><?php echo $title;?></li>
                                        </ol>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </section>


                        <div class="container">
                    <div class="content-wrapper">
                        <div class="contact-us-wrapper">
                            <div class="row">
                                <?PHP echo form_open('volunteer','id=frmVolunteers name=frmVolunteers role=form'); ?>
                                <div class="col-sm-12">
                                    <header class="entry-header">       
                                        <?php $this->load->view('templates/ticker-news'); ?>
                                        <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                    </header><!-- /.entry-header -->
                                </div>
                                <div class="col-sm-12">
                                    <div id="vol_msg_" style="min-width: 50px; width: 50%; min-height: 20px; color: #ff0000;"><?php echo $this->session->flashdata('vol_msg');?></div>
                                </div>
                                <div class="col-sm-12" style="height: 15px"></div>
                                <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Volunteer Name</label>
                                            <input type="text" name="txtVol_Name" id="txtVol_Name" class="form-control" placeholder="Volunteer Name..." required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Volunteer Mobile Number</label>
                                            <input type="text" name="txtVol_Mob" id="txtVol_Mob" class="form-control" placeholder="Volunteer Mobile No..." required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Volunteer Email</label>
                                            <input type="text" name="txtVol_Email" id="txtVol_Email" class="form-control" placeholder="Volunteer Email..." required="required" />
                                        </div>
                                </div>
                                <div class="col-sm-6" style="color: #000090 !important;">
                                        <div class="form-group">
                                            <label>Volunteer's College</label>
                                            <?php 
                                                $data = array(
                                                    'class' => 'required form-control m-bot8',
                                                    'name' => 'cmbCollege',
                                                    'id' => 'cmbCollege',
                                                    'required' => 'required',
                                                );
                                                $options = array();
                                                $options[''] = 'Select College';
                                                foreach ($college as $clgitem) {
                                                    $options[$clgitem->CLGCODE] = $clgitem->CLG_NAME;
                                                }
                                                echo form_dropdown($data, $options, 'x');
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Volunteer's Course</label>
                                            <?php 
                                                $data = array(
                                                    'class' => 'required form-control m-bot8',
                                                    'name' => 'cmbCourse',
                                                    'id' => 'cmbCourse',
                                                    'required' => 'required',
                                                );
                                                $options = array();
                                                $options[''] = 'Select Course';
                                                foreach ($course as $crsitem) {
                                                    $options[$crsitem->COURSECODE] = $crsitem->CRS_NAME;
                                                }
                                                echo form_dropdown($data, $options, 'x');
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Volunteer's Semester</label>
                                            <?php 
                                                $data = array(
                                                    'class' => 'required form-control m-bot8',
                                                    'name' => 'cmbSem',
                                                    'id' => 'cmbSem',
                                                    'required' => 'required',
                                                );
                                                $options = array();
                                                $options[''] = 'Select Semester';
                                                for ($loop1 = 1; $loop1<=8; $loop1++) {
                                                    $options[$loop1] = "Sem " . $loop1;
                                                }
                                                echo form_dropdown($data, $options, 'x');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="color: #900000 !important;">
                                        <div class="form-group">
                                            <label>Event</label>
                                            <?php
                                                $data = array(
                                                    'class' => 'required form-control m-bot8',
                                                    'name' => 'cmbEvent',
                                                    'id' => 'cmbEvent',
                                                    'required' => 'required',
                                                );
                                                $options = array();
                                                $options[''] = 'Select Event';
                                                foreach ($events as $evntItem) {
                                                    $options[$evntItem->EVENTID] = $evntItem->NAME_;
                                                }
                                                echo form_dropdown($data, $options, 'x');
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Committee</label>
                                            <?php 
                                                $data = array(
                                                    'class' => 'required form-control m-bot8',
                                                    'name' => 'cmbCommittee',
                                                    'id' => 'cmbCommittee',
                                                    'required' => 'required',
                                                );
                                                $options = array();
                                                $options[''] = 'Select Committee';
                                                /*foreach ($committee as $cmtItem) {
                                                    $options[$cmtItem->CMTID] = $cmtItem->C_NAME;
                                                }*/
                                                echo form_dropdown($data, $options, 'x');
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <?php 
                                                $data = array(
                                                    'class' => 'required form-control m-bot8',
                                                    'name' => 'cmbPosition',
                                                    'id' => 'cmbPosition',
                                                    'required' => 'required',
                                                );
                                                $options = array();
                                                $options[''] = 'Select Position';
                                                /*foreach ($positions as $posItem) {
                                                    $options[$posItem->POSID] = $posItem->P_NAME;
                                                }*/
                                                echo form_dropdown($data, $options, 'x');
                                            ?>
                                        </div>    
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group" style="float: right">
                                        <button type="submit" class="btn btn-danger" name="submit" id="submit">Click to Volunteer</button>
                                    </div>  
                                </div>
                                <?PHP echo form_close(); ?>

                            
                           

                        </div><!-- /.content-wrapper -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->