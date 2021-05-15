<h3>Gallery</h3>
<div <?php //echo $class_;?>>
<p>
<div class="row four-column">
                                <div id="grid" style="text-align: center">
                                    <?php foreach ($gallery_category as $grp_item) { ?>
                                    <div class="portfolio-item col-sm-6 col-md-3" style="text-align: center">
                                        <div class="single-portfolio" style="text-align: center">
                                            <img src="<?PHP echo AGIPANEL___ . '/_assets_/gallery/'.$grp_item->PHOTO_; ?>?ver=1.1" style="max-width: 250px; height:150px;"/>
                                            <h4 style="text-align:center; padding-top:15px;"><a href="<?PHP echo site_url('imagePicsInner/'.$grp_item->CATEG_ID);?>" style="color:red;text-transform:uppercase; font-size:13px"><?php echo $grp_item->CATEGORY; ?></a></h4>
                                            <div class="portfolio-links">
                                                <a href="<?PHP echo site_url('photos_inner/'.$grp_item->CATEG_ID);?>"><i class="fa fa-search-plus"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->
                                    <?php } ?>                                       
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
                        </p>
                    </div>