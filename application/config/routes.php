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

//Admin side starts

//$route['default_controller'] = 'auth/login';
$route['default_controller'] = 'Controller_Index';

$route['admin/login'] = 'auth/login';

$route['dashboard'] = 'Dashboard/getFormRequests';

$route['reports/bulkupload'] = 'Controller_Reports/importdata';
//$route['reports/bulkupload'] = 'Controller_Reports/bulkupload';
//$route['reports/bulkupload'] = 'Controller_Reports/uploadFile';

//Admin side Ends

//Customer side starts
 
//$route['cust'] = 'Cust/Controller_Index';
$route['cust'] = 'Controller_Index';

$route['reports'] = 'Cust/Controller_Report/ReportsByCategory';

$route['request-sample/(:any)'] = 'Cust/Controller_Report/sample_request/$1';
$route['custom-research/(:any)'] = 'Cust/Controller_Report/custom_request/$1';
$route['reports/enquiry/(:any)'] = 'Cust/Controller_Report/enquiryform_request/$1';

$route['buy-now/(:any)'] = 'Cust/Controller_Report/buynow/$1';

$route['reports/(:any)'] = 'Cust/Controller_Report/ReportsByCategory/$1';

$route['report/removefaqs'] = 'Controller_Reports/removeFaqs';
$route['report/(:any)'] = 'Cust/Controller_Report/detailsBySlug/$1';



//$route['reports/details/(:any)'] = 'Cust/Controller_Report/details/$1';

//$route['reports/sample/(:any)'] = 'Cust/Controller_Report/sample_request/$1';
//$route['reports/custom/(:any)'] = 'Cust/Controller_Report/custom_request/$1';
//$route['reports/enquiry/(:any)'] = 'Cust/Controller_Report/enquiryform_request/$1';

//$route['reports/(:any)/buynow'] = 'Cust/Controller_Report/buynow/$1';
$route['reports/(:any)/(:any)'] = 'Cust/Controller_Report/details/$1/$2';

// $route['categories'] = 'Cust/Controller_Index/categoriesList';
// $route['category/(:any)'] = 'Cust/Controller_Index/categoriesDetails/$1';

$route['blogs'] = 'Cust/Controller_Blog';
$route['blog/(:any)'] = 'Cust/Controller_Blog/details2/$1';
$route['blogs/(:any)/(:any)'] = 'Cust/Controller_Blog/details/$1/$2';

$route['press-release'] = 'Cust/Controller_PressRelease';
$route['press-release/(:any)'] = 'Cust/Controller_PressRelease/details2/$1';
$route['press-release/(:any)/(:any)'] = 'Cust/Controller_PressRelease/details/$1/$2';

$route['about-us'] = 'Cust/Controller_Index/aboutus';
$route['our-solutions'] = 'Cust/Controller_Index/ourSolutions';
$route['contact-us']['GET'] = 'Cust/Controller_Report/contactus_request';
$route['contact-us']['POST'] = 'Cust/Controller_Report/contactus_request';

$route['privacy-policy'] = 'Cust/Controller_Index/privacyPolicy';
$route['terms-condition'] = 'Cust/Controller_Index/terms';
$route['return-policy'] = 'Cust/Controller_Index/returnPolicy';
$route['disclamer'] = 'Cust/Controller_Index/disclaimer';
$route['faqs'] = 'Cust/Controller_Index/faqs';

$route['search'] = 'Cust/Controller_Index/search';

$route['thank-you'] = 'Cust/Controller_Index/thankyou';


$route['send-email'] = 'Controller_Email';
$route['email'] = 'Controller_Email/send';

//$route[':any'] = "Controller_Index";

//Customer side Ends

$route['404_override'] = 'Controller_Index';
$route['translate_uri_dashes'] = FALSE;


// newly added yuvraj

$route['categories'] = 'Web/categories';
$route['categories/(:any)'] = 'Web/categoryDetails/$1';
$route['categories/(:any)/(:any)'] = 'Web/categoryDetails/$1/$2';
$route['categories/(:any)/(:any)/(:any)'] = 'Web/categoryDetails/$1/$2/$3';