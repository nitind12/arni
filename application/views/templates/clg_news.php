<div style="max-height: 50%;">
    <ul>               
        <?php foreach ($rnews_ as $item) { ?>
            <li>
                <blockquote>
                    <p style="font-weight: 400; font-weight: bold"><?php echo $item->SUBJECT; ?></p>
                    <small style="text-align: justify"><?php echo $item->NEWS; ?> <div style="clear: both; height:5px"></div><cite title="Source Title" style="color: #ffffff">
                            <?php //if ($item->PATH_ATTACH != 'x') { ?>
                                <!--a href="<?php //echo ADMIN___ . '/_assets_/newsdetail/' . $item->PATH_ATTACH; ?>" target="_blank" class="attach">click for detail</a><br /-->
                            <?php //} ?>
                            <br />
                            <cite style="color:#0086B3"><?php echo $item->DATE_ . " | " . $item->TIME_; ?></cite>
                    </small>
                </blockquote>
            </li>
        <?php } ?>
    </ul>    
</div>