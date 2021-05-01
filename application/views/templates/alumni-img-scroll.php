<div class="sidebar-wrapper">
                                                    <h2 class="wow fadeInDown">Our Alumni</h2>
                                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                        <!-- Indicators -->
                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner">
                                                            <?php
                                                            $i = 1;
                                                            foreach ($alumni['alumniProfile'] as $item) {
                                                                ?>
                                                                <div <?php
                                                                if ($i == 1) {
                                                                    echo 'class="item active"';
                                                                } else {
                                                                    echo 'class="item"';
                                                                }
                                                                ?>>
                                                                    <img class="img-thumbnail" style=";max-width: 140px; height:140px;" src="<?php echo base_url('assets/alumniPic/' . $item->pic); ?>?ver=1.0" alt="Amrapali Alumni - <?php echo $item->name; ?>">
                                                                    <div>
                                                                        <h3><?php echo $item->name; ?></h3>
                                                                        <h4><?php echo $item->company; ?></h4>
                                                                    </div>
                                                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="<?PHP echo site_url('Agi/getdistingusedAlumni'); ?>">See More</a>
                                                                </div>
                                                                <?php
                                                                $i++;
                                                            }
                                                            ?>                
                                                        </div>

                                                        <!-- Controls -->
                                                    </div> <!-- Carousel -->
                                                </div><!-- /.sidebar-wrapper -->