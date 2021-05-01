<div id="css-testimonial-carousel1" class="carousel slide" data-ride="carousel" style="padding: 0px; display: inline; vertical-align: top">
                                                <!-- Indicators -->
                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" style="margin-top: -80px">
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($alumni_record as $key => $value) { ?>
                                                        <?php if ($i == 1) { ?>
                                                            <div class="item active">
                                                            <?php } else { ?>
                                                                <div class="item">
                                                                <?php } ?>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="portfolio-item">
                                                                            <div class="item-inner">
                                                                                <blockquote>
                                                                                <p align="justify"><img hspace="10" align="left" class="img-responsive img-thumbnail" style="margin-right:10px; max-width: 80px;" src="<?PHP echo base_url() . 'assets/img/alumni/'.$value['pic']; ?>" alt="Amrapali Alumni">
                                                                                    <?php echo $value['speak']; ?>
                                                                                </p>                              
                                                                                <small>
                                                                                    <?php echo $value['alumni']; ?>, <?php echo $value['designation'].", ".$value['company']; ?>
                                                                                </small>
                                                                            </blockquote>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                </div><!--/.row-->
                                                            </div><!--/.item-->
                                                            <?php $i++; ?>
                                                        <?php } ?>
                                                    </div><!-- /.carousel-inner -->
                                                </div><!-- /.carousel -->                                                
                                            </div><!-- /.col-md-9 -->