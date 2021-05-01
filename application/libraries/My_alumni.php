<?php

class My_alumni{
	function fetch_all_alumni(){
		$d = array();
		$ftca = $this->fetch_ftca_alumni();
		$fhm  = $this->fetch_fhm_alumni();
		//$fps  = $this->fetch_fps_student();
		$fcbm = $this->fetch_fcbm_alumni();
		$d = array_merge($fhm, $ftca, $fcbm);


		$alumni  = array_column($d, 'alumni');
		$designation = array_column($d, 'designation');
		array_multisort($alumni, SORT_ASC, $designation, SORT_ASC, $d);
		return $d;
	}
	function fetch_ftca_alumni(){
		return array (
			[
				'speak' => "The time spent in Amrapali has been one of the most cherished days of my life. Not only were the faculty members cooperative but also gave us opportunities to excel in various fields. The learning’s  in Amrapali helped me to communicate, innovate and collaborate in ways that enabled me to build a successful career and stand-out in my career path. I wish all the Amrapalians good luck for all their future endeavors.",
				'pic' => 'NiyatiShah.jpg',
				'alumni' => 'Niyati Shah',
				'designation' => 'Associate Lead',
				'company' => 'Nagarro Inc',
				'class' => 'alumni_1'
			],
			[
				'speak' => "I was accepted into Amrapali Institute of Technology & Sciences back in 2010. I was there to pursue my B.Tech in Computer Science & Engineering. However, when I had to leave the eminentinstitutionin2014,I was not just taking back a degree with me, but some wonderful experiences and plethora of learning. The faculty of AITS was cutting-edge and so was every other professor across the wide Amrapali spectrum. A special mention to the management &placement teams, who have been instrumental in shaping the life and success of an <b>Amrapalian</b>",
				'pic' => 'ShivamDuttSharma.jpg',
				'alumni' => 'Shivam Dutt Sharma',
				'designation' => 'Deputy Manager',
				'company' => 'Online Products Ferns and Petals',
				'class' => 'alumni_2'
			],
			[
				'speak' => "I am Yashaswi from the 2014 batch, B.Tech (Electricals and Electronics). Having changed so many organizations I feel that all of us has a unique place in the world and I feel my college helped me a lot in recognising it. The faculty members were very supportive and motivating with years of experience and tenderness towards students. I often recall the big campus and life there. I highly recommend this college for studies and holistic development.",
				'pic' => 'YashaswiBudhani.jpg',
				'alumni' => 'Yashaswi  Budhani',
				'designation' => 'Energy Analyst',
				'company' => 'Sterling and Wilson',
				'class' => 'alumni_1'
			],
			[
				'speak' => "Amrapali gave me the platform to mould my future towards my desirable dream. It helped me in every possible way in taking out my possibilities for countering the practical professional world. The faculty members were very helpful throughout my MCA academic journey. <br> I am thankful to faculty members for providing the base and initial step in entering the professional world through placement support, which helped me in taking further growing steps in my life.",
				'pic' => 'AnkitJoshi.jpg',
				'alumni' => 'Ankit Joshi',
				'designation' => 'Team Lead',
				'company' => 'Valtech',
				'class' => 'alumni_1'
			],
			[
				'speak' => "I feel the kind of exposure we got from our Institute was exceptional. The exposure was not only limited to the boundaries of our Institute but was global too which helped us realize and practice new technologies and processes. The expert sessions and training schedules gave us very good insight .All I can say is that the Institute gave me new perspective towards my career. As I take new strides in my career, I always remember my institute with gratitude. It gave me a strong foundation of concepts that come very handy in my corporate life.",
				'pic' => 'PoonamMehtolia.jpg',
				'alumni' => 'Poonam Mahtolia',
				'designation' => 'System Administrator',
				'company' => 'TCS',
				'class' => 'alumni_2'
			],
			[
				'speak' => "I was indeed blessed to study at Amrapali. The ambience was very conducive for learning. The campus is very big & beautiful. The staff, teachers are very nice & supportive. The Technical support I got from my Professors helped me to compete with the actual scenario of the software industry. The guest lectures by visiting faculty members helped me to expand my knowledge horizon.",
				'pic' => 'Aspandan.jpg',
				'alumni' => 'Aspandan Srivastava',
				'designation' => 'Escalation Manager',
				'company' => 'WIPRO Tech',
				'class' => 'alumni_1'
			],
		);
	}

