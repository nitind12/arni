-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 02:39 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arni_univ`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ID` int(11) NOT NULL,
  `TITLE_` varchar(200) NOT NULL,
  `BRIEF_` text NOT NULL,
  `DET_PATH` varchar(100) NOT NULL,
  `PICTURE_PATH` varchar(100) NOT NULL,
  `DATE_OF_ACTIVITY` varchar(15) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS_` tinyint(1) NOT NULL,
  `USERNAME_` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ID`, `TITLE_`, `BRIEF_`, `DET_PATH`, `PICTURE_PATH`, `DATE_OF_ACTIVITY`, `DATE_`, `STATUS_`, `USERNAME_`) VALUES
(3, 'Rashtriya Ekta Diwas', 'AIHM instilled the thought of discipline by pledging in the presence of the esteemed Dean Academics to always remember that “WORK IS GOD’. This came as a ‘National Ekta Day’ event in remembrance of the great Sardar Vallabh Bhai Patel, ‘The Iron Man Of India’. ‘We create the path you follow through deeds and actions’.', '3.pdf', '3.jpg', '2017-10-31', '2017-12-09 11:29:13', 0, 'diraihm'),
(4, 'FUSION WORKSHOP', 'A creative offering of Food Production was venturing the’ world of appetizing l’ through creativity. The zenith of performance was acknowledged by Amar Ujala team that witnessed the fusion of Uttrakhand and Italian dishes at the well structured Hotel Management Department of Amrapali. \r\nA star of reality is our motto and we strive to stand on it’. \r\nHurray!!!  The pictures reveal the success. \r\nTake a walk....... down the gallery.', '4.pdf', '4.jpg', '2017-11-10', '2017-12-09 12:35:17', 0, 'diraihm'),
(5, 'TOURISM DAY', 'The dynamic nature of life never leaves anyone untouched. We at AIHM have tried to mould students through talent hunt. The national Tourism day saw the collage making hands as a collaborated group activity when the theme of ‘Sustainable Tourism’ went onboard as a competitive zeal. \r\nYes! laurels did come to three groups. \r\nDo check out through the pics ……..', '5.pdf', '5.jpg', '2017-09-27', '2017-12-09 12:41:44', 0, 'diraihm'),
(6, 'FESTIVE BLISS TO AIHM', 'India is a land of festivals and hospitality is a platform of creativity. The housekeeping department gave intelligent ideas to its students to decorate the arrival of ‘Purushotham Ram’ through beautiful decoration at the lobby and the Main Hall zone at AIHM. Sparkling decoration and skill enlightened every spirit for Deepawali Celebration.', '6.pdf', '6.jpg', '2017-10-18', '2017-12-09 12:43:17', 0, 'diraihm'),
(7, 'CAKE MIXING 2017', 'This December too saw the gathering of different departments of AGI under one platform for mixing the delicacies of life into ingredients of love and compassion as the esteemed management along with various mentors and students gathered to involve themselves in the ceremonious cake mixing ceremony.', '7.docx', '7.jpg', '2017-12-01', '2018-01-18 11:20:15', 0, 'diraihm'),
(8, 'Christmas and New Year ', 'The Amrapali institute of Hotel Management shares an extravaganza of activities through the various festivals acknowledge worldwide. The ‘fare de well’ of 2017 was with an artistically colorful touch to celebrate the return of ‘Lord Ram ’ during ‘Deepawali’ and the reminder of the welcome to ‘Lord Jesus’ into the celestial world during ‘Christmas’. A wonderful onset of winters saw the wonders of art reflected through the decorations during these festivals. ', '8.docx', '8.jpg', '2018-01-01', '2018-01-20 16:29:28', 0, 'diraihm'),
(9, '\'Management Games\' ', '\'Management Games\'  will be organized by Faculty of Commerce & Business Management on Feb 15th 2018 .\r\n\r\n', 'x', '9.jpg', '2018-02-15', '2018-02-13 05:38:44', 1, 'dirmba'),
(10, 'ABHYUDAYA 2018', 'Abhyudaya 2018 came forth as a package of competition, education and enthusiasm with twenty three teams from various Hotel Management Institutes across the country competing to showcase their best. The two days event on 20th and 21st February envisaged a multitude of activities like Regional and International Culinary competition, Patisseries and Confectionary Competition, Heat less cooking, Flower and pot decoration competition, Dress the cake, At Your Service, Bartending competition, On Pins and Needle and Adhyan competitions. Abhyudaya had glamour, thrill and sportsmen spirit and interested one and all. The competition means a lot to the enthusiasts as talent speaks voluminously through participation. ', '10.docx', '10.JPG', '2018-02-21', '2018-02-22 05:39:45', 0, 'diraihm'),
(11, 'INDUSTRIAL VISIT', 'An all round sustainable development of students’ requires the connection between corporate and campus. Keeping this in mind, AIHM organized industrial visit for its first year students from 12th to 20th March, 2018.The visit owes its gratitude to The Taj Gateway, Ramnagar, Dhikuli, Uttrakhand. It was a day’s activity and a fun-filled learning process through observation in the real professional environment. The students visited all the core functional areas of the Hotel and observed the order of management. It was an experience based learning program beyond the conventional college model and a rejuvenating experience to the first year students.', 'x', '11.png', '2018-03-21', '2018-04-18 05:10:33', 0, 'diraihm'),
(12, 'SKILL INDIA-2018', 'Skill India, the most promising talent hunt and enhancement program by the esteemed Prime Minister of India is now extending everywhere even in the remote areas of Uttrakhand. Amrapali Institute of Hotel Management, Haldwani, known for enhancing the skills of the common masses of Uttrakhand has been chosen as a welcome platform to showcase skills in the Kumaun region of Uttrakhand. The event acknowledged the skills of students in the F& B services as well as the Food Production. It served both as a platform to show the skills and to encourage the students to further chisel their existing skills. The event was held under the guidance of the skilled faculty of Amrapali Institute of Hotel Management as well as the acknowledged judges Mr. Seeresh Saxena from Indian Culinary Forms, New Delhi, Mr. Mahendra Khairiya from Sarovar Group of Hotels, Delhi- NCR and Mr. Tahir Sufi, HOD Graphic Era University, Dehradun along with Mr. R.C Pande Principal GIHM Dehradun, Mr. Rahal Vasudev an intellectual and expert in F&B services and Mr. Achintan Teroz Caroli an expert in F&B services.', '12.docx', '12.png', '2018-04-12', '2018-04-18 23:02:03', 0, 'diraihm'),
(13, 'INDUSTRIAL VISIT (FCSA)', 'FCSA organised an Industrial Visit for the final year students of BCA. The objective of the visit was to provide students with an opportunity to explore the professional culture and working environment within an multinational corporation (MNC). It was a day\'s tour to Delta Power Solutions, located at  SIDCUL Industrial Area, Rudrapur (Uttarakhand). It is a Taiwan based organisation providing uninterrupted power solutions , data center infrastructure solutions, telecom power solutions, etc. It was a good learning experience to the students as the work space was totally pollution free with green culture, based on solar power consumption. Students got an opportunity to visit all the functional units within the organisation, having an insight of all the details. It was a motivating learning experience for all the students to strive their professional careers.', 'x', '13.jpg', '2018-04-13', '2018-04-19 01:25:56', 1, 'DIRMCA'),
(14, 'Skill India, second level', 'And one stage leads to other but winners never give up!!!\r\n\r\nThe second level of skill India competition at Graphic Era Dehradun has brought immense joy to the management, staff and students of AIHM, Haldwani as the talented students have come home with laurels. The state level skill testing competition initiated by the Government of India under the auspices of Mr. Modi has helped to recognize the diamonds of Amrapali Group of Institutes who marched out with flights of aspiration and marched in with their head held high. ', '14.docx', '14.jpg', '2018-04-21', '2018-04-20 23:47:08', 0, 'dirAIHM'),
(15, 'Building Awareness on IPR', 'One day workshop on “Building Awareness on Intellectual Property Rights” was organised by faculty of Computer Science & Applications (AGI) with an association and sponsorship by Uttarakhand State Council of Science & Technology (UCOST), Dept of Science & Technology, (Government of India) on 20th April, 2018. Dr. Anju Rawat, (Scientist-B, UCOST) covered the concept and basic knowledge about IPR i.e. Patent, Trademark, GI & Designs, Layout Designs etc. : Mr. Himanshu Goel (Project Scientist, UCOST) covered the concept of patenting system in India & role of Patent Information Center (PIC) in Uttarakhand. Ms. Swatee Rawat (Scientific Trainee, TIFAC, UCOST)\r\nfocused on the importance of copyright and copyright system in India. Ms. Kamika Chaudhary (Scientific Trainee, TIFAC, UCOST)\r\ngave a session on Trademark and Industrial design. ', '15.docx', '15.jpg', '2018-04-20', '2018-04-25 22:12:05', 1, 'DIRMCA'),
(16, 'Hybrid Apps Development', 'A day‘s workshop was organised by Faculty of Computer Science & Applications (AGI), on “Hybrid Application Development” for the students of BCA and B.Sc. (CS/IT) from other Universities, Institutes and Colleges. More than 100 students from 16 different Institutes and colleges such as, Jai Arihant Institute (Haldwani), Pal College (Haldwani), DSB campus (Nainital), SIMT (Kashipur), IMT (Kashipur), VCMT (Gaulapaar), SSJ Campus (Almorah) etc. were present in the workshop. Dr. Nitin Deepak, Dr. Naveen Tewari and Mr. Mukesh Joshi lead the technical sessions imparting the knowledge to develop and publish hybrid mobile applications with the help of NoSQL, MongoDB, Bootstrap, PhoneGap framework and GitHub technologies. ', '16.docx', '16.JPG', '2018-04-21', '2018-04-25 22:29:52', 1, 'DIRMCA'),
(17, 'Industrail Visit -1 (FCBM)', 'Industrial visits are an effort to bridge the gap between classroom learning and practical exposure.\r\nTo help students gain first-hand information regarding functioning of the industry, MBA 2nd semester students of Faculty of Commerce & Business Management were taken on an industrial visit to \"PREETI INDUSTRIES”, Lamachaur on Tuesday, 13th of March. Preeti Industries is a small company which produces non-woven polybags. The students were accompanied by Dr Garima Jaiswal Chandra &\r\nMs. Farah Naeem.', '17.pdf', '17.PNG', '2018-03-13', '2018-06-04 02:35:07', 1, 'nitin'),
(18, 'Industrail Visit - 2 (FCBM)', 'Industrial visits are a value-added learning method for management students. Learning from textbooks, lectures and other study material does not suffice for holistic learning. Practical, hands-on learning is essential for better understanding of work processes and business functions.<br>\r\nSo, to give students a practical exposure, an industrial visit to Parle Agro Pvt Ltd, SIDCUL, Pantnagar was organised for BBA I year students by FCBM, Amrapali Group of Institutes.\r\n', '18.pdf', '18.PNG', '2018-03-20', '2018-06-04 02:39:03', 1, 'nitin'),
(19, 'Industrial Visit - 3 (FCBM)', 'Industrial visits provides an opportunity to plan, organise and engage students in active learning experiences both inside and outside the classrooms and gives an insight into the real working environment of the industry. This not only help students to understand the do’s and don’ts of the industries, but also helps them to see their future place in the industry.<br>\r\nSo these visits are an effort to bridge the gap between classroom learning and practical exposure.To help students gain ', '19.pdf', '19.PNG', '2018-03-27', '2018-06-04 02:41:44', 1, 'nitin'),
(21, 'HM Orientation 2018', 'Hotel Management Orientation Program 2018\r\n‘An eye for detail\r\nA warmth of greetings\r\nA welcome smile and a determination to rise…’\r\nWith these thoughts Amrapali Institute of Hotel Management welcomed the new fresh faces planning to be future hoteliers in its beautiful premises. The orientation program extended from 1st August to 11th August to introduce the fresh faces to the premises, its rules and regulation and curriculum and professional needs. ', '21.docx', '21.JPG', '2018-08-01', '2018-08-18 05:31:25', 0, 'dirAIHM'),
(22, 'Alumni Meet 2018', 'The Alumni Meet 2018 went as a gala event of celebrations at the Amrapali Institute of Hotel Management welcoming all its old students. A month long preparation and untold excitement could be seen across the entire AIHM. The Alumni gathered at the AIHM Hall on the 25th of August to meet their beloved teachers and old friends. ', '22.docx', '22.jpg', '2018-08-25', '2018-08-27 05:26:43', 0, 'dirAIHM'),
(23, 'Teacher’s day 2018', 'Teacher’s day was celebrated in Amrapali Institute of Hotel Management, Haldwani by the illustrious students as a token of love to their respected teachers. The day was a fun filled one with students performing to the happiness of the teachers.', '23.docx', '23.jpg', '2018-09-05', '2018-09-18 00:05:47', 0, 'dirAIHM'),
(24, 'SpicMacay @ Amrapali', 'SpicMacay and Amrapali Group of Organization , jointly orgainized Odissi Dance Concert of\r\nPadmashree Ranjana Gauhar ji , along with Vinod Kevin Charan and Vrinda Chaddha , They performerd on Mangalacharan with Shiv Stuti , Padmashree Ranjana Gauhar ji inforimed the studnets about the rich history of Odissi , A very Beatuiful NartyaNatika based on Jaidev \"Geet Govind \" perfoemded by Ranjna ji.', 'x', '24.jpg', '2018-09-04', '2018-09-20 01:34:27', 1, 'nitin'),
(26, 'World Tourism Day 2018', 'The World Tourism day 27th Sept., 2018 was fêted in Amrapali Institute of Hotel Management. ‘Charity begins at home’ and the Institute attempted to make this event dwell in the heart of the students by imbibing the cultural values of Uttrakhand through the much sort after Uttrakhand Cuisine preparing in-house completion.', '26.docx', '26.JPG', '2018-09-27', '2018-10-03 01:30:34', 1, 'nitin'),
(27, 'Rising Stars at Dehradun', 'The students of AIHM, Haldwani, once again prove their efficiency by out sparkling with peak positions in the Hospitality Rising Star Inter College competition held at Graphic Era University, Dehradun on World Tourism Day. There were five activities held to encourage students to perform to their best capabilities where Deepak Mehra obtained the first Quiz Up position. In the Speak Out round Amit Kala was the best speaker. Pradeep Bisht and Akarshit Bisht proved themselves in Bartending and fire flaring with first position and Rohit Shah came first in the Miniature Gardening Competition.  The first position in culinary competition was obtained by Rohit Joshi and Daleep Singh. The spirit to compete and come out with flying colors dwells in every heart of Amrapali Group of Institutes.', 'x', '27.jpg', '2018-09-28', '2018-10-09 01:26:21', 1, 'dirAIHM'),
(28, 'Diwali Decoration 2018', 'Diwali the festival of lights was celebrated with gaiety and joviality at AIHM, Haldwani. The housekeeping department with artistic hands and creative minds snapped the show with its ingenious decorations.', '28.docx', '28.jpg', '2018-11-07', '2018-11-21 01:22:15', 0, 'dirAIHM'),
(29, 'Cake mixing X mas', 'PRE CHRISTMAS MIXING: A LOVELY TRADITION \r\nENGRAVING A STORY TO CLOSE 2018 WITH WARMTH\r\nWalking down the elegant corridor dwells at one energetic corner, the heart of the professional chefs of Amrapali Institute of Hotel Management that has destined thousands of skills. This is none other than the ground floor Training ‘Restaurant’ formally dressed in the elegance of the wooden worktable and positioning its decorum with a beautiful array of dishes, glasses, side plates and corner decorations, a style of AIHM alone.', '29.docx', '29.jpg', '2018-11-27', '2018-11-29 01:40:24', 0, 'dirAIHM'),
(30, 'Avahan 2019', '‘QUEST IS THE ESSENCE OF MANKIND’\r\n The 6th International Conference on ‘Preparing Education for the Effects of the 4th Industrial Revolution on Hospitality and Tourism’ was a two day event scheduled at Amrapali Institute of Hotel Management, Haldwani on 22nd and 23rd January, 2019. \r\n', '30.docx', '30.JPG', '2019-02-02', '2019-02-11 00:12:25', 1, 'dirAIHM'),
(31, 'Abhyudaya-2019', 'The talent to be able to rise to achieve prosperity, good fortune, elevation and success can build any bond and when it comes to Teacher- Student Bond the word ABHYUDAYA sounds just true to its meaning. ', '31.docx', '31.jpg', '2019-02-23', '2019-03-05 03:40:31', 1, 'dirAIHM'),
(32, 'Cloud Computing Workshop', 'Faculty of Technology &amp; Sciences, AGI hosted one day workshop on \"Cloud Computing and the virtual world\" successfully on 11-Mar-2019. The workshop witnessed the participation of more than 150 MCA, BCA, B.Tech. (CSE), Diploma (CSE), Diploma (IT) courses students from various colleges. <br>Prof. Pramod Joshi, the resource person for the workshop discussed the various aspects of cloud computing and virtualization.', 'x', '32.jpg', '2019-03-11', '2019-03-11 23:27:21', 1, 'nitin'),
(33, 'HOLI DARBAR 2019', 'It is a spectacular watch of colorful departmental integration with Abeer – Gulal aloft, the traditional colors and cultural dance below immersing teachers and students in a melodious motion worth describing as this is the way Amrapali Group of Institutes keeps Indian Heritage alive. Yes, we are taking of the event that swipes away monotony and boredom of routine life; HOLI. \r\nThe Dwadashi of PHAGUN month of VIKRAM SAMVAT saw Amrapali Family in faction with a beautiful Holi niche designed as a DARBAR in one of the most beautifully maintained natural gardens adjacent to its main building. Once again the entire family was welcomed with holy teeka to celebrate and re-instigate the bond of love demonstrating motion in concentric circles to the beat of percussion and traditional instruments, displaying the Uttarakhand style of Holi Celebration.\r\n', 'x', '33.jpg', '2019-03-21', '2019-03-22 01:20:55', 1, 'dirAIHM'),
(34, 'Farewell to HM students', 'Farewell 2019\r\nADIOS AMIGOS \r\nGoodbye, Hope you do the best IN LIFE ……….. FAREWELL!\r\nThe AIHM seminar hall accumulating memories of the past came to a jubilant mood with wishes, ‘May You Fare Well in Your Life.’ A gathering of teachers, juniors and seniors marked with the awe inspiring presence of the Management in an emotional atmosphere was attuned with the bidding Goodbye to the senior students of Amrapali Institute of Hotel Management. The juniors made all attempts to help the outgoing students relive the memories of the past. This was an occasion marked with the ceremonious lamp lightning, followed by tree planting event completed by the outgoing students. ‘As we sow shall we reap and share our presence in the world.’ \r\n', '34.docx', '34.jpg', '2019-05-22', '2019-05-25 01:30:07', 1, 'dirAIHM'),
(35, 'TREE PLANTATION', 'Hope is the next generation and a wishful entity to continue the human journey successively on the earth. With the tree planting drive initiated by the responsible citizens of the country, the Amrapali Group of Institutes, Haldwani, thoughtfully came forward to plant saplings. ', '35.docx', '35.jpg', '2019-07-13', '2019-07-15 05:31:42', 1, 'dirAIHM'),
(36, 'Orientation 2019', 'The goal of college is to immerse students’ in the college life and AIHM stands to it. The odd fall semester 2019 took a kick start with the guidance offered to the students through orientation 2019. It incorporated sharing of Integrity and varsity for purpose and this purpose ranged from knowing the campus, bonding with birds of the same feather, engaging in club activities, knowing the daily chores, academic and non academic activities. ', 'x', '36.jpg', '2019-08-02', '2019-09-11 00:55:53', 1, 'dirAIHM'),
(37, 'Alumni Meet 2019', '21st Sept. 2019 was a special day at AIHM when the Ex Amrapalians’, who are now soaring high in the professional world, came back to their nests to refresh their memories of the days when their endeavours were just an inward light. The meet started with the cake cutting ceremony followed by a welcome speech followed by a scrumptious lunch.', '37.docx', '37.jpg', '2019-09-21', '2019-10-01 04:13:33', 1, 'dirAIHM'),
(38, 'Introducing new product', 'The management club activity held at FCBM, AGI, was intended to view the passion, exuberance, creativity & management skills of the management students. The participants introduced their ideas by creating products and services under a superficial brand, showing foresightedness as future managers.', '38.docx', '38.jpg', '2019-09-23', '2019-10-22 00:27:07', 1, 'dirmba'),
(39, 'DIWALI CELEBRATION', 'Amrapali Institute of Hotel Management celebrates the decorative festival Diwali through the traditional Rangoli, in the presence of the omnipresent Ganpati and Lakshmi ji idols mingled with some newness to develop creativity. ', '39.pdf', '39.jpg', '2019-10-24', '2019-12-01 22:22:22', 1, 'nitin'),
(40, 'CHEF DAY AT AIHM', 'International Chef Day is celebrated every year to remember the professionals that build a team of efficiency not just to satisfy hunger but to justify the taste buds too. ', '40.pdf', '40.jpg', '2019-10-20', '2019-12-01 22:25:36', 1, 'nitin'),
(41, 'WORKSHOP ON E-WASTE', 'Amrapali Institute of Technology & Sciences and Vincular Testing Labs India Pvt Ltd jointly organized a Workshop on E- Waste Management on 22nd November 2019.\r\nExperts from Vincular Testing Labs Mr. Neeraj Verma and Mr. Shubham Dwivedi (also an Amrapali Alumnus) discussed the various environmental and human issues related to E Waste. \r\n', '41.docx', '41.png', '2019-11-22', '2019-12-17 01:34:44', 1, 'nitin'),
(42, 'Recreational Cum Educational', 'The Students of Computer Science & Engineering Department went on a Educational cum Recreational Trip to Jaipur between 12th and 16th October 2019. The students visited Dotsquares Pvt. Ltd., a CMMI Level 3 Certified Company, in Jaipur. The students attended a session on Project Management at Dotsquares Pvt. Ltd. The students were also informed about the Internship and Employment Opportunities at Dotsquares.', '42.docx', '42.png', '2019-10-12', '2019-12-17 01:39:20', 1, 'nitin'),
(43, 'WORKSHOP ON IOT WITH PYTHON', 'Faculty of Technology and Computer Applications, Amrapali Group of Institutes organised a One Day Workshop on \"Internet of Things (IOT) with Python\" today on 14th September 2019.\r\nThe Workshop started with the Lamp Lighting Ceremony followed by the Welcome Address by Prof (Dr.) Manoj Pandey, Director wherein he discussed the latest trends and developments in the Computing World. Dr. Sanjay Dhingra, CEO interacted with the students and congratulated the Faculty Members for their initiative of organising the workshop. He asserted that the Institute should organise similar workshops in the future too.\r\n', '43.docx', '43.png', '2019-09-14', '2019-12-17 01:42:30', 1, 'nitin'),
(44, 'ORIENTATION PROGRAMME', 'Newly admitted B. Tech, B. Sc. (Hons.) and Polytechnic Diploma students were warmly welcomed by the faculty members and the students of Amrapali Institute of Technology and Sciences. A Week long Orientation Programme was hosted from 20th to 25 August 2019 to familiarize the freshers with the various Academic,Co Curricular and Extra Currilcular Activities of the Institute.', '44.docx', '44.png', '2019-08-20', '2019-12-17 01:45:45', 1, 'nitin'),
(45, 'Credit Research Challenge 20', 'FCBM students of MBA- 1st Year and MBA 2nd year are participating in the 3rd National Competition - Credit Research Challenge 2020 organized  by AIWMI..', '45.jpg', '45.jpg', '2020-01-19', '2019-12-24 01:30:56', 1, 'dirmba'),
(46, 'THE 71ST REPUBLIC DAY', 'On 26th January, 2020, Amrapali Group of Institutes gathered at its Main Building Garden to begin the New Year Celebrations and events with Republic Day. The dignitaries were the Management Mrs. Bindu Chawla and the Chief Guest Colonel R C Bhandari (Retd.) who unfurled the Tricolour. The National song was sung by B ed. Students in the presence of the faculty and students and staff members.', '46.docx', '46.jpg', '2020-01-26', '2020-02-12 04:18:55', 1, 'dirAIHM'),
(47, 'Project Fest', 'Diploma Mechanical Engineering, the students of AITS had participated in polytechnic project fest 2019 for Uttarakhand organized by SCE Dehradun and won best project award', 'x', '47.jpg', '2019-10-23', '2020-02-15 05:21:09', 0, 'nitin'),
(48, 'UPES RISE 2019', 'ME diploma student of AITS participated in UPES RIES is 2019 are organized by University of petroleum and energy studies dehradun and stud at 4th position and 53 displayed of VTEC and mtac with only one diploma project.', 'x', '48.JPG', '2019-04-26', '2020-02-15 05:28:02', 1, 'nitin'),
(49, 'SHIVA FEST 2019', 'B Tech mechanical engineering student of AITS participated in shiva fest 2019 and won 2<sup>nd</sup> prize in Auto-CAD designing competition.', 'x', '49.jpg', '2019-11-12', '2020-02-15 05:30:06', 1, 'nitin'),
(50, 'Guest Lecture', 'It was a pleasure to have Prof. (Dr.) Anesh Kumar Maharaj, University of KwaZulu-Natal, South Africa amongst us on 12th September 2019. Prof. Maharaj discussed the Latest Trends in Mathematics, Statistics and Computer Science with the students.  \r\nThanks with best  Regards,', 'x', '50.jpg', '2019-09-12', '2020-02-15 05:33:02', 1, 'nitin'),
(51, 'Visit to Auto-Expo 2020', 'A Team of Students from Amrapali Institute of Technology and Sciences visited Auto Expo 2020, Greater Noida on 12th February 2020 to learn about the latest innovations in the Automobile Industry.', 'x', '51.jpg', '2020-02-12', '2020-02-15 05:34:52', 1, 'nitin'),
(52, 'National Deworming Day@AIPS', 'The Union Ministry of Health and Family Welfare launched National Deworming program on the occasion of National Deworming Day observed on 10 February. <br>\r\nThis is one of the largest public health programs reaching large number of children during a short period. According to World Health Organization 241 million children between the ages of 1 and 14 years are at risk of parasitic intestinal worms in India, also known as Soil-Transmitted Helminths.', '52.docx', '52.jpg', '2020-02-10', '2020-02-19 00:14:47', 1, 'nitin'),
(53, 'Abhyudaya-2020', 'Amrapali Institute of Hotel Management for the 15th year witnessed contest of exuberant skill on February 18th and 19th, 2020. Once again hopes drove talent towards excellence and leaded to display of skills as never seen before.', '53.docx', '53.JPG', '2020-02-19', '2020-02-22 02:54:14', 1, 'dirAIHM'),
(54, 'WORLD\'S PHARMACIST DAY @AIPS', 'Amrapali Institute of Pharmacy and Sciences celebrated its first World’s Pharmacist Day on 25 September 2019.<br>\r\n \"Safe and effective medicines for all” is the theme of this year’s World Pharmacists Day..<br>\r\nMr. Pawan Pandey  Secretary Pharmacist Union Uttarakhand .,Mr. P.C Joshi , Sanrakshak Pharmacist Association,Uttarakhand ,Mr. J.S Rautela ,Vice President Diploma Pharmacist Association,Uttarakand graced the occasion.', '54.pdf', '54.jpg', '2019-09-25', '2020-03-05 02:18:17', 1, 'nitin'),
(55, 'HOLI DARBAR 2020', 'Holi Darbar is an event organized by the students and faculty of AIHM as a part of the learning through practical applicability. \r\nHoli darbar was decorated in the ‘Retro style’ with posters of olden days to the present day Bollywood actor and actress. Students were clad in the Bollywood style and the music and dance all created an atmosphere suitable to the need of the hour. It encompassed in it an atmosphere of Ranga Rang holi through the coordination of Chef Mohit Arya of AIHM.\r\n', '55.docx', '55.jpg', '2020-03-07', '2020-03-13 03:52:40', 1, 'dirAIHM'),
(56, 'Hospitality learning visit', 'Industrial visits are always an effort to link the gap between classroom learning and practical exposure. They are aimed to impart practical knowledge to help students gain realistic information regarding functioning of the hospitality industry. Students of AIHM were taken on an industrial visit to \"Tarangi resort ”, RAMNAGAR on Tuesday , 25th of February. Tarangi is one of the leading and fastest growing hotel chain.', 'x', '56.jpg', '2020-02-25', '2020-03-16 00:04:34', 1, 'dirAIHM'),
(57, 'Clubs activities at AIHM', 'Fortify positivity and insulate creativity says ‘The Decoration Club-AIHM’.\r\nThe lockdown has come up perhaps with the slogan among members of Decoration Club of ASCAB-AIHM.\r\nThe students of the decoration club at AIHM must have come across the saying that, ‘The brain finds what it is looking for when the intentions are creative.’\r\nThe past fifteen days were amazing company as the members of the decoration club under the leadership of Rohit Shah of BHM KU 6th Sem dug into the intricacies of drawing with Indo Western Culture. It is oft said that the deepest moments of crises bring the best of human knowledge and skills.\r\nThe fortnight began with a good wish from Lord Shiva as a painting by Rahul Pandey wishing happy Shravan month to the members. Anyone could have been carried away to travel with the greenery that reminds of travelling during Shravan month when Rohit Shah exhibited the Trival Warli art on a linen mask as a reminder of the pandemic. Then his adornment of the western gown with Indian art brought up the spirits of all and then started the show of fineness. Rahul Chaudhary went ahead with his welcome posing the Indian western dance through such delicacy that eyes could behold for a lifetime. Fantabulous! Cheered the members as Rahul Pandey presented sparkling and dangling paintings of dresses. Kiran Pandey presented bookmarks and facemarks through madhubani paintings and hand paintings with different dance postures came as a colourful gesture from Anjali Dumka, the girl student coordinator and Jacinta Simon. A silent prayer at heart and a meditative mood was finally set in by Pankaj who presented a conch with Dharma Shloka and Buddha with lotus and Deepak Bhatt sent versus of Guru Granth Sahib in Mandala.\r\nA sip of tea with the COVID around was finally caught by members of the Future and Sharp Club as they created videos and posted in the club.\r\nHobby is the break that really helps to dig the ‘me in me’ and that is what every individual must learn to live life to the fullest. The members of ‘Decoration Club and Future and Sharp Club’ are really becoming more agile and efficient company during the lock down.\r\n', 'x', '57.jpg', '2020-08-11', '2020-08-11 06:08:19', 1, 'dirAIHM'),
(58, 'AUGUST MEANS CREATIVE MONTH', 'AUGUST MEANS ‘INSPIRING REVERANCE OR ADMIRATION’ as AIHM celebrates Janmastami, Rakshabandhan and Independence Day in its own creative style.\r\nReverence and admiration are the words associated with August. Do you know that the month of August was once called Sexlitus meaning 6th and in 8 BC the month was named August after Augustus Caesar, the first Roman Emperor. We may call it coincidence or destiny but August is the month of Reverence and admiration in our institute as in our country.\r\nUTU\r\nAUGUST MEANS ‘INSPIRING REVERANCE OR ADMIRATION’ as AIHM celebrates Janmastami, Rakshabandhan and Independence Day in its own creative style.\r\nReverence and admiration are the words affiliated with August. Do you know that the month of August was earlier called ‘Sexlitus’ meaning 6th and in the 8 BC the month was named August after Augustus Caesar, the first Roman Emperor. We may call it coincidence or destiny but August is the month of Reverence and admiration in our country as well. That the country still holds millions in its heart was seen through its celebration at AIHM as well.\r\nRakshabandhan, the admirable festival of love and compassion to celebrate the brother and sister bond falls in this month and so does the Independence Day. The air is full of love and patriotism wetted with the humid days that call upon the heavens to shower their greetings. \r\nThis year it was a solemn process with the Management and the residents at Amrapali Group of Institutes hoisting the National Flag. \r\nThe students  indulged in creativity,found it an opportunity to create and recreate. The students of the Decoration Club symbolically sketched their love through drawings and posters of the National Flag and the emblems of the country. An extra mile effort was demonstrated by Rahul Chaudhary with the slogan ‘Mera Bharat Mahan’ along with Jacinta Simon, Kiran Pandey, Deepak Bhatt and Rahul Pandey while Rohit Sah went to create a short video on the same creating patterns that represent the motherland and its pride. The goose bumps that many experience during the National Song can be felt through the efforts of these young creative and determined hearts that celebrated the nation’s independence through their creativity.\r\nThe students of the Decoration Club also organized a club activity inspiring each other to prepare Rakhi at home. The displays were very professional and the products revealed passion at its zenith. Rohit Kumar Sah of HM  7th Sem, Pankaj Faritiyal of  HM 3rd Year, Anjali Dumka, Jacinta Simon and Rahul Pandey  of HM 2nd Year, Kiran Pandey of BHM KU, Rahul Chaudhary, Karan Negi and Deepak Bhatt of HM 3rd Sem were felicitated for their exclusive contributions. Equally contributive were the Janmastami celebration through sketches and drawings. \r\n: HOBBY IS INDEED AN ACTIVITY DONE REGULARLY IN ONE’S LEASURE TIME FOR PLEASURE-ASCAB-AIHM:\r\n', '58.docx', '58.jpg', '2020-08-27', '2020-08-27 06:47:19', 1, 'dirAIHM'),
(59, 'Teacher’s Day 2020 ', 'The ASCAB- AIHM run Decoration Club laid emphasis on the important role of teachers through a well thought activity under the guidance of their student coordinators. They organized an activity where students prepared cards of different types to express their gratitude towards their teachers. These cards were dispatched to the faculty members.', 'x', '59.jpg', '2020-09-05', '2020-09-22 05:46:32', 1, 'dirAIHM'),
(60, 'World Tourism Day 2020', 'The pandemic has left mankind with little choice to movement. The surmount pressure that one faces within the confines of the home leaves an indefinable spirit but is it so with the ones who are mining their creativity by digging deep into the creative aspects of their life? Are we all sailing in the same boat of desperation and desolation? Is the world really getting confined like the ‘Lakshaman Rekha’ or are some fortifying their positivity and building their creativity?\r\nThe answer lies in the wonderful creation by the members of the ‘Decoration Club’ also published as ‘Creativity Club’ of AIHM-AGI. The comradeship built through exuberant grace of creativity has sent ripples of wonderful vibes of artistic display throughout AIHM. The young armors of Tourism and Hospitality Industry have raised their banners through their creativity even this time via posters and banners depicting the ‘World Tourism Day.’ The posters were projections of the travelers’ instinct to raise our spirits, galvanize the fire and heighten our hopes.\r\n', 'x', '60.jpg', '2020-09-27', '2020-10-06 06:53:35', 1, 'dirAIHM'),
(61, 'Webinar on HK practices', 'Housekeeping Department in Hospitality Industry is the so called COVID 19’ Warrior requiring as dynamic a policy as possible to swiftly slide onto the parameter of change. Adaptability has become the next game of the play induced by COVID that has hit the Hotel Industry the most. This has raised several questions in the mind of every individual as all are involved in the process of recreation as part of subsistence in today’s busy and engaging world. A discussion is therefore, the first priority of the industry and has enveloped the interest of both professionals and commoners’. A webinar was hosted by the Housekeeping Department, AIHM on the occasion of the International Housekeeper’s Week on 19th September, 2020. The theme was the ‘Effect of COVID 19 on Housekeeping Practices’. Many renowned personalities hosted the event with promising thoughts that the sun will definitely rise but preparations over several nights are important. Mr. Vinod Suhag, Regional Director of Housekeeping, Dubai, Mr. Gaurav Gangola, Manager, Housekeeping, Seychelles and Mr. Pallav Anand, Executive Housekeeper, Ghaziabad provided thoughtful insights to the guests for the post pandemic New World requirements and equipments that will help them meet the guest requirements.\r\nThe pandemic has definitely given a tough blow to the Hospitality Industry and its comeback will be even tougher with huge expectations from suspicious and aware guests that will turn as a challenge to the industry employees. The housekeeping practices will need to be upgraded with simultaneous preparations as medical equipments and general awareness of not just sanitary and hygiene requirements but also ways to handle the medical emergency without infecting oneself. Concern about cleanliness is pervasive. Hospitality will no longer remain ‘flawless and invisible’; it will have to take a centre stage in communication throughout the guest experience. The eminent speakers hold on to the thought of hospitality consultant Larry Mogelonsky of ‘Cleanliness Theatre’ akin to ‘Security Theatre’. It was a much required and essential online development at AIHM, Haldwani.\r\n', 'x', '61.png', '2020-10-12', '2020-10-12 07:16:59', 1, 'dirAIHM'),
(62, 'International Chefs’ Day2020', 'Over the past 16 years the World-chefs has used International Chefs day to honor the profession and to educate people about healthy food. It has enabled acknowledgement of the hidden faces behind the exquisite plates and tray that enhance the taste buds and bring smile to food lovers. They practically define the humorous thought- ‘I live to eat’. \r\nExtending its contribution on International Chef Day Amrapali Institute of Hotel Management distributed Bhojan Thal. Various food items were prepared in the AIHM restaurant by the faculty and distributed. Besides this the excitement was a webinar where the famous Chef Abhishek Basu, Executive Chef at JW Marriot, Mumbai and Chef Abhijit Bede, Executive Development Chef at Gate Gourmet discussed some nuances of the trait. The Management, Faculty and students were served with food of thought at their respective places and everyone enjoyed the knowledge shared by the experienced Chef. \r\nPassing knowledge for use by future generation, Are You? Well that’s what COVID 19 has blessed us with: ‘There is always a silver stream in the cloud of doubts.’\r\n', 'x', '62.jpg', '2020-10-20', '2020-10-22 04:45:18', 1, 'dirAIHM'),
(63, 'Webinar on Career Counseling', 'A Webinar on “Career Counseling & Job Prospects in Hospitality - Worldwide” was organized by Amrapali Institute of Hotel Management, Haldwani and GLOBAL WASE, jointly on 24th September, 2020 with Chef Jasvinder Singh Gurudatta as the guest speaker. Chef J S Gurudatta is the Director of Expedyte B2B LLC, USA.\r\nChef Gurudatta introduced himself and talked about his past work experiences, the heights that he has achieved; his thrilling journey from being a commercial pilot to becoming a Chef and now giving career guidance to students.\r\nThe webinar was attended by more than 100 students which lead to a wonderful interaction between students and Chef Gurudatta where the main topics were “work life during pandemic” and “Hospitality Industry after Covid-19” to which Chef Gurudatta expressed  himself by saying “Pandemics may come and go but life doesn’t stop. He said that the Hospitality Industry is massive and has a great future. All the norms and regulations regarding sanitization and hygiene practices were already being followed in Hotels since long back but this pandemic is like a reminder that we need to be more focused and strict regarding these practices. It’s just a matter of time and Hospitality Industry will again get back on its feet soon. Other topics discussed included ‘Scope of Fresher in Facility Management, Cruise Lines and Luxury Hotels worldwide”, Chef Gurudutta gave insight and inputs about it, to the budding hoteliers and guided them to pursue their career in their dream field. He asked students to remain focused and keep learning every day. It was a great learning experience for the students and he ended the webinar by motivating the students by saying “Don’t worry, there is always light at the end of the tunnel”.\r\n', 'x', '63.jpg', '2020-09-24', '2020-11-12 07:15:03', 1, 'dirAIHM'),
(64, ' Decoration Club Diwali 2020', '‘They Lasso thoughts with their pens\r\nJuxtaposing images and styles\r\nThe interior landscapes\r\nAre these their personal obsessions of cultures that-\r\nThey have absorbed as tools or an extension of human brain?’\r\nIt is well known to artists that during the Renaissance the term \'disegno\' implied drawing both as a technique to be distinguished from coloring and also as the creative idea made visible in the preliminary sketch. The COVID 19 phase has ultimate this art from creative hands and brought forth a new era of entertainment and hobby among the ‘Creative Club Members’ of the housekeeping department at AIHM, Haldwani. And- ‘as the sun went cold and pale as moon and festivities engaged men’, the club members crowned the festivities with their celebration of art in the form of artistic rangoli for Diwali wishing a happy and safe Diwali. Some skills need no endorsement and some work requires no felicitation as it emerges from the heart giving immense pleasure to the giver and receiver. Content in the word and the best day of these young artists are when they get to give art to others, we see them light up! \r\n', 'x', '64.jpg', '2020-11-14', '2020-12-07 04:32:32', 1, 'dirAIHM'),
(65, 'Cake Mixing Ceremony at AIHM', 'A harbinger of good tidings and happiness the cake mixing ceremony was performed blithe fully with social distancing amidst COVID 19 at AIHM. \r\n There is something very special about the AIHM Ground Floor Restaurant as it has witnessed many ceremonious occasions. Although cake mixing ceremony dates back to the 17th century in Europe its tradition continues at AIHM since its inception. A joyous moment, a rich experience of mixing the fruits and nuts and pouring rich wine over it all with a tinge of cooperation to spread camaraderie and goodwill is a souvenir for the organization. The blessings that come forth from the esteemed Management, Directors of various departments and through the presence of faculty and staff is celebration. This 2020 thus pitched in the gathering with different ingredients, vessels and labor and marked it as one big celebration of the heralding of Christmas.\r\n', 'x', '65.jpg', '2020-12-01', '2020-12-07 04:36:55', 1, 'dirAIHM'),
(66, 'AVAHAN 2020 ', '“Change is the end result of all true learning.” ― Leo Buscaglia\r\nThe 8th International Conference Avahan, the most influential hotel investment conference entitled, ‘Challenges Upfront and Future Prospective-Innovation, Entrepreneurship and Economic Policy’ was organized on 18th and 19th December through the online platform. It was an enticing, enriching learning with content-rich sessions and excellent networking platform. The  keynote speeches, stage interviews, and engaging panel discussions by the industry stalwarts and professional advisors from around the globe deliberating upon the sectoral trends, evolving market dynamics, operation related matters, industry nuances and best practices during the pandemic and after it becomes least effective through human efforts was a learning through the times of change. A huge ardor and diligent virtual gathering benefitted from the conference.\r\n', '66.docx', '66.jpg', '2020-12-19', '2020-12-23 10:33:36', 1, 'dirAIHM'),
(67, 'FDP on Soft Computing', 'Amrapali Institute of Technology and Sciences (AITS) organises a 5 days FDP on Soft Computing with Uttarakhand Technical University  Under TEQIP III during 2 September 2020 to 6 September 2020 For the FDP we have got good response of faculty members , Research scholars  from  various parts of India including J&K , Punjab , Hariyana , Rajsthan , UP, Madhya Pradesh , Siikim , Asam , West Bengal , Karnataka , Maharashtra , Gujrajt and offcourse   Uttaraknahd . The resource person Mr. Nitin Chandola taken a session on MATLAB fundamentals and functions in MATLAB, Different types of ANN simulations and working introduced and discussed in this session , a practical session on weather forecasting problem based on ANN also presented by the Resource person.<br>\r\nThe resource person Mr. Pankaj Swaroop Nitin Chandola taken the session on Genetic Algorithms and their implementation  using  MATLAB   , further he Delivered detailed session on  different functions like mutation , survival of fittest , binary diffusion that are very useful for artificial Genetic Algorithms  processing operations in many areas . Different types of Genetic Algorithms examples with MATLAB  implementation  introduced and discussed in this session , a practical session on  also presented by the Resource person. <br>\r\nE-Certificates Distributed to all the participants. \r\n', '67.docx', '67.jpg', '2020-09-02', '2021-01-09 05:05:14', 1, 'nitin'),
(68, 'Online Machine Learning Prog', 'Amrapali Institute of Technology and Sciences and Uttarakhand Technical University jointly organized a 6 Day Online Student Development Program on Machine Learning from 10th - 15th December 2020 under TEQIPIII.<br>\r\nThe Experts for the Online Learning Program were Mr. Mohd. Rashid, Ms. Anchal Sharma and Mr. Nitin Chandola. Prof. (Dr.) M. K. Pandey, Director AITS warmly welcomed the Experts and the students to the Workshop during his Address. He said that the students must keep themselves updated with the latest technologies during this age of intense competition. He also assured that similar Workshops will be organized in the future too.<br>\r\n269 Students actively participated in the learning sessions. The Students learnt the various aspects of Machine Learning and related fields such as Artificial Intelligence, Data Mining and Data Sciences etc. Students grasped the various applications and scope of Machine Learning in a lot of day-to-day tasks like Number plate Detection, Fraud Detection, Email, Review and Feedback analysis, Face Detection and age prediction, Emotion Detection Automated Car-parking etc.<br>\r\nThe Vote of Thanks was proposed by Mr. Anurag Bhatt, Coordinator of the Workshop. The Technical support and Media support was provided by Dr. Nitin Deepak, Dr. Hitendra Jalal and Mr. Rahul Palaria respectively.', '68.docx', '68.jpg', '2020-12-10', '2020-12-28 10:59:14', 1, 'nitin'),
(69, ' FDP on Cyber Security', 'Amrapali Institute of Technology and Sciences (AITS) organises 5 Day Online Faculty Development Programme on Cyber Security  under the aegis of TEQIP III Uttarakhand Technical University in the duration between 16th-Sep to 20th September 2020. <br>\r\nFor the FDP we have got good response of faculty members, Research scholars  from  various parts of India including J&K , Punjab , Hariyana , Rajsthan , UP, Madhya Pradesh , Siikim , Asam , West Bengal , Karnataka , Maharashtra , Gujrajt and offcourse   Uttarakhand.<br>\r\nFDP starts with the welcome note by our respected Director Dr. M. K. Pandey then Our respected resource person Mr Ashwin had taken the ethical hacking sessions and Mr Sanjay had taken the session of Cyber Laws. A practical sessions had also been taken by Mr Ashwin on Kaali Linux.<br>\r\nThe Vote of Thanks was proposed by Dr. Nitin Deepak, Coordinator of the FDP. The Moderator Dr Ashish B. Khare gracefully tenor the forum and guiding FDP conduct. The Technical support and Media support was provided by Dr. Hitendra Jalal and Mr. Rahul Palaria respectively.', 'x', '69.jpg', '2020-09-16', '2021-01-09 05:00:36', 1, 'nitin'),
(70, 'And I make grape decisions!!', 'An enriching experience was shared by Mr. Sanjay Singh Ranghar, Anantara Hotels and Resorts, Muscat Oman through a Knowledge Booster online session conducted by the F&B Department, AIHM, Haldwani. The ripe juicy grapes and wine tasting techniques dominated the session with an enthusiastic gathering of students.', 'x', '70.jpg', '2020-12-30', '2020-12-31 06:41:21', 1, 'dirAIHM'),
(71, 'CATIA - (SDP)', 'Amrapali Institute of Technology and Sciences (AITS) and Uttarakhand Technical University jointly organized a 5 Day Online Student Development Program on CATIA- Modelling & Design Excellence from 5th - 9thSeptember 2020 under the aegis of TEQIPIII.<br>\r\nA Five-day student development program on CATIA began at Amrapali Institute of Technology and Sciences on Saturday. The student development program is aimed at enhancing the students of Mechanical Engineering with modern engineering design and simulation tools. The Experts for the Online student development Program wasMr. Rahul Sudhakar Rao Konde.Director Prof. (Dr.) M. K. Pandey, Director AITS inaugurated the workshop. Speaking on the occasion, he said that the workshop was being conducted with experts from the industryand the students must keep themselves updated with the latest technologies and advances during this age of intense competition. Skills, Real Time, information and Updated learning are the aspects which tackle the students from the industry. To overcome those aspects, the Institute had been imparting coaching, workshops and development programs to the studentsin the much-needed field.By knowing these courses, the students would be in a position to face practical challenges in industry and apart from learning skills these type of programs also would help them in facing interviews, he added.\r\nAn overview on the importance of 3D modelling software in modern industries was given by coordinator Mr. Hitendra Bankoti. Industry expert Mr. Rahul Sudhakar Rao Konde started the program on CATIA which comprises of a basic Introduction to CATIA V5 followed by demonstration of various tools for Part Modelling. Student development program also included hands on practice session for 3Dimensional Part Modelling& Design to make students acquainted with this software. Part Modelling was followed by Assembly Design & analysis of the system. Studentswere delighted to participate in this program & they look forward to attend more such type of programs &workshops in future. <br>\r\nThe session was concluded by Vote of Thanks, proposed by Mr. Hitendra Bankoti,Coordinator of the Workshop. The Technical support and Media support were provided by Dr. Nitin Deepak, Dr. Hitendra Jalal and Mr. Rahul Palaria respectively.\r\n', '71.docx', '71.JPG', '2020-09-05', '2021-01-09 05:00:05', 1, 'nitin');
INSERT INTO `activities` (`ID`, `TITLE_`, `BRIEF_`, `DET_PATH`, `PICTURE_PATH`, `DATE_OF_ACTIVITY`, `DATE_`, `STATUS_`, `USERNAME_`) VALUES
(72, ' Occasion of Xmas & New Year', 'Christmas is, probably the most widely held celebration in the world. The traditional Christian approach to the festival has its own attraction and charm which cannot be substituted. People around the world indulge into some of the most wonderful aspects of the Christian element of the event, such as attending a Carol Service or going to Midnight Mass on Christmas Eve. \r\nMerry Christmas 2020: Xmas and New Year is the holiday season across the world. It is the time to indulge and make merry but make sure to wear your mask and avoid large gatherings. During Xmas amid the pandemic, it\'s important that we connect and tell each other that no one is alone. Today there are so many ways of staying safe and being with friends and family.\r\nWe here bid goodbye to the year 2020 which taught us that together we can fight against any evil or disease and only humankind prevail. We also welcome the year 2021 with positive hope that this year will bring us all good health and celebrations.\r\nOn the occasion of Xmas and New Year it is all about spending time with family and close friends and sending greetings to loved ones staying far away and at AIHM the students celebrated this occasion by following social distancing yet the celebrations were at full swing.\r\nMembers of Decoraton club, AIHM like Rahul Pandey, Eshneet Kaur, Krishan Kumar, Rohit Kumar Shah, Deepak Bhatt, Rahul Chaudhary, Himanshu Agari, Rajesh Pandey, Kiran Pandey, Nandan Singh were the flagbearers of this celebration at AIHM. They made some beautiful decoration creations and shared with each other which were a welcome gesture to the Year 2021.\r\n', 'x', '72.jpg', '2021-01-01', '2021-01-12 07:08:36', 1, 'dirAIHM'),
(74, '\'Learn from ant’ FHM ', '‘Learn from ant’ the social being is an old notion but a new insight to crack the hospitality interview was provided by Mr. Anurag Sharma, the founder of LFA Consulting LLP. This session was organized by Mr. Pawan Mehra, the lead behind the training and placement cell at AIHM.\r\nThe online session introduced the students with the requirements of the day as far as understaning an interview is concerned. Every human on job or even in business has been involved intuitively in interview. The talk delivered by Mr. Anurag Sharma was a motivation through techniques that says, ‘Interview is a way to reach out your skills for the desired job.’ There is no loss or wins in interview, it is only a two way requirement and if you fit in it you get through otherwise the world is a huge place of opportunity. \r\nThe session was followed with a question answer hour and the students’ queries were solved. Volumes to speak and learn from experts and when it comes to real life you just can’t skip such moments.\r\n', 'x', '74.jpg', '2021-01-16', '2021-01-21 10:57:59', 1, 'dirAIHM'),
(76, 'Gourmet Club Activity, FHM', 'The last day of December was celebrated through the Sous Vide online session for students of the Gourmet Club. The session was conducted by Chef Vikas Sah who introduced modernity in cooking style. He showed the students how taste, flavor and that tinge can be retained through the modern way of cooking food in the plastic bag heated on a water bath. The temperature plays a great role. Complementary winsome act reflected online.\r\nThe 16th day of January 2021 was an entertaining day.\r\nThe Gourmet Club’s taste of Sous Vide food was not yet over that they rolled in scientific cooking through the Molecular Gastronomy session. The science of cooking in an artistic manner to serve the eyes and raise the taste buds! Chef Mohit Arya gave a delightful session on molecular a gastronomy that will definitely kill the boredom of ‘COVID ‘, stay indoors. Students understood there is more to the world than one can apprehend. \r\n', 'x', '76.jpg', '2021-01-16', '2021-01-22 07:21:04', 1, 'dirAIHM'),
(77, 'WEBINAR ON PROJECT HOTELS', 'A Webinar was planned and successfully completed on 19th January 2021 by the Housekeeping department under the flagship of Amrapali Institute of Hotel Management, Haldwani. This session was planned and conducted keeping in mind the challenges and issues confronted both by the teacher in terms of making the students understand as well as by the student who is not in a position to visualize the center of the lecture. The participants were the faculties and the students of final year. The topic for the Webinar was NEW PROPERTY COUNTDOWN –Housekeeping in Newly Made Hotels and the resource person for this Webinar was Mr. Gaurav Singh Gangola, Manager Housekeeping, Seychelles. Brief Introduction of Mr. Gaurav Singh Gangola After passing out from IHM, Meerut in 2012 he started his career by working with The Oberoi Udaivilas, Udaipur and then worked at the supervisory and managerial level. Then finally rose to the position of Housekeeping Manager at Le Chateau De Feuilles –Seychelles. Mr. Gangola stared the session by illuminating the role of the housekeeping. He said that the housekeeping department of a hotel is the heart of the hotel. It is responsible for the cleanliness, maintenance, and aesthetic upkeep of the hotel. The role of housekeeping unlike food and beverage or the front of the house department’s starts way before the hotel commences as a full- fledged operation. The pre - opening calendar for any property starts two-three years ahead, but it is unrealistic to suppose that every executive housekeeper can be hired far enough in advance to take part in the original planning with top management and the architects. However, in some cases it is possible to plan ahead who your housekeeper will be and consult her in advance about the entire housekeeping operation. Other important points covered by him were every hotel prepares a Mock up Room for the start to attract the clientele. Also the entire project is completed under the guidance of the Project General Manager. During the entire pre-opening stage Snagging List plays a vital role which has more than 460 points. The session was concluded by adding the last point which is the handover from the Project Team starts and the handover is cross checked with De- Snagging list. This is very helpful in getting the things done accurately without any hiccups or complains.', 'x', '77.jpg', '2021-01-19', '2021-01-22 07:13:30', 1, 'dirAIHM'),
(78, 'Video making competition,FHM', 'A session came rolling out on the 23rd of January 2021 as a competition from Front office department by Ms. Mandeep Kaur Bankoti who officiated  a video competition for students interested in Club for Change activities. The winner of the activity was Mr. Bablu Parihar from BHM KU 7th Sem. Video display on Bomb Threat, Theft, Accidental fire in restaurants and hotels were produced by a large number of students.', 'x', '78.jpg', '2021-01-23', '2021-01-27 10:43:15', 1, 'DIRaihm'),
(79, 'Webinar culinary department', 'An online session was organized by the Culinary Department, AIHM on the 25th of January where Chef Sagar Rajput, a renowned cook at BOURY, Belgium introduced the young minds with thoughts on culinary challenges, recipe formulation and new evolving techniques. Chef Sagar Rajput’s style of delivery left a mark in the heart on every listener and students learnt in abundance.', 'x', '79.jpg', '2021-01-25', '2021-02-13 06:40:03', 1, 'dirAIHM'),
(80, 'Webinar on Marketing, FHM', 'New trend new techniques on the way\r\nA webinar that paves way to future trends through technology was organized online on the 30th of January by the Front Office Department, AIHM Haldwani. The speaker, Mr. Manasvee  Pushkarna, Director of sales from Taj Swarna, Amritsar  delivered a great session on how to deal with the pandemic through marketing techniques to enhance room revenue.\r\n', 'x', '80.jpg', '2021-01-30', '2021-02-03 10:39:22', 1, 'dirAIHM'),
(81, 'Knowledge booster,T & P cell', 'More is less: the mantra \r\nAn online platform shared by Mr. Gurmeet through the efforts of the placement cell at AIHM was an enthusiasm for all during the pandemic. Mr Gurmeet uplifted the spirit of the audience through his experience and emphasized on adding multi-skill to traits for success in the near future. His presence and speech brightened everyone and filled hoteliers with hope of a bright future.\r\n', 'x', '81.jpg', '2021-02-01', '2021-02-03 10:42:49', 1, 'dirAIHM'),
(82, 'FDP om ANSYS', 'In this technological era, there is a compelling need of computational analysis and engineering simulation in the world of engineering and technology. This is because of the widespread use of simulation across product development and optimization workflows in the industries. Keeping in this mind, Amrapali Institute of Technology and Sciences, Haldwani had organized a Five day faculty development program (Online) on ANSYS. The program was held from the 17th Sep 2020 – 21st September 2020 in the Department of Mechanical Engineering, under the aegis of TEQIP-III, Uttarakhand Technical University, Dehradun. <br>\r\nThe purpose of such faculty development programme is to enhance the performance of faculty members in education and research as well as augmenting organization capacities and culture. <br>\r\nMr. Ashish Dixit, coordinator had given the overview of this five-day faculty development programme to the attendees. Mr. Ashtosh Kumar Singh was the moderator for all the sessions.<br>\r\nThe session was concluded by vote of thanks, proposed by Mr. Hitendra Bankoti, Co-coordinator of this faculty development programme. The technical support was provided by Dr. Nitin Deepak and Dr. H S Jalal.\r\n', '82.pdf', '82.png', '2020-09-17', '2021-02-10 07:22:28', 1, 'dirmca'),
(83, 'Online Debate Competition', 'Faculty Of Commerce and Business Management, Amrapali Group Of Institutes, Haldwani organized an online debate competition on ‘Is Budget 2021 leading India towards $5 Trillion Economy’ on February 3rd, in which the Management & B.COM- HONS students participated.\r\nThe students enthusiastically discussed the various aspects of the Budget, voicing both their concerns and their expectations. While some termed the budget as progressive and the best possible in the backdrop of the economic slowdown, others called it a damp squib.\r\nThe expert of the session who is a young practicing fellow Chartered Accountant  Mr Digvijay Singh threw light on key budgetary announcements.\r\n\r\nThe program was coordinated by Ms. Priya Tewari-(BBA) and Ms. Babita Rawat-(BCH-HONS).\r\n\r\nThe competition was judged by Faculty members Dr Deep Chandra Oli, Dr Anand Kr Srivastava & Mr Amit Thaker.\r\n\r\nThe session dovetailed into the challenges put forth by the pandemic on the Indian economy and how best to utilize the budget for the year to help the nation spring back from these troubled times.\r\n\r\nThe 3 Winners of the competition are as follows:\r\n\r\n1st position- Mukul Kathayat( MBA 1st)\r\n\r\n2nd position- Tanveen Kaur( MBA 3rd)\r\n\r\n3rd position- Tithi Aggarwal( BBA 3rd).\r\n\r\nA huge congratulations to all the participants- \r\nVasundhara(BBA 1st)\r\nDivya Rautela( MBA 3rd)', 'x', 'sample.jpg', '2021-02-03', '2021-02-12 04:20:24', 1, 'dirmba'),
(84, 'Webinar culinary department', 'Story telling went through various steps of development to communicate with the little ones. It is amazing to note how fruit carving that started in China during the Tang Dynasty, which lasted from AD 618-906 became a legend and story communicator. Now fruit carving is restricted to corporate functions and massive occasions. A session on various enthalpies arousing the mind to become creative so that the platter not just fulfills the stomach’s requirement but also establishes the desire to more eye catching recipes with beautiful arrangement was held online on the 6th of February, 2021 where the students gathered in large number to discover more. It was an endeavor of the Gourmet Club under the Food Production Department and delivered by Chef Mr. Mohit Mathur of Hotel Lalit Jaipur. The Chef introduced the term Garde Manger that means different things in the modern professional kitchen. It refers to the cool refrigerated area where cold dishes and salads are prepared. The Chef emphasized the techniques, preparation objectives and methods of preparing and serving Cold Buffets that are the main attractions of the industry these days. Culinary is full of challenges and to face them requires a student to be aware and well equipped with knowledge. The Chef briefed about the professional kitchen and techniques involved therein and it was appreciated by all.', 'x', '84.jpg', '2021-02-06', '2021-02-12 10:23:45', 1, 'DIRaihm'),
(85, 'Webinar on RDM, FHM', 'Monday, the 8th of February was another knowledge booster day for the students and faculty at AIHM, Haldwani when the Training and placement Cell organized a session on RDM perspectives with Mr. Ashwin Vaidya, Director of rooms –Renaissance & Marriott Apartment, Mumbai. It was a practical introduction to the demands of the industry and its fulfillment for guest safety during their stay. The industry thrives through the guest and Mr Vaidya briefed how the Marriott has enhanced its cleanliness drive with best concern towards the associates and Guest.\r\nA key in the hand or a key in the phone makes a world of difference; it is a possession worth mentioning. There are many more things worth mentioning while the world is recovering from the pandemic menace and it’s after effects. Mr. Ashwin Vidya spoke about the various new introductions at Marriott to help develop safety norms and advocate its usefulness to the Guest as they arrive back to the Hotels. He spoke about Management strategies, Enhanced technology to counter virus spread, social distancing protocol, food safety protocols and Mariott Bonvoy and much more to make the guest feel comfortable as he arrives amidst the pandemic. The wheel of the cart moves on and on but in different forms and so does the world with a few necessary changes. Mr. Ashwin Vaidya’s talks were a great relief to the worried souls back stage whom the pandemic has left anxious.\r\n', 'x', '85.jpg', '2021-02-08', '2021-02-12 10:27:38', 1, 'DIRaihm'),
(86, 'Culinary Webinar, FHM', 'Tradition stays while trend changes\r\nThe new norms have not much place in the Hotel Brands that were already well versed with cleanliness. They had not to reorient them; they had to simply upgrade the way to reach out to the guest. They dug to the scientific ways of food preparation and preservation.\r\nIn a lively session with Chef Himanshu Taneja, Culinary Director, South Asia at Marriott International, on the 15th day of February, the entire Hotel Management Institute was abuzz with the reverberation of wellness food, ayurvedic inputs, healthy meals and the much desired scientific preparation for the guests. The session was organized by the Placement and Training Cell, AIHM in coordination with the Food Production Department for the benefit of the students.\r\n', 'x', '86.jpg', '2021-02-15', '2021-02-15 10:41:34', 1, 'dirAIHM'),
(87, 'Knowledge booster, FHM', 'They fog the room to help you cherish the serenity and view of the misty Himalayas\r\nA word from Mrs. Manjeet Kaur, Director Housekeeping in the Ananda in the Himalayas helped students to gain insights into the new norms and protocols as far as Housekeeping is concerned. The online session was organized by the Housekeeping Department at AIHM. A day in the Hotel functioning after the menace of the pandemic is under vigilance was virtually obtained through the online talk and students were made aware of the latest in use housekeeping gadgets and techniques. Queries of the inquisitive students were also replied to their satisfaction by the expert and the knowledge booster series at AIHM thus continued through sharing and enhancing knowledge.\r\n', 'x', '87.jpg', '2021-02-23', '2021-03-02 09:23:06', 1, 'dirAIHM'),
(88, 'Hospitality reorientation', 'The New Mantra for the day was ‘Put People First’. ‘Take care of your associates and they will take care of the guest’ and ‘embrace change to move ahead’. \r\nThe online session on the 25th of February by Mr. Abhay Singh, Director of Operations, The Westin, Pune was made lively and entertaining by the videos that he shared with his speech. It resonate the spirit of the students and encouraged them to stand dedicated as they understood that its importance does stand in every sphere of work. The reward that the organization gives to its employees is indeed work culture.\r\n', 'x', '88.jpg', '2021-02-25', '2021-03-03 09:50:30', 1, 'dirAIHM'),
(89, '5 Day SDP on AI', 'Amrapali Institute of Technology and Sciences and Uttarakhand Technical University, Dehradun jointly organized a 5 – Day Online Training Program on “ARTIFICIAL INTELLIGENCE” from 10th February – 14th February 2021 under TEQIP - III.<br>\r\nThe Online Training Program started with an introduction to Artificial Intelligence and fundamentals of Python Language. ‘NumPy’, a very useful Python library was discussed and its function was explained for working in domain of linear algebra, Fourier transform, and matrices. ', '89.docx', '89.jpg', '2021-02-10', '2021-03-09 10:14:30', 1, 'dirmca'),
(90, 'Live Webinar', 'FCBM- AGI, organised a Live Webinar for students on \"Career and Job roles in Financial services Industry - A complete analysis.” on 2nd March 2021 at 10 am. The Expert for the Session was Shri Aditya Gadge, Founder & CEO of AIWMI. The attendees discussed about the Career Options and Job roles in Banking, Insurance, Mutual Funds, Alternative Investments,Family Office Investments, Financial Modelling, Pension funds, credit analysis etc.', 'x', 'sample.jpg', '2021-03-02', '2021-03-10 05:03:23', 1, 'dirmba'),
(91, 'FO Webinar, FHM', 'Empathy to Emotions; all is required to participate in the road towards recovery\r\n\r\nMr. Ragvendra Pratap Singh, Associate Director of Sales, Holiday Inn, Gurugram, is an alumni of AIHM, Haldwani and his benign presence online on 6th March was an inspiration to all the students. We look for targets and set goals through creation of role models. Mr Raghvendra Pratap Singh with his gracious personality has all that a role model must possess in him. His talk on customer policy and engagements was equally encouraging and appealing.\r\n', 'x', '91.jpg', '2021-03-06', '2021-03-10 09:32:37', 1, 'dirAIHM'),
(92, 'Women’s Day 2021', 'Help forge a gender equal world- AIHM contributes its share on International Women’s Day\r\nHow a journey of thousand miles begin is as important as how it continues. The landmark day in the history of humanity came as a decision when women folk, the ones considered less blessed and bound by traditions that abort bravery came out in tens and thousands to protect the feminine rights. The world acknowledged the feminine power and thus came the humility to celebrate it as a day, the day being 8th March. AGI came forward to increase visibility of women creative and AIHM forged its activity through hosting the show with decoration by Housekeeping and Front Office Department, Food and Beverages and service by the Food Production and Service Department. The Women’s Day was felicitation of known women personalities.\r\n', 'x', 'sample.jpg', '2021-03-08', '2021-03-15 05:19:34', 0, 'dirAIHM'),
(93, 'Women’s Day 2021', 'Help forge a gender equal world- AIHM contributes its share on International Women’s Day\r\nHow a journey of thousand miles begin is as important as how it continues. The landmark day in the history of humanity came as a decision when women folk, the ones considered less blessed and bound by traditions that abort bravery came out in tens and thousands to protect the feminine rights. The world acknowledged the feminine power and thus came the humility to celebrate it as a day, the day being 8th March. AGI came forward to increase visibility of women creative and AIHM forged its activity through hosting the show with decoration by Housekeeping and Front Office Department, Food and Beverages and service by the Food Production and Service Department. The Women’s Day was felicitation of known women personalities.\r\n', 'x', '93.jpg', '2021-03-08', '2021-03-15 05:19:47', 1, 'dirAIHM'),
(94, 'One Week SDP on Aptitude', '<b>Amrapali Institute of Technology and Sciences</b> and Uttarakhand Technical University jointly organized a One Week Training Program On Aptitude (Reasoning) from 12th March 2021 onwards under TEQIP-III. The Experts for the Online Learning Program were Mr. Himanshu Gupta and Mr. Ashuthosh.<br>\r\nProf. (Dr.) M. K. Pandey, Director AITS warmly welcomed the Experts and the students to the Student Development Program during his Address. He said that all the students required having expertise in solving aptitude and reasoning question which will help the students to get their job in efficient manner. He also assured that similar Workshops will be organized in the future too.\r\nNear about 100 Students actively participated in the learning sessions. The Students learnt the various methods of aptitude and reasoning. This training is conducted to boost-up candidate’s Problem solving ability and to test how efficiently a student can respond to a task or a situation. The areas those are generally tested are Numerical Ability and Quantitative Aptitude, Logical reasoning, Data sufficiency and Interpretation.<br>\r\nThe Vote of Thanks was proposed by Dr. Suresh Chandra Wariyal, Coordinator and Mrs. Preeti Pandey Co-Coordinator of the Workshop. The Technical support and Media support was provided by Dr. Nitin Deepak and Mr. Rahul Palaria.', '94.docx', '94.jpg', '2021-03-12', '2021-03-24 03:41:52', 1, 'nitin'),
(95, ' Presentation contest, FHM', 'Be the change that you want to bring.\r\nThe first initiative to prepare students for after COVID 19 effects is to introduce technological skills in them. The Club for Change under the Department of Front Office in coordination with the co curricular team at AIHM introduced the concept of Power Point Presentation among their member students. An activity through power point presentation on various topics like COVID 19 and Hospitality Industry, Spiritual Tourism, Adventure Tourism etc was planned on 23rd March. The students displayed the learning that the club coordinators had instilled in them during the club hours and gave fantastic engrossing power point presentations to express their views. It was a wonderful engagement during the lovely spring afternoon.\r\n', 'x', '95.jpg', '2021-03-23', '2021-03-26 04:48:35', 1, 'dirAIHM'),
(96, 'Competition at UOU Haldwani.', 'Uttarakhand Open University organized a Poster Making and Essay Writing Competition on the topic NAMAMI GANGE for the students on 7th April 2021, where many students from different institutes participated to show case their talent. Some creative students of Amrapali Institute of Hotel Management also participated for the competition and finally secured two positions as well.We wish Mr. Sarthak Shah and Mr. Rohit Shah students of AIHM for securing second and third position respectively.', 'x', '96.jpg', '2021-04-07', '2021-04-29 09:57:44', 1, 'dirAIHM'),
(97, 'Webinar by PharmacyGraduates', 'Webinar on Industry expectations from Pharmacy Graduates was organized by Amrapali Institute of Pharmacy and sciences  on 01-Sep-20.<br>\r\n Expert : Mr Vipin Sharma <br>\r\nDirector (GMP)<br>\r\nPharmazone Ltd  <br>\r\nVipin Sharma is the heading the GMP service, and responsible for the leading the audit-monitoring and set-up functions for Pharmaceutical / Biotech companies across the globe. With more than 15+ years of industry exposure with Intas, Madgel, Macleods, Wochardt. He  shared his own experience and gave guidance regarding career growth in pharmaceutical industry. \r\n', 'x', '97.jpg', '2020-09-01', '2021-05-08 04:41:51', 1, 'nitin'),
(98, 'Mental Health Awareness', '<b>Webinar on Mental Health Awareness: </b>It is OK not to be OK Expert  Mrs Aarti Pathak (Psychologist) <br>\r\nOn world mental health day an interactive webinar was organized by Amrapali Institute of Pharmacy and sciences for Bpharm and Dpharm students   on 13-Oct-20. Mental health and stress related issues encounter by students and  issues arising due to covid -19 situation were also discussed. Importance of  understanding and empathy for patients  condition  as an Pharmacist  was highlighted.', 'x', '98.jpg', '2020-10-13', '2021-05-08 04:39:54', 1, 'nitin'),
(99, 'Webinar ', 'UNDERSTANDING FINANCIAL MARKET AND CAREER OPPORTUNITES.\r\n\r\nA webinar was conducted for the students of B.COM HONS on 29 April 2021 at from 1:00 to 2:00 pm.\r\nMr Praveen Dwivedi, who is the President of Awoke India Foundation gave his selected insights on understanding the financial market and focusing much on the various carrer opportunities available in this stream.\r\nThe students learnt and understood the scope in financial paradigm.', 'x', '99.jpg', '2021-04-29', '2021-05-08 21:36:27', 1, 'dirmba');

