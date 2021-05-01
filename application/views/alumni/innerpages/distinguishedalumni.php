<h3>Distinguished Alumni</h3>
<div <?php echo $class_;?>>
<p>
    <h5>They were here, Yesterday. Today, they are our Brand Ambassadors in Top Organizations.</h5>
<?php foreach ($fac_profile as $item) { ?>
    <div class="col-md-4 col-sm-4 col-xs-12" style="max-height:389px;min-height:389px; overflow:hidden;">
        <figure style="background: #EFF6FF; border:#C6DEFC dashed 1px; margin-top: 2em;padding:.5em; border-radius: 0px;">
            <div class="css-team-avatar" align="center" style="padding: 15px 0px; margin-top: 1em; background: transparent !important;">
                <?php if($item->pic == 'x' || $item->pic == 'sample.jpg') { ?>
                    <img class="media-object img-responsive" src="<?php echo base_url('assets/alumniPic/profile.jpg'); ?>?version=1.1" alt="Amrapali alumni - <?php echo $item->name; ?>" style="max-width: 130px; height:150px; border-radius: 10px"> 
                <?php } else {?>   
                    <img class="media-object img-responsive" src="<?php echo base_url('assets/alumniPic/' . $item->pic); ?>?version=1.1" alt="Amrapali alumni - <?php echo $item->name; ?>" style="max-width: 130px; height:150px; border-radius: 10px">      
                <?php } ?>
            </div>
            <div class="css-team-info">
            <h3 class="css-team-heading"><?php echo $item->name; ?><br><small style="font-size: 11px; font-weight: bold; color: #000050">(<?php echo $item->designation; ?>, <?php echo $item->company; ?>)</small>
                <br><small><b>Location: </b><?php echo $item->location; ?></small><br>
                <small><b><?php echo $item->course; ?> (Passout Batch-<?php echo $item->passout; ?>)</b></small>
            </h3>
            </div>
        </figure>
    </div>
<?php } ?>
</section>   
</p>