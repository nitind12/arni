<style>
blockquote p{
    font-size:14px;
    line-height: 22px;
}

blockquote img{
    max-width:100px;
    margin: 0 10px;
    padding:0;
    border: 2px solid #bbbbbb;
    border-radius: 5px;
}
</style>
<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
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
                                        <li><a href="<?php echo site_url('agi')?>">Home</a></li>
                                        <li><a href="#">Alumni</a></li>
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
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content"> 
                                                <h3><a href="<?php echo base_url('assets/newsletters/footprints.pdf'); ?>" target="_blank"><i class="fa fa-cog fa-spin"></i> Footprints: Alumni Newsletter</a></h3>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/AnsulSanwal.jpg'?>" align="left">Do you know what it feels being where I am today.</p>
                                                    <p> Great, Simply gorgeous and great! Every little thing counts and AIHM has given me big richness of life through the undefeatable trait backed by knowledge. I owe every bit of my success to the great mentors of Amrapali who have helped to shape and design my career, MY LIFE!</p>
                                                    <p> A big thanks to all my teachers. The footsteps I follow were the hard work of my great teachers. </p>
                                                    <small>Anshul Sanwal, General Manager, The Lalit, Mumbai</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/JagdishTiwari.jpg'?>" align="left">As the years of knowledge and learning unfold I could feel the strength AIHM has in helping me carve a niche of my choice.</p>
                                                    <p> The day I joined AIHM I was not sure about my career horizons but in second year of my study itself I was able to decide about my future goals, for which I am thankful to my mentors at institute.</p>
                                                    <p> My words speak through my craft as I receive recognition in this field and grow. A humble thanks to Amrapali for kindling the zest to rise in me. Thank you respected mentors! </p>
                                                    <small>Jagdish Tiwari, Food & Beverage Manager, Etihad Airways, UAE</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/LalitMishra.jpg'?>" align="left">After four amazing years at AIHM, I felt confident, motivated and my carrier had a focused direction, and most importantly I had a strong portfolio. That strong portfolio helped me get accepted. </p>
                                                    <p> It was indeed a learning exposure and a sound practical knowledge which was imparted to me during my study years at Amrapali. I was chiseled by mentors and the technical skilled learnt polished my profile towards a strong portfolio.</p>
                                                    <p> What does Four Season mean to me now is the beginning of a long journey ahead.  </p>
                                                    <small>Lalit Mishra, Astt. Beverage Manager, Four Seasons Hotel- Bahrain</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/ManishMishra.jpg'?>" align="left">I would describe Amrapali as exciting and dynamic. The best thing about pursuing MBA program is the number of additional opportunities that are available. I was initially attracted by the school's reputation, and my career goals. </p>
                                                    <p> To any new student coming to Amrapali, I would say this: Throw yourself at every opportunity that comes your way. Opportunities make all the difference between getting what you want.</p>
                                                    <small>Manish Mishra, Sales Manager, Asia Petrochemicals Dubai</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/BhagwatiKandpal.jpg'?>" align="left">It was a great time we spent in Amrapali Group of Institutes while pursuing MBA. The institute has very wonderful faculty and they are very cooperative and campus environment is very positive. The department has made the sincere efforts to bring the best out of us. The days spent at Amrapali are the moments for the life time. </p>                                                    
                                                    <small>Bhagwati Kandpal, HR Executive, EQS Group</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/TusharSaluja.jpg'?>" align="left">Nothing can be as satisfying as writing a testimony for your own alma mater. Faculty of Commerce & Business Management at Amrapali is one of the best and is known for its excellence. It has all the best facilities under one roof - state of infrastructure, erudite faculty, professional teachers, well stocked libraries, good computer labs, sports area, and hostels with all amenities. I am proud to be an alumnus of Amrapali.</p>                                                    
                                                    <small>Tushar Saluja, Asst. Manager-Trading Auctions, Agri Bazaar</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/AnkitJoshi.jpg'?>" align="left">"Amrapali" gave me the platform to mould my future towards my desirable dream. It helped me in every possible way in taking out my possibilities for countering the practical professional world. The faculty members were very helpful throughout my MCA academic journey.</p>                                                    
                                                    <p>I am thankful to faculty members for providing the base and initial step in entering the professional world through placement support, which helped me in taking further growing steps in my life.</p>
                                                    <small>Ankit Joshi, Team Lead, Valtech</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/SavitaBisht.jpg'?>" align="left">I feel the kind of exposure we got from our Institute was exceptional.</p>                                                    
                                                    <p>The exposure was not only limited to the boundaries of our Institute but was global too which helped us realize and practice new technologies and processes. The expert ses s ions and training schedules gave us very good insight. All I can say is that the Institute gave me new perspective towards my career. As I take new strides in my career, I always remember my institute with gratitude. It gave me a strong foundation of concepts that come very handy in my corporate life. </p>
                                                    <small>Savita Bisht, Assistant System Engineer, TCS </small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/Aspandan.jpg'?>" align="left">I was indeed blessed to study at Amrapali. The ambiance was very conductive for learning. The campus is very big & beautiful. The staff, teachers are very nice & supportive. The Technical support I got from my Professors helped me to compete with the actual scenario of the software industry. The guest lectures by visiting faculty members helped me to expand my knowledge horizon.</p>                                                                                                        
                                                    <small>Aspandan, Escalation Manager, WIPRO Tech.</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/NiyatiShah.jpg'?>" align="left">The time spent in Amrapali has been one of the most cherished days of my life. Not only were the faculty members cooperative but also the ones giving us opportunities to excel in various fields. The learnings in Amrapali helped me to communicate, innovate, and collaborate in ways that enabled me to build a successful career and stand-out in my career path. I wish all the Amrapalians good luck for all their future endeavors.</p>                                                                    
                                                    <small>Niyati Shah, Associate Lead, Nagarro Inc.</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/JaySinghDasila.jpg'?>" align="left">I am working with Capgemini India Pvt. Ltd. as an Associate Consultant. I am a 2013 passout from Electronics & Communication Branch. I feel proud and obliged to be an alumnus of such an amazing Institute. The only thought which I follow and want to share is "Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time". Students should also focus on their personality and communication skills in addition to their academics.</p>                                                                    
                                                    <small>Jay Singh Dasila, Asssociate Consultant, Capgemini India Pvt. Ltd.</small>
                                                </blockquote>

                                                <blockquote>
                                                    <p><img src="<?php echo base_url().'assets/img/alumni/PoojaSinghal.jpg'?>" align="left">"When I reflect my four years in Amrapali Institute for the B.Tech degree (2008-12), I conclude that the experience not only made me a better person but also prepared me for great career opportunities. I thoroughly enjoyed my time with incredibly supportive classmates and professors. It was a wonderful time in life, and the best educational experience I've had."</p>                                                                    
                                                    <small>Pooja Singhal, Senior Software Engineer, IBM </small>
                                                </blockquote>
                                                <!--div class="row" style="margin-top:1em;">
                                                    <div class="col-sm-4" style="background:#98DBCC; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/shailenderBhatt.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">I chose to study at Amrapali Group of Institutes because I wanted to study at the highest level nearby my region & stretch my mind. I felt that college environment was very friendly starting from teachers to students. I can't ignore the highly cooperative administration. I would say that studying at Amrapali Institute has been one of the best experiences of my life. I have no hesitation in recommending people to come and study at this prestigious College to build a great future.</p>
                                                        <p><b><i>Shelendra Bhatt,<br> Portfolio Analyst, Microsoft Corp.<br>Alumnus, MBA</i></b></p>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#5BCEFF; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/sanjayDhyani.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">I spent four years studying at Amrapali and this was an absolutely unforgettable period in my life. I found welcoming classmates, engaged faculty, and a built-in community at AITS. My study experiences promoted close bonds, friendships, memories, and context for all we were learning in our classes back home</p>
                                                        <p><b><i>Sanjay Dhyani,<br> Customer Engineer- Server &amp; Storage, Hewlett Packard Enterprise, <br>Alumnus B.Tech</i></b></p>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#DDDDBB; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/hemantRawat.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">I am thankful to Amrapali for what I am today. Words can't describe everything that I learnt here. Discipline, fun, confidence, taking fearless decisions and enjoying each moment of the day were few of the salient features of my stay at the institute.</p>
                                                        <p><b><i>Hemant Rawat,<br> Engineer, Client Services Gemalto,<br> Alumnus B.Tech</i></b></p>
                                                    </div>
                                                </div><!--/.row-->

                                                <!--div class="row" style="margin-top:1em;">
                                                    <div class="col-sm-4" style="background:#5BCEFF; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/sagarJoshi.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">It gives me complete satisfaction to be a part of AIHM which is an incredible blend of professionalism, integrity, and culture. It's a pleasure to study under the guidance of renowned faculty with rich experience which gives us platform for successful career.</p>
                                                        <p><b><i><br>Sagar Joshi,<br> Housekeeping Associate, The Hilton- Waldorf Astoria, Dubai Palm Jumeriah<br>Alumnus HM</i></b></p>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#DDDDBB; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/yaminiTewari.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">Amrapali has given me everything I wanted; from good education, excellent seminars by speakers from eminent institutes, an amazing infrastructure and sports facilities, not to forget the memories of SPANDAN, the annual fest. It's my Alma Mater!! I had loved being a part of it.</p>
                                                        <p><b><i>Yamini Tewari,<br>HR Support, Accenture<br>Alumna, MBA</i></b></p>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#98DBCC; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/amitKumar.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">The success I have achieved in my career is attributable to my Alma Mater, as it laid the foundation of what I am today. The environment at Amrapali is one of the best places to train oneself for the rigors of professional life that lie ahead. Learning was always a fun at Amrapali…</p>
                                                        <p><b><i>Amit Kumar,<br>IT Officer, Union Bank of India<br>Alumnus B.Tech.</i></b></p>
                                                    </div>

                                                </div><!--/.row-->

                                                <!--div class="row" style="margin-top:1em;">
                                                    <div class="col-sm-4" style="background:#98DBCC; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/amitPandey.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">My experience is awesome at AIMCA. All the people like management, teachers and students were very supportive. AIMCA has given us everything we wanted right from good education, technical training, an amazing infrastructure and sports facilities. My best wishes to the AIMCA & I am sure, AIMCA will do much better in future....”</p>
                                                        <p><b><i>Amit Pandey<br> Senior Software Engineer,Fidelity Information Services (FIS), Gurgaon.<br>Alumnus, BCA & MCA</i></b></p>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#5BCEFF; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/vineetPant.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">"I was indeed blessed to study at AIMCA. The ambiance was very conductive for learning. The campus is very big & beautiful. The staff, teachers are very nice & supportive. The Technical support I got from my Professors helped me to compete with the actual scenario of the software industry. The guest lectures by visiting faculties helped me to expand my knowledge horizon.”</p>
                                                        <p><b><i>Vineet Pant<br>Senior Software Enginer, Aricent Technologies Bangalore<br>Alumnus, MCA</i></b></p>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#DDDDBB; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/manishPodiyal.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">The kind of exposure we got from our Institute was Alumnus, MCA phenomenal. Education makes the base stronger and I am thankful to AIMCA for providing great quality education which has played a very important role in my professional growth. All I can say is that the Institute gave us third eye to see how world is moving and where we can position ourselves globally.</p>
                                                        <p><b><i>Manish Podiyal,<br> Senior Software Enginer, SmartData Enterprises, Chandigarh<br>Alumnus, BCA & MCA</i></b></p>
                                                    </div>
                                                </div><!--/.row-->

                                                <!--div class="row" style="margin-top:1em;">
                                                    <div class="col-sm-4" style="background:#5BCEFF; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/ChandraShekhar.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">A new academic year begins with new energy and vibrant faces on the campus. I want to give a small  message to every individual who joins AIHM  that here you will get ample opportunities to explore and develop yourself. The priceless knowledge that I imbibed in AIHM  is my greatest asset. Thanks a lot to all my “GURUS”. This college has a mesmerizing environment, that one feels comfortable the moment he/she enters the college.</p>
                                                        <p><b><i><br>Chandra Shekhar<br> J W Marriott, New Delhi<br>Alumnus, HM</i></b></p>
                                                    </div>
                                                    
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#5BCEFF; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/sudhirSangwan.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">One of the best times that I had – from every single perspective – academics, friends, and hanging out - The whole experience. Maybe that’s the killer combination that makes it work in the long run. It’s not a unidirectional experience, it‘s multi faceted.</p>
                                                        <p><b><i><br>Sudhir Sangwan<br> Astt. Food & Beverage Manager,The Hilton-Jaipur<br>Alumnus, HM</i></b></p>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-3" style="background:#5BCEFF; border-radius: 10px; padding: 5px;">
                                                        <p align="justify"><img align="left" hspace="5px" vspace="5px" class="img-circle" src="<?PHP echo base_url('assets/img/alumni/TanujaKabdawal.jpg'); ?>" alt="..." style="max-width:150px;max-height: 150px;">Everyone says college life is the best part of the life and I came to know this when I joined AIHM. This is the place where I learned a lot not only related to the syllabus but also about how to be good person. The teachers are very helpful and they always supported and guided me on the right path and helped me in taking some important decisions for my future. It was the best part of my life and wish everyone have such a nice experience.</p>
                                                        <p><b><i><br>Tanuja Kabdawal<br> The Leela Palace,  Bengaluru<br>Alumnus, HM</i></b></p>
                                                    </div>
                                                </div><!--/.row-->
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->
                                    
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
<!--/#title-->