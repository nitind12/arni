<body>
    <style>
        a{
            color: #505050;
        }
        a:hover{
            color: #500050;
        }
        .panelsize{

        }
        .newsletter{
            width: 80px;
            border: #ff0000 solid 0px;
        }
        .mag{
            width: 80px;
            border: #ff0000 solid 0px;
        }
        .picture-box{
            padding: 1px; 
            float: left; 
            background: #f0f0f0;
            opacity: .3;
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
                    </section>


                    <div class="container">
                        <div class="content-wrapper">
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-xs-12 col-md-9 col-sm-8">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content">
                                                <img src="<?php echo base_url('assets/img/newsletter.jpg'); ?>" class="img-responsive" alt=""> 
                                                <div class="panelsize col-sm-12" style="clear: both; padding: 15px"></div>   

                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div style="clear: both; padding: 5px"></div>
                                                    <div class="picture-box">
                                                        <a href="<?PHP echo base_url('assets/newsletters/hm2020_3.pdf');?>" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Abhiwyakti">
                                                        </a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/hm2020_3.pdf');?>" target="_blank">
                                                        Abhiwyakti (Vol 15)<br> The reflection of <br />Hotel Management.
                                                        </a>
                                                    </div>
                                                </div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div style="clear: both; padding: 5px"></div>
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/hm2020_2.pdf');?>" target="_blank">
                                                                <img src="<?php echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Abhiwyakti">
                                                                </a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/hm2020_2.pdf');?>" target="_blank">
                                                        Abhiwyakti (Vol 14)<br> The reflection of <br />Hotel Management.
                                                        </a>
                                                    </div>
                                                </div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div style="clear: both; padding: 5px"></div>
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/hm2020.pdf');?>" target="_blank">
                                                                <img src="<?php echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Abhiwyakti">
                                                            </a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/hm2020.pdf');?>" target="_blank">
                                                        Abhiwyakti (Vol 13)<br> The reflection of <br />Hotel Management.
                                                        </a>
                                                    </div>
                                                </div>

                                                <div style="clear: both; padding: 5px"></div>
                                                
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/FCSA_AIMCA_2017_vol_12.pdf');?>" target="_blank">
                                                                <img src="<?php echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Abhiwyakti">
                                                            </a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/FCSA_AIMCA_2017_vol_12.pdf');?>" target="_blank">
                                                        Abhiwyakti (Vol 12)<br> The reflection of <br />Hotel Management.
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/HM2017.pdf');?>" target="_blank">
                                                                <img src="<?php echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Abhiwyakti">
                                                            </a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/HM2017.pdf');?>" target="_blank">
                                                        Abhiwyakti (Vol 11)<br> The reflection of <br />Hotel Management.
                                                        </a>
                                                    </div>
                                                </div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/HM2016.pdf');?>" target="_blank">
                                                                <img src="<?php echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Abhivyakti"></a>
                                                            </a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/HM2016.pdf');?>" target="_blank">
                                                        Abhiwyakti (Vol 10)<br> The reflection of <br />Hotel Management.
                                                        </a>
                                                    </div>
                                                </div>

                                                <div style="clear: both; padding: 5px"></div>
                                                
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/FCSA_AIMCA_2017_vol_11.pdf');?>" target="_blank">
                                                                <img src="<?php echo base_url('assets/img/newsletter.png');?>" class="mag" title="Sanganan"></a></a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/FCSA_AIMCA_2017_vol_11.pdf');?>" target="_blank">
                                                            Sanganan (Vol 11)<br>The reflection of <br />Computer Science <br /> &amp; Applications.
                                                        </a>
                                                    </div>
                                                </div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/FCSA_AIMCA_2015_vol_1.pdf');?>" target="_blank">
                                                                <img src="<?PHP echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Sanganan" /></a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/FCSA_AIMCA_2015_vol_1.pdf');?>" target="_blank">
                                                            Sanganan (Vol 11)<br>The reflection of <br />Computer Science <br />&amp; Applications.
                                                        </a>
                                                    </div>
                                                </div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/EEE_2015_vol_1.pdf');?>" target="_blank">
                                                                <img src="<?PHP echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Vidyut" /></a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/EEE_2015_vol_1.pdf');?>" target="_blank">
                                                            Vidyut: Vol(1) <br>The reflection of <br />Eletrical &amp; <br>Electronics <br />Engineering.
                                                        </a>
                                                    </div>
                                                </div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/FHM_AIHM_2016_vol_11.pdf');?>" target="_blank">
                                                                <img src="<?PHP echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Abhiwyakti" /></a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/FHM_AIHM_2016_vol_11.pdf');?>" target="_blank">
                                                            Abhivyakti: Vol(11)<br>The reflection of <br />Hotel Management.
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/footprints.pdf');?>" target="_blank">
                                                                <img src="<?PHP echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Footprints" /></a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/footprints.pdf');?>" target="_blank">
                                                            Footprints Alumni <br />Newsletter [2016].
                                                        </a>
                                                    </div>
                                                </div>
                                                <div style="clear: both; padding: 5px"></div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/Kriti2015.pdf');?>" target="_blank">
                                                                <img src="<?PHP echo base_url('assets/img/newsletter.png');?>" class="newsletter" title="Kriti" /></a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/Kriti2015.pdf');?>" target="_blank">
                                                            The reflection of <br>Management <br>Department <br>Newsletter.
                                                        </a>
                                                    </div>
                                                </div>
                                                <div style="clear: both; padding: 5px"></div>
                                                <hr>
                                                <div style="clear: both; padding: 5px"></div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/hmmag2019.pdf');?>" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/mag.png');?>" class="mag">
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/hmmag2019.pdf');?>" target="_blank">                     
                                                        Annual Magazine of  <br />Amrapali Institute of <br />Hotel Management
                                                        </a>
                                                    </div>
                                                </div>
                                                <div align="justify" class="panelsize col-sm-4">
                                                    <div class="picture-box">
                                                            <a href="<?PHP echo base_url('assets/newsletters/HITVol2.pdf');?>" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/mag.png');?>" class="mag" title="Annual Magazine"></a>
                                                    </div>
                                                    <div style="float: left; padding: 5px">
                                                        <a href="<?PHP echo base_url('assets/newsletters/HITVol2.pdf');?>" target="_blank">                     
                                                        Annual Magazine of  <br />Amrapali Institute of <br />Hotel Management
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div style="clear: both; padding: 5px"></div>
                                                <hr>
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->

                                    <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                        <?php $this->load->view('templates/quick-links'); ?>                                            
                                        <?php $this->load->view('templates/alumni-img-scroll'); ?>
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->