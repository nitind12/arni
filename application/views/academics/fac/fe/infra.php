<?php
	$lab_ = array(
		[
			'point_' 	=> "Language Laboratory",
			'detail_' 	=> "The most prominent among the technological aids in language teaching- is highly valued and it facilitates the teacher's role in creating apt environment for the students and offers more practice hours.<br>Amrapali Institute has a well equipped language laboratory to facilitate development of communication skills of the students. Language Lab is equipped with “Lingua Phone”, audio equipments with headsets that help students in developing their English/Hindi pronunciation and teaching methods. It supports English/Hindi methodology to make students feel more comfortable in their practice sessions. Language lab also has all the facilities which support the students-teachers in effective teaching and learning.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "Social Studies Laboratory",
			'detail_' 	=> "Social Studies Laboratory is a portrait of the Indian culture and consists of Art and Architecture of different civilizations of the world. It introduces students to the conduct of political, social and economical research using quantitative methodologies. The methods are examined in the context of specific research activities like public opinion surveys, comparisons of political processes in different countries and the evaluation of public policies. It also enhances the knowledge of geography and the horizon of everyday world. Different types of Maps, Charts, and Models are available in the Lab.",
			'bullets'	=> ''
		],
		[
			'point_' 	=> "Mathematics Laboratory",
			'detail_' 	=> "Mathematics Laboratory contains relevant and up-to-date instructional materials, designated for the teaching and learning of mathematics and other scientific or research work. Professionally qualified lecturers readily interact with the students on specified set of instructions and facilitate learning of mathematical insights and approaches. The functions of mathematics laboratory include the following:",
			'bullets'	=> 'Arousing interest and motivating learning.~Cultivating favourable attitudes towards mathematics.~Enriching and varying instructions.~Encouraging and developing creative problem solving ability.~Allowing for individual differences in a manner and speed at which students can learn.~Making students witness the origin of mathematical ideas and ~ Facilitate, “Mathematics in the making”.
'
		],
		[
			'point_' 	=> "Physical Science Laboratory",
			'detail_' 	=> "Physical Science Laboratory helps the student to develop a broad array of basic skills and tools of experimental physics as well as chemistry and data analysis. It helps the students to understand the role of direct observation in physical science and to distinguish between inferences based on theory and the outcomes of experiments and develop collaborative learning skills that are vital to success in many lifelong endeavours. It gives the student an appreciation of the way chemistry, as a science, works. Above all, the laboratory offers possibilities where the student can be challenged to think, to argue, to weigh evidence, to explore scientific ideas. The Intellectual stimulation is connection with the ‘real world’, inculcating enthusiasm for physical science.",
			'bullets'	=> ''
		],
	);
?>
<h3>Laboratory</h3>
<?php foreach ($lab_ as $item) { ?>
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