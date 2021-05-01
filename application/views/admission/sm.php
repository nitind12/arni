    <body>
        <style>
            .social-media-col{
                float: left;
                width: 60px;
                height: 50px;
                border: #f0f0f0 solid 0px;
                display: table-cell;
                text-align: center;
                vertical-align: middle;
                margin: 5px;
            }
        </style>
        <div id="st-container" class="st-container">
            <div class="st-pusher">
                <div class="st-content">
                    <div class="st-content-inner">
                        <header>
                            <?php $this->load->view('templates/menu'); ?>
                        </header>

                        <section class="page-header-wrapper">
                            <div class="container">
                                
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
                                                    <h2 class="entry-title"><a href="#"><?php echo $title;?></a></h2>
                                                </header><!-- /.entry-header -->                                                
                                                <div class="entry-content" style="overflow: hidden">
                                                    <img src="<?php echo base_url('assets/img/library.jpg'); ?>" class="img-responsive " alt="">   
                                                    <p>&nbsp;</p>                        
                                                    <div class="social-media-col">
                                                        <a href="https://www.youtube.com/channel/UCF8i_kuxpGG5DycApVK8xxg" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/youtube.png');?>" style="width:40px">
                                                        </a>
                                                    </div>
                                                    <div class="social-media-col">
                                                        <a href="https://www.facebook.com/AGI.HLD" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/fb.png');?>" style="width:40px">
                                                        </a>
                                                    </div>
                                                    <div class="social-media-col">
                                                        <a href="https://twitter.com/agihld" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/twitter.png');?>" style="width:40px">
                                                        </a>
                                                    </div>
                                                    <div class="social-media-col">
                                                        <a href="https://www.instagram.com/agihld/" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/instagram.png');?>" style="width:40px">
                                                        </a>
                                                    </div>
                                                    <div class="social-media-col">
                                                        <a href="https://www.linkedin.com/company/agihld" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/linkedin.png');?>" style="width:40px">
                                                        </a>
                                                    </div>
                                                    <div class="social-media-col">
                                                        <a href="https://t.me/agihld" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/telegram.png');?>" style="width:40px">
                                                        </a>
                                                    </div>
                                                    <div class="social-media-col">
                                                        <a href="https://chat.whatsapp.com/L2IWf3n6uli4GGJCrdgvep" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/whatsapp.png');?>" style="width:40px">
                                                        </a>
                                                    </div>
                                                    <div style="clear: both; padding: 2px"><hr></div>
                                                    <div class="social-media-col" style="height: auto !important; width: auto !important">
                                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7KXrBTYlrw2WcYKhHpmtQIK9AYNM9QL7AxDA5H1j7to2OKA/viewform" style="color: #404040" target="_blank">
                                                            <img src="<?php echo base_url('assets/img/social/g-form.png');?>" style="width:70px"> KNOWLEDGE WIZARD
                                                        </a>
                                                    </div>
                                                    <div style="clear: both; padding: 3px"><hr></div>
                                                </div><!-- /.entry-content -->
                                            </article>                                            
                                        </div><!-- /.col-md-9 -->

                                        <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                            <?php $this->load->view('templates/quick-links');?>                                            
                                            <?php $this->load->view('templates/alumni-img-scroll');?>
                                        </div><!-- /.col-md-3 -->
                                    </div><!-- /.row -->
                                </div><!-- /.inner-content -->
                            </div><!-- /.content-wrapper -->
                        </div><!-- /.container -->