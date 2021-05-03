<?php

class My_menu {

    function site_menu() {
        // About Us
        $menu['aboutus'] = array(
            "About Us" => 'about',
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

}
