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
                                        <li><a href="#">Gallery</a></li>
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
                                                <blockquote>
                                                    <img src="<?php echo base_url('assets/img/drsudhir.JPG'); ?>" style="width: 100px"><br>
												    Amrapali has been a fabulous experience. It is the potential to develop a leadership role. The food by student’s staff has excellent and the warmth and smile of service students has been endearing. I wish the institution good luck.<br /> 
												    	<span style="color:#993300">-  [Dr. Sudhir Andrews : Feb., 2020] (D. Litt., School of Hospitality, Distinguished Professor - Management at Skill Maker Consultancy)</span>
												</blockquote>
												<blockquote>
												    <img src="<?php echo base_url('assets/img/mrabhimanyu.JPG'); ?>" style="width: 100px"><br>
												    Had lovely time, thank you for everything, aloo ke gutke was the best.<br /> 
												    	<span style="color:#993300">-  [Mr. Abhimanyu Kayastha : Feb., 2020] (Vice president Justa group of hotels)</span>
												</blockquote>
												<blockquote>
												    <img src="<?php echo base_url('assets/img/mrmdyusuf.JPG'); ?>" style="width: 100px"><br>
												    Absolutely awesome food and hospitality, Thank you for hosting a delicious lunch.<br /> 
												    	<span style="color:#993300">-  [Mr. Mohammad Yusuf Yamin : Feb., 2020] (Human resource manager, TAJ hotels)</span>
												</blockquote>
												<blockquote>
												    <img src="<?php echo base_url('assets/img/mrdbalodi.JPG'); ?>" style="width: 100px"><br>
												    I felt privileged to be here and investing time with future hotelier. Hospitality extended to me is of international standards. The passion and hope in students impressed me with. Amrapali all the best.<br /> 
												    	<span style="color:#993300">-  [Mr. Diwaker Balodi : Feb., 2020] (Executive chef, Ananda Rishikesh)</span>
												</blockquote>
												<blockquote>
												    <img src="<?php echo base_url('assets/img/cheftanuj.JPG'); ?>" style="width: 100px"><br>
												    Excellent show, good food, best wishes...<br /> 
												    	<span style="color:#993300">-  [Chef Tanuj Nayyar : Feb., 2020] (Executive chef, Jaypee Mussorie)</span>
												</blockquote>
												
												<blockquote>
												    <img src="<?php echo base_url('assets/img/chefrahul.JPG'); ?>" style="width: 100px"><br>
												    Great food and event, all the best to amrapali family.<br /> 
												    	<span style="color:#993300">-  [Chef Rahul Wali : Feb., 2020] (Owner, cafe 'Rahul’s Kitchen')</span>
												</blockquote>
												
												<blockquote>
												    <img src="<?php echo base_url('assets/img/msasees.JPG'); ?>" style="width: 100px"><br>
												    Tastiest food, loved it totally. What’s a recipe.<br /> 
												    	<span style="color:#993300">-  [Ms. Asees Kaur : Feb., 2020] (Bollywood singer)</span>
												</blockquote>
												
												<blockquote>
												    <img src="<?php echo base_url('assets/img/mrharishmoyal.JPG'); ?>" style="width: 100px;"><br>
												    Amazing hospitality and super delicious food, thank you for all love.<br /> 
												    	<span style="color:#993300">-  [Mr. Harish Moyal : (Bollywood singer)</span>
												</blockquote>
												
                                                <blockquote>
												    An expellant Seminar organized by Amrapali. I have attended many seminars in India abroad, & this one is very well organized. Congratulations to Amrapali.<br /> 
												    	<span style="color:#993300">- [Y.P. Gupta : Nov., 2005] (Allahabad)</span>
												</blockquote>
												
												<blockquote>
												    It was tranmander efforts by Amrapali Manthan was realy a manthan through which some Amrit is going to come out obviously best wishes for years to come<br /> 
												    	<span style="color:#993300">- [R.C. Pandey : Nov., 2005]</span>
												</blockquote>
												
												<blockquote>
												    It was very nice to be a part of this National seminar. Every persons speaks well. Every body's approach was very positive &methodical. Even the students presented themselves as very disciplined one in fact in my word Amrapali S.H.M. is doing excellent to excel in the scenario of hospitality Mgmt.<br /> 
												    	<span style="color:#993300">- [V. K. Srivastava : Nov., 2005]</span>
												</blockquote>
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
    