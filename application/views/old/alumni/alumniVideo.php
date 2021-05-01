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
                                <?php $this->load->view('templates/ticker-news');?>                            
                                <header class="entry-header">                                                    
                                    <h2 class="entry-title"><a href="#">See What Our Alumni share about us</a></h2>
                                    <br>
                                </header><!-- /.entry-header -->
                                
                                <div class="entry-content">   
                                  <ul class="partner-logo">                        
                                        <div class="col-sm-4">                                       
                                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/-dAlGYKp69k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div> 
                                        <div class="col-sm-4"> 
                                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/vrw3ihADKNQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  
                                        </div> 
                                        <div class="col-sm-4">
                                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/FGvqMWwgKzk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>    
                                        <div class="col-sm-4">
                                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/AvCKBRKhqIQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div> 
                                        <div class="col-sm-4">
                                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/_73d_QfbiVE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>    
                                        <div class="col-sm-4">
                                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/rA8ZqlJ488Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>        
                                        <div class="col-sm-4" style="padding-top:50px;">
                                            <h3><a href="https://www.youtube.com/channel/UCF8i_kuxpGG5DycApVK8xxg" title="Videos, Amrapali Group of Institutes" target="_blank">For more videos click here</a></h3>
                                            <a href="https://www.youtube.com/channel/UCF8i_kuxpGG5DycApVK8xxg" title="Videos, Amrapali Group of Institutes" target="_blank"><i class="fa fa-youtube-square fa-5x" style="font-size:100px;color:#990000;"></i></a>
                                        </div>                                
                                    </ul>                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->