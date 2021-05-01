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
                                                    <img src="<?php echo base_url('assets/img/library.jpg'); ?>" class="img-responsive " alt="">   
                                                    <p>&nbsp;</p>                        
                                                    <p>The departmental libraries support teaching, learning and research needs of faculty members and students. Access to extensive information resources Is not only limited to text matter In books, periodicals and journals but is also enhanced by the availability of online resources accessible through subscribed journals over Internet.</p>
                                                    <p>&nbsp;</p>
            										<h2>Resources</h2>
                                                    <ul class="check-square">
                                                    	<li>14292 titles and 99083 volumes</li>
                                                    	<li>209 print-journals and magazines</li>
                                                    	<li>CDs' (Books/Journal) (Books/Magazine) Project Report </li>
                                                    	<li>UBKS Series Lectures CDs/DVDs on Management</li>
                                                    	<li>Access to NPTEL Study Material for users</li>
                                                    	<li>News Papers (National and Regional)</li>
                                                    	<li>Indian and foreign text and reference books</li>
                                                    	<li>E-Library with electronic databases</li>
                                                    	<li>Access to Developing Library Network (DELNET)</li>
                                                    	<li>Access to OPAC facility</li>
                                                    	<li>Multimedia Sections for Users</li>
                                                    	<li>Encyclopaedias and Map Sets</li>
                                                    	<li>Documentation & Newspaper-clippings sections</li>
                                                    	<li>Reprographic facility and Reading hall</li>
                                                    	<li>Access to Online Full Text e-Journals</li>
                                                    </ul>
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