-- --------------------------------------------------------

--
-- Table structure for table `alumniprofile`
--

CREATE TABLE `alumniprofile` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `course` varchar(200) CHARACTER SET utf8 NOT NULL,
  `passout` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 NOT NULL,
  `company` varchar(200) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(200) CHARACTER SET utf8 NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL,
  `hometown` varchar(200) CHARACTER SET utf8 NOT NULL,
  `suggestion` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `pic` varchar(200) CHARACTER SET utf8 NOT NULL,
  `college` varchar(10) CHARACTER SET utf8 NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `whatsappno` varchar(15) NOT NULL,
  `allowed` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'student allowed AGI to use your information for promotional purposes in any type of media',
  `username` varchar(40) NOT NULL DEFAULT 'user',
  `del_date` varchar(50) NOT NULL DEFAULT 'x'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alumniprofiledelete`
--

CREATE TABLE `alumniprofiledelete` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `course` varchar(200) CHARACTER SET utf8 NOT NULL,
  `passout` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 NOT NULL,
  `company` varchar(200) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(200) CHARACTER SET utf8 NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL,
  `hometown` varchar(200) CHARACTER SET utf8 NOT NULL,
  `suggestion` text CHARACTER SET utf8 NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `pic` varchar(200) CHARACTER SET utf8 NOT NULL,
  `college` varchar(10) CHARACTER SET utf8 NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `whatsappno` varchar(15) NOT NULL,
  `allowed` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'student allowed AGI to use your information for promotional purposes in any type of media',
  `username` varchar(40) NOT NULL,
  `del_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumniprofiledelete`
--

INSERT INTO `alumniprofiledelete` (`id`, `name`, `course`, `passout`, `email`, `mobile`, `company`, `designation`, `location`, `hometown`, `suggestion`, `date`, `status`, `pic`, `college`, `DOB`, `whatsappno`, `allowed`, `username`, `del_date`) VALUES
(6422, 'Mukesh Tiwari', 'BCA', '2020', 'sss@yahoo.com', '877', '7766', 'Ghh', 'Vhh', 'Kjhh', '', '2020-05-16 21:05:05', 0, '6422.jpeg', 'x', '5-8', '9877', 1, 'operator', '2020-05-16 23:33:01'),
(6423, 'a', 'BHM', '2020', 'asd@asd.com', '9090909090', '9090909090', '9090909090', '9090909090', '9090909090', '9090909090', '2020-05-17 11:15:35', 0, 'x', 'x', '1-1', '9090909090', 0, 'user', '2020-05-17 03:12:11'),
(6425, 'x', 'B. Ed', '2002', 'sss@ssss.com', '9090909090', 's', 's', 's', 's', 's', '2020-05-17 11:56:07', 0, 'x', 'x', '15-4', '9090909090', 0, 'user', '2020-05-17 03:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `ANNOUNCEMENT` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`ID`, `SUBJECT`, `ANNOUNCEMENT`, `PATH_ATTACH`, `DATE_`, `DATE_START`, `DATE_END`, `TIME_`, `STATUS`, `USERNAME`) VALUES
(3, '<a href=\"competition\" target=\"_blank\">CONTENT WRITING COMPETITION</a>', 'All registered participants will attend a meeting on 28-Nov-17 at 2:00PM<br><br>\r\n\r\nVenue: Seminar Hall , Kautilya BLOCK, <br>\r\nFaculty of Computer Science & Applications \r\n<br><br>\r\n<a href=\"competition\" target=\"_blank\"><button class=\"btn btn-success\">click here for detail</button></a>', 'x', '27/11/2017', '2017-11-27', '2017-12-31', '12:59:31pm', 0, 'nitin'),
(4, '<a href=\"competition\" target=\"_blank\">CONTENT WRITING COMPETITION</a>', 'Revised Date of content Submission - 15<sup>th</sup> January, 2018', 'x', '29/11/2017', '2017-11-29', '2018-01-15', '10:42:56am', 0, 'nitin'),
(7, 'Required', 'Asstt. Warden for Girls Hostel in the Campus.  Only candidates willing to stay in the Hostel should  apply.  \r\nSalary – Negotiable.\r\nCandidates may apply through e-mail at office@amrapali.ac.in.\r\n', 'x', '27/09/2018', '2018-09-27', '2018-10-31', '02:22:55pm', 1, 'office'),
(8, 'WORKSHOP', 'Cloud Computing & Virtual World<br>\r\n<b>Organizer</b>: Faculty of Technology & Sciences<br>\r\n<b>Date</b>: 11<sup>th</sup>-March-2019<br><br>\r\n<a href=\"https://www.amrapali.ac.in/workshop\" target=\"_blank\" class=\"attach\">Click for detail & Registration</a>', 'x', '26/02/2019', '2019-02-26', '2019-03-11', '12:50:06pm', 1, 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `announcements_`
--

CREATE TABLE `announcements_` (
  `ID` int(11) DEFAULT NULL,
  `SUBJECT` varchar(200) DEFAULT NULL,
  `ANNOUNCEMENT` text DEFAULT NULL,
  `PATH_ATTACH` varchar(150) DEFAULT NULL,
  `DATE_` varchar(25) DEFAULT NULL,
  `DATE_START` varchar(25) DEFAULT NULL,
  `DATE_END` varchar(25) DEFAULT NULL,
  `TIME_` varchar(25) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `USERNAME` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bloglinks`
