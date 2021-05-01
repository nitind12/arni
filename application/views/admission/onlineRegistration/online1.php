<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                                            <header class="entry-header">       
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                
                                            <div class="entry-content">                                            	
												<hr/>
												<?PHP echo form_open('Agi/insertRegistration', array('class'=>'form-horizontal'));?>
									        	<div class="col-sm-6">
										        	<h3>Personal Information<!--/Draft Information--></h3>
										        	<p>&nbsp;</p>
												        <div class="form-group">
												            <label for="cmbCourse" class="control-label col-xs-4">Select Course<span style="color:#990000">*</span></label>
												            <div class="col-xs-8">
												                <select name="cmbCourse" class="form-control" required="required" style="font-size: 12px !important">
												                    <option value="">Select Course</option>
												                    <?php foreach ($colleges as $clgItem) { ?>
										                            <optgroup label="<?php echo $clgItem->CLG_NAME; ?>">
										                            	<?php foreach ($courses as $crsItem) { ?>
										                            		<?php if($clgItem->CLGCODE == $crsItem->collegeID){ ?>
											                                	<option value="<?php echo $crsItem->courseID; ?>">(<?php echo $crsItem->courseID; ?>) <?php echo $crsItem->name; ?></option>
											                                <?php } ?>
										                            	<?php } ?>
										                            </optgroup>
										                        <?php } ?>
										                            
										                        </select>
												            </div>
												        </div>
												        <!--div class="form-group">
												            <label for="draftnumber" class="control-label col-xs-4">DD No./ Ref.No. / DU No.<span style="color:#990000">*</span></label>
												            <div class="col-xs-8">
												                <input type="text" class="form-control" name="draftnumber" placeholder="DD No./ Ref.No./ DU No." required="required" minlength="6">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="draftDate" class="control-label col-xs-12">For Getting DU No. <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=644273" target="_bank" style="color:red">Click Here</a> </label>
												        </div>
												        <div class="form-group">
												            <label for="draftDate" class="control-label col-xs-4">Date <span style="color:#990000">*</span></label>
												            <div class="col-xs-8">
												                <input type="date" class="form-control" name="draftdate" placeholder="Draft date" required="required">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="bank" class="control-label col-xs-4">Bank <span style="color:#990000">*</span></label>
												            <div class="col-xs-8">
												                <input type="text" class="form-control" name="bank" placeholder="Bank Name" required="required">
												            </div>
												        </div-->
												        <div class="form-group">
												            <label for="name" class="control-label col-xs-4">Name<span style="color:#990000">*</span></label>
												            <div class="col-xs-8">
												                <input type="text" class="form-control" name="inputname" placeholder="Name" required="required">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="dob" class="control-label col-xs-4">Date of Birth<span style="color:#990000">*</span></label>
												            <div class="col-xs-8">
												                <input type="date" class="form-control" name="enterdob" placeholder="Draft date" required="required">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="gender" class="control-label col-xs-4">Gender</label>
												            <div class="col-xs-8" style="padding: 9px 15px">
												                <input type="radio" name="gender" value="m" required="required"> Male &nbsp;&nbsp;
												                <input type="radio" name="gender" value="f" required="required"> Female
												            </div>
												        </div>
											    </div>
											    
									            <div class="col-sm-6">
										        	<h3>&nbsp;</h3>
										        	<p>&nbsp;</p>
										        	<div class="form-group">
												            <label for="fatherName" class="control-label col-xs-4">Father's Name</label>
												            <div class="col-xs-8">
												                <input type="text" class="form-control" name="fatherName" placeholder="Father's Name">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="MotherName" class="control-label col-xs-4">Mother's Name</label>
												            <div class="col-xs-8">
												                <input type="text" class="form-control" name="motherName" placeholder="Mother's Name">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="Nationality" class="control-label col-xs-4">Nationality</label>
												            <div class="col-xs-6">
												                <input type="text" class="form-control" name="Nationality" placeholder="Nationality">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="Category" class="control-label col-xs-4">Category</label>
												            <div class="col-xs-8">
												                <input type="text" class="form-control" name="Category" placeholder="GEN/SC/ST/OBC">
												            </div>
												        </div>
												        <div class="form-group">
												            <label for="hCategory" class="control-label col-xs-4">Hor-Category</label>
												            <div class="col-xs-8">
												                <input type="text" class="form-control" name="hCategory" placeholder="Woman/ Ex-Service/ Handicapped/ FF/ None">
												            </div>
												        </div>
												        <div class="form-group">
												            <div class="col-xs-6">
												                <input type="submit" class="form-control btn-success" value="Click to Continue"/>
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

   