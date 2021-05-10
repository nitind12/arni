<?php

class My_menu {

    function site_menu() {
        // About Us
        $menu['aboutus'] = array(
            "About Us" => 'about/aboutus',
        );

        // Academics
        $menu['academics'] = array(
            'faculty' => array(
                "School of Art & Humanities" => '#',
                "School of Technology" => '#',
                "School of Commerce & Business Management" => '#',
                "School of Pharmacy" => '#',
                "School of Computer Application" => '#',
                "School of Tourism & Hospitality Management" => '#',
                "School of Physical Science" => '#',
                "School of Skill Development & Vocational Studies" => '#',
                "Our Mentors" => '#'
            ),
            'facilities' => array(
                "Library" => 'library',
            ),
            'others' => array(
                'FDP' => 'fdp'
            )
        );
        // Admissions
        $menu['admissions'] = array(
            "Admissions" => "admissions",          
        );

        // Training & Placements
        $menu['exam'] = array(
            "Examination" => array(
                "Results" => '#',
                "Circular/ Notices " => '#',
                "Datesheet" => "#",
                "Online Education" => '#',
                "Online Exam" => '#',
                "Student Login" => '#'
            ),
        );

        // Gallery
        $menu['pics'] = array(
            "Gallery" => "gallery"
        );

        // Alumni
        $menu['alumni_menu'] = array(
            "Alumni" => 'alumni/connectprogramme',
        );

        //Contact Us
        $menu['contactus'] = array(
            "Contact Us" => "contactus",
        );

        $menu['erplogin'] = array(
            "LOGIN" => 'login',
        );
        
        return $menu;
    }

    function submenu($page = 'x'){
        switch ($page) {
            case 'about':
                $data = $this->about();
                break;
            case 'about':
                $data = $this->academics();
                break;
            default:
                # code...
                break;
        }

        return $data;
    }

/*
Explaination for the format of the below functions --
    [["menu item" => array(str1, str2)]] where {str1} is the path and {str2} is the active menu
*/
    function about(){
        return array(
            "Why Arni?"             => array("about/aboutus", "aboutus"),
            "Governance"            => array("about/governance", "governance"),
            "Management's Talk"     => array("about/management", "management"),
            "University Committee"  => array("about/committee", "committee") 
        );
    }

    function art_and_humanities(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

}
