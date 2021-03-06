<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model_newsevents extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	function feedNews_() {
        $data = array(
            'SUBJECT' => $this->input->post('txtSubject'),
            'NEWS' => $this->input->post('txtNews'),
            'BLOG_URL' => $this->input->post('txtBlogLink'),
            'PATH_ATTACH' => 'x',
            'FONTJI' => 'Arial',
            'DATE_' => date('d/m/Y'),
            'DATE_START'=> $this->input->post('txtStartDate'),
            'DATE_END'=> $this->input->post('txtEndDate'),
            'TIME_' => date("h:i:sa"),
            'STATUS' => 1,
            'USERNAME' => $this->session->userdata('ussr_')
        );
        $query = $this->db->insert('newsevents', $data);
        /*$id__ = $this->db->insert_id();

        $config = array(
            'upload_path' => './_assets_/newsdetail',
            'overwrite' => TRUE,
            'allowed_types' => 'doc|docx|pdf|jpg|png',
            'file_name' => $id__
        );
        
        $file_element_name = 'txtInputFile';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();

            $path_ = $path_ji['file_name'];

            $data = array(
                'PATH_ATTACH' => $path_
            );
            $this->db->where('ID', $id__);
            $query = $this->db->update('newsevents', $data);
        } else {
            $path_ = 'x';
        }
        */

        if ($query == TRUE) {
            $bool_ = array('res_' => TRUE, 'msg_' => 'Record Feeded Successfully..');
            /*if ($path_ != 'x') {
                $bool_ = array('res_' => TRUE, 'msg_' => 'Record Feeded Successfully with uploaded file.');
            } else {
                $bool_ = array('res_' => TRUE, 'msg_' => 'Record Feeded Successfully without any uploaded file.');
            }
            */
        } else {
            $bool_ = array('res_' => TRUE, 'msg_' => 'Something went wrong. Please try again !!');
        }
        return $bool_;
    }

    function get_news_events_for_edit($id__) {
        $this->db->where('ID', $id__);
        $query = $this->db->get('newsevents');

        return $query->row();
    }

    function updateNews_($id__) {
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $this->db->where('ID', $id__);
        $data = array(
            'SUBJECT' => $this->input->post('txtSubject'),
            'NEWS' => $this->input->post('txtNews'),
            'BLOG_URL' => $this->input->post('txtBlogLink'),
            'FONTJI' => 'Arial',
            'DATE_' => date('d/m/Y'),
            'DATE_START'=> $this->input->post('txtStartDate'),
            'DATE_END'=> $this->input->post('txtEndDate'),
            'TIME_' => date("h:i:sa"),
        );
        $query = $this->db->update('newsevents', $data);

        /*
        $config = array(
            'upload_path' => './_assets_/newsdetail',
            'overwrite' => TRUE,
            'allowed_types' => 'doc|docx|pdf|jpg|png',
            'file_name' => $id__
        );
        $file_element_name = 'txtInputFile';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];

            $data = array(
                'PATH_ATTACH' => $path_
            );
            $this->db->where('ID', $id__);
            $query = $this->db->update('newsevents', $data);
        } else {
            $path_ = 'x';
        }
        */

        if ($query == TRUE) {
            $bool_ = array('res_' => TRUE, 'msg_' => 'Record Updated Successfully.');
            /*
            if ($path_ != 'x') {
                $bool_ = array('res_' => TRUE, 'msg_' => 'Record Updated Successfully with uploaded file.');
            } else {
                $bool_ = array('res_' => TRUE, 'msg_' => 'Record Updated Successfully without any uploaded file.');
            }
            */
        } else {
            $bool_ = array('res_' => TRUE, 'msg_' => 'Something went wrong. Please try again !!');
        }
        return $bool_;
    }

    function get_latest_news($limit_) {
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $this->db->where('STATUS', 1);
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get('newsevents', 0, $limit_);
        return $query->result();
    }

    function get_all_news() {
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $this->db->where('STATUS', 1);
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get('newsevents');
        
        return $query->result();
    }

    function get_all_news_deactive() {
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $this->db->where('STATUS', 0);
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get('newsevents');
        return $query->result();
    }

    function active_deactive_news($id_, $status_) {
        $this->db->where('ID', $id_);
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $data = array(
            'STATUS' => $status_
        );
        $query = $this->db->update('newsevents', $data);
        return $query;
    }

    function active_deactive_bday($bid__, $status_) {
        $this->db->where('BID', $bid__);
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $data = array(
            'STATUS' => $status_
        );
        $query = $this->db->update('bday_data', $data);
        return $query;
    }

    function delete_news_events($id_) {
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $this->db->where('ID', $id_);
        $query = $this->db->get('newsevents');

        if ($query->num_rows() != 0) {
            $item_ = $query->row();

            if ($item_->PATH_ATTACH != 'x') {
                $file__ = $item_->PATH_ATTACH;
            } else {
                $file__ = 'x';
            }
        }
        $this->db->where('ID', $id_);
        $bool_ = $this->db->delete('newsevents');
        if ($bool_ == TRUE) {
            if ($file__ != 'x') {
                $full_path_ = FCPATH . '_assets_/newsdetail/' . $file__;
                @unlink($full_path_);
            }
        }
        return $bool_;
    }

    function delete_attach_news($id__) {
        $this->db->where('ID', $id__);
        if($this->session->userdata('stss_') != 'adm') $this->db->where('USERNAME', $this->session->userdata('ussr_'));
        $query__ = $this->db->get('newsevents');
        if ($query__->num_rows() != 0) {
            $item_ = $query__->row();

            if ($item_->PATH_ATTACH != 'x') {
                $file__ = $item_->PATH_ATTACH;
            } else {
                $file__ = 'x';
            }
        }
        $data = array(
            'PATH_ATTACH' => 'x'
        );
        $this->db->where('ID', $id__);
        $query = $this->db->update('newsevents', $data);
        if ($query == TRUE) {
            if ($file__ != 'x') {
                $full_path_ = FCPATH . '_assets_/newsdetail/' . $file__;
                @unlink($full_path_);
            }
        }
        return $query;
    }
}