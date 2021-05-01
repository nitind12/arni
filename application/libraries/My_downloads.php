<?php
class My_downloads{
	function fetchDownloads(){
		$data_['downloads'] = array(
			[
				'content' => 'Anti-Ragging Form',
				'path' => base_url('assets/dwnlds/common') . '/affidavit.pdf'
			],
			[
				'content' => 'Library Membership Form (Faculty)',
				'path' => base_url('assets/dwnlds/common') . '/Library Form_Faculty.pdf'
			],
			[
				'content' => 'Library Membership Form (Student)',
				'path' => base_url('assets/dwnlds/common') . '/Library Form_Student.pdf'
			],
			[
				'content' => 'FDP Application Form',
				'path' => base_url('assets/dwnlds/common') . '/FDP_ApplicationForm.pdf'
			],
			[
				'content' => 'Public Notice - Redressal of Grievances Related to COVID-19 Pan',
				'path' => base_url('assets/dwnlds/common') . '/Public Notice - Redressal of Grievances Related to COVID-19 Pan.pdf'
			],
		);

		return $data_;
	}
}