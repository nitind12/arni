<?php
    $path_ = '/assets/img/faculty/'.$college.'/'.$menu_selected;
    $slider_ = array();
    
    if ($handle = opendir('.'.$path_)) {
        $i = 0;
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $slider_[$entry] = '';
                $i++;
            }
        }
        if(count($slider_) == 0){
            $path_ = '/assets/img/faculty/'.$college.'/about';
            $slider_ = array();
            if ($handle = opendir('.'.$path_)) {
                $i = 0;
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        $slider_[$entry] = '';
                        $i++;
                    }
                }
            }
        }
        closedir($handle);
    }

    //print_r($slider_);
?>
<div id="x-corp-carousel" class="carousel slide" data-ride="carousel" style="overflow: hidden; position: sticky; top: 0px;  height: auto;border: #009000 solid 0px\">
                        <!-- Indicators -->
                        <!--ol class="carousel-indicators">
                            <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="2"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="3"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="4"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="5"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="6"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="7"></li>
                        </ol-->
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" style="border: #0000ff solid 0px">
                            <?php $loop1 = 0; $sliderno = 0;//mt_rand(0,count($slider_)-1);?>
                            <?php foreach($slider_ as $img=>$item){?>
                            <div class="item<?php if($loop1 == $sliderno) echo ' active';?>" style="border:#909000 solid 0px">
                                
                                    <img src="<?php echo base_url($path_.'/'.$img); ?>?version=4.0" alt="<?php echo $menu_selected; ?>">
                                
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                        <!--small class="animated fadeIn">CALL US TODAY (Toll Free)</small>
                                        <div class="phone animated lightSpeedIn">1800 180 4027</div-->
                                        <div class="phone animated lightSpeedIn"></div>
                                        <h2 class="animated lightSpeedIn hidden-xs"><?php echo $item; ?></h2>                                            
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
                            <?php $loop1++;?>
                            <?php } ?>
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #x-corp-carousel-->