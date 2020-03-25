<?php
/*
Module Name: Synved Form
Description: Forms elements and other utilities
Author: Synved
Version: 1.1.2
Author URI: http://synved.com/
License: GPLv2

LEGAL STATEMENTS

NO WARRANTY
All products, support, services, information and software are provided "as is" without warranty of any kind, express or implied, including, but not limited to, the implied warranties of fitness for a particular purpose, and non-infringement.

NO LIABILITY
In no event shall Synved Ltd. be liable to you or any third party for any direct or indirect, special, incidental, or consequential damages in connection with or arising from errors, omissions, delays or other cause of action that may be attributed to your use of any product, support, services, information or software provided, including, but not limited to, lost profits or lost data, even if Synved Ltd. had been advised of the possibility of such damages.
*/


define('SYNVED_FORM_LOADED', true);
define('SYNVED_FORM_VERSION', 100010002);
define('SYNVED_FORM_VERSION_STRING', '1.1.2');

define('SYNVED_FORM_ADDON_PATH', str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, dirname(__FILE__) . '/addons'));

include_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'synved-form-setup.php');


$synved_form = array();


function synved_form_version()
{
	return SYNVED_FORM_VERSION;
}

function synved_form_version_string()
{
	return SYNVED_FORM_VERSION_STRING;
}

