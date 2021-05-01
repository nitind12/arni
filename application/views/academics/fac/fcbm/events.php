<?php
	$events = array (
		[
			'NAME'		=> 'PRABANDHAN',
			'TYPE' 		=> 'Annual Management Fest',
			'DETAIL'	=> 'Gone are the days when academics was considered the only focus in higher education. Today, versatility is one of the key attributes that most recruiters prefer while hiring a fresher. In reference to a management degree or diploma this expectation is all the more higher than ever. Active participation in college fests gives an opportunity to take the initiative and grow in several directions. Identifying this the Faculty of Commerce & Business Management at Amrapali Group of Institutes conceptualised Prabandhan – the annual management fest.<br>Today, Prabandhan – the flagship inter-collegiate management fest is one of the most sought fest in the region that attract students from different B-Schools in huge numbers from various parts of the country.<br>Since its inception Prabandhan – the management fest of Faculty of Commerce and Business Management has adapted itself to suit to the interests and upcoming needs of the potential business managers and leaders. Every year new events are conceptualised and included in a competitive mode to create an all encompassing and a stimulating management fest.<br>The last chapter of Prabandhan witnessed huge response from different B-Schools of Northern India in the competitive events that included Bulls and Bears, Business Plan Competition, Case Study Competition, Corporate Roadies, Business Quiz, Just-a-Minute, Ad-Mad Show and many more.<br>',
		],
		[
			'NAME'		=> 'MANTHAN',
			'TYPE' 		=> 'Annual National Seminar',
			'DETAIL'	=> 'Manthan is the annual National Seminar organised by Faculty of Commerce & Business Management, AGI. Every year the platform of Manthan provides us an opportunity to invite eminent academicians, industry experts, practitioners, research scholars and other stakeholders to share their insights and best practices on an identified theme of relevance.',
		],
		[
			'NAME'		=> 'ACME',
			'TYPE' 		=> 'Journal',
			'DETAIL'	=> 'The Annual Journal of Faculty of Commerce & Business Management (ISSN: 0974-1763)',
		],
		[
			'NAME'		=> 'KRITI',
			'TYPE' 		=> 'Newsletter',
			'DETAIL'	=> 'The Bi Annual Newsletter of the Faculty of Commerce & Business Management, AGI.',
		],
	);
?>
<h3>Events</h3>
<div <?php echo $class_;?>>
	<?php foreach ($events as $item) { ?>
		<div <?php echo $class_;?>>
		<h5><?php echo $item['NAME'];?> - <?php echo $item['TYPE'];?></h5>
		<p>
			<?php echo $item['DETAIL'];?>
		</p>
		</div>
	<?php } ?>
</div>
<div <?php echo $class_;?>>
	<p>
		It also provides its students different platforms of exposure to have a distinctive edge through participation in events and competitions organized throughout the country.
	</p>
</div>
