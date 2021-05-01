<style type="text/css">
    h5{
        color: #500000;
        border-left: #EE0000 solid 2px;
        padding: 0px 0px 0px 5px;
    }
    .menu-links{
        color: #FFF1ED;
        font-weight: bold;
        text-decoration: none;
        background: #C2502C;
        padding: 8px 10px;
    }
</style>
<body>
<?php $this->load->view('tagmanager'); ?>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper"></section>

                    <div class="container">
                        <div class="content-wrapper">   
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <?php $this->load->view('templates/breadcrumb'); ?>
                                        <article class="blog-post-wrapper single-article">                     
                                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                                <a href="<?php echo site_url('cooking-competition');?>#rules" class="menu-links">Rules & Guidelines</a> 
                                                <a href="<?php echo site_url('cooking-competition');?>#theme" class="menu-links">Theme</a> 
                                                <a href="<?php echo site_url('cooking-competition');?>#prize" class="menu-links">Prizes</a>
                                            </div>
                                            <div class="entry-content" style="overflow: hidden;border:#ff0000 solid 0px">
                                                <img src="<?php echo base_url('assets/img/hmevent.jpg');?>" alt="Hunt for - The Online Budding Chef 2020" title="Hunt for - The Online Budding Chef 2020">
                                            </div>
                                            <div class="entry-content col-sm-12">
                                                <h2></h2>
                                                <p style="color: #0000AA">
                                                    <b>Note: - </b><br>
                                                    <ol style="padding: 0px 20px; color: #0000AA">
                                                        <li>Competition videos to be shared on <b>event@amrapali.ac.in</b> along with the <em>name, age, address, phone number and participant’s photograph</em> latest by 12th July 2020</li>
                                                        <li>The decision of organizing committee will be final and nobody will have any right to challenge the same.</li>
                                                    </ol>
                                                </p>
                                                <h2 class="entry-title"><a href="#"><?php echo $titleMain; ?></a></h2>
                                                <a name="theme"></a>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <h5>Theme: Snacks </h5>
                                                <p>
                                                    AIHM, Haldwani provides you with a platform to showcase your cooking skills. Cooking delicious food requires passion along with a blend of culinary knowledge, art and creativity. Displaying your tricks with the cooking magic can result in a delicious dish.
                                                </p>
                                                <p>
                                                    So, are you interested to spin the magic of your culinary skills in your kitchen and prepare a mouthwatering yummy dish and envy professionals? It would be our pleasure to showcase the talent, who can sway the kitchen and set fire amongst the taste buds of viewers and make them tempted to taste it by trying on their own. You can be master of many in times to come and this launch pad can provide you with an opportunity to explore your talent in a new way. Just shoot a 5 to 7 minutes video of the parts of the complete cooking process, share it with us and be amongst the online celebrities.

                                                </p>
                                                <a name="prize"></a>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <h5>Prizes: </h5>
                                                <p>
                                                    <ul style="color: #0000AA">
                                                        <li><b>1st – Rs. 5000/-</b> and a gift hamper along with a certificate</li>
                                                        <li><b>2nd – Rs. 3000/-</b> and a gift hamper along with a certificate</li>
                                                        <li><b>3rd – Rs. 2000/-</b> and a gift hamper along with a certificate</li>
                                                        <li style="text-decoration: underline;">Participants will be awarded with Certificate, Consolation Prizes and Scholarship certificate for higher education at AGI.</li>
                                                    </ul>
                                                </p>
                                                <a name="rules"></a>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p>
                                                    <h5>Rules & Guidelines</h5>
                                                    <ol style="padding: 0px 20px">
                                                        <li>Keeping in mind precautions to be taken during COVID- 19 pandemic, social distancing to be maintained during this competition and participants should prepare the food from the ingredients easily available in the home kitchen.</li>
                                                        <li>During the competition the participants shall be required to cook a food item of their choice going with theme along with appropriate accompaniments and garnishes.</li>
                                                        <li>Participant should be in the <i>age group of 16-22 years.</i></li>
                                                        <li>Participants should show their creativity and innovation in plating the dish.</li>
                                                        <li>Participants can also prepare their recipe based on the very idea of boosting immunity and healthy preparation based on the calories check.</li>
                                                        <li>Participants can take help of their family members who can be their team members too.</li>
                                                        <li>Participants will be required to shoot live video. But the duration of the video should not exceed more than 5 to 7 minutes.</li>
                                                        <li>The video must cover the entire preparation of your dish, starting from introducing the food, ingredients, recipe, etc, keeping in mind the time allotted, therefore must be done in batches, covering all important points of the preparation.</li>
                                                        <li>Hygiene to be taken on priority.</li>
                                                        <li>The judging parameter includes optimum use of raw material, preparation style, colour, garnishing and plating.</li>
                                                        <li>Shortlisted videos shall be posted on AGI YouTube Page for the final voting along with judgment by 2 renowned chefs as decided by the organising team, the video which gets the maximum likes and highest points from judges shall be declared to be the winner.</li>
                                                    </ol>

                                                </p>
                                            </div><!-- /.entry-content -->
                                            <footer>
                                                <!--p style="float: right"><a href="https://www.amrapali.ac.in/admissions/cooking-competition" style="font-size: 14px; color:red" target="_blank"><i class="fa fa-arrow-right fa-1x"></i> Click Here for Registration</a></p-->
                                            </footer>
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->