<?php
	$national_rankings = array(
		[
			'RANK'	=> 'Category "A" Business School for MBA in Northern India by Chronicle Survey 2019', 
			'class' => 'rank_1'
		],
		[
			'RANK'	=> 'Top 10 Promising B School for MBA in India as per GHRDC Survey 2013,14,15,16,17,18,19',
			'class' => 'rank_2'
		],
		[
			'RANK'	=> 'Among Top 70 BBA Institute in India as per Times Education Survey 2019',
			'class' => 'rank_1'
		],
		[
			'RANK'	=> 'Among Top 21 BBA Institute in North India as per GHRDC Survey 2019',
			'class' => 'rank_2'
		],
	);

	$high_ = array (
		[
			'point_' 	=> "INTENSIVE LEARNING EXPERIENCE",
			'detail_' 	=> "The programmes at diploma, undergraduate and post graduate levels are designed and delivered in a robust way to immerse participants into an intensive learning experience.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "LIVE PROJECTS",
			'detail_' 	=> "Our students regularly work with organisations across diverse industries through live projects. Students get to research, develop and pitch proposals & presentations.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "INTERNSHIPS",
			'detail_' 	=> "Our students get regular opportunities for summer and winter internship in leading corporate. The onsite and offsite internships provide the students with much needed practical exposure.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "ACCESS TO THE BEST EXPERTS",
			'detail_' 	=> "At the heart of our programmes lies access to the best of the experts from industry and academia both. Industry and academic experts regularly visit our campus to interact and guide students for their professional endeavours ahead.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "INNOVATIVE TEACHING METHODOLOGY",
			'detail_' 	=> "At Faculty of Commerce & Business Management, students engage directly with real business opportunities and challenges made possible through innovative teaching methodology. Case studies, story-telling, simulations, business games, e-learning, blended learning and several others are common features of the programmes.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "Career Oriented Add-on Certifications in",
			'detail_' 	=> "",
			'bullets'	=> 'Retail Management, E-commerce & Digital Marketing, Banking, Financial Services & Insurance, Tally & MS Office, Supply Chain Management, Stock Market Operations (NSE/BSE), Human Resources'
		],
		[
			'point_' 	=> "ACE Academy",
			'detail_' 	=> "The ACE Academy of the Faculty of Commerce & Business Management, AGI prepares the students in the areas of aptitude, logical reasoning, arithmetic, general knowledge and English. Special focus on Spoken English, Presentation skills and holistic Personality Development of the students are the essential features at ACE Academy.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "Co-curricular Opportunities",
			'detail_' 	=> "Several of our co-curricular events and activities foster the spirit of collaboration and competitiveness. The co-curricular activities including the management fest and various clubs (Marketing Club, Finance Club, HR Club & IB Club) hone managerial skills of the students. The activities assist in gaining hand-on-experiences in managing and leading people",
			'bullets'	=> ''
		],

	);
?>
<h3>Programme Highlights</h3>
<div <?php echo $class_;?>>
<p>
	Now, more than ever, the global business world is calling for well- prepared business leaders those who possess wisdom and knowledge, solid business skills, a global mind-set and a desire to make a positive impact on society. Employers are seeking business professionals who can solve complex business problems. The programmes at Faculty of Commerce and Business Management demonstrate uniqueness & restores faith in the smartest business decision you have taken. We offer:
</p>
</div>
<div <?php echo $class_;?>>
<h5>National Rankings</h5>
	<?php foreach ($national_rankings as $item) { ?>
		<div style="" class="<?php echo $item['class'];?>">
				<?php echo $item['RANK']; ?></td>
				
		</div>
	<?php } ?>
</div>
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