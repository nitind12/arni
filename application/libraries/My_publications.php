<?php
class My_publications {
	function fhm_publications(){
	    // Journals
	    $data_['journals'] = array (); 
	    
	    // Newletters
	    $data_['newletters'] = array (
	        [
	            'Category'=>'Newsletters',
	            'title_' => 'Abhiwyakti',
	            'volume_'=> 'XIII',
	            'issue_' => '-',
	            'year_' => '2018',
	            'path_' => 'ABHWYAKTI VOL 13.pdf'
	        ],
	        [
	            'Category'=>'Newsletters',
	            'title_' => 'Abhiwyakti',
	            'volume_'=> 'XIV',
	            'issue_' => '-',
	            'year_' => '2018',
	            'path_' => 'ABHWYAKTI VOL 14.pdf'
	        ],
	        [
	            'Category'=>'Newsletters',
	            'title_' => 'Abhiwyakti',
	            'volume_'=> 'XV',
	            'issue_' => '-',
	            'year_' => '2020',
	            'path_' => 'ABHWYAKTI VOL 15.pdf'
	        ]
	    );
	    
	    // Magazines
	    $data_['magazines'] = array (
	        [
	            'Category'=>'Magazines',
	            'title_' => 'HI-T',
	            'volume_'=> 'II',
	            'issue_' => '-',
	            'year_' => '',
	            'path_' => 'HI-T Vol 2.pdf'
	        ],
	        [
	            'Category'=>'Magazines',
	            'title_' => 'HI-T',
	            'volume_'=> 'III',
	            'issue_' => '-',
	            'year_' => '',
	            'path_' => 'HI-T Vol 3.pdf'
	        ],
	        [
	            'Category'=>'Magazines',
	            'title_' => 'Student&opos;s Magazine',
	            'volume_'=> 'I',
	            'issue_' => '-',
	            'year_' => '',
	            'path_' => 'ESSAYER_MAGAZINE.pdf'
	        ]
	    );
	
	    return $data_;
	}
}
