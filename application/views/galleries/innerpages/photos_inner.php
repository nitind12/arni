<link rel="stylesheet" href="<?PHP echo base_url() . 'assets/css/magnific-popup.css'; ?>">
<h3><?php echo $innerTitle; ?></h3>
<div <?php echo $class_;?>>
<p>
   <a href="<?php echo site_url('gallery/photos');?>" style="color: #0000ff">&lt;&lt; Back</a>                         
                            <div class="row">
                                <div id="grid">
                                    <?php foreach ($gallery_ as $item) { ?>
                                    <div class="portfolio-item col-xs-12 col-md-3 col-sm-3" style="text-align: center">
                                        <div class="single-portfolio">
                                            <img src="<?PHP echo AGIPANEL___ . '/_assets_/gallery/' . $item->PHOTO_; ?>?version=1.1" style="width: 200px" alt="Amrapali Photos"/>                                            
                                            <div class="portfolio-links">
                                                <a class="image-link" href="<?PHP echo AGIPANEL___ . '/_assets_/gallery/' . $item->PHOTO_; ?>"><i class="fa fa-search-plus"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->
                                    <?php } ?>                                       
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
</p>
</div>
                        