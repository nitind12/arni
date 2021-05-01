<?php header('Location: https://www.youtube.com/channel/UCF8i_kuxpGG5DycApVK8xxg/playlists'); ?>
<body>
<?php $this->load->view('tagmanager'); ?>
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
                                        <li><a href="#">Gallery</a></li>
                                        <li class="active"><?php echo $title; ?></li>
                                    </ol>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>

                    <div class="container">
                    <div class="content-wrapper">
                        <div class="inner-content">
                            <?php $this->load->view('templates/ticker-news');?>                            
                            <header class="entry-header">                                                    
                                <h2 class="entry-title"><a href="#">Explore Vibrant Amrapali in  <?php echo $title; ?></a></h2>
                                <br>
                            </header><!-- /.entry-header -->
                            
                            <div class="entry-content">   
                                  <ul class="partner-logo">                                                                         
                                        <?php
                                            $json_link="https://www.googleapis.com/youtube/v3/search?key=AIzaSyBF4O-qyKNuV64-ckt3XmIVSjz2bQguHKI" .
                                                "&channelId=UCF8i_kuxpGG5DycApVK8xxg&part=snippet,id&order=date" .
                                                "&maxResults=20";

                                            $json = file_get_contents($json_link);
                                            $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);                        

                                            foreach($obj['items'] as $post){

                                            $id = isset($post['id']['videoId']) ? $post['id']['videoId'] : "";
                                            $published_at = isset($post['snippet']['publishedAt']) ? $post['snippet']['publishedAt'] : "";
                                            $title = isset($post['snippet']['title']) ? $post['snippet']['title'] : "";
                                            $description = isset($post['snippet']['description']) ? $post['snippet']['description'] : "";
                                            $thumbnail = "https://i.ytimg.com/vi/{$id}/maxresdefault.jpg";

                                            echo "<div class='col-sm-4' style='margin-bottom:50px;'>"?>
                                            <iframe width="100%" style="min-height: 250px;" src="https://www.youtube.com/embed/<?php echo "{$id}";?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            <?php echo "
                                            <div style='font-size:15px;color:#FF6400;font-weight:bold;'> ".substr($title,0,35)."... </div>
                                            <!--div>{$description}</div-->
                                            </div>";
                                            }
                                            ?>                                    
                                    
                                    <div class="col-sm-3" style="padding-top:50px;">
                                        <h3 align="center"><a href="https://www.youtube.com/channel/UCF8i_kuxpGG5DycApVK8xxg" title="Videos, Amrapali Group of Institutes" target="_blank">For more videos click here</a></h3>
                                        <a href="https://www.youtube.com/channel/UCF8i_kuxpGG5DycApVK8xxg" title="Videos, Amrapali Group of Institutes" target="_blank"><i class="fa fa-youtube-square fa-5x" style="font-size:100px;color:#990000;"></i></a>
                                    </div>                                
                                </ul>
                            </div><!-- /.row -->
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->