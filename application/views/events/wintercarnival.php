<?php
  //print_r($crs);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	h3{ padding: 5px; border-bottom: #808080 solid 1px}
    p{line-height:2.2em;padding: 5px; clear: both;}
    h3{ padding: 5px; border-bottom: #808080 solid 1px}
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
    
    
    
    up({
    
      // bottom position
      bottom: '20px',
    
      // right position
      right: '20px',
    
      // width
      width: '45px',
    
      // height
      height: '45px',
    
      // background color
      bg: 'green',
    
      // custom icon
      src: '<?php echo base_url("assets/img/chevron-up-solid.svg");?>',
    
      // distance from the top to show the back to top button
      whenShow: 400,
    
      // circular button?
      circle: true
    });
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
                                <?php if($active == 'shareVIDEO'){?>
                                <h1 class="entry-title"><a href="<?php echo site_url('admissions/');?>"> Share Your Video</a></h1>
                                <?php } else { ?>
                                <h1 class="entry-title"><a href="<?php echo site_url('admissions/');?>"> <?php echo $titleMain;?></a></h1>
                                <?php } ?>
                            </header><!-- /.entry-header -->                                                
                            <div class="topnav" id="myTopnav" style="border:#ff0000 solid 0px;">
                              <a href="<?php echo site_url('wintercarnival');?>" <?php if($active == 'overview'){ echo 'class="active"'; } ?>><img src="<?php echo base_url('assets/img/home.png');?>?version=1.2" style="width: 20px"></a>
                              <a href="<?php echo site_url('wintercarnival/grules');?>" <?php if($active == 'grules'){ echo 'class="active"'; } ?>>General Rules</a>
                              <a href="<?php echo site_url('wintercarnival/arules');?>" <?php if($active == 'arules'){ echo 'class="active"'; } ?>>Different Activities Rules</a>
                              <a href="<?php echo site_url('wintercarnival/contact');?>" <?php if($active == 'contact'){ echo 'class="active"'; } ?>>Contact Details</a>
                              <a href="<?php echo site_url('wintercarnival/register');?>" <?php if($active == 'register'){ echo 'class="active"'; } ?>><b style="color: #ffff00">Online Registration</b></a>
                              <!--a href=""><b style="color: #ffc4ff">Good Wishes</b></a-->
                              <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="font-size: 25px;">
                                <i class="fa fa-bars" style="border: #ffffff solid 1px; padding: 5px; border-radius: 5px"></i>
                              </a>
                            </div>
                            <?php 
                              $data['college'] = 'FCBM';
                              $data['menu_selected'] = $active;
                            ?>
                            <?php if($active != 'applynow' && $active != 'cooking-competition'){?>
                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                <?php if($active != 'register'){?>
                                <img src="<?php echo base_url('assets/img/devbhoomi.jpg');?>" />
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                  <div style="clear: both; height: 10px"></div>
                                  <?php $this->load->view('events/innerpages/'.$inner_page, $data); ?>
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
        
// ===============================================
// up button
// ===============================================
'use strict';
 function up(set) {
  const upBtn = document.createElement('div');
  let upBtnImg;

  upBtn.classList.add('up-btn', 'up-btn__hide');

  function showBtn(num) {
    if (document.documentElement.scrollTop >= num) {
      upBtn.classList.remove('up-btn__hide');
    } else {
      upBtn.classList.add('up-btn__hide');
    }
  }

  if (set) {

    if (set.src) {
      upBtnImg = document.createElement('img');
      upBtnImg.src = set.src;
      upBtnImg.classList.add('up-btn__img');
    } else {
      upBtnImg = document.createElement('div');
      upBtnImg.innerHTML = `
        <svg viewBox="0 0 448 512"><path fill="#fff" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
      `;
      upBtnImg.classList.add('up-btn__img');
    }

    upBtn.style.top = set.top;
    upBtn.style.bottom = set.bottom;
    upBtn.style.left = set.left;
    upBtn.style.right = set.right;
    upBtn.style.background = set.bg;
    upBtn.style.width = set.width;
    upBtn.style.height = set.height;

    if (set.circle) {
      upBtn.classList.add('up-btn_circle');
    }

    document.body.append(upBtn);
    upBtn.append(upBtnImg);


    if (set.whenShow) {
      window.addEventListener('scroll', () => {
        showBtn(set.whenShow);
      });
    } else {
      window.addEventListener('scroll', () => {
        showBtn(400);
      });
    }

  } else {
    upBtnImg = document.createElement('div');
      upBtnImg.innerHTML = `
        <svg viewBox="0 0 448 512"><path fill="#fff" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
      `;
      upBtnImg.classList.add('up-btn__img');
    document.body.append(upBtn);
    upBtn.append(upBtnImg);

    window.addEventListener('scroll', () => {
      showBtn(400);
    });
  }

  upBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
}

        // -------------------
    </script>