--

CREATE TABLE `bloglinks` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(250) NOT NULL,
  `LINK` text NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store blog links';

--
-- Dumping data for table `bloglinks`
--

INSERT INTO `bloglinks` (`ID`, `TITLE`, `LINK`, `USERNAME`, `DATE_`, `STATUS`) VALUES
(1, 'Advantages of Turbo Boost Technology', 'https://amrapali.ac.in/blog/2020/05/31/advantages-of-turbo-boost-technology/', 'nitin', '2020-06-26 15:06:00', 1),
(2, '﻿Investment Ideas during COVID 19 Menace: A Smart Approach', 'https://amrapali.ac.in/blog/2020/05/24/investment-ideas-during-covid-19-menace-a-smart-approach/', 'nitin', '2020-07-03 05:37:00', 0),
(6, 'BIO-HACK – HACKING OURSELVES', 'https://amrapali.ac.in/blog/2020/05/17/bio-hack-hacking-ourselves/', 'nitin', '2020-06-26 15:06:00', 1),
(11, 'Internet of Bodies (IoB)- Platform for Data Discovery', 'https://amrapali.ac.in/blog/2020/03/25/internet-of-bodies-iob-platform-for-data-discovery/', 'nitin', '2020-06-26 15:06:00', 1),
(17, 'ONLINE EDUCATION ', 'https://amrapali.https://amrahttps://amrapali.ac.in/blog/2020/05/10/https-amrapali-ac-in-blog-2020-05-10-online-education-covid-19/pali.ac.in/blog/2020/05/10/online-education-covid-19/ac.in/blog/2020/05/10/online-education-covid-19﻿/', 'nitin', '2020-06-26 15:06:00', 1),
(18, 'We are open to serve you and for us your safety comes first', 'https://amrapali.ac.in/blog/2020/06/09/we-are-open-to-serve-you-and-for-us-your-safety-comes-first/', 'nitin', '2020-06-26 15:06:00', 1),
(19, 'TRADE IN THE WAKE OF COVID 19:﻿ AN ECONOMIC VIEWPOINT OF LOCKED DOWN INDIA', 'https://amrapali.ac.in/blog/2020/06/07/trade-in-the-wake-of-covid-19﻿-an-economic-viewpoint-of-locked-down-india/', 'nitin', '2020-06-26 15:06:00', 1),
(20, 'Change in Guest Behaviour – Post Pandemic', 'http://amrapali.ac.in/blog/2020/06/27/change-in-guest-behaviour-post-pandemic/', 'nitin', '2020-06-26 15:06:00', 1),
(21, 'How To Outrun Scary Times: The Most Urgent 2020 Challenge﻿', 'https://amrapali.ac.in/blog/2020/06/21/how-to-outrun-scary-times-the-most-urgent-2020-challenge﻿/', 'nitin', '2020-06-26 15:06:00', 1),
(22, 'Removing the heat: Nanofluids promise efficient heat transfer', 'https://amrapali.ac.in/blog/2020/06/15/removing-the-heat-nanofluids-promise-efficient-heat-transfer/', 'nitin', '2020-06-26 15:06:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `GL_ID` int(11) NOT NULL,
  `PHOTO_` varchar(250) NOT NULL,
  `TITLE_` varchar(250) NOT NULL,
  `WIDTH_` int(11) NOT NULL,
  `HEIGHT_` int(11) NOT NULL,
  `CATEG_ID` int(11) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`GL_ID`, `PHOTO_`, `TITLE_`, `WIDTH_`, `HEIGHT_`, `CATEG_ID`, `STATUS`, `USERNAME_`) VALUES
