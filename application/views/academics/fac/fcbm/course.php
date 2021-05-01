<h3>Courses</h3>
<div <?php echo $class_;?>>
<p>		
	<b>The Academic Programmes offered at <?php echo strtoupper($college);?> are as under:</b><br>
	<ul class="mylist"style="border:  #ff0000 solid 0px">
		<?php foreach ($crs['fcbm_courses'] as $item) { ?>
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
			<th>Eligibility</th>
			<th>Affiliation/ Approval</th>
			<th>Fee (in INR) per Sem.</th>
			</tr>
			<?php foreach ($crs['fcbm_courses'] as $item) { ?>
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
	The career avenues after completing business management and commerce programmes are many. The most sought career avenues post completion of these undergraduate, post graduate and diploma programmes focuses on planning, execution, analysis and supervision of business processes. The avenues presented are not limited to the ones listed bit is only indicative of possibilities that might exist in the market. 
	<ul class="mylist" style="line-height: 1.5em">
		<li>Project Management </li>
		<li>Business Analytics </li>
		<li>Sales & Marketing </li>
		<li>HR Recruiter</li>
		<li>Product Manager</li>
		<li>HR Generalist </li>
		<li>Equity Analyst </li>
		<li>Risk Analyst</li>
		<li>Business Development </li>
		<li>Marketing Research </li>
		<li>Financial Analyst</li>
		<li>Social Media  Professionals</li>
		<li>Advertising & Marketing Communication</li>
		<li>Event Management</li>
		<li>Brand Manager </li>
		<li>Project Manager</li>
		<li>Public Relations & many more....</li>
	</ul>
</p>
</div>