<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/* basic constant */
define('JS_PATH', 'assets/js/');
define('CSS_PATH', 'assets/css/');
define('IMG_PATH', 'assets/img/');
define('FONT_PATH', 'assets/font/');

/* minifier constant */
define('MINIFY', false);

// define('API_BASE_LINK',							'https://www.apis.imerchant.sg/api/index.php/');
// define('IMERCHANT_API_URL', 'http://192.168.1.5:8888/imerchant/api/index.php/');
define('API_BASE_LINK', 'http://192.168.1.5:8888/imerchant/api/index.php/');
define('SECRET_KEY', 							'1dsagr3ewc7fu5nm7ewa');
define('PLATFORM', 								'web');

define('STATUS_SUCCESS', 						200);
define('ERROR_UNDEFINED', 						"Oops. Something's wrong, please try again later");

/* End of file constants.php */
/* Location: ./application/config/constants.php */