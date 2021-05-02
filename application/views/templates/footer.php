
<section class="footer-widget-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-sm-4 col-xs-12">

                <div class="footer-widget">

                    <h3 class="wow fadeInDown">Important Links</h3>

                    <ul class="wow fadeInDown">

                        <!--li><a href="<?PHP //echo site_url('Agi/whyAmrapali'); ?>">Why us</a></li-->

                        <li><a href="<?PHP // echo site_url('facilities/about'); ?>">Facilities</a></li>
                        
                        <li><a href="<?PHP // echo site_url('gallery/activities'); ?>">Activities</a></li>

                        <li><a href="<?PHP // echo site_url('antiRagging'); ?>">Anti-Ragging</a></li>

                        <li><a href="<?PHP // echo 'https://docs.google.com/forms/d/e/1FAIpQLScCbqIFSl-UCr9Emll9xOGKd3XdMecRuZEZGkFcyBN8ialpPg/viewform'; ?>" target="_blank">Grievance Section</a></li>

                        <li><?PHP // echo anchor('students-Feedback', "Student's Feedback"); ?></li>

                        <!--li><?PHP // echo anchor('#', "Teacher's Feedback"); ?></li-->

                        <li><?PHP // echo anchor('placements/overview', 'Training & Placement'); ?></li>

                        <li><?PHP // echo anchor('approvals', 'Approvals &amp; Affiliations'); ?></li>
                        
                        <li><?php // echo anchor('mendatory-disclosure','Mendatory Disclosures');?></li>

                        <li><?PHP // echo anchor('career', 'Career@Amrapali'); ?></li>

                        <li><a href="https://forms.eduqfix.com/aiasonlineform/add" target="_blank" style="color:#33FFF9">Pay Fees Online (HDFC)</a></li>

                        <li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=644273" target="_bank" style="color:yellow">Pay Fees Online (SBI)</a></li>

                        <li><a href="https://www.arni.in/lms" target="_blank">AGI Learning Management System</a></li>

                    </ul>

                </div><!-- /.footer-widget -->

            </div><!-- /.col-md-2 -->

            <div class="col-md-3 col-sm-4 col-xs-12">

                <div class="footer-widget">

                    <h3 class="wow fadeInDown">Brochures</h3>

                    <ul class="wow fadeInDown">                        

                        <li><!--a href="https://e-brochures.arni.in/ftca" target="_blank"-->Technology &amp; Computer Applications</a></li>

                        <li><!--a href="https://e-brochures.arni.in/fhm" target="_blank"-->Hospitality Management<a/></li>

                        <li><!--a href="https://e-brochures.arni.in/fcbm" target="_blank"-->Commerce &amp; Business Management</a></li>

                        <li><!--a href="https://e-brochures.arni.in/fps" target="_blank"-->Pharmacy</a></li>

                    </ul>

                    <hr/>

                    <h3 class="wow fadeInDown">Downloads</h3>

                    <ul class="wow fadeInDown">

                        <li><a href="<?PHP // echo base_url('assets/dwnlds/common/affidavit.pdf'); ?>" target="_blank">Anti-Ragging Format</a></li>

                        <li><a href="<?PHP // echo base_url('assets/dwnlds/common/Library Form_Faculty.pdf'); ?>" target="_blank">Library Membership Form (<span style="color: #ffff00">Faculty</span>)</a></li>

                        <li><a href="<?PHP // echo base_url('assets/dwnlds/common/Library Form_Student.pdf'); ?>" target="_blank">Library Membership Form (<span style="color: #ffff00">Student</span>)</a></li>

                        <li><a href="<?PHP // echo base_url('assets/dwnlds/common/FDP_ApplicationForm.pdf'); ?>" target="_blank">FDP Application Form</a></li>

                    </ul>

                </div><!-- /.footer-widget -->

            </div><!-- /.col-md-2 -->  

            <div class="col-md-3 col-sm-4 col-xs-12">

                <div class="footer-widget">

                    <h3 class="wow fadeInDown">Contacts</h3>

                    <address>

                        <b>For Admission:</b><br>

                        Contact: (+91)-18008918962<br><br>

                        Email:admission@arni.in <br /><br />

                        <b>For Placement:</b><br>

                        Mobile:<br>

                        Contact: (+91)-18008918962<br><br>

                        Email: placement@arni.in

                    </address>  

                    <div class="social-link">

                        <?PHP $this->load->view('templates/socialMedia'); ?>

                    </div>  

                </div>

            </div>

            <div class="col-md-3 col-sm-12 col-xs-12">

                <div class="footer-widget">  

                    <h3 class="wow fadeInDown">Address</h3>

                    <address>

                        <strong>Arni University</strong><br>

                        Kathgarh,Tehsil Indora, Distt. Kangra,Himachal Pradesh Pin-176401 <br /><br />

                        <span style="color:#8EDDFF; font-size:1.4em">Toll-Free: 18008918962 </span><br /><br />

                        Email: mail@arni.in

                    </address>

                    <hr>
                                                                   

                </div><!-- /.footer-widget -->

            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->

    </div><!-- /.container -->

</section>





