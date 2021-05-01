<h3>Courses</h3>
<div <?php echo $class_;?>>
<p>		
	<b>The Academic Programmes offered at Faculty of Technology & Computer Applications are as under:</b><br>
	<ul class="mylist"style="border:  #ff0000 solid 0px">
		<?php foreach ($crs['ftca_courses'] as $item) { ?>
			<li>
				<b><?php echo $item['ABBREV'] ;?></b> 
				<span class="coursefullform"><?php echo $item['COURSE'] ;?></span> - <?php echo $item['DURATION'] . " " . $item['PROGRAMME'] . " " .$item['EXTRA'];?>
			</li>
		<?php } ?>
	</ul>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<table class="table">
			<tr>
			<th>Course</th>
			<th style="width: 350px">Eligibility</th>
			<th>Affiliation/ Approval</th>
			<th>Fee (in INR) per Sem.</th>
			</tr>
			<?php foreach ($crs['ftca_courses'] as $item) { ?>
				<tr>
					<td><?php echo $item['ABBREV'];?></td>
					<td><?php echo $item['ELIGIBILITY'];?></td>
					<td><?php echo $item['AFFILIATION_APPROVAL'];?></td>
					<td><?php echo $item['FEE_PER_SEMESTER'];?></td>
				</tr>	
			<?php } ?>
	</table>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<h5>A career in these programmes leads to various opportunities in fields of:</h5>
	<ul class="mylist" style="line-height: 1.5em">
		<li>Automobile</li>
		<li>Application Development</li>
		<li>Data Analysis</li>
		<li>Software Engineering &amp; Development</li>
		<li>Computer Programming</li>
		<li>Web Development</li>
		<li>Mobile App Development</li>
		<li>Production &amp; Project Management</li>
		<li>Quality Testing</li>
		<li>Power</li>
		<li>Network & Communication</li>
		<li>Machine Design</li>
		<li>VLSI</li>
		<li>Control Systems</li>
		<li>Cyber Security</li>
		<li>Computer Architecture</li>
		<li>Embedded Circuit Designer</li>
		<li>Digital Communication System</li>
		<li>Energy Distribution</li>
		<li>Robotics Engineering &amp; AI</li>
		<li>Design Engineering</li>
	</ul>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<a name="footnote"></a>
	<div style="float: left">
		<sup>*</sup>Passed BCA/ Bachelor Degree in Computer Science Engineering or equivalent Degree.  OR  Passed B.Sc./ B.Com./ B.A. with Mathematics at 10+2 Level or at Graduation Level (with additional bridge Courses as per the norms of the concerned University)<br>
		<span style="color: #ff0000">Obtained at least 50% marks (45% marks in case of candidates belonging to reserved category) in the qualifying Examination</span>
	</div>
</p>
</div>