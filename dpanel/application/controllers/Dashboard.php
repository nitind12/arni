<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('My_model', 'mm');
        if (! $this->session->userdata('ussr_')) {
            redirect(__BACKTOSITE__);
        }
    }

    function index() {
        //echo $this->session->userdata('ussr_'); die();
        $data['user___'] = $this->session->userdata('ussr_');
        $data['wallpaper_'] = '';
        $data['menu'] = $this->mm->get_menu($this->session->userdata('stss_'));
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    function log__out() {
        if($this->session->userdata('ussr_') == 'rahul'){
            $pth = __RAHUL__;
        } else {
            $pth = __BACKTOSITE__;
        }
        $this->session->unset_userdata('ussr_');
        $this->session->unset_userdata('stss_');
        $this->session->unset_userdata('pwd_count');
        redirect($pth);
    }

}
