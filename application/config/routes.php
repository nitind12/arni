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
$route['Arni'] = 'RC';
$route['arni'] = 'RC';
$route['events'] = 'RC';
$route['Events'] = 'RC';

$route['(:any)/Arni'] = 'RC';
$route['(:any)/arni'] = 'RC';

$route['Arni/index.php'] = 'RC';
$route['arni/index.php'] = 'RC';

$route['Arni/(:any)'] = 'RC';
$route['Arni/(:any)'] = 'RC';

$route['about/(:any)'] = 'Arni/about/$1';

$route['art-and-humanities'] = 'Arni/academics/art_and_humanities';
$route['technology'] = 'Arni/academics/technology';
$route['commerce-and-business-management'] = 'Arni/academics/commerce_and_business_management';
$route['pharmacy'] = 'Arni/academics/pharmacy';
$route['tourism-and-hospitality-management'] = 'Arni/academics/tourism_and_hospitality_management';
$route['computer-application'] = 'Arni/academics/computer_application';
$route['life-and-allied-science'] = 'Arni/academics/life_and_allied_science';
$route['physical-science'] = 'Arni/academics/physical_science';
$route['skill-development-and-vocational-studies'] = 'Arni/academics/skill_development_and_vocational_studies';
$route['technology'] = 'Arni/academics/technology';
$route['mentor'] = 'Arni/academics/mentor';

/*  redirection for 301 */
/* -------------------- */

$route['default_controller'] = 'Arni';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = TRUE;
