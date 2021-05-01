<style>
    .career_apply_{
        padding: 2px 3px;
        background: #0000ff;
        color: #ffffff;
        border-radius: 4px;
    }
</style>
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
                                    <div class="col-xs-12 col-md-9 col-sm-8">
                                        <article class="blog-post-wrapper single-article">
                                            <header class="entry-header">       
                                                <?php $this->load->view('templates/ticker-news'); ?>
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content">
                                                <img src="<?php echo base_url('assets/img/career.jpg'); ?>" class="img-responsive" alt="">
                                                <?php
                                                    if(count($openings)>0){
                                                        $colspaning = "col-sm-6";
                                                    } else {
                                                        $colspaning = "col-sm-12";
                                                    }
                                                ?>
                                            <div class="<?php echo $colspaning;?>" style="margin-top: 10px;">
                                                <?php if(count($openings)<=0){ ?>
                                                <div class="col-sm-12" style="padding: 1px 4px; background: #ffff00; border-radius: 3px"><span style="color: #ff0000">Currently no openings !!</span> <span style="color: #009000">Please do come on this page to view <b>openings</b> at regular basis...</span></div>
                                                <?php } ?>
                                                <p></p>
                                                <p>
                                                    Good people are the BACKBONE of any Organization. In AMRAPALI the management strives hard to bring together the best people to strengthen the team AMRAPALI and give them the best environment.
                                                </p>
                                                <p>
                                                    The Group is part of the non-profit organisation the Modern Academy Society. Within the last 19 years of excellence the Group has developed a pillar of Academic strength in the region of Kumaun and it includes 4 world-class institutes, and few being top-ranked institutions. It's now one of State's leading education group. Amrapali is home to over 3,500+ students pursuing 16 Programmes in 5 diverse disciplines.
                                                </p>
                                                <p>
                                                    The group has more than 400 team members working together in pursuit of excellence. The management ensures that the Salary is compatible to the structures of leading Institutes in the country and also additional facilities are provided to make it a better place to be. The City Haldwani is an economical place with moderate climate and is in the foot hills of world renowned tourist destination "Nainital". The City also has good Schooling and Medical Facilities to cater the needs of a family.
                                                </p>
                                            </div><!-- /.entry-content -->
                                            <?php if(count($openings)>0){?>
                                            <div class="col-sm-6" style="margin-top: 10px; border: #ff00ff solid 0px; padding: 20px 0px 0px 20px;" id="openings_here">
                                                <h3>Openings</h3>
                                                <?php for($i=0; $i<count($openings); $i++){ ?>
                                                    <table style="width: 100%; border: #808080 solid 0px; padding: 5px">
                                                        <tr>
                                                            <td colspan="2" style="font-weight: bold">
                                                                <div style="float: left;text-decoration: underline overline;"><?php echo $openings[$i]['Department']; ?></div>
                                                                <div style="float: right; font-size: 11px; color: #ff0000"><a href="" id="<?php echo $openings[$i]['abbrev']."_".$openings[$i]['OpeningForthePost']; ?>" class="career_apply_">APPLY</a></div>
                                                            </td>
                                                        </tr>
                                                        <tr style="vertical-align: top">
                                                            <td style="width: 40%;">For the Post</td>
                                                            <td style="width: 60%;"><?php echo $openings[$i]['OpeningForthePost']; ?></td>
                                                        </tr>
                                                        <tr style="vertical-align: top">
                                                            <td>Minimum Eligibility</td>
                                                            <td><?php echo $openings[$i]['MinimumEligibility']; ?></td>
                                                        </tr>
                                                        <!--tr>
                                                            <td>Seats</td>
                                                            <td><?php //echo $openings[$i]['Seats']; ?></td>
                                                        </tr-->
                                                        <tr>
                                                            <td colspan="2" style="height: 10px"></td>
                                                        </tr>
                                                    </table>
                                                    <hr>
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-6" style="margin-top: 10px; border: #ff00ff solid 0px; display: none" id="upload_resume">
                                                <p style="overflow: hidden">
                                                    <?php $this->load->view('career/resume'); ?>
                                                </p>
                                            </div>
                                            <div class="<?php echo $colspaning; ?>">
                                                <div id="career_msg__" style="color: #ff0000; margin-top: 10px; border: #ff00ff solid 0px; "></div>
                                            </div>
                                            <?php } ?>
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