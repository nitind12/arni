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
                                            <h3>Previous Academic Information</h3>
									        <p>&nbsp;</p>
									        <?PHP echo form_open('Agi/updateRegistration2', array('class'=>'form-horizontal'));?>
									        	<div class="col-sm-12">
									        		<div class="form-group">
											            <label for="lastAttended" class="control-label col-xs-3">School/College/University last attended</label>
											            <div class="col-xs-9">
											                <input type="text" class="form-control" name="lastAttended" placeholder="School/College/University last attended">
											            </div>
											        </div>
											        <hr>	
									        		<table class="table-bordered" width="100%">
														<tr align="center" style="background-color:#0086B3; color: #ffffff">
															<td><label class="control-label">Name of Examination</label></td>
															<td><label class="control-label">Institution</label></td>
															<td><label class="control-label">Board/Univ.</label></td>
															<td><label class="control-label">Year</label></td>
															<td><label class="control-label">Subjects</label></td>
															<td><label class="control-label">Marks %</label></td>
														</tr>
														<tr align="center">
															<td><label class="control-label">High School <span style="color:#990000">*</span></label></td>
															<td><input type="text" class="form-control" name="txtHsInst"  required="required"></td>
															<td><input type="text" class="form-control" name="txtHsBrdUniv" required="required"></td>
															<td><input type="text" class="form-control" name="txtHsYr" required="required"></td>
															<td><input type="text" class="form-control" name="txtHsSbj" required="required"></td>
															<td><input type="text" class="form-control" name="txtHsMrks" required="required"></td>
														</tr>
														<tr align="center">
															<td><label class="control-label">Intermediate <span style="color:#990000">*</span></label></td>
															<td><input type="text" class="form-control" name="txtInterInst" required="required"></td>
															<td><input type="text" class="form-control" name="txtInterBrdUniv" required="required"></td>
															<td><input type="text" class="form-control" name="txtInterYr" required="required"></td>
															<td><input type="text" class="form-control" name="txtInterSbj" required="required"></td>
															<td><input type="text" class="form-control" name="txtInterMrks" required="required"></td>
														</tr>
														<tr align="center">
															<td><label class="control-label">Graduation</label></td>
															<td><input type="text" class="form-control" name="txtGradInst"></td>
															<td><input type="text" class="form-control" name="txtGradBrdUniv"></td>
															<td><input type="text" class="form-control" name="txtGradYr"></td>
															<td><input type="text" class="form-control" name="txtGradSbj"></td>
															<td><input type="text" class="form-control" name="txtGradMrks"></td>
														</tr>
														<tr align="center">
															<td><label class="control-label">Any Other</label></td>
															<td><input type="text" class="form-control" name="txtOtherInst"></td>
															<td><input type="text" class="form-control" name="txtOtherBrdUniv"></td>
															<td><input type="text" class="form-control" name="txtOtherYr"></td>
															<td><input type="text" class="form-control" name="txtOtherSbj"></td>
															<td><input type="text" class="form-control" name="txtOtherMrks"></td>
														</tr>
									                 </table>
									                 <hr>
									                <div class="form-group">
											            <label for="achievement" class="control-label col-xs-3">Any Achievement (School/Regional/National level)</label>
											            <div class="col-xs-9">
											                <textarea class="form-control" name="achievement" placeholder="Achievement"></textarea>
											            </div>
											       </div>
											       <hr>
													<div class="form-group">
													    <div class="col-xs-6">
													        <input type="submit" class="form-control btn-success" value="Click to Submit	"/>
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