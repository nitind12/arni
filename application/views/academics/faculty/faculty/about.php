<style>
    .advantage{
        font-size:40px;
        color:#010066;
    }
</style>
<section class="trusted-client-wrapper">
                                    <div class="col-md-12">
                                        <h6><?php echo $breadcrumb; ?></h6>
                                        <h2 class="section-title wow fadeInDown" ><?php echo $title;?></h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <p>At Arni your dream begins with our respected Faculty who believes in you, who nurtures and leads you to the next dimension, sometimes poking you with a sharp stick called “truth". The academic and the professional Gurus guide young talent in reaching the pinnacle of glory and success. Besides classroom teaching, mentors guides, inspires, motivates and counsel students by their intellectual leadership and dedication by imparting theoretical and technical skills and corporate work ethics. </p>
                                            <p><i>Around 200+ full-time faculty members and various visiting-faculty members, who constitute our intellectual capital are committed to the cause of creating future managers and technocrats with a difference. They focus on learner centric quality delivery using appropriate pedagogy. They strive to add new dimensions to existing course material by continuously incorporating changes that are inspired by developments in the corporate world. </i></p>                                        
                                        </div><!-- /.col-md-4 -->                               
                                    </div>

                                <div style="clear:both; padding: 10px 0px"></div>

                                <?php $this->load->view('academics/faculty/faculty/list', $facultyData);?>
                            </section>