	function fetch_fcbm_alumni(){
		return array (
			[
				'speak' => "I would describe Amrapali as exciting and dynamic. The best thing about pursuing MBA program is the number of additional opportunities that are available. I was initially attracted by the Institute reputation and my career goals.<br>To any new student coming to Amrapali, I would say this: Throw yourself at every opportunity that comes your way. Opportunities make all the difference between getting what you want.",
				'pic' => 'sample.jpg',
				'alumni' => 'Himanshu Bhatt',
				'designation' => 'Regional Credit Manager-North India',
				'company' => 'Carestream Health India Pvt Ltd Delhi',
				'class' => 'alumni_1'
			],
			[
				'speak' => "It was a great time we spent in Amrapali Group of Institutes while pursuing MBA. The institute has very wonderful faculty and they are very cooperative and campus environment is very positive. The department has made the sincere efforts to bring the best out of us. The days spent at Amrapali are the moments for the life time.",
				'pic' => 'ramneetsandhu.jpg',
				'alumni' => 'Ramneet Sandhu',
				'designation' => 'Manager, Learning and Development',
				'company' => 'Future Generali India, Mumbai',
				'class' => 'alumni_2'
			],
			[
				'speak' => "Nothing can be as satisfying as writing a testimony for your own alma mater. Faculty of Commerce & Business Management at Amrapali is one of the best and is known for its excellence. It has the best facilities under one roof - state of infrastructure, erudite faculty, professional teachers, well stocked libraries, good computer labs, sports area, and hostels with all amenities. I am proud to be an alumnus of Amrapali.",
				'pic' => 'sample.jpg',
				'alumni' => 'Shilpa Chaudhary',
				'designation' => 'Category Manager',
				'company' => 'Snapdeal.com, Gurgaon',
				'class' => 'alumni_1'
			],
		);
	}

