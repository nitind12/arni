<link rel="stylesheet" href="<?PHP echo base_url() . 'assets/css/magnific-popup.css'; ?>">
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
                                        <h1><?php echo $title1; ?></h1>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url('agi');?>">Home</a></li>
                                        <li><a href="<?php echo site_url('agi/imagePics');?>">Gallery</a></li>
                                        <li class="active"><a href="#"><?php echo $title1; ?></a></li>
                                    </ol>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>

                    <div class="container">
                    <div class="content-wrapper">
                        <div class="inner-content">
                            <?php $this->load->view('templates/ticker-news');?>                            
                            <header class="entry-header">                                                    
                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                <br>
                            </header><!-- /.entry-header -->
                            
                            <div class="row four-column">
                                <div id="grid">
                                    <?php foreach ($gallery_ as $item) { ?>
                                    <div class="portfolio-item col-sm-6 col-md-3">
                                        <div class="single-portfolio">
                                            <img src="<?PHP echo AGIPANEL___ . '/_assets_/gallery/' . $item->PHOTO_; ?>?version=1.1" width="200" alt="Amrapali Photos"/>                                            
                                            <div class="portfolio-links">
                                                <a class="image-link" href="<?PHP echo AGIPANEL___ . '/_assets_/gallery/' . $item->PHOTO_; ?>"><i class="fa fa-search-plus"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->
                                    <?php } ?>                                       
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->

