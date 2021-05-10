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
                "School of Art & Humanities" => 'art-and-humanities',
                "School of Technology" => 'technology',
                "School of Commerce & Business Management" => 'commerce-and-business-management',
                "School of Pharmacy" => 'pharmacy',
                "School of Computer Application" => 'computer-application',
                "School of Life and Allied Science" => 'life-and-allied-science',
                "School of Tourism & Hospitality Management" => 'tourism-and-hospitality-management',
                "School of Physical Science" => 'physical-science',
                "School of Skill Development & Vocational Studies" => 'skill-development-and-vocational-studies',
                "Our Mentors" => 'mentor'
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
            case 'art_and_humanities':
                $data = $this->art_and_humanities();
                break;
            case 'technology':
                $data = $this->technology();
                break;
            case 'commerce_and_business_management':
                $data = $this->commerce_and_business_management();
                break;
            case 'pharmacy':
                $data = $this->pharmacy();
                break;
            case 'tourism_and_hospitality_management':
                $data = $this->tourism_and_hospitality_management();
                break;
            case 'computer_application':
                $data = $this->computer_application();
                break;
            case 'life_and_allied_science':
                $data = $this->life_and_allied_science();
                break;
            case 'physical_science':
                $data = $this->physical_science();
                break;
            case 'skill_development_and_vocational_studies':
                $data = $this->skill_development_and_vocational_studies();
                break;
            case 'mentor':
                $data = $this->mentor();
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

    function technology(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function commerce_and_business_management(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function pharmacy(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function tourism_and_hospitality_management(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function computer_application(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function life_and_allied_science(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function physical_science(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function skill_development_and_vocational_studies(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function mentor(){
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
