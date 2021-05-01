<style>
    .glimpses{
        color: #fff;
        background: #fcbb3c;
        border-radius: 5px;
        padding: 5px;
    }
</style>
<?php
	$events = array (
		[
			'NAME'		=> 'SPECIAL ONLINE EVENT',
			'TYPE' 		=> 'World Environment Day',
			'DETAIL'	=>'<a href="https://amrapali.ac.in/photos_inner/509" target="_blank" class="glimpses">Click to see glimpses...</a><br>Faculty of Technology & Computer Applications at Amrapali Group of Institutes celebrated the World Environment Day on 5th June 2020 with great zest and zeal . Due to covid 19 various activities were conducted online . Following were the activities for the students to participate: painting, video message on  following :',
			'bullets'	=> 'Save trees~Save Water~Avoid pollution~Save animals~Grow plants for future~Save Earth~Save energy',
			'extra'		=> 'Students participated and tried to express their concern towards environment with much brilliance and grace.<br>
We appreciate the efforts done by Shubham Tewari, Arpit Joshi, Shardul Kumar, Imran Ahmad, Meghna and Divya Mehra.',
		],
		[
			'NAME'		=> 'SANDHAAN',
			'TYPE' 		=> 'Annual Technical Fest',
			'DETAIL'	=>'Sandhaan is an Inter-collegiate tech-fest aimed at harnessing technological talent and new age skills of engineering and computer application students through various competitive events',
			'bullets'	=> '',
			'extra'		=> '',
		],
	);
?>
<h3>Events</h3>
	<?php foreach ($events as $item) { ?>
		<div <?php echo $class_;?>>
		<h5><?php echo $item['NAME'];?> - <?php echo $item['TYPE'];?></h5>
		<p>
			<?php echo $item['DETAIL'];?>
			<?php if($item['bullets']!=''){?>
				<?php $obj = explode('~', $item['bullets']); ?>
				<ul class="mylist">
				<?php for($i=0;$i<count($obj);$i++){?>
					<li><?php echo $obj[$i]; ?></li>
				<?php } ?>
				</ul>
			<?php } ?>
		</p>
		<?php if($item['extra']!=''){?>
		<p>
			<?php echo $item['extra'];?>
		</p>
		<?php } ?>
		</div>
	<?php } ?>
</div>
<div <?php echo $class_;?>>
	<p>
		It also provides its students different platforms of exposure to have a distinctive edge through participation in events and competitions organized throughout the country.
	</p>
	<p>
		The past few chapters of Sandhaan have witnessed tremendous support from engineering and computer applications students across the nation. Students have enthusiastically participated in various technical and cultural events and showcased their talents in a highly competitive environment.
	</p>
	<p>
		The few events of the annual technical fest, Sandhaan at Faculty of Technology and Computer Applications include:
	</p>
	<p>
		<h6>Lan Gaming</h6>

		Nothing can beat the excitement of all the gamers out in the world looking for an opportunity to show-off their unusual talent. Giving a platform to all the gamers, the Lan Gaming in Sandhaan, included two different gaming challenges. Need for Speed (NFS) was organized for all those who love to drive and rule the roads. PUBG, a player versus player shooter game was also included to keep the spirits high of the gamers.
	</p>
	<p>

		<h6>E-Poster/Poster</h6>

		The E-poster competition provided an opportunity to the students to show their artistic sense and command on specific computer designing software(s). Poster Competition involved drawing in provided charts/paper on the given theme.
	</p>
	<p>
		<h6>Treasure Hunt</h6>

		The treasure hunt takes all the participants on a fun-filled adventure that is sure to be remembered. The puzzle based challenges are always intriguing and require teamwork, problem solving, communication and collaboration. The competing teams in the event are challenged to unlock the clues and crack the codes that will lead them to the ultimate prize….The Treasure!
	</p>
	<p>
		<h6>Codex</h6>

		The competition provides an opportunity to the students to show their programming and innovative skills. Participants have to design a game or any given entities under this activity using C, C++, Java, VB.Net and PHP.
	</p>
	<p>
		<h6>Yantrohan</h6>

		Yantrohan, the competition provides an opportunity to the students to showcase their final year running projects from mechanical, electrical, electronics and automobile.
	</p>
</div>

