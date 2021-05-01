
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
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
                                        <li><a href="#">Alumni</a></li>
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
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content">                                      
                                                <section>
                                                <blockquote>They were here, Yesterday. Today, they are our Brand Ambassadors in Top Organizations.</blockquote>               
                                                <?php foreach ($fac_profile as $item) { ?>
                                                    <div class="col-md-4 col-sm-4 col-xs-12" style="max-height:389px;min-height:389px; overflow:hidden;">
                                                        <figure style="background: #f0f0f0; border:#f0f0f0 solid 1px; margin-top: 2em;padding:.5em;">
                                                            <div class="css-team-avatar" align="center" style="margin-top: 1em; background: #f0f0f0 !important">               
                                                                <img class="media-object img-responsive" src="<?php echo base_url('assets/alumniPic/' . $item->pic); ?>" alt="Amrapali alumni - <?php echo $item->name; ?>" style="max-width: 130px; height:150px;">             
                                                            </div>
                                                            <div class="css-team-info">
                                                            <h3 class="css-team-heading"><?php echo $item->name; ?><br> <small><?php echo $item->company; ?></small>
                                                                <br><small><b>Location: </b><?php echo $item->location; ?></small>
                                                                <hr><small><b><?php echo $item->course; ?></b></small>
                                                                <br> <small><b>Passout:</b> <?php echo $item->passout; ?></small>
                                                            </h3>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                <?php } ?>
                                                </section>                                                 
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->