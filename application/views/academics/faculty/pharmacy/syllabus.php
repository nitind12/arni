<style>
    .advantage{
        font-size:40px;
        color:#010066;
    }
</style>
<section class="trusted-client-wrapper">
                                    <div class="col-md-7">
                                        <h6><?php echo $breadcrumb; ?></h6>
                                        <h2 class="section-title wow fadeInDown" ><?php echo $title;?></h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <p>Text Here</i></p>                                        
                                        </div><!-- /.col-md-4 -->                               
                                    </div>
                                    <div class="col-md-5">
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <?php $this->load->view('academics/faculty/features'); ?>        
                                        </div><!-- /.col-md-4 -->                               
                                    </div>
                                
                                <div class="col-md-12" style="margin-top:2em;margin-bottom:3em;background:#ffeaa1; padding:2em 0px;border-radius:10px;">
                                    <div class="col-md-12" style="border: #fff solid 0px">
                                        <div class="col-sm-3 text-center experiance-tab-content wow fadeInRight">
                                            <h2 class="advantage">10+</h2>
                                            <p style="text-align:center">Courses</p>
                                        </div><!--/.col-sm-2 -->
                                        <div class="col-sm-3 text-center experiance-tab-content wow fadeInRight">
                                            <h2 class="advantage">20+</h2>
                                            <p  style="text-align: center">Faculty</p>
                                        </div><!--/.col-sm-6 -->
                                        <div class="col-sm-3 text-center experiance-tab-content wow fadeInLeft">
                                            <h2 class="advantage"><?php echo "4+";?></h2>
                                            <p style="text-align:center">Departments</p>
                                        </div><!--/.col-sm-2 -->
                                        <div class="col-sm-3 text-center experiance-tab-content wow fadeInLeft">
                                            <h2 class="advantage"><?php echo "20+";?></h2>
                                            <p style="text-align:center">Events</p>
                                        </div><!--/.col-sm-2 -->
                                    </div><!-- /.col-md-4 -->  
                                </div>
                                <?php $this->load->view('academics/faculty/course'); ?>

                                <div style="clear:both"></div>
                            </section>
                            