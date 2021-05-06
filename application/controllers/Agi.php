<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agi extends CI_Controller {
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
    
// About Us Menu Methods
    function emi(){
        $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions');
        $data_['menu_active'] =2;
        $data_['menu_all'] = $this->my_menu->site_menu();        
        $data_['alumni'] = $this->ouralumni();
        $data_['titleMain'] = "Interest Free EMI";
        $data_['active'] = 'EMI';

        $this->load->view('templates/header', $data_);
        $this->load->view('emi/index', $data_);
        $this->load->view('templates/footer');
    }

    function about($page='x'){
        $data_['meta'] = $this->metainfo_for_web('about', $page);
        $data_['menu_active'] =2;
        $data_['menu_all'] = $this->my_menu->site_menu();        
        
        $data_['titleMain'] = "About Us";
        $data_['active'] = $page;

        if($page == 'vmv' || $page == 'vmv#'){
            $data_['inner_page'] = 'vmv';
            $data_['breadcrumb'] = 'About us / Vission, Mission & Values';
        } else if($page == 'managementboard' || $page == 'managementboard#'){
            $data_['inner_page'] = 'managementboard';
            $data_['breadcrumb'] = 'About us / Management Board';
        } else if($page == 'ceomessage' || $page == 'ceomessage#'){
            $data_['inner_page'] = 'ceomessage';
            $data_['breadcrumb'] = 'About us / CEO Message';
        } else if($page == 'futurevision' || $page == 'futurevision#'){
            $data_['inner_page'] = 'futurevision';
            $data_['breadcrumb'] = 'About us / Vission 2025';
        } else {
            $data_['inner_page'] = 'aboutus';
            $data_['breadcrumb'] = 'About us';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('aboutus/index', $data_);
        $this->load->view('templates/footer');
    }
// ---- End of About Us Menu 

// Academics Menu Methods
    // Faculty Sub-menu

    function faculty($clg='x', $page='x'){
        // If $clg is not having any college in 
        // parameters then move to main page
        if($clg=='x') redirect('agi');
        // ----------------------------------------
        $data_['menu_active'] =3;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni('fts');

        $data_['record'] = $this->my_library->fetchCollege($clg);
        $data_['crs']= $this->my_courses->fetch_all_courses();
        $data_['dwn_'] = $this->my_downloads->fetchDownloads();
        $data_['publications_'] = $this->my_publications->fhm_publications();
        
        $data_['meta'] = $this->metainfo_for_web($clg, $page);
        if($clg == 'fhm'){
            $data_['rnews_'] = $this->wm->get_most_recent_news_dept('diraihm');
            $data_['alumni_record'] = $this->my_alumni->fetch_fhm_alumni();
            $data_['brochure_link'] = 'http://e-brochures.amrapali.ac.in/fhm/';
        } else if($clg == 'ftca'){
            $data_['rnews_'] = $this->wm->get_most_recent_news_dept('dirmca');
            $data_['alumni_record'] = $this->my_alumni->fetch_ftca_alumni();
            $data_['brochure_link'] = 'http://e-brochures.amrapali.ac.in/ftca/';
        } else if($clg == 'fcbm'){
            $data_['rnews_'] = $this->wm->get_most_recent_news_dept('dirmba');
            $data_['alumni_record'] = $this->my_alumni->fetch_fcbm_alumni();
            $data_['brochure_link'] = 'http://e-brochures.amrapali.ac.in/fcbm/';
        } else if($clg == 'fps'){
            $data_['rnews_'] = $this->wm->get_most_recent_news_dept('principalaips');
            $data_['alumni_record'] = $this->my_alumni->fetch_fps_student();
            $data_['brochure_link'] = 'http://e-brochures.amrapali.ac.in/fps/';
        } else if($clg == 'fe'){
            $data_['rnews_'] = $this->wm->get_most_recent_news_dept('dirfe');
            $data_['alumni_record'] = $this->my_alumni->fetch_fe_alumni();
            $data_['brochure_link'] = 'http://e-brochures.amrapali.ac.in/fps/';
        } else {
            redirect('agi');
        }

        $data_['active'] = $page;
        
        if($page == 'about' || $page == 'about#'){
            $data_['inner_page'] = 'about';
            $data_['breadcrumb'] = strtoupper($clg) . ' / About';
        } else if($page == 'courses' || $page == 'courses#'){
            $data_['inner_page'] = 'course';
            $data_['breadcrumb'] = strtoupper($clg) . ' / Courses';
        } else if($page == 'infra' || $page == 'infra#'){
            $data_['inner_page'] = 'infra';
            $data_['breadcrumb'] = strtoupper($clg) . ' / Infrastructure';
        } else if($page == 'whyus' || $page == 'whyus#'){
            $data_['inner_page'] = 'whyus';
            $data_['breadcrumb'] = strtoupper($clg) . ' / Why us';
        } else if($page == 'alumni' || $page == 'alumni#'){
            $data_['inner_page'] = 'alumni';
            $data_['breadcrumb'] = strtoupper($clg) . ' / Alumni';
        } else if($page == 'student' || $page == 'student#'){
            $data_['inner_page'] = 'student';
            $data_['breadcrumb'] = strtoupper($clg) . ' / Student';
        } else if($page == 'events' || $page == 'events#'){
            $data_['inner_page'] = 'events';
            $data_['breadcrumb'] = strtoupper($clg) . ' / Events';
        } else if($page == 'news' || $page == 'news#'){
            //$data_['clg_news'] = $this->wm->getActiveNews($clg);
            $data_['inner_page'] = 'news';
            $data_['breadcrumb'] = strtoupper($clg) . ' / News';
        } else if($page == 'downloads' || $page == 'downloads#'){
            $data_['inner_page'] = 'downloads';
            $data_['breadcrumb'] = strtoupper($clg) . ' / Downloads';
        } else {
            redirect('agi');
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('academics/fac/index', $data_);
        $this->load->view('templates/footer');
    }
    function mentors($page='x'){  
        $data_['meta'] = $this->metainfo_for_web('mentors', 'mentors');
        $data_['titleMain'] = 'Mentors';


        $data_['menu_active'] =3;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['ftca'] = $this->wm->fetch_faculty('ftca');
        $data_['fhm'] = $this->wm->fetch_faculty('fhm');
        $data_['fcbm'] = $this->wm->fetch_faculty('fcbm');
        $data_['fps'] = $this->wm->fetch_faculty('fps');


        $data_['active'] = $page;
        if($page == 'overview' || $page == 'overview#'){
            $data_['inner_page'] = 'overview';
            $data_['breadcrumb'] = 'Mentors';
        } else if($page == 'capital' || $page == 'capital#'){
            $data_['inner_page'] = 'capital';
            $data_['breadcrumb'] = 'Mentors / Our Intellectual Capital';
        } else {
            $data_['inner_page'] = 'overview';
            $data_['breadcrumb'] = 'Mentors';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('mentor/index', $data_);
        $this->load->view('templates/footer'); 
    }
    // ----- End of Faculty sub-menu

    // Facilties sub-menu
    function facilities($page='x'){  
        $data_['meta'] = $this->metainfo_for_web($page, 'mentor'); 

        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();        
        $data_['alumni'] = $this->ouralumni();

        $data_['titleMain'] = 'Facilities';
        $data_['active'] = $page;

        if($page == 'about' || $page == 'about#'){
            $data_['inner_page'] = 'about';
            $data_['breadcrumb'] = 'About';
        } else if($page == 'campus' || $page == 'campus#'){
            $data_['inner_page'] = 'campus';
            $data_['breadcrumb'] = 'Campus';
        } else if($page == 'other' || $page == 'other#'){
            $data_['inner_page'] = 'other';
            $data_['breadcrumb'] = 'Other';
        } else if($page == 'clubs' || $page == 'clubs#'){
            $data_['inner_page'] = 'clubs';
            $data_['breadcrumb'] = 'Clubs';
        } else {
            redirect('agi');
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('facilities/index', $data_);
        $this->load->view('templates/footer');
    }
    function infrastructure(){  
        $data_['meta'] = $this->metainfo_for_web('Library', 'library');       
        $data_['menu_active'] =3;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Infrastructure";
        $data_['breadcrumb'] = 'Infrastructure';

        $this->load->view('templates/header', $data_);
        $this->load->view('academics/facilities/infra', $data_);
        $this->load->view('templates/footer');            
    }
    function library(){
        $data_['meta'] = $this->metainfo_for_web('Library', 'library');    

        $data_['menu_active'] =3;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Library";
        $data_['breadcrumb'] = 'Library';

        $this->load->view('templates/header', $data_);
        $this->load->view('academics/facilities/lib', $data_);
        $this->load->view('templates/footer');
    }
    function sm(){
        $data_['meta'] = $this->metainfo_for_web('Library', 'Library');    

        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Our Social Presence";
        $data_['breadcrumb'] = 'Our Social Presence';
        
        
        $this->load->view('templates/header', $data_);
        $this->load->view('admission/sm', $data_);
        $this->load->view('templates/footer');
    }
    // end of Facilties sub-menu
    // fdp sub-menu
    function fdp1(){      
        $data_['meta'] = $this->metainfo_for_web('fdp', 'fdp'); 
        $data_['menu_active'] =3;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Faculty Development Programme";
        $data_['breadcrumb'] = 'Faculty Development Programme';

        $this->load->view('templates/header', $data_);
        $this->load->view('academics/fdp', $data_);
        $this->load->view('templates/footer');            
    }
    function fdp(){
        redirect('https://forms.gle/v64evwUY7KkpMTP36');
    }
    //End of fdp sub-menu
// ---- End of Academics Menu 

    // Admission Menu
    function admissions($page='x'){
        $data_['menu_active'] =4;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni('fts');
        $data_['meta'] = $this->metainfo_for_web('admissions', $page); 

        $data_['active'] = $page;
        $data_['titleMain'] = "Admissions";

        $data_['crs']= $this->my_courses->fetch_all_courses();
        $data_['scholarships__']= $this->my_scholarships->fetch_all_scholarships();
        $data_['bus_routes'] = $this->wm->getBusRouteDetail();
        $data_['courses'] = $this->wm->get_courses();
        $data_['colleges'] = $this->wm->vol_getCollege();

        if($page == 'whyus' || $page == 'whyus#'){
            $data_['inner_page'] = 'whyus';
            $data_['breadcrumb'] = 'Admissions / Why us';
            $data_['course'] = $this->wm->get_courses();
        } else if($page == 'sm' || $page == 'sm#'){
            $data_['inner_page'] = 'sm';
            $data_['breadcrumb'] = 'Admissions / Our Social Presence';
        } else if($page == 'procedure' || $page == 'procedure#'){
            $data_['inner_page'] = 'procedure';
            $data_['breadcrumb'] = 'Admissions / Procedure';
        } else if($page == 'eligibility-fee' || $page == 'eligibility-fee#'){
            $data_['inner_page'] = 'eligibility_fee';
            $data_['breadcrumb'] = 'Admissions / Eligibility & Fee';
        } else if($page == 'eligibility_fee' || $page == 'eligibility_fee#'){
            redirect('admissions/eligibility-fee');
        } else if($page == 'scholarships' || $page == 'scholarships#'){
            $data_['inner_page'] = 'scholarships';
            $data_['breadcrumb'] = 'Admissions / Scholarships';
        } else if($page == 'payment-modes' || $page == 'payment-modes#'){
            $data_['inner_page'] = 'paymentmodes';
            $data_['breadcrumb'] = 'Admissions / Payment Modes';
        } else if($page == 'paymentmodes' || $page == 'paymentmodes#'){
            redirect('admissions/payment-modes');
        } else if($page == 'education-loan' || $page == 'education-loan#'){
            $data_['inner_page'] = 'educationloan';
            $data_['breadcrumb'] = 'Admissions / Educational Loan';
        } else if($page == 'educationloan' || $page == 'educationloan#'){
            redirect('admissions/education-loan');
        } else if($page == 'applynow' || $page == 'applynow#'){
            /* CAPTCHA
                $this->load->helper('captcha');
                $vals = array(
                    //'word'        => rand(10,100),
                    'img_path'      => './assets/captcha/',
                    'img_url'       => 'https://amrapali.ac.in/assets/captcha/',
                    'font_path'     => './assets/fonts/times.ttf',
                    'img_width'     => '180',
                    'img_height'    => 30,
                    'expiration'    => 7200,
                    'word_length'   => 5,
                    'font_size'     => 16,
                    'img_id'        => 'Imageid',
                    'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            
                    // White background and border, black text and red grid
                    'colors'        => array(
                    'background'    => array(255, 255, 255),
                    'border'        => array(255, 255, 255),
                    'text'          => array(0, 0, 0),
                    'grid'          => array(255, 255, 40)
                )
            );
            // -------
            
            $cap = create_captcha($vals);
            //print_r($cap);
            $data__ = array(
                    'captcha_time'  => $cap['time'],
                    'ip_address'    => $this->input->ip_address(),
                    'word'          => $cap['word']
            );
            $this->wm->submitcaptcha($data__);
            
            $data_['cap'] = $cap['image'];
            */
            //$data_['internetp'] = $data_['']
            $data_['inner_page'] = 'applynownew';
            $data_['breadcrumb'] = 'Admissions / Apply Now';
        } else if($page == 'ebrochure' || $page == 'ebrochure#'){
            $data_['inner_page'] = 'ebrochure';
            $data_['breadcrumb'] = 'Admissions / E-Brochure';
        } else if($page == 'cooking-competition' || $page == 'cooking-competition#') {
            $data_['inner_page'] = 'sharing';
            $data_['titleMain'] = 'Hunt For “The Online Budding Chef 2020"';
            $data_['breadcrumb'] = 'Admissions / Hunt For “The Online  Budding Chef 2020”';
        } else {
            $data_['inner_page'] = 'overview';
            $data_['breadcrumb'] = 'Admissions';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('admission/index', $data_);
        $this->load->view('templates/footer');
    }
    function registeronline($page='x'){ // New Online Regsitration Form (Small one)
        $data_['menu_active'] =4;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni('fts');
        $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions'); 

        $data_['active'] = $page;
        $data_['titleMain'] = "Online Registration";

        $data_['courses'] = $this->wm->get_courses();
        $data_['colleges'] = $this->wm->vol_getCollege();
        $data_['breadcrumb'] = 'Online Registration';
        if($page == 'registration'){
            $data_['inner_page'] = $page;
        } else {
            $data_['inner_page'] = $page;
        }
        $data_['crs']= $this->my_courses->fetch_all_courses();
        $data_['scholarships__']= $this->my_scholarships->fetch_all_scholarships();

        $this->load->view('templates/header', $data_);
        $this->load->view('admission/index', $data_);
        $this->load->view('templates/footer'); 
    }
    function checkcaptcha(){
        $text_ = $this->input->post('captcha');
        if(!$this->wm->check_captcha($text_)){
            $this->session->set_flashdata('msg_', "Error : Fill Captcha correctly.");
            
            $this->session->set_flashdata('name', $this->input->post('txtStudentName'));
            $this->session->set_flashdata('fname', $this->input->post('txtFathersName'));
            $this->session->set_flashdata('dob', $this->input->post('txtDOB'));
            $this->session->set_flashdata('course', $this->input->post('cmbCourse'));
            $this->session->set_flashdata('email', $this->input->post('txtEmail'));
            $this->session->set_flashdata('city', $this->input->post('txtCity'));
            $this->session->set_flashdata('distt', $this->input->post('txtDistrict'));
            $this->session->set_flashdata('contact', $this->input->post('correspondanceContact'));
            $bool_ = false;
        } else {
            $bool_ = $this->wm->inesertRegisterOnline();
            if($bool_ == false){
                $this->session->set_flashdata('msg_', "Error : Something goes wrong. Please try again!!");
                
                $this->session->set_flashdata('name', $this->input->post('txtStudentName'));
                $this->session->set_flashdata('fname', $this->input->post('txtFathersName'));
                $this->session->set_flashdata('dob', $this->input->post('txtDOB'));
                $this->session->set_flashdata('course', $this->input->post('cmbCourse'));
                $this->session->set_flashdata('email', $this->input->post('txtEmail'));
                $this->session->set_flashdata('city', $this->input->post('txtCity'));
                $this->session->set_flashdata('distt', $this->input->post('txtDistrict'));
                $this->session->set_flashdata('contact', $this->input->post('correspondanceContact'));
            } else {
                $this->session->set_flashdata('msg_', "Thank you for the registration. Please proceed for the Payment.");
                redirect('generate_ticket');
            }
        }
        redirect('registeronline/applynow');
    }
    function checkcaptcha_ajax(){
        $text_ = $this->input->post('captcha');
        echo json_encode($this->wm->check_captcha_ajax($text_));
    }
    function insertOnlineRegisterNew(){ // New Online Regsitration Form (Small one)
        if($this->wm->inesertRegisterOnline() == true){
            $this->session->set_flashdata('msg_', 'Thank you for the registration. Please proceed for the Payment.');
            redirect('generate_ticket');
        }
    }

    function generate_ticket() { // New Online Regsitration Form Ticket (Small one)
        $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions');    
        $data_['commondata_'] = $this->commondata();
        $data_['activity_'] = $this->wm->get_activities();
        $data_['all_alumni'] = $this->my_alumni->fetch_all_alumni();
        if ($this->session->userdata('user')) {            
           $data_['menu_active'] =4;
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['alumni'] = $this->ouralumni();
            $data_['title'] = "Online Registration - Ticket ";       
            $data_['ticket'] = $this->get_ticket();
            $ticket_no = $data_['ticket']->regID;
            $mob_ = $this->wm->getMobile($ticket_no);
            $email_ = $this->wm->getEmail($ticket_no);
            $this->session->unset_userdata('user');
            // Send SMS
                //$message = "Thank you for registering with AGI.\n You are requested to pay Rs. 2000 within next 5 days.\n You can pay online at \n https://www.amrapali.ac.in/sbi_online \n or \n https://www.amrapali.ac.in/hdfc_online \n or \n through RTGS/NEFT in the following account.\n Bank Name: Union Bank of India \n Account number: 411601010011172 \n Account Name: Amrapali Institute of Technology & Sciences \n IFSC code:UBIN0541168. \n \n Leave the registration no. field empty while paying online. \n \n Also email the payment detail at admission@amrapali.ac.in \n \n Best wihes \n Amrapali Group of Institutes, \n Haldwani";
                $message_email = "Thank you for registering with AGI.<br> You are requested to <b>pay Rs. 2000 within next 5 days</b>.<br> You can pay online at <br> <a href='https://www.amrapali.ac.in/sbi_online' target='_blank'>State Bank of India</a> <br> or <br> <a href='https://www.amrapali.ac.in/hdfc_online' target='_blank'>HDFC BANK Ltd.</a> <br> or <br> through RTGS/NEFT in the following account.<br> <u>Bank Name</u>: Union Bank of India <br> <u>Account number</u>: 411601010011172 <br> <u>Account Name</u>: Amrapali Institute of Technology & Sciences <br> <u>IFSC code</u>:UBIN0541168. <br> <br> Leave the registration no. field empty while paying online. <br><br> Also email the payment detail at <em>admission@amrapali.ac.in</em> <br><br> <b>Best wihes</b> <br> Amrapali Group of Institutes,<br> Haldwani";
                //$this->call_sms_api($message, $mob_);
                $this->call_email_api($message_email, $email_);
            // --------
            $this->load->view('templates/header', $data_);
            $this->load->view('admission/innerpages/ticket', $data_);
            $this->load->view('templates/footer');
        } else {
            $this->session->unset_userdata('user');
            redirect('');
        }
    }
    function get_ticket() {
        $this->load->model('web_model', 'wm');
        $ticket = $this->wm->getTicket();
        return $ticket;
    }

    function test() {       
            $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions');        
            $data_['menu_active'] =1;
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['commondata_'] = $this->commondata();
            $data_['alumni'] = $this->ouralumni();
            $data_['activity_'] = $this->wm->get_activities();
            $data_['all_alumni'] = $this->my_alumni->fetch_all_alumni();
            $this->load->view('templates/header', $data_);
            $this->load->view('admission/onlineRegistration/ticket');
            $this->load->view('templates/footer');
            /*
            $ticket_no = 'test123';
            $mob_ = '9927071710';
            // Send SMS
                $message = "Thank you for registering with AGI.\n You are requested to pay Rs. 2000 within next 5 days.\n You can pay online at \n https://www.amrapali.ac.in/sbi_online \n or \n https://www.amrapali.ac.in/hdfc_online \n or \n through RTGS/NEFT in the following account.\n Bank Name: Union Bank of India \n Account number: 411601010011172 \n Account Name: Amrapali Institute of Technology & Sciences \n IFSC code:UBIN0541168. \n \n Leave the registration no. field empty while paying online. \n \n Also email the payment detail at admission@amrapali.ac.in \n \n Best wihes \n Amrapali Group of Institutes, \n Haldwani";
                $this->call_sms_api($message, $mob_);
            // --------
            */
    }

    function x___x($mob_){
        $this->load->helper('string');
        $otp = random_string('numeric',4);
        $this->session->set_userdata('_x_', $otp);
        $message = "For Verification your Online Registration in Amrapali Group of Institutes. The OTP is - " . $otp; 
        $this->session->set_userdata('mob_',$mob_); // This session is also used for online Social Enquiry OTP
        $this->call_sms_api($message, $mob_);
        echo $otp;
    }
    function x___x__($otp){
        //echo $this->session->userdata('_x_');
        if($otp == $this->session->userdata('_x_')){
            $bool_ = 'true';
        } else {
            $bool_ = 'false';
        }
        echo $bool_;
    }

    function x___x_enq($mob_){
        $this->load->helper('string');
        $otp = random_string('numeric',4);
        $this->session->set_userdata('_x_', $otp);
        $message = "For your Contact Verification. The OTP is - " . $otp; 
        $this->session->set_userdata('mob_', $mob_); 
        $this->call_sms_api($message, $mob_); // This session is also used for online registration OTP
        echo $otp;
    }

    function RegistrationLogin() {
        $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions'); 
        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Login to see Registration";
        $data_['breadcrumb'] = 'Online Registration';
        $this->session->set_userdata('userReg', '');
        $this->session->set_userdata('userPass', '');

        $this->load->view('templates/header', $data_);
        $this->load->view('admission/onlineRegistration/regLogin', $data_);
        $this->load->view('templates/footer'); 
    }

    function LoginEnter() {
        $userName_ = $this->input->post('txtUname');
        $userPass_ =$this->input->post('txtPass');

        if($userName_ == 'prashant' && $userPass_ =='pr$#123'){
            $this->session->set_userdata('userReg', 'prashant');
            $this->session->set_userdata('userPass', 'pr$#123');
            $this->session->set_flashdata('_msg_', '');
             //redirect('Agi/totalRegistration');
             redirect('totalRegistration_new');
        }else{
            $this->session->set_userdata('userReg', '');
            $this->session->set_userdata('userPass', '');
            $this->session->set_flashdata('_msg_', 'UserName or Password is Incorrect !! Please login with correct credentials');
            redirect('RegistrationLogin');
        }        
    }

    function totalRegistration_new() {
        $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions'); 
        if ($this->session->userdata('userReg')=='prashant' && $this->session->userdata('userPass')=='pr$#123') { 
                $data_['titleMain'] = "Online Total Registrations";

                $data_['menu_active'] =4;
                $data_['menu_all'] = $this->my_menu->site_menu();
                $data_['alumni'] = $this->ouralumni();

                $data_['totalReg'] = $this->wm->get_total_registration();
                $data_['confirmReg'] =  $this->wm->get_confirmed_registration();
                $data_['breadcrumb'] = 'Total Registrations';

                //$this->session->set_userdata('userReg', '');
                //$this->session->set_userdata('userPass', '');

                $data_['title'] = "Total Online Registration";

                $this->load->view('templates/header', $data_);
                $this->load->view('admission/innerpages/totalRegistration', $data_);
                $this->load->view('templates/footer'); 
        }else{
            redirect('RegistrationLogin');
        } 
    }
    
    function logout_online_registration(){
        $this->session->set_userdata('userReg', '');
        $this->session->set_userdata('userPass', '');
        redirect('agi');
    }

    function totalRegistration() {
        $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions'); 
        if ($this->session->userdata('userReg')=='prashant' && $this->session->userdata('userPass')=='pr$#123') {                
                $data_['titleMain'] = "Online Total Registrations";

                $data_['menu_active'] =4;
                $data_['menu_all'] = $this->my_menu->site_menu();
                $data_['alumni'] = $this->ouralumni();

                $data_['totalReg'] = $this->wm->get_total_registration();
                $data_['confirmReg'] =  $this->wm->get_confirmed_registration();
                $data_['breadcrumb'] = 'Total Registrations';

                $this->session->set_userdata('userReg', '');
                $this->session->set_userdata('userPass', '');

                $data_['title'] = "Total Online Registration";

                $this->load->view('templates/header', $data_);
                $this->load->view('admission/onlineRegistration/totalRegistration', $data_);
                $this->load->view('templates/footer'); 
        }else{
            redirect('RegistrationLogin');
        } 
    }

    function confirm_registration($regID) {        
        $ticket = $this->wm->confirm_registration($regID);
        redirect('totalRegistration');
    }

    function getRegistrations($bool_){
        $this->wm->getRegistrations($bool_);
    }
    function getSocialEnquiries(){
        $this->wm->getSocialEnquiry();
    }

    function faq(){
        $data_['meta'] = $this->metainfo_for_web('faq', 'faq');   
    
        $data_['menu_active'] =4;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Frequently Asked Questions";
        $data_['breadcrumb'] = 'Frequently Asked Questions';

        $this->load->view('templates/header', $data_);
        $this->load->view('faq', $data_);
        $this->load->view('templates/footer');            
    }

    function Contact_social_Enquiry_email() {
        $this->load->helper('string');
        $ucode =  random_string('numeric',4);

        $data['writeHere']      = $writeHere    = $this->input->post('txtWriteHere');
        $data['enqName']        = $enqName      = $this->input->post('txtEnqName');
        $data['enqCity']        = $enqCity      = $this->input->post('txtEnqCity');
        $data['enqPhone']       = $enqPhone     = $this->input->post('txtPhone');
        $data['enqEmail']       = $enqEmail     = $this->input->post('txtEnqEmail');
        $data['fst_lst_name_']  = $fst_lst_name_= $this->input->post('txt_fstName') . ' ' . $this->input->post('txt_lstName');
        $data['course_']        = $course_      = $this->input->post('txtCourse');

        $phone_numbers = $this->wm->expert_mobile_numbers_from_course($course_);

        if($this->input->post('expertToTalk')){
            $d['phone_numbers'] = $phone_numbers;
            $d['course_'] = $course_;
            $d['enqPhone'] = $enqPhone;
            $d['enqEmail'] = $enqEmail;
            $d['enqName'] = $enqName;

            $talktoexpert = "YES";
        } else if(!$this->input->post('expertToTalk')) {
            $talktoexpert = "NO";
        }
        $ucodeNew = $this->wm->saveEnquiry($data, $talktoexpert, $ucode); // Saving Enquiry in database

        if($talktoexpert == 'YES'){
            $sms_sent = $this->Send_SMS_for_Social_Enquiry($d, $ucodeNew); // sending sms to experts for Communication with Enquirer
        }

        //-------------
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>Enquiry from [Why Amrapali]:</h2> <br /><span style='font-size: 13px; color: #121212'>";
        $msg_ = $msg_ . $writeHere . "<br /><br />";
        $msg_ = $msg_ . "------------------------ <br />";
        $msg_ = $msg_ . $enqName . "<br />";
        $msg_ = $msg_ . "From - " . $enqCity . "<br />";
        $msg_ = $msg_ . $enqPhone . "<br />";
        $msg_ = $msg_ . $enqEmail . "<br /><br>";
        if($talktoexpert == 'YES'){
            $msg_ = $msg_ . "<b>SMS is also sent to the expert</b><br /></span>";
        } else {
            $msg_ = $msg_ . "<b>General Enquiry</b><br /></span>";
        }

        $from_ = "enquiry@amrapali.ac.in";
        $name_ = $fst_lst_name_;

        $this->email->from($from_, $name_);
        $this->email->to('ao@amrapali.ac.in');
        $this->email->cc('coo@amrapali.ac.in');

        $this->email->subject('Enquiry from Why Amrapali Web Page for : ' . $course_);
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "Thanks for your query. We will get back soon...";
        } else {
            $ret_data = "X: Server Error !! Try Again...";
        }
        //-------------
        echo "<br><br><br>".$ret_data;
    }

    function Send_SMS_for_Social_Enquiry($data, $ucodeNew){ // Sending SMS(s) to Experts for Communication with Enquirer
            $mob = $data['phone_numbers'];
            $msg_ = "Enquiry \n".$data['enqName']."\n".$data['enqPhone'] . "\n" . $data['course_'] . "\n". "Enq No.- " . $ucodeNew;
            $this->call_sms_api($msg_, $mob);
    }
    // ----end of admission Menu

    function call_sms_api($msg_, $mob){
        $message = rawurlencode($msg_);
        $url = 'http://SMS.VRINFOSOFT.CO.IN/unified.php?usr=director.aits@amrapali.ac.in&pwd=9415892932&ph='.$mob.'&sndr=25774&text='.$message.'&type=json';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $curl_scraped_page = curl_exec($ch);
        curl_close($ch);
    }
    function call_email_api($message_, $email){
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>Online Registration [Amrapali Group of Institutes]:</h2> <br /><span style='font-size: 15px; color: #121212'>";
        $msg_ = $msg_ . $message_ . "<br /><br />";
        $msg_ = $msg_ . "------------------------ <br />";

        $from_ = "admission@amrapali.ac.in";
        $name_ = "Amrapali Group of Institutes";

        $this->email->from($from_, $name_);
        $this->email->to($email);
        //$this->email->cc('nitin.d12@amrapali.ac.in');

        $this->email->subject('Online Registration at Amrapali Group of Institutes: ');
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "Thanks for your query. We will get back soon...";
        } else {
            $ret_data = "X: Server Error !! Try Again...";
        }
        //-------------
        echo $ret_data;
    }
    // Training & Placement
    function placements($page='x'){
        $data_['meta'] = $this->metainfo_for_web('placements', $page); 
        $data_['menu_active'] =5;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni('fts');

        $data_['active'] = $page;
        $data_['titleMain'] = 'Central Training &amp; Placement Department (CTPD)';

        $data_['crs']= $this->my_courses->fetch_all_courses();
        $data_['scholarships__']= $this->my_scholarships->fetch_all_scholarships();

        if($page == 'employability-training-programme' || $page == 'employability-training-programme#'){
            $data_['inner_page'] = 'etp';
            $data_['breadcrumb'] = 'Placements / Employability Training Programme';
        } if($page == 'etp' || $page == 'etp#'){
            redirect('placements/employability-training-programme');
        } else if($page == 'industry-institute-interface' || $page == 'industry-institute-interface#'){
            $data_['inner_page'] = 'iii';
            $data_['breadcrumb'] = 'Placements / Industry Institute Interface';
        } else if($page == 'iii' || $page == 'iii#'){
            redirect('placements/industry-institute-interface');
        } else if($page == 'campus-placements' || $page == 'campus-placements#'){
            $data_['inner_page'] = 'campus_placements';
            $data_['breadcrumb'] = 'Placements / Campus Placements';
            $data_['placement_FCSA'] = $this->wm->fetch_placement_crs_wise('FCSA');
            $data_['placement_FCBM'] = $this->wm->fetch_placement_crs_wise('FCBM');
            $data_['placement_FTS'] = $this->wm->fetch_placement_crs_wise('FTS');
            $data_['placement_FTCA'] = $this->wm->fetch_placement_crs_wise('FTCA');
            $data_['placement_FHM'] = $this->wm->fetch_placement_crs_wise('FHM');

            $data_['pl_FHM'] = $this->wm->current_yr_palcement('FHM');
            $data_['pl_FCSA'] = $this->wm->current_yr_palcement('FCSA');
            $data_['pl_FTS'] = $this->wm->current_yr_palcement('FTS');
            $data_['pl_FTCA'] = $this->wm->current_yr_palcement('FTCA');
            $data_['pl_FCBM'] = $this->wm->current_yr_palcement('FCBM');

        } else if($page == 'campus_placements' || $page == 'campus_placements#'){
            redirect('placements/campus-placements');
        } else if($page == 'eligibility-criteria' || $page == 'eligibility-criteria#'){
            $data_['inner_page'] = 'eligibility';
            $data_['breadcrumb'] = 'Placements / Eligibility Criteria';
        } else if($page == 'eligibility' || $page == 'eligibility#'){
            redirect('placements/eligibility-criteria');
        } else if($page == 'regulations' || $page == 'regulations#'){
            $data_['inner_page'] = 'regulations';
            $data_['breadcrumb'] = 'Placements / Regulations';
        } else if($page == 'contact' || $page == 'contact#'){
            $data_['inner_page'] = 'contact';
            $data_['breadcrumb'] = 'Placements / Contact';
        } else {
            $data_['active'] = 'overview';
            $data_['inner_page'] = 'overview';
            $data_['breadcrumb'] = 'Placements';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('placements/index', $data_);
        $this->load->view('templates/footer');
    }
    // ----end of training & placement

    // Gallery

    function gallery($page='x'){
        $data_['meta'] = $this->metainfo_for_web('gallery', $page); 
        $data_['menu_active'] = 6;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['activity_'] = $this->wm->get_activities();

        $data_['titleMain'] = 'Gallery';
        $data_['active'] = $page;

        if($page == 'photos' || $page == 'photos#'){
            $data_['inner_page'] = 'photos';
            $data_['breadcrumb'] = 'Gallery / Album';
            $data_['gallery_category'] = $this->wm->get_all_gallery_category(); 
        } else if($page == 'videos' || $page == 'videos#'){
            $data_['inner_page'] = 'videos';
            $data_['breadcrumb'] = 'Gallery / Videos';
        } else if($page == 'activities' || $page == 'activities#'){
            $data_['inner_page'] = 'activities';
            $data_['breadcrumb'] = 'Gallery / Activities';
            $data_['activity_'] = $this->wm->get_activities();
        } else if($page == 'expert-views' || $page == 'expert-views#'){
            $data_['inner_page'] = 'expertviews';
            $data_['breadcrumb'] = 'Gallery / Expert views';
        } else if($page == 'expertviews' || $page == 'expertviews#'){
            redirect('gallery/expert-views');
        } else {
            $data_['inner_page'] = 'photos';
            $data_['breadcrumb'] = 'Gallery';
            $data_['gallery_category'] = $this->wm->get_all_gallery_category(); 
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('galleries/index', $data_);
        $this->load->view('templates/footer');
    }

    function photos_inner($id__){
        $data_['meta'] = $this->metainfo_for_web('gallery', 'gallery'); 
        $data_['titleMain'] = 'Gallery';

        $data_['menu_active'] = 6;        
        $data_['title1'] = "Image Gallery (Photos)";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();

        $data_['active'] = 'photos';
        $data_['inner_page'] = 'photos_inner';
        $data_['innerTitle'] = $this->wm->get_gallery_categoryName($id__);
        $data_['gallery_category'] = $this->wm->get_gallery_categorybyID($id__);
        $data_['breadcrumb'] = 'Gallery / Photos';

        foreach ($data_['gallery_category'] as $grp_item) {            
            $data_['title'] = $grp_item->CATEGORY;
        }
        $data_['gallery_'] = $this->wm->get_gallery($id__);

        $this->load->view('templates/header', $data_);
        $this->load->view('galleries/index', $data_);
        $this->load->view('templates/footer');
    }

    

    function expertviews(){
        $data_['meta'] = $this->metainfo_for_web('experts', 'experts'); 
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Expert Views";

        $data_['menu_active'] = 6;        
        $data_['title'] = "Expert Views";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['gallery_category'] = $this->wm->get_gallery_category();        
        $data_['breadcrumb'] = 'Expert Views';
        $this->load->view('templates/header', $data_);
        $this->load->view('gallery/expertView', $data_);
        $this->load->view('templates/footer');
    }

    function imagePics(){
       // redirect ('agi');
        $data_['meta'] = $this->metainfo_for_web('gallery', 'gallery'); 
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Gallery";

        $data_['menu_active'] = 6;        
        $data_['title'] = "Image Gallery (Photos)";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        //$data_['gallery_category'] = $this->wm->get_gallery_category();        
        $data_['gallery_category'] = $this->wm->get_all_gallery_category(); 
        $data_['breadcrumb'] = 'Gallery';
        $this->load->view('templates/header', $data_);
        $this->load->view('gallery/imagesPics', $data_);
        $this->load->view('templates/footer');
    }

    function imagePicsInner($id__) {
        redirect('gallery');
    }

    function googleGallery(){
        $data_['meta'] = $this->metainfo_for_web('gallery', 'gallery'); 
        $data_['titleMain'] = "Gallery";

        $data_['menu_active'] = 6;        
        $data_['title'] = "Amrapali in Google";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();            
        $data_['breadcrumb'] = 'Google Gallery';

        $this->load->view('templates/header', $data_);
        $this->load->view('gallery/imageGallery', $data_);
       $this->load->view('templates/footer');
    }

    function videos(){
        $data_['meta'] = $this->metainfo_for_web('video', 'video'); 
        $data_['titleMain'] = "Video Gallery";

        $data_['menu_active'] = 6;        
        $data_['title'] = "Explore Amrapali";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();            
        $data_['breadcrumb'] = 'Videos';
        $this->load->view('templates/header', $data_);
        $this->load->view('gallery/videoGallery', $data_);
       $this->load->view('templates/footer');
    }

    function youtubeGallery(){
        $data_['meta'] = $this->metainfo_for_web('video', 'video'); 
        $data_['titleMain'] = "Video Gallery";

        $data_['menu_active'] = 6;        
        $data_['title'] = "Video Gallery";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();              
        $data_['breadcrumb'] = 'Youtube Gallery';

        $this->load->view('templates/header', $data_);
        $this->load->view('galleries/youtubeGallery', $data_);
       $this->load->view('templates/footer');
    }
    
    // end of gallery

    // Alumni
    function alumni($page='x'){
        $data_['meta'] = $this->metainfo_for_web('alumni', $page); 

        $data_['menu_active'] =7;
        $data_['menu_all'] = $this->my_menu->site_menu();        
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = $page;

        $data_['titleMain'] = 'Alumni';
        $data_['active'] = $page;
        $data_['all_alumni'] = $this->my_alumni->fetch_all_alumni();
        
        if($page == 'connect-programme' || $page == 'connect-programme#'){
            $data_['inner_page'] = 'connectprogramme';
            $data_['breadcrumb'] = 'Alumni / Connect Programme';
        } else if($page == 'connectprogramme' || $page == 'connectprogramme#'){
            redirect('alumni/connect-programme');
        } else if($page == 'alumniRegistration' || $page == 'alumniRegistration#'){
            $data_['inner_page'] = 'alumniRegistration';
            $data_['breadcrumb'] = 'Alumni / Registration';
        } else if($page == 'distinguished-alumni' || $page == 'distinguished-alumni#'){
            $data_['inner_page'] = 'distinguishedalumni';
            $data_['fac_profile'] = $this->wm->get_all_alumniProfile_enabled();
            $data_['breadcrumb'] = 'Alumni / Our Distinguished Alumni';
        } else if($page == 'distinguishedalumni' || $page == 'distinguishedalumni#'){
            redirect('alumni/distinguished-alumni');
        } else if($page == 'alumnispeak' || $page == 'alumnispeak#'){
            $data_['inner_page'] = 'alumnispeak';
            $data_['breadcrumb'] = 'Alumni / Speak';
            $data_['fac_profile'] = $this->wm->get_all_alumniProfile_enabled();
        } else {
            $data_['inner_page'] = 'connectprogramme';
            $data_['breadcrumb'] = 'Alumni';
        }

        $this->load->view('templates/header', $data_);
        $this->load->view('alumni/index', $data_);
        $this->load->view('templates/footer');
    }

    function alumniRegistration(){
        $data_['meta'] = $this->metainfo_for_web('alumni', 'alumni');    
       
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Alumni Registration";

        $data_['menu_active'] = 7;        
        $data_['title'] = "Alumni Registration";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();          
        $data_['course'] = $this->wm->get_courses_for_alumni(); 
        $data_['breadcrumb'] = 'Alumni / Registration';
        $this->load->view('templates/header', $data_);
        $this->load->view('alumni/alumniProfile/fillDetail', $data_);
       $this->load->view('templates/footer');
    }

    function fillAlumniDetail() {       
        $confirm = $this->wm->fillAlumniDetail_();

        $this->session->set_flashdata('reg_msg_', $confirm['msg_']);
        redirect('alumniRegistration');
    }

    function getdistingusedAlumni() {
        redirect('alumni/distinguished-alumni');
    }

    function AlumniProfileLogin() {
        $data_['meta'] = $this->metainfo_for_web('alumni', 'alumni'); 
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Alumni Profile Login";

        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Login to Manage Alumni Profiles";
        $this->session->set_userdata('userReg', '');
        $this->session->set_userdata('userPass', '');
        $data_['breadcrumb'] = 'Alumni Profile Login';
        $this->load->view('templates/header', $data_);
        $this->load->view('alumni/alumniProfile/regLogin', $data_);
        $this->load->view('templates/footer'); 
    }

    function LoginAlumniEnter() {
        $data_['meta'] = $this->metainfo_for_web('alumni', 'alumni'); 
        $userName_ = $this->input->post('txtUname');
        $userPass_ =$this->input->post('txtPass');

        if($userName_ == 'rahul' && $userPass_ =='alumniuser'){
            $this->session->set_userdata('userReg', 'operator');
            $this->session->set_userdata('userPass', 'alumniuser');
            $this->session->set_flashdata('_msg_', '');
            //redirect('Agi/getAlumniProfile');
            redirect('Agi/getAlumniProfile_edit');
        }else{
            $this->session->set_userdata('userReg', '');
            $this->session->set_userdata('userPass', '');
            $this->session->set_flashdata('_msg_', 'UserName or Password is Incorrect !! Please login with correct credentials');
            redirect('AlumniProfileLogin');
        }        
    }

    function getAlumniProfile_edit() {
        $data_['meta'] = $this->metainfo_for_web('alumni', 'alumni'); 
        if ($this->session->userdata('userReg')=='operator' && $this->session->userdata('userPass')=='alumniuser')
        {           
            $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
            $data_['titleMain'] = "Alumni Profile Login";

            $data_['menu_active'] = 7;        
            $data_['title'] = "Alumni Profile Panel";
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['alumni'] = $this->ouralumni();         
            $data_['fac_profile'] = $this->wm->get_alumniProfile_new();     
            $data_['course'] = $this->wm->get_courses_for_alumni();    
            $data_['breadcrumb'] = 'Alumni Profile Management';
            $this->load->view('templates/header', $data_);
            $this->load->view('alumni/alumniProfile/editnew', $data_);
            $this->load->view('templates/footer');
        }else{
            redirect('AlumniProfileLogin');
        }
    }

    function update_alumni_profile($id_='x', $column_='x', $instance='x'){
        $bool_ = $this->wm->update_alumni_detail($id_, $column_, $instance);
        echo json_encode($bool_);
    }

    function update_alumni_profile_photo($id_='x', $column_='x', $instance='x'){
        $bool_ = $this->wm->update_alumni_photo($id_, $column_, $instance);
        echo json_encode($bool_);
    }

    function delete_alumni_data($id_='x'){
        $bool_ = $this->wm->delete_alumni_data($id_);
        echo json_encode($bool_);
    }

    function reverse_alumni_data($id_='x'){
        $bool_ = $this->wm->reverse_alumni_data($id_);
        echo json_encode($bool_);
    }
    function getAlumniProfile() {
        $data_['meta'] = $this->metainfo_for_web('alumni', 'alumni'); 
        if ($this->session->userdata('userReg')=='operator' && $this->session->userdata('userPass')=='alumniuser')
        {

            $data_['titleMain'] = "Alumni Profile";

            $data_['menu_active'] = 7;        
            $data_['title'] = "Alumni Profile Panel";
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['alumni'] = $this->ouralumni();         
            $data_['fac_profile'] = $this->wm->get_alumniProfile();         
            $data_['breadcrumb'] = 'Alumni Profile';
            $this->load->view('templates/header', $data_);
            $this->load->view('alumni/alumniProfile/getDetail', $data_);
            $this->load->view('templates/footer');
        }else{
            redirect('AlumniProfileLogin');
        }
    }

    function deleteAlumniProfile($id) {
        $this->load->model('web_model', 'wm');
        $this->wm->deleteAlumniProfile_($id);
        redirect('getAlumniProfile');
    }

    function enabledDisableAlumni($status, $id__) {
        $this->load->model('web_model', 'wm');
        $this->wm->enabledDisableAlumni_($status, $id__);
        redirect('getAlumniProfile');
    }

    function getAlumnibyID($id_) {
        $data_['meta'] = $this->metainfo_for_web('alumni', 'alumni'); 
        $data_['titleMain'] = "Alumni Profile";

        $data_['menu_active'] = 7;        
        $data_['title'] = "Alumni Profile Panel";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();         
        $data_['fac_profile'] = $this->wm->get_alumniProfile();   
        $data_['breadcrumb'] = 'Alumni Profile';
        $data_['facID'] = $this->wm->getAlumnibyID_($id_);
        $this->load->view('templates/header', $data_);
        $this->load->view('alumni/alumniProfile/getDetailID', $data_);
        $this->load->view('templates/footer');
    }

    function alumniSpeaks() {
        $data_['meta'] = $this->metainfo_for_web('alumni-speak', 'alumni-speak'); 
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Alumni Speak";

        $data_['menu_active'] = 7;        
        $data_['title'] = "Alumni Speaks";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();         
        $data_['fac_profile'] = $this->wm->get_all_alumniProfile_enabled();         
        $data_['breadcrumb'] = 'Alumni Speak';
        $this->load->view('templates/header', $data_);
        $this->load->view('alumni/alumniSpeak', $data_);
        $this->load->view('templates/footer');
    }
    function alumniVideos() {
        $data_['meta'] = $this->metainfo_for_web('alumni videos', 'alumni videos'); 
        $data_['titleMain'] = "Alumni Videos";

        $data_['menu_active'] = 7;        
        $data_['title'] = "Alumni Videos";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();         
        $data_['fac_profile'] = $this->wm->get_all_alumniProfile_enabled();         
        $data_['breadcrumb'] = 'Alumni Videos';
        $this->load->view('templates/header', $data_);
        $this->load->view('alumni/alumniVideo', $data_);
        $this->load->view('templates/footer');
    }
    // end of Alumni
    // contact
    function contactus(){
        $data_['meta'] = $this->metainfo_for_web('contactus', 'contactus');
        $data_['titleMain'] = "Contact Us";

        $data_['menu_active'] =8;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Contact Us";
        $data_['breadcrumb'] = 'Contact us';
        $this->load->view('templates/header', $data_);
        $this->load->view('contact/contact', $data_);
        $this->load->view('templates/footer');            
    }

    function Contact_Enquiry_email() {
        //-------------
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>Enquiry:</h2> <br /><span style='font-size: 13px; color: #121212'>";
        $msg_ = $msg_ . "<b><u>".$this->input->post('txtSubject') . "</u></b><br />";
        $msg_ = $msg_ . $this->input->post('txtWriteHere') . "<br /><br />";
        $msg_ = $msg_ . "------------------------ <br />";
        $msg_ = $msg_ . $this->input->post('txtEnqName') . "<br />";
        $msg_ = $msg_ . $this->input->post('txtEnqEmail') . "<br /></span>";

        $from_ = "enquiry@amrapali.ac.in";
        $name_ = $this->input->post('txt_fstName') . ' ' . $this->input->post('txt_lstName');

        $this->email->from($from_, $name_);
        $this->email->to('enquiry@amrapali.ac.in');
        $this->email->bcc('coo@amrapali.ac.in, shail70@gmail.com');
        //$this->email->bcc('nitin.d12@gmail.com');

        $this->email->subject('Enquiry from Website Contact Page: ' . $this->input->post('txtSubject'));
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "Thanks for your query. We will get back soon...";
        } else {
            $ret_data = "X: Server Error !! Try Again...";
        }
        //-------------
        echo $ret_data;
    }
    // -----end of contact
    
    //page links (not in main menu)
        function amrapaliRecruiters(){
            $data_['meta'] = $this->metainfo_for_web('recruiters', 'recruiters'); 
            $data_['titleMain'] = "Our Recruiters";

            $data_['menu_active'] =8;
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['alumni'] = $this->ouralumni();
            $data_['title'] = "Our Recruiters";
            $data_['breadcrumb'] = 'Our Recruiters';
            $this->load->view('templates/header', $data_);
            $this->load->view('pageLinks/recruiters', $data_);
            $this->load->view('templates/footer');  
        }

        function RecruitersTestimonials(){
            $data_['meta'] = $this->metainfo_for_web('recruiters', 'recruiters'); 
            $data_['titleMain'] = "Our Recruiters Testimonials";

            $data_['menu_active'] =8;
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['alumni'] = $this->ouralumni();
            $data_['title'] = "Recruiters Testimonials";
            $data_['breadcrumb'] = 'Recruiters Testimonials';
            $this->load->view('templates/header', $data_);
            $this->load->view('pageLinks/recruitersSpeak', $data_);
            $this->load->view('templates/footer');  
        }

        function antiRagging(){
            $data_['meta'] = $this->metainfo_for_web('anti-ragging', 'anti-ragging'); 
            $data_['titleMain'] = "Anti-Ragging";

            $data_['menu_active'] =8;
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['alumni'] = $this->ouralumni();
            $data_['title'] = "Anti-Ragging";
            $data_['breadcrumb'] = 'Anti-Ragging';
            $this->load->view('templates/header', $data_);
            $this->load->view('pageLinks/antiragging', $data_);
            $this->load->view('templates/footer');  
        }

        function approvals(){
            $data_['meta'] = $this->metainfo_for_web('approvals', 'approvals'); 
            $data_['titleMain'] = "Approvals";

            $data_['menu_active'] =8;
            $data_['menu_all'] = $this->my_menu->site_menu();
            $data_['alumni'] = $this->ouralumni();
            $data_['title'] = "Mendatory Disclosure, Approvals & Affiliations";
            $data_['breadcrumb'] = 'Mendatory Disclosure, Approvals & Affiliations';
            $this->load->view('templates/header', $data_);
            $this->load->view('pageLinks/approvals', $data_);
            $this->load->view('templates/footer');  
        }
    // ------end of page links

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

    // Footer Menu
    function students_Feedback(){
        $data_['meta'] = $this->metainfo_for_web('student-feedback', 'student-feedback'); 
        $data_['titleMain'] = "Student Feedback";

        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Student Feedback";
        $data_['faits'] = $this->wm->fetch_faculty('fts');
        $data_['breadcrumb'] = 'Student Feedback';
        $this->load->view('templates/header', $data_);
        $this->load->view('feedback/student-feedback', $data_);
        $this->load->view('templates/footer'); 
    }
    function student_Feedback(){
        redirect('students-Feedback');
    }
    function studentFeedback(){
        redirect('students-Feedback');
    }
    function studentsFeedback(){
        redirect('students-Feedback');
    }

    function feedbackcrs($crs=''){
        if ($crs == '1') {
            $this->load->view('feedback/fhm');
        } else if ($crs == '2') {
            $this->load->view('feedback/fts');
        } else if ($crs == '4') {
            $this->load->view('feedback/fcbm');
        } else if ($crs == '3') {
            $this->load->view('feedback/fcsa');
        } else {
            redirect('feedbackstudent');
        }
    }

    function career(){
        $data_['meta'] = $this->metainfo_for_web('career', 'career'); 
        $data_['titleMain'] = "Career @ Amrapali Group of Institutes";
        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['title'] = "Career @ Amrapali Group of Institutes";

        $data_['image'] = $this->wm->append_captcha();
        $data_['breadcrumb'] = 'Career';
        $data_['openings'] = array();
        /* Opeingings
            $data_['openings'] = array(
                array(
                'OpeningForthePost'=> 'Receptionist',
                'abbrev'=>'admin', // fcsa or fcbm or fhm or fts or fhm
                'Department'=>'Administration',
                'MinimumEligibility'=>'Graduate in any stream. Fluent in English, pleasant personality, basic computer knowledge, knowledge of handling telephones, good typing and multi-task handling ability. <b>only Female Candidates to apply</b>, Salary negotiable. Preference will be given to experience and qualified candidates. Last date to apply is <b>14-Feb-2020</b>',
                'Seats'=>1
                ),
                array(
                'OpeningForthePost'=> 'Tele Caller',
                'abbrev'=>'admin', // fcsa or fcbm or fhm or fts or fhm
                'Department'=>'Administration',
                'MinimumEligibility'=>'Graduate in any stream. Fluent in English, pleasant personality, basic computer knowledge, knowledge of handling telephones, good typing and multi-task handling ability. <b>only Female Candidates to apply</b>, Salary negotiable. Preference will be given to experience and qualified candidates. Last date to apply is <b>14-Feb-2020</b>',
                'Seats'=>1
                )
            );
            //$data_['openings'] =array(); // if some openings exists then comment this line
            */
        // ----------
        $this->load->view('templates/header', $data_);
        $this->load->view('career/career-at-amrapali', $data_);
        $this->load->view('templates/footer');
    }

    function upload_resume_for_career() { // This function is called via ajax
        $flag_ = $this->wm->send_resume_for_career_at_ai();
        echo $flag_['msg_'];
    }

    function userBrochureEnquiry(){
        $flag_ = $this->wm->send_brochure_user();
        echo $flag_['msg_'];
    }

    function userFeeEnquiry(){
        $flag_ = $this->wm->send_fee_enquiry();
        echo $flag_['msg_'];   
    }

    function getCommittee_n_position(){
        $data_['committee'] = $this->wm->vol_getCommittees();
        $data_['position'] = $this->wm->vol_getPosition();
        echo json_encode($data_);
    }

    function sandhaan2020(){
        $data_['meta'] = $this->metainfo_for_web('spandan', 'spandan'); 
        $data_['title'] = 'Sandhaan 2020: An Annual Tech Fest';
    
        $data_['titleMain'] = 'Sandhaan 2020 an Annual Tech Fest';

        $data_['menu_active'] =1;
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();
        $data_['breadcrumb'] = 'Sandhaan';
        $this->load->view('templates/header', $data_);
        $this->load->view('events/sandhaan', $data_);
        $this->load->view('templates/footer');            
    }
    // end of footer menu

    // Faculty Profile--------------------------------------------
    public function facultyProfile() {
        $data_['meta'] = $this->metainfo_for_web('mentor', 'mentor'); 
       
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Faculty Profile";

        $data_['menu_active'] =1; 
        $data_['menu_all'] = $this->my_menu->site_menu();               
        $data_['title'] = "Faculty Profile";
        $data_['breadcrumb'] = 'Faciulty Profile';
        $this->load->view('templates/header', $data_);
        $this->load->view('facultyProfile/fillDetail');
        $this->load->view('templates/footer');  
    }

    public function fillFacultyDetail() {
        $this->load->model('web_model', 'wm');
        $confirm = $this->wm->fillFacultyDetail_();

        $this->session->set_flashdata('reg_msg_', $confirm['msg_']);
        redirect('facultyProfile');
    }

    public function deleteFacultyProfile($id) {
        $this->load->model('web_model', 'wm');
        $data['facID'] = $this->wm->deleteFacultyProfile_($id);
        redirect('getProfile/gksFaculty');
    }

    public function getFacultybyID($id) {       
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Faculty";

        $data_['meta'] = $this->metainfo_for_web('mentor', 'mentor'); 

        $data_['menu_active'] =1; 
        $data_['menu_all'] = $this->my_menu->site_menu();               
        $data_['title'] = "Faculty Profile";
        $data_['breadcrumb'] = 'Faculty Profile';

        $this->load->model('web_model', 'wm');
        if ($id != 0) {
            $data['facID'] = $this->wm->getFacultybyID_($id);
        } else {
            $data['facID'] = $this->wm->get_all_facultyProfile();
        }

        $this->load->view('facultyProfile/getDetailID', $data);
        
    }

    public function getProfile($user = 'a') {
        $data_['meta'] = $this->metainfo_for_web('mentor', 'mentor'); 
        if ($user == 'gksFaculty') {    
       
            $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
            $data_['titleMain'] = "Faculty";

            $data_['menu_active'] =1; 
            $data_['menu_all'] = $this->my_menu->site_menu();               
            $data_['title'] = "Faculty Profile";

            $this->load->model('web_model', 'wm');
            $data_['fac_profile'] = $this->wm->get_all_facultyProfile();
            $data_['breadcrumb'] = 'Faculty Profile';
            $this->load->view('templates/header', $data_);
            $this->load->view('facultyProfile/getDetail');
            $this->load->view('templates/footer');
        } else {
            redirect('');
        }
    }
    // faculty Profile ends
    function delOnlineReg($regid='x'){
        $res = $this->wm->delOnlineReg($regid);
        echo $res;
    }
    function get_ip_address(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
    
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
    function reportbrokenlink(){
        $IP = $this->get_ip_address();
        //$MAC = exec('getmac'); 
        //$MAC = strtok($MAC, ' '); 

        $uri_ = $this->input->get('uri_');

        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>Broken Link Reported [Amrapali Group of Intitutes]:</h2> <br /><span style='font-size: 15px; color: #121212'> Broken Link: ";
        $msg_ = $msg_ . $uri_ . "<br /><br />";
        $msg_ = $msg_ . "------------------------ <br />";
        //$msg_ = $msg_ . $MAC . "<br />";
        $msg_ = $msg_ . $IP . "<br />";

        $from_ = "admission@amrapali.ac.in";
        $name_ = "Broken Link Reported";

        $this->email->from($from_, $name_);
        $this->email->to('nitin.d12@amrapali.ac.in');

        $this->email->subject('Broken Link Reported at Amrapali Group of Institutes Website: ');
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "Thanks for reporting. We will try to improve this page.";
        } else {
            $ret_data = "X: Server Error !! Try Again...";
        }
        //-------------
        echo $ret_data;
    }
    
    function bca_first_year(){
        $this->load->view('pdf');
    }
    
    function campusstar(){
        $this->load->view('campusstar/index');
    }
    
    function techquiz(){
        $this->load->view('techquiz/index');
    }

    function blogs_archive(){
        $data_['blogs'] = $this->wm->get_blogs();
        $data_['meta'] = $this->metainfo_for_web('blogs', 'blogs');
        $data_['titleMain'] = "Blogs";

        $data_['menu_active'] =8;
        $data_['menu_all'] = $this->my_menu->site_menu();
        
        $data_['title'] = "Blogs";
        $data_['breadcrumb'] = 'Blogs';
        $this->load->view('templates/header', $data_);
        $this->load->view('blogArchive/index', $data_);
        $this->load->view('templates/footer');   
    }
    
    function email_logins(){
        $data_['lms_data'] = $this->wm->getlogins();
        $data_['meta'] = $this->metainfo_for_web('alumni', 'alumni'); 
        
        $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
        $data_['titleMain'] = "Email Logins";

        $data_['menu_active'] = 7;        
        $data_['title'] = "Email LMS Logins";
        $data_['menu_all'] = $this->my_menu->site_menu();
        $data_['alumni'] = $this->ouralumni();         
        $data_['fac_profile'] = $this->wm->get_alumniProfile_new();     
        $data_['course'] = $this->wm->get_courses_for_alumni();    
        $data_['breadcrumb'] = 'Alumni Profile Management';
        $this->load->view('templates/header', $data_);
        $this->load->view('distribute/logins', $data_);
        $this->load->view('templates/footer');
        $this->load->view('distribute/myjs');
    }
    
    function send_email_logins(){
        $logins = $this->input->post('sendmailtome');
        $count = 0;
        for($i=0; $i<count($logins); $i++){
            $record = $this->wm->getLogins($logins[$i]);
            $message_email = '<br><br><b>Dear ' . $record->first_name . ',</b><br><br>';
            $message_email = $message_email . '<p><b>Below are your credentials</b>:</p><br>';
            $message_email = $message_email . '<b>URL</b>: https://lms.amrapali.ac.in<br>';
            $message_email = $message_email . '<b>USERNAME</b>: '. $record->username . '<br>';
            $message_email = $message_email . '<b>PASSWORD:</b>: '. $record->password . '<br>';
            $message_email = $message_email . '<br><br>';
            $message_email = $message_email . 'Please change your password after first login for security reasons';
            $message_email = $message_email . '<br><br>';
            $message_email = $message_email . 'Regards,<br>Team LMS, <br>Amrapali Group of Institutes, <br>Haldwani';
            
            $email_ = $record->email;
            
            if($this->call_email_api_2($message_email, $email_) == 1){
                $count++;
                $this->wm->update_logins($record->username);
            }
        }
    echo $count . ' Logins Sent Successfully.';
    }
    
    function call_email_api_2($message_, $email){
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>[LMS, Amrapali Group of Intitutes]:</h2> <br /><span style='font-size: 15px; color: #121212'>";
        $msg_ = $msg_ . $message_ . "<br /><br />";
        $msg_ = $msg_ . "------------------------ <br />";

        $from_ = "admission@amrapali.ac.in";
        $name_ = "Amrapali Group of Institutes";

        $this->email->from($from_, $name_);
        $this->email->to($email);
        //$this->email->cc('nitin.d12@amrapali.ac.in');

        $this->email->subject('Your Login Credentials for LMS, Amrapali Group of Institutes: ');
        $this->email->message($msg_);

        $ret_data = $this->email->send();
        //-------------
        return $ret_data;
    }
    
    function getFiles(){
        $path_ = '/assets/csv/';
        $slider_ = array();
        if ($handle = opendir('.'.$path_)) {
            $i = 0;
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $slider_[$entry] = '';
                    echo $this->wm->upload_distribute_login($this->parse_file($entry));
                    $i++;
                }
            }
            closedir($handle);
        }
    }
    
    function parse_file($p_Filepath) 
    {
        $path_ = './assets/csv/';
        $file           =   fopen($path_.$p_Filepath, 'r');
        $this->fields   =   fgetcsv($file, $this->max_row_size, $this->separator, $this->enclosure);
        $keys_values    =   explode(',',$this->fields[0]);
        $content        =   array();
        $keys           =   $this->escape_string($keys_values);

        $i  =   1;
        while(($row = fgetcsv($file, $this->max_row_size, $this->separator, $this->enclosure)) != false ) 
        {
            if( $row != null ) { // skip empty lines
                $values         =   explode(',',$row[0]);
                if(count($keys) == count($values)){
                    $arr            =   array();
                    $new_values =   array();
                    $new_values =   $this->escape_string($values);
                    for($j=0;$j<count($keys);$j++){
                        if($keys[$j]    !=  ""){
                            $arr[$keys[$j]] =   $new_values[$j];
                        }
                    }
                    $content[$i]    =   $arr;
                    $i++;
                }
            }
        }
        fclose($file);
        return $content;
    }

    function escape_string($data)
    {
        $result =   array();
        foreach($data as $row){
            $result[]   =   str_replace('"', '',$row);
        }
        return $result;
    }
    
    function hospitalityManagement(){
        redirect('faculty/fhm/about');
    }
    
    function indiaquiz(){
        redirect('https://docs.google.com/forms/d/e/1FAIpQLSfDyCp-_ez7F38-3pH_S_Vg2oi5A4M86xQLET5qqZaWIOI-_A/viewform');
    }
    
    function lms(){
        $this->load->view('lms');
    }
    
    function fcbmwebinar(){
        redirect('https://forms.gle/EqTXny7RqidqJNBz5');
    }
    function catia(){
        redirect('https://forms.gle/uyMHNiayFvXjjzBcA');
    }
    
    function skilldevelopment(){
        redirect('https://forms.gle/UwskckP3wqNJsiUq7');
    }

    function project(){
        redirect('https://docs.google.com/forms/d/e/1FAIpQLSd24txjKAwqmoh5cu9zX_bR9PUr3ynbme3veuJMPxa6do6tJA/viewform');
    }
    function mgmt(){
        redirect('faculty/fcbm/about');
    }
    function fcbm(){
        redirect('https://fcbm.amrapali.ac.in/agi');
    }
    function cybersecurity(){
        redirect('https://forms.gle/6fV6JKnW6AkA1bcf7');
    }
    function ansys(){
        redirect('https://forms.gle/RGtmP8rHPQ5QRXGCA');
    }
    function csquiz(){
        redirect('https://docs.google.com/forms/d/e/1FAIpQLSe4Lplp7PFcUa0VFetfNJcgjvFNhmVZvBHDERk3ztNTZTC0yQ/viewform');
    }
    function machinelearning(){
        redirect('https://forms.gle/RP5ipuGDQ6ztTVTz9');
    }
    
    function avahan(){
        redirect('https://forms.gle/j6ZrFvP5gWro7sMk8');
    }
    function applynow1(){
        echo 'applynow';
    }
    function applynow(){
        $this->load->view('applynow');
    }
}