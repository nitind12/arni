<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Arni extends CI_Controller {
        var $fields;            /** columns names retrieved after parsing */ 
    var $separator  =   ';';    /** separator used to explode each line */
    var $enclosure  =   '"';    /** enclosure used to decorate each field */

    var $max_row_size   =   4096;    /** maximum row size to be used for decoding */
    function __construct(){
        parent::__construct();
        $this->load->model('Web_model', 'wm');
    }
    function index() {    
        $data_['meta'] = $this->metainfo_for_web('home', 'home');
        
        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['commondata_'] = $this->commondata();
        $data_['alumni'] = $this->ouralumni();
        $data_['activity_'] = $this->wm->get_activities();
        $data_['all_alumni'] = $this->my_alumni->fetch_all_alumni();
        $data_['all_notices'] = $this->wm->get_active_notifications();
        //$data_['notice_today'] = $this->wm->get_3_days_feeded_notifications();
        $data_['notice_today'] = $this->wm->get_today_feeded_notifications();
        $this->load->view('templates/header', $data_);
        $this->load->view('index', $data_);
        $this->load->view('templates/footer');
    }


    function error(){
        redirect('');
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

    function about($page='x'){
        $data_['meta'] = $this->metainfo_for_web('about', $page);
        $data_['menu_active'] =2;
        $data_['menu_all'] = $this->my_menu->site_menu();        
        $data_['submenu'] = $this->my_menu->submenu('about');
        $data_['titleMain'] = "About Us";
        $data_['active'] = $page;

        if($page == 'governance' || $page == 'governance#'){
            $data_['inner_page'] = 'governance';
            $data_['breadcrumb'] = 'About us / Governance';
        } else if($page == 'management' || $page == 'management#'){
            $data_['inner_page'] = 'management';
            $data_['breadcrumb'] = 'About us / Management Talk';
        } else if($page == 'committee' || $page == 'committee#'){
            $data_['inner_page'] = 'committee';
            $data_['breadcrumb'] = 'About us / University Committee';
        } else {
            $data_['inner_page'] = 'aboutus';
            $data_['breadcrumb'] = 'About us / Why Arni?';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('aboutus/index', $data_);
        $this->load->view('templates/footer');
    }
// ---- End of About Us Menu 

}