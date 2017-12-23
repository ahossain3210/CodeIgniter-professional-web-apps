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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['about']='Welcome/about';
$route['sign-up']='Welcome/sign_up';
$route['user-login']='Welcome/user_login';
$route['save-user']='Welcome/save_user';
$route['user-logout']='Welcome/user_logout';
$route['user-login-check']='Welcome/user_login_check';
$route['save-comment']='Welcome/save_comment';
$route['courses']='Welcome/course';
$route['profile']='Welcome/instructor_profile';
$route['search-items']='Welcome/search_course_item';
$route['services']='Welcome/service';
$route['our-blogs']='Welcome/blog';
$route['my-profile']='Welcome/user_profile';
$route['job-list']='Welcome/job_list';
$route['contact-us']='Welcome/contact';
$route['blog-details/(:any)']='Welcome/blog_details/$1';
$route['course-details/(:any)']='Welcome/course_details/$1';
$route['category-blog/(:any)']='Welcome/category_blog/$1';
$route['category-course/(:any)']='Welcome/category_course/$1';