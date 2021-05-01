<?php
  //print_r($crs);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .titlesize{
        font-weight: bold !important; font-size: 14px;;
    }
  .ul_settings{
     padding: 0px 3%;
     list-style-type: circle;
  }
	h3{ padding: 5px; border-bottom: #808080 solid 1px}
    p{line-height:2.2em;padding: 5px; clear: both;}
    h3{ padding: 5px; border-bottom: #808080 solid 1px}
    .regulation_note{padding: 8px 10px; font-size: 11px}
    th{
        background: #808080;
        color:#ffffff;
    }
    table{
        border-left: #f0f0f0 solid 1px;
        border-right: #e0e0e0 solid 1px;
        border-bottom: #e0e0e0 solid 2px;
    }
    h5{
        color: #500000;
        border-left: #EE0000 solid 2px;
        padding: 0px 0px 0px 5px;
    }
    .differences{
    	font-family: 'Comic Sans Ms'; 
        font-style: italic;
        font-size: 16px;
        padding: 0px 2%;
        margin: 10px;
        border-bottom: #e0e0e0 solid 1px;
        border-left: #f0f0f0 solid 3px;
    }
    .guidelines{
    	font-family: 'Times New Roman'; 
        font-size: 16px;
        padding: 0px 2%;
        margin: 10px;
        display: inline;
        float: left;
        border: #009000 solid 1px;
        width: 90%;
    }
    .banks{
    	background: #f0f0f0; 
    	border-radius: 10px; 
    	padding: 5px 10px;
    	margin: 10px 5px;
    	font-weight: normal;
    }
</style>
<body>
<?php $this->load->view('tagmanager'); ?>
<?php 
  $data['class_'] = 'class="col-xs-12 col-md-12 col-sm-12"';
?>
<div id="st-container" class="st-container">
<div class="st-pusher">
<div class="st-content">
<div class="st-content-inner">
    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php $this->load->view('templates/menu'); ?>
    </header>

    <section class="page-header-wrapper">
    </section>

    <div class="container">
        <div class="content-wrapper">
            <div class="inner-content">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <article class="blog-post-wrapper single-article">                                       
                            <header class="entry-header">                 
                            <?php $this->load->view('templates/breadcrumb'); ?>                  
                                <h1 class="entry-title"><a href="<?php echo site_url('placements/');?>"> <?php echo $titleMain;?></a></h1>
                            </header><!-- /.entry-header -->                                                
                            <div class="topnav" id="myTopnav" style="border:#ff0000 solid 0px">
                              <a href="<?php echo site_url('placements');?>" <?php if($active == 'overview'){ echo 'class="active"'; } ?>><img src="<?php echo base_url('assets/img/home.png');?>?version=1.2" style="width: 20px"></a>  
                              <a href="<?php echo site_url('placements/employability-training-programme');?>" <?php if($active == 'employability-training-programme'){ echo 'class="active"'; } ?>>Employability Training Programme</a>
                              <a href="<?php echo site_url('placements/industry-institute-interface');?>" <?php if($active == 'industry-institute-interface'){ echo 'class="active"'; } ?>>Industry Institute Interface</a>
                              <a href="<?php echo site_url('placements/campus-placements');?>" <?php if($active == 'campus-placements'){ echo 'class="active"'; } ?>>Campus Placements</a>
                              <a href="<?php echo site_url('placements/eligibility-criteria');?>" <?php if($active == 'eligibility-criteria'){ echo 'class="active"'; } ?>>Eligibility Criteria</a>
                              <a href="<?php echo site_url('placements/regulations');?>" <?php if($active == 'regulations'){ echo 'class="active"'; } ?>>Regulations</a>
                              <a href="<?php echo site_url('placements/contact');?>" <?php if($active == 'contact'){ echo 'class="active"'; } ?>>Contact Us</a>
                              <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="font-size: 25px;">
                                <i class="fa fa-bars" style="border: #ffffff solid 1px; padding: 5px; border-radius: 5px"></i>
                              </a>
                            </div>
                            <?php 
                              $data['college'] = 'FCBM';
                              $data['menu_selected'] = $active;
                            ?>
                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                <?php $this->load->view('placements/mainslider', $data);  ?>
                            </div>
                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                  <div style="clear: both; height: 30px"></div>
                                  <?php $this->load->view('placements/innerpages/'.$inner_page, $data); ?>
                                  <div style="clear: both; height: 10px"></div>  
                            </div>  
                        </article>                                            
                    </div><!-- /.col-md-9 -->
                </div><!-- /.row -->
            </div><!-- /.inner-content -->
        </div><!-- /.content-wrapper -->
    </div><!-- /.container -->


    <script type="text/javascript">
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
    </script>