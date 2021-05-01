<style>
    blockquote p{
        font-size:14px;
        line-height: 22px;
    }

    blockquote img{
        max-width:100px;
        margin: 0 10px;
        padding:0;
        border: 2px solid #bbbbbb;
        border-radius: 5px;
    }
</style>

<div class="row">                         
    <div class="col-xs-12 col-md-9 col-sm-8">
        <h2 class=" wow fadeInDown">Alumni Testimonials
            <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php echo site_url('alumni/connect-programme'); ?>">Check More</a>
        </h2>
        <div id="css-testimonial-carousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $j = 1; ?>
                <?php for ($u=0;$u<count($all_alumni); $u++) { ?>
                <li data-target="#css-testimonial-carousel1" data-slide-to="<?php echo ($u);?>" class="<?php if ($u==0){echo 'active';}?>"></li>                         
                <?php $j++; 
                } ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $k = 1; ?>
                <?php for ($u=0;$u<count($all_alumni)-4; $u++) { ?>
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
                                            <p align="justify"><img hspace="10" align="left" class="img-responsive img-thumbnail" style="margin-right:10px; max-width: 80px;" src="<?PHP echo base_url() . 'assets/img/alumni/' . $all_alumni[$u]['pic']; ?>?ver=1.2" alt="Amrapali Alumni">
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
        
        <div class="col-xs-12 col-md-3 col-sm-4" align="center">
            <?php $this->load->view('templates/alumni-img-scroll');?>
        </div><!-- /.col-md-3 -->                                            
    </div><!-- /.row -->
</div><!-- /.content-wrapper --> 