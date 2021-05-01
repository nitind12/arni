<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/* Routes For Menu */
//$route['404_override'] = 'My404';
/* Routes For Menu */
$route['aGi'] = 'RC';
$route['aGI'] = 'RC';
$route['agI'] = 'RC';
$route['AgI'] = 'RC';
$route['Agi'] = 'RC';
$route['agi'] = 'RC';
$route['events'] = 'RC';
$route['Events'] = 'RC';

$route['(:any)/AGI'] = 'RC';
$route['(:any)/aGi'] = 'RC';
$route['(:any)/aGI'] = 'RC';
$route['(:any)/agI'] = 'RC';
$route['(:any)/AgI'] = 'RC';
$route['(:any)/Agi'] = 'RC';
$route['(:any)/agi'] = 'RC';
$route['AGI/index.php'] = 'RC';
$route['aGi/index.php'] = 'RC';
$route['aGI/index.php'] = 'RC';
$route['agI/index.php'] = 'RC';
$route['AgI/index.php'] = 'RC';
$route['Agi/index.php'] = 'RC';
$route['agi/index.php'] = 'RC';
$route['AGI/(:any)'] = 'RC';
$route['aGi/(:any)'] = 'RC';
$route['aGI/(:any)'] = 'RC';
$route['agI/(:any)'] = 'RC';
$route['AgI/(:any)'] = 'RC';
$route['Agi/(:any)'] = 'RC';
$route['agi/(:any)'] = 'RC';
//$route['events/(:any)'] = 'RC';
//$route['Events/(:any)'] = 'RC';

// Events
$route['spandan2019'] = 'Events/spandan2019';
$route['volunteer'] = 'Events/volunteer';
$route['covidawareness'] = 'Events/covidawareness';

$route['applynow'] = 'Agi/applynow';
$route['applynow1'] = 'Agi/applynow1';
$route['apply'] = 'Agi/admissions/applynow';
$route['career'] = 'Agi/career';
$route['contactus'] = 'Agi/contactus';

$route['wintercarnival2021'] = 'Events/wintercarnival/overview';
$route['wintercarnival2021/(:any)'] = 'Events/wintercarnival/$1';

$route['wintercarnival'] = 'Events/wintercarnival/overview';
$route['wintercarnival/(:any)'] = 'Events/wintercarnival/$1';

$route['winter'] = 'Events/wintercarnival/overview';
$route['winter/(:any)'] = 'Events/wintercarnival/$1';

$route['telegram'] = 'Events/telegram';

// ------

$route['lms/fcbm'] = 'Agi/fcbm';

$route['tech'] = 'Agi/faculty/ftca/about';
$route['avahan']= 'Agi/avahan';
$route['machinelearning'] = 'Agi/machinelearning';
$route['csquiz'] = 'Agi/csquiz';
$route['project'] = 'Agi/project';
$route['ansys'] = 'Agi/ansys';
$route['cybersecurity'] = 'Agi/cybersecurity';
$route['fcbmwebinar'] = 'Agi/fcbmwebinar';



$route['cooking-competition'] = 'Events/cooking_competition';
$route['nsd21'] = 'Events/nsd21';
$route['sdp'] = 'Events/sdp/activities';
$route['sdp/(:any)'] = 'Events/sdp/$1';
$route['hdfc_online'] = 'Events/hdfc_online';
$route['sbi_online'] = 'Events/sbi_online';

$route['reportbrokenlink'] = 'Agi/reportbrokenlink';
$route['faq'] = 'Agi/faq';
$route['blogs-archive'] = 'Agi/blogs_archive';

$route['AGI/(:any)/(:any)'] = 'RC';
$route['aGi/(:any)/(:any)'] = 'RC';
$route['aGI/(:any)/(:any)'] = 'RC';
$route['agI/(:any)/(:any)'] = 'RC';
$route['AgI/(:any)/(:any)'] = 'RC';
$route['Agi/(:any)/(:any)'] = 'RC';
$route['agi/(:any)/(:any)'] = 'RC';

$route['AGI/(:any)/(:any)/(:any)'] = 'RC';
$route['aGi/(:any)/(:any)/(:any)'] = 'RC';
$route['aGI/(:any)/(:any)/(:any)'] = 'RC';
$route['agI/(:any)/(:any)/(:any)'] = 'RC';
$route['AgI/(:any)/(:any)/(:any)'] = 'RC';
$route['Agi/(:any)/(:any)/(:any)'] = 'RC';
$route['agi/(:any)/(:any)/(:any)'] = 'RC';