(1, 'HD_Wallpapers_laptop_wallpapers_widescreen.jpg', 'x', 0, 0, 1, 1, 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `CATEG_ID` int(11) NOT NULL,
  `CATEGORY` varchar(45) NOT NULL,
  `DESC` varchar(500) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `PIC` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME_` varchar(150) NOT NULL,
  `PASSWORD_` varchar(120) NOT NULL,
  `USER_STATUS` varchar(15) NOT NULL,
  `DEPT_` varchar(200) NOT NULL DEFAULT 'all',
  `COURSE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME_`, `PASSWORD_`, `USER_STATUS`, `DEPT_`, `COURSE`) VALUES
('naveen', '123', 'adm', 'Arni University', 'University'),
('nitin', '123', 'adm', 'Arni University', 'University');

-- --------------------------------------------------------

--
-- Table structure for table `menu_1`
--

CREATE TABLE `menu_1` (
  `ID_` int(11) NOT NULL,
  `PRE_ICON` varchar(150) NOT NULL,
  `MENU` varchar(30) NOT NULL,
  `PATH_` varchar(300) NOT NULL,
  `PRIORITY_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_1`
--

INSERT INTO `menu_1` (`ID_`, `PRE_ICON`, `MENU`, `PATH_`, `PRIORITY_`) VALUES
(1, 'fa fa-dropbox fa-fw', 'Dashboard', 'dashboard', 1),
(3, 'fa fa-camera fa-fw', 'Manage Activities', 'activity', 3),
(4, 'fa fa-camera fa-fw', 'News', 'newsevents', 4),
(5, 'fa fa-camera fa-fw', 'Upcoming Events', 'upcoming', 5),
(6, 'fa fa-camera fa-fw', 'Announcements', 'announcements', 6),
(8, 'fa fa-user fa-fw', 'Gallery', 'gallery', 7),
(9, 'fa fa-user fa-fw', 'Blogs', 'blog', 8),
(10, 'fa fa-user fa-fw', 'Notices', 'notices', 9);

-- --------------------------------------------------------

--
-- Table structure for table `menu_user_status`
--

CREATE TABLE `menu_user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_user_status`
--

INSERT INTO `menu_user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Admin'),
('dir', 'Director'),
('dm', 'Data Manager'),
('exam', 'Exam'),
('fc', 'Faculty'),
('ofc', 'Main Office');

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

CREATE TABLE `newsevents` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `NEWS` text NOT NULL,
  `BLOG_URL` varchar(500) NOT NULL DEFAULT 'x',
  `PATH_ATTACH` varchar(150) NOT NULL,
  `FONTJI` varchar(250) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsevents`
--

INSERT INTO `newsevents` (`ID`, `SUBJECT`, `NEWS`, `BLOG_URL`, `PATH_ATTACH`, `FONTJI`, `DATE_`, `DATE_START`, `DATE_END`, `TIME_`, `STATUS`, `USERNAME`) VALUES
(1, 'Admission open 2021', 'We are the top ranked university in Himanchal Pradesh, India. We welcome in our growing world. You can take admission online and offline mode. We serve your your bright future with ease.', 'x', 'x', 'x', '2021-05-01', '2021-05-01', '2021-10-02', '3:13:35 PM', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `ANNOUNCEMENT` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`ID`, `SUBJECT`, `ANNOUNCEMENT`, `PATH_ATTACH`, `DATE_`, `DATE_START`, `DATE_END`, `TIME_`, `STATUS`, `USERNAME`) VALUES
(2, '[KU] - Urgent: Filling online examination forms of KU courses', 'x', '2.pdf', '01/02/2021', '2021-02-01', '2021-02-28', '03:43:51pm', 1, 'exam'),
(3, '[UTU] Regarding Special Back Paper 2020 ', 'x', '3.pdf', '02/02/2021', '2021-02-02', '2021-02-28', '03:34:26pm', 1, 'exam'),
(4, '[UTU] - Regarding Online Examination Form for the Session 2020-20', 'x', '4.pdf', '02/02/2021', '2021-02-02', '2021-02-28', '03:43:01pm', 1, 'exam'),
(6, '[UTU]-Semester exam of b.Tech course student who left their paper due to Covid - 19', 'x', '6.pdf', '03/02/2021', '2021-02-03', '2021-02-15', '04:34:57pm', 1, 'exam'),
(7, '[UTU]- Schedule of B.Tech course students who left their paper due to Covid-19', 'x', '7.pdf', '03/02/2021', '2021-02-03', '2021-02-15', '04:36:41pm', 1, 'exam'),
(8, '[UTU] - Notice regarding B.Pharma Second, Fourth and Sixth Semester Examination', 'x', '8.pdf', '04/02/2021', '2021-02-04', '2021-03-10', '09:15:08am', 1, 'exam'),
(9, '[UTU] - Tentative Schedule B.Pharma Second, Fourth and Sixth Semester', 'x', '9.pdf', '04/02/2021', '2021-02-04', '2021-02-27', '09:17:18am', 1, 'exam'),
(10, '[ku] - Urgent : To fill online examination forms of KU courses', 'x', '10.pdf', '04/02/2021', '2021-02-04', '2021-02-23', '02:46:35pm', 1, 'exam'),
(11, '[UTU] - B.Tech 8 Sem Regular Final Scheme (Covid - 19 Infected)', 'X', '11.pdf', '05/02/2021', '2021-02-05', '2021-02-15', '01:08:12pm', 1, 'exam'),
(12, '[UTU] - B.Pharma Final Scheme', 'x', '12.pdf', '07/02/2021', '2021-02-07', '2021-02-28', '12:21:30pm', 1, 'exam'),
(13, '[UTU] - Instruction to student for appear B.Tech Final Sem Exam (10 Feb to 13 Feb 2021)', 'x', '13.pdf', '09/02/2021', '2021-02-09', '2021-02-15', '09:49:53am', 1, 'exam'),
(14, '[KU] - Notice to conduct the odd semester practical examinations of KU courses   ', 'x', '14.pdf', '09/02/2021', '2021-02-09', '2021-03-13', '09:58:25am', 1, 'exam'),
(15, '[KU]- Press Note/Information', 'x', '15.jpg', '10/02/2021', '2021-02-10', '2021-02-26', '09:51:06am', 1, 'exam'),
(16, '[KU] - Amendment in the admission rules for the session 2020-21', 'x', '16.jpg', '17/02/2021', '2021-02-17', '2021-12-31', '09:41:18am', 1, 'exam'),
(17, '[KU] - Notice regarding B.Ed. Examination ', 'x', '17.pdf', '20/02/2021', '2021-02-20', '2021-03-15', '03:30:04pm', 1, 'exam'),
(18, '[UBTE] - Notice regarding scrutiny/Re-evaluation', 'x', '18.pdf', '24/02/2021', '2021-02-24', '2021-03-06', '02:12:25pm', 1, 'exam'),
(19, '[KU] - Notice to fill the online examination form for the students whose result was declared after 23-02-2021 and have C.O.P/Ex-Student', 'x', '19.pdf', '26/02/2021', '2021-02-26', '2021-03-03', '10:08:51am', 1, 'exam'),
(20, '[KU] - Press Note/ Information regarding extension of date to fill the online examination form by the students for the upcoming exams', 'x', '20.pdf', '01/03/2021', '2021-03-01', '2021-03-06', '09:26:40am', 1, 'exam'),
(21, '[KU] - Information regarding B.Ed. ', 'x', '21.pdf', '10/03/2021', '2021-03-10', '2021-03-31', '04:03:21pm', 1, 'exam'),
(22, '[UTU] - Notice regarding date extension of online registration of first semester students and to fill the online examination form for odd semester exam ', 'x', '22.pdf', '27/03/2021', '2021-03-27', '2021-04-03', '01:43:25pm', 1, 'exam'),
(23, '[KU] - Scheme BBA course for Odd Semester Examination 2020-21', 'x', '23.pdf', '06/04/2021', '2021-04-06', '2021-05-09', '10:28:28am', 1, 'exam'),
(24, '[KU] - Scheme BCA course for Odd Semester Examination 2020-21', 'x', '24.pdf', '06/04/2021', '2021-04-06', '2021-05-06', '10:29:58am', 1, 'exam'),
(25, '[KU] - Scheme B.Com (H) course for Odd Semester Examination 2020-21', 'x', '25.pdf', '06/04/2021', '2021-04-06', '2021-04-25', '10:31:55am', 1, 'exam'),
(26, '[UTU] - Final Scheme of B.Tech Course for Odd Semester Exam 2020-21', 'Please refer/verify from University website update.', '26.pdf', '12/04/2021', '2021-04-12', '2021-05-04', '10:23:03am', 1, 'exam'),
(27, '[UTU] - Final Scheme of BHMCT course for Odd Semester Exam 2020-21', 'Please refer/verify from University website update.', '27.pdf', '12/04/2021', '2021-04-12', '2021-05-04', '10:26:17am', 1, 'exam'),
(28, '[UTU] - Final Scheme of MBA course for Odd Semester Exam 2020-21', 'Please refer/verify from University website update.', '28.pdf', '12/04/2021', '2021-04-12', '2021-05-13', '10:30:38am', 1, 'exam'),
(29, '[UTU] - Final Scheme of B.Pharma course for Odd Semester Exam 2020-21', 'Please refer/verify from University website update.', '29.pdf', '12/04/2021', '2021-04-12', '2021-05-01', '10:53:15am', 1, 'exam'),
(30, '[UTU] - Notice regarding final scheme of UTU courses for Odd Semester Exam 2020-21', 'x', '30.pdf', '12/04/2021', '2021-04-12', '2021-05-15', '11:01:09am', 1, 'exam');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(250) NOT NULL,
  `PATH_` varchar(500) NOT NULL,
  `STATUS_` int(11) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `CRS_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `UPCOMING_EVENT` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`ID`, `SUBJECT`, `UPCOMING_EVENT`, `PATH_ATTACH`, `DATE_`, `DATE_START`, `DATE_END`, `TIME_`, `STATUS`, `USERNAME`) VALUES