<footer class="footer-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="copyright wow fadeInDown">

                    <p><a>Copyright &copy; 2021 Arni University, All Rights Reserved.</a>  Developed & maintained by: Teamfreelancers.com </p>

                </div><!-- /.copyright -->

            </div><!-- /.col-md-12 -->

        </div><!-- /.row -->

    </div><!-- /.container -->

</footer>

</div> <!-- .st-content-inner -->

</div> <!-- .st-content -->

</div> <!-- .st-pusher -->

<!-- Modal -->



<div id="myModal" class="modal fade-in" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h2 class="modal-title">Brochures</h4>

      </div>

      <div class="modal-body">

        <h4>Give your details and we will e-mail you the selected brochure</h4>

            <?PHP echo form_open('#','id=userBrochureEnquiry name=userBrochureEnquiry role=form'); ?>

            <div class="row">

                <div class="col-sm-6">

                    <div class="form-group">

                        <label>Your Name<sup>*</sup></label>

                        <input type="text" name="txtEnqName" id="txtEnqName" class="form-control" placeholder="Full Name..." />

                    </div>

                    <div class="form-group">

                        <label>Your Email</label>

                        <input type="email" name="txtEnqEmail" id="txtEnqEmail" class="form-control" placeholder="Email..." />

                    </div>

                </div>

                <div class="col-sm-6">                    

                    <div class="form-group">

                        <label>Contact No.<sup>*</sup></label>

                        <input type="text" name="txtPhone" id="txtPhone" class="form-control" placeholder="Contact No..." />

                    </div>

                    <div class="form-group">

                        <label>Brochure<sup>*</sup></label>

                        <select class="form-control" name="txtBrochure" id="txtBrochure">

                            <option value="0">Select Brochure</option>

                            <option value="1">Technology &amp; Sciences</option>

                            <option value="2">Commerce &amp; Business Management</option>

                            <option value="3">Computer Science &amp; Applications</option>

                            <option value="4">Hospitality Management</option>                            

                            <option value="4">B.Sc. (Hons.)</option>                            

                        </select>

                    </div>

                </div>                            

                <div class="col-sm-12">                    

                    <div class="form-group" style="float: right; text-align: right">

                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>

                    </div>

                    <div id="cntct_msg_" style="float: left; padding: 5px 0px 0px 5px; min-width: 50px; height: 20px; color: #ff0000"></div>

                </div>

            </div>

            <?PHP echo form_close(); ?>  

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>



  </div>

</div>



<!---Modal ends here--->



<!-- Modal 2 -->

<div id="myModal2" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal2 content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h2 class="modal-title">Urgent Notification</h4>

      </div>

      <div class="modal-body">

            <img src="<?php // echo base_url('assets/notice-1.jpg'); ?>" alt="Amrapali COVID-19 Notice" title="Amrapali COVID-19 Notice">

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>



  </div>

</div>

<!-- Modal 2 Ends here -->

<?php $this->load->view('templates/menu-mobile'); ?>

</div><!-- /st-container -->

<style>

    .aiwhatsapp{

     position: fixed; right:-114px; top: 50%; z-index: 9999

    }

    .aiapply{

     position: fixed; right:-72px; top: 62%; z-index: 9999

    }

    .admission_{

     position: fixed; right:-5px; top: 43%; z-index: 9999

    }

    .socialmedia-right{

    position: fixed; height: auto; right:-3px; top: 10%; background: #ffffff; padding: 5px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: #fcbb3c solid 0px; border-right: #fcbb3c solid 0px; box-shadow: -1px 1px 3px #888888; z-index: 9999

    }

    .aienquiry{

     position: fixed; right:-72px; top: 75%; z-index: 9999

    }

</style>


<!--div id="myModal44" class="modal fade in" role="dialog" style="padding: 0px; !important">
  <div class="modal-dialog" style="background: transparent">
    <div class="modal-content" style="background: transparent;-webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; border: #000000 solid 0px">
      <div class="modal-body" style="background: #fff; padding: 0px; !important;z-index: 999999 !important; height:600px;" id="iframe_widget">
        <div style="float: right; padding: 3px" id="closewidget"><img src="<?php echo base_url('assets/img/close.png');?>" style="width:30px; position: absolute; right: 4%"></div>
        <iframe src="" style="width: 100%; height: 600px" frameborder="0" scrolling="0" marginheight="0" marginwidth="0" ></iframe>
      </div>
    </div>

  </div>
</div-->

<!-- Preloader -->

<div id="preloader">

    <div id="status">

        <div class="status-mes"></div>

    </div>

</div>

<!-- Sticky Footer -->

<div class="sticky_footer">
    <!--a href="https://e-brochures.arni.in/AGI" target="_blank" style="color: #f0f0f0"-->E-Brochure</a> <span style="color: #707070">|</span> 

    <!--a href="https://api.whatsapp.com/send?phone=18008918962&text=Hi%20Amrapali,%20I%20would%20like%20to%20inquire%20about" style="color: #f0f0f0"-->WhatsApp</a> <span style="color: #707070">|</span>

    <!--a href="<?php  echo base_url('registeronline/applynow');?>" style="color: #f0f0f0" target="_blank">Apply online</a> <span style="color: #707070">|</span-->
    <!--span class="applynow" target="_blank" style="cursor: pointer;color: #f0f0f0">Apply online</span><span style="color: #707070">|</span-->

    <a href="<?php  echo site_url('admissions/whyus#enquiry');?>" style="color: #f0f0f0">Enquire</a> <span style="color: #707070">|</span>

    <a href="tel: +18008918962" style="color: #f0f0f0">Call us</a>

