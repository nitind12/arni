	<?php
		$cse = array(
			[
				'FULLNAME' => 'Computer Science Engineering LABS',
				'LABS'	=> 'Advanced Computer Architecture, Distributed Systems, Computer Based Numerical and Statistical Techniques, Unix & Shell Programming, Compiler Design,  Computer Graphics, Design and Analysis of Algorithms, Data Structure, Web Technology, Object Oriented Programming, Database Management Systems, Operating Systems, Artificial Intelligence and Computer Networks, Java & Advanced Java, Machine Learning, Big Data Analytics, Soft Computing',
			],
			[
				'FULLNAME' => 'Mechanical Engineering LABS',
				'LABS'	=> 'Applied Thermodynamics, Automobile Engineering, Basic Civil Engineering, Basic Mechanical Engineering, Computer Aided Manufacturing, Engineering Drawing, Engineering Mechanics, Fluid Machinery, Fluid Mechanics, Heat & Mass Transfer, Machine Drawing, Manufacturing Science, Material Science and Testing, Measurement and Metrology, Refrigeration & Air Conditioning, Theory of Machines, Workshop, MATLAB, CAD',
			],
			[
				'FULLNAME' => 'Electronics and Communication Engineering LABS',
				'LABS'	=> 'Analog Integrated Circuits, Analog Communication, Basic Electronics, Digital Electronics, Digital Communication, Digital Signal Processing, Microwave, Optical Fibre Communication, Printed Circuit Board, Simulation, Electronic Devices and Circuits, Computer Aided Design, Internet of Things (IoT), Deep Learning',
			],
			[
				'FULLNAME' => 'Electrical and Electronics Engineering LABS',
				'LABS'	=> 'Electrical Drives, Power System, Basic Electrical, Control System, Electrical Workshop, Electromechanical Energy Conversion - I,  Electromechanical Energy Conversion – II, Microprocessor, Network & Measurement, Power Electronics, Power Simulation, Workshop Technology, Engineering Drawing, Artificial Neural Network',
			],
			[
				'FULLNAME' => 'Electrical and Electronics Engineering LABS',
				'LABS'	=> 'Electrical Drives, Power System, Basic Electrical, Control System, Electrical Workshop, Electromechanical Energy Conversion - I,  Electromechanical Energy Conversion – II, Microprocessor, Network & Measurement, Power Electronics, Power Simulation, Workshop Technology, Engineering Drawing, Artificial Neural Network',
			],
		);
	?>
<h3>Infrastructure</h3>
<div <?php echo $class_;?>>
<h4>Laboratories</h4>
	<?php foreach ($cse as $item) { ?>
		<div class="col-xs-12 col-md-6 col-sm-6">
			<p>
			<h5><?php echo $item['FULLNAME'];?></h5>

			<?php if($item['LABS']!=''){ ?>
				<?php $obj = explode(',', $item['LABS']); ?>
				<table class="table">
					<?php for($i=0;$i<count($obj);$i++){?>
						<tr>
							<td><?php echo $obj[$i]; ?></td>
						</tr>
					<?php } ?>
				</table>
			<?php } ?>
			</p>
		</div>
	<?php } ?>
</div>