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
                                            <h1><?php echo $title;?></h1>
                                        </div>
                                        <ol class="breadcrumb">
                                            <li><a href="<?php echo site_url('Agi');?>">Home</a></li>
                                            <li><a href="#">Academics</a></li>
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
                                                <?php $this->load->view('templates/ticker-news');?>                                         
                                                    
                                                <header class="entry-header">                                                    
                                                    <h2 class="entry-title"><a href="#"><?php echo $title;?></a></h2>
                                                </header><!-- /.entry-header -->                                                
                                                <div class="entry-content" style="overflow: hidden">
                                                    <p>
                                                        At Amrapali we benchmark ourselves against the best institutions around the Country. We are proud to have a rich infrastructure which fulfills the norms of our Approval bodies. The labs have all the required tools and equipments and the campus is connected with wireless internet interface.
                                                    </p>
                                                    <p>
                                                        While our libraries are equipped with over 80,000 books, periodicals, international journals and other research material, our classrooms provide the most conducive atmosphere for learning.
                                                    </p>
                                                    <p>
                                                        The Institutes emphasize on the practical aspects of education and imparts sufficient practical input for the student through its state of the art training Labs and also with ample space and modern equipment, to provide individual training to each Individual.
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Learning Resources</h3>
                                                    <p>
                                                        <div id="integration-list" class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                            <ul>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Classrooms - The Focused Learning Space</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/learningresources/classrooms');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Computing Facilities - The Focused Learning Space</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/learningresources/computing-facilties');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Library</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/learningresources/library');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Seminar halls - A platform of interface</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/learningresources/seminarhalls');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Laboratories - Training grounds for budding professionals</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/learningresources/laboratories');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Conference Rooms - Arenas for cultivating team spirit</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/learningresources/conference-rooms');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Campus Facilties</h3>
                                                    <p>
                                                        <div id="integration-list" class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                            <ul>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Residential Accommodation - Students personal comfort zone</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/campus/residential');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Medical Facilities - Caring for you, all along the way</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/campus/medical');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Sports Facilities - Developing energetic and Fit Leader out of you</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/campus/sports');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Cafeteria - Forging life-long friends, leisurely</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/campus/cafetaria');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Training Labs - Faculty of Hospitality Management</h3>
                                                    <p>
                                                        <div id="integration-list" class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                            <ul>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Front Office Labs - The front office lab consists of the following simulation labs</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/traininglabs_fhm/front-office');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Food Production Labs</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/traininglabs_fhm/food-production');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Food &amp; Beverage Department</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/traininglabs_fhm/beverages');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Housekeeping Department</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/traininglabs_fhm/house-keeping');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Computer Labs</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/traininglabs_fhm/computer-lab');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Cafeteria</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/traininglabs_fhm/cafetaria');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Audio Visual Laboratory</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/traininglabs_fhm/audio-visual');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Departmental Laboratories - Faculty of Technology &amp; Sciences</h3>
                                                    <p>
                                                        <div id="integration-list" class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                            <ul>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Computer Science &amp; Engineering (CSE)</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/fts/cse');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Mechanical Engineering (ME)</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/fts/me');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Electronics &amp; Communications Engineering (ECE)</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/fts/ece');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">Electrical and Electronics Engineering (EEE)</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <?php $this->load->view('academics/facilities/fts/eee');?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Departmental Laboratories - Faculty of Pharmacy & Sciences</h3>
                                                    <p>
                                                        <div id="integration-list" class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                            <ul>
                                                                <li>
                                                                    <a class="expand col-sm-12">
                                                                        <div class="right-arrow">+</div>
                                                                        <div>
                                                                            <h2 class="h2">DEPARTMENTAL LAB FACILITY</h2>
                                                                        </div>
                                                                    </a>

                                                                    <div class="detail">
                                                                        <div id="right" style="float:left;padding-left:20px;">
                                                                            <ul>
                                                                            	<li>MACHINE ROOM</li>
                                                                                <li>GENERAL PHARMACY  LAB</li>
                                                                                <li>PHARMACEUTICAL TECHNOLOGY LAB</li>
                                                                                <li>INORGANIC PHARMACEUTICAL CHEMISTRY LAB</li>
                                                                                <li>PHARMACEUTICAL CHEMISTRY LAB</li>
                                                                                <li>HUMAN ANATOMY AND PHYSIOLOGY  LAB</li>
                                                                                <li>PHARMACEUTICAL ANALYSIS LAB</li>
                                                                                <li>PHARMACOGNOSY LAB</li>
                                                                                <li>PHARMACY PRACTICE LAB</li>
                                                                                <li>COMPUTER LAB INCLUDING LANGUAGE LABORATORY</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Other Facilities</h3>
                                                    <p>The campus has an ATM, Stationery & Photocopy Counter and a Coffee and Bake stuff kiosk. The boys & girls hostel houses a Gymnasium for students. The gym is open to all hostel residents after classes. Besides it the hostels have sports facilities like badminton and table tennis, besides this they can enjoy other sports like- basketball, volley ball, cricket, football etc.</p>
                                                    <p>The hostels have laundry facilities and dedicated 24 hour vehicle for medical emergencies.</p>
                                                    <p style="clear: both">&nbsp;</p>
                                                    <h3>Transportation</h3>
                                                    <p>AGI has a fleet of very comfortable vehicles for pick and drop of our students and staff from across the city and nearby cities. Our transport fleet includes University buses, official commercial vehicles.</p>
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