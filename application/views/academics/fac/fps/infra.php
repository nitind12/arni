	<?php
		$fps = array(
			[
				'FULLNAME' => 'MACHINE ROOM',
				'LABS'	=> 'Various equipments like Tablet punching machine, Tablet coating machine , Ampule filling and sealing apparatus ,Sieve shaker, Bottle Filling Machine, Double cone blender, Bottle washing machine etc., to provide hands on experience and training for handling the industrial set up.',
				'POINTS' => ''
			],
			[
				'FULLNAME' => 'PHARMACEUTICAL CHEMISTRY LABS',
				'LABS'	=> 'Pharmaceutical chemistry labs have essential analytical equipments (conductivity meter, refractometer, potentiometer etc) and chemicals to conduct various tests specified in Pharmacopeia (IP, BP, USP), salt analysis, synthesis of active pharmaceutical compounds like aspirin etc.',
				'POINTS' => ''
			],
			[
				'FULLNAME' => 'PHARMACOGNOSY LAB',
				'LABS'	=> 'Pharmacognosy lab has sophisticated polarized/ compound microscopes, muffle furnace, soxhlet apparatus to study plant sources which were utilized for extraction and standardization of active principles.',
				'POINTS' => ''
			],
			[
				'FULLNAME' => 'PHARMACEUTICS LABORATORY',
				'LABS'	=> 'Pharmaceutics laboratory has setup for equipments like tray dryer, Tablet Dissolution test apparatus, disintegration test apparatus, friability test apparatus, tablet hardness tester, capsule filling machine etc. to prepare and evaluate Pharmaceutical dosage forms like syrups, tablets, capsules and cosmetics.',
				'POINTS' => ''
			],
			[
				'FULLNAME' => 'ANATOMY AND PHYSIOLOGY LABORATORY',
				'LABS'	=> 'Anatomy and Physiology Laboratory have haemocytometer, Hutchinson’s spirometer, sphygmomanometer etc. to determine various physiological /biological parameters.',
				'POINTS' => ''
			],
			[
				'FULLNAME' => 'PHARMACY PRACTICE LABORATORY',
				'LABS'	=> 'Pharmacy Practice Laboratory has laminar air flow unit, B.O.D, membrane filtration unit, autoclave etc., to  conduct aseptic as well as conventional  filling of a prescription, In addition to above, AIPS has:',
				'POINTS' => ''
			],
			[
				'FULLNAME' => 'MEDICINAL GARDEN',
				'LABS'	=> 'It is also developed to study and provide traditional herbs for research and standardization. Purpose is also to encourage students to explore our traditional medicinal system scientifically.',
				'POINTS' => ''
			],
		);
	?>
<h3>Infrastructure</h3>
<div <?php echo $class_;?>>
<h4>Laboratories</h4>
	<?php foreach ($fps as $item) { ?>
		<div <?php echo $class_;?>>
			<p>
			<h5><?php echo $item['FULLNAME'];?></h5>
			<p>
				<?php echo $item['LABS'];?>
			</p>
			<?php if($item['POINTS'] != ''){?>
				<?php $pts_ = explode('~', $item['POINTS']);?>
				<ul class="mylist" style="line-height: 1.5em; list-style-type: disc; padding: 0px 3%">
				<?php for ($i=0;$i<count($pts_); $i++) { ?>
					<li><?php echo $pts_[$i]; ?></li>
				<?php } ?>
				</ul>
			<?php } ?>
		</div>
	<?php } ?>
</div>
<div <?php echo $class_;?>>
	<p>
		<b>In addition to above, FPS has</b><br>
		<ul class="mylist" style="line-height: 1.5em;  padding: 0px 3%">
			<li>Spacious Classrooms fitted with Audio Visual Equipments  </li>
			<li>Well Equipped Library with access to Digital E-Journals and E-Books </li>
			<li>Communication Lab for Effective Communication Classes </li>
			<li>Computer Lab with relevant software</li>
			<li>Conference and Seminar Rooms </li>
		</ul>
	</p>
</div>