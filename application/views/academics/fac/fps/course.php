<h3>Courses</h3>
<div <?php echo $class_;?>>
<p>		
	<b>The Academic Programmes offered at Faculty of Pharmacy & Sciences are as under:</b>
	<ul class="mylist">
		<?php foreach ($crs['fps_courses'] as $item) { ?>
			<li>
					<b><?php echo $item['ABBREV'] ;?> </b>
					<span class="coursefullform"><?php echo $item['COURSE'] ;?></span>
					- <?php echo $item['DURATION'] . " " . $item['PROGRAMME'];?> 
					<?php if($item['EXTRA']!=''){?>
						<span style="font-size: 11px"> <?php echo $item['EXTRA'];?></span>
					<?php } ?>
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
		<?php foreach ($crs['fps_courses'] as $item) { ?>
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
	<h5>Career Opportunities after B. Pharm</h5>
	<ul class="mylist" style="line-height: 1.5em">
		<li>Clinical research associate</li>
		<li>R& D scientist</li>
		<li>Quality control associate</li>
		<li>Formulation development associate</li>
		<li>Drug inspector</li>
		<li>Food inspector</li>
		<li>Scientific writer</li>
		<li>Sales & marketing executive</li>
		<li>Community pharmacist</li>
		<li>Pharmaco-vigilance associate</li>
		<li>Drug analyst</li>
		<li>Pharma Counsellor</li>
		<li>Hospital pharmacist</li>
		<li>Production manager</li>
		<li>Academics (Teaching/ Research/Training)</li>
	</ul>
</p>
</div>
<div <?php echo $class_;?>>
<p>
<h5>Career Opportunities after D. Pharm</h5>
	Diploma in Pharmacy candidates may opt for graduation courses, explore job prospects or a proprietorship depending on their interest. Also, they have a huge career scope in both government and private organizations. One can apply for pharmacist post in hospitals (both Government and Private sector).
	<br>
	The work opportunities in the private firms are as follows:
	<ul class="mylist" style="line-height: 1.5em">
		<li>Medical Transcriptionist</li>
		<li>Technical supervisor</li>
		<li>Chemist / Pharmacist</li>
		<li>Medical representatives</li>
		<li>Production executive</li>
		<li>Store management</li>
	</ul>
</p>
</div>
