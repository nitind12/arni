<section class="trusted-client-wrapper">
        <div class="col-md-12">
        <?php $this->load->view('templates/breadcrumb'); ?>  
            <h2 class="section-title wow fadeInDown" >Photo Gallery</h2>  
                <div class="row four-column">
                    <div id="grid" style="text-align: center">
                        <?php foreach ($gallery_category as $grp_item) { ?>
                        <div class="portfolio-item col-sm-6 col-md-3" style="text-align: center">
                            <div class="single-portfolio" style="text-align: center">
                                <img src="<?PHP echo ARNIPANEL___ . '/_assets_/gallery/'.$grp_item->PHOTO_; ?>?ver=1.1" style="max-width: 180px; height:100%;" class="img-thumbnail"/>
                                <h4 style="text-align:center; padding-top:15px;"><a href="<?PHP echo site_url('imagePicsInner/'.$grp_item->CATEG_ID);?>" style="color:orangered;text-transform:uppercase; font-size:13px"><?php echo $grp_item->CATEGORY; ?></a></h4>
                                <div class="portfolio-links">
                                    <a href="<?PHP echo site_url('imagePicsInner/'.$grp_item->CATEG_ID);?>"><i class="fa fa-search-plus"></i></a>
                                </div><!-- /.links -->
                            </div><!-- /.single-portfolio -->
                        </div><!-- /.portfolio-item -->
                        <?php } ?>                                       
                    </div><!-- /#grid -->
                </div><!-- /.row -->
        </div>  
 <div style="clear:both"></div>  
</section>