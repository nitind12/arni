<h3>Courses</h3>
<div <?php echo $class_;?>>
<p>		
	<b>The Academic Programmes offered at <?php echo strtoupper($college);?> are as under:</b><br>
	<ul class="mylist">
		<?php foreach ($crs['fhm_courses'] as $item) { ?>
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
			<?php foreach ($crs['fhm_courses'] as $item) { ?>
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
	The World Travel Organization predicts that the Hospitality industry will become largest employment provider by 2030. This growth will provide the budding professionals a huge boost in terms of career programme in the various courses of Hospitality Management. 
	<br>
		Our curriculum combines theory with authentic hands-on learning experience and students have numerous opportunities to interact with industry professionals. Students also get access to hands-on real-life training programme incorporated in their day to day activities to make them industry fit.
		<br>
		The skills learned at FHM are applicable not just in Hospitality Industry, but to the entire Service Sector and Tourism-related businesses. 
		<h5>A career in the Hospitality Industry includes opportunities in many different areas such as:</h5>
		<ul class="mylist" style="line-height: 1.5em">
			<li>Hotel’s at International and National Level</li>
			<li>Resorts (golf, ski, jungle, hill, beach, spa, etc.)</li>
			<li>Restaurants </li>
			<li>Quick Service Restaurants (QSR’s)</li>
			<li>Out Door Caterings and Banqueting</li>
			<li>Event Management (sporting, cultural, concerts, exhibitions, conferences etc.)</li>
			<li>Theme parks and attractions</li>
			<li>Cruise lines</li>
			<li>Airlines </li>
			<li>Airlines Catering</li>
			<li>Railways Catering</li>
			<li>Industrial Catering</li>
			<li>PRO in MNC</li>
			<li>Hospitals</li>
			<li>Retail Management 
			<li>Service Sector </li>
			<li>Government Jobs such as Estate Management Officers</li>
			<li>Armed Forces and many more service-related industries</li>
		</ul>
</p>
</div>