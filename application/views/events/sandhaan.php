    <body>
    <?php $this->load->view('tagmanager'); ?>
        <style type="text/css">
            .detail_{
                border-radius: 10px;
                padding: 5px;
                background: #FF5D00;
                color: #ffffff;
                float: right;
                font-size: 12px;
            }
        </style>
        <div id="st-container" class="st-container">
            <div class="st-pusher">
                <div class="st-content">
                    <div class="st-content-inner">
                        <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <?php $this->load->view('templates/menu'); ?>
                        </header>

                        <section class="page-header-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="page-header">
                                            <h1><?php echo $title;?></h1>
                                        </div>
                                        <ol class="breadcrumb">
                                            <li><a href="<?php echo site_url('Agi');?>">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li class="active"><?php echo $title;?></li>
                                        </ol>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </section>


                        <div class="container">
                            <div class="content-wrapper">
                                <div class="inner-content">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 col-sm-12">
                                            <article class="blog-post-wrapper single-article">
                                                <header class="entry-header">                                                    
                                                    <h2 class="entry-title" style="float: left"><a href="#"><?php echo $title;?></a></h2>
                                                    <div style="float: right"><a href="https://goo.gl/forms/4YbDyaTPehzCxFh22" target="_blank" style="padding: 5px 15px; border-radius: 8px; background: #ff5400; color: #ffffff; font-weight: bold">Register here</a></div>
                                                </header><!-- /.entry-header -->                                                

                                                <div class="entry-content">
                                                    <img src="<?php echo base_url('assets/img/sandhaan.jpg'); ?>?version=1.4" class="img-responsive" alt=""> 
                                                <p style="margin-top: 10px;">
                                                    <p>
                                                        <img src="<?php echo base_url('assets/img/wings.png'); ?>" class="img-responsive" alt=""> 
                                                    </p>
                                                    <p>
                                                        <img src="<?php echo base_url('assets/img/events.png'); ?>" style="width: 100px">
                                                    </p>
                                                </div><!-- /.entry-content -->
                                            </article>           
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 30px;">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event1">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#robotica" aria-expanded="false" aria-controls="collapseOne">
                                                                    Robotica
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="robotica" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event1">
                                                            <div class="panel-body">
                                                                <p>THERE ARE THREE PHASE OF THIS EVENTS</p>
                                                                <ul style="list-style: circle; padding: 0px 0px 0px 25px">
                                                                    <li>Roborace</li>
                                                                    <li>Robo Soccer</li>
                                                                </ul>
                                                                <a href="<?php echo base_url('assets/sandhaan/robotica.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event2">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#langaming" aria-expanded="false" aria-controls="collapseOne">
                                                                    LAN-Gaming
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="langaming" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event2">
                                                            <div class="panel-body">
                                                                In this event, you can participate in the biggest LAN gaming challenge of the year. <br>
                                                                <p>
                                                                    <b>NFS (Need for Speed)</b>: for those who love to ride monsters and rule the roads. <br>

                                                                    <b>Smart Phone based</b>: Multiplayer shooting game.<br>

                                                                    <a href="<?php echo base_url('assets/sandhaan/langame.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>

                                                                    <div style="clear: both; font-size: 10px"><b>*Note</b>: Contestants are required to bring their smartphones along with headphones to participate in shooting game.</div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event3">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#eposter" aria-expanded="false" aria-controls="collapseOne">
                                                                    E-Poster/ Poster
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="eposter" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event3">
                                                            <div class="panel-body">
                                                                <b>E-Poster</b><br>
                                                                The competition provides an opportunity to school/college level students to show their artistic sense and command on computer designing software so that they can produce good visualizations in their careers. Participants will be given a theme on which they have to deign E-Poster. <br>
                                                                <b>SOFTWARE(S) TO BE USED</b><br>
                                                                &nbsp;&nbsp;•&nbsp;ADOBE PHOTOSHOP<br>
                                                                &nbsp;&nbsp;•&nbsp;ADOBE ILLUSTRATOR<br>
                                                                &nbsp;&nbsp;•&nbsp;COREL DRAW<br>
                                                                &nbsp;&nbsp;•&nbsp;COREL PHOTO-PAINT<br>
                                                                &nbsp;&nbsp;•&nbsp;MS-PAINT

                                                                <br><br>

                                                                <b>Poster</b><br>
                                                                Poster competition is to provide platform and encourage students to showcase their drawing talent and creativity on a given theme.
                                                                <br><br>
                                                                <a href="<?php echo base_url('assets/sandhaan/eposter.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event5">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#treasurehunt" aria-expanded="false" aria-controls="collapseOne">
                                                                    Treasure Hunt
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="treasurehunt" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event5">
                                                            <div class="panel-body">
                                                                <div style="text-align: center">IF YOU THINK YOUR MIND IS NOT TOO BLUNT ………………. WHY DON’T YOU COME AND TRY <br> <h3 style="color: #900000">THE TREASURE HUNT</h3>
                                                                </div>
                                                                <br><br>
                                                                <a href="<?php echo base_url('assets/sandhaan/treasure.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event6">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#twominutestofame" aria-expanded="false" aria-controls="collapseOne">
                                                                    2-Minutes to Fame
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="twominutestofame" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event6">
                                                            <div class="panel-body">
                                                                <div style="text-align: center">If you have a tremendous talent, get the fame in just TWO MINUTES <br> <h3 style="color: #900000">2-Minutes to Fame</h3>
                                                                </div>
                                                                <br>
                                                                <a href="<?php echo base_url('assets/sandhaan/fame.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event4">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#codex" aria-expanded="false" aria-controls="collapseOne">
                                                                    Codex
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="codex" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event4">
                                                            <div class="panel-body">
                                                                The competition provides an opportunity to the students to show their programming and innovative skills. Participants has to design a game or any given entities under this activity.<br>
                                                                <a href="<?php echo base_url('assets/sandhaan/codex.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>
                                                                <span style="font-size: 10px"><b>*Note</b>: C/ C++/ Java and PHP can be used. (Student have to fill the choice at the time of Registration) </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event7">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#yantrohan" aria-expanded="false" aria-controls="collapseOne">
                                                                    Yantrohan
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="yantrohan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event7">
                                                            <div class="panel-body">
                                                                The competition provides an opportunity to the students to show their working project model.<br>
                                                                <a href="<?php echo base_url('assets/sandhaan/yantrohan.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="event8">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#techquiz" aria-expanded="false" aria-controls="collapseOne">
                                                                    Technical Quiz
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="techquiz" class="panel-collapse collapse" role="tabpanel" aria-labelledby="event8">
                                                            <div class="panel-body">
                                                                The competition provides an opportunity to the students to show their technical knowledge and reflexes in seconds.<br>
                                                                <a href="<?php echo base_url('assets/sandhaan/techquiz.pdf');?>" class="detail_" target="_blank">Detail &amp; Rules Attached</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                        </div><!-- /.col-md-9 -->
                                        <div class="col-xs-12 col-md-12 col-sm-12">
                                            <a href="<?php echo base_url('assets/img/sandhaan.jpg');?>?version=1.4" target="_blank">
                                                <img src="<?php echo base_url('assets/img/sandhaan.jpg');?>?version=1.4" border="0">
                                            </a>
                                        </div>
                                        <div style="float: right; margin-top: 20px"><a href="https://goo.gl/forms/4YbDyaTPehzCxFh22" target="_blank" style="padding: 5px 15px; border-radius: 8px; background: #ff5400; color: #ffffff; font-weight: bold">Register here</a></div>
                                    </div><!-- /.row -->
                                </div><!-- /.inner-content -->
                            </div><!-- /.content-wrapper -->
                        </div><!-- /.container -->