$route['lms'] = 'Agi/lms';
$route['getFiles'] = 'Agi/getFiles';
$route['LoginEnter'] = 'Agi/LoginEnter';
$route['login'] = 'Agi/RegistrationLogin';
$route['totalRegistration_new'] = 'Agi/totalRegistration_new';
$route['(any)'] = 'Agi';
$route['imagePicsInner/(:any)'] = 'Agi/imagePicsInner/$1';

//$route['(:any)'] = 'Agi/$1';

$route['skilldevelopment'] = 'Agi/skilldevelopment';
$route['catia'] = 'Agi/catia';
$route['indiaquiz'] = 'Agi/indiaquiz';
$route['about'] = 'Agi/about/overview';
$route['about/(:any)'] = 'Agi/about/$1';
$route['email_logins'] = 'Agi/email_logins';
$route['bca-first-year'] = 'Agi/bca_first_year';
$route['mendatory-disclosure'] = 'Agi/approvals';

$route['faculty/(:any)/(:any)'] = 'Agi/faculty/$1/$2';

$route['mentors'] = 'Agi/mentors/overview';
$route['mentors/(:any)'] = 'Agi/mentors/$1';

$route['admissions'] = 'Agi/admissions/overview';
$route['admissions/(:any)'] = 'Agi/admissions/$1';
$route['Contact_social_Enquiry_email'] = 'Agi/Contact_social_Enquiry_email';

$route['placements'] = 'Agi/placements/overview';
$route['placements/(:any)'] = 'Agi/placements/$1';

$route['gallery'] = 'Agi/gallery/overview';
$route['gallery/(:any)'] = 'Agi/gallery/$1';
$route['photos_inner/(:any)'] = 'Agi/photos_inner/$1';
$route['imagePicsInner/(:any)'] = 'Agi/imagePicsInner/$1';

$route['alumni'] = 'Agi/alumni/overview';
$route['alumni/(:any)'] = 'Agi/alumni/$1';
$route['alumniRegistration'] = 'Agi/alumniRegistration';

$route['checkcaptcha'] = 'Agi/checkcaptcha';
$route['checkcaptcha_ajax'] = 'Agi/checkcaptcha_ajax';

$route['registeronline/(:any)'] = 'Agi/admissions/applynow';
$route['insertOnlineRegisterNew'] = 'Agi/insertOnlineRegisterNew';
$route['generate_ticket'] = 'Agi/generate_ticket';
$route['logout_online_registration'] = 'Agi/logout_online_registration';
$route['delOnlineReg/(:any)'] = 'Agi/delOnlineReg/$1';
$route['getRegistrations/(:any)'] = 'Agi/getRegistrations/$1';
$route['confirm_registration/(:any)'] = 'Agi/confirm_registration/$1';
$route['sm'] = 'Agi/sm';

$route['alumniRegistration'] = 'Agi/alumniRegistration';
$route['LoginAlumniEnter'] = 'Agi/LoginAlumniEnter';
$route['AlumniProfileLogin'] = 'Agi/AlumniProfileLogin';
$route['getAlumniProfile'] = 'Agi/getAlumniProfile';
$route['getAlumnibyID/(:any)'] = 'Agi/getAlumnibyID/$1';
$route['deleteAlumniProfile/(:any)'] = 'Agi/deleteAlumniProfile/$1';
$route['enabledDisableAlumni/(:any)'] = 'Agi/enabledDisableAlumni/$1';

$route['feedbackstudent'] = 'Agi/feedbackstudent';

$route['facultyProfile'] = 'Agi/facultyProfile';
$route['getProfile/gksFaculty'] = 'Agi/getProfile/gksFaculty';
$route['fillFacultyDetail'] = 'Agi/fillFacultyDetail';
$route['getFacultybyID/(:any)'] = 'Agi/getFacultybyID/$1';
$route['deleteFacultyProfile/(:any)'] = 'Agi/deleteFacultyProfile/$1';

$route['feedbackcrs/(:any)'] = 'Agi/feedbackcrs/$1';

$route['helpme'] = 'Chat/help';

/* ----------------- */

/* For Footer Hyperlinks */
$route['facilities/(:any)'] = 'Agi/facilities/$1';
/* --------------------- */

/*  redirection for 301 */
/* -------------------- */

$route['default_controller'] = 'Agi';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = TRUE;
