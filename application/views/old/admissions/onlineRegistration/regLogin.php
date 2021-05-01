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
                                        <li><a href="<?php echo site_url('agi');?>">Home</a></li>
                                        <li><a href="#">Admissions</a></li>
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
                                            <header class="entry-header">       
                                                <?php $this->load->view('templates/ticker-news'); ?>
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                
                                            <div class="entry-content">
                                                <?php if ($this->session->flashdata('_msg_')) { ?>
                                                        <div class="row">
                                                            <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                                                                <?php echo $this->session->flashdata('_msg_'); ?>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?PHP echo form_open('Agi/LoginEnter','id=frmLogin name=frmLogin role=form'); ?>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" name="txtUname" id="txtUname" class="form-control" placeholder="User Name..." />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password..." />
                                                    </div>                                                    
                                                    <div class="form-group" style="float: left">
                                                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Login</button>
                                                    </div>                                                          
                                                <?PHP echo form_close(); ?>                    
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
