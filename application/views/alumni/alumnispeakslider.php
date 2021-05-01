<div id="css-testimonial-carousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $j = 1; ?>
                <?php for ($u=0;$u<count($all_alumni); $u++) { ?>
                <li data-target="#css-testimonial-carousel1" data-slide-to="<?php echo ($u);?>" class="<?php if ($u==0){echo 'active';}?>" style="list-style-type: disc"></li>                         
                <?php $j++; 
                } ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $k = 1; ?>
                <?php for ($u=0;$u<count($all_alumni); $u++) { ?>
                    <?php if ($k == 1) { ?>
                        <div class="item active">
                        <?php } else { ?>
                            <div class="item">
                            <?php } ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <blockquote>
                                            <p align="justify"><img hspace="10" align="left" class="img-responsive img-thumbnail" style="margin-right:10px; max-width: 80px;" src="<?PHP echo base_url() . 'assets/img/alumni/' . $all_alumni[$u]['pic']; ?>" alt="Amrapali Alumni">
                                                <?php echo $all_alumni[$u]['speak']; ?>
                                            </p>                              
                                            <small>
                                                <?php echo $all_alumni[$u]['alumni']; ?>, <?php echo $all_alumni[$u]['company']; ?>
                                            </small>
                                        </blockquote>
                                        </div>
                                    </div>
                                </div> 

                            </div><!--/.row-->
                        </div><!--/.item-->
                        <?php $k++; ?>
                    <?php } ?>
                </div><!-- /.carousel-inner -->
            </div><!-- /.carousel -->                                                
        </div><!-- /.col-md-9 -->
    </div>