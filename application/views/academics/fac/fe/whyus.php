<?php
	$high_ = array (
		[
			'point_' 	=> "Well Qualified and Dedicated Mentors",
			'detail_' 	=> "The team of well qualified and dedicated mentors at Faculty of Education have created a difference in the B. Ed. programme. With their support only the institute is able to attract young and talented prospective teachers that are all eager to take life’s challenges in stride.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "A real-life Teaching Curriculum and Training",
			'detail_' 	=> "The prospective teachers enrolled in the B.Ed. programme at Amrapali, are exposed to real-life teaching curriculum and training. The focus throughout the programme is to provide an exposure that makes them confident to face all the challenges they could potentially face.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "Diverse Techniques and Teaching Methods",
			'detail_' 	=> "Teaching young minds was never so easy. The inquisitiveness of the ignited minds is always awestruck. Keeping in mind the needs of various stakeholders the prospective teachers of the B. Ed. programme are taught using diverse techniques and teaching methods.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "Exposure to Extra and Co-Curricular Activities",
			'detail_' 	=> "One of the key differences that Amrapali offer to its students of B. Ed. is their active participation in the extra and co-curricular activities. The prospective teachers are provided with ample opportunities to immerse themselves in various extra and co-curricular activities throughout the year.",
			'bullets'	=> ''
		],
	);
?>
<h3>Why us</h3>
<div <?php echo $class_;?>>
    <p>
    	The B. Ed programme at Amrapali Group of Institutes, facilitates recognition of various educational issues both at a macro level including global, national, state and as well as at a local level. Additionally, the programme is instrumental in developing a future ready teaching workforce for a variety of school environments, including private, government, government-aided, and world schools. Finally, during your journey with Faculty of Education you evolve as a teacher by way of acquiring certain qualities. Your purpose of being a teacher becomes clear and you are able to recognise an important role a teacher plays in the political and socio-cultural systems and most importantly, in the education system.<br>
    	The B. Ed programme at Amrapali Group of Institutes provides:
    </p>
    
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