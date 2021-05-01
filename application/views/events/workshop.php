<body>
<?php $this->load->view('tagmanager'); ?>
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
                                        <li><a href="#">Events</a></li>
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
                                            <header class="entry-header">                                                    
                                                <h2 class="entry-title"><a href="#">Workshop on "Cloud Computing and the Virtual World"</a></h2>
                                                <p><a href="https://goo.gl/forms/yB3wGgOozpelckhg2" style="font-size: 17px; color:red" target="_blank"><i class="fa fa-arrow-right fa-1x"></i> Click Here for Registration</a></p>

                                            </header><!-- /.entry-header -->                                                
                                            <div class="entry-content col-sm-12">
                                                <img src="<?php echo base_url(). 'assets/img/cloudPoster.jpg'?>">
                                            </div><!-- /.entry-content -->
                                            
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->