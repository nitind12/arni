<?php
	$guidelines= array(
		[
			'content'=>'All the admissions are strictly done on the basis of eligibility criterion decided by AICTE, UGC, Affiliating Universities, Affiliating Board, PCI, NCTE as per the State Government guidelines.',
			'color'=>'#606060'
		],
		[
			'content'=>'An Eligibility criterion for all Undergraduate programmes is completion of Class 12th from any of the recognized boards of India and satisfying the eligibility percentage and age as per the required norms.',
			'color'=>'#707070'
		],
		[
			'content'=>'Applicants who are currently appearing in class 12th exams in year '.date('Y').' can also apply for admission subject to their meeting the eligibility criteria once the results are declared.',
			'color'=>'#606060'
		],
		[
			'content'=>'Pre-qualification criterion for all Postgraduate programmes is graduation from any recognized university in India and eligibility test ranking/percentage/ criteria established by Approving Body and Affiliating University.',
			'color'=>'#707070'
		],
		[
			'content'=>'Applicants appearing in graduation examinations in the year '.date('Y').' may also apply for admission to Post Graduate programme.',
			'color'=>'#606060'
		],
		[
			'content'=>'AGI reserves rights to for final admission on the basis of Personal Interview wherein applicable or eligibility norms.',
			'color'=>'#707070'
		]
	);

	$admission_procedure = array(
		[
			'content'=>'Visit Admission office at AGI campus with your documents and get yourself registered by making the payment of registration fee <b>Rs. 2000/-</b> preferably online or though D/D or cheque in favour of Amrapali Group of Institutes, Payable at Haldwani.',
			'color'=> '#707070'
		],
		[
			'content'=>'Alternatively <span class="applynow" style="color: #0000ff">click [APPLY HERE] button at right side of the screen</span> to fill online application form. Submit the application form and submit fee through online links available at the registration panel.',
			'color'=> '#606060'
		],
		[
			'content'=>'Registration is open for session '.date('Y').', to proceed for registration <span class="applynow" style="color: #0000ff">click [APPLY HERE] button at right side of the screen</span>. Last dates for submission of the registration for different courses will be declared online.',
			'color'=> '#707070'
		],
		[
			'content'=>'Once registered the candidate will receive an e mail from admission office with further steps to proceed further with admission. Also the candidate will receive a personal call from allotted counsellor for further assistance.',
			'color'=> '#606060'
		],
	);
?>

<h3>Admission Procedure</h3>
<div <?php echo $class_;?>>
	<p>
		<h5>Admission Guidelines</h5>
		<?php $count_ = 1; ?>
		<ol style="padding: 0px 3%">
			<?php foreach ($guidelines as $item) { ?>
				<li style="color: <?php echo $item['color'];?>"><?php echo $item['content'];?></li>
			<?php } ?>
		</ol>
	</p>
</div>

<div <?php echo $class_;?>>
	<p>
		<h5>Registration & Admission Procedure</h5>
		<?php $count_ = 1; ?>
		<ol style="padding: 0px 3%">
			<?php foreach ($admission_procedure as $item) { ?>
				<li style="color: <?php echo $item['color'];?>"><?php echo $item['content'];?></li>
			<?php } ?>
		</ol>
	</p>
</div>
