<?php
	$events = array (
		[
			'NAME'		=> 'Coming Soon',
			'TYPE' 		=> '',
			'DETAIL'	=> 'Coming Soon...',
		],
	);
?>
<h3>Events</h3>
<div <?php echo $class_;?>>
	<p style="color: #AA0000"><b><?php echo strtoupper($college);?> has been hosting various events and competitions, to name some:</b></p>
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

