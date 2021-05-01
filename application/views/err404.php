	<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>404 Page</title>
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
	    .popularlinks{
	    	color: #0000ff;
	    	text-decoration: none;
	    	border-left: #009000 solid 1px;
	    	padding: 4px 5px;
	    }
	    .gap__{
	    	margin-top: 6px
	    }
	</style>
</head>
<body>
	<?php $this->load->view('tagmanager'); ?>
<?php 
  $data['class_'] = 'class="col-xs-12 col-md-12 col-sm-12"';
?>
<div id="st-container" class="st-container">
<div class="st-pusher">
<div class="st-content">
<div class="st-content-inner">
    <header>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php $this->load->view('templates/menu'); ?>
    </header>
    <section class="page-header-wrapper">
    </section>
    <div class="container">
        <div class="content-wrapper">
            <div class="inner-content">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                    	<h2 style="color: #AA0000">Page not found..</h2>
                    	<h5>Extremely excuse us. We weren't able to find the page you are looking for. Below you'll find the most popular pages and may you need to preform site search. </h5>

                    	<h6 id="broken_link" style="cursor: pointer;">Still not satisfied then you can also ...<span style="color: #ff0000">[Report this broken link]</span></h6>
                    	<h6 id="broken_link" style="cursor: pointer;">OR <span style="color: #ff0000; font-weight: bold"><a href="<?php echo site_url();?>">[Back to Home Page]</a></span></h6>

                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 cols-md-6 col-sm-6">
                		<ul>
                			<li class="gap__"><a href="<?php echo site_url('admissions');?>" class="popularlinks">Admissions</a></li>
                			<li class="gap__"><a href="<?php echo site_url('faculty/ftca/courses');?>" class="popularlinks">Technology & Sciences Courses</a></li>
                			<li class="gap__"><a href="<?php echo site_url('faculty/fhm/courses');?>" class="popularlinks">Hotel Management Courses</a></li>
                			<li class="gap__"><a href="<?php echo site_url('faculty/fcbm/courses');?>" class="popularlinks">Management Courses</a></li>
                			<li class="gap__"><a href="<?php echo site_url('faculty/fps/courses');?>" class="popularlinks">Pharmacy Courses</a></li>
                			<li class="gap__"><a href="<?php echo site_url('placements');?>" class="popularlinks">Placements</a></li>
                			<li class="gap__"><a href="<?php echo site_url('gallery');?>" class="popularlinks">Gallery</a></li>
                			<li class="gap__"><a href="<?php echo site_url('alumni');?>" class="popularlinks">Alumni</a></li>
                			<li class="gap__"><a href="<?php echo site_url('facilities/about');?>" class="popularlinks">Facilities</a></li>
                		</ul>
                	</div>
                	<div class="col-xs-12 cols-md-6 col-sm-6">
                		<form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank" style="margin: 20px 0px">
						<input name="sitesearch" type="hidden" value="amrapali.ac.in">
						<input autocomplete="on" class="form-control search" name="q" placeholder="Search in amrapali.ac.in" required="required"  type="text">
						<button class="btn btn-primary" type="submit" style="float: right; margin-top: 10px">Search</button>
						</form>
                	</div>
                </div>
            </div>
        </div>
    </div>
<div>
</div>
</body>
</html>