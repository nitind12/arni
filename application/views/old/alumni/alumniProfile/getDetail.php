<style>
    .profile{
        position: relative;
        float:left;
        width:250px;
        height:200px;
        background: #ffffe6;
        box-shadow: 1px 1px 1px #e6e6e4;
        padding:10px;
        margin:10px;
    }
    .pname{
        color: #08C;
        font-weight:400;
        line-height: 10px;
        margin-top: 12px;
    }
    .presume{
        color: #c7254e;
        font-weight:400;
    }
    .cross{
        position: absolute;
        top: 0px;
    }

    .enable{
        position: absolute;
        top: 0px;
        right:0px;
    }

    .disable{
        position: absolute;
        top: 0px;
        right:0px;
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
                                            <h4 align="left">&nbsp;&nbsp;Click on Tab for profile Detail 
                                                <span style="float:right;"><h4><a href="<?php echo site_url('Agi/AlumniProfileLogin');?>">Logout</a></h4></span>
                                            </h4>                                        
                                                <section class="panel">                                                                
                                                    <?php foreach ($fac_profile as $item) { ?>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <figure style="background: #f3f3f3;margin-top: 2em;padding:.5em;">
                                                            <div class="css-team-avatar" align="center">     <a href="<?PHP echo site_url('Agi/getAlumnibyID/' . $item->id); ?>" target='_blank'>            
                                                                <img class="media-object img-responsive" src="<?php echo base_url('assets/alumniPic/' . $item->pic); ?>" alt="Amrapali alumni - <?php echo $item->name; ?>" style="max-width: 140px; height:150px;">  </a>
                                                                <p class="cross"><a href="<?PHP echo site_url('Agi/deleteAlumniProfile/' . $item->id); ?>" class="btn-danger">&nbsp;X&nbsp;</a></p>
                                                                <?php if ($item->status == '0') { ?>
                                                                    <p class="enable"><a href="<?PHP echo site_url('Agi/enabledDisableAlumni/1/' . $item->id); ?>" class="btn-warning">disabled</a></p>
                                                                <?php } else { ?>
                                                                    <p class="disable"><a href="<?PHP echo site_url('Agi/enabledDisableAlumni/0/' . $item->id); ?>" class="btn-info">enabled</a></p>
                                                                <?php } ?>           
                                                            </div>
                                                            <div class="css-team-info">
                                                                <h3 class="css-team-heading"><?php echo $item->name; ?><br> <small><?php echo $item->company; ?></small>
                                                                    <br> <small><b>Location: </b><?php echo $item->location; ?></small>
                                                                    <hr><small><b><?php echo $item->course; ?></b></small>
                                                                    <br> <small><b>Passout:</b> <?php echo $item->passout; ?></small>
                                                                </h3>                                                                
                                                            </div>
                                                        </figure>
                                                    </div>                                                    
                                                <?php } ?>
                                                </section>      
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
<!--/#title-->