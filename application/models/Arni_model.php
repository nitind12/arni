<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Arni_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getschool(){
        return $this->db->get('_arni_school')->result();
    }
    function getCourse(){
        $school = explode("_", $this->input->post('cmbSchool'));
        $degreediploma =  explode("_", $this->input->post('cmbDegreeDiploma'));

        $this->db->order_by('b.PRIORITY');
        $this->db->order_by('a.COURSE');
        $this->db->select('a.CRSDETID, a.COURSE, a.DURATION');
        if($school[1] != "all"){
            $this->db->where('a.SCHOOL', $school[0]);
        }
        if($degreediploma[1] != "all"){
            $this->db->where('a.COURSE_TYPE', $degreediploma[0]);
        }
        $this->db->from('_arni_course_detail a');
        $this->db->join('_arni_course_type b', 'a.COURSE_TYPE=b.CID');
        $query = $this->db->get();
        //$x['token'] = $this->security->get_csrf_hash();
        //echo $this->db->last_query();
        return $query->result();
    }

    function school_wise_course_offered($school = 'x'){
        $this->db->order_by('a.COURSE');
    	$this->db->select('b.SNAME, c.DID, c.DEPARTMENT, a.COURSE');
    	$this->db->from('_arni_course_detail a');
    	$this->db->join('_arni_school b', 'a.SCHOOL = b.SID');
    	$this->db->join('_arni_departments c', 'a.DEPARTMENT=c.DID');
    	$this->db->where('b.SID', $school);
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	return $query->result();
    }
    function school_wise_departments($school = 'x'){
    	$this->db->distinct();
    	$this->db->select('a.DID, a.DEPARTMENT');
    	$this->db->from('_arni_departments a');
    	$this->db->join('_arni_course_detail b', 'a.DID = b.DEPARTMENT');
    	$this->db->where('b.SCHOOL', $school);
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	return $query->result();
    }

    function number_of_courses(){
        $this->db->select('a.COURSE_TYPE, COUNT(b.COURSE_TYPE) as TOTAL');
        $this->db->group_by('b.COURSE_TYPE');
        $this->db->order_by('a.PRIORITY');
        $this->db->from('_arni_course_type a');
        $this->db->join('_arni_course_detail b', 'a.CID=b.COURSE_TYPE');
        $query = $this->db->get();
        return $query->result();
    }

    function faculty_list(){
        $this->db->order_by('PRIORITY');
        $this->db->order_by('a.FULL_NAME');
        $this->db->select('d.PRIORITY, d.DID, b.SNAME AS SCHOOL, c.DEPARTMENT,a.FULL_NAME, a.SPECIALIZATION, d.DESIG as DESIGNATION, a.PIC');
        $this->db->from('_arni_faculty a');
        $this->db->join('_arni_school b', 'a.SCHOOL = b.SID');
        $this->db->join('_arni_departments c', 'a.DEPARTMENT=c.DID');
        $this->db->join('_arni_designation d', 'a.DESIGNATION=d.DID');
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
    }

    function getstates(){
        $this->db->order_by('NAME_');
        $query = $this->db->get('_arni_states');
        return $query->result();
    }
    function coursetype(){
        $this->db->order_by('PRIORITY');
        $query = $this->db->get('_arni_course_type');
        return $query->result();
    }

    function submit_registration(){
        $school = explode("_", htmlspecialchars($this->input->post('cmbSchool')));
        $degree = explode("_", htmlspecialchars($this->input->post('cmbDegreeDiploma')));
        $course = explode("_", htmlspecialchars($this->input->post('cmbAppliedCourse')));
        $data = array(
            'NAME_' => htmlspecialchars($this->input->post('txtName')), 
            'EMAIL' => htmlspecialchars($this->input->post('txtEmail')), 
            'MOBILE_1' => htmlspecialchars($this->input->post('txtMobile1')), 
            'MOBILE_2' => htmlspecialchars($this->input->post('txtMobile2')), 
            'STATE' => htmlspecialchars($this->input->post('cmbState')), 
            'CITY' => htmlspecialchars($this->input->post('txtCity')), 
            'SCHOOL' => $school[1], 
            'COURSE_TYPE' => $degree[1], 
            'COURSE_APPLIED' => $course[1], 
            'STATUS' => 1, 
        );
        $result = $this->db->insert('_arni_online_registrations', $data);
        return $result;
    }
}