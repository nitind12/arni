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
                                            <li><a href="<?php echo site_url('agi');?>">Home</a></li>
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
                                                    <?php $this->load->view('templates/ticker-news');?>                                         
                                                    
                                                    <h2 class="entry-title"><a href="#"><?php echo $title;?></a></h2>
                                                </header><!-- /.entry-header -->                                                

                                                <div class="entry-content">
                                                    <p>
                                                        <ul class="check-square" style="line-height: 25px;"> <li>Prof. N.K. Taneja, Vice-Chancellor, CCS University, Meerut. <li>Prof. S.P. Singh, Ex Vice-Chancellor, HNB Garhwal University, Srinagar (Garhwal). <li>Prof. B.S. Rajput, Ex Vice-Chancellor, Kumaun University, Nainital. <li>Prof. Y.P. Gupta, Ex- Principal, BCT-KEC, Dwarahat. <li>Mr. Mahendra Pal Singh, Advocate Uttarakhand High Court, Nainital. <li>Prof. Shekhar Verma, IIIT Allahabad. <li>Prof. Durgesh Pant, Director – IT, Uttarakhand Open University, Haldwani. <li>Prof. R.C. Mishra, Uttarakhand Open University, Haldwani. <li>Prof. J.K. Goyal, Director JIMS, Noida. <li>Mr. Rohit Dar, GM Marriott. <li>Dr. Sudhir Andrews, Executive Director, Skill Maker Training Services, Dubai. <li>Mr. Abhimanyu Kayashtha, Corporate GM, Howard Johnson<li>Mr. Chanchal Kumar Singh, Project Officer, EDI STED<li>Prof. (Dr.). S.K. Singh, COO Amrapali Group of Institutes, Haldwani<li>Prof. H.D. Bist, Retd. Professor, IIT Kanpur <li>Mr. Ashutosh Gilra, Chief Representative (India), Geron Card Clothing (Jiangsu) Co. Ltd.<li>Mr. Anshu Singhal, Director, Sofcon Systems India Pvt. Ltd. <li>Mr. Rishikant Shrotriya, General Manager, Hungama.com</ul>
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