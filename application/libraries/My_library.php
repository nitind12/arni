<?php

class My_library {

    function findTitle($page = 'x'){
        switch ($page) {
            case 'art-and-humanities':
                $title = "School of Art &amp; Humanities";
                break;
            case 'faculty':
                $title = "Faculty, Arni University";
                break;
            default:
                $title = "Arni University";
                break;
        }
    return $title;
    }
    function heading_for_page_($menu, $page){
        $data_['contact'] = 'office@arni.in, query@aarni.in, admission@arni.in';
        switch($menu){
            case 'home':
                $data_['title'] = 'Arni University';
                $data_['abstract'] = 'Top University of Northern India, Top Rated University of Himanchal';
                $data_['keywords'] = 'Top Ranked University Himanchal Pradesh,Best Institute Kathgarh, Kangra, engineering college';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = 'Arni –best professional university near Indora has been ranked as the top private university offering graduate & post graduate courses Arts, Technology, Commerce, Computer Science, Tourism, Physical Science and Vocational Courses';
            break;

            case 'about':
                $data_['title'] = 'About Us';
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Top engineering, Management,Hotel Management, Tourism, Pharmacy Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni University (AU) came into existence by an Act No.23 of 2009 of Government of Himachal Pradesh and approved by the UGC, vide Notification No- F No 8-5/2010(CPP-1/PU), dated 03 Mar 2010, under Section 2 (f) of UGC Act, 1956 with the objective to promote inter-disciplinary Higher Education and Research in the needy areas of Himachal Pradesh, Punjab and J&K.";
            break;

            case 'art_and_humanities': // 1
                $data_['title'] = "School of Art and Humanities";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Art and Humanities, Art, Humanities, BA, MA, M.Phill, Ph.D, B.Design, English, Education, Journalism & Mass Communication, Psychology, Fashion Design, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School of Arts & Humanties Humanities focuses on all aspects related to culture and creative life including most disciplines outside exact Sciences.";
            break;

            case 'commerce_and_business_management': // 2
                $data_['title'] = "School of Commerce and Business Management";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Commerce and Business Management, Commerce, Business, Management, BBA, MBA, B.Com, M.Com, M.Phill, Ph.D, Business Studies, Commerce, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School Of Commerce & Management Management degrees give students a broad foundation in topics relating to business, finance, economics and marketing.";
            break;

            case 'computer_application': // 3
                $data_['title'] = "School of Computer Application";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Computer Application, Software, BCA, MCA, B.Sc, M.Phill, Ph.D, Computer Science & Applicaton, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School Of Computer Application Basic research, also called pure research or fundamental research, is a type of scientific research with the aim of improving scientific theories for better understanding and prediction of natural or other phenomena.";
            break;

            case 'life_and_allied_science': // 4
                $data_['title'] = "School of Life and Allied Science";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Life and Allied Science, Life, Allied Science, B.Sc., M.Sc, M.Phill, Ph.D, Life & Allied Science, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School Of Life & Allied Science Life & Allied Science research, also called pure research or fundamental research, is a type of scientific research with the aim of improving scientific theories for better understanding and prediction of natural or other phenomena.";
            break;

            case 'pharmacy': // 5
                $data_['title'] = "School of Pharmacy";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Pharmacy, Pharma, Chemistry, B. Pharma, D. Pharma, Diploma, PG Diploma, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School of Pharmacy Graduates of pharmacy degree work right at the heart of human healthcare, taking on roles relating to the design and development of new treatments, prescription and care management, and advising on the range of medical options available.";
            break;

            case 'physical_science': // 6
                $data_['title'] = "School of Physical Science";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Physical Science, Physical, Science, B. Voc, B.Sc, M.Sc, M.Phill, Ph.D, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School of Physical Science Physical Science research, also called pure research or fundamental research, is a type of scientific research with the aim of improving scientific theories for better understanding and prediction of natural or other phenomena.";
            break;

            case 'skill_development_and_vocational_studies': // 7
                $data_['title'] = "School of Skill Development and Vocational Studies";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Skill Development and Vocational Studies, Skill Development, vocational studies, Cabin Crew Training, Training, Certificate, Diploma, Beauty,Skin and Hair, BPO, Electroplanting, Fashion Design, inflight Operation, Yoga & Therpy, Hardware Engineering, Beauty Culture, Hair & Skin Care, Computer Applications, GST, House Wiring, Skill & Vocational Studies,  Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School Of SKILL DEVELOPMENT & VOCATIONAL STUDIES Management degrees give students a broad foundation in topics relating to business, finance, economics and marketing.";
            break;

            case 'technology': // 8
                $data_['title'] = "School of Technology";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Technology, Top Engineering, Diploma, B.Tech, M.Tech, Ph.D, Civil Engineering, Computer Science Engineering, Mechanical Engineering, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "An engineering degree equips you with the skills of creation. You have a broad range of practical abilities which can be utilized across a wide range of industries and sectors.";
            break;

            case 'tourism_and_hospitality_management': // 9
                $data_['title'] = "School of Tourism and Hospitality Management";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Tourism and Hospitality Management, Tourism, Hospitality Management, BHMCT, Diploma, Bakery & Confectionary, Food and Bevrage Services, Food Production, Front Office Operations, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni School Of Tourism & Hospitality Management Management degrees give students a broad foundation in topics relating to business, finance, economics and marketing.";
            break;

            case 'faculty':
                $data_['title'] = "Faculty";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = '200+ Full time Faculty, Faculty, Mentor, Mentors, Intellectual Capital, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "At Arni your dream begins with our respected Faculty who believes in you, who nurtures and leads you to the next dimension, sometimes poking you with a sharp stick called truth.";
            break;

            case 'admissions':
                $data_['title'] = "Admissions, Arni University, Kangra";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Top engineering, Management, Hospitality Management, Tourism, Pharmacy, Skill Development, Physical Science, Doctorate Programs, Post Graduate Programs, Under Graduate Programs, Diploma Programs, BA, MA, B.Design, B.Com, M.Com, M.Phill, B.Sc, M.Sc, BCA, MCA, BBA, MBA, B.Pharma, Diploma, Bakery & Confectionary, Food and Bevrage Services, Food Production, Front Office Operations, D.Pharma, BHMCT, Ph.D, Beauty,Skin and Hair, BPO, Electroplanting, Fashion Design, inflight Operation, Yoga & Therpy, Hardware Engineering, Beauty Culture, Hair & Skin Care, Computer Applications, GST, House Wiring, Skill & Vocational Studies, Arni Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "ARNI UNIVERSITY accepts admission form to Engineering, Technology, Science, Business Management, Pharmacy, Commerce, Hospitality, Humanities and Social Sciences. ";
            break;

            default:
                $data_['title'] = 'Arni University';
                $data_['abstract'] = 'Top University of Northern India, Top Rated University of Himanchal';
                $data_['keywords'] = 'Top Ranked University Himanchal Pradesh,Best Institute Kathgarh, Kangra, engineering college';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = 'Arni –best professional university near Indora has been ranked as the top private university offering graduate & post graduate courses Arts, Technology, Commerce, Computer Science, Tourism, Physical Science and Vocational Courses';
        }
    return $data_;
    }
    
    
    function ouralumni($clg = ''){ // Need this at every page with news headings
        $this->_CI = & get_instance();
        $this->_CI->load->model('Web_model', 'wm');
        
        if($clg != ''){
            $data_['alumniProfile']= $this->_CI->wm->get_all_alumniProfile($clg);
        } else {
            $data_['alumniProfile']= $this->_CI->wm->get_all_alumniProfile_distinct_general();
        }
        //$data_['rnews_'] = $this->_CI->wm->get_most_recent_news();
        return $data_;
    }
}
