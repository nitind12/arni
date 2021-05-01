<?php defined('BASEPATH') OR exit('No direct script access allowed');
class My404 extends CI_Controller
{
   public function __construct()
   {
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
   public function index()
   {
      $data_['meta'] = $this->metainfo_for_web('admissions', 'admissions'); 
     
      $data_['title_under_head'] = "Best Private Educational Institute in Uttarakhand | Best Professional Institute of Nainital";
      $data_['titleMain'] = "Hunt for - The Online Budding Chef 2020";

      $data_['menu_active'] =0;
      $data_['menu_all'] = $this->my_menu->site_menu();        
      $data_['title'] = "Hunt for - The Online Budding Chef 2020";

      $data_['breadcrumb'] = 'Hunt for - The Online Budding Chef 2020';
      $this->load->view('templates/header', $data_);
      $this->load->view('err404', $data_);
      $this->load->view('templates/footer');
   }
}