(5, '<a href=\"competition\" target=\"_blank\">CONTENT WRITING COMPETITION</a>', 'Content Submission Date <h3 [removed]>15<sup>th</sup> January, 2018</h3>\r\n<br><br>\r\n<a href=\"competition\" target=\"_blank\">&lt;button class=\"btn btn-primary\"&gt;click here for detail&lt;/button&gt;&lt;/a>', 'x', '01/01/2018', '2018-01-01', '2018-01-15', '09:48:48pm', 1, 'nitin'),
(6, 'ABHYUDAYA 2018', '13th Annual ‘NATIONAL HOSPITALITY TALENT HUNT 2018’, “ABHYUDAYA” On February 20th and 21st with exciting activities.', '6.pdf', '24/01/2018', '2018-01-24', '2018-02-21', '10:50:09am', 0, 'dirAIHM'),
(8, 'Adhyayan Case Studies 2018', 'Case Studies (1 to 11)', '8.pdf', '13/02/2018', '2018-02-13', '2018-02-20', '03:52:19pm', 0, 'dirAIHM'),
(9, 'Management Games', '\"Management Games\" will be organized by Faculty of Commerce & Business Management on Feb 15th 2018', 'x', '15/02/2018', '2018-02-15', '2018-02-16', '03:33:02pm', 1, 'dirmba'),
(10, 'IMPULSE-2018', 'Annual Tech-Fest of Faculty of Computer Science & Applications will be organized on 17th March 2018', '10.jpg', '07/03/2018', '2018-03-07', '2018-03-19', '09:49:39am', 1, 'nitin'),
(11, ' Workshop on : Statistical Package for the Social Sciences (SPSS) will be organised by FCBM, AGI', 'Faculty of Commerce and Business Management is going to organize a workshop on Statistical Package for the Social Sciences (SPSS) with a view to impart practical training in Research Methodology. ', '11.pdf', '22/03/2018', '2018-03-22', '2018-03-24', '11:54:58am', 1, 'dirmba'),
(12, 'PRABANDHAN - 2018 \" Annual Management Fest \"', 'Faculty of Commerce and Business Management proudly announce to organize PRABANDHAN 2018, Annual management fest that will be held on 7 th April 2018.', '12.jpg', '22/03/2018', '2018-03-22', '2018-04-07', '02:14:33pm', 1, 'dirmba'),
(13, 'Workshop on \"Hybrid App Development\"', 'Faculty of Computer Science & Applications is organizing a \"Workshop on Hybrid App Development\" on 21st-April-2018 for B.Sc. (IT) Final Yr, BCA Final Yr & B.Sc. (CS) final yr students. <a href=\"https://www.amrapali.ac.in/workshop\" target=\"_blank\"><b>more...</b></a>', 'x', '09/04/2018', '2018-04-09', '2018-04-21', '07:52:33pm', 1, 'nitin'),
(15, ' Farewell for the Batch (2015-18) of B.Com(Hons.)', 'Faculty of Commerce & Business Management is going to organize a farewell party for the students of B.Com(Hons.) batch (2015-18) on 18th May, 2018.', '15.JPG', '14/05/2018', '2018-05-14', '2018-05-19', '08:55:01am', 1, 'dirmba'),
(16, 'Farewell of students from BBA Batch (2015-18)', 'Faculty of Commerce & Business Management is going to organize a farewell party for the students of BBA batch (2015-18) on 16th May, 2018. ', '16.jpg', '14/05/2018', '2018-05-14', '2018-05-19', '04:41:48pm', 1, 'dirmba'),
(17, '<h4>Late Smt. Kamla Dhingra Memorial Meet 2018</h4>', 'Inter-School Competition <br>\r\nInter-Collegiate Competition <br><br>\r\n<a href=\"https://www.amrapali.ac.in/index.php/Agi/kdmm2018\">KDMM 2018 - Click Here for Detail</a>', 'x', '09/10/2018', '2018-10-09', '2018-10-26', '09:18:15am', 1, 'nitin'),
(18, 'AVAHAN 2019', 'The 6<sup>th</sup> AVAHAN- The International Conference at Amrapali Institute of Hotel Management will be help on 1<sup>st</sup>-2<sup>nd</sup> February,2019. For more detail <a href=\'https://www.amrapali.ac.in/assets/avahan/AVAHAN 2019 Brochure.pdf\' target=\'_blank\'>click here</a>', '18.pdf', '19/12/2018', '2018-12-19', '2019-02-03', '10:15:23am', 1, 'nitin'),
(19, 'ALUMNITE ', 'FCBM Alumni Meet has been scheduled on 25th January 2019. We expect alumni of all batches to participate in the Alumni Meet and to make it successful by your benign presence.', '19.jpg', '07/01/2019', '2019-01-07', '2019-01-31', '03:36:03pm', 1, 'dirmba'),
(20, 'ABHYUDAYA - 2019', 'The 14th National Hospitality Talent Hunt is going to be held on 22nd and 23rd February 2019.', '20.pdf', '05/02/2019', '2019-02-05', '2019-02-24', '03:43:42pm', 0, 'dirAIHM'),
(21, 'SPANDAN 2019', 'AGI Annual fest \"SPANDAN\" 2019<br>\r\n<b>Carnival</b>: 27<sup>th</sup>-Feb-2019<br>\r\n<b>Annual Foundation Day</b>: 28<sup>th</sup>-Feb-2019<br>\r\n<a href=\"https://spandan2019.amrapali.ac.in\" target=\"_blank\" class=\"attach\">Click for detail</a>', 'x', '01/02/2019', '2019-02-18', '2019-03-02', '09:56:41am', 1, 'nitin'),
(22, 'WORKSHOP', 'Cloud Computing & Virtual World<br>\r\n<b>Organizer</b>: Faculty of Technology & Sciences<br>\r\n<b>Date</b>: 11<sup>th</sup>-March-2019<br><br>\r\n<a href=\"https://www.amrapali.ac.in/workshop\" target=\"_blank\" class=\"attach\">Click for detail & Registration</a>', 'x', '26/02/2019', '2019-02-26', '2019-03-13', '12:49:37pm', 1, 'nitin'),
(23, 'SANDHAAN 2019', 'Annual Tech Fest - sandhan-2019.<br>\r\n<b>Organizer</b>: Faculty of Technology & Sciences<br>\r\n<b>Date</b>: 06<sup>th</sup>-April-2019<br><br>\r\n<a href=\"https://www.amrapali.ac.in/sandhaan\" target=\"_blank\" class=\"attach\">Click for detail & Registration</a>', 'x', '10/03/2019', '2019-03-10', '2019-04-07', '01:29:43pm', 1, 'nitin'),
(24, 'PRABANDHAN 2019', 'Annual Management Fest\r\n\r\nOrganizer- Faculty of Commerce & Business & Management\r\n\r\nDate- 16th March 2019', '24.jpg', '13/03/2019', '2019-03-13', '2019-03-31', '11:45:12am', 1, 'dirmba'),
(25, 'International Yoga Day 21st-June at 6 am', 'Amrapali Group of Institutes is organizing International yoga day at its own place, which is conducted by Adiyoga Foundation on 21st-Jun at 6 am. ', '25.jpg', '04/06/2019', '2019-06-04', '2019-06-21', '06:03:00am', 1, 'nitin'),
(26, 'Register for International Yoga Day', 'International Yoga Day is being celebrated at Amrapali Group of Institutes, Haldwani on 21st June 2019. During this a Yoga Wellness Session is being organized by Adiyog Foundation at the sparkling green, pollution free campus of Amrapali Group of Institutes from 6 am onwards. Participants are requested to provide their details to Register. <a href=\"https://forms.gle/JpPdnZQAvn9dR27A8\" target=\"_blank\">Register here</a>', 'x', '04/06/2019', '2019-06-04', '2019-06-20', '04:35:51pm', 0, 'nitin'),
(27, 'IOT Workshop 2019', 'One Day Workshop on IOT (Internet of Things) with Python is being organized by Faculty of Technology &amp; Computer Applications on 14th-sep-2019.', '27.jpg', '11/09/2019', '2019-09-11', '2019-09-14', '03:23:47pm', 0, 'nitin'),
(28, 'KDMM 2019', 'Late Smt. Kamla Dhingra Memorial Meet 2019 (Quest for the best) is being organized on 12th of October, 2019.<br><a href=\"https://amrapali.ac.in/index.php/agi/kdmm2019\" target=\"_blank\" class=\"btn btn-danger\">Click for details</a>', 'x', '22/09/2019', '2019-09-22', '2019-10-12', '05:17:33pm', 1, 'nitin'),
(29, 'FCBM participating in AIWMI- 3rd National Competition - Credit Research Challenge 2020', 'FCBM students of MBA- 1st Year and MBA 2nd year are participating in the 3rd National Competition - Credit Research Challenge 2020 organized  by AIWMI. ', '29.jpg', '24/12/2019', '2019-12-24', '2020-01-20', '12:20:16pm', 1, 'dirmba'),
(30, 'Abhyudaya-2020', 'The 15th National Hospitality Talent Hunt is going to be held on 18th and 19th February 2020.', 'x', '11/02/2020', '2020-02-11', '2020-02-20', '03:28:26pm', 1, 'dirAIHM'),
(31, 'Abhyudaya-2020', 'The 15th National Hospitality Talent Hunt is going to be held on 18th and 19th February 2020. ', 'x', '11/02/2020', '2020-02-11', '2020-02-20', '03:34:38pm', 1, 'dirAIHM');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_`
--

CREATE TABLE `upcoming_` (
  `ID` int(11) DEFAULT NULL,
  `SUBJECT` varchar(200) DEFAULT NULL,
  `UPCOMING_EVENT` text DEFAULT NULL,
  `PATH_ATTACH` varchar(150) DEFAULT NULL,
  `DATE_` varchar(25) DEFAULT NULL,
  `DATE_START` varchar(25) DEFAULT NULL,
  `DATE_END` varchar(25) DEFAULT NULL,
  `TIME_` varchar(25) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `USERNAME` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `userID` int(10) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `emailID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `contactNo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Requirement` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `ID` int(11) NOT NULL,
  `MENU` int(11) NOT NULL,
  `USER_` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`ID`, `MENU`, `USER_`) VALUES
