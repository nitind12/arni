<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_blog_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function get_bloglinks(){
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get('bloglinks');
        return $query->result();
    }
    
    function createnewblog(){
        $data= array(
            'TITLE'=>'',
            'LINK'=>'',
            'USERNAME'=>''
            );
        $query = $this->db->insert('bloglinks', $data);
        return $query;
    }
    
    function update_blog_detail($id_, $column_,$instance){
        $value_ = $this->input->post($instance);
        $this->db->where('ID', $id_);
        $data = array($column_ => $value_, 'USERNAME'=> $this->session->userdata('ussr_'), 'DATE_'=>date('Y-m-d h:m:S A'));
        $bool_ = $this->db->update('bloglinks', $data);
    return $bool_;
    }
    
    function delete_blog_detail($id){
        $this->db->where('ID', $id);
        $bool_ = $this->db->delete('bloglinks');
        return $bool_;
    }
}