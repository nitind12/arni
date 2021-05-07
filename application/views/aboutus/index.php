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
                                
                                    <div class="col-md-8">
                                        <h2 class="section-title wow fadeInDown" >About Arni</h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                                                               
                                            <p>Arni University (AU) came into existence by an Act No.23 of 2009 of Government of Himachal Pradesh and approved by the UGC, vide Notification No- F No 8-5/2010(CPP-1/PU), dated 03 Mar 2010, under Section 2 (f) of UGC Act, 1956 with the objective to promote inter-disciplinary Higher Education and Research in the needy areas of Himachal Pradesh, Punjab and J&K.</p>
                                            <p>The University is located at Kathgarh, Kangra, in the state of Himachal Pradesh, about 6 Km from the National Highway No 1A (Four Lanes Highway) and approx. 25 Km from Pathankot City. The University has one of the most attractive lush green pollution –free Campus overlooking Beas River and in the foothills of Dhauladhar Mountain Ranges.</p>
                                            <p>The Founder, Faculty and Staff are fully Dedicated to it's Credo <b> Bringing Ambition to Life </b>. This Credo is underpinned by a value system of Ambition, Inclusivity, Intergrity,Equity ,Respect and Sustainability in everything we do.</p>
                                        
                                        </div><!-- /.col-md-4 -->                               
                                    </div>
                                    <div class="col-md-4">
                                        <h2 class="section-title wow fadeInDown" >Arni Edge</h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <ul class="list-group">
                                                <li class="list-group-item" style="padding:5px!important;">200+ Expert Instructors</li>
                                                <li class="list-group-item" style="padding:5px!important;">State of Art Infrastructure</li>
                                                <li class="list-group-item" style="padding:5px!important;">Ultra-modern class rooms</li>
                                                <li class="list-group-item" style="padding:5px!important;">Elegant and well stocked library</li>
                                                <li class="list-group-item" style="padding:5px!important;">Wi-Fi Campus</li>
                                                <li class="list-group-item" style="padding:5px!important;">Multi-purpose Gyms</li>
                                                <li class="list-group-item" style="padding:5px!important;">Modern canteen</li>
                                                <li class="list-group-item" style="padding:5px!important;">Well maintained hostels</li>
                                                <li class="list-group-item" style="padding:5px!important;">Industry 4.0 curriculum</li>
                                                <li class="list-group-item" style="padding:5px!important;">Campus placement facility</li>
                                            </ul>                                    
                                        </div><!-- /.col-md-4 -->                               
                                    </div>

                                    
                                    <div class="col-md-12" style="clear: both"></div>
                                    
                                    <div class="col-md-12" style="clear: both; padding: 10px 0px"></div>
                               
                                <div style="clear:both"></div>

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            Vision & Mission</a>
                                        </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="col-md-6">
                                            <br>
                                                <p><b>OUR VISION</b> To inspire our students to have a transformative impact on society through outstanding achievements in learning , continual innovation in education, research, creativity, and entrepreneurship to be able to effectively contribute to the economic development of our nation</p>
                                                <ul>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">To create an institution of quality education,scientific learning and robust professionalism.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">An institution which will benifit student,staff and society by seamlessly linking education with employment.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">An institution which will promote individual excellence and collective endeavors through interdisciplinary studies,International diversity and adoption of best practices in the peaceful and tranquil environment of the Himalayas.</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                            <br>
                                                <p><b>OUR MISSION</b> Creating attributes, skills and knowledge that all labour market participants should possess to ensure they have the capability of being effective in the workplace – to the benefit of themselves, their employer and the wider economy.'</p>
                                                <ul>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">To be the most preferred choice of students, faculty and Industry.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Create leadership that is assertive, creative efficient and effective.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Promotion of an inclusive culture of global citizenship and contribution.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Achieve academic excellence.</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                            <br>
                                                <p>Arni is the only University in this location and connected to the HUB of the industry. There is no other University in the surrounding areas of about 100 km distance. It must be understood that a University has tremendous numerous advantages over the colleges, who depend upon some other university for various directions, control, conduct of exams, results and issue of certificates. Students have to visit University department for many queries and issues which would result in avoidable wastage of money, valuable time and efforts.</p>
                                                <ul class="list-group" >
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Has passion to groom leaders who are professionals with high character qualities and ethos and values.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Ranked among the top universities of Himachal Pradesh.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">World class state-of-the-art infrastructure in terms of Classrooms, Seminar Halls and well stocked Library.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Multi-discipline lush green sprawling Campus, spread over 120 acres with an impressive Panoramic view of Dhauladhar Mountain Ranges.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">High Quality educational programmes, delivered by well qualified, reputed and experienced faculty, along with friendly and caring multi-cultural environment.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Facilitates excellent placements in the successful and leading branded industries/ companies all over the country.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Library and learning resources linked to international Electronic Database.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Well equipped Computer and Engineering Labs, furnished with educational technology equipment.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Most high-tech WI-FI Campus to help students in latest learning at the time and place of their choosing.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">A dedicated Team, headed by distinguish academicians.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Well furnished Hostel facilities for Boys and Girls with almost all indoor and outdoor sports and recreational facilities, including separate Gyms for Boys and Girls to give them feeling of “Home Away from Home”.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">A Health Care Centre to cater for the emergency medical needs of students and staff.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">A Non – Smoking and Non- Ragging Campus.</li>
                                                    <li class="list-group-item" style="text-align:justify; font-style:italic;">Dedicated Transport facilities to most of the surrounding areas.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            Act & Statutes</a>
                                        </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                                            <iframe src="<?php echo base_url('assets/arniDownload/StatutesofUniversity.pdf'); ?>" width="100%" height="500px"></iframe>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>                                                           
                        </div>
                    </div>