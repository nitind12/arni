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

                                                <?PHP
                                                $totalCount = count($totalReg);
                                                $confirmCount = count($confirmReg);
                                                ?>
                                                <!--/#title-->
                                                <a name="not-confirmed">&nbsp;</a>
                                                <div style="float: right"> 
                                                    <a href="<?php echo site_url('agi/getRegistrations/0');?>" style="color: #ff0000">Download Not Confirmed</a> | <a href="<?php echo site_url('agi/getRegistrations/1');?>" style="color: #009000">Download  Confirmed</a>
                                                </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <a href="#confirmed"><span style="float:right">Click to See Confirmed Registration</span></a>
                                                            <h3>Registration Not confirmed</h3>

                                                            <div class="table-responsive">
                                                                <table class="table-bordered" style="width:100%;">
                                                                    <tr align="center" style="background-color:#0086B3; color: #ffffff;">
                                            <td width="80"><label class="control-label">RegID</label></td>
                                            <td width="120"><label class="control-label">Reg Date</label></td>
                                            <td width="120"><label class="control-label">Course</label></td>
                                            <td><label class="control-label">Name</label></td>
                                            <td><label class="control-label">Father Name</label></td>
                                            <td><label class="control-label">Contact Number</label></td>
                                            <td><label class="control-label">Address</label></td>
                                            <td><label class="control-label">Confirm</label></td>
                                                                    </tr>
                                                                <?php if ($totalCount != 0) { ?>
                                                                    <?php foreach ($totalReg as $item) { ?>
                                                                    <tr align="center">
                                                <td><?php echo $item->regID; ?></td>
                                                <td><?php echo $item->regDate; ?></td>
                                                <td><?php echo $item->course; ?></td>
                                                <td><?php echo $item->name; ?></td>
                                                <td><?php echo $item->fatherName; ?></td>
                                                <td><?php echo $item->corPhone; ?></td>
                                                <td><?php echo $item->corAddress; ?></td>
                                                <td><a href="<?PHP echo site_url('Agi/confirm_registration/' . $item->regID); ?>" class="btn btn-danger" role="button">Confirm <span class="glyphicon glyphicon-wrench"></span></a></td>
                                                                    </tr>
                                                                        <?php }} ?>
                                                                </table> 
                                                            </div>                                                     </div></div>                     
                                                       
                                                        <a name="confirmed">&nbsp;</a>  
                                                       
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-12">         
                                                                    <a href="#not-confirmed"><span style="float:right">Click to See Not-Confirmed Registration</span></a>   
                                                                    <h3>Confirmed Registration</h3>
                                                                    <div class="table-responsive">
                                                                        <table class="table-bordered" style="width:100%;">
                                                                            <tr align="center" style="background-color:#0086B3; color: #ffffff">
                                            <td width="80"><label class="control-label">RegID</label></td>
                                            <td width="120"><label class="control-label">Reg Date</label></td>
                                            <td width="120"><label class="control-label">Course</label></td>
                                            <td><label class="control-label">Name</label></td>
                                            <td><label class="control-label">Father Name</label></td>
                                            <td><label class="control-label">Contact Number</label></td>
                                            <td><label class="control-label">Address</label></td>
                                                                            </tr>
                                                                            <?php foreach ($confirmReg as $item1) { ?>
                                                                                <tr align="center">
                                                        <td><?php echo $item1->regID; ?></td>
                                                        <td><?php echo $item1->regDate; ?></td>
                                                        <td><?php echo $item1->course; ?></td>
                                                        <td><?php echo $item1->name; ?></td>
                                                        <td><?php echo $item1->fatherName; ?></td>
                                                        <td><?php echo $item1->corPhone; ?></td>
                                                        <td><?php echo $item1->corAddress; ?></td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                </table> 
                                                            </div>       
                                                        </div>
                                                    </div>
                                              
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
