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
    function metainfo_for_web($menu='x', $page='x'){
        $metadata__ = $this->my_library->heading_for_page_($menu, $page);
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

    function academics($page = 'x'){
        $data_['meta'] = $this->metainfo_for_web('academics', $page);
        $data_['menu_active'] =2;
        $data_['menu_all'] = $this->my_menu->site_menu();        
        $data_['submenu'] = $this->my_menu->submenu('about');
        $data_['titleMain'] = "About Us";
        $data_['active'] = 'academics';
        $data_['page'] = $page;
        
        if($page == 'art_and_humanities' || $page == 'art_and_humanities#'){
            $clg = "School of Art and Humanities";
            $data_['inner_page'] = 'art_and_humanities';
            $data_['title'] = 'School of Art and Humanities';
            $data_['breadcrumb'] = 'Academics / School of Art and Humanities';
        } else if($page == 'technology' || $page == 'technology#'){
            $clg = "School of Technology";
            $data_['inner_page'] = 'technology';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if($page == 'commerce_and_business_management' || $page == 'commerce_and_business_management#'){
            $clg = "School of Commerce and Business Management";
            $data_['inner_page'] = 'commerce_and_business_management';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / '. $clg;
        } else if($page == 'pharmacy' || $page == 'pharmacy#'){
            $clg = "School of Pharmacy";
            $data_['inner_page'] = 'pharmacy';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if($page == 'tourism_and_hospitality_management' || $page == 'tourism_and_hospitality_management#'){
            $clg = "School of Tourism and Hospitality Management";
            $data_['inner_page'] = 'tourism_and_hospitality_management';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if($page == 'computer_application' || $page == 'computer_application#'){
            $clg = "School of Computer Application";
            $data_['inner_page'] = 'computer_application';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if($page == 'life_and_allied_science' || $page == 'life_and_allied_science#'){
            $clg = "School of Life and Allied Science";
            $data_['inner_page'] = 'life_and_allied_science';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if($page == 'physical_science' || $page == 'physical_science#'){
            $clg = 'School of Physical Science';
            $data_['inner_page'] = 'physical_science';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if($page == 'skill_development_and_vocational_studies' || $page == 'skill_development_and_vocational_studies#'){
            $clg = 'School of Skill Development and Vocational Studies';
            $data_['inner_page'] = 'skill_development_and_vocational_studies';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if($page == 'mentor' || $page == 'mentor#'){
            $clg = 'Mentor';
            $data_['inner_page'] = 'mentor';
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else {
            redirect('academics/technology');
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('academics/fdp', $data_);
        $this->load->view('templates/footer');
    }

// Common Methods
    function commondata(){
        $data_['activeblogs'] = $this->wm->get_active_blogs();
        $data_['rnews_'] = $this->wm->get_most_recent_news();
        $data_['upcoming'] = $this->wm->get_most_recent_upcoming();
        $data_['announcements'] = $this->wm->get_most_recent_announcements(); 
        $data_['alumniProfile']= $this->wm->get_all_alumniProfile_distinct();

        return $data_;
    }

    function ouralumni($clg = ''){ // Need this at every page with news headings
        if($clg != ''){
            $data_['alumniProfile']= $this->wm->get_all_alumniProfile($clg);
        } else {
            $data_['alumniProfile']= $this->wm->get_all_alumniProfile_distinct_general();
        }
        $data_['rnews_'] = $this->wm->get_most_recent_news();
        return $data_;
    }
// End of Common Methods
}