<?php
	$events = array (
		[
			'NAME'		=> 'AVAHAN',
			'URL-CAPTION'=>'Publishing India',
			'URL'       => 'http://www.publishingindia.com/avahan/',
			'URL-IMAGE' => 'publishingindia.png',
			'TYPE' 		=> 'The International Conference',
			'DETAIL'	=>'The annual International conferences provides students with in-depth research knowledge and provides them with an opportunity to interact with leading academicians and Industry experts to acquaint themselves with latest happening.',
		],
		[
			'NAME'		=> 'ABHYUDAYA',
			'URL-CAPTION'=>'',
			'URL'       => '',
			'URL-IMAGE' => '',
			'TYPE' 		=> 'The National Level Talent Hunt Competition',
			'DETAIL'	=>'The event is being organised for the last 15 years with an objective to provide a platform to budding hospitality professionals from various Hospitality Institutions across the nation, wherein they can learn & exchange different skills, explore and unveil the talent within.',
		],
	);
	$regional = array(
		[
			'NAME' => 'Rendezvous',
			'TYPE'=> 'The Expert Session',
			'DETAIL'=> ''
		],
		[
			'NAME' => 'Karyasala',
			'TYPE'=> 'The skill enhancement workshops',
			'DETAIL'=> ''
		],
		[
			'NAME' => 'Theme Lunches & Food Festivals',
			'TYPE'=> 'The organizing of theme events inculcates the planning, organizing, team building and leadership skills amongst students',
			'DETAIL'=> ''
		],
	);
?>
<h3>Events</h3>
	<p style="color: #AA0000"><b>FHM has been hosting various events and competitions, to name some:</b></p>
	<?php foreach ($events as $item) { ?>
		<div <?php echo $class_;?>>
		<h5 style="float: left"><?php echo $item['NAME'];?> - <?php echo $item['TYPE'];?></h5>
		<?php if($item['URL-CAPTION'] != ''){?>
		<div style="float: right"><a href="<?php echo $item['URL'];?>" target="_blank" title="AVAHAN: A Journal on Hospitality and Tourism"><img src="<?php echo base_url('assets/img/'.$item['URL-IMAGE']);?>" style="width: 160px" alt="AVAHAN: A Journal on Hospitality and Tourism"></a></div>
		<?php } ?>
		<p>
			<?php echo $item['DETAIL'];?>
		</p>
		</div>
	<?php } ?>

	<p style="color: #AA0000"><b>Regional level Skill India competition</b></p>
	<?php foreach ($regional as $item) { ?>
		<div <?php echo $class_;?>>
		<h5><?php echo $item['NAME'];?> - <?php echo $item['TYPE'];?></h5>
		<p>
			<?php echo $item['DETAIL'];?>
		</p>
		</div>
	<?php } ?>
	<p>
		It also provides its students different platforms of exposure to have a distinctive edge through participation in events and competitions organized throughout the country.
	</p>

