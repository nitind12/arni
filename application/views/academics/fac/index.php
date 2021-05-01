<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

    p{line-height:2.2em;padding: 5px; clear: both;}
    h3{ padding: 5px; border-bottom: #808080 solid 1px}
    .director{font-weight: bold;}
    .vission{padding: 8px 10px; background: #DCFFFC; overflow: hidden; border-radius: 12px}
    .mission{padding: 8px 10px; background: #FFFA8A; border-radius: 12px}
    th{
        background: #808080;
        color:#ffffff;
    }
    table{
        border-left: #f0f0f0 solid 1px;
        border-right: #e0e0e0 solid 1px;
        border-bottom: #e0e0e0 solid 2px;
    }
    .mylist{
        list-style: circle; padding: 0px 20px; line-height: 2.2em; color: #808080
    }
    h5{
        color: #500000;
        border-left: #EE0000 solid 2px;
        padding: 0px 0px 0px 5px;
    }
    .alumni{
        font-family: 'Comic Sans Ms'; 
        font-style: italic;
        font-size: 16px;
    }
    .alumni_1{
        color: #035998; padding: 12px; border: #CFF512 solid 2px; border-bottom: #F3FCC5 solid 1px; border-radius: 10px;
    }
    .alumni_2{
        color: #806403; padding: 12px; border: #F58E12 solid 2px; border-bottom: #FAEAD7 solid 1px; border-radius: 10px;
    }
    .alumni-name{
        font-style: normal;
    }
    .alumni-designation{
        font-family: verdana;
    }
    sup{
      color: #ff0000;
      font-weight: bold;
    }
    .coursefullform{
      font-size: 12px; color: #000090
    }
    .rank_1{
        color: #035998; padding: 12px; border: #CFF512 solid 2px; border-bottom: #F3FCC5 solid 1px; border-radius: 10px;
    }
    .rank_2{
        color: #806403; padding: 12px; border: #F58E12 solid 2px; border-bottom: #FAEAD7 solid 1px; border-radius: 10px;
    }
    .specific_downloads_{
      float: left; display: inline; vertical-align: top; border:#ff0000 solid 0px; font-size: 11px; font-family: verdana; margin-right: 5px
    }
    .downloads_{
      float: left; display: inline; vertical-align: top; border:#ff0000 solid 0px; font-size: 11px; font-family: verdana; margin-right: 5px
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
                                <h1 class="entry-title"><a href="<?php echo site_url('faculty/'.$record['college'].'/about');?>"><?php echo $record['title']; ?> </a></h1>
                            </header><!-- /.entry-header -->                                                
                            <div class="topnav" id="myTopnav" style="border:#ff0000 solid 0px">
                              <?php if($record['college'] == 'fe'){ ?>
                                <a href="<?php echo site_url('faculty/'.$record['college'].'/about');?>" <?php if($active == 'about'){ echo 'class="active"'; } ?>><img src="<?php echo base_url('assets/img/home.png');?>?version=1.2" style="width: 20px"></a>
                                <a href="<?php echo site_url('faculty/'.$record['college'].'/courses');?>" <?php if($active == 'courses'){ echo 'class="active"'; } ?>>Courses</a>
                                <a href="<?php echo site_url('faculty/'.$record['college'].'/infra');?>" <?php if($active == 'infra'){ echo 'class="active"'; } ?>>Infrastructure</a>
                                <a href="<?php echo site_url('faculty/'.$record['college'].'/whyus');?>" <?php if($active == 'whyus'){ echo 'class="active"'; } ?>>Why Us?</a>
                                <a href="<?php echo site_url('faculty/'.$record['college'].'/downloads');?>" <?php if($active == 'downloads'){ echo 'class="active"'; } ?>>Downloads</a>
                              <?php } else { ?>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/about');?>" <?php if($active == 'about'){ echo 'class="active"'; } ?>><img src="<?php echo base_url('assets/img/home.png');?>?version=1.2" style="width: 20px"></a>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/courses');?>" <?php if($active == 'courses'){ echo 'class="active"'; } ?>>Courses</a>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/infra');?>" <?php if($active == 'infra'){ echo 'class="active"'; } ?>>Infrastructure</a>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/whyus');?>" <?php if($active == 'whyus'){ echo 'class="active"'; } ?>>Why Us?</a>
                              <?php if($record['college'] == 'fps'){ ?>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/student');?>" <?php if($active == 'student'){ echo 'class="active"'; } ?>>Student Speak</a>
                              <?php } else {?>
                                <a href="<?php echo site_url('faculty/'.$record['college'].'/alumni');?>" <?php if($active == 'alumni'){ echo 'class="active"'; } ?>>Alumni Speak</a>
                              <?php } ?>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/events');?>" <?php if($active == 'events'){ echo 'class="active"'; } ?>>Events</a>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/downloads');?>" <?php if($active == 'downloads'){ echo 'class="active"'; } ?>>Downloads</a>
                              <a href="<?php echo site_url('faculty/'.$record['college'].'/news');?>" <?php if($active == 'news'){ echo 'class="active"'; } ?>>News</a>
                              <a href="<?php echo $brochure_link;?>" <?php if($active == 'brochure'){ echo 'class="active"'; } ?> target="_blank">E-Brochure</a>
                            <?php } ?>
                              <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="font-size: 25px;">
                                <i class="fa fa-bars" style="border: #ffffff solid 1px; padding: 5px; border-radius: 5px"></i>
                              </a>
                            </div>
                            <?php 
                              $data['college'] = $record['college'];
                              $data['menu_selected'] = $active;
                            ?>
                            <?php if($active != 'alumni' && $active != 'student'){?>
                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                <?php $this->load->view('academics/fac/mainslider', $data);  ?>
                            </div>
                            <?php }?>
                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                  <div style="clear: both; height: 30px"></div>
                                  <?php $this->load->view('academics/fac/'.$record['college'].'/'.$inner_page, $data); ?>
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