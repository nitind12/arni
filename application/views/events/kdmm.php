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
                                                <h2 class="entry-title"><a href="#">Late Smt. Kamla Dhingra Memorial Meet 2019</a></h2>
                                                <p style="float: left"><a href="https://forms.gle/TTJoat96z7Q1CxqLA" style="font-size: 17px; color:red" target="_blank"><i class="fa fa-arrow-right fa-1x"></i> Click Here for Registration</a></p>
                                                <p style="float: right"><a href="<?php echo base_url('assets/kdmm.pdf');?>" style="font-size: 17px; color:blue" target="_blank"><i class="fa fa-arrow-down fa-1x"></i> Download Brochure</a></p>

                                            </header><!-- /.entry-header -->                                                
                                            <div class="entry-content col-sm-12" style="background: #e5e4e4; padding: 20px; border-radius: 10px;">
                                                <img src="<?php echo base_url(). 'assets/img/kdmmPage.jpg'?>">
                                            </div><!-- /.entry-content -->
                                            <footer>
                                                <p style="float: left"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeevjWU4ofdawR0Bk2XjmVgFRidECe8B8O2Al1S-Oam7e7hjA/viewform" style="font-size: 17px; color:red" target="_blank"><i class="fa fa-arrow-right fa-1x"></i> Click Here for Registration</a></p>
                                                <p style="float: right"><a href="<?php echo base_url('assets/kdmm.pdf');?>>" style="font-size: 17px; color:blue" target="_blank"><i class="fa fa-arrow-down fa-1x"></i> Download Brochure</a></p>
                                            </footer>
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->