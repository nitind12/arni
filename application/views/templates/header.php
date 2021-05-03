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
        <title><?php echo $meta['title']; ?></title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-47029752-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-47029752-1');
        </script>

        <!-- Facebook Pixel Code -->
        <script>

          !function(f,b,e,v,n,t,s)

          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

          n.callMethod.apply(n,arguments):n.queue.push(arguments)};

          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

          n.queue=[];t=b.createElement(e);t.async=!0;

          t.src=v;s=b.getElementsByTagName(e)[0];

          s.parentNode.insertBefore(t,s)}(window, document,'script',

          'https://connect.facebook.net/en_US/fbevents.js');

          fbq('init', '1514786288679930');

          fbq('track', 'PageView');

        </script>

        <noscript><img height="1" width="1" style="display:none"

          src="https://www.facebook.com/tr?id=1514786288679930&ev=PageView&noscript=1"

        /></noscript>

        <!-- End Facebook Pixel Code -->

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
        <link href="<?php echo base_url('assets/css/style.css'); ?>?ver=2.8" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="<?php echo base_url('assets/css/responsive.css'); ?>?ver=1.1" rel="stylesheet">
        
        <link href="<?php echo base_url('assets/css/ticker.css'); ?>?ver=1.1" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        
        <link rel="apple-touch-icon" sizes="57x57" href="<?PHP echo base_url() . 'icon/apple-icon-57x57.png'; ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?PHP echo base_url() . 'icon/apple-icon-60x60.png'; ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?PHP echo base_url() . 'icon/apple-icon-72x72.png'; ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?PHP echo base_url() . 'icon/apple-icon-76x76.png'; ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?PHP echo base_url() . 'icon/apple-icon-114x114.png'; ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?PHP echo base_url() . 'icon/apple-icon-120x120.png'; ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?PHP echo base_url() . 'icon/apple-icon-144x144.png'; ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?PHP echo base_url() . 'icon/apple-icon-152x152.png'; ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?PHP echo base_url() . 'icon/apple-icon-180x180.png'; ?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?PHP echo base_url() . 'icon/android-icon-192x192.png'; ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?PHP echo base_url() . 'icon/favicon-32x32.png'; ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?PHP echo base_url() . 'icon/favicon-96x96.png'; ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?PHP echo base_url() . 'icon/favicon-16x16.png'; ?>">
        <link rel="manifest" href="<?PHP echo base_url() . 'icon/manifest.json'; ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?PHP echo base_url() . 'icon/ms-icon-144x144.png'; ?>">
        <meta name="theme-color" content="#ffffff">

        <meta name="twitter:card" content="Amrapali Group of Institutes, Haldwani, Top Ranked Institute Uttarakhand,Best Institute Haldwani, Nainital" />        
        <meta name="twitter:site" content="@agihld" />
        <meta name="twitter:title" content="Amrapali Group of Institutes, Haldwani, Top Ranked Institute Uttarakhand,Best Institute Haldwani, Nainital" />
        <meta name="twitter:creator" content="@agihld" />
        <meta name="twitter:description" content="Amrapali Group of Institutes is a top ranked Institute in Nainital, Uttarakhand, offering BHMCT, BHM. B.Tech, B.Pharm, D.Pharm, BBA, BCA, B.Com, Polytechnic" />
        <meta name="twitter:image" content="https://www.amrapali.ac.in/icon/favicon-96x96.png" >
        <meta property="og:url" content="https://www.amrapali.ac.in" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="AMRAPALI GROUP OF INSTITUTES, HALDWANI" />
        <meta property="og:description" content="Amrapali Group of Institutes is a top ranked Institute in Nainital, Uttarakhand, offering BHMCT, BHM. B.Tech, B.Pharm, D.Pharm, BBA, BCA, B.Com, Polytechnic" />
        <meta property="og:image" content="https://www.amrapali.ac.in/icon/favicon-96x96.png" />
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

        <!--link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/themes/offline-theme-slide.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/themes/offline-language-english.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/offline.min.js"></script-->
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WBXRG7S');</script>
        <!-- End Google Tag Manager -->
        
        <!-- Google Adsense Script -->
        <script data-ad-client="ca-pub-3285315947452357" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- End of Google Adsense Script -->
    </head>