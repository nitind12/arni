<body>
    <style type="text/css">
        .volumes_{
            float: left; 
            display: block; 
            width: 100px;
            height: 100px;
            padding:5px;
            font-family: verdana;
            font-size: 18px;
            font-weight: bold;
            background: url(<?php echo base_url('assets/img/acmefcbm.jpg');?>);
            color: #009090;
            text-align: center;
            vertical-align: middle;
            border: #93b6c2 solid 2px;
        }
        .volumes_:hover{
            color: #900000;
            border: #000090 solid 2px;
        }
    </style>
    <?php
        $acmearchives = array(
            'vol1.pdf', 'vol2.pdf', 'vol3.pdf', 'vol4.pdf', 'vol5.pdf', 'vol6.pdf', 'vol7.pdf', 'vol8.pdf', 'vol9.pdf', 'vol10.pdf','vol11.pdf','vol12.pdf', 'vol13.pdf'
        );
    ?>
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
                                        <li><a href="<?php echo site_url('/Agi/publications')?>">Our Publications</a></li>
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
                                                <h2 class="entry-title" style="float: left"><a href="#"><?php echo $title; ?></a></h2>
                                                <h4 style="float: right"><a href="<?php echo site_url('agi/acme');?>">Back &gt; &gt;</a></h4>
                                                <div style="clear: both"></div>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content"> 
                                                <?php foreach ($acmearchives as $item) {?>
                                                    <?php $vol_ = explode(".", $item); ?>
                                                    <?php if($vol_[0] != 'vol3' && $vol_[0] != 'vol4' && $vol_[0] != 'vol5'){ ?>
                                                    <div style="margin: 10px; float: left"><a href="<?php echo base_url('assets/dwnlds/acme/'.$item); ?>" target='_blank'><div class='volumes_'><?php echo $vol_[0]; ?></div></a></div>
                                                    <?php } else { ?>
                                                        <div style="margin: 10px; float: left"><div class='volumes_'><?php echo $vol_[0]; ?></div></div>
                                                    <?php } ?>
                                                <?php }?>
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
    