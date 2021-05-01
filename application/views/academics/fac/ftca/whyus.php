<?php
	$high_ = array (
		[
			'point_' 	=> "LEARN BY DOING",
			'detail_' 	=> "Students have the opportunity to apply theoretical knowledge to solve real-world problems. You will work on live projects, with state-of-the-art technology in hands- on lab environments to master practical engineering &technical skills and the theoretical principles needed to succeed in any industry from your very first day on the job.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "ACCOMPLISHED FACULTY",
			'detail_' 	=> "You will learn from faculty members who are dedicated to teaching and active engagement in cutting edge applied research, scholarly activity and professional practice.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "INDUSTRY PARTNERS & CERTIFICATIONS",
			'detail_' 	=> "The various programmes of the faculty are clubbed with equally effective and affordable certifications from industry partners. The students have opportunities to participate with faculty and industry partners on student projects, internships, re-search and incubation projects.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "PERSONALITY ENRICHMENT AND COGNIZANCE CELL (PECC)",
			'detail_' 	=> "PECC offers variety of personality development programmes on- aptitude, confidence building and communication enhancement which help students to enrich their personality and get ready to face the corporate world with utmost confidence.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "BRIDGE COURSE",
			'detail_' 	=> "The bridge course for the students admitted to B. Tech. and Polytechnic through lateral entry fills the gap and equip them with required knowledge and skills on the topics that are covered in 1st year of these courses.The bridge course has been instrumental in making students comfortable and confident in the course progression from the 2nd year onwards.",
			'bullets'	=> ''
		],

	);
?>
<h3>Programme Highlights</h3>
<?php foreach ($high_ as $item) { ?>
<div <?php echo $class_;?>>
<p>
	<h5><?php echo $item['point_'];?></h5>
	<?php echo $item['detail_'];?>
	<?php if($item['bullets']!=''){?>
		<?php $obj = explode(',', $item['bullets']); ?>
		<ul class="mylist">
		<?php for($i=0;$i<count($obj);$i++){?>
			<li><?php echo $obj[$i]; ?></li>
		<?php } ?>
		</ul>
	<?php } ?>
</p>
</div>
<?php } ?>

<div <?php echo $class_;?>>
<p>
	<h4>The Difference</h4>
	<ul class="mylist" style="line-height: 1.5em">
		<li>20 years of excellence</li>
		<li>Experienced Faculty and Trainers</li>
		<li>Strong Alumni Community</li>
		<li>Summer and Winter Internship to acquire practical experience</li>
		<li>Diverse employment across country and abroad</li>
		<li>Rich Software library with Advanced Labs</li>
		<li>Special Training on new age Technologies</li>
		<li>Personality Development Classes for grooming the student and making them ready for employment</li>
		<li>Specialized project works in upcoming technology providing students exposure to industry oriented
             challenges</li>
		<li>Hands-on experience through industrial training in reputed organizations</li>
		<li>Expert sessions by renowned academicians and professional trainers</li>
		<li>Exposure to various workshop, in house training sessions, webinars, seminars, video conferencing 
             sessions with experts</li>
		<li>Exposure to various inter institute competitions, skill India competitions, MSME projects</li>
		<li>Exposure to Rich NPTEL Repository</li>
		<li>Focus on SWAYAM and MOOCs platform</li>
		<li>Environmental Friendly infrastructure</li>
	</ul>
</p>