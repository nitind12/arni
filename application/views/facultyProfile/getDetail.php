<style>
    .profile{
        position: relative;
        float:left;
        width:180px;
        height:190px;
        background:#9AD8F9;        
        box-shadow: 1px 1px 1px #e6e6e4;  
        border-radius:5px;
        padding:10px;
        margin:10px;
    }
    .pname{
        color: #000;
        font-weight:600;
        font-size:1em;
        text-align: center;
    }
    .cross{
        position: absolute;
        top: 0px;
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
                                        <li><a href="<?php echo site_url('');?>">Home</a></li>
                                        <li><a href="#">Faculty Profile</a></li>
                                        <li class="active"><?php echo $title; ?></li>
                                    </ol>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    
                <div class="container">
                    <div class="content-wrapper">
                        <div class="inner-content">
                                                       
                            <header class="entry-header">                                                    
                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                <br>
                            </header><!-- /.entry-header -->
                            
                            <div class="row four-column">
                                <div id="grid">
                                <h5>&nbsp;&nbsp;Click on Tab for profile printing</h5>  
                                    <a href="<?PHP echo site_url('getFacultybyID/0'); ?>" target='_blank'><div class='profile' align="center"> 
                                            <img src="<?php echo base_url('assets/facultyPic/profile.jpg'); ?>" style="max-width: 120px; height:120px;" class="img-thumbnail">
                                            <p class="pname">Print All Profiles</p>
                                        </div></a>
                                    <?php foreach ($fac_profile as $item) { ?>
                                        <div class='profile' align="center"> 
                                            <a href="<?PHP echo site_url('getFacultybyID/' . $item->profileID); ?>" target='_blank'>  
                                                <img src="<?php echo base_url('assets/facultyPic/' . $item->facultyPic); ?>" style="max-width: 120px; height:120px;" class="img-thumbnail">
                                                <p class="pname"><?php echo $item->name; ?></p>
                                            </a>
                                            <p class="cross"><a href="<?PHP echo site_url('deleteFacultyProfile/' . $item->profileID); ?>" class="btn-danger">&nbsp;X&nbsp;</a></p>
                                        </div>
                                    <?php } ?>
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container --></div><!-- /#grid -->                            
