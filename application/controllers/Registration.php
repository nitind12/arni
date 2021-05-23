<?php defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('Web_model', 'wm');
        $this->load->model('Arni_model', 'arni');
    }

    function submit_registration(){
    	echo $this->arni->submit_registration();
    }
}