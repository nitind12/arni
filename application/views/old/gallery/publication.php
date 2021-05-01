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
                                        <li><a href="<?php echo site_url('agi')?>">Home</a></li>
                                        <li><a href="#">Gallery</a></li>
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
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content">                                      
                                                <!--img class="img-responsive" style="padding-bottom: 30px;" src="<?PHP echo base_url() . 'assets/img/journal.jpg'; ?>"-->
                                                    <p align="justify"><b><h2 style="color: #009000"><i class="fa fa-cog fa-spin fa-fw"></i>AVAHAN</h2> 
                                                        <a href="http://publishingindia.com/avahan/" target="_blank" style="color: #000000">(ISSN:  2347 - 4556)</b> A peer reviewed journal of Hospitality & Tourism Research</b></a></p>
                                                    <p> <a href="<?PHP echo base_url() . 'assets/dwnlds/AVAHANJournal2016.pdf'; ?>" target="_blank"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> See Detail</a></p>
                                                    <hr>
												    <p align="justify"><b><h2 style="color: #009000"><i class="fa fa-cog fa-spin fa-fw"></i>ACME</h2> Endeavoring thoughts towards pinnacle (ISSN: 0974 - 1763)</b></p> 
												    <p>A peer reviewed journal of Faculty of Commerce & Business Management</p>
												    <p> <a href="<?PHP echo site_url('agi/acme');?>"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> See Detail</a></p>	
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
    