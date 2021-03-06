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
        'P4.jpg'=>$titleMain,
        'P1.jpg'=> $titleMain,
        'P2.jpg'=>$titleMain,
        'P3.jpg'=>$titleMain
    );

    
?>

<link rel="stylesheet" href="<?PHP echo base_url() . 'assets/css/magnific-popup.css'; ?>">
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
                                <img src="<?php echo base_url('assets/arniImage/about/'.$img); ?>?version=2.2" alt="<?php echo $item; ?>">
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
                    
                    <div class="container">
                        <div class="content-wrapper">
                            <section class="" style="display: inline;">
                                <?php $this->load->view('templates/submenu'); ?>
                            </section>

                            <section class="trusted-client-wrapper">
                                <div class="col-md-12">

                                    <?php $this->load->view('templates/breadcrumb');?>  
                                    <h2 class="section-title wow fadeInDown" >Gallery of <?php echo $title;?></h2>  
                                    <a href="<?php echo site_url('gallery/photos');?>" style="color: orange">&lArr; Back</a>  
                                    <br><br>   
                                                    
                                    <div class="row">
                                        <div id="grid">
                                            <?php foreach ($gallery_ as $item) { ?>
                                            <div class="portfolio-item col-xs-12 col-md-3 col-sm-3" style="text-align: center">
                                                <div class="single-portfolio">
                                                    <img src="<?PHP echo ARNIPANEL___ . '/_assets_/gallery/' . $item->PHOTO_; ?>?version=1.1" style="max-width: 180px; height:100%;" class="img-thumbnail" alt="Arni Photos"/>                                            
                                                    <div class="portfolio-links">
                                                        <a class="image-link" href="<?PHP echo ARNIPANEL___ . '/_assets_/gallery/' . $item->PHOTO_; ?>"><i class="fa fa-search-plus"></i></a>
                                                    </div><!-- /.links -->
                                                </div><!-- /.single-portfolio -->
                                            </div><!-- /.portfolio-item -->
                                            <?php } ?>                                       
                                        </div><!-- /#grid -->
                                    </div><!-- /.row -->
                                </div>
                                <div style="clear:both"></div>  
                            </section>
                        </div>
                    </div>
<div style="clear: both;"><br></div>
            