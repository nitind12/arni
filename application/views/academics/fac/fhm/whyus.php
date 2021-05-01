<?php
	$high_ = array (
		[
			'point_' 	=> "HIGHLY RANKED",
			'detail_' 	=> "Amongst the leading Institutes of Hotel Management in Country and Top Ranked Hotel Management Institute in Uttarakhand for last 10 years, as per The Hansa Research Survey 2015, 2016, 2017, 2018 and 2019 GHRDC Survey's 2011 to 2019, Bhaskar Laksya Survey, Synovate Survey, TV 100, Best Hotel Management Institute in Uttarakhand by CEGR, India, Highly ranked by Business Standard, The Week Magazine Survey, Higher Education Review Magazine and Sun etc.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "EXPOSURE TO THE WORLD",
			'detail_' 	=> "The students are provided with exposure to latest development in Industry through International Conferences, Skill Development Workshops, Expert Sessions, Skill Competitions and Industrial Training in Worlds leading Hotel Brands. The online connect through webinars also provide students an opportunity to interact with international experts of repute and can have an understanding of the latest happenings worldwide.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "UNIVERSITY TOPPERS",
			'detail_' 	=> "We are academically rich and students of FHM have been awarded Gold Medals for being University Toppers and have been awarded by chief minister in India Skill Competition.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "INDUSTRY TIE UP's",
			'detail_' 	=> "Focus is on Skill enhancement and for the same Tie-Ups with training partners and Industry is ensured to provide training in latest domain and operations.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "HIGH PLACEMENT RATIO",
			'detail_' 	=> "Above 95% placements in reputed Hospitality organisations and Groups like; The Oberoi, The Taj, The ITC, The Hyatt, The Leela, The Marriott, The Carlson Rezidor, Ramada, The Jaypee, The Lalit, Le Meridien, Hilton, Inter Continental Hotels, Lemon Tree, St. Regis, Radisson,  and  many other major players in the industry.
The FHM Graduates & Diploma holders are being selected as Management Trainees, Kitchen Management Trainee and Operational Trainee for specialised positions.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "EXPERIENCED FACULTY",
			'detail_' 	=> "The mentors at FHM are well qualified and backed up with rich industry experience to enhance academic delivery process. The rich industrial exposure of mentors, help students to learn and practice the latest technical skills.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "RICH LIBRARY",
			'detail_' 	=> "In FHM Library you can find a rich collection of Books and Periodicals which makes us different amongst all the leading Hospitality colleges.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "MENTORING",
			'detail_' 	=> "The Institute has Mentoring System in place through which the performance of the students and their difficulties are assessed at both personal and academic levels. Each student's performance record is being maintained and accordingly every student is counselled for excellence in the areas.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "STRONG ALUMNI BASE",
			'detail_' 	=> "At FHM we are proud of our Alumni, who are working with the Top Hospitality Chains worldwide and you may find them working with the leading hotels of the word. This Alumni presence takes us as a renowned name of hospitality institution worldwide.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "SKILL FOR LIFELONG SUCCESS",
			'detail_' 	=> "At FHM, sessions are dedicated to develop skills within the budding professionals which can contribute to their lifelong success, The Skills nurtured are:",
			'bullets'	=> 'Communication Skills,Presentation Skills,Hospitality-Trade Oriented Skills,Information Technology Skills,Problem-Solving Skills,Team Skills,Management Skills,Business Simulation Skills
'
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