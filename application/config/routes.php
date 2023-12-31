<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'welcome/index';
$route['about'] = 'welcome/load_about';
$route['what_we_do'] = 'welcome/load_what_we_do';
$route['work_with_us'] = 'welcome/load_work_with_us';
$route['tak_to_us'] = 'welcome/load_talk_to_us';
$route['gallery'] = 'welcome/load_gallery';
$route['terms_and_conditions'] = 'welcome/terms_and_conditions';
$route['privacy_policy'] = 'welcome/privacy_policy';
$route['return_policy'] = 'welcome/return_policy';


// Admin Routes
$route['dashboard'] = 'admin/dashboard';
$route['job_applied'] = 'admin/contact_us/job_applied';
$route['queries'] = 'admin/contact_us/queries';
$route['blogs'] = 'admin/blogs/index';
$route['add_blog'] = 'admin/blogs/add_blog';
$route['add_blog'] = 'admin/blogs/add_blog';
$route['edit_blog/(:num)'] = 'admin/blogs/edit_blog/$1';
$route['delete_blog'] = 'admin/blogs/delete_blog';
