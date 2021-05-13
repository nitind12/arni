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
        'P4.jpg'=>$breadcrumb,
        'P1.jpg'=> $breadcrumb,
        'P2.jpg'=>$breadcrumb,
        'P3.jpg'=>$breadcrumb
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
                    <div style="clear: both;"><br></div>
                    <div class="container">
                        <div class="content-wrapper">
                            <section class="" style="display: inline;">
                                
                            </section>
                            <section class="trusted-client-wrapper">
                                
                                <div class="col-md-6">
                                    <h2 class="section-title wow fadeInDown" >Contact Us</h2>
                                    <div class="col-md-12" style="border: #fff solid 0px">
                                                                    
                                    <div class="mini-contact">
                                            <h3>You can directly write to us</h3><br>
                                            <?PHP echo form_open('#','id=frmEnquiry name=frmEnquiry role=form'); ?>
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input type="text" name="txtEnqName" id="txtEnqName" class="form-control" placeholder="Full Name..." />
                                            </div>
                                            <div class="form-group">
                                                <label>Your Email</label>
                                                <input type="email" name="txtEnqEmail" id="txtEnqEmail" class="form-control" placeholder="Email..." />
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" name="txtSubject" id="txtSubject" class="form-control" placeholder="Subject..." />
                                            </div>
                                            <div class="form-group">
                                                <label>Your Enquiry</label>
                                                <textarea name="txtWriteHere" rows="5" id="txtWriteHere" class="form-control" placeholder="Write here..."></textarea>
                                            </div>
                                            <div class="form-group" style="float: left">
                                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Send</button>
                                            </div>      
                                            <div id="cntct_msg_" style="float: left; padding: 5px 0px 0px 5px; min-width: 50px; height: 20px; color: #ff0000"></div>
                                        <?PHP echo form_close(); ?>                                
                                        </div>
                                    </div><!-- /.col-md-4 -->                               
                                </div>
                                <div class="col-md-6">
                                    <div class="mini-contact">
                                        <div class="col-md-12" style="background: #FFFAC1; border-radius: 5px; color: #000">
                                        <br>
                                        <img src="<?php echo base_url('assets/arniImage/contact.jpg'); ?>" class="img-responsive" alt="Contact us, Amrapali Group of Institutes">  
                                        <br>
                                        <h3>Contact us for Admission</h3>
                                        <span style="color:#FF5733; font-size:1.4em">Toll-Free: 1800 891 8962 </span><br>
                                        </div>
                                       
                                        <div class="col-md-12"></div>
                                        <div class="col-md-12" style="background: #FFFAC1; border-radius: 5px; color: #000; padding: 5px 15px">
                                            <b>Email:</b>  info@arni.in
                                        </div>
                                        <div class="col-md-12"></div>
                                        <div class="col-md-12" style="background: #FFFAC1; border-radius: 5px; color: #000; padding: 5px 15px">
                                            <b>Email:</b>  admission@arni.in
                                        </div>
                                    </div>                        
                                </div>
                                <div class="col-md-6">
                                    <div class="mini-contact">   
                                    <br>                                                                            
                                        <h3>Visit us</h3>
                                        <address>
                                        Arni University, (Kathgarh),Tehsil Indora, Distt. Kangra, Himachal Pradesh Pin-176401
                                        </address>
                                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Arni%20University&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:200px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedded google maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:100%;}</style></div></div>
                                    </div>
                                </div>

                            <div style="clear:both"></div>
                        </section>                                                     
                        </div>
                    </div>