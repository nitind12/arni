<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Arni_model extends CI_Model {

    public function __construct() {
        parent::__construct();
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
}