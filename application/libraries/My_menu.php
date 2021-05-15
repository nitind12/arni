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
                "School of Art & Humanities" => 'art-and-humanities/about',
                "School of Commerce & Business Management" => 'commerce-and-business-management/about',
                "School of Computer Application" => 'computer-application/about',
                "School of Life and Allied Science" => 'life-and-allied-science/about',
                "School of Pharmacy" => 'pharmacy/about',
                "School of Physical Science" => 'physical-science/about',
                "School of Skill Development & Vocational Studies" => 'skill-development-and-vocational-studies/about',
                "School of Technology" => 'technology/about',
                "School of Tourism & Hospitality Management" => 'tourism-and-hospitality-management/about',
                "Our Faculty" => 'faculty'
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
            "Gallery" => "gallery/index"
        );

        // Alumni
        $menu['alumni_menu'] = array(
            "Alumni" => 'alumni/connectprogramme',
        );

        //Contact Us
        $menu['contactus'] = array(
            "Contact Us" => "contact",
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
            case 'faculty':
                $data = $this->faculty();
                break;
            case 'admissions':
                $data = $this->admissions();
                break;
            case 'gallery':
                $data =  $this->gallery();
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
            "Home" => array("art-and-humanities", ""),
            "About" => array("art-and-humanities/about", "about"),
            "Department" => array("art-and-humanities/department", "department"),
            "Syllabus" => array("art-and-humanities/syllabus", "syllabus"),
            "Events" => array("art-and-humanities/events", "events"),
            "Contact" => array("art-and-humanities/contact", "contact"),
        );
    }

    function technology(){
        return array(
            "Home" => array("technology", ""),
            "About" => array("technology/about", "about"),
            "Department" => array("technology/department", "department"),
            "Syllabus" => array("technology/syllabus", "syllabus"),
            "Events" => array("technology/events", "events"),
            "Contact" => array("technology/contact", "contact"),
        );
    }

    function commerce_and_business_management(){
        return array(
            "Home" => array("commerce-and-business-management", ""),
            "About" => array("commerce-and-business-management/about", "about"),
            "Department" => array("commerce-and-business-management/department", "department"),
            "Syllabus" => array("commerce-and-business-management/syllabus", "syllabus"),
            "Events" => array("commerce-and-business-management/events", "events"),
            "Contact" => array("commerce-and-business-management/contact", "contact"),
        );
    }

    function pharmacy(){
        return array(
            "Home" => array("pharmacy", ""),
            "About" => array("pharmacy/about", "about"),
            "Department" => array("pharmacy/department", "department"),
            "Syllabus" => array("pharmacy/syllabus", "syllabus"),
            "Events" => array("pharmacy/events", "events"),
            "Contact" => array("pharmacy/contact", "contact"),
        );
    }

    function tourism_and_hospitality_management(){
        return array(
            "Home" => array("tourism-and-hospitality-management", ""),
            "About" => array("tourism-and-hospitality-management/about", "about"),
            "Department" => array("tourism-and-hospitality-management/department", "department"),
            "Syllabus" => array("tourism-and-hospitality-management/syllabus", "syllabus"),
            "Events" => array("tourism-and-hospitality-management/events", "events"),
            "Contact" => array("tourism-and-hospitality-management/contact", "contact"),
        );
    }

    function computer_application(){
        return array(
            "Home" => array("computer-application", ""),
            "About" => array("computer-application/about", "about"),
            "Department" => array("computer-application/department", "department"),
            "Syllabus" => array("computer-application/syllabus", "syllabus"),
            "Events" => array("computer-application/events", "events"),
            "Contact" => array("computer-application/contact", "contact"),
        );
    }

    function life_and_allied_science(){
        return array(
            "Home" => array("life-and-allied-science", ""),
            "About" => array("life-and-allied-science/about", "about"),
            "Department" => array("life-and-allied-science/department", "department"),
            "Syllabus" => array("life-and-allied-science/syllabus", "syllabus"),
            "Events" => array("life-and-allied-science/events", "events"),
            "Contact" => array("life-and-allied-science/contact", "contact"),
        );
    }

    function physical_science(){
        return array(
            "Home" => array("physical-science", ""),
            "About" => array("physical-science/about", "about"),
            "Department" => array("physical-science/department", "department"),
            "Syllabus" => array("physical-science/syllabus", "syllabus"),
            "Events" => array("physical-science/events", "events"),
            "Contact" => array("physical-science/contact", "contact"),
        );
    }

    function skill_development_and_vocational_studies(){
        return array(
            "Home" => array("skill-development-and-vocational-studies", ""),
            "About" => array("skill-development-and-vocational-studies/about", "about"),
            "Department" => array("skill-development-and-vocational-studies/department", "department"),
            "Syllabus" => array("skill-development-and-vocational-studies/syllabus", "syllabus"),
            "Events" => array("skill-development-and-vocational-studies/events", "events"),
            "Contact" => array("skill-development-and-vocational-studies/contact", "contact"),
        );
    }

    function faculty(){
        return array(
            "Home" => array("", ""),
            "About" => array("", ""),
            "Department" => array("", ""),
            "Syllabus" => array("", ""),
            "Events" => array("", ""),
            "Contact" => array("", ""),
        );
    }

    function admissions(){
        return array(
            "Admission Offices" => array("", ""),
            "Download Brochure" => array("", ""),
            "Admission Form" => array("", ""),
            "Admission Process" => array("", ""),
            "Scholarship" => array("", ""),
            "Bank Details" => array("", ""),
            "Academic Calendar" => array("", ""),
            "Security &amp; Discipline" => array("", ""),
            "Pay Fee" => array("", ""),
        );
    }

    function gallery(){
        return array(
            "Photo Gallery" => array("", ""),
            "Video Gallery" => array("", ""),
            "Activities" => array("", ""),
            "Expert View" => array("", ""),
        );
    }
}
