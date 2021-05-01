<?php

class My_scholarships {
	function fetch_all_scholarships(){
		$data_['scholarships'] = array (
	        [
	            'PARTICULAR'            => 'BPL Meritorious 10 % seats of each course',
	            'TUTIONFEE_REBATE'      => '100',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'PG Course- 75% marks in Graduation <br>UG Course 85% marks in Intermediate <br> & <br>Family income below 2 lacs',
	        ],
	        [
	            'PARTICULAR'            => 'AGI faculty members referral',
	            'TUTIONFEE_REBATE'      => '10',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'Admission referred by AGI faculty through their follow up',
	        ],
	        [
	            'PARTICULAR'            => 'Merit scholarship (on the basis of marks in eligibility exam)',
	            'TUTIONFEE_REBATE'      => 'Upto 50',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => '',
	        ],
	        [
	            'PARTICULAR'            => '95% and above',
	            'TUTIONFEE_REBATE'      => '50',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'Should have secured the said percentage and fulfil admission criterion',
	        ],
	        [
	            'PARTICULAR'            => '95% below to 75%',
	            'TUTIONFEE_REBATE'      => '12 to 5',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'Should have secured the said percentage and fulfil admission criterion',
	        ],
	        [
	            'PARTICULAR'            => 'For martyrs, defence forces, Para military serving people dependents',
	            'TUTIONFEE_REBATE'      => '10',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'Should have valid document to support the scholarship requirement and fulfil admission criterion',
	        ],
	        [
	            'PARTICULAR'            => 'Brother Sister concession for existing students',
	            'TUTIONFEE_REBATE'      => '7 in PG <br> 5 in UG courses',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'Should have valid document to support the scholarship requirement and fulfil admission criterion',
	        ],
	        [
	            'PARTICULAR'            => 'Loyalty - for existing AGI students enrolling in  PG courses',
	            'TUTIONFEE_REBATE'      => '10',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'Should have valid referral from to support the scholarship requirement and fulfil admission criterion',
	        ],
	        [
	            'PARTICULAR'            => 'Kumaun Domicile for B.Tech courses',
	            'TUTIONFEE_REBATE'      => '25',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'For students who have domicile of Kumaun Region',
	        ],
	        [
	            'PARTICULAR'            => 'B. Pharma Lateral entry',
	            'TUTIONFEE_REBATE'      => '10',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'For D. Pharma students',
	        ],
	        [
	            'PARTICULAR'            => 'Early Bird',
	            'TUTIONFEE_REBATE'      => '10',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => 'For first 10 admissions of each course (Conditional)',
	        ],
	        [
	            'PARTICULAR'            => 'AGI Family',
	            'TUTIONFEE_REBATE'      => '50',
	            'UNIT'					=> '%',
	            'ELIGIBILITY'           => '',
	        ],
	    );
	   return $data_;
	}
}