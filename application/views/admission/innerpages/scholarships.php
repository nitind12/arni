<h3>Scholarships</h3>
<div <?php echo $class_;?>>
<p>
	<div class="table-responsive">
	<table class="table">
			<tr>
			<th width="40%">Scholarship</th>
			<th width="25%">% Tution Fee Rebate (one time)</th>
			<th width="35%">Eligibility</th>
			</tr>
			<?php foreach ($scholarships__['scholarships'] as $item) { ?>
				<tr>
					<td><?php echo $item['PARTICULAR'];?></td>
					<td><?php echo $item['TUTIONFEE_REBATE'];?></td>
					<td><?php echo $item['ELIGIBILITY'];?></td>
				</tr>	
			<?php } ?>
			<tr style="text-align: left; color: #440000; background: #f0f0f0">
				<td colspan="3">B. Tech LE Package: Rs. 1,49,900 /- tuition fee for three years – Special Circumstances</td>
			</tr>
			<tr style="text-align: left; color: #440000; background: #f0f0f0">
				<td colspan="3">Diploma LE Package: Rs. 79,900 /- tuition fee for two years – Special Circumstances</td>
			</tr>
			<tr style="text-align: left; color: #440000; background: #f0f0f0">
				<td colspan="3">An economic package (Tuition + Hostel) to MCA, MBA & B. Tech Students on the basis of above mentioned categories</td>
			</tr>
	</table>
	</div>
</p>
</div>
