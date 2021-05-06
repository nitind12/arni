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
                            <section class="">
                                    <nav class="topnav">
                                        <div class="container">
                                            <ul class="nav navbar-nav">
                                                <li><a href="#" class="active">Why Arni? </a></li>
                                                <li><a href="#">Governance</a></li>
                                                <li><a href="#">Management's Talk</a></li>
                                                <li><a href="#">University Committee</a></li>
                                            </ul>
                                        </div>
                                </center>
                            </section>
                            <section class="trusted-client-wrapper">
                                
                                    <div class="col-md-12">
                                        <h2 class="section-title wow fadeInDown" >About Arni</h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                                                               
                                            <p>Arni University (AU) came into existence by an Act No.23 of 2009 of Government of Himachal Pradesh and approved by the UGC, vide Notification No- F No 8-5/2010(CPP-1/PU), dated 03 Mar 2010, under Section 2 (f) of UGC Act, 1956 with the objective to promote inter-disciplinary Higher Education and Research in the needy areas of Himachal Pradesh, Punjab and J&K.</p>
                                            <p>The University is located at Kathgarh, Kangra, in the state of Himachal Pradesh, about 6 Km from the National Highway No 1A (Four Lanes Highway) and approx. 25 Km from Pathankot City. The University has one of the most attractive lush green pollution –free Campus overlooking Beas River and in the foothills of Dhauladhar Mountain Ranges.</p>
                                            <p>The Founder, Faculty and Staff are fully Dedicated to it's Credo Bringing Ambition to Life. This Credo is underpinned by a value system of Ambition, Inclusivity, Intergrity,Equity ,Respect and Sustainability in everything we do.</p>
                                        
                                        </div><!-- /.col-md-4 -->                               
                                    </div>
                                    <div class="col-md-12" style="clear: both"></div>
                                    
                                    <div class="col-md-12" style="clear: both; padding: 10px 0px"></div>
                               
                                <div style="clear:both"></div>
                            </section>
                            <section class="service-wrapper">
                                <h2 class="section-title wow fadeInDown">Schools</h2>
                                <div class="row">
                                <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fhm/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aihm1.jpg"?>" title="AIHM" alt="AIHM" style="max-width: 140px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fhm/courses'); ?>">School of Art & Humanities</a></h3>
                                                <p>English<br>Education<br>Psychology<br>Journalism & Mass Communication<br>Fashion Design</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fhm/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php // echo site_url('faculty/ftca/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aits1.jpg"?>" title="AITS" alt="AITS" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/ftca/courses'); ?>">School of Technology</a></h3>
                                                <p><b style='color: #FFC95C'>B.Tech. in</b> <br>Civil Engineering (CE)<br>Mechanical Engineering (ME)<br>Computer Science & Engineering (ECE)<br><br>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/ftca/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    
                                   

                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/pharm1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Pharmacy</a></h3>
                                                <p>Pharmacy</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/pharm1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Life & Allied Science</a></h3>
                                                <p>Life & Allied Science</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/fcsa1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Computer Application</a></h3>
                                                <p>Computer Science & Applicaton</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fps/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/aihm1.jpg"?>" title="FPPS" style="max-width: 120px;" class="img-responsive" alt="Pharmacy and Sciences">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fps/courses'); ?>">School of Tourism & Hospitality Management</a></h3>
                                                <p>Tourism & Hospitality Management</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fe/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/bed1.jpg"?>" title="BED" alt="BEd" style="min-width: 120px;max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fe/courses'); ?>">School of Physical Science</a></h3>
                                                <p>Physical Science </p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fe/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fe/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/bed1.jpg"?>" title="BED" alt="BEd" style="min-width: 120px;max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fe/courses'); ?>">School of Skill Development & Vocational Studies</a></h3>
                                                <p>Skill Development & Vocational Studies </p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fe/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6 wow fadeInRight">
                                        <div class="media">
                                            <a class="media-left" href="<?php //echo site_url('faculty/fcbm/courses'); ?>">
                                                <img src="<?php echo base_url(). "assets/arniImage/fcbm1.jpg"?>" title="FCBM" alt="FCBM" style="max-width: 120px;" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="<?php //echo site_url('faculty/fcbm/courses'); ?>">School of Commerce &amp; Business Management</a></h3>
                                                <p>Journalism & Mass Communication<br>Business Studies<br>Commerce</p>
                                                <a class="btn btn-primary btn-lg wow fadeInDown" href="<?php //echo site_url('faculty/fps/courses'); ?>">Know More</a>
                                            </div> <!-- /.media-body -->
                                        </div> <!-- /.media -->
                                    </div> <!-- /.col-md-6 -->
                                </div> <!-- /.row -->
                            </section>                                                               
                        </div>
                    </div>