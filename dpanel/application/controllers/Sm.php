<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sm extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('My_blog_model', 'mbm');
        $this->load->model('My_model', 'mm');
        if (! $this->session->userdata('ussr_')) {
            redirect(__BACKTOSITE__);
        }
        $this->checkMenuAuthentication();
    }
    
    function index(){
        $data['user___'] = $this->session->userdata('ussr_');
        $data['bloglinks'] = $this->mbm->get_bloglinks();
        $data['menu'] = $this->mm->get_menu($this->session->userdata('stss_'));
        $data['folder_'] = 'sm-links';
        $data['page__'] = 'index';
        $data['page_head'] = 'Manage Social Media links';
        $data['innerst'] ='1';
        $data['wallpaper_'] = '';
        
        $this->load->view('templates/header', $data);
        $this->load->view('sm', $data);
        $this->load->view('templates/footer');
    }
    
    function newsm(){
        $this->mbm->createnewblog();
        redirect('blog');
    }
    
    function update_sm_detail($id_='x', $column_='x',$instance='x'){
        $res = $this->mbm->update_blog_detail($id_, $column_,$instance);
        echo $res;
    }
    function delete_sm_detail($id_='x'){
        $res = $this->mbm->delete_blog_detail($id_);
        echo $res;
    }
    function checkMenuAuthentication(){
        if($this->mm->my_menu($this->session->userdata('stss_'), 'blog') == false){
            redirect('dashboard');
        }
    }
    
    
}