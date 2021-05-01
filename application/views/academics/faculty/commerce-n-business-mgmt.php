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
                                        <li><a href="<?php echo site_url('Agi');?>">Home</a></li>
                                        <li><a href="#">Academics</a></li>
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
                                            <div class="entry-content" style="overflow: hidden">
                                                <img src="<?php echo base_url('assets/img/mgmt.jpg'); ?>" class="img-responsive " alt=""> 
                                                <p style="margin-top: 10px;">
                                                    Programmes at Faculty of Commerce & Business Management help you develop the knowledge, hands-on experience and network to find your own path and shape your future. We provide a strong foundation in business principles and the inspiration & encouragement one need to launch own legacy. 
                                                </p>
                                                <p>With students from diverse backgrounds and faculty members reflecting strong industry and academic experiences, the programmes including MBA, BBA and B.Com(Hons.) stand out for its focus and character. The programmes' well - thought integration of classes, live business cases, projects, personalized mentoring and several other pedagogies transform and prepare students to manage business organizations in the present uncertain yet challenging times of the 21st century.</p>
                                                <h3>Courses Offered</h3>
                                                <p>
                                                <div class="col-sm-8">
                                                    <ul class="check-square">
                                                        <li class="myli_for_page">Masters of Business Administration [<b>MBA</b>]</li>
                                                        <li class="myli_for_page">Bachelor of Business Administration [<b>BBA</b>]</li>
                                                        <li class="myli_for_page">Bachelor of Commerce (Honours) [<b>B.Com.</b>]</li>
                                                        <li class="myli_for_page">Diploma in Retail Management [<b>D.R.M</b>]</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!--img style="float: right; width: 157px; height: 104px" src="<?PHP //echo base_url('assets/img/trip.png'); ?>"-->
                                                </div>
                                                </p>
                                                <p style="clear: both">&nbsp;</p>
                                                <h3>Attractions</h3>

                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    The core characteristics of MBA programme of the department are
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <ul class="check-square">
                                                                    <li class="myli_for_page">Routine Exposure to the corporate world through field visits.</li>
                                                                    <li class="myli_for_page">Interface with renowned academicians and corporate experts.</li> 
                                                                    <li class="myli_for_page">Projects for the students in their functional area of Specializations.</li>
                                                                    <li class="myli_for_page">Compulsory participation in Seminars and Workshops.</li>
                                                                    <li class="myli_for_page">Overall personality development initiatives.</li>
                                                                    <li class="myli_for_page">Interactive &amp; learning environment.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingTwo">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Add on Certificate Program
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <ul class="check-square">
                                                                    <li class="myli_for_page">Certificate Program in Retail Management</li>
                                                                    <li class="myli_for_page">Certificate Program in NGO &amp; Rural Management</li> 
                                                                    <li class="myli_for_page">Certificate Program in Export-Import Procedures &amp; Documentation </li>
                                                                    <li class="myli_for_page">Certification in Foreign Language (French/German/Spanish)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingThree">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    Added Attraction
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <ul class="check-square">
                                                                    <li class="myli_for_page">Special Training Program in Entrepreneurship in collaboration with EDI, Ahmedabad</li>
                                                                    <li class="myli_for_page">Personality Development Program</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingFour">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    Specialization Offered
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                            <div class="panel-body">
                                                                <ul class="check-square">
                                                                    <li class="myli_for_page">Marketing</li>
                                                                    <li class="myli_for_page">Finance</li>
                                                                    <li class="myli_for_page">Human Resource</li>
                                                                    <li class="myli_for_page">International Business</li>
                                                                    <li class="myli_for_page">Information Technology</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingFive">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                    Workshops
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                            <div class="panel-body">
                                                                <ul class="check-square">
                                                                    <li class="myli_for_page">Research Methodology using SPSS</li>
                                                                    <li class="myli_for_page">Business Analytics</li> 
                                                                    <li class="myli_for_page">Financial Modeling using MS-Excel</li>
                                                                    <li class="myli_for_page">Tally</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <p>&nbsp;</p>
                                                <h3>ACME</h3>
                                                <p>
                                                    ACME is the Institute's peer-reviewed annual journal of Management and Information Technology. The journal aspires to promote and publish quality research in interdisciplinary studies. The publications are expected to contribute to the theoretical framework of the knowledge pool and also leading to practical applications in the field of management and technology. To ascertain the quality of the publications the papers/articles are selected through blind review system. Articles are invited throughout the year.<br>
                                                    ISSN: 0974-1763<br>
                                                    Publication Time: March-April<br>
                                                    E-mail: research.fcbm@amrapali.ac.in
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