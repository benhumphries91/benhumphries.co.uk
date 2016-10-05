<?php

define('SITE_MODE', 'Test');

if (SITE_MODE == 'Live' ) {
	define('WEB_ROOT', 'www.benhumphries.co.uk/');
} else {
	define('WEB_ROOT', '/Library/WebServer/Documents/benhumphries.co.uk/');
}

define('GEN_EMAIL', 'ben_humphries@hotmail.co.uk');

define('SITE_NAME', 'Ben Humphries.co.uk');

define('JS_VERSION', '0.1.0');
define('CSS_VERSION', '0.1.0');


date_default_timezone_set("Europe/London");

?>