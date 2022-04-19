<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['sign_up/(:any)']	   = 'register/sign_up/$1';
$route['sign_up']             = 'register/sign_up';

$route['forget_pass/(:any)']	   = 'register/forget_pass/$1';
$route['forget_pass']             = 'register/forget_pass';

$route['log/forget_password/(:any)']     = 'register/forget_password/$1';
$route['log/forget_password']			= 'register/forget_password';

$route['log/change_password/(:any)']     = 'register/change_password/$1';
$route['log/change_password']			= 'register/change_password';

$route['create_new_pass/(:any)']	= 'register/create_new_pass/$1';
$route['create_new_pass']			= 'register/create_new_pass';

//$route['sign_up_form/validate_signup(:any)']	   = 'register/validate_sign_up/$1';
$route['sign_up_form/validate_sign_up']            = 'register/validate_sign_up';

$route['login/validate_login/(:any)']	   = 'register/validate_login/form/$1';
$route['login/validate_login']             = 'register/validate_login';

$route['logout/validate_logout/(:any)']	   = 'register/validate_logout/form/$1';
$route['logout/validate_logout']           = 'register/validate_logout';

$route['login/(:any)']  		= 'register/login/$1';
$route['login']  	    		= 'register/login/';

$route['form/(:any)']			= 'register/form/$1';
$route['form']					= 'register/form';

$route['reg_stat/(:any)']		= 'register/reg_stat/$1';
$route['reg_stat']				= 'register/reg_stat';

$route['exam/(:any)']			= 'register/exam/$1';
$route['exam']					= 'register/exam';

$route['exam_prop/(:any)']		= 'register/exam_prop/$1';
$route['exam_prop']				= 'register/exam_prop';

$route['profile/(:any)']  		= 'register/profile/$1';
$route['profile']  	    		= 'register/profile';

$route['profile/profile_pic/(:any)'] 	= 'register/profile_pic/$1';
$route['profile/profile_pic'] 			= 'register/profile_pic';

$route['student_requirements/(:any)'] = 'register/student_requirements/$1';
$route['student_requirements']		 = 'register/student_requirements';

$route['my_records/(:any)']  		= 'register/my_records/$1';
$route['my_records']  	    		= 'register/my_records/';

$route['notification/(:any)']  		= 'register/notification/$1';
$route['notification']  	    	= 'register/notification/';

$route['remove_notif/(:any)']  		= 'register/remove_notif/$1';
$route['remove_notif']  	    	= 'register/remove_notif/';

$route['notif_no/(:any)']  		= 'register/notif_no/$1';
$route['notif_no']  	    	= 'register/notif_no/';

$route['mark_msg_read/(:any)']  		= 'register/mark_msg_read/$1';
$route['mark_msg_read']  	    	= 'register/mark_msg_read/';

$route['course/get_course/(:any)']  = 'register/get_course/$1';
$route['course/get_course']         = 'register/get_course';

$route['viewer_js/(:any)']			= 'register/viewerjs/$1';
$route['viewer_js']					= 'register/viewerjs/';

$route['default_controller'] 	= 'register';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
