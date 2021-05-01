<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RC extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
    	$len__ = $this->uri->total_segments();
    	$uri_ = $this->uri->uri_to_assoc($len__);

    	$str = explode('/', $this->uri->uri_string($uri_));
    	$k = '';
    	for($i=0; $i<$len__-1; $i++){
    		if($k == ''){
    			$k = $k . $str[$i+1];
    		} else {
    			$k = $k . "/" . $str[$i+1];
    		}
    	}
    	redirect($k);
    }
}