<style>

/*----  Main Style  ----*/
#cards_landscape_wrap-2{
  text-align: center;
  background: #F7F7F7;
}
#cards_landscape_wrap-2 .container{
  padding-top: 80px; 
  padding-bottom: 100px;
}
#cards_landscape_wrap-2 a{
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box{
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img{
  -webkit-transition:all .9s ease; 
  -moz-transition:all .9s ease; 
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease; 
  width: 150px;
  max-height:150px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img{
  opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
#cards_landscape_wrap-2 .card-flyer .text-box{
  text-align: center;
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container{
  padding: 30px 18px;
}
#cards_landscape_wrap-2 .card-flyer{
  background: #FFFFFF;
  margin-top: 50px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
}
#cards_landscape_wrap-2 .card-flyer:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p{
  margin-top: 10px;
  margin-bottom: 0px;
  padding-bottom: 0px; 
  font-size: 14px;
  letter-spacing: 1px;
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h4{
  margin-top: 0px;
  margin-bottom: 4px; 
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  font-family: 'Roboto Black', sans-serif;
  letter-spacing: 1px;
  color: #900000;
}

</style>
<h2 class="section-title-dark wow fadeInDown" align="center">Our Intellectual Capital</h2>
<div id="cards_landscape_wrap-2">
        <div class="container-fluid">
            <div class="row">
                <?php $seperator = 1; ?>
                <?php foreach($facultyData as $record){ ?>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="<?php echo base_url('assets/arniImage/faculty/'.$record->PIC);?>" alt="" />
                                </div>
                                <div class="text-container">
                                    <h4><?php echo ucwords(strtolower($record->FULL_NAME)); ?></h4>
                                    <span style="color:#0000AA"><?php echo ucwords(strtolower($record->DESIGNATION)); ?></span>
                                    <p style="text-align: center;">
                                        <?php echo ucwords(strtolower($record->FULL_NAME)); ?> belongs to <?php echo $record->SCHOOL; ?> specialized in <?php echo $record->SPECIALIZATION;?>. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    $seperator++;
                    if($seperator > 4){ 
                        $seperator = 1;
                ?>
                <div style="clear: both; padding: 5px 0px"></div> 
                <?php } ?>
            <?php } ?>
            </div>
        </div>
    </div>
                                