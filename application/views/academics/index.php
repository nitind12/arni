<style>
    .member-info a{
        color: #0c5981;
        font-weight: bold;
    }
    .member-info a:hover{
        color: #ffa200;
    }
    ul.check-circle li {
        display: list-item;
        position: relative;
        line-height: 28px;
        padding-left: 25px;
        color:#8b4b05;
    }
    hr{
        border:1px solid #aaaaaa;
    }
</style>
<?php
    
    $slider_ = array(
        'P4.jpg'=>$title,
        'P1.jpg'=> $title,
        'P2.jpg'=>$title,
        'P3.jpg'=>$title
    );

    
?>
<!--script>
    function addfavlink(loc, dispname, siteurl){
         var shl = WScript.CreateObject("WScript.Shell");
        var shor = shl.CreateShortcut(loc + "" + dispname + ".URL");
        shor.TargetPath = siteurl;
        shor.save();
    }
</script-->
<body>
    <?php $this->load->view('tagmanager'); ?>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    
                        <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="2"></li>
                            <li data-target="#x-corp-carousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php $loop1 = 0; $sliderno = mt_rand(0,count($slider_)-1);?>
                            <?php foreach($slider_ as $img=>$item){?>
                            <div class="item<?php if($loop1 == $sliderno) echo ' active';?>">
                                <img src="<?php echo base_url('assets/arniImage/schools/'.$page.'/'.$img); ?>?version=2.2" alt="<?php echo $item; ?>">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                        <small class="animated fadeIn">CALL US TODAY (Toll Free)</small>
                                        <div class="phone animated lightSpeedIn">18008918962</div>
                                        <h1 class="animated lightSpeedIn hidden-xs" style="font-size:40px!important;"><?php echo $item; ?></h1>                                            
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
                    <div style="clear: both;"><br></div>
                    <div class="container">
                        <div class="content-wrapper">                          
                            <section class="" style="display: inline;">
                                <?php if($inner_page != 'faculty'){?>
                                <?php $this->load->view('templates/submenu'); ?>
                                <?php } else { ?>
                                    <img src="<?php echo base_url('assets/arniImage/sarvepalliRadhakrishnanji.jpg');?>">
                                <?php } ?>
                            </section>
                            <?php $this->load->view('academics/faculty/'.$inner_page.'/'.$subpage); ?>                                                    
                        </div>
                    </div>