	function fetch_fhm_alumni(){
		return array (
			[
				'speak' => "Do you know what it feels being where I am today Great, Simply gorgeous and great! Every little thing counts and AIHM has given me big richness of life through the undefeatable trait backed by knowledge. I owe every bit of my success to the great mentors of Amrapali who have helped to shape and design my career, MY LIFE! <br> A big thanks to all my teachers. The footsteps I follow were the hard work of my great teachers.",
				'pic' => 'AnsulSanwal.jpg',
				'alumni' => 'Anshul Sanwal',
				'designation' => 'General Manager',
				'company' => 'The Lalit Hotels',
				'class' => 'alumni_1'
			],
			[
				'speak' => "As the years of knowledge and learning unfold I could feel the strength AIHM has in helping me carve a niche of my choice. <br> The day I joined AIHM I was not sure about my career horizons but in second year of my study itself I was able to decide about my future goals, for which I am thankful to my mentors at institute. <br> My words speak through my craft as I receive recognition in this field and grow. A humble thanks to Amrapali for kindling the zest to rise in me. <br> Thank you respected mentors!",
				'pic' => 'JagdishTiwari.jpg',
				'alumni' => 'Jagdish Tiwari',
				'designation' => 'Food & Beverage Manager',
				'company' => 'Etihad Airways, UAE',
				'class' => 'alumni_2'
			],
			[
				'speak' => "After four amazing years at AIHM, I felt condent, motivated and my carrier had a focused direction, and most importantly I had a strong portfolio. That strong portfolio helped me get accepted. <br> It was indeed a learning exposure and a sound practical knowledge which was imparted to me during my study years at Amrapali. I was chiseled by mentors and the technical skilled learnt polished my profile towards a strong portfolio. <br> What does Four Season mean to me now is the beginning of a long journey ahead.",
				'pic' => 'LalitMishra.jpg',
				'alumni' => 'Lalit Mishra',
				'designation' => 'Astt. Beverage Manager',
				'company' => 'Four Seasons Hotel, Bahrain',
				'class' => 'alumni_1'
			],
			[
				'speak' => "I am very proud to have been a part of Amrapali family & also proudly representing it to the world. We had lot of fun and memorable moments out there. <br> What I am today is because of my hard-work, passion & dedication but not to forget that this can never be possible if you did not have a strong support & education line which I have got from Amrapali. <br> I have learnt professionalism and world skills through the various practical and training sessions conducted by my teachers and industry experts. My best wishes to everyone out there.",
				'pic' => 'sana.jpg',
				'alumni' => 'Sana Salim',
				'designation' => 'Duty Manager',
				'company' => 'Anantara Al Jabal Al Akhdar Resort, Muscat',
				'class' => 'alumni_2'
			],
			[
				'speak' => "My college days at AIHM are unforgettable and in fact those days are most amazing days of my life. I have learnt professionalism and world skills through the various practical and training sessions conducted by my teachers and industry experts. I realize the importance of wonders that teamwork would achieve. Now I am proudly representing it to the world.  This came possible due to the strong support & education line which I have got from Amrapali. My best wishes to everyone at Amrapali.",
				'pic' => 'rajni.jpg',
				'alumni' => 'Rajni Bisht',
				'designation' => 'P&O Cruises',
				'company' => 'Southampton, U.K',
				'class' => 'alumni_1'
			],
			[
				'speak' => "Having started working with Hospitality Industry I have realized the armour AIHM  has provided me to withstand any situation. The domain knowledge and industry exposure provided at my Institute ensured that I am on top of my game now. <br>I am really proud of my alma-mater because of which I got an opportunity where I rub shoulders with veterans in Industry. Fantastic education in a caring and thoughtful community, that is what makes this great Institution different from others.",
				'pic' => 'sudhir.jpg',
				'alumni' => 'Sudhir Kumar',
				'designation' => 'Food & Beverage Manager',
				'company' => 'Hilton, Gurugram',
				'class' => 'alumni_2'
			],
			[
				'speak' => "Everyone says college life is the best part of the life and I came to know this when I joined Amrapali. This is the place where I learned a lot not only related to the syllabus but also about how to be a good person. <br> The teachers trained me to be industry fit and were very helpful and they always supported and guided me on the right path and helped me in taking some important decisions for my future. <br> It was the best part of my life and wish everyone should have such a nice experience.",
				'pic' => 'apeksha.jpg',
				'alumni' => 'Apeksha Amith Kumar',
				'designation' => 'Manager, Learning & Development',
				'company' => 'The Hilton',
				'class' => 'alumni_1'
			],
		);
	}

	function fetch_fps_alumni(){

	}

	function fetch_fps_student(){
		return array (
			[
				'speak' => "FPS has an edge over other pharmacy colleges in the region with regards to its excellent location, serene surroundings, infrastructure, smart classes, wifi and well equipped laboratories. Faculty members are dedicated, helpful and provide mentorship to each student . I am extremely proud to be a part of Amrapali family.",
				'pic' => 'alishakesarwani.jpg',
				'alumni' => 'Alisha Kesarwani',
				'designation' => 'BPharm  2nd Sem',
				'company' => '',
				'class' => 'alumni_1'
			],
			[
				'speak' => "FPS under the flagship of Amrapali Group of Institutes provides students ample opportunities to develop their talents, leadership qualities and social responsibility through various extracurricular and co curricular activities along with sound academics.",
				'pic' => 'shivaninegi.jpg',
				'alumni' => 'Shivani Negi',
				'designation' => 'BPharm  2nd Sem',
				'company' => '',
				'class' => 'alumni_2'
			],
			[
				'speak' => "FPS provides   an all round experience. The practical sessions were much more emphasized upon, which has helped me in my studies.",
				'pic' => 'kesleybery.jpg',
				'alumni' => 'kesley Bery',
				'designation' => 'Diploma first year',
				'company' => '',
				'class' => 'alumni_1'
			],
			[
				'speak' => "FPS  is giving  me exposure to interesting people, situations, and challenged me in ways that are  new to me. The curriculum, the faculty, and the students provided the environment to stimulate my learning.",
				'pic' => 'himanibhatt.jpg',
				'alumni' => 'Himani Bhatt',
				'designation' => 'Diploma First year',
				'company' => '',
				'class' => 'alumni_2'
			],
		);
	}

	function fetch_fe_alumni(){
		return array ();
	}
}