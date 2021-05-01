<?php foreach ($commondata_['activeblogs'] as $item) { ?>
	<div style="clear: both; margin: 5px 0px; padding: 5px 8px; border-radius: 5px; background: transparent; border: #fff solid 2px; color: #000090"><a href="<?php echo $item->LINK;?>" target="_blank"><?php echo $item->TITLE;?></a></div>
<?php } ?>
<div style="clear: both; margin: 5px 0px; padding: 5px 8px; border-radius: 5px; background: transparent; border: #fff solid 2px; color: #000090"><a href="<?php echo site_url('blogs-archive');?>" target="_blank">Click for more...</a></div>