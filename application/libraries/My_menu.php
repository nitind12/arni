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
                "Faculty of Technology &amp; Computer Applications" => 'faculty/ftca/about',
                "Faculty of Commerce &amp; Business Management" => 'faculty/fcbm/about',
                "Faculty of Hospitality Management" => 'faculty/fhm/about',
                "Faculty of Pharmacy & Sciences" => 'faculty/fps/about',
                "Faculty of Education" => 'faculty/fe/about',
                "Our Mentors" => 'mentors'
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
        $menu['tnp'] = array(
            "Training &amp; Placements" => "placements"
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
            "AGI LMS" => "https://www.amrapali.ac.in/lms",
        );

        return $menu;
    }

}
