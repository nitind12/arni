<h3>Course Eligibility & Fee</h3>
<div <?php echo $class_;?>>
<p>
	<h5>Hostel Fee</h5>
	<div class="table-responsive">
	<table class="table" style="width: 60%">
			<tr>
			<th width="20%">Particular</th>
			<th>Fee (in INR) per Year</th>
			</tr>
			<?php foreach ($crs['hostel_'] as $item) { ?>
				<tr>
					<td>Hostel</td>
					<td><?php echo $item['FEE'];?></td>
				</tr>	
			<?php } ?>
	</table>
	</div>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<h5>Faculty of Commerce & Business Management Eligibility & Fee</h5>
	<div class="table-responsive">
	<table class="table">
			<tr>
			<th width="20%">Course</th>
			<th width="60%">Eligibility</th>
			<th width="20%">Fee (in INR) per Sem.</th>
			</tr>
			<?php foreach ($crs['fcbm_courses'] as $item) { ?>
				<tr title="<?php echo $item['COURSE'];?>">
					<td><?php echo $item['ABBREV'];?></td>
					<td><?php echo $item['ELIGIBILITY'];?></td>
					<td><?php echo $item['FEE_PER_SEMESTER'];?></td>
				</tr>	
			<?php } ?>
	</table>
	</div>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<h5>Faculty of Hospitality Management Eligibility & Fee</h5>
	<div class="table-responsive">
	<table class="table">
			<tr>
			<th width="20%">Course</th>
			<th width="60%">Eligibility</th>
			<th width="20%">Fee (in INR) per Sem.</th>
			</tr>
			<?php foreach ($crs['fhm_courses'] as $item) { ?>
				<tr title="<?php echo $item['COURSE'];?>">
					<td><?php echo $item['ABBREV'];?></td>
					<td><?php echo $item['ELIGIBILITY'];?></td>
					<td><?php echo $item['FEE_PER_SEMESTER'];?></td>
				</tr>	
			<?php } ?>
	</table>
	</div>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<h5>Faculty of Technology & Computer Applications Eligibility & Fee</h5>
	<div class="table-responsive">
	<table class="table">
			<tr>
			<th width="20%">Course</th>
			<th width="60%">Eligibility</th>
			<th width="20%">Fee (in INR) per Sem.</th>
			</tr>
			<?php foreach ($crs['ftca_courses'] as $item) { ?>
				<tr title="<?php echo $item['COURSE'];?>">
					<td><?php echo $item['ABBREV'];?></td>
					<td><?php echo $item['ELIGIBILITY'];?></td>
					<td><?php echo $item['FEE_PER_SEMESTER'];?></td>
				</tr>	
			<?php } ?>
	</table>
	</div>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<h5>Faculty of Pharmacy & Sciences Eligibility & Fee</h5>
	<div class="table-responsive">
	<table class="table">
			<tr>
			<th width="20%">Course</th>
			<th width="60%">Eligibility</th>
			<th width="20%">Fee (in INR) per Sem.</th>
			</tr>
			<?php foreach ($crs['fps_courses'] as $item) { ?>
				<tr title="<?php echo $item['COURSE'];?>">
					<td><?php echo $item['ABBREV'];?></td>
					<td><?php echo $item['ELIGIBILITY'];?></td>
					<td><?php echo $item['FEE_PER_SEMESTER'];?></td>
				</tr>	
			<?php } ?>
	</table>
	</div>
</p>
</div>
<div <?php echo $class_;?>>
<p>
	<h5>Bus Routes & Fee</h5>
	<div class="table-responsive">
	<table class="table" style="font-size: 12px">
			<tr>
			<th>Route No</th>
			<th style="width:15%">Route</th>
			<th>Driver</th>
			<th style="width:25%">Pick up point</th>
			<th>Pick up time</th>
			<th style="text-align: right">FUll Time</th>
			<th style="text-align: right">One Way</th>
			</tr>
			<?php foreach ($bus_routes as $item) { ?>
				<tr title="<?php echo $item->ROUTE;?>" style="color: <?php echo $item->COLOR;?>">
					<td><?php echo $item->ROUTE_NO;?></td>
					<td><?php echo $item->ROUTE;?></td>
					<td><?php echo $item->DRIVER;?></td>
					<td><?php echo $item->PICK_UP_POINT;?></td>
					<td><?php echo $item->PICK_UP_TIME;?></td>
					<td style="text-align: right"><?php echo $item->STUDENT_FULL;?>/-</td>
					<td style="text-align: right"><?php echo $item->STUDENT_ONE_WAY;?>/-</td>
				</tr>	
			<?php } ?>
	</table>
	</div>
</p>
</div>
