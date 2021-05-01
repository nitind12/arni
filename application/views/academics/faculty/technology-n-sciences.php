
<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header">
                                        <h1><?php echo $title; ?></h1>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url('Agi');?>">Home</a></li>
                                        <li><a href="#">Academics</a></li>
                                        <li class="active"><?php echo $title; ?></li>
                                    </ol>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>


                    <div class="container">
                        <div class="content-wrapper">
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-xs-12 col-md-9 col-sm-8">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>                                         

                                            <header class="entry-header">                                                    
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->                                                

                                            <div class="entry-content" style="overflow: hidden">
                                                <img src="<?php echo base_url('assets/img/tech.jpg'); ?>" class="img-responsive " alt=""> 
                                                <p>&nbsp;</p>
                                                    <h3>Courses Offered</h3>
                                                    <p>
                                                        <div class="col-sm-12">
                                                            <ul class="check-square">
                                                                <li>Computer Science &amp; Engineering [<b>CSE</b>]</li>
                                                                <li>Mechanical Engineering [<b>ME</b>]</li>
                                                                <li>Electronics &amp; Communications Engineering [<b>ECE</b>]</li>
                                                                <li>Electrical &amp; Electronics Engineering [<b>EEE</b>]</li>
                                                                <li>Masters of Computer Applications[<b>MCA</b>]</li>
                                                                <li>Bachelor of Computer Applications [<b>BCA</b>]</li>
                                                            </ul>
                                                        </div>
                                                    </p>
                                                    <p style="clear: both">&nbsp;</p>
                                                <h2 class="panel-title">ENGINEERING BEYOND IDEAS</h2>                                                
                                                <p style="margin-top: 10px;">
                                                    Faculty of Technology & Sciences is a leader in engineering education and research, attracting some of the brightest minds. With a strong foundation built on innovation, research opportunities and entrepreneurial intent, we produce students that are sought after by renowned companies.
                                                </p>
                                                <p>
                                                    You will be empowered from the very start of your education at Amrapali. All budding engineers in computer science, electrical, mechanical and electronics at Faculty of Technology & Sciences are driven by unanswered questions and passionate about new discoveries. 
                                                </p>
                                                <p>Develop your skills first-hand in state-of-the-art facilities using real world processes and technology. Learn and get trained from the best mentors in the region.</p>
                                                <p> Faculty of Technology & Sciences combines best engineering programmes with hands-on learning that takes students beyond the classroom. </p>
                                                <h3>The Difference</h3>
                                                <style>
                                                    .bult{
                                                        font-weight: bold;
                                                        font-color: #900000;
                                                        margin-left: 5px;
                                                        margin-right: 5px;
                                                        float: left;
                                                        width: 25px;
                                                        border: #ff0000 dotted 0px;
                                                    }
                                                    .list-items{
                                                        float: left;
                                                        overflow: hidden;
                                                        width: 80%;
                                                        border: #0000ff dotted 0px;
                                                    }
                                                </style>
                                                <?php $diff = Array(
                                                        '20 years of excellence',
                                                        'Experienced Faculty and Trainers',
                                                        'Strong Alumni Community',
                                                        'Summer and Winter Internship to acquire practical experience',
                                                        'Diverse employment across country and abroad',
                                                        'Rich Software library with Advanced Labs',
                                                        'Special Training on new age Technologies',
                                                        'Personality Development Classes for grooming the student and making them ready for employment',
                                                        'Specialised project works in upcoming technology providing students exposure to industry oriented challenges',
                                                        'Hands-on experience through industrial training in reputed organisations',
                                                        'Expert sessions by renowned academicians and professional trainers',
                                                        'Exposure to various workshop, in house training sessions, webinars, seminars, video conferencing sessions with experts',
                                                        'Exposure to various inter institute competitions, skill India competitions, MSME projects',
                                                        'Exposure to Rich NPTEL Repository',
                                                        'Focus on SWAYAM and MOOCs platform',
                                                        'Environmental Friendly infrastructure'
                                                    );
                                                ?>
                                                <p>
                                                        <?php for($i=0; $i<count($diff); $i++){?>
                                                        <div class="bult">&#8608;</div><div class="list-items"><?php echo $diff[$i];?></div>
                                                        <div style="clear: both; padding: 1px"></div>
                                                        <?php } ?>
                                                </p>
                                                <p>
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 30px;">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    Computer Science &amp; Engineering (CSE)
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <p>
                                                                    The Department of Computer Science and Engineering conducts an undergraduate engineering degree programme, B. Tech. (CSE). Our intention is to offer quality higher education in the field of engineering to worthy young students as well as to meet the huge demand for qualified specialists in Computer Science and Engineering. The department has expertise in all the core areas of computer science through its faculty members who are renowned for their research activities and offers state-of-the-art facilities to students for carrying out projects in core areas of Computer Science and related areas like Computer Graphics, Computer Networks, Distributed Systems, Digital Hardware Design, Artificial Intelligence etc.
                                                                </p>
                                                                <p>
                                                                    The curriculum followed in the department lays stress on project work, emphasizes independent thinking and encourages students to get involved industry oriented projects with clear benefits. Students thus develop a broad base to pursue interests and develop expertise in related areas like Mathematics, Communications, Signal Processing, Robotics, Management etc., in addition to Computer Science.
                                                                </p>
                                                                <p>
                                                                    We prepare students for the future by giving them research orientation in areas such as Algorithm, Computational Geometry, Mobile Robotics, Artificial Intelligence, Speech Processing, Natural Language Processing, Image Processing, Software Engineering, Formal verification, Computer Systems &amp; Security, Networks and many others. Availability of facilities such as Hacking Club are of great help to students in being technically prepared to succeed in their careers.
                                                                </p>                                                                        
                                                                <b>Departmental Laboratories</b>
                                                                <ol>
                                                                    <li class="myli_for_page">Advanced Computer Architecture</li>
                                                                    <li class="myli_for_page">Distributed Systems</li>
                                                                    <li class="myli_for_page">Computer Baed Numerical and Statistical Techniques</li>
                                                                    <li class="myli_for_page">Unix &amp; Shell Programming</li>
                                                                    <li class="myli_for_page">Compiler Design</li>
                                                                    <li class="myli_for_page">Computer Graphics</li>
                                                                    <li class="myli_for_page">Design and Analysis of Algorithms</li>
                                                                    <li class="myli_for_page">Data Structure using C</li>
                                                                    <li class="myli_for_page">Introduction to Web Technology</li>
                                                                    <li class="myli_for_page">Object Oriented Programming using C++</li>
                                                                    <li class="myli_for_page">Database Management Systems</li>
                                                                    <li class="myli_for_page">Operating Systems</li>
                                                                    <li class="myli_for_page">Artificial Intelligence and Computer Networks</li>
                                                                    <li class="myli_for_page">Java</li>
                                                                </ol>                                                                      
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingTwo">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Mechanical Engineering (ME)
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <p>
                                                                    Mechanical Engineering is synonymous to industrial Revolution that started after the invention of Steam Engine by James Watt. Wright brothers invented the plane that revolutionized the aviation industry. It was the industrial revolution that brought prosperity and comforts to the people. From pins to planes including commercial and fighter planes, from simple agricultural equipment’s khurpies to tractors, from bullock carts to all sorts of modern cars &amp; trains and from simple boats to big ships &amp; submarines are all creations of Mechanical Engineers. All the modern inventions such as rockets, space vehicles, multi-task missiles, battle tanks, sophisticated guns, robots, all types of power plants, air conditioners etc, are all creations of Mechanical Engineers. In every industry, the need of Mechanical Engineers varies from 40% to 80%. Whatever product we choose, whether Mechanical, Electrical or Electronics, a major contribution of Mechanical Engineering is involved. As a result of a large amount of involvement of Mechanical Engineers in various industries and organizations, the branch of Mechanical Engineering is regarded as Ever Green Branch of Engineering.
                                                                </p>
                                                                <p>
                                                                    The Department offers course leading to E. Tech. &amp; Diploma in Mechanical Engineering. The Mechanical Engineering discipline is designed to provide analytical and experimental skills required for a wide variety of careers in Mechanical Engineering and also in others multi-disciplinary areas like Materials Engineering, Production Engineering, Industrial Engineering, Environmental pollution control, Computer sciences, Robotics and Management. The Department has built up all the facilities required for imparting excellent training to meet the challenges of the 21st century and has taken up the challenge to meet complex technological needs of the globe.
                                                                </p>
                                                                <p>
                                                                    The faculty actively participates in sponsored research and consultancy work, seminars/conferences and short-term courses. The teaching and research programs in the department are organized according to both disciplinary and inter-disciplinary themes. We cover all the core disciplinary areas of mechanical including Production Engineering, Design Engineering, Thermal Engineering, Robotics etc.
                                                                </p>
                                                                <p>
                                                                    The department has state of the art laboratories and workshop facilities with modern sophisticated equipment’s to give practical exposure to the students and carry out research in areas related to mechanical and industrial engineering. Following are the major laboratories.
                                                                </p>                                                                       
                                                                <b>Departmental Laboratories</b>
                                                                <ol>
                                                                    <li class="myli_for_page">Applied Thermodynamics Lab</li>
                                                                    <li class="myli_for_page">Automobile Engineering Lab</li>
                                                                    <li class="myli_for_page">Basic Civil Engineering Lab</li>
                                                                    <li class="myli_for_page">Basic Mechanical Engineering Lab</li>
                                                                    <li class="myli_for_page">Computer Aided Manufacturing Lab</li>
                                                                    <li class="myli_for_page">Engineering Drawing Lab</li>
                                                                    <li class="myli_for_page">Engineering Mechanics Lab</li>
                                                                    <li class="myli_for_page">Fluid Machinery Lab</li>
                                                                    <li class="myli_for_page">Fluid Mechanics Lab</li>
                                                                    <li class="myli_for_page">Heat &amp; Mass Transfer Lab</li>
                                                                    <li class="myli_for_page">Machine Drawing Lab</li>
                                                                    <li class="myli_for_page">Manufacturing Science Lab</li>
                                                                    <li class="myli_for_page">Material Science and Testing Lab</li>
                                                                    <li class="myli_for_page">Measurement and Metrology Lab</li>
                                                                    <li class="myli_for_page">Refrigeration &amp; Air Conditioning Lab</li>
                                                                    <li class="myli_for_page">Theory of Machines Lab</li>
                                                                    <li class="myli_for_page">Workshop</li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingThree">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    Electronics and Communications Engineering (ECE)
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <p>
                                                                    The Department of Electronics and Communication Engineering offers premium professional training leading to an undergraduate engineering degree. B. Tech. (ECE), while exposing students to modern developments in the fields of Electronics and Communication, Possessing excellent infrastructure that is teamed with very capable and motivated faculty members, the department offers an excellent opportunity for budding professionals to hone their skills, to enable them to outperform their competitors.
                                                                </p>
                                                                <p>
                                                                    The curriculum followed in the department has been designed to provide insights into concepts of digital processing of information for efficient communication, since digital electronics circuits have grown enormously in functionality in modern times. The syllabus provides balanced coverage of theory and practice of modern electronics, featuring courses such as Communication Engineering, DSP Architectures and Systems, Communication Switching Systems, Electronics Devices and Circuits, Microwave Components and Circuits, Satellite Communication, Photonic Devices and Systems, VLSI, Nano Technology, Wireless Communication etc. An exclusive computing facility includes state-of-the-art computer systems and software tools like PSPICE, CAD, Synthesis Tools and other allied packages.
                                                                </p>
                                                                <p>
                                                                    The department constantly strives to involve students in various co-curricular and extra-curricular activities. Of particular note is the popular Robotics Club, which provides students with a unique platform for overall technical development in the field of Electronics and Communications.
                                                                </p>
                                                                <b>Departmental Laboratories</b>
                                                                <ol>
                                                                    <li class="myli_for_page">Analog Integrated Circuits</li>
                                                                    <li class="myli_for_page">Analog Communication</li>
                                                                    <li class="myli_for_page">Basic Electronics</li>
                                                                    <li class="myli_for_page">Digital Electronics</li>
                                                                    <li class="myli_for_page">Digital Communication</li>
                                                                    <li class="myli_for_page">Digital Signal Processing</li>
                                                                    <li class="myli_for_page">Microwave</li>
                                                                    <li class="myli_for_page">Optical Fibre Communication</li>
                                                                    <li class="myli_for_page">Printed Circuit Board</li>
                                                                    <li class="myli_for_page">Simulation</li>
                                                                    <li class="myli_for_page">Electronic Devices and Circuits</li>
                                                                    <li class="myli_for_page">Computer Aided Design</li>
                                                                </ol> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingFour">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    Electrical and Electronics Engineering (EEE)
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                            <div class="panel-body">
                                                                <p>
                                                                    Electrical and Electronics Engineering is one of the largest departments of AITS, which offers diploma in Engineering and B. Tech in Electrical and Electronics Engineering. The department has a rich tradition of teaching and research and is widely recognized to be a pioneer in Electrical and Electronics Engineering in Uttarakhand. The department’s vision is to impart the most up to date training and quality knowledge. The department provides the best of both core branches of Electrical Engineering and Electronics Engineering. The department has established itself as a frontier of knowledge in many areas like energy studies, electrical drives, high voltage engineering, single processing, bio medical instrumentation, power electronics etc. The department is committed to provide the student with a stimulating and rewarding learning experience with the end result of industry ready individuals with high technical knowhow.
                                                                </p>
                                                                <p>
                                                                    The department has a blend of highly qualified and dynamic faculty members, many of whom possess rich experience in academics and industry. The faculty members are dedicated, constantly striving to attain high standards of teaching and work towards creating research orientation among students. Keeping up with modern practices, the department exposes students to cutting edge projects and regular industrial visits. Students are kept update with latest technical development through guest lectures and online courses of NPTEL at regular intervals. To convert and engineering student into a dynamic professional the department has 03 socio-technical clubs which works closely with the modern trends in industry namely: Club Grooming, Kalam Memorial Diligent Club and Fanatics Students Club.
                                                                </p>
                                                                <p>
                                                                    The department constantly strives to involve students in various co-curricular and extra-curricular activities. Of particular note is the popular Robotics Club, which provides students with a unique platform for overall technical development in the field of Electronics and Communications.
                                                                </p>
                                                                <b>Departmental Laboratories</b>
                                                                <ol>
                                                                    <li class="myli_for_page">Electrical Drives</li>
                                                                    <li class="myli_for_page">Power System</li>
                                                                    <li class="myli_for_page">Basic Electrical</li>
                                                                    <li class="myli_for_page">Control System</li>
                                                                    <li class="myli_for_page">Electrical Workshop</li>
                                                                    <li class="myli_for_page">Electromechanical Energy Conversion - I</li>
                                                                    <li class="myli_for_page">Electromechanical Energy Conversion – II</li>
                                                                    <li class="myli_for_page">Microprocessor</li>
                                                                    <li class="myli_for_page">Network &amp; Measurement</li>
                                                                    <li class="myli_for_page">Power Electronics</li>
                                                                    <li class="myli_for_page">Power Simulation</li>
                                                                    <li class="myli_for_page">Workshop Technology</li>
                                                                    <li class="myli_for_page">Engineering Drawing</li>
                                                                </ol> 
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingFive">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                                                    Masters of Computer Applications [<b>MCA</b>]
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                            <div class="panel-body">
                                                                <p>
                                                                    Master of Computer Applications (MCA) is a two-year post-graduate programme with curriculum primarily based on the development of application software in diverse areas. The MCA program focuses on providing a sound theoretical background as well as good practical exposure to students in the relevant areas. It is intended to provide a modern, industry oriented education in applied computer science. It aims at producing trained professionals who can successfully meet the demands of the information technology industry. It covers various aspects of computational theory, programming, algorithm design and optimisation, network and database management, mobile technologies, electronics, mathematics, probability, statistics, accounting, finance, etc.
                                                                </p>
                                                                <p>
                                                                    The programme provides the latest industrial elective courses and project work. It is inclined more towards Application Development and, thus, lays more emphasis on the latest programming language and tools to develop better and faster applications. This programme equips students with the knowledge of the development of application software for diverse fields to solve specific problems for the end users or clients.
                                                                </p>
                                                                <p>
                                                                    In addition, the programme also emphasises upon planning, designing and building of complex commercial application software and system software. The financial security, freedom to relocate and the lifelong prospect of learning make this programme an ideal career for computer science enthusiasts.
                                                                </p>
                                                                <p>
                                                                    <b>This course is for individuals who...</b> are passionate, diligent and determined to make a career in the IT (Information Technology) field. It is for candidates who possess the ability to accept changes and immediately look for creative solutions.
                                                                </p>
                                                                <p>
                                                                    <b>Students who are looking for...</b> a career with exceptional prospective fields and challenging roles in a futuristic industry must opt for this programme.
                                                                </p>
                                                                
                                                                <div class="col-xs-12 col-md-12 col-sm-12" align="left">
                                                                        <h2 class="wow fadeInDown" align="left">Additional Certifications are provided in</h2>
                                                                        <ul class="check-circle" style="padding-left: .6em;">
                                                                            <li>Soft Computing</li>
                                                                            <li>Machine Learning</li>
                                                                            <li>MData Analytics</li>
                                                                            <li>IoT</li>
                                                                            <li>Mobile Application Development (Android & IOS)</li>
                                                                        </ul>
                                                                </div><!-- /.col-md-3 -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading panel-heading-link" role="tab" id="headingSeven">
                                                            <h2 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseFour">
                                                                    Bachelor of Computer Applications [<b>BCA</b>]
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                            <div class="panel-body">
                                                                <p>
                                                                    <b>We differentiate our budding graduates through:</b>
                                                                    <div class="col-sm-12">
                                                                        <ul class="check-circle">
                                                                            <li>Dedicated sessions for international certification from Microsoft, Red Hat, Oracle, CISCO, IBM etc</li>
                                                                            <li>Practical training and projects to cover Database administration, System maintenance, Java, C# & .NET framework, Android & IOS application, Security analysis etc.</li>
                                                                            <li>Exhaustive pre placement and soft skill training by trained experts for proper job placement.</li>
                                                                        </ul>
                                                                    </div>
                                                                </p>
                                                                <p>&nbsp;</p>
                                                                <p>
                                                                    We are living in the era of Information Technology. All most all parts of the human life is heavily dependent on Computer Science & Application e.g. Administration, Defense , Public Safety, Accounting, Bank ing, Spac e Te chnology, Education, Entertainment, Manufacturing Industry, Medical Science etc. 
                                                                </p>
                                                                <p>
                                                                    A computer application professional have a lots of options to work in various Government & Public Sector Organizations as Information Technology Officer, Software Programmer, System Administrator, Security Analyst. Apart from Government sector, private sector also offers all the above roles and position to Computer Application professionals with lucrative salaries. 
                                                                </p>
                                                                <div class="col-xs-12 col-md-12 col-sm-12" align="left">
                                                                        <h2 class="wow fadeInDown" align="left">Provide Certifications in</h2>
                                                                        <ul class="check-circle" style="padding-left: .6em;">
                                                                            <li>Advanced Office Automation</li>
                                                                            <li>Responsive Web Application Development</li>
                                                                            <li>Graphics & Animation</li>
                                                                        </ul>
                                                                </div><!-- /.col-md-3 -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                                                                
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                        <?php $this->load->view('templates/quick-links'); ?>                                            
                                        <?php $this->load->view('templates/alumni-img-scroll'); ?>
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->