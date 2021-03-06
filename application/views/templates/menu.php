<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- offcanvas-trigger-effects -->
            <h2 class="logo" style="margin: 0; margin: -12px; padding: 0; line-height:50px; font-weight: 600">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img src="<?php echo base_url('assets/arniImage/logo_blue.jpg'); ?>?version=1.8" alt="Arni Logo" class="hidden-xs" style="width: 205px">
                    <img src="<?php echo base_url('assets/arniImage/logo_small.jpg'); ?>?version=1.4" alt="Arni logo" class="hidden-lg hiddn-md hidden-sm hidden-xl" style="margin-top:-10px; width: 57px">
                </a>
            </h2>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if($menu_active==1){echo 'active';}?>"><a href="<?php echo site_url(); ?>">Home</a></li>
                
                <?php foreach($menu_all['aboutus'] as $title => $path){?>
                    <li class="<?php if($menu_active==2){echo 'active';}?>"><a href="<?php echo site_url($path); ?>"><?php echo $title; ?></a></li>
                <?php } ?>

                <li class="dropdown <?php if($menu_active==3){echo 'active';}?>"><a href="#" >Academics <b class="caret"></b></a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                        <div class="submenu-inner  submenu-inner-topbottom">
                            <div class='col-sm-12' style='width: 400px; background: rgba(255,255,255,.9);  border-bottom: 3px solid #e67e22;padding:20px'>
                                <div class='col-sm-8'>
                                    <!--h3 style='color:#fff'>Faculty</h3-->
                                    <h3 style='color:#e67e22'>Faculty</h3>
                                    <ul class="dropdown-menu">
                                        <?php foreach($menu_all['academics']['faculty'] as $title => $path){?>
                                            <li><a href="<?php echo site_url($path); ?>"><?php echo $title; ?></a></li>
                                            <hr style="width:270px;padding:0 20px 0 20px;margin-left:20px;margin-top:0px;margin-bottom:0px;border:0px;border-bottom:1px solid rgba(230, 126, 34, .3);">
                                        <?php } ?>
                                    </ul>    
                                    
                                    <ul class="dropdown-menu">
                                        <?php foreach($menu_all['academics']['facilities'] as $title => $path){?>
                                            <li><a href="<?php // echo site_url($path); ?>"><?php echo $title; ?></a></li>
                                            <hr style="width:270px;padding:0 20px 0 20px;margin-left:20px;margin-top:0px;margin-bottom:0px;border:0px;border-bottom:1px solid rgba(230, 126, 34, .3);">
                                        <?php } ?>                                        
                                    </ul>                                                                                                                                          
                                </div>
                                
                            </div>                            
                        </div><!-- /.submenu-inner -->
                    </div> <!-- /.submenu-wrapper -->
                </li>
                <?php foreach($menu_all['admissions'] as $title => $path){?>
                    <li class="<?php if($menu_active==4){echo 'active';}?>"><a href="<?php echo site_url($path); ?>"><?php echo $title; ?></a></li>
                <?php } ?>
                <li class="dropdown <?php if($menu_active==5){echo 'active';}?>"><a href="#" >Examination <b class="caret"></b></a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                        <div class="submenu-inner  submenu-inner-topbottom">
                            <div class='col-sm-12' style='width: auto; background: rgba(255,255,255,.9); border-bottom: 3px solid #e67e22;padding:20px'>
                                <div class='col-sm-8'>
                                    <!--h3 style='color:#fff'>Faculty</h3-->
                                    <ul class="dropdown-menu">
                                        <?php foreach($menu_all['exam']['Examination'] as $title => $path){?>
                                            <li><a href="<?php echo site_url($path); ?>"><?php echo $title; ?></a></li>
                                            <hr style="width:100px;padding:0 20px 0 20px;margin-left:20px;margin-top:0px;margin-bottom:0px;border:0px;border-bottom:1px solid rgba(230, 126, 34, .3);">
                                        <?php } ?>
                                    </ul>                                                                                                                                     
                                </div>
                            </div>                            
                        </div><!-- /.submenu-inner -->
                    </div> <!-- /.submenu-wrapper -->
                </li>
                <li class="dropdown <?php if($menu_active==7){echo 'active';}?>"><a href="#" >Research <b class="caret"></b></a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                        <div class="submenu-inner  submenu-inner-topbottom">
                            <div class='col-sm-12' style='width: auto; background: rgba(255,255,255,.9); border-bottom: 3px solid #e67e22;padding:20px'>
                                <div class='col-sm-8'>
                                    <!--h3 style='color:#fff'>Faculty</h3-->
                                    <ul class="dropdown-menu">
                                        <?php foreach($menu_all['research']['options'] as $title => $path){?>
                                            <li><a href="<?php echo site_url($path); ?>"><?php echo $title; ?></a></li>
                                            <hr style="width:150px;padding:0 20px 0 20px;margin-left:20px;margin-top:0px;margin-bottom:0px;border:0px;border-bottom:1px solid rgba(230, 126, 34, .3);">
                                        <?php } ?>
                                    </ul>                                                                                                                                     
                                </div>
                            </div>                            
                        </div><!-- /.submenu-inner -->
                    </div> <!-- /.submenu-wrapper -->
                </li>
                <?php foreach($menu_all['alumni'] as $title => $path){?>
                    <li class="<?php if($menu_active==8){echo 'active';}?>"><a href="<?php  echo site_url($path); ?>"><?php echo $title; ?></a></li-->
                <?php } ?>
                <!--li class="dropdown <?php if($menu_active==8){echo 'active';}?>"><a href="#" >Glimpses <b class="caret"></b></a-->
                    <!-- submenu-wrapper -->
                    <!--div class="submenu-wrapper submenu-wrapper-topbottom">
                        <div class="submenu-inner  submenu-inner-topbottom">
                            <div class='col-sm-12' style='width: auto; background: rgba(255,255,255,.9); padding:20px'>
                                <div class='col-sm-8'-->
                                    <!--h3 style='color:#fff'>Faculty</h3-->
                                    <!--ul class="dropdown-menu">
                                        <?php foreach($menu_all['glimpses']['options'] as $title => $path){?>
                                            <li><a href="<?php echo site_url($path); ?>"><?php echo $title; ?></a></li>
                                            
                                        <?php } ?>
                                    </ul>                                                                                                                                     
                                </div>
                            </div>                            
                        </div--><!-- /.submenu-inner -->
                    <!--/div--> <!-- /.submenu-wrapper -->
                </li>
                <li class="dropdown <?php if($menu_active==9){echo 'active';}?>"><a href="#" >Life @ Arni <b class="caret"></b></a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                        <div class="submenu-inner  submenu-inner-topbottom">
                            <div class='col-sm-12' style='width: auto; background: rgba(255,255,255,.9); border-bottom: 3px solid #e67e22;padding:20px'>
                                <div class='col-sm-8'>
                                    <!--h3 style='color:#fff'>Faculty</h3-->
                                    <ul class="dropdown-menu">
                                        <?php foreach($menu_all['lifeatarni']['options'] as $title => $path){?>
                                            <li><a href="<?php echo site_url($path); ?>"><?php echo $title; ?></a></li>
                                            <hr style="width:auto;padding:0 20px 0 20px;margin-left:20px;margin-top:0px;margin-bottom:0px;border:0px;border-bottom:1px solid rgba(230, 126, 34, .3);">
                                        <?php } ?>
                                    </ul>                                                                                                                                     
                                </div>
                            </div>                            
                        </div><!-- /.submenu-inner -->
                    </div> <!-- /.submenu-wrapper -->
                </li>
                <?php //foreach($menu_all['contactus'] as $title => $path){?>
                    <!--li class="<?php //if($menu_active==10){echo 'active';}?>"><a href="<?php  echo site_url($path); ?>"><?php //echo $title; ?></a></li-->
                <?php //} ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>