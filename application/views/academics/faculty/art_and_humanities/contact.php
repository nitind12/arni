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
                                        <?php $coldata['cols'] = "col-md-12";?>
                                        <?php $this->load->view('academics/faculty/school_contact', $coldata); ?>                           
                                    </div>
                                    <div class="col-md-5">
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <?php $this->load->view('academics/faculty/features'); ?>        
                                        </div><!-- /.col-md-4 -->                               
                                    </div>

                                <div style="clear:both"></div>
                            </section>
                            