<?php
        $str = '';
        $i=0;
        foreach ($course as $item) {
            if($str == ''){
                $str = $item->courseID;
            } else {
                $str = $str . "," .$item->courseID;
            }
        }
    $crs = explode(",", $str);

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
    .profile{
        position: relative;
        float:left;
        width:250px;
        height:200px;
        background: #ffffe6;
        box-shadow: 1px 1px 1px #e6e6e4;
        padding:10px;
        margin:10px;
    }
    .pname{
        color: #08C;
        font-weight:400;
        line-height: 10px;
        margin-top: 12px;
    }
    .presume{
        color: #c7254e;
        font-weight:400;
    }
    .cross{
        position: absolute;
        top: 0px;
    }

    .enable{
        position: absolute;
        top: 0px;
        right:0px;
    }

    .disable{
        position: absolute;
        top: 0px;
        right:0px;
    }
    .textfield{
    	font-size: 11px;
    	font-family: verdana;
    	border: #f0f0f0 solid 0px;
    	border-bottom: #f0f0f0 solid 1px;
    	color: #0000ff;
    }
    #msg_update{
        position: fixed;
        z-index: 999999;
        background: #d0d0d0;
        border-radius: 5px;
        padding: 5px 8px;
        color: #fff;
        font-family: verdana;
        top: 20%;
        left: 0;
        right:0;
        width: 150px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 1px 2px 3px grey;
        opacity: .8;
        text-align: center;
        display: none
    }
    #msg_error{
        position: fixed;
        z-index: 999999;
        background: #ff0000;
        border-radius: 5px;
        padding: 5px 8px;
        color: #fff;
        font-family: verdana;
        top: 20%;
        left: 0;
        right:0;
        width: 150px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 1px 2px 3px grey;
        opacity: .8;
        text-align: center;
        display: none
    }
</style>