</div>

<!-- jQuery -->

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

<!-- Bootstrap Core JavaScript -->

<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<script src="<?PHP echo base_url() . 'assets/js/jquery.easy-ticker.js'; ?>"></script>

<script src="<?PHP echo base_url() . 'assets/js/ticker.js'; ?>"></script>

<script type="text/javascript">

    $(document).ready(function () {

        $(window).load(function(){

            //$('#myModal3').modal('hide');

            //$('#myModal2').modal('show');
            
            
            $('#myModal3').click(function(){
                $('#myModal3').hide();
                
            });
            
            
            $('.applynow').click(function(){
               $('#myModal44').show();
               var url_ = site_url_ + '/Agi/applynow1';
               console.log(site_url_ + '/applynow.html');
               $('#iframe_widget').attr('src', site_url_ + '/applynow.html');
               $.ajax({
                   type:'GET',
                   url:url_,
                   success: function(data){
                       $('#iframe_widget').attr('src', site_url_ + "/" + data);
                   },error: function(xhr, status, error){
                       alert(xhr.responseText());
                   }
               })
            });
            $('#closewidget').click(function(){
                $('#myModal44').hide();
            });
            
            

        }); 
        
        

        var dd = $('.vticker').easyTicker({

            direction: 'up',

            easing: 'easeInOutBack',

            speed: 'slow',

            interval: 5000,

            height: 'auto',

            visible: 1,

            mousePause: 0,

            controls: {

                up: '.up',

                down: '.down',

                toggle: '.toggle',

                stopText: '<i class="fa fa-play" aria-hidden="true"></i>'

            }

        }).data('easyTicker');





        $('.vis').click(function () {

            dd.options['visible'] = 3;



        });



        $('.visall').click(function () {

            dd.stop();

            dd.options['visible'] = 0;

            dd.start();

        });



        $(".expand").on( "click", function() {

            $(this).next().slideToggle(200);

            $expand = $(this).find(">:first-child");

            

            if($expand.text() == "+") {

              $expand.text("-");

            } else {

              $expand.text("+");

            }

        });

        

        $('.aiwhatsapp').hover(function(){

             $('.aiwhatsapp').css('right', '-15px');

        }, function() {

            $('.aiwhatsapp').css('right', '-100px');

        });

        

        

        $('.aiapply').hover(function(){

             $('.aiapply').css('right', '-5px');

        }, function() {

            $('.aiapply').css('right', '-70px');

        });

        

        $('.admission_').hover(function(){

             $('.admission_').css('right', '0px');

        }, function() {

            $('.admission_').css('right', '-5px');

        });

        

        $('.aienquiry').hover(function(){

             $('.aienquiry').css('right', '-5px');

        }, function() {

            $('.aienquiry').css('right', '-70px');

        });
    });
    

</script>

<?php $this->load->view('templates/socialMediaRight'); ?>

<!--div class="admission_ applynow" target="_blank" style="cursor: pointer"><img src="<?php echo base_url('assets/img/admission-right.png');?>?version=1.6" style="width: 42px"></div-->
<!--div class="admission_ applynow" target="_blank" style="cursor: pointer"><a href="<?php //echo site_url('registeronline/applynow');?>"><img src="<?php //echo base_url('assets/img/admission-right.png');?>?version=1.6" style="width: 42px"></a></div-->

<!-- wow.min.js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!-- owl-carousel -->

<script src="<?php echo base_url('assets/owl-carousel/owl.carousel.min.js'); ?>?ver=1.9"></script>

<!-- smoothscroll -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>

<!-- Offcanvas Menu -->

<script src="<?php echo base_url('assets/js/hippo-offcanvas.js'); ?>?ver=1.0"></script>

<!-- easypiechart -->

<script src="<?php echo base_url('assets/js/jquery.easypiechart.min.js'); ?>?ver=1.0"></script>

<!-- Scrolling Nav JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- Magnific-popup -->

<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>?ver=1.0"></script>

<!-- Shuffle.min js -->

<script src="<?php echo base_url('assets/js/jquery.shuffle.min.js'); ?>?ver=1.0"></script>

<!-- Custom Script -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

<script src="<?php echo base_url('assets/js/scripts.js'); ?>?ver=1.3"></script>

<script src="<?php echo base_url('assets/js/main.js'); ?>?ver=8.9"></script>

<!--script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(103437)</script-->
<script src="https://extraaedgeresources.blob.core.windows.net/demo/amrapali/Chatbot/js/chat.js"> </script>
<script src="https://eequeuestorage.blob.core.windows.net/staticfiles/amrapali/ee-form-widget/form-1/widget.js"></script>


</body>

</html>

