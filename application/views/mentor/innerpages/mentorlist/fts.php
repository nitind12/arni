<div class="panel panel-default">                                                            
    <div class="panel-heading panel-heading-link" role="tab" id="heading1">
        <h2 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                Faculty of Technology & Sciences
            </a>
        </h2>
    </div>
<div id="collapse1" class="panel-collapse collapse">
  <div class="panel-body">
        <?PHP foreach ($fts as $item) { ?>                               
            <div class="panel panel-default">
                <div class="panel-heading" style="overflow: hidden">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#_collapse<?php echo $item->FAC_ID ?>">
                            <div class="col-xs-12 col-md-4 col-sm-4"><?PHP echo $item->FACULTY_NAME; ?></div>
                            <div class="col-xs-12 col-md-8 col-sm-8"><span style="color: #09F;"><?PHP echo $item->DESIG; ?></span></div>
                        </a>
                    </h4>
                </div>
                <!--div id="_collapse<?php echo $item->FAC_ID ?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-sm-2">
                            <?php if ($item->PHOTO_ != 'x') { ?>
                                <img src="<?php echo AGIPANEL___ . '/_assets_/faculty/photo/' . $item->PHOTO_; ?>" class="img-responsive">
                            <?php } else { ?>
                                <img src="<?php echo AGIPANEL___ . '/_assets_/faculty/photo/male.png'; ?>" class="img-responsive">
                            <?php } ?>
                        </div>
                        <div class="col-sm-10">
                            <p><b>Qualification:</b> <?PHP echo $item->LAST_QUALIF; ?></p>
                            <p><b>Email-ID:</b> <?PHP echo $item->EMAIL; ?></p>
                            <p><?PHP echo $item->SUMMARY; ?></p>
                        </div>
                    </div>
                </div-->
            </div>                                    

        <?PHP } ?>
  </div>
</div>
</div>    