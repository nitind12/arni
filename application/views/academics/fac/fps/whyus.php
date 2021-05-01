<?php
	$high_ = array (
		[
			'point_' 	=> "Programme Highlights",
			'detail_' 	=> "",
			'bullets'	=> 'Courses approved by the Pharmacy Council of India.~ A highly disciplined and motivated environment with an extensive focus on practical based learning of our students.~ Intensive academic environment, Qualified and experienced faculty~ Hands- on-  training/  Expert Lectures~ Personality and communication skill enhancement~ Placement opportunity in pharmaceutical, nutraceutical and healthcare industries'
		],
		[
			'point_' 	=> "Co-curricular Opportunities",
			'detail_' 	=> "Several of our co-curricular events and Awareness programmes foster the spirit of collaboration and social responsibility. The co-curricular activities include the celebration of Pharmacist Day, Pharma quiz, Awareness camps at Schools and Health and wellness club activities.",
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
		<?php $obj = explode('~', $item['bullets']); ?>
		<ul class="mylist">
		<?php for($i=0;$i<count($obj);$i++){?>
			<li><?php echo $obj[$i]; ?></li>
		<?php } ?>
		</ul>
	<?php } ?>
</p>
</div>
<?php } ?>