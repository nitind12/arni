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
                                            
                                            <?php $this->load->view('templates/ticker-news');?>
                                            
                                            <header class="entry-header">                                                    
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content">
                                                <img src="<?php echo base_url('assets/img/approval.jpg'); ?>" class="img-responsive" alt=""> 
                                                <p>&nbsp;</p>
                                                <style>
                                                    li a{
                                                        font-size:15px;
                                                        color: #052b46;
                                                        line-height: 30px;
                                                        font-weight:bold;
                                                    }
                                                </style>
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 30px;">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingZero">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                                                                    Mendatory Disclosures
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseZero" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingZero">
                                                            <div class="panel-body">
                                                                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/mendatorydisclosure/HM2021.pdf');?>" target="_blank">Amrapali Institute of Hotel Management</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 30px;">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    AICTE Approvals
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/aicte/EOA_Report_2020-21.PDF');?>" target="_blank">AITS Approval for the session 2020-21 (EOA Report)</a><br />
                                                                   <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/aicte/aihm201516.pdf');?>" target="_blank">AIHM Approval for the session 2015-16</a><br />
                                                                    <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/aicte/aits201617.pdf');?>" target="_blank">AITS Approval for the session 2016-17</a><br />
                                                                    <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/aicte/mca201617.pdf');?>" target="_blank">MCA Approval for the session 2016-17</a><br />
                                                                    <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/aicte/aits201920.pdf');?>" target="_blank">AITS Approval for the session 2019-20</a><br />
                                                                    <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/aicte/mba201617.pdf');?>" target="_blank">MBA Approval for the session 2016-17</a><br />
                                                                    <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/aicte/Affiliatiion _AICTE approvals.PDF');?>" target="_blank">Affiliations &amp; Approvals for the session 2020-21</a><br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingTwo">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                   University Affiliations
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <p>
                                                                    <img src="<?PHP //echo base_url('assets/img/loading.gif');?>" style="max-width: 15px;"/>&nbsp;&nbsp;Loading...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div-->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingThree">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    NCTE Approvals
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/bed/BEd201314.pdf');?>" target="_blank">B.Ed. Approval for the session 2013-14</a><br />
                                                            </div>
                                                        </div>
                                                    </div>   
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingThree1">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                                                   Audited Balance-sheets
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree1">
                                                            <div class="panel-body">
                                                                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/balancesheets/auditedbalancesheet.PDF');?>" target="_blank">Audited Balancesheet</a><br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingFour">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                   Annual Reports
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                            <div class="panel-body">
                                                                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a href="<?PHP echo base_url('assets/dwnlds/approvals/annualreports/Annual Report_Updated.pdf');?>" target="_blank">Annual Report</a><br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->

                                    <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                        <?php $this->load->view('templates/quick-links'); ?>                     
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->