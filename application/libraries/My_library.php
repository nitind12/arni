<?php

class My_library {
    function fetchCollege($clg){
        switch ($clg) {
            case 'fhm':
                $data['title'] = 'Faculty of Hospitality Management';
                $data['college'] = $clg;
                break;
            case 'fcbm':
                $data['title'] = 'Faculty of Commerce &amp; Business Management';
                $data['college'] = $clg;
                break;
            case 'ftca':
                $data['title'] = 'Faculty of Technology &amp; Computer Applications';
                $data['college'] = $clg;
                break;
            case 'fps':
                $data['title'] = 'Faculty of Pharmacy &amp; Sciences';
                $data['college'] = $clg;
                break;
            case 'fe':
                $data['title'] = 'Faculty of Education';
                $data['college'] = $clg;
                break;
            case 'agi':
                $data['title'] = 'Faculty';
                $data['college'] = $clg;
                break;
            default:
                # code...
                break;
        }
        return $data;
    }
    function getTitleforFaculty($crs, $page){
        if($crs == 'fcbm'){
            switch ($page){
                case 'about':
                    $data['desc_'] = 'Pursue your MBA, BBA & B.Com from the best private institute of business management in Utatrakhand. To know course details, visit Amrapali website';
                    $data['title'] = 'Best Private Institute of Business Management in Uttarakhand';
                break;
                case 'courses':
                    $data['desc_'] = 'Join BBA, MBA and B.Com course from top ranked institute in Nanital. Find fee structure along with eligibility, approvals and affiliation from our website';
                    $data['title'] = 'Amrapali BBA, MBA & B.Com Course in Haldwani, Uttarakhand';
                break;
                case 'infra':
                    $data['desc_'] = 'Amrapali always keep physical resources that are necessarily required to enhance teaching and learning. Join best commerce collage in Nainital!';
                    $data['title'] = 'Amrapali Infrastructure | Best B.COM, BBA, MBA Collage in Nainital';
                break;
                case 'whyus':
                    $data['desc_'] = 'Still confused about joining Amrapali Institute? Explore our webpage to know more about the best educational institute near Uttarakhand and its certifications, projects and many more.';
                    $data['title'] = 'Why Join Amrapali | BBA, MBA, B.COM Course in Haldwani, Uttarakhand';
                break;
                case 'alumni':
                    $data['desc_'] = 'Amrapali - Best Private Institute of Business Management In Uttarakhand, always stay connected with its alumni. Join Amarapli and get to opportunity to meet our alumni!';
                    $data['title'] = 'Amrapali B.COM, BBA, MCA Alumni | Best Commerce College in Nainital';
                break;
                case 'events':
                    $data['desc_'] = 'Amrapali – best private institute in Nainital organizes special events for MBA, BBA and B.Com course students. To know more about the special events, browse our page!';
                    $data['title'] = 'Amrapali Special Events | Top MBA, BBA, B.COM College in Nainital';
                break;
                case 'downloads':
                    $data['desc_'] = 'Easily download syllabus  and forms of B.COM, BBA and MBA course of Amrapali Institute, Uttarakhand. Visit our sit and Join best commerce collage in Nainital today!';
                    $data['title'] = 'Amrapali Syllabus & Forms Downloads | B.COM, BBA Course in Nainital';
                break;
                case 'news':
                    $data['desc_'] = 'From our news section, get latest news such workshops’, industrial visits and many more for students covering B.COM, BBA and MBA course in Amrapali Institute, Nainital.';
                    $data['title'] = 'Amrapali Latest News for B.COM, BBA, MBA Course Students in Nainital';
                break;
                default: 
                    $data['desc_'] = 'Pursue your MBA, BBA & B.Com from the best private institute of business management in Utatrakhand. To know course details, visit Amrapali website';
                    $data['title'] = 'Best Private Institute of Business Management in Uttarakhand';
            }
        } else if($crs == 'fhm'){
            switch ($page){
                case 'about':
                    $data['desc_'] = 'Ranked amongst the top 10 private institute of hotel management in India by GHRDC survey. Explore today, for best hotel & hospitality management degree in Nanital!';
                    $data['title'] = 'Best Private Hotel Management Institute in Nanital, Uttarakhand';
                break;
                case 'courses':
                    $data['desc_'] = 'Amrapali best Hotel Management College offering DHMCT, BHMCT, BHM & DHA course in Nanital. For fee structure and eligibitly, visit website!';
                    $data['title'] = 'Top Ranked DHMCT, BHMCT, BHM & DHA Courses in Nanital';
                break;
                default: 
                    $data['desc_'] = 'Ranked amongst the top 10 private institute of hotel management in India by GHRDC survey. Explore today, for best hotel & hospitality management degree in Nanital!';
                    $data['title'] = 'Best Private Hotel Management Institute in Nanital, Uttarakhand';
            }
        } else if($crs == 'ftca'){
            switch ($page){
                case 'about':
                    $data['desc_'] = 'Amrapali - best private engineering and computer institute in Uttarakhand offers B.Tech, MCA and BCA courses.  Find Fee details along with eligibility  & Placement';
                    $data['title'] = 'Amrapali Best Engineering & Computer College in Uttarakhand ';
                break;
                case 'courses':
                    $data['desc_'] = 'Amrapali – best college in Uttarakhand for B.Tech, BCA, MCA, Polytechnic courses approved by AICTE. For Online Counseling & Support at 9759670200, 9759670500';
                    $data['title'] = 'BCA, MCA, B.Tech Courses in Amrapali Institute, Haldwani';
                break;
                case 'infra':
                    $data['desc_'] = 'Amrapali has best labs for all of its courses mechanical, computer, electrical and many more.  Join Best Private Educational Institute in Uttarakhand Today!';
                    $data['title'] = 'Amrapali Infrastructure | Uttarakhand B.Tech, BCA, MCA College';
                break;
                case 'whyus':
                    $data['desc_'] = 'Confused about joining Amrapali – Best engineering college near Uttarakhand? Go through our page and get to know about faculty, partners and certifications.';
                    $data['title'] = 'Why Join Amrapali | B.Tech, BCA, MCA Course in Haldwani, Uttarakhand';
                break;
                case 'alumni':
                    $data['desc_'] = 'Have a look at what Amrapali B.Tech, BCA, MCA alumni say about this best engineering college in Uttarakhand. Hurry up and be a part!';
                    $data['title'] = 'Amrapali B.Tech, BCA, MCA Alumni | Best MCA Institute in Uttarakhand';
                break;
                case 'events':
                    $data['desc_'] = 'Explore Amrapali – Best engineering collage near Uttarakhand events page and know more about our online and offline special events.';
                    $data['title'] = 'Amrapali Events | B.Tech, MCA, BCA Course in Haldwani, Uttarakhand';
                break;
                case 'downloads':
                    $data['desc_'] = 'Are you looking for Amrapali B.Tech, BCA and MCA Course Syllabus? Go through our technology and computer applications download page and easily find syllabus and forms. ';
                    $data['title'] = 'B.Tech, BCA and MCA Course Syllabus – Amrapali in Haldwani, Uttarkhand';
                break;
                case 'news':
                    $data['desc_'] = 'For latest Amrapali Institute news, visit our webpage. Our institute ranked aJmong the Best Institute of academic excellence in Uttarakhand. Do not Delay, Join Today!';
                    $data['title'] = 'Amrapali News | Best Private Engineering College In Uttarakhand';
                break;
                default: 
                    $data['desc_'] = 'Amrapali - best private engineering and computer institute in Uttarakhand offers B.Tech, MCA and BCA courses.  Find Fee details along with eligibility  & Placement';
                    $data['title'] = 'Amrapali Best Engineering & Computer College in Uttarakhand ';
            }
        } else if($crs == 'fps'){
            switch ($page){
                case 'about':
                    $data['desc_'] = 'Amrapali – best pharmacy college in Nanital offers B.Pharma, B.Pharma (LE) & D.Pharma courses approved by Pharmacy Council of India and AICTE. Visit today!';
                    $data['title'] = 'Amrapali Best Pharmacy College in Nanital, Uttarakhand';
                break;
                case 'courses':
                    $data['desc_'] = 'Amrapali best pharmacy college in Nanital, Uttarakhand offering B.Pharma, B.Pharma (LE) & D.Pharma courses. Explore website, to know fee structure & eligibility.';
                    $data['title'] = 'Best D.Pharma & B.Pharma Courses in Haldwani, Uttarakhand';
                break;
                default: 
                    $data['desc_'] = 'Amrapali – best pharmacy college in Nanital offers B.Pharma, B.Pharma (LE) & D.Pharma courses approved by Pharmacy Council of India and AICTE. Visit today!';
                    $data['title'] = 'Amrapali Best Pharmacy College in Nanital, Uttarakhand';
            }
        } else if($crs == 'fe'){
            switch ($page){
                case 'about':
                    $data['desc_'] = 'Amrapali is the top ranked and private institute for B.ED course in Haldwani, Uttarakhand.  Visit our website, to know fee structure, eligibility and many more';
                    $data['title'] = 'Amrapali Faculty of Education | Nainital Best Private Institute';
                break;
                case 'courses':
                    $data['desc_'] = 'Get admission in B.ED as Amrapali is the top ranked institute of Nanital, Uttarakhand. Find Fee Structure along with eligibility & affiliations';
                    $data['title'] = 'Best B.ED Course in Haldwani, Uttarakhand – Amrapali Institute';
                break;
                default: 
                    $data['desc_'] = 'Amrapali is the top ranked and private institute for B.ED course in Haldwani, Uttarakhand.  Visit our website, to know fee structure, eligibility and many more';
                    $data['title'] = 'Amrapali Faculty of Education | Nainital Best Private Institute';
            }
        }

        return $data;
    }

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
                $data_['keywords'] = 'Top engineering,Management,Hotel Management, Tourism, Pharmacy Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni University (AU) came into existence by an Act No.23 of 2009 of Government of Himachal Pradesh and approved by the UGC, vide Notification No- F No 8-5/2010(CPP-1/PU), dated 03 Mar 2010, under Section 2 (f) of UGC Act, 1956 with the objective to promote inter-disciplinary Higher Education and Research in the needy areas of Himachal Pradesh, Punjab and J&K.";
            break;

            case 'academics': // Art and Humanities
                $data_['title'] = $this->findTitle($page);
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Top engineering,Management,Hotel Management, Tourism, Pharmacy Unievrsity Kangra';
                $data_['distribution'] = 'local';
                $data_['author'] = 'Arni University';
                $data_['description'] = "Arni focuses on all aspects related to culture and creative life including most disciplines outside exact Sciences.";
            break;

            case 'admissions':
                $data_['title'] = "Admissions, Arni University, Kangra";
                $data_['abstract'] = 'Completed 12 years of excellence, and is a higly rated group of Uniervsities of Himanchal Pradesh';
                $data_['keywords'] = 'Top engineering,Management,Hotel Management, Tourism, Pharmacy Unievrsity Kangra';
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
