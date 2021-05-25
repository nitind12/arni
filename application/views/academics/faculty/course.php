<h2 class="section-title-dark wow fadeInDown" align="center">Courses</h2>
<div style="clear: both"></div>
<?php $coldata['cols'] = "col-md-6";?>
<?php $this->load->view('academics/faculty/school_contact', $coldata); ?>

<div style="clear: both; height: 20px"></div>
<?php $idcreator = 1; ?>
                                <?php foreach ($departments as $dept) { ?>
                                <?php if(count($departments) == 1){?>
                                <div class="panel-group col-md-12" id="accordion<?php echo $idcreator;?>">
                                <?php } else {?>
                                    <div class="panel-group col-md-6" id="accordion<?php echo $idcreator;?>">
                                <?php } ?>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion<?php echo $idcreator;?>" data-target="#collapse<?php echo $idcreator;?>">
                                            <?php echo $dept->DEPARTMENT; ?></a>
                                           </h4>
                                        </div>
                                        <div id="collapse<?php echo $idcreator;?>" class="panel-collapse collapse in">
                                            <ul class = "list-group">
                                                <?php foreach($school_courses as $course){?>
                                                    <?php if($dept->DID == $course->DID){?>
                                                    <li class = "list-group-item"><?php echo $course->COURSE;?></li>
                                                    <?php }?>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php $idcreator++;?>
                                <?php }?>