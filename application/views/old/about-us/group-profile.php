<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                                        <li><a href="#">About Us</a></li>
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
                                                <img src="<?php echo base_url('assets/img/all-pages.jpg'); ?>" class="img-responsive" alt=""> 
                                                <p style="margin-top: 10px;">
                                                    Established in 1999 under the aegis of Modern Academy Society, <b>Amrapali Group of Institutes (AGI)</b> is a renowned
centre of learning in Haldwani, District Nainital (Uttarakhand). The five different faculty of AGI are::
                                                <ul class="check-square">
                                                    <li> Faculty of Technology &amp; Sciences</li>
                                                    <li> Faculty of Computer Science &amp; Applications</li>
                                                    <li> Faculty of Hospitality Management</li>
                                                    <li> Faculty of Commerce &amp; Business Management</li>
                                                    <li> Faculty of Pharmacy &amp; Sciences</li> 
                                                    <li> Faculty of Education</li> 
                                                </ul>
                                                </p>
                                                <p>
                                                    The various courses offered by the Institutes are affiliated to Uttarakhand Technical University, Kumaun University,
Uttarakhand Open University and Uttrarakhand Board of Technical Education and are approved by theAll India
Council for Technical Education and National Council for Teacher Education.
                                                </p>
                                                <p>
                                                    In its <?php echo date('y')+1;?> years of existence, the Amrapali Group of Institutes has emerged as a crowning glory of the beautiful district
of Nainital. Currently, around 3800 students are pursuing their education in Commerce & Management, Computer
Science, Education, Engineering and Hospitality Management. Amrapali Group has carved a niche for itself, to
become the premier private professional educational Institution in the Kumaun region of Uttarakhand.
                                                </p>
                                                <p>&nbsp;</p>
                                                <h3>Location</h3>
                                                <p>
                                                    <b>Destination Haldwani:</b> Amrapali Group of Institute is nestled in the foothills of lake city Nainital at Lamachaur, 11Kms from Haldwani, almost adjacent to the world renowned Corbett Tiger Reserve; at a distance of 38 Km from Nainital. By road, it is 286 km. from Delhi, 300 km. from Dehradun and 350 km. from Lucknow.<br><br>

                                                    <b>By Rail:</b> Haldwani, Kathgodam and Lalkuan Railway stations can be the stops to reach us from Howrah, Lucknow, Bareilly, Dehradun and Delhi.<br><br>

                                                    <b>By Road:</b> Situated on National Highway 87 that runs from Delhi to Nainital, Haldwani is accessible by buses from all major North Indian cities.<br><br>

                                                    <b>By Air:</b> A direct flight is available from Delhi to Pantnagar, which is 26 km from Haldwani.<br><br>

                                                    <b>Campus:</b> Buses, three-wheelers (autos) and taxies are easily available in Haldwani city for reaching the institute.<br><br>

                                                    <b>Climate:</b> Generally, the climate of Haldwani is moderate. Winters are cold and one requires heavy blanket/quilt. It is quite wet during the rainy season. Summers are moderately warm.
                                                </p>
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