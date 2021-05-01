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
    function getTitleForAdmissions($page){
        if($page == 'applynow'){
            $data['title'] = 'Online Admission Form - ' . date('Y') . ' | Top Private Institute in Nanital';
            $data['desc_'] = 'To take admission, simply fill Pre-Admission online form for all the courses in Amrapali. Best institute of Academic Excellence in Uttarakhand';
        } else {
            $data['title'] = 'Amrapali Online Admission Open | Best College  in Nanital';
            $data['desc_'] = 'Amrapali online admissions open for all the professional courses. Just fill the form and our councilor will contact you. Join Top Ranked Institute of Nainital!';
        }
        return $data;
    }

    function getTitleforAbout($page){
        switch ($page){
            case 'vmv':
                $data['desc_'] = 'Know about Amrapali – best private institute in Nainital. Our mission is to create centric learning environment where every student can achieve their full potential.';
                $data['title'] = 'Vision, Mission & Values – Amrapali | Top Ranked Institute Of Nainital';
            break;
            case 'managementboard':
                $data['desc_'] = 'The stirring leadership of Amrapali Group’s Management creates a learning environment with illustrious faculty, brilliant students, & proactive collaborations.';
                $data['title'] = 'Amrapali Board of Management | Best Private Institute in Nainital';
            break;
            default: 
                $data['desc_'] = 'Amrapali is the top ranked and private institute for B.ED course in Haldwani, Uttarakhand.  Visit our website, to know fee structure, eligibility and many more';
                $data['title'] = 'Amrapali Group of Institutes | Nainital Best Private Institute';
        }
    return $data;
    }
    function getTitleforMentors($page){
        switch ($page){
            case 'mentors':
                $data['desc_'] = 'Amrapali - best Private educational institute of Nanital have professionally qualified, experienced, motivated and highly committed team of faculty members. To know more, visit us.';
                $data['title'] = 'Amrapali Mentors | Best Private Educational Institute Near Uttarakhand';
            break;
            case 'capital':
                $data['desc_'] = 'Amrapali - best private educational institute in Uttarakhand have quallified and experienced faculty members. Explore our page and get a list of all the teachers course wise.';
                $data['title'] = 'Amrapali Faculty | Best Private Educational Institute Near Uttarakhand';
            break;
            default: 
                $data['desc_'] = 'Amrapali is the top ranked and private institute for B.ED course in Haldwani, Uttarakhand.  Visit our website, to know fee structure, eligibility and many more';
                $data['title'] = 'Amrapali Mentors | Best Private Educational Institute Near Uttarakhand';
        }
    return $data;
    }
    function heading_for_page_($clg, $page){
        $data_['contact'] = 'office@amrapali.ac.in, query@amrapali.ac.in, admission@amrapali.ac.in';
        switch($clg){
            case 'home':
                $data_['title'] = 'Amrapali Best Professional Institute in Nanital | Top Ranked Institutes';
                $data_['abstract'] = 'Top Institute of Northern India, Top Rated Institute of Uttarakhand';
                $data_['keywords'] = 'Top Ranked Institute Uttarakhand,Best Institute Haldwani, Nainital, engineering college';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'Amrapali –best professional institute near Nainital has been ranked as the top private institute offering graduate & post graduate courses BBA, BTech, BCA, BHM, MBA, MCA';
            break;

            case 'about':
                $data_['title'] = $this->getTitleforAbout($page)['title'];
                $data_['abstract'] = 'Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand';
                $data_['keywords'] = 'Top engineering,Management,Hotel Management Pharmacy College Nainital';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = $this->getTitleforAbout($page)['desc_'];
            break;

            case 'admissions':
                $data_['title'] = $this->getTitleForAdmissions($page)['title'];
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['keywords'] = 'Scholarships,Education Loan, EMI,Transport Facility, Hostel Facility';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = $this->getTitleForAdmissions($page)['desc_'];
            break;

            case 'ftca':
                $data_['title'] = $this->getTitleforFaculty($clg, $page)['title'];
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['description'] = 'A leading Institute in Uttarakhand for B.Tech, Polytechhnic, BCA, MCA,Top Ranked BCA, Best Engineering College In Haldwani, Nainital, Uttarakhand';
                $data_['keywords'] = 'Top ranked Engineering College in Uttarakhand,  JEEP best Institute, engineering college';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIAS';
            break;

            case 'fcbm':
                $data_['title'] = $this->getTitleforFaculty($clg, $page)['title'];
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['description'] = 'Top Ranked Institute of Uttarakhand for MBA, BBA, B. Com (Honours),Best MB Institute Uttrakahand, Best BBA Institute, Haldwani, Uttrakhand';
                $data_['keywords'] = 'Top MBA Institute, BBA Institute,B.COM(H), MBA Uttarakhand';
                $data_['distribution'] = 'local';
                $data_['author'] = 'FCBM, AITS, AIAS';
            break;
            case 'fhm':
                $data_['title'] = $this->getTitleforFaculty($clg, $page)['title'];
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['description'] = 'Top Ranked Hotel Management Institute Uttarakahand for BHMCT,BHM,DHMCT,DHM,Best Hotel Management Institute Uttarakhand, LeadingHotel Management Institute';
                $data_['keywords'] = 'Top Hotel Management Institute,Uttarakhand India, Haldwani, Nainital';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AIHM, AIAS';
            break;
            case 'fps':
                $data_['title'] = $this->getTitleforFaculty($clg, $page)['title'];
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['description'] = 'Highly rated Pharmacy Institute for B.Pharm, D. Pharm';
                $data_['keywords'] = 'Reputed college of Pharmacy, Ranked college of Pharmacy in Uttarakhand';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AIPS';
            break;

            case 'fe':
                $data_['title'] = $this->getTitleforFaculty($clg, $page)['title'];
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['description'] = 'Reputed private Institute in Nainital Uttarakhand offering course in Education i.e. B.Ed.';
                $data_['keywords'] = 'Best Private College In Uttarakhand, B. Ed., Education';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AIAS';
            break;
            
            case 'mentors':
                $data_['title'] = $this->getTitleforMentors($page)['title'];
                $data_['abstract'] = 'Top Institute of Northern India, Top Rated Institute of Uttarakhand';
                $data_['keywords'] = 'Best Mentors, Top Ranked Institute Uttarakhand,Best Institute Haldwani, Nainital';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = $this->getTitleforMentors($page)['desc_'];
            break;
            case 'placements':
                $data_['title'] = 'Amrapali Best Placement Institute in Haldwani, Uttarakhand';
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['keywords'] = 'Placements, Placed, Best placements';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'Amrapali known as the best placement institute near Dehradun, Uttarakhand with track record of 95% placements in most of its courses. Join Today!';
            break;
            case 'alumni':
                $data_['title'] = 'Amrapali Alumni Testimonials & Form | Best College in Nanital';
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['keywords'] = 'Alumni, Old Students, Students';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'See what our alumni say about the best professional institute of Nanital. Join Alumni connect Program to strengthen the relation.';
            break;
            case 'gallery':
                $data_['title'] = 'Life at Amrapali – Photo Gallery, Videos | Private Institute in Nanital';
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['keywords'] = 'Gallery, photo, album, life at amrapali';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'Check out all the latest events and activities images of all the courses in Amrapali – best private educational institute near Nanital, Uttarakhand. Join Today!';
            break;
            case 'contactus':
                $data_['title'] = 'Contact Us | Best Professional Institute of Nainital';
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['keywords'] = 'Contact us, phone, mobile, email, address';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'Looking for the Best Professional Institute near Nainital? Join Amrapali Group of Institutes. Contact us today for detailed information about our courses!';
            break;
            case 'anti-ragging':
                $data_['title'] = 'Anti Ragging Policy | Best Professional Institute of Nainital';
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['keywords'] = 'Anti ragging, open environment, secure environment';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'Amrapali strongly condemn any kind of ragging. We have an active and vigilant Anti Ragging enforcement team to protect students against this crime';
            break;
            case 'career':
                $data_['title'] = 'Careers and Jobs | Job Opportunities - Amrapali Institute';
                $data_['abstract'] = "Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand";
                $data_['keywords'] = 'Career, Recruitment, best place to work';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'Give a kick-start to your career with the leaders! Get your dream job at Amrapali Group of Institutes - the Best Private Educational Institute near Uttarakhand!';
            break;
            default:
                $data_['title'] = 'Amrapali Best Professional Institute in Nanital | Top Ranked Institutes';
                $data_['abstract'] = 'Completed 21 years of excellence, and is a higly rated group of Institutes of Uttarakhand';
                $data_['contact'] = 'office@amrapali.ac.in, query@amrapali.ac.in, admission@amrapali.ac.in';
                $data_['keywords'] = 'Best Private College In Uttarakhand, Amoungst Top Private Institute In Uttarakhand, Best Private Institute in Nainital, amongst Best Private Institute In India, amongst Top private college in India';
                $data_['distribution'] = 'local';
                $data_['author'] = 'AITS, AIHM, FCBM, AIPS, AIAS';
                $data_['description'] = 'Amrapali Group of Institutes is a top private Institute in Nainital Uttarakhand offering courses like B.Tech, BCA, BBA, B.Com (H), MBA, MCA, BHMCT, BHM, DHMCT, B.Pharm, D.Pharm, Polytechnic, 1 yr. Diploma and B.Ed.';
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
