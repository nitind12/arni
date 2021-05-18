<?php defined('BASEPATH') or exit('No direct script access allowed');

class Arni extends CI_Controller
{
    var $fields;
    /** columns names retrieved after parsing */
    var $separator  =   ';';
    /** separator used to explode each line */
    var $enclosure  =   '"';
    /** enclosure used to decorate each field */

    var $max_row_size   =   4096;
    /** maximum row size to be used for decoding */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Web_model', 'wm');
        $this->load->model('Arni_model', 'arni');
    }

    function index()
    {
        $data_['meta'] = $this->metainfo_for_web('home', 'home');
        $data_['menu_active'] = 1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['commondata_'] = $this->commondata();
        $data_['alumni'] = $this->ouralumni();
        $data_['activity_'] = $this->wm->get_activities();
        $data_['all_alumni'] = $this->my_alumni->fetch_all_alumni();
        $data_['all_notices'] = $this->wm->get_active_notifications();
        $data_['notice_today'] = $this->wm->get_3_days_feeded_notifications();
        $data_['notice_today'] = $this->wm->get_today_feeded_notifications();
        $this->load->view('templates/header', $data_);
        $this->load->view('index', $data_);
        $this->load->view('templates/footer');
    }


    function error()
    {
        redirect('');
    }
    function metainfo_for_web($menu = 'x', $page = 'x')
    {
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

    function about($page = 'x')
    {
        $data_['meta'] = $this->metainfo_for_web('about', $page);
        $data_['menu_active'] = 2;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['submenu'] = $this->my_menu->submenu('about');
        $data_['titleMain'] = "About Us";
        $data_['active'] = $page;

        if ($page == 'governance' || $page == 'governance#') {
            $data_['inner_page'] = 'governance';
            $data_['subpage'] = 'governance';
            $data_['breadcrumb'] = 'About us / Governance';
        } else if ($page == 'management' || $page == 'management#') {
            $data_['inner_page'] = 'management';
            $data_['subpage'] = 'management';
            $data_['breadcrumb'] = 'About us / Management Talk';
        } else if ($page == 'committee' || $page == 'committee#') {
            $data_['inner_page'] = 'committee';
            $data_['subpage'] = 'committee';
            $data_['breadcrumb'] = 'About us / University Committee';
        } else {
            $data_['inner_page'] = 'aboutus';
            $data_['subpage'] = 'aboutus';
            $data_['breadcrumb'] = 'About us / Why Arni?';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('aboutus/index', $data_);
        $this->load->view('templates/footer');
    }

    function admissions($page = 'x'){
        $data_['meta'] = $this->metainfo_for_web('admissions', $page);
        $data_['menu_active'] = 4;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['submenu'] = $this->my_menu->submenu('admissions');
        $data_['titleMain'] = "Admissions";
        $data_['active'] = 'admissions';
        $data_['page'] = $page;
        $data_['subpage'] = $page; 

        if ($page == 'process' || $page == 'process#') {
            $str = "Admission Process";
            $data_['inner_page'] = $page;
            $data_['title'] = $str;
            $data_['breadcrumb'] = 'Admissions Process';
            $data_['program_in_numbers'] = $this->arni->number_of_courses();
        } else if($page == 'form' || $page == 'form#'){
            $str = "Admission Form";
            $data_['inner_page'] = $page;
            $data_['title'] = $str;
            $data_['breadcrumb'] = 'Admission Form';
        } else if($page == 'refund' || $page == 'refund#'){
            $str = "Refund Policy";
            $data_['inner_page'] = $page;
            $data_['title'] = $str;
            $data_['breadcrumb'] = 'Refund Policy';
        } else if($page == 'documents' || $page == 'documents#'){
            $str = "Admission: Documents Required";
            $data_['inner_page'] = $page;
            $data_['title'] = $str;
            $data_['breadcrumb'] = $str;
        } else if($page == 'brochure' || $page == 'brochure#'){
            $str = "Admission: Brochure";
            $data_['inner_page'] = $page;
            $data_['title'] = $str;
            $data_['breadcrumb'] = $str;
        } else if($page == 'scholarship' || $page == 'scholarship#'){
            $str = "Scholarship";
            $data_['inner_page'] = $page;
            $data_['title'] = $str;
            $data_['breadcrumb'] = $str;
        } else {
            $data_['page'] = 'process';
            $str = "Admission Process";
            $data_['inner_page'] = $page;
            $data_['title'] = $str;
            $data_['breadcrumb'] = 'Admissions / Process';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('admissions/index', $data_);
        $this->load->view('templates/footer');
    }
    function academics($page = 'x', $submenu = 'about')
    {
        $data_['menu_active'] = 3;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['submenu'] = $this->my_menu->submenu($page);
        $data_['titleMain'] = "About Us";
        $data_['active'] = 'academics';
        $data_['page'] = $page;
        $data_['subpage'] = $submenu;

        if ($page == 'art_and_humanities' || $page == 'art_and_humanities#') {
            $data_['meta'] = $this->metainfo_for_web('art_and_humanities', $page);
            $data_['departments'] = $this->arni->school_wise_departments(1);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(1);
            $clg = "School of Art and Humanities";
            $data_['inner_page'] = $page;
            $data_['title'] = 'School of Art and Humanities';
            $data_['breadcrumb'] = 'Academics / School of Art and Humanities';
        } else if ($page == 'commerce_and_business_management' || $page == 'commerce_and_business_management#') {
            $data_['meta'] = $this->metainfo_for_web('commerce_and_business_management', $page);
            $data_['departments'] = $this->arni->school_wise_departments(2);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(2);
            $clg = "School of Commerce and Business Management";
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'computer_application' || $page == 'computer_application#') {
            $data_['meta'] = $this->metainfo_for_web('computer_application', $page);
            $data_['departments'] = $this->arni->school_wise_departments(3);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(3);
            $clg = "School of Computer Application";
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'life_and_allied_science' || $page == 'life_and_allied_science#') {
            $data_['meta'] = $this->metainfo_for_web('life_and_allied_science', $page);
            $data_['departments'] = $this->arni->school_wise_departments(4);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(4);
            $clg = "School of Life and Allied Science";
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'pharmacy' || $page == 'pharmacy#') {
            $data_['meta'] = $this->metainfo_for_web('pharmacy', $page);
            $data_['departments'] = $this->arni->school_wise_departments(5);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(5);
            $clg = "School of Pharmacy";
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'physical_science' || $page == 'physical_science#') {
            $data_['meta'] = $this->metainfo_for_web('physical_science', $page);
            $data_['departments'] = $this->arni->school_wise_departments(6);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(6);
            $clg = 'School of Physical Science';
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'skill_development_and_vocational_studies' || $page == 'skill_development_and_vocational_studies#') {
            $data_['meta'] = $this->metainfo_for_web('skill_development_and_vocational_studies', $page);
            $data_['departments'] = $this->arni->school_wise_departments(7);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(7);
            $clg = 'School of Skill Development and Vocational Studies';
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'technology' || $page == 'technology#') {
            $data_['meta'] = $this->metainfo_for_web('technology', $page);
            $data_['departments'] = $this->arni->school_wise_departments(8);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(8);
            $clg = "School of Technology";
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'tourism_and_hospitality_management' || $page == 'tourism_and_hospitality_management#') {
            $data_['meta'] = $this->metainfo_for_web('tourism_and_hospitality_management', $page);
            $data_['departments'] = $this->arni->school_wise_departments(9);
            $data_['school_courses'] = $this->arni->school_wise_course_offered(9);
            $clg = "School of Tourism and Hospitality Management";
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else if ($page == 'faculty' || $page == 'faculty#') {
            $data_['meta'] = $this->metainfo_for_web('faculty', $page);
            $data_['facultyData'] = $this->arni->faculty_list();
            $clg = 'Our Faculty';
            $data_['inner_page'] = $page;
            $data_['title'] = $clg;
            $data_['breadcrumb'] = 'Academics / ' . $clg;
        } else {
            redirect('academics/technology');
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('academics/index', $data_);
        $this->load->view('templates/footer');
    }

    // Common Methods
    function commondata()
    {
        $data_['activeblogs'] = $this->wm->get_active_blogs();
        $data_['rnews_'] = $this->wm->get_most_recent_news();
        $data_['upcoming'] = $this->wm->get_most_recent_upcoming();
        $data_['announcements'] = $this->wm->get_most_recent_announcements();
        $data_['alumniProfile'] = $this->wm->get_all_alumniProfile_distinct();

        return $data_;
    }

    function ouralumni($clg = '')
    { // Need this at every page with news headings
        if ($clg != '') {
            $data_['alumniProfile'] = $this->wm->get_all_alumniProfile($clg);
        } else {
            $data_['alumniProfile'] = $this->wm->get_all_alumniProfile_distinct_general();
        }
        $data_['rnews_'] = $this->wm->get_most_recent_news();
        return $data_;
    }
    // End of Common Methods

    function contact()
    {
        $data_['meta'] = $this->metainfo_for_web('home', 'home');
        $data_['menu_active'] = 9;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['titleMain'] = "Contact Us";
        $data_['breadcrumb'] = 'Contact us';

        $this->load->view('templates/header', $data_);
        $this->load->view('contact/index', $data_);
        $this->load->view('templates/footer');
    }

    function gallery($page = 'x') 
    {
        $data_['meta'] = $this->metainfo_for_web('gallery', $page);
        $data_['menu_active'] = 6;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['submenu'] = $this->my_menu->submenu('gallery');
        $data_['titleMain'] = "Gallery";
        $data_['active'] = $page;
        $data_['gallery_category'] = $this->wm->get_all_gallery_category();   
            
        if ($page == 'expertviews' || $page == 'expertviews#') {
            $data_['inner_page'] = 'expertviews';
            $data_['subpage'] = 'expertviews';
            $data_['breadcrumb'] = 'Gallery / Expert Views';
        } else if ($page == 'videos' || $page == 'videos#') {
            $data_['inner_page'] = 'videos';
            $data_['subpage'] = 'videos';
            $data_['breadcrumb'] = 'Gallery / Videos';
        } else if ($page == 'activities' || $page == 'activities#') {
            $data_['inner_page'] = 'activities';
            $data_['subpage'] = 'activities';
            $data_['breadcrumb'] = 'Gallery / Activities';
        } else {
            $data_['inner_page'] = 'photos';
            $data_['subpage'] = 'photos';
            $data_['breadcrumb'] = 'Gallery / Photo Gallery';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('galleries/index', $data_);
        $this->load->view('templates/footer');
    }

    function imagePicsInner($id__) {
        $data_['meta'] = $this->metainfo_for_web('gallery');
        $data_['menu_active'] = 6;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['submenu'] = $this->my_menu->submenu('gallery');
        $data_['titleMain'] = "Gallery";
        $data_['inner_page'] = 'photos';
        $data_['subpage'] = 'photos';
        
       

        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
         
        $data_['gallery_category'] = $this->wm->get_gallery_categorybyID($id__);
        foreach ($data_['gallery_category'] as $grp_item) {            
            $data_['title'] = $grp_item->CATEGORY;
            $data_['breadcrumb'] = 'Gallery / Photo Gallery / ' . $data_['title'];
        }

        
        $data_['gallery_'] = $this->wm->get_gallery($id__);

        $this->load->view('templates/header', $data_);
        $this->load->view('galleries/innerpages/photos_inner', $data_);
        $this->load->view('templates/footer');
    }

}
