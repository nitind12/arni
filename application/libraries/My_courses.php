<?php
class My_courses {
	function fetch_all_courses(){
		$data_['fhm_courses'] = array (
	        [
	            'ABBREV'                => 'BHMCT',
	            'COURSE'                => 'Bachelor of Hotel Management & Catering Technology',
	            'DURATION'              => '4 Years',
	            'PROGRAMME'             => 'Degree Programme',
	            'EXTRA'                 => '',
	            'ELIGIBILITY'           => '10+2 with English & 45%',
	            'AFFILIATION_APPROVAL'  => 'Uttarakhand Technical University and approved by AICTE',
	            'FEE_PER_SEMESTER'      => '45,000/-',
	            'syllabus_file'         => 'BHMCT-CBCS18.pdf,BHMCT-II-Year-Syllabus-2019-20.pdf',
	            'path_'                 => '',
	        ],
		);

		$data_['fe_courses'] = array(
		);

		$data_['hostel_'] = array(
			[
				'HOSTELS'				=>'BHABHA~200, TAOGORE~560',
				'FEE'					=>'60,000/-',
				'UNIT'					=>'YEAR',
			]
		);
		return $data_;
	}
}