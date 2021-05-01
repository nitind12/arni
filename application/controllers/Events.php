<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    function metainfo_for_web($clg='x', $page='x'){
        $metadata__ = $this->my_library->heading_for_page_($clg, $page);
            $data_['abstract']      = $metadata__['abstract'];
            $data_['contact']       = $metadata__['contact'];
            $data_['keywords']      = $metadata__['keywords'];
            $data_['distribution']  = $metadata__['distribution'];
            $data_['author']        = $metadata__['author'];
            $data_['description']   = $metadata__['description'];
            $data_['title']         = $metadata__['title'];
        return $data_;
    }
    
    function spandan2019(){
        $this->load->model('web_model', 'wm');
        $data_['meta'] = $this->metainfo_for_web('spandan', 'spandan'); 
        $data_['college'] = $this->wm->vol_getCollege();
        $data_['course'] = $this->wm->vol_getCourse_with_Sem();
        $data_['events'] = $this->wm->vol_getEvents();
        $data_['committee'] = $this->wm->vol_getCommittees();
        $data_['positions'] = $this->wm->vol_getPosition();

        $data_['title'] = 'Spandan 2019 invites student volunteers';
       
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = 'Spandan 2019 invites student volunteers';

        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = "";//$this->ouralumni();
        $data_['breadcrumb'] = 'Spandan';
        $this->load->view('templates/header', $data_);
        $this->load->view('volunteers/index', $data_);
        $this->load->view('templates/footer');            
    }

    function volunteer(){
        if($this->wm->volunteer()){
            $page_ = 'spandan2019';
            $this->session->set_flashdata('vol_msg', 'Successfully submitted your volunteership.');
        } else {
            $page_ = 'spandan2019';
            $this->session->set_flashdata('vol_msg', 'Something goes wrong. Please try again!!');
        }

        redirect('spandan2019');
    }
    
    function winter(){
        redirect('https://docs.google.com/forms/d/e/1FAIpQLSemO4oKKOVhgXdt_AjjJOtCcxEJ2SHk1uabcjw54CoVDmfB3Q/viewform?gxids=7628');
    }
    
    function wintercarnival($page='x'){
        $data_['meta'] = $this->metainfo_for_web('spandan', 'spandan');
        
        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['title'] = 'Amrapali Winter Carnival 2021';
        $data_['titleMain'] = "Amrapali Winter Carnival 2021";
        $data_['alumni'] = $this->my_library->ouralumni();
        $data_['active'] = $page;
        
        if($page == 'grules' || $page == 'grules#'){
            $data_['inner_page'] = 'grules';
            $data_['breadcrumb'] = 'Amrapali Winter Carnival 2021 / General Rules';
        } else if($page == 'arules' || $page == 'arules#'){
            $data_['inner_page'] = 'arules';
            $data_['breadcrumb'] = 'Amrapali Winter Carnival 2021 / Activities&apos; Rules';
        } else if($page == 'contact' || $page == 'contact#'){
            $data_['inner_page'] = 'contact';
            $data_['breadcrumb'] = 'Amrapali Winter Carnival 2021 / Contact Detail';
        } else if($page == 'register' || $page == 'register#'){
            $data_['inner_page'] = 'register';
            $data_['breadcrumb'] = 'Amrapali Winter Carnival 2021 / Online Registration';
        } else {
            $data_['inner_page'] = 'overview';
            $data_['breadcrumb'] = 'Amrapali Winter Carnival 2021';
        }
        
        $this->load->view('templates/header', $data_);
        $this->load->view('events/wintercarnival', $data_);
        $this->load->view('templates/footer1');
    }
    
    function telegram(){
        redirect('https://t.me/agihld');
    }
    
    function nsd21(){
        redirect('https://docs.google.com/forms/d/e/1FAIpQLSdyK-65s6KQYPLqlMz0X46daovz7TLfRHeGETloVav7tn8rbQ/viewform');
    }
    
    function sdp($page='x'){
        //redirect('https://docs.google.com/forms/d/e/1FAIpQLSeADl1ZWh0y6nMEbKsLhz4zPGc8kbIR44b5MMDDTg_XLccnwA/viewform?gxids=7628');
        $data_['meta'] = $this->metainfo_for_web('spandan', 'spandan');
        
        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['title'] = 'Amrapali Student Development Programme';
        $data_['titleMain'] = "Amrapali Student Development Programme";
        $data_['alumni'] = $this->my_library->ouralumni();
        $data_['active'] = $page;
        
        if($page == 'activities' || $page == 'activities#'){
            $data_['inner_page'] = 'activities';
            $data_['breadcrumb'] = 'Amrapali Student Development Programme / List of Activities';
        } else if($page == 'benefits' || $page == 'benefits#'){
            $data_['inner_page'] = 'benefits';
            $data_['breadcrumb'] = 'Amrapali Student Development Programme / Benefits';
        } else if($page == 'howtoregister' || $page == 'howtoregister#'){
            $data_['inner_page'] = 'howtoregister';
            $data_['breadcrumb'] = 'Amrapali Student Development Programme / How to Register';
        } else if($page == 'register' || $page == 'register#'){
            $data_['inner_page'] = 'register';
            $data_['breadcrumb'] = 'Amrapali Student Development Programme / Online Registration';
        } else {
            $data_['inner_page'] = 'activities';
            $data_['breadcrumb'] = 'Amrapali Student Development Programme';
        }
        
        $this->load->view('templates/header', $data_);
        $this->load->view('events/sdp', $data_);
        $this->load->view('templates/footer1');
    }
    
    function hdfc_online(){
        redirect('https://forms.eduqfix.com/aiasonlineform/add');
    }
    function sbi_online(){
        redirect('https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=644273');
    }
    function covidawareness(){
        redirect('https://docs.google.com/forms/d/e/1FAIpQLSeURLTuhE-Fw2ocQPBy198hPsa-bR13QvVWfysuT7miPgsRcg/viewform');
    }
}