(1, 1, 'adm'),
(3, 3, 'adm'),
(4, 4, 'adm'),
(5, 5, 'adm'),
(6, 6, 'adm'),
(7, 1, 'dir'),
(9, 3, 'dir'),
(10, 4, 'dir'),
(12, 1, 'ofc'),
(13, 6, 'ofc'),
(16, 8, 'adm'),
(17, 8, 'dm'),
(18, 1, 'dm'),
(19, 9, 'adm'),
(20, 9, 'dm'),
(21, 10, 'adm'),
(22, 10, 'exam');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Administrator'),
('dir', 'Director'),
('dm', 'Data Manager'),
('exam', 'exam'),
('usr', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_committees`
--

CREATE TABLE `_arni_committees` (
  `SNO` int(11) NOT NULL,
  `COMMITTEE` text NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `CONTACT_PERSON` varchar(100) NOT NULL,
  `MOBILE` varchar(70) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_committees`
--

INSERT INTO `_arni_committees` (`SNO`, `COMMITTEE`, `DESCRIPTION`, `CONTACT_PERSON`, `MOBILE`, `EMAIL`, `USERNAME`, `DATE_`) VALUES
(1, 'Anti-Ragging Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(2, 'Hostel Discipline Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(3, 'Proctorial Board', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(4, 'SC/ST Welfare Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(5, 'Social & Cultural Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(6, 'Sports & Athletics Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(7, 'Student Grievance Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(8, 'Technology Incubation & Innovation Cell', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(9, 'University Discipline Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(10, 'Internal Complaints Committee (ICC)', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(11, 'Students Consultative Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(12, 'Women Welfare Cell', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(13, 'Finance Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54'),
(14, 'Employee Grievance Committee', 'x', 'x', 'x', 'x', 'admin', '2021-05-12 08:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_course_detail`
--

CREATE TABLE `_arni_course_detail` (
  `CRSDETID` int(11) NOT NULL,
  `SCHOOL` int(11) NOT NULL,
  `DEPARTMENT` int(11) NOT NULL,
  `COURSE_TYPE` int(11) NOT NULL,
  `COURSE` varchar(100) NOT NULL,
  `DURATION` varchar(25) NOT NULL,
  `ELIGIBILITY` varchar(150) NOT NULL,
  `FEE` varchar(50) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_course_detail`
--

INSERT INTO `_arni_course_detail` (`CRSDETID`, `SCHOOL`, `DEPARTMENT`, `COURSE_TYPE`, `COURSE`, `DURATION`, `ELIGIBILITY`, `FEE`, `USERNAME`, `DATE_`) VALUES
(1, 1, 7, 6, 'M.Phil English', '2 Years', 'Pass PG in English with aggregate 55 % marks', '22500', 'admin', '2021-05-21 03:17:21'),
(2, 1, 7, 1, 'Ph.D English', '5 Years', 'Pass PG in appropriate with aggregate 55 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(3, 1, 9, 1, 'Ph.D Mass Communication', '5 Years', 'Pass PG in appropriate with aggregate 55 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(4, 1, 9, 1, 'Ph.D General Arts', '5 Years', 'x', '0', 'admin', '2021-05-21 03:17:21'),
(5, 1, 9, 1, 'Ph.D Economics', '5 Years', 'Pass PG in appropriate with aggregate 55 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(6, 1, 6, 2, 'MA (Economics)', '2 Years', 'Any Graduate with a aggregate 50 % marks', '13125', 'admin', '2021-05-21 03:17:21'),
(7, 1, 6, 2, 'MA (Education)', '2 Years', 'Any Graduate with a aggregate 50 % marks', '13000', 'admin', '2021-05-21 03:17:21'),
(8, 1, 7, 2, 'MA(Eng)', '2 Years', 'Any Graduate with a aggregate 50 % marks', '13125', 'admin', '2021-05-21 03:17:21'),
(9, 1, 9, 2, 'MA (Journalism & Mass Communication)', '2 Years', 'Any Graduate with a aggregate 50 % marks', '25000', 'admin', '2021-05-21 03:17:21'),
(10, 1, 14, 2, 'MA (Psychology)', '2 Years', 'Any Graduate with a aggregate 50 % marks', '13000', 'admin', '2021-05-21 03:17:21'),
(11, 1, 8, 3, 'B.Design (Fashion)', '4 Years', 'Pass 10+2 in any stream with aggregate 45% marks', '20000', 'admin', '2021-05-21 03:17:21'),
(12, 1, 9, 3, 'BA', '3 Years', 'Pass 10+2 in any stream with aggregate 45% marks', '10500', 'admin', '2021-05-21 03:17:21'),
(13, 1, 9, 3, 'BA (Journalism and Mass Communication)', '3 Years', 'Pass 10+2 in any stream with aggregate 45% marks', '23625', 'admin', '2021-05-21 03:17:21'),
(14, 2, 1, 4, 'Integrated Program-BBA & MBA (Pharmaceutical Chemistry)', '5 Years', 'x', '0', 'admin', '2021-05-21 03:17:21'),
(15, 2, 1, 4, 'Integrated Program-BBA & MBA', '5 Years', 'Pass 10+2 in any stream with aggregate 45 % marks', '27500', 'admin', '2021-05-21 03:17:21'),
(16, 2, 1, 6, 'M.Phil Management', '2 Years', 'x', '0', 'admin', '2021-05-21 03:17:21'),
(17, 2, 1, 1, 'Ph.D Management', '5 Years', 'MBA/ M.Com or M.Phil with a minimum 55% marks', '45000', 'admin', '2021-05-21 03:17:21'),
(18, 2, 3, 6, 'M.Phil Commerce', '2 Years', 'MBA or M.Com with a minimum 55% marks', '22500', 'admin', '2021-05-21 03:17:21'),
(19, 2, 3, 1, 'Ph.D Commerce', '5 Years', 'MBA/ M.Com or M.Phil with a minimum 55% marks', '45000', 'admin', '2021-05-21 03:17:21'),
(20, 2, 1, 2, 'MBA (Travel & Tourism)', '2 Years', 'Any Graduate with a aggregate 50 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(21, 2, 1, 2, 'MBA', '2 Years', 'Any Graduate with a aggregate 50 % marks', '52500', 'admin', '2021-05-21 03:17:21'),
(22, 2, 1, 2, 'MHA', '2 Years', 'Any Graduate with a aggregate 50 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(23, 2, 1, 2, 'MBA (Avaition)', '3 Years', 'Any Graduate with a aggregate 50 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(24, 2, 3, 2, 'M.com', '2 Years', 'Pass Bachelor?s  degree in Commerce with at least 50% marks', '15750', 'admin', '2021-05-21 03:17:21'),
(25, 2, 1, 3, 'BBA', '3 Years', 'Pass 10+2 in any stream with aggregate 45 % marks', '23625', 'admin', '2021-05-21 03:17:21'),
(26, 2, 1, 3, 'BBA(Travel & Tourism)', '3 Years', 'Pass 10+2 in any stream with aggregate 45 % marks', '32500', 'admin', '2021-05-21 03:17:21'),
(27, 2, 1, 3, 'BHA', '3 Years', 'Pass 10+2 in any stream with aggregate 45 % marks', '32500', 'admin', '2021-05-21 03:17:21'),
(28, 2, 1, 3, 'BBA (Avaition)', '3 Years', 'Pass 10+2 in any stream with aggregate 45 % marks', '23625', 'admin', '2021-05-21 03:17:21'),
(29, 2, 3, 3, 'B.Com', '3 Years', 'Pass 10+2 in any stream with aggregate 45 % marks', '12500', 'admin', '2021-05-21 03:17:21'),
(30, 3, 4, 6, 'M.Phil Computer Application', '2 Years', 'M.Sc. (IT/CS) or MCA with a minimum 55% marks in aggregate', '22500', 'admin', '2021-05-21 03:17:21'),
(31, 3, 4, 1, 'Ph.D Computer Application', '5 Years', 'M.Sc. (IT/CS) or MCA or M.Phil with a minimum 55% marks in aggregate', '45000', 'admin', '2021-05-21 03:17:21'),
(32, 3, 4, 2, 'MCA', '3 Years', 'BCA, B.Sc(IT), or B.Sc in PCM with aggregate 50% marks', '42500', 'admin', '2021-05-21 03:17:21'),
(33, 3, 4, 3, 'BCA', '3 Years', 'Pass 10+2 in Physics, Maths and Chemistry  with 50% marks in aggregate', '22500', 'admin', '2021-05-21 03:17:21'),
(34, 3, 4, 3, 'Bsc (IT)', '3 Years', 'Pass 10+2 in any stream with aggregate  45% marks', '22500', 'admin', '2021-05-21 03:17:21'),
(35, 4, 10, 6, 'M.Phil Zoology', '2 Years', 'M.Sc in Zoology with at least 55 percent aggregate marks', '22500', 'admin', '2021-05-21 03:17:21'),
(36, 4, 10, 6, 'M.Phil Botany', '2 Years', 'M.Sc in Botany with at least 55 percent aggregate marks', '22500', 'admin', '2021-05-21 03:17:21'),
(37, 4, 10, 1, 'Ph.D Zoology', '5 Years', 'M.Sc or M.Phil  in respective discipline with at least 55 percent aggregate marks', '45000', 'admin', '2021-05-21 03:17:21'),
(38, 4, 10, 1, 'Ph.D Botany', '5 Years', 'M.Sc or M.Phil  in respective discipline with at least 55 percent aggregate marks', '45000', 'admin', '2021-05-21 03:17:21'),
(39, 4, 10, 2, 'Msc(Botany)', '2 Years', 'Graduate in CBZ with aggregate 50% marks', '31500', 'admin', '2021-05-21 03:17:21'),
(40, 4, 10, 2, 'Msc(Zoology)', '2 Years', 'Graduate in CBZ with aggregate 50% marks', '31500', 'admin', '2021-05-21 03:17:21'),
(41, 4, 10, 3, 'Msc (Microbiology)', '2 Years', 'Graduate in CBZ with aggregate 50% marks', '31500', 'admin', '2021-05-21 03:17:21'),
(42, 4, 10, 3, 'BSC Medical', '3 Years', 'Pass 10+2 in Physics, Chemistry and Biology with  at least 45% marks in aggregate', '13125', 'admin', '2021-05-21 03:17:21'),
(43, 4, 10, 3, 'Bsc (Microbiology)', '3 Years', 'Pass 10+2 in Physics, Chemistry and Biology with  at least 45% marks in aggregate', '12500', 'admin', '2021-05-21 03:17:21'),
(44, 4, 10, 3, 'BSC (Agriculture)', '4 Years', 'Pass 10+2 in Science stream with  at least 45% marks in aggregate', '30000', 'admin', '2021-05-21 03:17:21'),
(45, 4, 10, 3, 'BSC (Horticulture)', '4 Years', 'Pass 10+2 in Science stream with  at least 45% marks in aggregate', '30000', 'admin', '2021-05-21 03:17:21'),
(46, 5, 12, 4, 'D.Pharma', '2 Years', 'Pass 10+2 in PCB/PCM with atleast 50% marks', '42500', 'admin', '2021-05-21 03:17:21'),
(47, 5, 12, 4, 'Diploma in MLT', '3 Years', 'Pass 10+2 in Science stream with atleast 45% marks', '32500', 'admin', '2021-05-21 03:17:21'),
(48, 5, 12, 4, 'Diploma in Dialysis Technology', '3 Years', 'Pass 10+2 in Science stream with atleast 45% marks', '32500', 'admin', '2021-05-21 03:17:21'),
(49, 5, 12, 4, 'Diploma in Rural Health Care', '3 Years', 'Pass 10th Standard', '32500', 'admin', '2021-05-21 03:17:21'),
(50, 5, 12, 4, 'PG Diploma in Clinic Diagnostics', '3 Years', 'B.Sc. with with Biological subjects, Biochemistry, B.Pharma or Bachelor\'s Degree of life sciences with aggregate 50% marks', '32500', 'admin', '2021-05-21 03:17:21'),
(51, 5, 12, 4, 'PG Diploma in Clinic Pathology & Diagnostics', '3 Years', 'Any Graduate with a aggregate 50 % marks', '32500', 'admin', '2021-05-21 03:17:21'),
(52, 5, 12, 3, 'B.Pharmacy', '4 Years', 'Pass10+2 in PCB/PCM with at least 50% marks', '55000', 'admin', '2021-05-21 03:17:21'),
(53, 6, 13, 6, 'M.Phil Physics', '2 Years', 'M.Sc in Physics with a aggregate 55% marks', '22500', 'admin', '2021-05-21 03:17:21'),
(54, 6, 13, 6, 'M.Phil Chemistry', '2 Years', 'M.Sc in Chemistry with a aggregate 55% marks', '22500', 'admin', '2021-05-21 03:17:21'),
(55, 6, 13, 6, 'M.Phil Maths', '2 Years', 'M.Sc in Maths with a aggregate 55% marks', '22500', 'admin', '2021-05-21 03:17:21'),
(56, 6, 13, 1, 'Ph.D Chemistry', '5 Years', 'M.Sc or M.Phil in appropriate with a aggregate 55% marks', '45000', 'admin', '2021-05-21 03:17:21'),
(57, 6, 13, 1, 'Ph.D Physics', '5 Years', 'x', '0', 'admin', '2021-05-21 03:17:21'),
(58, 6, 13, 1, 'Ph.D Math', '5 Years', 'x', '0', 'admin', '2021-05-21 03:17:21'),
(59, 6, 13, 2, 'Msc (Math)', '2 Years', 'B.Sc in PCM 50 % marks', '25000', 'admin', '2021-05-21 03:17:21'),
(60, 6, 13, 2, 'Msc(Physics)', '2 Years', 'B.Sc in PCM  with a aggregate 50 % marks', '31500', 'admin', '2021-05-21 03:17:21'),
(61, 6, 13, 2, 'Msc(Chemistry)', '2 Years', 'B.Sc in PCM/CBZ  with a aggregate 50 % marks', '31500', 'admin', '2021-05-21 03:17:21'),
(62, 6, 13, 2, 'Msc(Pharmaceutical Chemistry)', '2 Years', 'B.Sc in PCB or PCM or B.Pharm with a aggregate 50% marks', '31500', 'admin', '2021-05-21 03:17:21'),
(63, 6, 13, 2, 'Msc (Applied Chemistry)', '2 Years', 'B.Sc in PCM/CBZ  with a aggregate 50 % marks', '31500', 'admin', '2021-05-21 03:17:21'),
(64, 6, 13, 3, 'BSC (Non-Medical)', '3 Years', 'Pass 10+2 in Physics, Maths and Chemistry  with 50% marks in aggregate', '13125', 'admin', '2021-05-21 03:17:21'),
(65, 6, 13, 3, 'B.Voc Pharmaceutical Chemistry', '3 Years', 'Pass 10+2 in Physics ,Chemistry ,Maths or Biology as a subject with aggregate 45 % marks', '30000', 'admin', '2021-05-21 03:17:21'),
(66, 7, 15, 4, 'Diploma in GST', '6 Months', 'Pass 10+2 in any stream with aggregate 45% marks', '15000', 'admin', '2021-05-21 03:17:21'),
(67, 7, 15, 5, 'Certificate in Fashion Design', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(68, 7, 15, 5, 'Certificate in Beauty,Skin and Hair', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(69, 7, 15, 5, 'Certificate in Electroplanting', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(70, 7, 15, 5, 'Certificate in Yoga & Therpy', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(71, 7, 15, 4, 'Cabin Crew Training', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(72, 7, 15, 5, 'Certificate in inflight Operation', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(73, 7, 15, 5, 'Certificate in BPO', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(74, 7, 15, 4, 'Diploma in House Wiring', '6 Months', 'Pass 10 th Standard', '32500', 'admin', '2021-05-21 03:17:21'),
(75, 7, 15, 4, 'Diploma in Beauty Culture, Hair & Skin Care', '6 Months', 'Pass 10 th Standard', '32500', 'admin', '2021-05-21 03:17:21'),
(76, 7, 15, 4, 'Diploma in Computer Applications', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(77, 7, 15, 4, 'Diploma Hardware Engineering', '6 Months', 'Pass 10 th Standard', '17500', 'admin', '2021-05-21 03:17:21'),
(78, 8, 2, 4, 'Diploma in Civil Engineering', '3 Years', 'Pass 10 or 10+2 from a recognised Board.', '15000', 'admin', '2021-05-21 03:17:21'),
(79, 8, 5, 4, 'Diploma in CSE', '3 Years', 'Pass 10 or 10+2 from a recognised Board.', '15000', 'admin', '2021-05-21 03:17:21'),
(80, 8, 11, 4, 'Diploma in Mechanical Engineering', '3 Years', 'Pass 10 or 10+2 from a recognised Board.', '15000', 'admin', '2021-05-21 03:17:21'),
(81, 8, 5, 1, 'Ph.D CSE', '5 Years', 'Pass in appropriate B.Tech & M.Tech with minimum 55% percent Marks  OR MCA & M.Tech(CSE) with minimum 55 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(82, 8, 11, 1, 'Ph.D Mechanical', '5 Years', 'Pass in appropriate B.Tech & M.Tech with minimum 55% percent Marks  OR MCA & M.Tech(CSE) with minimum 55 % marks', '4500', 'admin', '2021-05-21 03:17:21'),
(83, 8, 11, 1, 'Ph.D Electrical Engineering', '5 Years', 'Pass in appropriate B.Tech & M.Tech with minimum 55% percent Marks  OR MCA & M.Tech(CSE) with minimum 55 % marks', '45000', 'admin', '2021-05-21 03:17:21'),
(84, 8, 2, 2, 'M.Tech(Civil)', '2 Years', 'Pass Bachelor\'s degree or its equivalent in the relevant field and obtained at least 50% marks in aggregate', '42500', 'admin', '2021-05-21 03:17:21'),
(85, 8, 5, 2, 'M.Tech(CS)', '2 Years', 'Pass Bachelor\'s degree or its equivalent in the relevant field and obtained at least 50% marks in aggregate', '42500', 'admin', '2021-05-21 03:17:21'),
(86, 8, 11, 2, 'M.Tech(ME)', '2 Years', 'Pass Bachelor\'s degree or its equivalent in the relevant field and obtained at least 50% marks in aggregate', '42500', 'admin', '2021-05-21 03:17:21'),
(87, 8, 2, 3, 'B.Tech(Civil)', '4 Years', 'Pass 10+2 in Physics, Maths and Chemistry  with 50% marks in aggregate along with valid score in JEE Mains(2021)/HP-CET 2021', '52500', 'admin', '2021-05-21 03:17:21'),
(88, 8, 5, 3, 'B.Tech(CS)', '4 Years', 'Pass 10+2 in Physics, Maths and Chemistry  with 50% marks in aggregate along with valid score in JEE Mains(2021)/HP-CET 2021', '52500', 'admin', '2021-05-21 03:17:21'),
(89, 8, 5, 3, 'B.Tech(Data Science)', '4 Years', 'Pass 10+2 in Physics, Maths and Chemistry  with 50% marks in aggregate along with valid score in JEE Mains(2021)/HP-CET 2021', '45000', 'admin', '2021-05-21 03:17:21'),
(90, 8, 5, 3, 'B.Tech(Artificial Intelligence & Robotics)', '4 Years', 'Pass 10+2 in Physics, Maths and Chemistry  with 50% marks in aggregate along with valid score in JEE Mains(2021)/HP-CET 2021', '45000', 'admin', '2021-05-21 03:17:21'),
(91, 8, 11, 3, 'B.Tech(ME)', '4 Years', 'Pass 10+2 in Physics, Maths and Chemistry  with 50% marks in aggregate along with valid score in JEE Mains(2021)/HP-CET 2021', '52500', 'admin', '2021-05-21 03:17:21'),
(92, 9, 16, 4, 'Diploma in Food Production', '1.5 Years', 'Pass 10 standard', '12500', 'admin', '2021-05-21 03:17:21'),
(93, 9, 16, 4, 'Diploma in Food and Bevrage Services', '1.5 Years', 'Pass 10 standard', '12500', 'admin', '2021-05-21 03:17:21'),
(94, 9, 16, 4, 'Diploma in Bakery & Confectionary', '1.5 Years', 'Pass 10 standard', '12500', 'admin', '2021-05-21 03:17:21'),
(95, 9, 16, 4, 'Diploma in Front Office Operations', '1.5 Years', 'Pass 10 standard', '15000', 'admin', '2021-05-21 03:17:21'),
(96, 9, 16, 3, 'BHMCT', '4 Years', 'Pass 10+2 in any stream with aggregate 45% marks', '34125', 'admin', '2021-05-21 03:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_course_type`
--

CREATE TABLE `_arni_course_type` (
  `CID` int(11) NOT NULL,
  `COURSE_TYPE` varchar(120) NOT NULL,
  `PRIORITY` int(11) NOT NULL,
  `USERNAME` varchar(40) NOT NULL DEFAULT 'admin',
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_course_type`
--

INSERT INTO `_arni_course_type` (`CID`, `COURSE_TYPE`, `PRIORITY`, `USERNAME`, `DATE_`) VALUES
(1, 'Doctorate', 1, 'admin', '2021-05-12 07:38:26'),
(2, 'Post Graduate', 3, 'admin', '2021-05-12 07:38:26'),
(3, 'Under Graduate', 4, 'admin', '2021-05-12 07:38:43'),
(4, 'Diploma', 5, 'admin', '2021-05-12 07:38:43'),
(5, 'Certificate', 6, 'admin', '2021-05-12 07:38:43'),
(6, 'Post Graduate (Acad. Research)', 2, 'admin', '2021-05-16 07:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_departments`
--

CREATE TABLE `_arni_departments` (
  `DID` int(11) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_departments`
--

INSERT INTO `_arni_departments` (`DID`, `DEPARTMENT`, `USERNAME`, `DATE_`) VALUES
(1, 'Business Studies', 'admin', '2021-05-12 06:13:57'),
(2, 'Civil Engineering', 'admin', '2021-05-12 06:13:57'),
(3, 'Commerce', 'admin', '2021-05-12 06:13:57'),
(4, 'Computer Science & Applicaton', 'admin', '2021-05-12 06:13:57'),
(5, 'Computer Science Engineering', 'admin', '2021-05-12 06:13:57'),
(6, 'Education', 'admin', '2021-05-12 06:13:57'),
(7, 'English', 'admin', '2021-05-12 06:13:57'),
(8, 'Fashion Design', 'admin', '2021-05-12 06:13:57'),
(9, 'Journalism & Mass Communication', 'admin', '2021-05-12 06:13:57'),
(10, 'Life & Allied Science', 'admin', '2021-05-12 06:13:57'),
(11, 'Mechanical Engineering', 'admin', '2021-05-12 06:13:57'),
(12, 'Pharmacy', 'admin', '2021-05-12 06:13:57'),
(13, 'Physical Science', 'admin', '2021-05-12 06:13:57'),
(14, 'Psychology', 'admin', '2021-05-12 06:13:57'),
(15, 'Skill & Vocational Studies', 'admin', '2021-05-12 06:13:57'),
(16, 'Tourism & Hospitality Management', 'admin', '2021-05-12 06:13:57'),
(17, 'Hotel Management & Catering', 'admin', '2021-05-15 06:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_designation`
--

CREATE TABLE `_arni_designation` (
  `DID` int(11) NOT NULL,
  `DESIG` varchar(50) NOT NULL,
  `PRIORITY` int(11) NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_designation`
--

INSERT INTO `_arni_designation` (`DID`, `DESIG`, `PRIORITY`, `ACTIVE`) VALUES
(1, 'Professor', 1, 1),
(2, 'Associate Professor', 4, 1),
(3, 'Assistant Professor', 5, 1),
(4, 'Professor', 2, 1),
(5, 'Principal', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `_arni_faculty`
--

CREATE TABLE `_arni_faculty` (
  `FACID` int(11) NOT NULL,
  `SCHOOL` int(11) NOT NULL,
  `DEPARTMENT` int(11) NOT NULL,
  `FULL_NAME` varchar(200) NOT NULL,
  `SPECIALIZATION` varchar(100) NOT NULL,
  `DESIGNATION` int(11) NOT NULL,
  `PIC` varchar(25) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `ACTIVE` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_faculty`
--

INSERT INTO `_arni_faculty` (`FACID`, `SCHOOL`, `DEPARTMENT`, `FULL_NAME`, `SPECIALIZATION`, `DESIGNATION`, `PIC`, `USERNAME`, `DATE_`, `ACTIVE`) VALUES
(1, 8, 11, 'PROF. Dr. Amit Sharma', 'Electrical', 1, '1.png', 'admin', '0000-00-00 00:00:00', 1),
(2, 6, 13, 'PROF. Dr. Anuja Chouhan', 'Chemistry', 4, '2.png', 'admin', '0000-00-00 00:00:00', 1),
(3, 2, 1, 'PROF. Dr. Ashish Kumar', '', 3, '3.png', 'admin', '0000-00-00 00:00:00', 1),
(4, 4, 10, 'PROF. Dr. Ekta', 'Botany', 3, '4.png', 'admin', '0000-00-00 00:00:00', 1),
(5, 4, 10, 'PROF. Dr. Indu Kumari', 'Zoology', 3, '5.png', 'admin', '0000-00-00 00:00:00', 1),
(6, 2, 1, 'PROF. Dr. Kalyan K Sahoo', 'Management', 1, '6.png', 'admin', '0000-00-00 00:00:00', 1),
(7, 4, 10, 'PROF. Dr. Komal', 'Botany', 3, '7.png', 'admin', '0000-00-00 00:00:00', 1),
(8, 1, 6, 'PROF. Dr. Mayank Pawar', 'Mathematics', 4, '8.png', 'admin', '0000-00-00 00:00:00', 1),
(9, 4, 10, 'PROF. Dr. Neha Salaria', 'Bio Technology', 3, '9.png', 'admin', '0000-00-00 00:00:00', 1),
(10, 6, 13, 'PROF. Dr. Nisha Sharma', 'Chemistry', 3, '10.png', 'admin', '0000-00-00 00:00:00', 1),
(11, 8, 2, 'PROF. Dr. O. P. Netula', 'Water Resources Engg.', 4, '11.png', 'admin', '0000-00-00 00:00:00', 1),
(12, 6, 13, 'PROF. Dr. Ritu Jain', 'Chemistry', 3, '12.png', 'admin', '0000-00-00 00:00:00', 1),
(13, 8, 11, 'PROF. Dr. Sanjeev Dahiya', 'Mechanical', 4, '13.png', 'admin', '0000-00-00 00:00:00', 1),
(14, 4, 10, 'PROF. Dr. Sarika Sharma', 'Microbiology', 4, '14.png', 'admin', '0000-00-00 00:00:00', 1),
(15, 3, 4, 'PROF. Dr. Sunita', 'CSA', 3, '15.png', 'admin', '0000-00-00 00:00:00', 1),
(16, 1, 6, 'PROF. Dr. Surinder Paul', 'Physics', 3, '16.png', 'admin', '0000-00-00 00:00:00', 1),
(17, 1, 7, 'PROF. Dr. Vijay Mehta', 'English', 4, '17.png', 'admin', '0000-00-00 00:00:00', 1),
(18, 8, 5, 'PROF. Dr. Vivek Singh', 'CSE', 3, '18.png', 'admin', '0000-00-00 00:00:00', 1),
(19, 2, 3, 'PROF. Dr.Ashutosh Dwivedi', 'Commerce', 4, '19.png', 'admin', '0000-00-00 00:00:00', 1),
(20, 2, 1, 'PROF. Dr.Jaiman Preet Kaur', 'Management', 3, '20.png', 'admin', '0000-00-00 00:00:00', 1),
(21, 2, 9, 'PROF. Dr.Shashi Bhushan', '', 4, '21.png', 'admin', '0000-00-00 00:00:00', 1),
(22, 1, 6, 'PROF. Dr.Vipin Kumar', 'Physics', 4, '22.png', 'admin', '0000-00-00 00:00:00', 1),
(23, 5, 12, 'PROF. M.s Shikha Dubey', 'Pharmacy', 3, '23.png', 'admin', '0000-00-00 00:00:00', 1),
(24, 8, 11, 'PROF. Mr. Abhinav Dhiman', 'EEE', 3, '24.png', 'admin', '0000-00-00 00:00:00', 1),
(25, 1, 6, 'PROF. Mr. Amit Sharma', 'Material Science', 3, '25.png', 'admin', '0000-00-00 00:00:00', 1),
(26, 8, 11, 'PROF. Mr. Anil Singh', 'Engineering Syst.', 3, '26.png', 'admin', '0000-00-00 00:00:00', 1),
(27, 8, 5, 'PROF. Mr. Ankur Sharma', 'CSE', 3, '27.png', 'admin', '0000-00-00 00:00:00', 1),
(28, 8, 5, 'PROF. Mr. Anurag Rana', 'CSE', 3, '28.png', 'admin', '0000-00-00 00:00:00', 1),
(29, 8, 11, 'PROF. Mr. Ashish Kumar', 'Mechanical', 3, '29.png', 'admin', '0000-00-00 00:00:00', 1),
(30, 2, 17, 'PROF. Mr. Ashish Parashar', 'Sales & Marketing', 3, '30.png', 'admin', '0000-00-00 00:00:00', 1),
(31, 8, 11, 'PROF. Mr. Harjit Singh Kainth', 'EEE', 3, '31.png', 'admin', '0000-00-00 00:00:00', 1),
(32, 8, 2, 'PROF. Mr. Himanshu Sharma', 'Structure Engg.(Civil)', 3, '32.png', 'admin', '0000-00-00 00:00:00', 1),
(33, 5, 12, 'PROF. Mr. Kushal Jit Singh', 'Pharmacy', 3, '33.png', 'admin', '0000-00-00 00:00:00', 1),
(34, 8, 2, 'PROF. Mr. Narinder Kumar', 'Civil', 3, '34.png', 'admin', '0000-00-00 00:00:00', 1),
(35, 8, 11, 'PROF. Mr. Neeraj Kumar Sharma', 'ECE', 3, '35.png', 'admin', '0000-00-00 00:00:00', 1),
(36, 8, 11, 'PROF. Mr. Nishant', 'EEE(Electronics & Control)', 3, '36.png', 'admin', '0000-00-00 00:00:00', 1),
(37, 1, 6, 'PROF. Mr. Nitin Mahajan', 'Maths', 3, '37.png', 'admin', '0000-00-00 00:00:00', 1),
(38, 8, 11, 'PROF. Mr. Onkar Singh', 'ECE', 3, '38.png', 'admin', '0000-00-00 00:00:00', 1),
(39, 8, 5, 'PROF. Mr. R.K. Mishra', 'Computer Engg.', 3, '39.png', 'admin', '0000-00-00 00:00:00', 1),
(40, 2, 17, 'PROF. Mr. Raj Kamal Gautam', 'HM', 3, '40.png', 'admin', '0000-00-00 00:00:00', 1),
(41, 8, 2, 'PROF. Mr. Rajan Rana', 'Civil', 3, '41.png', 'admin', '0000-00-00 00:00:00', 1),
(42, 1, 7, 'PROF. Mr. Rajinder Kumar', 'English', 3, '42.png', 'admin', '0000-00-00 00:00:00', 1),
(43, 5, 12, 'PROF. Mr. Raman Kalia', 'Pharmacy', 5, '43.png', 'admin', '0000-00-00 00:00:00', 1),
(44, 5, 12, 'PROF. Mr. Sameer Gangal', 'Pharmacy', 3, '44.png', 'admin', '0000-00-00 00:00:00', 1),
(45, 8, 2, 'PROF. Mr. Saurabh Gupta', 'Const. technology &Mgt.(Civil)', 3, '45.png', 'admin', '0000-00-00 00:00:00', 1),
(46, 2, 1, 'PROF. Mr. Shashi Karel', 'Finance & Marketing', 3, '46.png', 'admin', '0000-00-00 00:00:00', 1),
(47, 3, 4, 'PROF. Dr. Tushar Anthwal', 'CSA', 2, '47.png', 'admin', '0000-00-00 00:00:00', 1),
(48, 2, 1, 'PROF. Mr. Vikas Barnwal', 'Finance & Marketing', 3, '48.png', 'admin', '0000-00-00 00:00:00', 1),
(49, 8, 11, 'PROF. Mr. Vikas Singh', 'ECE(VLSI DESIGN)', 3, '49.png', 'admin', '0000-00-00 00:00:00', 1),
(50, 8, 2, 'PROF. Mr. Vivek Dhiman', '', 3, '50.png', 'admin', '0000-00-00 00:00:00', 1),
(51, 2, 17, 'PROF. Mr.Kuldeep Kumar', 'Tourism & HM', 3, '51.png', 'admin', '0000-00-00 00:00:00', 1),
(52, 8, 5, 'PROF. Mr.Rohit Kumar', 'CSE', 3, '52.png', 'admin', '0000-00-00 00:00:00', 1),
(53, 6, 13, 'PROF. Mr.Saurabh Sharma', 'Chemistry', 3, '53.png', 'admin', '0000-00-00 00:00:00', 1),
(54, 1, 6, 'PROF. Mr.Yash Pal', 'Physics', 3, '54.png', 'admin', '0000-00-00 00:00:00', 1),
(55, 5, 12, 'PROF. Mrs Bhawana Sharma', 'Pharmacy', 3, '55.png', 'admin', '0000-00-00 00:00:00', 1),
(56, 3, 4, 'PROF. Mrs. Adity', 'CSA', 3, '56.png', 'admin', '0000-00-00 00:00:00', 1),
(57, 1, 7, 'PROF. Mrs. Anjna Devi', 'English', 3, '57.png', 'admin', '0000-00-00 00:00:00', 1),
(58, 1, 6, 'PROF. Mrs. Ashu Rani', 'Maths', 3, '58.png', 'admin', '0000-00-00 00:00:00', 1),
(59, 1, 6, 'PROF. Mrs. Radhika', 'Economics', 3, '59.png', 'admin', '0000-00-00 00:00:00', 1),
(60, 6, 13, 'PROF. Mrs. Shivani Sharma', 'Chemistry', 3, '60.png', 'admin', '0000-00-00 00:00:00', 1),
(61, 6, 13, 'PROF. Mrs.Shivali Thakur', 'Chemistry', 3, '61.png', 'admin', '0000-00-00 00:00:00', 1),
(62, 4, 10, 'PROF. Ms. Abhilasha', 'Zoology', 3, '62.png', 'admin', '0000-00-00 00:00:00', 1),
(63, 2, 1, 'PROF. Ms. Alka Katoch', 'HR & Marketing', 3, '63.png', 'admin', '0000-00-00 00:00:00', 1),
(64, 1, 6, 'PROF. Ms. Arpana Sharma', 'Economics', 3, '64.png', 'admin', '0000-00-00 00:00:00', 1),
(65, 4, 10, 'PROF. Ms. Asha Devi', 'Botany', 3, '65.png', 'admin', '0000-00-00 00:00:00', 1),
(66, 8, 2, 'PROF. Ms. Bindu Sharma', 'Civil', 3, '66.png', 'admin', '0000-00-00 00:00:00', 1),
(67, 4, 10, 'PROF. Ms. Diksha Chopra', 'Zoology', 3, '67.png', 'admin', '0000-00-00 00:00:00', 1),
(68, 4, 10, 'PROF. Ms. Jyoti', 'Zoology', 3, '68.png', 'admin', '0000-00-00 00:00:00', 1),
(69, 2, 1, 'PROF. Ms. Meenakshi', 'HR & Marketing', 3, '69.png', 'admin', '0000-00-00 00:00:00', 1),
(70, 1, 6, 'PROF. Ms. Neelam Devi', 'Physics', 3, '70.png', 'admin', '0000-00-00 00:00:00', 1),
(71, 2, 1, 'PROF. Ms. Neety Kumari', 'Finance & Marketing', 3, '71.png', 'admin', '0000-00-00 00:00:00', 1),
(72, 3, 4, 'PROF. Ms. Neha Sharmal', 'CSA', 3, '72.png', 'admin', '0000-00-00 00:00:00', 1),
(73, 1, 6, 'PROF. Ms. Ragini', 'Physics', 3, '73.png', 'admin', '0000-00-00 00:00:00', 1),
(74, 2, 9, 'PROF. Ms. Ritika Puri', 'Media Reporting', 3, '74.png', 'admin', '0000-00-00 00:00:00', 1),
(75, 3, 4, 'PROF. Ms. Ronika Devi', 'CSA', 3, '75.png', 'admin', '0000-00-00 00:00:00', 1),
(76, 2, 3, 'PROF. Ms. Samaily', 'Taxation', 3, '76.png', 'admin', '0000-00-00 00:00:00', 1),
(77, 1, 7, 'PROF. Ms. Samiksha Sharma', 'English', 3, '77.png', 'admin', '0000-00-00 00:00:00', 1),
(78, 2, 1, 'PROF. Ms. Srishti Sriya', 'MBA', 3, '78.png', 'admin', '0000-00-00 00:00:00', 1),
(79, 1, 6, 'PROF. Ms. Sunita Devi', 'Maths', 3, '79.png', 'admin', '0000-00-00 00:00:00', 1),
(80, 5, 12, 'PROF. Ms. Sushil Kumar', 'Pharmacology', 3, '80.png', 'admin', '0000-00-00 00:00:00', 1),
(81, 8, 11, 'PROF. Ms. Tamanna', 'EEE', 3, '81.png', 'admin', '0000-00-00 00:00:00', 1),
(82, 4, 10, 'PROF. Ms.Bhawana', 'Botany', 3, '82.png', 'admin', '0000-00-00 00:00:00', 1),
(83, 2, 3, 'PROF. Ms.Deeksha', 'Commerce', 3, '83.png', 'admin', '0000-00-00 00:00:00', 1),
(84, 2, 3, 'PROF. Ms.Priya', 'Commerce', 3, '84.png', 'admin', '0000-00-00 00:00:00', 1),
(85, 5, 12, 'PROF. Ms.Priya Sharma', 'Pharmacy', 3, '85.png', 'admin', '0000-00-00 00:00:00', 1),
(86, 2, 3, 'PROF. Ms.Shikha Sharma', 'Commerce', 3, '86.png', 'admin', '0000-00-00 00:00:00', 1),
(87, 1, 6, 'PROF. Ms.Vijeta Salaria', 'Economics', 3, '87.png', 'admin', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_arni_online_registrations`
--

CREATE TABLE `_arni_online_registrations` (
  `REGID` int(11) NOT NULL,
  `NAME_` varchar(150) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `MOBILE_1` varchar(50) NOT NULL,
  `MOBILE_2` varchar(50) NOT NULL DEFAULT 'X',
  `STATE` varchar(150) NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `SCHOOL` varchar(200) NOT NULL,
  `COURSE_TYPE` varchar(50) NOT NULL,
  `COURSE_APPLIED` varchar(150) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_online_registrations`
--

INSERT INTO `_arni_online_registrations` (`REGID`, `NAME_`, `EMAIL`, `MOBILE_1`, `MOBILE_2`, `STATE`, `CITY`, `SCHOOL`, `COURSE_TYPE`, `COURSE_APPLIED`, `STATUS`, `DATE_`) VALUES
(1, 'Nitin Deepak', 'nitin.d12@amrapali.ac.in', '9760020667', '7895856094', 'Chandigarh', 'sd', 'School of Physical Science', 'Post Graduate', 'Msc(Chemistry)', 0, '2021-05-24 10:38:15'),
(2, 'Nitin Deepak', 'nitin.d12@amrapali.ac.in', '9760020667', '7895856094', 'Chandigarh', 'sd', 'School of Physical Science', 'Post Graduate', 'Msc(Chemistry)', 0, '2021-05-24 10:41:40'),
(3, 'Gagan Pant', 'nitin.d12@amrapali.ac.in', '9760020667', '7895856094', 'Chandigarh', 'sd', 'School of Physical Science', 'Post Graduate', 'Msc (Math)', 0, '2021-05-24 10:45:47'),
(4, 'Ashish Gounda', 'ashish@amrapali.ac.in', '9760020667', '7895856094', 'Chandigarh', 'sd', 'School of Computer Application', 'Post Graduate', 'MCA', 1, '2021-05-24 10:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_online_registrations_log`
--

CREATE TABLE `_arni_online_registrations_log` (
  `REGID` int(11) NOT NULL,
  `NAME_` varchar(150) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `MOBILE_1` varchar(50) NOT NULL,
  `MOBILE_2` varchar(50) NOT NULL DEFAULT 'X',
  `STATE` varchar(150) NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `SCHOOL` varchar(200) NOT NULL,
  `COURSE_TYPE` varchar(50) NOT NULL,
  `COURSE_APPLIED` varchar(150) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_arni_school`
--

CREATE TABLE `_arni_school` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(250) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_school`
--

INSERT INTO `_arni_school` (`SID`, `SNAME`, `USERNAME`, `DATE_`) VALUES
(1, 'School of Art & Humanities', 'admin', '2021-05-12 06:05:46'),
(2, 'School of Commerce & Business Management', 'admin', '2021-05-12 06:05:51'),
(3, 'School of Computer Application', 'admin', '2021-05-12 06:05:54'),
(4, 'School of Life and Allied Science', 'admin', '2021-05-12 06:05:59'),
(5, 'School of Pharmacy', 'admin', '2021-05-12 06:06:04'),
(6, 'School of Physical Science', 'admin', '2021-05-12 06:06:08'),
(7, 'School of Skill Development & Vocational Studies', 'admin', '2021-05-12 06:06:13'),
(8, 'School of Technology', 'admin', '2021-05-12 06:06:20'),
(9, 'School of Tourism & Hospitality Management', 'admin', '2021-05-12 06:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_school_contacts`
--

CREATE TABLE `_arni_school_contacts` (
  `SNO` int(11) NOT NULL,
  `SCHOOL` int(11) NOT NULL,
  `PORTFOLIO` varchar(100) NOT NULL,
  `FULL_NAME` varchar(100) NOT NULL,
  `MOBILE` varchar(70) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `USERNAME` int(11) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_school_contacts`
--

INSERT INTO `_arni_school_contacts` (`SNO`, `SCHOOL`, `PORTFOLIO`, `FULL_NAME`, `MOBILE`, `EMAIL`, `USERNAME`, `DATE_`) VALUES
(1, 1, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(2, 1, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(3, 2, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(4, 2, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(5, 3, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(6, 3, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(7, 4, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(8, 4, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(9, 5, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(10, 5, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(11, 6, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(12, 6, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(13, 7, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(14, 7, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(15, 8, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(16, 8, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(17, 9, 'DEAN', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00'),
(18, 9, 'HOD', 'x', 'x', 'x@x.com', 0, '2021-05-12 07:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `_arni_states`
--

CREATE TABLE `_arni_states` (
  `SNO` int(11) NOT NULL,
  `NAME_` varchar(150) NOT NULL,
  `TYPE_` varchar(25) NOT NULL,
  `CAPITAL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_arni_states`
--

INSERT INTO `_arni_states` (`SNO`, `NAME_`, `TYPE_`, `CAPITAL`) VALUES
(1, 'Andhra Pradesh', 'State', 'Hyderabad (de jure)\nAmaravati (de facto)\nVisakhapatnam(Administrative )'),
(2, 'Arunachal Pradesh', 'State', 'Itanagar'),
(3, 'Assam', 'State', 'Dispur'),
(4, 'Bihar ', 'State', 'Patna'),
(5, 'Chhattisgarh', 'State', 'Naya Raipur'),
(6, 'Goa', 'State', 'Panaji'),
(7, 'Gujarat', 'State', 'Gandhinagar'),
(8, 'Haryana', 'State', 'Chandigarh'),
(9, 'Himachal Pradesh', 'State', 'Shimla (Summer)\r\nDharamsala (Winter)'),
(10, 'Jharkhand', 'State', 'Ranchi'),
(11, 'Karnataka', 'State', 'Bangalore'),
(12, 'Kerala', 'State', 'Thiruvananthapuram'),
(13, 'Madhya Pradesh', 'State', 'Bhopal'),
(14, 'Maharashtra', 'State', 'Mumbai '),
(15, 'Manipur', 'State', 'Imphal'),
(16, 'Meghalaya', 'State', 'Shillong'),
(17, 'Mizoram', 'State', 'Aizawl'),
(18, 'Nagaland', 'State', 'Kohima'),
(19, 'Odisha', 'State', 'Bhubaneshwar'),
(20, 'Punjab', 'State', 'Chandigarh'),
(21, 'Rajasthan', 'State', 'Jaipur'),
(22, 'Sikkim', 'State', 'Gangtok'),
(23, 'Tamil Nadu', 'State', 'Chennai'),
(24, 'Telangana ', 'State', 'Hyderabad'),
(25, 'Tripura', 'State', 'Agartala'),
(26, 'Uttarakhand', 'State', 'Gairsain (Summer)\nDehradun (Winter)'),
(27, 'Uttar Pradesh ', 'State', 'Lucknow'),
(28, 'West Bengal', 'State', 'Kolkata'),
(29, 'Andaman and Nicobar', 'Union Territory', 'Port Blair'),
(30, 'Chandigarh', 'Union Territory', 'Chandigarh '),
(31, 'Dadra Nagar Haveli', 'Union Territory', 'Silvassa '),
(32, 'Daman and Diu', 'Union Territory', 'Daman '),
(33, 'Delhi ', 'Union Territory', 'Delhi '),
(34, 'Jammu and Kashmir', 'Union Territory', 'Srinagar (summer), Jammu (winter)'),
(35, 'Lakshadweep ', 'Union Territory', 'Kavaratti '),
(36, 'Ladakh ', 'Union Territory', 'Ladakh '),
(37, 'Puducherry ', 'Union Territory', 'Pondicherry ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `alumniprofile`
--
ALTER TABLE `alumniprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumniprofiledelete`
--
ALTER TABLE `alumniprofiledelete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `bloglinks`
--
ALTER TABLE `bloglinks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`GL_ID`),
  ADD KEY `CATEG_ID` (`CATEG_ID`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`CATEG_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME_`),
  ADD KEY `STATUS` (`USER_STATUS`);

--
-- Indexes for table `menu_1`
--
ALTER TABLE `menu_1`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `menu_user_status`
--
ALTER TABLE `menu_user_status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CRS_ID` (`CRS_ID`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MENU` (`MENU`),
  ADD KEY `USER_` (`USER_`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `_arni_committees`
--
ALTER TABLE `_arni_committees`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `_arni_course_detail`
--
ALTER TABLE `_arni_course_detail`
  ADD PRIMARY KEY (`CRSDETID`);

--
-- Indexes for table `_arni_course_type`
--
ALTER TABLE `_arni_course_type`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `_arni_departments`
--
ALTER TABLE `_arni_departments`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `_arni_designation`
--
ALTER TABLE `_arni_designation`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `_arni_faculty`
--
ALTER TABLE `_arni_faculty`
  ADD PRIMARY KEY (`FACID`);

--
-- Indexes for table `_arni_online_registrations`
--
ALTER TABLE `_arni_online_registrations`
  ADD PRIMARY KEY (`REGID`);

--
-- Indexes for table `_arni_school`
--
ALTER TABLE `_arni_school`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `_arni_school_contacts`
--
ALTER TABLE `_arni_school_contacts`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `_arni_states`
--
ALTER TABLE `_arni_states`
  ADD PRIMARY KEY (`SNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `alumniprofile`
--
ALTER TABLE `alumniprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bloglinks`
--
ALTER TABLE `bloglinks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `GL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `CATEG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_1`
--
ALTER TABLE `menu_1`
  MODIFY `ID_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsevents`
--
ALTER TABLE `newsevents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `_arni_committees`
--
ALTER TABLE `_arni_committees`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `_arni_course_detail`
--
ALTER TABLE `_arni_course_detail`
  MODIFY `CRSDETID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `_arni_course_type`
--
ALTER TABLE `_arni_course_type`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `_arni_departments`
--
ALTER TABLE `_arni_departments`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `_arni_designation`
--
ALTER TABLE `_arni_designation`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `_arni_faculty`
--
ALTER TABLE `_arni_faculty`
  MODIFY `FACID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `_arni_online_registrations`
--
ALTER TABLE `_arni_online_registrations`
  MODIFY `REGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_arni_school`
--
ALTER TABLE `_arni_school`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `_arni_school_contacts`
--
ALTER TABLE `_arni_school_contacts`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `_arni_states`
--
ALTER TABLE `_arni_states`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD CONSTRAINT `fk_mennu` FOREIGN KEY (`MENU`) REFERENCES `menu_1` (`ID_`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`USER_`) REFERENCES `menu_user_status` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
