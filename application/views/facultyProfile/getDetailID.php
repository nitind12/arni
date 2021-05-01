<style type="text/css">
    @page {
        size:letter; margin:3em 0;
    }

    @media print {      
        body * { visibility: hidden; }
        #printReg * { visibility: visible; margin-top:5px; font-size:14px; font-weight:100}
        #nonprintreg * { visibility: hidden; }
        .page-break	{ display: block; page-break-before: always; }        
    }

    .wrapper {
        font-family: 'Times New Roman';
    }
</style>
<link href="<?PHP echo base_url() . 'assets/css/bootstrap.min.css'; ?>" rel="stylesheet">

<section id="about-us" class="container">
    <?php foreach ($facID as $item) { ?>
        <div class="row" id="printReg">
            <div class="col-lg-12">
                <h3 align='center'>Faculty Profile</h3>   
                <div class='col-xs-8'>
                    <div class="col-xs-5"><h4>Name</h4></div>
                    <div class="col-xs-7"><h4><?php echo $item->name; ?></h4></div>                 
                    <div class="col-xs-5"><h4>Date of Birth</h4></div>
                    <div class="col-xs-7"><h4><?php
                            $timestamp = strtotime($item->dob);
                            $newDate = date('d-m-Y', $timestamp);
                            echo $newDate; //outputs 02-March-2011
                            //echo $item->dob;
                            ?></h4></div>  
                    <div class="col-xs-5"><h4>Gender</h4></div>
                    <div class="col-xs-7"><h4><?php echo $item->gender; ?></h4></div>  
                    <div class="col-xs-5"><h4>email</h4></div>
                    <div class="col-xs-7"><h4><?php echo $item->emailID; ?></h4></div>  
                    <div class="col-xs-5"><h4>Contact</h4></div>
                    <div class="col-xs-7"><h4><?php echo $item->mobile; ?></h4></div>  
                    <div class="col-xs-5"><h4>Educational Qualification</h4></div>
                    <div class="col-xs-7"><h4 align="left"><?php echo $item->qualification; ?></h4></div>  
                </div>
                <div class="col-xs-2"><img src="<?php echo base_url('assets/facultyPic/' . $item->facultyPic); ?>" style='max-width:200px;'></div>
            </div>            
            <div class="clearfix"></div>
            <div class="col-lg-12">
                <div class='col-xs-8'>
                    <hr>
                    <h4 style="margin-left: 15px;">Work Experiance</h4>               
                    <div class="col-xs-5"><h4>Teaching </h4></div>
                    <div class="col-xs-7"><h4 align="left"><?php echo $item->teachingExp; ?></h4></div>  
                    <div class="col-xs-5"><h4>Research </h4></div>
                    <div class="col-xs-7"><h4 align="left"><?php if ($item->researchExp != '') {
                            echo $item->researchExp;
                        } else {
                            echo '-';
                        } ?></h4></div>  
                    <div class="col-xs-5"><h4>Industry </h4></div>
                    <div class="col-xs-7"><h4 align="left"><?php if ($item->industryExp != '') {
                            echo $item->industryExp;
                        } else {
                            echo '-';
                        } ?></h4></div>  
                    <div class="col-xs-5"><h4>Other </h4></div>
                    <div class="col-xs-7"><h4 align="left"><?php if ($item->otherExp != '') {
                            echo $item->otherExp;
                        } else {
                            echo '-';
                        } ?></h4></div>  
                </div>
            </div>   
            <div class="clearfix"></div>
            <div class="col-lg-12">
                <hr>                
                <div class="col-xs-3"><h4 style="margin-left: 15px;">Area of Specialization</h4></div>
                <div class="col-xs-9"><h4  style="margin-left: 30px;" align="left"><?php echo $item->specialization; ?></h4></div>  
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12">
                <hr>
                <h4 style="margin-left: 30px;">Subject Taught</h4>
                <div class="col-xs-3"><h4 style="margin-left: 15px;">Graduate</h4></div>
                <div class="col-xs-9"><h4 align="left" style="margin-left: 30px;"><?php echo $item->graduateSubject; ?></h4></div>  
                <div class="col-xs-3"><h4 style="margin-left: 15px;">Post-Graduate</h4></div>
                <div class="col-xs-9"><h4 align="left" style="margin-left: 30px;"><?php echo $item->pgSubject; ?></h4></div> 
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12">
                <hr>
                <h4 style="margin-left: 30px;">Research Guidance</h4>
                <div class="col-xs-2"><h4 style="margin-left: 15px;">Bachelor's</h4></div>
                <div class="col-xs-2"><h4 align="left"><?php echo $item->researchBachelors; ?></h4></div>  
                <div class="col-xs-2"><h4>Master's</h4></div>
                <div class="col-xs-2"><h4 align="left"><?php echo $item->researchMasters; ?></h4></div> 
                <div class="col-xs-2"><h4>Doctorate</h4></div>
                <div class="col-xs-2"><h4 align="left"><?php echo $item->researchPhD; ?></h4></div> 
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12">
                <hr>
                <div class="col-xs-2"><h4 style="margin-left: 15px;">Conference/ Seminar Attended</h4></div>
                <div class="col-xs-2"><h4 align="left"><?php echo $item->conference_seminar; ?></h4></div>  
                <div class="col-xs-2"><h4>Projects Carried out </h4></div>
                <div class="col-xs-2"><h4 align="left"><?php echo $item->project; ?></h4></div>  
                <div class="col-xs-2"><h4>Publications </h4></div>
                <div class="col-xs-2"><h4 align="left"><?php echo $item->publications; ?></h4></div>  
            </div>          
        </div><!--/.row-->
        <div class="page-break"></div>
<?php } ?>
</section>