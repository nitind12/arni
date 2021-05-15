<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="contact" content="<?php echo $meta['contact'];?>">
        <meta name="keywords" content="<?php echo $meta['keywords']; ?>" />
        <meta name="distribution" content="<?php echo $meta['distribution']; ?>*/">
        <meta name="language" content="English"> 
        <meta name="allow-search" content="yes">
        <meta name="description" content="<?php echo $meta['description']; ?>" />
        <meta property="og:image" content="<?php echo base_url('assets/img/agi.png'); ?>" />
        <meta name="robots" content="follow"/>
        <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
        <link rel="manifest" href="icon/site.webmanifest">
        <title><?php echo $meta['title']; ?></title>
        <style>
            h1{
                font-size: 25px !important;
            }
            .sticky_footer {
                font-size: 12px;
                font-family: verdana;
               position: fixed;
               left: 0;
               bottom: 0;
               width: 100%;
               background-color: #e67e22;
               color: white;
               text-align: center;
               z-index: 9999999;
               opacity: 1;
               border-top: #7e4117 solid 1px;
            }
        </style>
        <script type="text/javascript">
            site_url_ = "<?php echo site_url(); ?>";
            base_path = "<?php echo base_url(); ?>";
        </script>
        <!-- Bootstrap Core CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Web Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
        <!-- Flaticon CSS -->
        <link href="<?php echo base_url('assets/fonts/flaticon/flaticon.css'); ?>?ver=1.0" rel="stylesheet">
        <!-- font-awesome CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- owl.carousel CSS -->
        <!-- Offcanvas CSS -->
        <link href="<?php echo base_url('assets/css/hippo-off-canvas.css'); ?>?ver=1.0" rel="stylesheet">
        <!-- animate CSS -->
        <link href="<?php echo base_url('assets/css/animate.css'); ?>?ver=1.0" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>?ver=3.2" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="<?php echo base_url('assets/css/responsive.css'); ?>?ver=1.1" rel="stylesheet">
        
        <link href="<?php echo base_url('assets/css/ticker.css'); ?>?ver=1.1" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <style>
            .vticker{
                // border: 1px solid red;                              
                width: auto;
            }
            .vticker ul{
                padding: 0;
            }
            .vticker li{
                list-style: none;
                //border-bottom: 1px dashed #ff9933;
                padding: 10px;
            }
            .et-run{
                background: #0086B3;
            }
        </style>
    </head>