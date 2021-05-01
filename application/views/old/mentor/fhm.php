<div class="panel panel-default">                                                            
        <div class="panel-heading panel-heading-link" role="tab" id="heading2">
            <h2 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Faculty of Hospitality Management
                </a>
            </h2>
        </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
            <?PHP foreach ($fhm as $item) { ?>                               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#_collapse<?php echo $item->FAC_ID ?>">
                                <table>
                                    <tr>
                                        <td width="300px"><?PHP echo $item->FACULTY_NAME; ?> </td>
                                        <td><span style="color: #09F;"><?PHP echo $item->DESIG; ?></span></td>
                                    </tr>
                                </table>
                            </a>
                        </h4>
                    </div>
                    <!--div id="_collapse<?php echo $item->FAC_ID ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-sm-2">
                                <?php if ($item->PHOTO_ != 'x') { ?>
                                    <img src="<?php echo base_url('agipanel/_assets_/faculty/photo/' . $item->PHOTO_); ?>" class="img-responsive">
                                <?php } else { ?>
                                    <img src="<?php echo base_url('agipanel/_assets_/faculty/photo/male.png'); ?>" class="img-responsive">
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