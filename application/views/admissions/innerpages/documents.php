<?php
    $docs = array(
        array("High School/HSC examination pass certificate and mark sheet (2 Copies)","success"),
        array("Intermediate/SSC examination pass certificate and mark sheet (2 Copies)","success"),
        array("Mark-sheet and pass certificate of the graduation course (2 Copies)","success"),
        array("Age proof certificate (matriculation certificate)","info"),
        array("Transfer Certificate/School Leaving Certificate in original","warning"),
        array("Migration Certificate in original","warning"),
        array("Character Certificate in original","warning"),
        array("Certificate claiming reservation benefits (03 copies)","danger"),
        array("Certificate of sports participation at University/State/National level (03 copies)","danger"),
        array("Medical Fitness Certificate from Registered Medical Practitioner or CMO","light"),
        array("Income Certificate","light"),
        array("Passport size photograph (10 copies)","info"),
        array("Gap Certificate (reasons for the gap year/years)","info"),
        array("NCC/NSS/Sports Certificate","info"),
    );
?>
<section class="trusted-client-wrapper">
                                    <div class="col-md-12">
                                    <?php $this->load->view('templates/breadcrumb'); ?>  
                                        <h2 class="section-title wow fadeInDown" ><?php echo $title;?></h2>
                                        <div class="col-md-12" style="border: #fff solid 0px">
                                            <p>List of Testimonial to be submitted by the applicant at the time of admission-</p>                                        
                                        </div>  

                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                        <ul class="list-group">
                                                <?php foreach ($docs as $value) {?>
                                                <li class="list-group-item list-group-item-<?php echo $value[1];?>" style="padding:5px!important;">
                                                <?php echo $value[0];?>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <p>
                                                <b>Note</b>:
                                                <ol style="padding: 0px 0px 0px 20px">
                                                    <li>Original testimonials will be verified at the time of counseling or joining the Institute.</li>
                                                    <li>Admission will be treated provisional till the production and verification of the original testimonials.</li>
                                                </ol>

                                            </p>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                </section>