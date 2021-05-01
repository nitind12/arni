<?php
  //print_r($crs);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    h3{ padding: 5px; border-bottom: #808080 solid 1px}
    p{line-height:2.2em;padding: 5px; clear: both;}
    h3{ padding: 5px; border-bottom: #808080 solid 1px}
    .ul_settings{
       padding: 0px 3%;
       list-style-type: circle;
    }
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
                                <h1 class="entry-title" style="padding: 0px 0px !important"><a href="<?php echo site_url('about');?>"> <?php echo $titleMain;?></a></h1>
                            </header><!-- /.entry-header -->                                                
                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                  <div style="clear: both; height: 30px"></div>
                                  <h3>Our Blogs</h3>
                                    <div>
                                        <?php foreach($blogs as $item){?>
                                        <div style="clear: both; margin: 5px 0px; padding: 5px 8px; border-radius: 5px; background: transparent; border: #fff solid 2px; color: #000090"><a href="<?php echo $item->LINK;?>" target="_blank" style="color: #000090"><?php echo $item->TITLE;?></a></div>
                                        <?php } ?>
                                    </div>
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