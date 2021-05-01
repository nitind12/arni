<h3>Campus Placements</h3>
<div <?php echo $class_;?>>
	<div class="job-details" style="margin-top: 0px;">
        <div class="panel-group" id="accordion1">
            <?php $count_ = 1; 
                $year_ = date('Y');
                $year_upto = $year_ - 2;
            ?>
            <?php for($loop1=date('Y'); $loop1>=$year_upto; $loop1--){ ?>
                <div style="clear: both; padding: 20px;"></div>
                <h5>PLACEMENT <?PHP echo $loop1; ?> </h5>
                    <?php $dept_ = 'FHM'; ?>
                    <?php include('fhm.php'); ?>
                    
                <?php if($loop1 >= 2020){?>
                    <?php $dept_ = 'FTCA'; ?>
                    <?php include('ftca.php'); ?>
                <?php } else { ?>
                    <?php $dept_ = 'FCSA'; ?>
                    <?php include('fcsa.php'); ?>
                    
                    <?php $dept_ = 'FTS'; ?>
                    <?php include('fts.php'); ?>
                <?php }?>
                    
                    <?php $dept_ = 'FCBM'; ?>
                    <?php include('fcbm.php'); ?>
            <?php } ?>
        </div>
    </div>
</div>
<div <?php echo $class_;?>>
<p>
	Campus placement drives are organized by inviting various companies for the placements of the students for jobs. The CTPD also encourages students to have their pre assessment done through online testing software’s.  The students not only get ample opportunities through on campus drives but are also provided multiple off campus opportunities too.
</p>
<p>
	<h5>Internships and Industrial Training</h5>
	During course Internships and Training is the integral part of the various programmes at AGI it provides students with an opportunity to get themselves exposed to real world challenges and real industry operations. Internships and Industrial trainings are provided at various industries varying from 6 to 22 weeks and under supervision and guidance of respective industry personnel. The faculty mentors carries out monitoring and evaluation regularly.
</p>
<p>
	<h5>Industrial Exposure Tour</h5>
	Industrial Exposure Tours are very important for students and at AGI students during their 1st or 2nd year of academics are provided with the opportunity to the relevant industries at various locations. These tours provide students with the exposure to understand the operational practices and which they can then correlate with applications of theoretical aspects of their study.
</p>
<p>
	<h5>Student Projects</h5>
	CTPD coordinates both with In house faculty and Industrial counterparts to assist students in preparing the projects reflecting the needs and problems of the industry. Institute faculty interacts with industry personnel for successful implementation of such projects.
</p>
<p>
	<h5>Career Orientation Programmes</h5>
	Various Career Orientation Programmes are conducted through CTPD to imbibe within students the much required focus; experts are invited to orient students about industry expectations. Additional workshops and conferences are organised within a calendar year to provide students an opportunity to develop direct interaction with them thus helping them to improve their Personality have Group Discussions and showcase their Presentation Skills.
</p>