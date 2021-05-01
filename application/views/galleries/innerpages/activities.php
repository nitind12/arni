<script type="text/javascript">
function show_more(obj, id_){
obj1 = obj + "_";
document.getElementById(obj).style.display = "none";
document.getElementById(obj1).style.display = "block";
}
function show_less(obj, id_){
obj1 = obj + "_";
document.getElementById(obj).style.display = "block";
document.getElementById(obj1).style.display = "none";
}
</script> 
<h3>Activities</h3>
<div <?php echo $class_;?>>
<p>
	<?php $loop1 = 1; ?>
    <?php foreach ($activity_ as $item) { ?>
        <div class="col-md-4" style="padding: 3px; border: #ff00ff solid 0px">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $item->ID; ?>"> 
                            <?php $stringCut = substr($item->TITLE_, 0, 28);?>
                            <?php echo ucwords(strtolower($stringCut)); ?>
                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo $item->ID; ?>" class="panel-collapse collapse in">
                    <div class="panel-body" style="font-family: Arial; text-align: justify">
                        <div style="overflow: hidden; width: 100%; height: 150px">
                            <a href="<?php echo AGIPANEL___ . '/_assets_/activities/photos/'.$item->PICTURE_PATH;?>" target="_blank">
                                <img src="<?php echo AGIPANEL___ . '/_assets_/activities/photos/'.$item->PICTURE_PATH ;?>" border="0" align="left" width="100%" />
                            </a>
                        </div>
                        <div class="col-sm-12"></div>
                        <div style="overflow: hidden; min-height: 150px; width: 100%; display: block" id="show_<?php echo $loop1; ?>">
                            <?php $stringCut = substr($item->BRIEF_, 0, 130);?>
                            <?php echo $stringCut . "...<button style='font-size: 11px; color:#ff0000' class='btn btn-link' onclick=show_more('show_".$loop1."','".$item->ID."');>show more</button>";?>
                            <br />
                            <span style="font-size: 11px; color: #009000">Date of Activity: <?php echo $item->DATE_OF_ACTIVITY;?></span>
                            <?php if($item->DET_PATH != 'x'){ ?>
                            &nbsp;|&nbsp;<a style="font-size: 10px; color: #0000ff" href="<?php echo AGIPANEL___ . '/_assets_/activities/'.$item->DET_PATH;?>" target="_blank">[ click for detail ]</a>
                            <?php } ?>
                        </div>
                        <div style="min-height: 200px; width: 100%; display: none" id="show_<?php echo $loop1."_"; ?>">
                        <?php $stringCut = substr($item->BRIEF_, 0, 200);?>
                            <?php echo $item->BRIEF_ . "<button style='font-size: 11px; color:#900000' class='btn btn-link' onclick=show_less('show_".$loop1."','".$item->ID."');>show less</button>"; ?>
                            <br />
                            <span style="font-size: 11px; color: #009000">Date of Activity: <?php echo $item->DATE_OF_ACTIVITY;?></span>
                            <?php if($item->DET_PATH != 'x'){ ?>
                            &nbsp;|&nbsp;<a style="font-size: 10px; color: #0000ff" href="<?php echo AGIPANEL___ . '/_assets_/activities/'.$item->DET_PATH;?>" target="_blank">[ click for detail ]</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php $loop1 += 1; ?>
    <?php } ?>
</p>
</div>