<body>
    <div id="msg_update">Saving...</div>
    <div id="msg_error">Error...</div>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">
                    </section>
                </div>
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
                                            <h4 align="left">&nbsp;&nbsp;Editable Profile 
                                                <span style="float:right;"><h4><a href="<?php echo site_url('AlumniProfileLogin');?>">Logout</a></h4></span>
                                            </h4>                                        
                                                <div class="panel table-responsive">      
                                                	<table class="table">
                                                	<tr>
                                                        <th></th>
                                                		<th>ID</th>
                                                		<th style="max-width: 70px;">Photo</th>
                                                		<th>Name & Designation</th>
                                                		<th>Current Company & Location</th>
                                                		<th>Course & Passing year</th>
                                                		<th>Change Photo</th>
                                                	</tr>
                                                <?php foreach ($fac_profile as $item) { ?>
                                                	<tr id="delete_<?php echo $item->id;?>">
                                                        <td style="background: #FFCFCF; text-align: center; vertical-align: top; font-size: 11px; font-family: verdana"><b  class="delete_alumni" id="del_<?php echo $item->id;?>" style="background: #ff0000; color: #ffffff; border-radius: 5px; padding: 3px 6px; cursor: pointer">X</b></td>
                                                		<td>
                                                            <?php echo $item->id;?><br>
                                                            <input type="checkbox"<?php if($item->status==1){echo ' checked="checked"';}?> id="<?php echo $item->id; ?>_status_txtStatus" name="txtStatus" value="<?php echo $item->status; ?>" class="textfield alumni_update_profile">
                                                        </td>
                                                		<td id="pic_<?php echo $item->id;?>">
                                                			<?php if($item->pic == 'x' || $item->pic == ''){ ?>
                                                				<img class="media-object img-responsive" src="<?php echo base_url('assets/alumniPic/sample.jpg'); ?>" alt="Amrapali alumni - <?php echo $item->name; ?>" style="max-width: 40px;">
                                                			<?php } else {?>
                                                				<img class="media-object img-responsive" src="<?php echo base_url('assets/alumniPic/' . $item->pic); ?>" alt="Amrapali alumni - <?php echo $item->name; ?>" style="max-width: 70px;">
                                                			<?php } ?>
                                                		</td>
                                                		<td>
                                                            <?php 
                                                                $dob_   = explode('-',$item->DOB);
                                                                $dt_    = $dob_[0];
                                                                $mnth_  = $dob_[1];
                                                            ?>
                                                			Name<br>
                                                			<input type="text" name="txtName" id="<?php echo $item->id; ?>_name_txtName" value="<?php echo $item->name;?>" class="textfield alumni_update_profile"><br>
                                                            Birth Day (DD-MM)<br>
                                                            <select name="txtDate" id="<?php echo $item->id; ?>_DOB_txtDate" class="textfield alumni_update_profile">
                                                                <option value="0" Selected="selected">XX</option>
                                                                <?php for ($i=1; $i<31; $i++) { ?>
                                                                    <?php if($i == $dt_){ ?>
                                                                        <option value="<?php echo $i;?>" Selected="selected"><?php echo $i;?></option>
                                                                    <?php } else {?>
                                                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select>
                                                            <select name="txtMonth" id="<?php echo $item->id; ?>_DOB_txtMonth" class="textfield alumni_update_profile">
                                                                <option value="XX" Selected="selected">XX</option>
                                                                <?php for ($i=1; $i<12; $i++) { ?>
                                                                    <?php if($i == $mnth_){ ?>
                                                                        <option value="<?php echo $i;?>" Selected="selected"><?php echo $month_[$i];?></option>
                                                                    <?php } else {?>
                                                                        <option value="<?php echo $i;?>"><?php echo $month_[$i];?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select><br>
                                                            Mobile Number<br>
                                                            <input type="text" name="txtMobileNo" id="<?php echo $item->id; ?>_mobile_txtMobileNo" value="<?php echo $item->mobile;?>" class="textfield alumni_update_profile" maxlength="10" minlength="10"><br>
                                                            Whats App Number<br>
                                                            <input type="text" name="txtWhatsAppNo" id="<?php echo $item->id; ?>_whatsappno_txtWhatsAppNo" value="<?php echo $item->whatsappno;?>" class="textfield alumni_update_profile" style="color: #009000" maxlength="10" minlength="10">
                                                		</td>
                                                		<td>
                                                            Designation<br>
                                                            <input type="text" name="txtDesignation" id="<?php echo $item->id; ?>_designation_txtDesignation" value="<?php echo $item->designation;?>" class="textfield alumni_update_profile"><br><br>
                                                			Current Company<br>
                                                			<input type="text" name="txtCompany" id="<?php echo $item->id; ?>_company_txtCompany" value="<?php echo $item->company;?>" class="textfield alumni_update_profile"><br><br>
                                                			Location<br>
                                                			<input type="text" name="txtLocation" id="<?php echo $item->id; ?>_location_txtLocation" value="<?php echo $item->location;?>" class="textfield alumni_update_profile">
                                                		</td>
                                                		<td>
                                                			Course<br>
                                                            <select name="txtCourse" id="<?php echo $item->id; ?>_course_txtCourse" class="textfield alumni_update_profile">
                                                                <?php for ($i=0; $i<count($crs); $i++) { ?>
                                                                    <?php if($crs[$i] == $item->course){ ?>
                                                                        <option value="<?php echo $crs[$i];?>" Selected="selected"><?php echo $crs[$i];?></option>
                                                                    <?php } else {?>
                                                                        <option value="<?php echo $crs[$i];?>"><?php echo $crs[$i];?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select><br><br>
                                                			Passing Year<br>
                                                            <select name="txtPassingYear" id="<?php echo $item->id; ?>_passout_txtPassingYear" style="width: 100px" class="textfield alumni_update_profile">
                                                                <?php for ($i=date('Y'); $i>2000; $i--) { ?>
                                                                    <?php if($i == $item->passout){ ?>
                                                                        <option value="<?php echo $i;?>" Selected="selected"><?php echo $i;?></option>
                                                                    <?php } else {?>
                                                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select><br><br>
                                                            Allowed Promotion in any media<br>
                                                            <input type="checkbox"<?php if($item->allowed==1){echo ' checked="checked"';}?> id="<?php echo $item->id; ?>_allowed_txtallowed" name="txtallowed" value="<?php echo $item->allowed; ?>" class="textfield alumni_update_profile">
                                                		</td>
                                                		<td>
                                                            <form name="frmPicUpload_<?php echo $item->id;?>" id="frmPicUpload_<?php echo $item->id;?>" enctype="form-multipart">
                                                                <input type="file" class="alumni_pic_upload" name="txtFileUpload_<?php echo $item->id;?>" id="<?php echo $item->id;?>_pic_txtFileUpload" style="width: 80px; font-size: 11px" value="pic upload">
                                                                <input type="hidden" value="<?php echo $item->id;?>" id="txtAlumniID_<?php echo $item->id;?>" name="txtAlumniID_<?php echo $item->id;?>">
                                                                <span style="font-family: verdana; font-size: 10px; color: #0000AA">1). [.jpg & .jpeg only]<br>2). [upto 35KB Size only]</span>
                                                            </form>
                                                        </td>
                                                	</tr>
                                                    <tr>
                                                        <td colspan="7" style="height: 1px; padding: 1px; background: #fff"></td>
                                                    </tr>
                                                <?php } ?>          
                                                	</table>                                           
                                                </div>     
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
<!--/#title-->