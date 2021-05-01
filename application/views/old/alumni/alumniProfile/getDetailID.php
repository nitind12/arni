<style type="text/css">
    @page {
        size:letter; margin:0;
    }

    @media print {      
        body * { visibility: hidden; }
        #printReg * { visibility: visible; margin-top:5px; font-size:14px; font-weight:100}
        #nonprintreg * { visibility: hidden; }
        .page-break	{ display: block; page-break-before: always; }        
    }
    .wrapper {
        font-family: 'Times New Roman';
    }
</style>
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
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content"> 
                                                <?php foreach ($facID as $item) { ?>
                                                        <div class="row" id="printReg">            
                                                            <div class="col-lg-12">                  
                                                                <div class='col-xs-2'></div>
                                                                <div class='col-xs-6'>
                                                                    <div class="col-xs-4"><h4><b>Name</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->name; ?></h4></div>  
                                                                    <div class="col-xs-4"><h4><b>Course</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->course; ?></h4></div>  
                                                                    <div class="col-xs-4"><h4><b>Passout</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->passout; ?></h4></div>  
                                                                    <div class="col-xs-4"><h4><b>email</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->email; ?></h4></div>  
                                                                    <div class="col-xs-4"><h4><b>Contact</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->mobile; ?></h4></div>     
                                                                    <div class="col-xs-4"><h4><b>Company</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->company; ?></h4></div>  
                                                                    <div class="col-xs-4"><h4><b>Designation</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->designation; ?></h4></div> 
                                                                    <div class="col-xs-4"><h4><b>Location</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->location; ?></h4></div> 
                                                                    <div class="col-xs-4"><h4><b>Hometown</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->hometown; ?></h4></div>
                                                                    <div class="col-xs-4"><h4><b>Testimonial</b></h4></div>
                                                                    <div class="col-xs-8"><h4><?php echo $item->suggestion; ?></h4></div>  
                                                                </div>
                                                                <div class="col-xs-2"><img src="<?php echo base_url('assets/alumniPic/' . $item->pic); ?>" style='max-width:200px;'></div>
                                                                <div class='col-xs-2'></div>
                                                            </div>            
                                                            <div class="clearfix"></div>                     
                                                        </div><!--/.row-->
                                                        <div class="page-break"></div>
                                                    <?php } ?>
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
<!--/#title-->
