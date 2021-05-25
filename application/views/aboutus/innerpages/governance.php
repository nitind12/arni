<section class="trusted-client-wrapper">
        <div class="col-md-8">
        <?php $this->load->view('templates/breadcrumb'); ?>  
            <h2 class="section-title wow fadeInDown" >Governance</h2>                             
        </div>
        
        <div class="col-md-12" style="clear: both"></div>
        
        <div class="col-md-12" style="clear: both; padding: 10px 0px"></div>
    
    <div style="clear:both"></div>

    <div class="panel-group" id="accordion">
        <?php $counter = 1; ?>
        <?php foreach ($gvrns['governance'] as $item) {?>
            <?php if($item['status'] == true){ ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counter;?>">
                            <?php echo $item['heading'];?></a>
                        </h4>
                    </div>
                    <div id="collapse<?php echo $counter;?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><?php echo $item['content'];?></p>
                    </div>
                </div>
            </div>
            <?php $counter++;?>
            <?php } ?>
        <?php } ?>
    </div>
</section>