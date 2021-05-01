<div class="vticker">
    <ul>               
        <?php foreach ($activity_ as $item) { ?>
            <li>
                <blockquote>
                    <h4><?php $stringCut = substr($item->TITLE_, 0, 28); echo $stringCut;?></h4>
                    <small style="color:#000;text-align: justify"><?php $stringCut = substr($item->BRIEF_, 0, 250); echo $stringCut;?> <div style="clear: both; height:5px"></div><cite title="Source Title" style="color: #ffffff"><br/>
                         <?php //if ($item->DET_PATH != 'x') { ?>
                                <!--a href="<?php //echo AGIPANEL___ . '/_assets_/activities/'.$item->DET_PATH;?>" target="_blank" class="attach"> click for detail </a><br />
                            <?php //} ?><br /-->
                    <cite style="color:#0086B3">Date of Activity - <?php echo $item->DATE_OF_ACTIVITY;?></cite></small>
                </blockquote>
            </li>
        <?php } ?>
    </ul>    
</div>
<div style="float:right;">
    <button class="btn btn-danger up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
    <button class="btn btn-danger down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
    <button class="btn btn-primary toggle"></button>
</div>