<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header">
                                        <h1><?php echo $title; ?></h1>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url('agi');?>">Home</a></li>
                                        <li class="active"><?php echo $title; ?></li>
                                    </ol>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>


                    <div class="container">
                        <div class="content-wrapper">   
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-xs-12 col-md-9 col-sm-8">
                                        <article class="blog-post-wrapper single-article">
                                            
                                            <?php $this->load->view('templates/ticker-news');?>
                                            
                                            <header class="entry-header">                                                    
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content">
                                                <img src="<?php echo base_url('assets/img/antiragging.jpg'); ?>" class="img-responsive" alt=""> 
                                                <p>&nbsp;</p>
                                                <style>
                                                    .li a{
                                                        font-size:15px;
                                                        color: #052b46;
                                                        line-height: 30px;
                                                        font-weight:bold;
                                                    }
                                                </style>
                                                <ul>
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/Annexure I (Hindi).pdf');?>" target="_blank">Annexure I (Affidevit to be filled by the student {Hindi})</a></li>
                                                 
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/Annexure II (Hindi).pdf');?>" target="_blank">Annexure II (Affidevit to be filled by the Parent/Guardian {Hindi})</a></li>
                                                 
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/Annexure I (English).pdf');?>" target="_blank">Annexure I (Affidevit to be filled by the student {English})</a></li>
                                                 
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/Annexure II (English).pdf');?>" target="_blank">Annexure II (Affidevit to be filled by the Parent/Guardian {English})</a></li>
                                                 
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/antiraggingteam.pdf');?>" target="_blank">Anti Ragging Enforcement Team and Helpline</a></li>
                                                  
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/Annexure V(i).pdf');?>" target="_blank">Annexure V(i) (Performa for submission of report)</a></li>
                                                  
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/Annexure V(ii).pdf');?>" target="_blank">Annexure V(ii) (Performa for submission of report)</a></li>
                                                  
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/Anti Ragging Instructions 2012.pdf');?>" target="_blank">ANTI RAGGING INSTRUCTIONS 2012</a></li>
                                                 
                                                    <li class="li"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/common/antirag/UGC_REGULATIONS ANTI RAGGING 2009.pdf');?>" target="_blank">UGC Regulations 2009 (Refer Clauses - 3, 7 & 9.1)</a></li>
                                                </ul>
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->

                                    <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                        <?php $this->load->view('templates/quick-links'); ?>
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->