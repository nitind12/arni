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
                                            <h1><?php echo $title;?></h1>
                                        </div>
                                        <ol class="breadcrumb">
                                            <li><a href="<?php echo site_url('Agi');?>">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li class="active"><?php echo $title;?></li>
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
                                                <header class="entry-header">                                                    
                                                    <h2 class="entry-title"><a href="#"><?php echo $title;?></a></h2>
                                                </header><!-- /.entry-header -->                                                

                                                <div class="entry-content">
                                                    <p>
                                                       <ul class="check-square">
                                                            <li> Dr. Pankaj Shah, Registrar </li>
                                                            <li> Mr. Sanjay Pasricha, Head Admission </li>
                                                            <li> Mr. H.K. Uprety, Asstt. Administrative Officer </li>
                                                            <li> Mr. N.K. Gupta, Accounts Officer </li>
                                                            <li> Mr. Gopal Sharma, Asstt. Manager (Office Admin.) </li>
                                                            <li> Mr. Deepak Sharma, Warden Boys Hostel </li>
                                                            <!--li> Mrs. Abha Chaturvedi, Warden Girls Hostel </li-->
                                                            <li> Mr. Mohan Chandra Joshi, Asst. Warden Boys Hostel </li>
                                                            <li> Mrs. Kavita Tiwari, Warden Girls Hostel </li>
                                                            <li>Mrs. Roshni Paul, Asst. Warden Girls Hostel</li>
                                                        </ul>
                                                    </p>
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