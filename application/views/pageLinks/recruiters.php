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
                                        <li class="active"><?php echo $meta['title']; ?></li>
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
                            
                            <div class="entry-content">                                                      
                                <ul class="partner-logo">
                                    <?PHP for ($loop = 1; $loop <= 45; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive" src="<?PHP echo base_url() . 'assets/img/cmpLogos/' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?>

                                    <?PHP for ($loop = 1; $loop <= 25; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive" src="<?PHP echo base_url() . 'assets/img/cmpLogos/c' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?>

                                    <?PHP for ($loop = 1; $loop <= 8; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive" src="<?PHP echo base_url() . 'assets/img/cmpLogos/b' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?>

                                    <?PHP for ($loop = 1; $loop <= 9; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive" src="<?PHP echo base_url() . 'assets/img/cmpLogos/h' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?>  

                                    <?PHP for ($loop = 1; $loop <= 14; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive" src="<?PHP echo base_url() . 'assets/img/cmpLogos/m' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?> 

                                    <?PHP for ($loop = 1; $loop <= 8; $loop++) { ?>
                                        <li class="wow zoomIn"><img class="img-responsive" src="<?PHP echo base_url() . 'assets/img/cmpLogos/b' . $loop . '.png'; ?>" alt="Amrapali Recruiters Logo"></li> 
                                    <?PHP } ?>                                           
                                </ul>                                           
                            </div><!-- /.row -->
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->