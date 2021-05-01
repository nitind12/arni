<body>
	<style>
		.verifiedContact{
			font-size: 18px;
			font-weight: bold;
			color: #037909;
		}
	</style>
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
                                        <li><a href="#">Admissions</a></li>
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
                                            <header class="entry-header">       
                                                <?php $this->load->view('templates/ticker-news'); ?>
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                
                                            <div class="entry-content">  
                                            	<h3>Address and Contacts</h3>
									        	<?PHP echo form_open('Agi/updateRegistration1', array('class'=>'form-horizontal'));?>
									        	<div class="col-sm-6">
										        	<p>&nbsp;</p>
										        		<div class="form-group">
												            <label for="CorrespondanceAddress" class="control-label col-xs-4">Correspondance<span style="color:#990000">*</span></label>
												            <div class="col-xs-8">
												                <textarea class="form-control" name="Correspondance" placeholder="Correspondance Address" required="required"></textarea>
												            </div>
												        </div>
												        <div class="form-group" id="correspondanceContact__tempMain1">
												            <label for="correspondanceContact" class="control-label col-xs-4">Contact Number<span style="color:#990000">*</span></label>
												            <div class="col-xs-6" id="correspondanceContact__">
												                <input type="text" minlength="10" maxlength="10" required="required" class="form-control" name="correspondanceContact" id="correspondanceContact" placeholder="Correspondance Contact No.">
												            </div>
												            <div class="col-xs-2" style="padding: 10px 0px" id="sendingotp">
												            	<div id="send__x" style="cursor: pointer; text-align: center; width:80px; background: #909000;padding: 0px 0px; border-radius: 5px; color: #ffffff; font-size: 11px">Send OTP</div>
												            </div>
												        </div>
												        <div class="form-group" style="display: none" id="correspondanceContact__tempMain">
												            <label for="correspondanceContact" class="control-label col-xs-4">Contact Number<span style="color:#990000">*</span></label>
												            <div class="col-xs-8" id="correspondanceContact__temp">
												                
												            </div>
												        </div>
												        <div class="form-group" id="verification_corner">
												        	<label for="correspondanceContact" class="control-label col-xs-4">OTP<span style="color:#990000">*</span></label>
												        	<div class="col-xs-4">
												        	<input type="text" required="required" class="form-control" name="otp_" id="otp_" placeholder="Fill OTP">
												        	</div>
												        	<div class="col-xs-3" style="padding: 10px 0px">
												        		<div id="verifyOTP" style="cursor: pointer; text-align: center; width:80px; background: #ff0000;padding: 0px 0px; border-radius: 5px; color: #ffffff; font-size: 11px">Verify OTP</div>
												        	</div>
												        </div>
												        <hr>
												        <div class="form-group">
												            <label for="parmanentAddress" class="control-label col-xs-3">Parmanent</label>
												            <div class="col-xs-9">
												                <textarea class="form-control" name="parmanent" placeholder="Parmanent Address"></textarea>
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="ContactParmanent" class="control-label col-xs-3">Contact Number</label>
												            <div class="col-xs-9">
												                <input type="text" minlength="10" maxlength="13" class="form-control" name="parmanentNumber" placeholder="Parmanent Contact Number">
												            </div>
												        </div>			        			        
												        <hr>
											    	</div>
											    	
											    	<div class="col-sm-6">
										        	<p>&nbsp;</p>
												        
												        <div class="form-group">
												            <label for="LocalGaurdian" class="control-label col-xs-3">Local Guardian</label>
												            <div class="col-xs-9">
												                <textarea class="form-control" name="local" placeholder="Local Guardian Address"></textarea>
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="localNumber" class="control-label col-xs-3">Contact Number</label>
												            <div class="col-xs-9">
												                <input type="text" minlength="10" maxlength="13" class="form-control" name="localNumber" placeholder="Local Guardian Contact Number">
												            </div>
												        </div>
												        <hr>
												        <div class="form-group">
												            <label for="email" class="control-label col-xs-3">eMail-ID <span style="color:#990000">*</span></label>
												            <div class="col-xs-9">
												                <input type="email" class="form-control" name="mail" placeholder="Your emailID" required="required">
												            </div>
												        </div>
												        <hr>
												        <div class="form-group">
												            <div class="col-xs-6">
												                <input type="submit" id="update2nd" class="form-control btn-default" value="Click to Continue" disabled="disabled" />
												            </div>
												             <div class="col-xs-6">
												                <input type="reset" class="form-control btn-danger"/>
												            </div>
												        </div>
											    	</div>
											    </form>
                                        	</div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
    <!--/#title-->

   
    <!--/#title-->
    <?PHP $this->session->userdata('user');?>
    <section id="about-us" class="container">
        <div class="row">
        	
        </div><!--/.row-->
	</section>